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
use WapplerSystems\LearnWorldsApi\Model\V2CoursesIdGradesGetResponse200;
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class GetV2CoursesIdGrades extends BaseEndpoint
{
    protected $id;

    /**
     * Retrieves the grades of all enrolled users in the course specified by the provided course id. The list is paginated with a limit of 20 grades per page.
     *
     * @param string $id Unique identifier of the course
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @var string $learningUnits Filter by learning unit ids. For several id values, a comma separated string can be provided.
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $users Filter by user ids. For several id values, a comma separated string can be provided
     * @var string $Lw-Client The school Client ID
     * @var string $Authorization The Bearer token
     * }
     */
    public function __construct(string $id, array $queryParameters = [], array $headerParameters = [])
    {
        $this->id = $id;
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
        return str_replace(['{id}'], [$this->id], '/v2/courses/{id}/grades');
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
        $optionsResolver->setDefined(['users', 'learningUnits', 'page', 'items_per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('users', ['string']);
        $optionsResolver->addAllowedTypes('learningUnits', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('items_per_page', ['int']);
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
     * @return null|V2CoursesIdGradesGetResponse200
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (200 === $status && str_contains($contentType, 'application/json'))) {
            return $serializer->deserialize($body, V2CoursesIdGradesGetResponse200::class, 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}