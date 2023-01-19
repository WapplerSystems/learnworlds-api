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
use WapplerSystems\LearnWorldsApi\Runtime\Client\BaseEndpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\Endpoint;
use WapplerSystems\LearnWorldsApi\Runtime\Client\EndpointTrait;

class DeleteCertificatesId extends BaseEndpoint
{
    protected $id;

    /**
     * Deletes the certificate specified by the provided certificate id.
     *
     * @param string $id Certificate Id
     * @param array $headerParameters {
     * @var string $Authorization The Bearer token
     * @var string $Lw-Client The school Client ID
     * }
     */
    public function __construct(string $id, array $headerParameters = [])
    {
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }

    use EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/v2/certificates/{id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
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
     * @return null
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string)$response->getBody();
        if (204 === $status) {
            return null;
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
