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
use WapplerSystems\LearnWorldsApi\V2\Model\Lead;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class LeadNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Lead';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof Lead;
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
        $object = new Lead();
        if (array_key_exists('created', $data) && is_int($data['created'])) {
            $data['created'] = (double)$data['created'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
            unset($data['first_name']);
        }
        if (array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
            unset($data['last_name']);
        }
        if (array_key_exists('tags', $data)) {
            $values = [];
            foreach ($data['tags'] as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data['tags']);
        }
        if (array_key_exists('subscribed_for_marketing_emails', $data)) {
            $object->setSubscribedForMarketingEmails($data['subscribed_for_marketing_emails']);
            unset($data['subscribed_for_marketing_emails']);
        }
        if (array_key_exists('eu_customer', $data)) {
            $object->setEuCustomer($data['eu_customer']);
            unset($data['eu_customer']);
        }
        if (array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (array_key_exists('utms', $data)) {
            $object->setUtms($data['utms']);
            unset($data['utms']);
        }
        if (array_key_exists('page_submitted ', $data)) {
            $object->setPageSubmitted($data['page_submitted ']);
            unset($data['page_submitted ']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if ($object->isInitialized('tags') && null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data['tags'] = $values;
        }
        if ($object->isInitialized('subscribedForMarketingEmails') && null !== $object->getSubscribedForMarketingEmails()) {
            $data['subscribed_for_marketing_emails'] = $object->getSubscribedForMarketingEmails();
        }
        if ($object->isInitialized('euCustomer') && null !== $object->getEuCustomer()) {
            $data['eu_customer'] = $object->getEuCustomer();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('utms') && null !== $object->getUtms()) {
            $data['utms'] = $object->getUtms();
        }
        if ($object->isInitialized('pageSubmitted') && null !== $object->getPageSubmitted()) {
            $data['page_submitted '] = $object->getPageSubmitted();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [Lead::class => false];
    }
}
