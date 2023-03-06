<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class PostPromotionsPidCoupons extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    protected $pid;
    /**
     * Creates a coupon for the promotion specified by the provided promotion id. The endpoint response is the created coupon resource.
     *
     * @param string $pid Promotion Id
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsPostBody $requestBody
     * @param array $headerParameters {
     *     @var string $Content-Type application/json
     * }
     */
    public function __construct(string $pid, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsPostBody $requestBody = null, array $headerParameters = [])
    {
        $this->pid = $pid;
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
        return str_replace(['{pid}'], [$this->pid], '/v2/promotions/{pid}/coupons');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsPidCouponsPostBody) {
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
        $optionsResolver->setDefined(['Content-Type']);
        $optionsResolver->setRequired(['Content-Type']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('Content-Type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Coupon
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Coupon', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['BearerAuth', 'LwClient'];
    }
}
