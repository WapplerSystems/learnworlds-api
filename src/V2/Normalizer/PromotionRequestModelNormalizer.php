<?php

/*
 * This file is part of the package wapplersystems/learnworlds-api.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WapplerSystems\LearnWorldsApi\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;

class PromotionRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PromotionRequestModel';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PromotionRequestModel';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\PromotionRequestModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('coupons', $data)) {
            $values = [];
            foreach ($data['coupons'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PromotionRequestModelCouponsItem', 'json', $context);
            }
            $object->setCoupons($values);
            unset($data['coupons']);
        }
        if (\array_key_exists('product_ids', $data)) {
            $values_1 = [];
            foreach ($data['product_ids'] as $value_1) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setProductIds($values_1);
            unset($data['product_ids']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (\array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
            unset($data['access']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string)$key_1)) {
                $object[$key_1] = $value_3;
            }
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['name'] = $object->getName();
        if ($object->isInitialized('coupons') && null !== $object->getCoupons()) {
            $values = [];
            foreach ($object->getCoupons() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['coupons'] = $values;
        }
        if ($object->isInitialized('productIds') && null !== $object->getProductIds()) {
            $values_1 = [];
            foreach ($object->getProductIds() as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $key => $value_2) {
                    $values_2[$key] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $data['product_ids'] = $values_1;
        }
        $data['type'] = $object->getType();
        $data['value'] = $object->getValue();
        $data['access'] = $object->getAccess();
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string)$key_1)) {
                $data[$key_1] = $value_3;
            }
        }
        return $data;
    }
}
