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

class PaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Payment';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Payment';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Payment();
        if (\array_key_exists('price', $data) && \is_int($data['price'])) {
            $data['price'] = (double)$data['price'];
        }
        if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
            $data['discount'] = (double)$data['discount'];
        }
        if (\array_key_exists('tax_amount', $data) && \is_int($data['tax_amount'])) {
            $data['tax_amount'] = (double)$data['tax_amount'];
        }
        if (\array_key_exists('tax_percentage', $data) && \is_int($data['tax_percentage'])) {
            $data['tax_percentage'] = (double)$data['tax_percentage'];
        }
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double)$data['created'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('transaction_id', $data)) {
            $object->setTransactionId($data['transaction_id']);
            unset($data['transaction_id']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PaymentProduct', 'json', $context));
            unset($data['product']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (\array_key_exists('discount', $data)) {
            $object->setDiscount($data['discount']);
            unset($data['discount']);
        }
        if (\array_key_exists('refund_at', $data)) {
            $object->setRefundAt($data['refund_at']);
            unset($data['refund_at']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        if (\array_key_exists('paid_at', $data)) {
            $object->setPaidAt($data['paid_at']);
            unset($data['paid_at']);
        }
        if (\array_key_exists('invoice', $data)) {
            $object->setInvoice($data['invoice']);
            unset($data['invoice']);
        }
        if (\array_key_exists('billing_info', $data)) {
            $object->setBillingInfo($data['billing_info']);
            unset($data['billing_info']);
        }
        if (\array_key_exists('coupon', $data)) {
            $object->setCoupon($data['coupon']);
            unset($data['coupon']);
        }
        if (\array_key_exists('instructors', $data)) {
            $values = [];
            foreach ($data['instructors'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PaymentInstructorsItem', 'json', $context);
            }
            $object->setInstructors($values);
            unset($data['instructors']);
        }
        if (\array_key_exists('instructors_total_percentage', $data)) {
            $object->setInstructorsTotalPercentage($data['instructors_total_percentage']);
            unset($data['instructors_total_percentage']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
            unset($data['tax_amount']);
        }
        if (\array_key_exists('tax_percentage', $data)) {
            $object->setTaxPercentage($data['tax_percentage']);
            unset($data['tax_percentage']);
        }
        if (\array_key_exists('affiliate', $data)) {
            $object->setAffiliate($this->denormalizer->denormalize($data['affiliate'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\PaymentAffiliate', 'json', $context));
            unset($data['affiliate']);
        }
        if (\array_key_exists('period', $data)) {
            $object->setPeriod($data['period']);
            unset($data['period']);
        }
        if (\array_key_exists('payment_plan_current_payment', $data)) {
            $object->setPaymentPlanCurrentPayment($data['payment_plan_current_payment']);
            unset($data['payment_plan_current_payment']);
        }
        if (\array_key_exists('payment_plan_total_payments', $data)) {
            $object->setPaymentPlanTotalPayments($data['payment_plan_total_payments']);
            unset($data['payment_plan_total_payments']);
        }
        if (\array_key_exists('gateway', $data)) {
            $object->setGateway($data['gateway']);
            unset($data['gateway']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
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
        if ($object->isInitialized('transactionId') && null !== $object->getTransactionId()) {
            $data['transaction_id'] = $object->getTransactionId();
        }
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('product') && null !== $object->getProduct()) {
            $data['product'] = $this->normalizer->normalize($object->getProduct(), 'json', $context);
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
            $data['discount'] = $object->getDiscount();
        }
        if ($object->isInitialized('refundAt') && null !== $object->getRefundAt()) {
            $data['refund_at'] = $object->getRefundAt();
        }
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if ($object->isInitialized('paidAt') && null !== $object->getPaidAt()) {
            $data['paid_at'] = $object->getPaidAt();
        }
        if ($object->isInitialized('invoice') && null !== $object->getInvoice()) {
            $data['invoice'] = $object->getInvoice();
        }
        if ($object->isInitialized('billingInfo') && null !== $object->getBillingInfo()) {
            $data['billing_info'] = $object->getBillingInfo();
        }
        if ($object->isInitialized('coupon') && null !== $object->getCoupon()) {
            $data['coupon'] = $object->getCoupon();
        }
        if ($object->isInitialized('instructors') && null !== $object->getInstructors()) {
            $values = [];
            foreach ($object->getInstructors() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['instructors'] = $values;
        }
        if ($object->isInitialized('instructorsTotalPercentage') && null !== $object->getInstructorsTotalPercentage()) {
            $data['instructors_total_percentage'] = $object->getInstructorsTotalPercentage();
        }
        if ($object->isInitialized('taxAmount') && null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if ($object->isInitialized('taxPercentage') && null !== $object->getTaxPercentage()) {
            $data['tax_percentage'] = $object->getTaxPercentage();
        }
        if ($object->isInitialized('affiliate') && null !== $object->getAffiliate()) {
            $data['affiliate'] = $this->normalizer->normalize($object->getAffiliate(), 'json', $context);
        }
        if ($object->isInitialized('period') && null !== $object->getPeriod()) {
            $data['period'] = $object->getPeriod();
        }
        if ($object->isInitialized('paymentPlanCurrentPayment') && null !== $object->getPaymentPlanCurrentPayment()) {
            $data['payment_plan_current_payment'] = $object->getPaymentPlanCurrentPayment();
        }
        if ($object->isInitialized('paymentPlanTotalPayments') && null !== $object->getPaymentPlanTotalPayments()) {
            $data['payment_plan_total_payments'] = $object->getPaymentPlanTotalPayments();
        }
        if ($object->isInitialized('gateway') && null !== $object->getGateway()) {
            $data['gateway'] = $object->getGateway();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
