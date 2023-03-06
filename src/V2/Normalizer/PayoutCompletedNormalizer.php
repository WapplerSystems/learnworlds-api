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

class PayoutCompletedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PayoutCompleted';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PayoutCompleted';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\PayoutCompleted();
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double) $data['amount'];
        }
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double) $data['created'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('paymentMethod', $data)) {
            $object->setPaymentMethod($data['paymentMethod']);
            unset($data['paymentMethod']);
        }
        if (\array_key_exists('paymentNotes', $data)) {
            $object->setPaymentNotes($data['paymentNotes']);
            unset($data['paymentNotes']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('payments', $data)) {
            $values = [];
            foreach ($data['payments'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Payment', 'json', $context);
            }
            $object->setPayments($values);
            unset($data['payments']);
        }
        if (\array_key_exists('completedBy', $data)) {
            $object->setCompletedBy($this->denormalizer->denormalize($data['completedBy'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PayoutCompletedCompletedBy', 'json', $context));
            unset($data['completedBy']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
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
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('paymentMethod') && null !== $object->getPaymentMethod()) {
            $data['paymentMethod'] = $object->getPaymentMethod();
        }
        if ($object->isInitialized('paymentNotes') && null !== $object->getPaymentNotes()) {
            $data['paymentNotes'] = $object->getPaymentNotes();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('payments') && null !== $object->getPayments()) {
            $values = [];
            foreach ($object->getPayments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['payments'] = $values;
        }
        if ($object->isInitialized('completedBy') && null !== $object->getCompletedBy()) {
            $data['completedBy'] = $this->normalizer->normalize($object->getCompletedBy(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
