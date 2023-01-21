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
use WapplerSystems\LearnWorldsApi\Authentication\BearerAuthAuthentication;
use WapplerSystems\LearnWorldsApi\Authentication\LwClientAuthentication;
use WapplerSystems\LearnWorldsApi\Normalizer\JaneObjectNormalizer;

class LearnWorldsClient extends Client
{
    protected static string $refreshToken;

    /**
     * @param string $school
     * @param string $clientId
     * @param string $clientSecret
     * @param string $email
     * @param string $password
     * @param $httpClient
     * @return Client
     * @throws ClientExceptionInterface
     */
    public static function createAuthorized(string $school, string $clientId, string $clientSecret, string $email, string $password, $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $data = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'grant_type' => 'password',
            'email' => $email,
            'password' => $password,
        ];

        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://' . $school . '/admin/api/oauth2/access_token');

        $request = Psr17FactoryDiscovery::findRequestFactory()->createRequest('POST', $uri)
            ->withHeader('Content-Type', 'application/json')
            ->withHeader('Lw-Client', $clientId)
            ->withBody(Psr17FactoryDiscovery::findStreamFactory()->createStream(json_encode($data)));

        $response = $httpClient->sendRequest($request);

        if ($response->getStatusCode() !== 200) {
            // throw exception
        }

        $authData = json_decode($response->getBody()->getContents());
        $accessToken = $authData->tokenData->access_token;
        echo $accessToken . "\n";
        //$refreshToken = $authData['tokenData']['refresh_token'];
        self::$refreshToken = $authData->tokenData->refresh_token;

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
