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

class PromotionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Promotion';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Promotion';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Promotion();
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (double)$data['value'];
        }
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double)$data['created'];
        }
        if (\array_key_exists('modified', $data) && \is_int($data['modified'])) {
            $data['modified'] = (double)$data['modified'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('coupons', $data)) {
            $values = [];
            foreach ($data['coupons'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Coupon', 'json', $context);
            }
            $object->setCoupons($values);
            unset($data['coupons']);
        }
        if (\array_key_exists('applies_to_all', $data)) {
            $values_1 = [];
            foreach ($data['applies_to_all'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAppliesToAll($values_1);
            unset($data['applies_to_all']);
        }
        if (\array_key_exists('products', $data)) {
            $values_2 = [];
            foreach ($data['products'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PromotionProductsItem', 'json', $context);
            }
            $object->setProducts($values_2);
            unset($data['products']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('modified', $data)) {
            $object->setModified($data['modified']);
            unset($data['modified']);
        }
        foreach ($data as $key => $value_3) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value_3;
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('coupons') && null !== $object->getCoupons()) {
            $values = [];
            foreach ($object->getCoupons() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['coupons'] = $values;
        }
        if ($object->isInitialized('appliesToAll') && null !== $object->getAppliesToAll()) {
            $values_1 = [];
            foreach ($object->getAppliesToAll() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['applies_to_all'] = $values_1;
        }
        if ($object->isInitialized('products') && null !== $object->getProducts()) {
            $values_2 = [];
            foreach ($object->getProducts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['products'] = $values_2;
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('value') && null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('modified') && null !== $object->getModified()) {
            $data['modified'] = $object->getModified();
        }
        foreach ($object as $key => $value_3) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_3;
            }
        }
        return $data;
    }
}
