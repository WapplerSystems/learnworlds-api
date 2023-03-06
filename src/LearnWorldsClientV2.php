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
     * @param string $email
     * @param string $password
     * @param $httpClient
     * @throws ClientExceptionInterface
     */
    public static function createAuthorized(string $school, string $clientId, string $clientSecret, $httpClient = null): Client
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

        if ($response->getStatusCode() !== 200) {
            // throw exception
        }

        $authData = json_decode((string) $response->getBody()->getContents(), null, 512, JSON_THROW_ON_ERROR);
        $accessToken = $authData->tokenData->access_token;

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
