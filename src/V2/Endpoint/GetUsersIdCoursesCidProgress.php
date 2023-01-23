<?php

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class GetUsersIdCoursesCidProgress extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    protected $id;
    protected $cid;
    /**
     * Returns information about the user progress for the user and course specified by the provided user id and course id. The result also includes the breakdown of user progress data per learning activity.
     *
     * @param string $id User Id or email (encoded string)
     * @param string $cid Course title Id
     */
    public function __construct(string $id, string $cid)
    {
        $this->id = $id;
        $this->cid = $cid;
    }
    use \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}', '{cid}'), array($this->id, $this->cid), '/v2/users/{id}/courses/{cid}/progress');
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
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\UserProgress
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserProgress', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'LwClient');
    }
}