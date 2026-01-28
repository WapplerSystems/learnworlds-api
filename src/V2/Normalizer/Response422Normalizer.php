<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\V2\Model\Response422;
use WapplerSystems\LearnWorldsApi\V2\Model\Response422Errors;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class Response422Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Response422';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof Response422;
    }

    /**
     * @return mixed
     * @throws ExceptionInterface
     */
    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Response422();
        if (array_key_exists('statusCode', $data) && is_int($data['statusCode'])) {
            $data['statusCode'] = (double)$data['statusCode'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('statusCode', $data)) {
            $object->setStatusCode($data['statusCode']);
            unset($data['statusCode']);
        }
        if (array_key_exists('error', $data)) {
            $object->setError($data['error']);
            unset($data['error']);
        }
        if (array_key_exists('message', $data)) {
            $object->setMessage($data['message']);
            unset($data['message']);
        }
        if (array_key_exists('errors', $data)) {
            $object->setErrors($this->denormalizer->denormalize($data['errors'], Response422Errors::class, 'json', $context));
            unset($data['errors']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     * @throws ExceptionInterface
     */
    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('statusCode') && null !== $object->getStatusCode()) {
            $data['statusCode'] = $object->getStatusCode();
        }
        if ($object->isInitialized('error') && null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if ($object->isInitialized('message') && null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        if ($object->isInitialized('errors') && null !== $object->getErrors()) {
            $data['errors'] = $this->normalizer->normalize($object->getErrors(), 'json', $context);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [Response422::class => false];
    }
}
