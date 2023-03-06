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

class UserProgressWithCourseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserProgressWithCourse';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserProgressWithCourse';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\UserProgressWithCourse();
        if (\array_key_exists('progress_rate', $data) && \is_int($data['progress_rate'])) {
            $data['progress_rate'] = (double) $data['progress_rate'];
        }
        if (\array_key_exists('average_score_rate', $data) && \is_int($data['average_score_rate'])) {
            $data['average_score_rate'] = (double) $data['average_score_rate'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('course_id', $data)) {
            $object->setCourseId($data['course_id']);
            unset($data['course_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('progress_rate', $data)) {
            $object->setProgressRate($data['progress_rate']);
            unset($data['progress_rate']);
        }
        if (\array_key_exists('average_score_rate', $data)) {
            $object->setAverageScoreRate($data['average_score_rate']);
            unset($data['average_score_rate']);
        }
        if (\array_key_exists('time_on_course', $data)) {
            $object->setTimeOnCourse($data['time_on_course']);
            unset($data['time_on_course']);
        }
        if (\array_key_exists('total_units', $data)) {
            $object->setTotalUnits($data['total_units']);
            unset($data['total_units']);
        }
        if (\array_key_exists('completed_units', $data)) {
            $object->setCompletedUnits($data['completed_units']);
            unset($data['completed_units']);
        }
        if (\array_key_exists('progress_per_section_unit', $data)) {
            $values = [];
            foreach ($data['progress_per_section_unit'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserProgressWithCourseProgressPerSectionUnitItem', 'json', $context);
            }
            $object->setProgressPerSectionUnit($values);
            unset($data['progress_per_section_unit']);
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
        if ($object->isInitialized('courseId') && null !== $object->getCourseId()) {
            $data['course_id'] = $object->getCourseId();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('progressRate') && null !== $object->getProgressRate()) {
            $data['progress_rate'] = $object->getProgressRate();
        }
        if ($object->isInitialized('averageScoreRate') && null !== $object->getAverageScoreRate()) {
            $data['average_score_rate'] = $object->getAverageScoreRate();
        }
        if ($object->isInitialized('timeOnCourse') && null !== $object->getTimeOnCourse()) {
            $data['time_on_course'] = $object->getTimeOnCourse();
        }
        if ($object->isInitialized('totalUnits') && null !== $object->getTotalUnits()) {
            $data['total_units'] = $object->getTotalUnits();
        }
        if ($object->isInitialized('completedUnits') && null !== $object->getCompletedUnits()) {
            $data['completed_units'] = $object->getCompletedUnits();
        }
        if ($object->isInitialized('progressPerSectionUnit') && null !== $object->getProgressPerSectionUnit()) {
            $values = [];
            foreach ($object->getProgressPerSectionUnit() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['progress_per_section_unit'] = $values;
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}
