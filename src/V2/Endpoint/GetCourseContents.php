<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class GetCourseContents extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Returns the contents of the course specified by the provided course id. Includes sections and learning activities.
     *
     * @param string $id Course title Id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{id}'], [$this->id], '/v2/courses/{id}/contents');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\CourseContent
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\CourseContent', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['BearerAuth', 'LwClient'];
    }
}
