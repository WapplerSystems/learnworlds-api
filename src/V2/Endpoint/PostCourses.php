<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class PostCourses extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    /**
     * Creates a new course. The endpoint response is the created Course resource.
     *
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody $requestBody
     * @param array $headerParameters {
     *     @var string $Accept application/json
     * }
     */
    public function __construct(?\WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v2/courses';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Course
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Course', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['BearerAuth', 'LwClient'];
    }
}
