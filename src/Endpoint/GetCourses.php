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
use WapplerSystems\LearnWorldsApi\Model\V2CoursesGetResponse200;
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class GetCourses extends BaseEndpoint
{
    /**
     * Returns a list of all courses of the school. The courses are in sorted order, with the most recently created course appearing first, and the list is paginated, with a limit of 50 courses per page.
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $categories Comma seperated names of categories
     * @var string $Lw-Client The school Client ID
     * @var string $Authorization The Bearer token
     * }
     */
    public function __construct(array $queryParameters = [], array $headerParameters = [])
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/v2/courses';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['categories', 'page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('categories', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Lw-Client', 'Authorization']);
        $optionsResolver->setRequired(['Lw-Client', 'Authorization']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Lw-Client', ['string']);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|V2CoursesGetResponse200
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (200 === $status && str_contains($contentType, 'application/json'))) {
            return $serializer->deserialize($body, V2CoursesGetResponse200::class, 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
