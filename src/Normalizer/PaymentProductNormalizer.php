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
use WapplerSystems\LearnWorldsApi\Model\PaymentProduct;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;
use function is_int;

class PaymentProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\PaymentProduct';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\PaymentProduct';
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
        $object = new PaymentProduct();
        if (array_key_exists('original_price', $data) && is_int($data['original_price'])) {
            $data['original_price'] = (double)$data['original_price'];
        }
        if (array_key_exists('discount_price', $data) && is_int($data['discount_price'])) {
            $data['discount_price'] = (double)$data['discount_price'];
        }
        if (array_key_exists('final_price', $data) && is_int($data['final_price'])) {
            $data['final_price'] = (double)$data['final_price'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (array_key_exists('image', $data)) {
            $object->setImage($data['image']);
            unset($data['image']);
        }
        if (array_key_exists('trial_days', $data)) {
            $object->setTrialDays($data['trial_days']);
            unset($data['trial_days']);
        }
        if (array_key_exists('original_price', $data)) {
            $object->setOriginalPrice($data['original_price']);
            unset($data['original_price']);
        }
        if (array_key_exists('discount_price', $data)) {
            $object->setDiscountPrice($data['discount_price']);
            unset($data['discount_price']);
        }
        if (array_key_exists('final_price', $data)) {
            $object->setFinalPrice($data['final_price']);
            unset($data['final_price']);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('image') && null !== $object->getImage()) {
            $data['image'] = $object->getImage();
        }
        if ($object->isInitialized('trialDays') && null !== $object->getTrialDays()) {
            $data['trial_days'] = $object->getTrialDays();
        }
        if ($object->isInitialized('originalPrice') && null !== $object->getOriginalPrice()) {
            $data['original_price'] = $object->getOriginalPrice();
        }
        if ($object->isInitialized('discountPrice') && null !== $object->getDiscountPrice()) {
            $data['discount_price'] = $object->getDiscountPrice();
        }
        if ($object->isInitialized('finalPrice') && null !== $object->getFinalPrice()) {
            $data['final_price'] = $object->getFinalPrice();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
