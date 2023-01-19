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
use WapplerSystems\LearnWorldsApi\Model\User;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;
use function is_int;
use WapplerSystems\LearnWorldsApi\Model\UserFields;
use WapplerSystems\LearnWorldsApi\Model\UserRole;

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\User';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\User';
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
        $object = new User();
        if (array_key_exists('created', $data) && is_int($data['created'])) {
            $data['created'] = (double)$data['created'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        if (array_key_exists('subscribed_for_marketing_emails', $data)) {
            $object->setSubscribedForMarketingEmails($data['subscribed_for_marketing_emails']);
            unset($data['subscribed_for_marketing_emails']);
        }
        if (array_key_exists('eu_customer', $data)) {
            $object->setEuCustomer($data['eu_customer']);
            unset($data['eu_customer']);
        }
        if (array_key_exists('is_admin', $data)) {
            $object->setIsAdmin($data['is_admin']);
            unset($data['is_admin']);
        }
        if (array_key_exists('is_instructor', $data)) {
            $object->setIsInstructor($data['is_instructor']);
            unset($data['is_instructor']);
        }
        if (array_key_exists('is_suspended', $data)) {
            $object->setIsSuspended($data['is_suspended']);
            unset($data['is_suspended']);
        }
        if (array_key_exists('is_reporter', $data)) {
            $object->setIsReporter($data['is_reporter']);
            unset($data['is_reporter']);
        }
        if (array_key_exists('role', $data)) {
            $object->setRole($this->denormalizer->denormalize($data['role'], UserRole::class, 'json', $context));
            unset($data['role']);
        }
        if (array_key_exists('is_affiliate', $data)) {
            $object->setIsAffiliate($data['is_affiliate']);
            unset($data['is_affiliate']);
        }
        if (array_key_exists('referrer_id', $data)) {
            $object->setReferrerId($data['referrer_id']);
            unset($data['referrer_id']);
        }
        if (array_key_exists('last_login', $data)) {
            $object->setLastLogin($data['last_login']);
            unset($data['last_login']);
        }
        if (array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (array_key_exists('fields', $data)) {
            $object->setFields($this->denormalizer->denormalize($data['fields'], UserFields::class, 'json', $context));
            unset($data['fields']);
        }
        if (array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (array_key_exists('utms', $data)) {
            $object->setUtms($data['utms']);
            unset($data['utms']);
        }
        if (array_key_exists('billing_info', $data)) {
            $object->setBillingInfo($data['billing_info']);
            unset($data['billing_info']);
        }
        if (array_key_exists('nps_score', $data)) {
            $object->setNpsScore($data['nps_score']);
            unset($data['nps_score']);
        }
        if (array_key_exists('nps_comment', $data)) {
            $object->setNpsComment($data['nps_comment']);
            unset($data['nps_comment']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if ($object->isInitialized('subscribedForMarketingEmails') && null !== $object->getSubscribedForMarketingEmails()) {
            $data['subscribed_for_marketing_emails'] = $object->getSubscribedForMarketingEmails();
        }
        if ($object->isInitialized('euCustomer') && null !== $object->getEuCustomer()) {
            $data['eu_customer'] = $object->getEuCustomer();
        }
        if ($object->isInitialized('isAdmin') && null !== $object->getIsAdmin()) {
            $data['is_admin'] = $object->getIsAdmin();
        }
        if ($object->isInitialized('isInstructor') && null !== $object->getIsInstructor()) {
            $data['is_instructor'] = $object->getIsInstructor();
        }
        if ($object->isInitialized('isSuspended') && null !== $object->getIsSuspended()) {
            $data['is_suspended'] = $object->getIsSuspended();
        }
        if ($object->isInitialized('isReporter') && null !== $object->getIsReporter()) {
            $data['is_reporter'] = $object->getIsReporter();
        }
        if ($object->isInitialized('role') && null !== $object->getRole()) {
            $data['role'] = $this->normalizer->normalize($object->getRole(), 'json', $context);
        }
        if ($object->isInitialized('isAffiliate') && null !== $object->getIsAffiliate()) {
            $data['is_affiliate'] = $object->getIsAffiliate();
        }
        if ($object->isInitialized('referrerId') && null !== $object->getReferrerId()) {
            $data['referrer_id'] = $object->getReferrerId();
        }
        if ($object->isInitialized('lastLogin') && null !== $object->getLastLogin()) {
            $data['last_login'] = $object->getLastLogin();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('fields') && null !== $object->getFields()) {
            $data['fields'] = $this->normalizer->normalize($object->getFields(), 'json', $context);
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }
        if ($object->isInitialized('utms') && null !== $object->getUtms()) {
            $data['utms'] = $object->getUtms();
        }
        if ($object->isInitialized('billingInfo') && null !== $object->getBillingInfo()) {
            $data['billing_info'] = $object->getBillingInfo();
        }
        if ($object->isInitialized('npsScore') && null !== $object->getNpsScore()) {
            $data['nps_score'] = $object->getNpsScore();
        }
        if ($object->isInitialized('npsComment') && null !== $object->getNpsComment()) {
            $data['nps_comment'] = $object->getNpsComment();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
