<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

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
        return '/v2/users';
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
        $optionsResolver->setDefined(['registration_after', 'status', 'role', 'tags', 'page', 'cf_$field_name', 'registration_before', 'items_per_page', 'include_suspended']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('registration_after', ['float']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('role', ['string']);
        $optionsResolver->addAllowedTypes('tags', ['string']);
        $optionsResolver->addAllowedTypes('page', ['int']);
        $optionsResolver->addAllowedTypes('cf_$field_name', ['string']);
        $optionsResolver->addAllowedTypes('registration_before', ['float']);
        $optionsResolver->addAllowedTypes('items_per_page', ['int']);
        $optionsResolver->addAllowedTypes('include_suspended', ['string']);
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
        return ['BearerAuth', 'LwClient'];
    }
}
