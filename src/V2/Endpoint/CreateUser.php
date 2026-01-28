<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class CreateUser extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint
{
    /**
     * Creates a new user. The endpoint response is the created User resource.
     *
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel $requestBody
     */
    public function __construct(?\WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel $requestBody = null)
    {
        $this->body = $requestBody;
    }

    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/v2/users';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\User
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\User', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'LwClient'];
    }
}
