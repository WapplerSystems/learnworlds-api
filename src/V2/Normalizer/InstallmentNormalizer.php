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

class InstallmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Installment';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Installment';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Installment();
        if (\array_key_exists('current_period_start', $data) && \is_int($data['current_period_start'])) {
            $data['current_period_start'] = (double)$data['current_period_start'];
        }
        if (\array_key_exists('current_period_end', $data) && \is_int($data['current_period_end'])) {
            $data['current_period_end'] = (double)$data['current_period_end'];
        }
        if (\array_key_exists('firstAmount', $data) && \is_int($data['firstAmount'])) {
            $data['firstAmount'] = (double)$data['firstAmount'];
        }
        if (\array_key_exists('amount', $data) && \is_int($data['amount'])) {
            $data['amount'] = (double)$data['amount'];
        }
        if (\array_key_exists('paymentsCount', $data) && \is_int($data['paymentsCount'])) {
            $data['paymentsCount'] = (double)$data['paymentsCount'];
        }
        if (\array_key_exists('paymentsPayed', $data) && \is_int($data['paymentsPayed'])) {
            $data['paymentsPayed'] = (double)$data['paymentsPayed'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('plan_id', $data)) {
            $object->setPlanId($data['plan_id']);
            unset($data['plan_id']);
        }
        if (\array_key_exists('productId', $data)) {
            $object->setProductId($data['productId']);
            unset($data['productId']);
        }
        if (\array_key_exists('productType', $data)) {
            $object->setProductType($data['productType']);
            unset($data['productType']);
        }
        if (\array_key_exists('ends_at', $data)) {
            $object->setEndsAt($data['ends_at']);
            unset($data['ends_at']);
        }
        if (\array_key_exists('current_period_start', $data)) {
            $object->setCurrentPeriodStart($data['current_period_start']);
            unset($data['current_period_start']);
        }
        if (\array_key_exists('current_period_end', $data)) {
            $object->setCurrentPeriodEnd($data['current_period_end']);
            unset($data['current_period_end']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('firstAmount', $data)) {
            $object->setFirstAmount($data['firstAmount']);
            unset($data['firstAmount']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
            unset($data['amount']);
        }
        if (\array_key_exists('paymentsCount', $data)) {
            $object->setPaymentsCount($data['paymentsCount']);
            unset($data['paymentsCount']);
        }
        if (\array_key_exists('paymentsPayed', $data)) {
            $object->setPaymentsPayed($data['paymentsPayed']);
            unset($data['paymentsPayed']);
        }
        if (\array_key_exists('isCancelable', $data)) {
            $object->setIsCancelable($data['isCancelable']);
            unset($data['isCancelable']);
        }
        if (\array_key_exists('installmentIntervalType', $data)) {
            $object->setInstallmentIntervalType($data['installmentIntervalType']);
            unset($data['installmentIntervalType']);
        }
        if (\array_key_exists('firstInstallmentType', $data)) {
            $object->setFirstInstallmentType($data['firstInstallmentType']);
            unset($data['firstInstallmentType']);
        }
        if (\array_key_exists('firstInstallmentlDays', $data)) {
            $object->setFirstInstallmentlDays($data['firstInstallmentlDays']);
            unset($data['firstInstallmentlDays']);
        }
        if (\array_key_exists('firstInstallmentDate', $data)) {
            $object->setFirstInstallmentDate($data['firstInstallmentDate']);
            unset($data['firstInstallmentDate']);
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
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('planId') && null !== $object->getPlanId()) {
            $data['plan_id'] = $object->getPlanId();
        }
        if ($object->isInitialized('productId') && null !== $object->getProductId()) {
            $data['productId'] = $object->getProductId();
        }
        if ($object->isInitialized('productType') && null !== $object->getProductType()) {
            $data['productType'] = $object->getProductType();
        }
        if ($object->isInitialized('endsAt') && null !== $object->getEndsAt()) {
            $data['ends_at'] = $object->getEndsAt();
        }
        if ($object->isInitialized('currentPeriodStart') && null !== $object->getCurrentPeriodStart()) {
            $data['current_period_start'] = $object->getCurrentPeriodStart();
        }
        if ($object->isInitialized('currentPeriodEnd') && null !== $object->getCurrentPeriodEnd()) {
            $data['current_period_end'] = $object->getCurrentPeriodEnd();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('firstAmount') && null !== $object->getFirstAmount()) {
            $data['firstAmount'] = $object->getFirstAmount();
        }
        if ($object->isInitialized('amount') && null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if ($object->isInitialized('paymentsCount') && null !== $object->getPaymentsCount()) {
            $data['paymentsCount'] = $object->getPaymentsCount();
        }
        if ($object->isInitialized('paymentsPayed') && null !== $object->getPaymentsPayed()) {
            $data['paymentsPayed'] = $object->getPaymentsPayed();
        }
        if ($object->isInitialized('isCancelable') && null !== $object->getIsCancelable()) {
            $data['isCancelable'] = $object->getIsCancelable();
        }
        if ($object->isInitialized('installmentIntervalType') && null !== $object->getInstallmentIntervalType()) {
            $data['installmentIntervalType'] = $object->getInstallmentIntervalType();
        }
        if ($object->isInitialized('firstInstallmentType') && null !== $object->getFirstInstallmentType()) {
            $data['firstInstallmentType'] = $object->getFirstInstallmentType();
        }
        if ($object->isInitialized('firstInstallmentlDays') && null !== $object->getFirstInstallmentlDays()) {
            $data['firstInstallmentlDays'] = $object->getFirstInstallmentlDays();
        }
        if ($object->isInitialized('firstInstallmentDate') && null !== $object->getFirstInstallmentDate()) {
            $data['firstInstallmentDate'] = $object->getFirstInstallmentDate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
