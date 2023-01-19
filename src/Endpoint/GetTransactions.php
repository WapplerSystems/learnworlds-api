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
use WapplerSystems\LearnWorldsApi\Model\V2PaymentsGetResponse200;
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class GetTransactions extends BaseEndpoint
{
    /**
     * Returns a list with all the payments. The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a default limit of 50 payments per page. To refine the list of payments, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator).
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @var string $product_type Filter by product type
     * @var string $user_id Filter by user id or email (encoded string)
     * @var string $affiliate_id Filter by affiliate id or email (encoded string)
     * @var string $product_id Filter by product id
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * @var int $items_per_page Filter by the items per page number
     * }
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
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
        return '/v2/payments';
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
        $optionsResolver->setDefined(['product_type', 'user_id', 'affiliate_id', 'product_id', 'page', 'items_per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('product_type', ['string']);
        $optionsResolver->addAllowedTypes('user_id', ['string']);
        $optionsResolver->addAllowedTypes('affiliate_id', ['string']);
        $optionsResolver->addAllowedTypes('product_id', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('items_per_page', ['int']);
        return $optionsResolver;
    }

    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Authorization', 'Lw-Client']);
        $optionsResolver->setRequired(['Authorization', 'Lw-Client']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Authorization', ['string']);
        $optionsResolver->addAllowedTypes('Lw-Client', ['string']);
        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|V2PaymentsGetResponse200
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (200 === $status && str_contains($contentType, 'application/json'))) {
            return $serializer->deserialize($body, V2PaymentsGetResponse200::class, 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
