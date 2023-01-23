<?php

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class PostPromotionsIdCouponsBulk extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Bulk create coupons in a promotion. The endpoint response is an array with the created coupon resources.
     *
     * @param string $id Promotion id
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsIdCouponsBulkPostBody $requestBody 
     */
    public function __construct(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsIdCouponsBulkPostBody $requestBody = null)
    {
        $this->id = $id;
        $this->body = $requestBody;
    }
    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v2/promotions/{id}/coupons-bulk');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \WapplerSystems\LearnWorldsApi\V2\Model\V2PromotionsIdCouponsBulkPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\Coupon[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Coupon[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'LwClient');
    }
}