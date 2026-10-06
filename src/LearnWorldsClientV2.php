<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientExceptionInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;
use WapplerSystems\LearnWorldsApi\V2\Authentication\BearerAuthAuthentication;
use WapplerSystems\LearnWorldsApi\V2\Authentication\LwClientAuthentication;
use WapplerSystems\LearnWorldsApi\V2\Client;
use WapplerSystems\LearnWorldsApi\V2\Normalizer\JaneObjectNormalizer;

class LearnWorldsClientV2 extends Client
{
    protected static string $refreshToken;

    /**
     * Fetches an access token and builds a client with it.
     *
     * Every call creates a new token at LearnWorlds, and a token stays valid for
     * a year: callers that run repeatedly (schedulers, queue workers) should
     * keep the token from requestAccessToken() and use createWithAccessToken()
     * instead, or the school's token list grows without bound.
     *
     * @param null $httpClient
     * @throws ClientExceptionInterface
     * @throws \JsonException
     */
    public static function createAuthorized(string $school, string $clientId, string $clientSecret, $httpClient = null): Client
    {
        $token = self::requestAccessToken($school, $clientId, $clientSecret, $httpClient);

        return self::createWithAccessToken($school, $clientId, $token['token'], $httpClient);
    }

    /**
     * Requests a new access token (client credentials grant).
     *
     * @param null $httpClient
     * @return array{token: string, expiresAt: int} expiresAt as unix timestamp;
     *         one year from now when the response carries no expires_in
     * @throws ClientExceptionInterface
     * @throws \JsonException
     * @throws \RuntimeException when LearnWorlds does not hand out a token
     */
    public static function requestAccessToken(string $school, string $clientId, string $clientSecret, $httpClient = null): array
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $data = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'grant_type' => 'client_credentials',
        ];

        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://' . $school . '/admin/api/oauth2/access_token');

        $request = Psr17FactoryDiscovery::findRequestFactory()->createRequest('POST', $uri)
            ->withHeader('Content-Type', 'application/json')
            ->withHeader('Lw-Client', $clientId)
            ->withBody(Psr17FactoryDiscovery::findStreamFactory()->createStream(json_encode($data, JSON_THROW_ON_ERROR)));

        $response = $httpClient->sendRequest($request);
        $body = (string)$response->getBody();

        if ($response->getStatusCode() !== 200) {
            throw new \RuntimeException(sprintf(
                'LearnWorlds %s refused the access token request: HTTP %d %s',
                $school,
                $response->getStatusCode(),
                substr(trim($body), 0, 200)
            ), 1791360001);
        }

        $authData = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        $accessToken = (string)($authData['tokenData']['access_token'] ?? '');
        if ($accessToken === '') {
            throw new \RuntimeException(sprintf('LearnWorlds %s answered without an access token', $school), 1791360002);
        }
        $expiresIn = (int)($authData['tokenData']['expires_in'] ?? 0);

        return [
            'token' => $accessToken,
            'expiresAt' => time() + ($expiresIn > 0 ? $expiresIn : 365 * 86400),
        ];
    }

    /**
     * Builds a client around an access token obtained earlier.
     *
     * @param null $httpClient
     */
    public static function createWithAccessToken(string $school, string $clientId, string $accessToken, $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $authenticationRegistry = new AuthenticationRegistry([new BearerAuthAuthentication($accessToken), new LwClientAuthentication($clientId)]);

        $additionalPlugins = [$authenticationRegistry];
        $additionalNormalizers = [];

        $plugins = [];
        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://' . $school . '/admin/api');
        $plugins[] = new AddHostPlugin($uri);
        $plugins[] = new AddPathPlugin($uri);
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }

        $httpClient = new PluginClient($httpClient, $plugins);

        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new ArrayDenormalizer(), new JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }

        $serializer = new Serializer($normalizers, [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }

    public function refresh()
    {
    }
}
