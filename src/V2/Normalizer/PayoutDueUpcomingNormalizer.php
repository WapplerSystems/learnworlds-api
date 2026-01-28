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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\V2\Model\PayoutDueUpcoming;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class PayoutDueUpcomingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PayoutDueUpcoming';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof PayoutDueUpcoming;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PayoutDueUpcoming();
        if (array_key_exists('amount', $data) && is_int($data['amount'])) {
            $data['amount'] = (double)$data['amount'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('affiliateId', $data)) {
            $object->setAffiliateId($data['affiliateId']);
            unset($data['affiliateId']);
        }
        if (array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (array_key_exists('paymentMethod', $data)) {
            $object->setPaymentMethod($data['paymentMethod']);
            unset($data['paymentMethod']);
        }
        if (array_key_exists('paymentNotes', $data)) {
            $object->setPaymentNotes($data['paymentNotes']);
            unset($data['paymentNotes']);
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
     */
    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('affiliateId') && null !== $object->getAffiliateId()) {
            $data['affiliateId'] = $object->getAffiliateId();
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [PayoutDueUpcoming::class => false];
    }
}
