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
use WapplerSystems\LearnWorldsApi\Model\CourseAnalytics;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;
use function is_int;

class CourseAnalyticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\CourseAnalytics';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\CourseAnalytics';
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
        $object = new CourseAnalytics();
        if (array_key_exists('avg_score_rate', $data) && is_int($data['avg_score_rate'])) {
            $data['avg_score_rate'] = (double)$data['avg_score_rate'];
        }
        if (array_key_exists('success_rate', $data) && is_int($data['success_rate'])) {
            $data['success_rate'] = (double)$data['success_rate'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('students', $data)) {
            $object->setStudents($data['students']);
            unset($data['students']);
        }
        if (array_key_exists('videos', $data)) {
            $object->setVideos($data['videos']);
            unset($data['videos']);
        }
        if (array_key_exists('learning_units', $data)) {
            $object->setLearningUnits($data['learning_units']);
            unset($data['learning_units']);
        }
        if (array_key_exists('video_time', $data)) {
            $object->setVideoTime($data['video_time']);
            unset($data['video_time']);
        }
        if (array_key_exists('avg_score_rate', $data)) {
            $object->setAvgScoreRate($data['avg_score_rate']);
            unset($data['avg_score_rate']);
        }
        if (array_key_exists('success_rate', $data)) {
            $object->setSuccessRate($data['success_rate']);
            unset($data['success_rate']);
        }
        if (array_key_exists('total_study_time', $data)) {
            $object->setTotalStudyTime($data['total_study_time']);
            unset($data['total_study_time']);
        }
        if (array_key_exists('avg_time_to_finish', $data)) {
            $object->setAvgTimeToFinish($data['avg_time_to_finish']);
            unset($data['avg_time_to_finish']);
        }
        if (array_key_exists('social_interactions', $data)) {
            $object->setSocialInteractions($data['social_interactions']);
            unset($data['social_interactions']);
        }
        if (array_key_exists('certificates_issued', $data)) {
            $object->setCertificatesIssued($data['certificates_issued']);
            unset($data['certificates_issued']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('students') && null !== $object->getStudents()) {
            $data['students'] = $object->getStudents();
        }
        if ($object->isInitialized('videos') && null !== $object->getVideos()) {
            $data['videos'] = $object->getVideos();
        }
        if ($object->isInitialized('learningUnits') && null !== $object->getLearningUnits()) {
            $data['learning_units'] = $object->getLearningUnits();
        }
        if ($object->isInitialized('videoTime') && null !== $object->getVideoTime()) {
            $data['video_time'] = $object->getVideoTime();
        }
        if ($object->isInitialized('avgScoreRate') && null !== $object->getAvgScoreRate()) {
            $data['avg_score_rate'] = $object->getAvgScoreRate();
        }
        if ($object->isInitialized('successRate') && null !== $object->getSuccessRate()) {
            $data['success_rate'] = $object->getSuccessRate();
        }
        if ($object->isInitialized('totalStudyTime') && null !== $object->getTotalStudyTime()) {
            $data['total_study_time'] = $object->getTotalStudyTime();
        }
        if ($object->isInitialized('avgTimeToFinish') && null !== $object->getAvgTimeToFinish()) {
            $data['avg_time_to_finish'] = $object->getAvgTimeToFinish();
        }
        if ($object->isInitialized('socialInteractions') && null !== $object->getSocialInteractions()) {
            $data['social_interactions'] = $object->getSocialInteractions();
        }
        if ($object->isInitialized('certificatesIssued') && null !== $object->getCertificatesIssued()) {
            $data['certificates_issued'] = $object->getCertificatesIssued();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
