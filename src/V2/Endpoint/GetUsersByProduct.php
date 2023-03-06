<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class GetUsersByProduct extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    /**
     * Retrieves all the users with access to the product specified by the provided product id. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a limit of 20 users per page.
     *
     * @param array $queryParameters {
     *     @var string $product_id Filter by product title Id
     *     @var string $product_type Filter by product type
     *     @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v2/users/by-product';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['product_id', 'product_type', 'page']);
        $optionsResolver->setRequired(['product_id', 'product_type']);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('product_id', ['string']);
        $optionsResolver->addAllowedTypes('product_type', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersByProductGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\V2UsersByProductGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['BearerAuth', 'LwClient'];
    }
}
