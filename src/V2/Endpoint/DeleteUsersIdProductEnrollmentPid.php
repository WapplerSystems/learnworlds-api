<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class DeleteUsersIdProductEnrollmentPid extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint
{
    protected $id;

    /**
     * Unenroll user from a product specified by the provided product id
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentDeleteBody $requestBody
     */
    public function __construct(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentDeleteBody $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }

    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/users/{id}/enrollment');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentDeleteBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (204 === $status) {
            return null;
        }
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'LwClient'];
    }
}
