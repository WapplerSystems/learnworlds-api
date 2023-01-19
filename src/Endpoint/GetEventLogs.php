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
use WapplerSystems\LearnWorldsApi\Model\V2EventLogsGetResponse200;
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class GetEventLogs extends BaseEndpoint
{
    /**
     * Returns a list with all event logs of the school. The list is paginated, with a limit of 50 event logs per page. To refine the list of event logs, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @var string $user_id Filter by user id or email (encoded string)
     * @var string $activity Filter by activity name. If no activity is selected all will be applied.
     * @var string $created_after Filter by event log creation after the given datetime (expected in UNIX timestamp format)
     * @var string $created_before Filter by event log creation before the given datetime (expected in UNIX timestamp format)
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var string $sort Sort by creation timestamp in ascending or descending order.
     * }
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
        return '/v2/event-logs';
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
        $optionsResolver->setDefined(['user_id', 'activity', 'created_after', 'created_before', 'page', 'sort']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1, 'sort' => 'desc']);
        $optionsResolver->addAllowedTypes('user_id', ['string']);
        $optionsResolver->addAllowedTypes('activity', ['string']);
        $optionsResolver->addAllowedTypes('created_after', ['string']);
        $optionsResolver->addAllowedTypes('created_before', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('sort', ['string']);
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
     * @return null|V2EventLogsGetResponse200
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (200 === $status && str_contains($contentType, 'application/json'))) {
            return $serializer->deserialize($body, V2EventLogsGetResponse200::class, 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
