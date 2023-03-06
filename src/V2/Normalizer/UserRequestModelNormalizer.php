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

class UserRequestModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserRequestModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserRequestModel';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        if (\array_key_exists('password', $data)) {
            $object->setPassword($data['password']);
            unset($data['password']);
        }
        if (\array_key_exists('subscribed_for_marketing_emails', $data)) {
            $object->setSubscribedForMarketingEmails($data['subscribed_for_marketing_emails']);
            unset($data['subscribed_for_marketing_emails']);
        }
        if (\array_key_exists('is_admin', $data)) {
            $object->setIsAdmin($data['is_admin']);
            unset($data['is_admin']);
        }
        if (\array_key_exists('signup_validation_rules', $data)) {
            $object->setSignupValidationRules($data['signup_validation_rules']);
            unset($data['signup_validation_rules']);
        }
        if (\array_key_exists('fields', $data)) {
            $object->setFields($this->denormalizer->denormalize($data['fields'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserRequestModelFields', 'json', $context));
            unset($data['fields']);
        }
        if (\array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (\array_key_exists('utms', $data)) {
            $object->setUtms($this->denormalizer->denormalize($data['utms'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserRequestModelUtms', 'json', $context));
            unset($data['utms']);
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
        $data['email'] = $object->getEmail();
        $data['username'] = $object->getUsername();
        if ($object->isInitialized('password') && null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if ($object->isInitialized('subscribedForMarketingEmails') && null !== $object->getSubscribedForMarketingEmails()) {
            $data['subscribed_for_marketing_emails'] = $object->getSubscribedForMarketingEmails();
        }
        if ($object->isInitialized('isAdmin') && null !== $object->getIsAdmin()) {
            $data['is_admin'] = $object->getIsAdmin();
        }
        if ($object->isInitialized('signupValidationRules') && null !== $object->getSignupValidationRules()) {
            $data['signup_validation_rules'] = $object->getSignupValidationRules();
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
            $data['utms'] = $this->normalizer->normalize($object->getUtms(), 'json', $context);
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
