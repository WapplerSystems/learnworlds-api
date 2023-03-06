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

class SubscriptionPlanNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\SubscriptionPlan';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\SubscriptionPlan';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\SubscriptionPlan();
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double) $data['created'];
        }
        if (\array_key_exists('modified', $data) && \is_int($data['modified'])) {
            $data['modified'] = (double) $data['modified'];
        }
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double) $data['price'];
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
        if (\array_key_exists('stripePlanId', $data)) {
            $object->setStripePlanId($data['stripePlanId']);
            unset($data['stripePlanId']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('products', $data)) {
            $object->setProducts($this->denormalizer->denormalize($data['products'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\SubscriptionPlanProducts', 'json', $context));
            unset($data['products']);
        }
        if (\array_key_exists('image', $data)) {
            $object->setImage($data['image']);
            unset($data['image']);
        }
        if (\array_key_exists('interval', $data)) {
            $object->setInterval($data['interval']);
            unset($data['interval']);
        }
        if (\array_key_exists('interval_type', $data)) {
            $object->setIntervalType($data['interval_type']);
            unset($data['interval_type']);
        }
        if (\array_key_exists('trial_period_days', $data)) {
            $object->setTrialPeriodDays($data['trial_period_days']);
            unset($data['trial_period_days']);
        }
        if (\array_key_exists('afterPurchase', $data)) {
            $object->setAfterPurchase($this->denormalizer->denormalize($data['afterPurchase'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\SubscriptionPlanAfterPurchase', 'json', $context));
            unset($data['afterPurchase']);
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
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('stripePlanId') && null !== $object->getStripePlanId()) {
            $data['stripePlanId'] = $object->getStripePlanId();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('products') && null !== $object->getProducts()) {
            $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
        }
        if ($object->isInitialized('image') && null !== $object->getImage()) {
            $data['image'] = $object->getImage();
        }
        if ($object->isInitialized('interval') && null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if ($object->isInitialized('intervalType') && null !== $object->getIntervalType()) {
            $data['interval_type'] = $object->getIntervalType();
        }
        if ($object->isInitialized('trialPeriodDays') && null !== $object->getTrialPeriodDays()) {
            $data['trial_period_days'] = $object->getTrialPeriodDays();
        }
        if ($object->isInitialized('afterPurchase') && null !== $object->getAfterPurchase()) {
            $data['afterPurchase'] = $this->normalizer->normalize($object->getAfterPurchase(), 'json', $context);
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
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
