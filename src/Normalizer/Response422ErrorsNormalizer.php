<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\Model\Response422Errors;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;
use WapplerSystems\LearnWorldsApi\Model\Response422ErrorsCompanyItem;

class Response422ErrorsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\Response422Errors';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\Response422Errors';
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Response422Errors();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('company', $data)) {
            $values = [];
            foreach ($data['company'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, Response422ErrorsCompanyItem::class, 'json', $context);
            }
            $object->setCompany($values);
            unset($data['company']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $values = [];
            foreach ($object->getCompany() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['company'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}