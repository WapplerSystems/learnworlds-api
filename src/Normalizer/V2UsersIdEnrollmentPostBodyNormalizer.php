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
use WapplerSystems\LearnWorldsApi\Model\V2UsersIdEnrollmentPostBody;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;
use function is_int;

class V2UsersIdEnrollmentPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\V2UsersIdEnrollmentPostBody';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\V2UsersIdEnrollmentPostBody';
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
        $object = new V2UsersIdEnrollmentPostBody();
        if (array_key_exists('price', $data) && is_int($data['price'])) {
            $data['price'] = (double)$data['price'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('productId', $data)) {
            $object->setProductId($data['productId']);
            unset($data['productId']);
        }
        if (array_key_exists('productType', $data)) {
            $object->setProductType($data['productType']);
            unset($data['productType']);
        }
        if (array_key_exists('justification', $data)) {
            $object->setJustification($data['justification']);
            unset($data['justification']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (array_key_exists('duration_type', $data)) {
            $object->setDurationType($data['duration_type']);
            unset($data['duration_type']);
        }
        if (array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
            unset($data['duration']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value;
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
        $data['productId'] = $object->getProductId();
        $data['productType'] = $object->getProductType();
        if ($object->isInitialized('justification') && null !== $object->getJustification()) {
            $data['justification'] = $object->getJustification();
        }
        $data['price'] = $object->getPrice();
        if ($object->isInitialized('durationType') && null !== $object->getDurationType()) {
            $data['duration_type'] = $object->getDurationType();
        }
        if ($object->isInitialized('duration') && null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
