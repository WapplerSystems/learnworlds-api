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
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostBody;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;
use function is_int;
use WapplerSystems\LearnWorldsApi\Model\V2PromotionsPostBodyProductsItem;

class V2PromotionsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\V2PromotionsPostBody';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\V2PromotionsPostBody';
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
        $object = new V2PromotionsPostBody();
        if (array_key_exists('value', $data) && is_int($data['value'])) {
            $data['value'] = (double)$data['value'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('value', $data)) {
            $object->setValue($data['value']);
            unset($data['value']);
        }
        if (array_key_exists('applies_to_all', $data)) {
            $values = [];
            foreach ($data['applies_to_all'] as $value) {
                $values[] = $value;
            }
            $object->setAppliesToAll($values);
            unset($data['applies_to_all']);
        }
        if (array_key_exists('products', $data)) {
            $values_1 = [];
            foreach ($data['products'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, V2PromotionsPostBodyProductsItem::class, 'json', $context);
            }
            $object->setProducts($values_1);
            unset($data['products']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value_2;
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
        $data['name'] = $object->getName();
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('value') && null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if ($object->isInitialized('appliesToAll') && null !== $object->getAppliesToAll()) {
            $values = [];
            foreach ($object->getAppliesToAll() as $value) {
                $values[] = $value;
            }
            $data['applies_to_all'] = $values;
        }
        if ($object->isInitialized('products') && null !== $object->getProducts()) {
            $values_1 = [];
            foreach ($object->getProducts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['products'] = $values_1;
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
}
