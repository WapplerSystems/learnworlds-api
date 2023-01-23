<?php

namespace WapplerSystems\LearnWorldsApi\V2\Endpoint;

class GetUsers extends \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\BaseEndpoint implements \WapplerSystems\LearnWorldsApi\V2\Runtime\Client\Endpoint
{
    /**
    * Returns a list with all the users of the school. The users are in sorted order, with the most recently created user appearing first, and the list is paginated, with a default limit of 20 users per page. 
    To refine the list of users, there are a number of query params outlined in the following section; In case more than one Query param is provided, then all of them will be applied (AND operator). 
    *
    * @param array $queryParameters {
    *     @var float $registration_after Filter by registration after the given datetime (expected in UNIX timestamp format)
    *     @var string $status Filter by user status
    *     @var string $role Filter by user role
    *     @var string $tags Filter by tags. For several tag values, a comma separated string can be provided.
    *     @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
    *     @var string $cf_$field_name Filter by custom field. All custom fields start with the cf_ prefix; the "$field_name" part should be replaced by the name of the corresponding custom field. Also, it is possible to use more than one custom fields as filters, using the aforementioned convention.
    *     @var float $registration_before Filter by registration before the given datetime (expected in UNIX timestamp format)
    *     @var int $items_per_page Filter by the items per page number
    *     @var string $include_suspended Filter by include_suspended flag. The default value is false.
    * }
    */
    public function __construct(array $queryParameters = array())
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
        return '/v2/users';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('registration_after', 'status', 'role', 'tags', 'page', 'cf_$field_name', 'registration_before', 'items_per_page', 'include_suspended'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1));
        $optionsResolver->addAllowedTypes('registration_after', array('float'));
        $optionsResolver->addAllowedTypes('status', array('string'));
        $optionsResolver->addAllowedTypes('role', array('string'));
        $optionsResolver->addAllowedTypes('tags', array('string'));
        $optionsResolver->addAllowedTypes('page', array('int'));
        $optionsResolver->addAllowedTypes('cf_$field_name', array('string'));
        $optionsResolver->addAllowedTypes('registration_before', array('float'));
        $optionsResolver->addAllowedTypes('items_per_page', array('int'));
        $optionsResolver->addAllowedTypes('include_suspended', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\WapplerSystems\LearnWorldsApi\V2\Model\V2UsersGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\V2UsersGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'LwClient');
    }
}