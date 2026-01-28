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

class UnitAnalyticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UnitAnalytics';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UnitAnalytics';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\UnitAnalytics();
        if (\array_key_exists('avg_study_time', $data) && \is_int($data['avg_study_time'])) {
            $data['avg_study_time'] = (double)$data['avg_study_time'];
        }
        if (\array_key_exists('total_study_time', $data) && \is_int($data['total_study_time'])) {
            $data['total_study_time'] = (double)$data['total_study_time'];
        }
        if (\array_key_exists('avg_score_rate', $data) && \is_int($data['avg_score_rate'])) {
            $data['avg_score_rate'] = (double)$data['avg_score_rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
            unset($data['type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('users_completed', $data)) {
            $object->setUsersCompleted($data['users_completed']);
            unset($data['users_completed']);
        }
        if (\array_key_exists('viewers', $data)) {
            $object->setViewers($data['viewers']);
            unset($data['viewers']);
        }
        if (\array_key_exists('avg_study_time', $data)) {
            $object->setAvgStudyTime($data['avg_study_time']);
            unset($data['avg_study_time']);
        }
        if (\array_key_exists('total_study_time', $data)) {
            $object->setTotalStudyTime($data['total_study_time']);
            unset($data['total_study_time']);
        }
        if (\array_key_exists('avg_score_rate', $data)) {
            $object->setAvgScoreRate($data['avg_score_rate']);
            unset($data['avg_score_rate']);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('usersCompleted') && null !== $object->getUsersCompleted()) {
            $data['users_completed'] = $object->getUsersCompleted();
        }
        if ($object->isInitialized('viewers') && null !== $object->getViewers()) {
            $data['viewers'] = $object->getViewers();
        }
        if ($object->isInitialized('avgStudyTime') && null !== $object->getAvgStudyTime()) {
            $data['avg_study_time'] = $object->getAvgStudyTime();
        }
        if ($object->isInitialized('totalStudyTime') && null !== $object->getTotalStudyTime()) {
            $data['total_study_time'] = $object->getTotalStudyTime();
        }
        if ($object->isInitialized('avgScoreRate') && null !== $object->getAvgScoreRate()) {
            $data['avg_score_rate'] = $object->getAvgScoreRate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
