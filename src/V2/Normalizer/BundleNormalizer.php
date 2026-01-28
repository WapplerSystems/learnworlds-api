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

class BundleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Bundle';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Bundle';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Bundle();
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double)$data['created'];
        }
        if (\array_key_exists('modified', $data) && \is_int($data['modified'])) {
            $data['modified'] = (double)$data['modified'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double)$data['price'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('products', $data)) {
            $object->setProducts($this->denormalizer->denormalize($data['products'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\BundleProducts', 'json', $context));
            unset($data['products']);
        }
        if (\array_key_exists('image', $data)) {
            $object->setImage($data['image']);
            unset($data['image']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
            unset($data['access']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('modified', $data)) {
            $object->setModified($data['modified']);
            unset($data['modified']);
        }
        if (\array_key_exists('afterPurchase', $data)) {
            $object->setAfterPurchase($this->denormalizer->denormalize($data['afterPurchase'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\BundleAfterPurchase', 'json', $context));
            unset($data['afterPurchase']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (\array_key_exists('paymentPlans', $data)) {
            $values = [];
            foreach ($data['paymentPlans'] as $value) {
                $values[] = $value;
            }
            $object->setPaymentPlans($values);
            unset($data['paymentPlans']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('products') && null !== $object->getProducts()) {
            $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
        }
        if ($object->isInitialized('image') && null !== $object->getImage()) {
            $data['image'] = $object->getImage();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('access') && null !== $object->getAccess()) {
            $data['access'] = $object->getAccess();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('modified') && null !== $object->getModified()) {
            $data['modified'] = $object->getModified();
        }
        if ($object->isInitialized('afterPurchase') && null !== $object->getAfterPurchase()) {
            $data['afterPurchase'] = $this->normalizer->normalize($object->getAfterPurchase(), 'json', $context);
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('paymentPlans') && null !== $object->getPaymentPlans()) {
            $values = [];
            foreach ($object->getPaymentPlans() as $value) {
                $values[] = $value;
            }
            $data['paymentPlans'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
