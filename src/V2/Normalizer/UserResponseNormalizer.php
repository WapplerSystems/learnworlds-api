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

class UserResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserResponse';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserResponse';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\UserResponse();
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double) $data['created'];
        }
        if (\array_key_exists('modified', $data) && \is_int($data['modified'])) {
            $data['modified'] = (double) $data['modified'];
        }
        if (\array_key_exists('submittedTimestamp', $data) && \is_int($data['submittedTimestamp'])) {
            $data['submittedTimestamp'] = (double) $data['submittedTimestamp'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('user_id', $data)) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        if (\array_key_exists('grade', $data)) {
            $object->setGrade($data['grade']);
            unset($data['grade']);
        }
        if (\array_key_exists('passed', $data)) {
            $object->setPassed($data['passed']);
            unset($data['passed']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('modified', $data)) {
            $object->setModified($data['modified']);
            unset($data['modified']);
        }
        if (\array_key_exists('submittedTimestamp', $data)) {
            $object->setSubmittedTimestamp($data['submittedTimestamp']);
            unset($data['submittedTimestamp']);
        }
        if (\array_key_exists('answers', $data)) {
            $values = [];
            foreach ($data['answers'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserResponseAnswersItem', 'json', $context);
            }
            $object->setAnswers($values);
            unset($data['answers']);
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
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('grade') && null !== $object->getGrade()) {
            $data['grade'] = $object->getGrade();
        }
        if ($object->isInitialized('passed') && null !== $object->getPassed()) {
            $data['passed'] = $object->getPassed();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('modified') && null !== $object->getModified()) {
            $data['modified'] = $object->getModified();
        }
        if ($object->isInitialized('submittedTimestamp') && null !== $object->getSubmittedTimestamp()) {
            $data['submittedTimestamp'] = $object->getSubmittedTimestamp();
        }
        if ($object->isInitialized('answers') && null !== $object->getAnswers()) {
            $values = [];
            foreach ($object->getAnswers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['answers'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
