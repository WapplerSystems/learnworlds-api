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

class AffiliateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Affiliate';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Affiliate';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Affiliate();
        if (\array_key_exists('date', $data) && \is_int($data['date'])) {
            $data['date'] = (double)$data['date'];
        }
        if (\array_key_exists('sales', $data) && \is_int($data['sales'])) {
            $data['sales'] = (double)$data['sales'];
        }
        if (\array_key_exists('commissions', $data) && \is_int($data['commissions'])) {
            $data['commissions'] = (double)$data['commissions'];
        }
        if (\array_key_exists('customers', $data) && \is_int($data['customers'])) {
            $data['customers'] = (double)$data['customers'];
        }
        if (\array_key_exists('payouts', $data) && \is_int($data['payouts'])) {
            $data['payouts'] = (double)$data['payouts'];
        }
        if (\array_key_exists('pending', $data) && \is_int($data['pending'])) {
            $data['pending'] = (double)$data['pending'];
        }
        if (\array_key_exists('due', $data) && \is_int($data['due'])) {
            $data['due'] = (double)$data['due'];
        }
        if (\array_key_exists('commission_percentage', $data) && \is_int($data['commission_percentage'])) {
            $data['commission_percentage'] = (double)$data['commission_percentage'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        if (\array_key_exists('code', $data)) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        if (\array_key_exists('paymentMethod', $data)) {
            $object->setPaymentMethod($data['paymentMethod']);
            unset($data['paymentMethod']);
        }
        if (\array_key_exists('paymentNotes', $data)) {
            $object->setPaymentNotes($data['paymentNotes']);
            unset($data['paymentNotes']);
        }
        if (\array_key_exists('date', $data)) {
            $object->setDate($data['date']);
            unset($data['date']);
        }
        if (\array_key_exists('clicks', $data)) {
            $object->setClicks($data['clicks']);
            unset($data['clicks']);
        }
        if (\array_key_exists('sales', $data)) {
            $object->setSales($data['sales']);
            unset($data['sales']);
        }
        if (\array_key_exists('commissions', $data)) {
            $object->setCommissions($data['commissions']);
            unset($data['commissions']);
        }
        if (\array_key_exists('leads', $data)) {
            $object->setLeads($data['leads']);
            unset($data['leads']);
        }
        if (\array_key_exists('customers', $data)) {
            $object->setCustomers($data['customers']);
            unset($data['customers']);
        }
        if (\array_key_exists('payouts', $data)) {
            $object->setPayouts($data['payouts']);
            unset($data['payouts']);
        }
        if (\array_key_exists('pending', $data)) {
            $object->setPending($data['pending']);
            unset($data['pending']);
        }
        if (\array_key_exists('due', $data)) {
            $object->setDue($data['due']);
            unset($data['due']);
        }
        if (\array_key_exists('commission_percentage', $data)) {
            $object->setCommissionPercentage($data['commission_percentage']);
            unset($data['commission_percentage']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
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
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('paymentMethod') && null !== $object->getPaymentMethod()) {
            $data['paymentMethod'] = $object->getPaymentMethod();
        }
        if ($object->isInitialized('paymentNotes') && null !== $object->getPaymentNotes()) {
            $data['paymentNotes'] = $object->getPaymentNotes();
        }
        if ($object->isInitialized('date') && null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if ($object->isInitialized('clicks') && null !== $object->getClicks()) {
            $data['clicks'] = $object->getClicks();
        }
        if ($object->isInitialized('sales') && null !== $object->getSales()) {
            $data['sales'] = $object->getSales();
        }
        if ($object->isInitialized('commissions') && null !== $object->getCommissions()) {
            $data['commissions'] = $object->getCommissions();
        }
        if ($object->isInitialized('leads') && null !== $object->getLeads()) {
            $data['leads'] = $object->getLeads();
        }
        if ($object->isInitialized('customers') && null !== $object->getCustomers()) {
            $data['customers'] = $object->getCustomers();
        }
        if ($object->isInitialized('payouts') && null !== $object->getPayouts()) {
            $data['payouts'] = $object->getPayouts();
        }
        if ($object->isInitialized('pending') && null !== $object->getPending()) {
            $data['pending'] = $object->getPending();
        }
        if ($object->isInitialized('due') && null !== $object->getDue()) {
            $data['due'] = $object->getDue();
        }
        if ($object->isInitialized('commissionPercentage') && null !== $object->getCommissionPercentage()) {
            $data['commission_percentage'] = $object->getCommissionPercentage();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
