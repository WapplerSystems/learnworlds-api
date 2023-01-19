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
use WapplerSystems\LearnWorldsApi\Model\CouponUsage;
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class GetCouponRedemptions extends BaseEndpoint
{
    protected $pid;
    protected $cid;

    /**
     * Returns information about the coupon specified by the provided promotion id and coupon code. More specifically, the coupon usage details are listed along with the asocciated payments.The payments are in sorted order, with the most recently created payment appearing first, and the list is paginated, with a limit of 50 payments per page.
     *
     * @param string $pid Promotion Id
     * @param string $cid Coupon code
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @var int $page Filter by the page number. In case page number is higher than the maximum one, the results of last page will be returned
     * }
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function __construct(string $pid, string $cid, array $queryParameters = [], array $headerParameters = [])
    {
        $this->pid = $pid;
        $this->cid = $cid;
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
        return str_replace(['{pid}', '{cid}'], [$this->pid, $this->cid], '/v2/promotions/{pid}/coupons/{cid}/usage');
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
        $optionsResolver->setDefined(['page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['page' => 1]);
        $optionsResolver->addAllowedTypes('page', ['int']);
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
     * @return null|CouponUsage
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (is_null($contentType) === false && (200 === $status && str_contains($contentType, 'application/json'))) {
            return $serializer->deserialize($body, CouponUsage::class, 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
