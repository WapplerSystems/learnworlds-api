<?php

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class PostUsersIdProductEnrollmentPid extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Enroll user to product, regarding course, bundle, manual subscription 
     *
     * @param string $id User Id or email (encoded string)
     * @param null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostBody $requestBody 
     */
    public function __construct(string $id, ?\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostBody $requestBody = null)
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
        return str_replace(array('{id}'), array($this->id), '/v2/users/{id}/enrollment');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostBody) {
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
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersIdEnrollmentPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\V2UsersIdEnrollmentPostResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'LwClient');
    }
}