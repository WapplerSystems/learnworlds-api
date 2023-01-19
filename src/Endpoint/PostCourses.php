<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Endpoint;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;
use WapplerSystems\LearnWorldsApi\Model\Course;
use WapplerSystems\LearnWorldsApi\Model\V2CoursesPostBody;
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class PostCourses extends BaseEndpoint
{
    /**
     * Creates a new course. The endpoint response is the created Course resource.
     *
     * @param null|V2CoursesPostBody $requestBody
     * @param array $headerParameters {
     * @var string $Accept application/json
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function __construct(?V2CoursesPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/v2/courses';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof V2CoursesPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept', 'Authorization', 'Lw-Client']);
        $optionsResolver->setRequired(['Authorization', 'Lw-Client']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Accept', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        $optionsResolver->addAllowedTypes('Lw-Client', ['string']);
        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|Course
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (201 === $status && str_contains($contentType, 'application/json'))) {
            return $serializer->deserialize($body, Course::class, 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}