<?php

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class GetAffiliatesIdPayoutsCompleted extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Returns a list with all the completed payouts related to the provided affiliate. The payouts are in sorted order, with the most recently created payouts appearing first, and the list is paginated, with a limit of 20 payouts per page.
     *
     * @param string $id Affiliate Id or email (encoded string)
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
        return str_replace(array('{id}'), array($this->id), '/v2/affiliates/{id}/payouts/completed');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
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
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2AffiliatesIdPayoutsCompletedGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\V2AffiliatesIdPayoutsCompletedGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'LwClient');
    }
}