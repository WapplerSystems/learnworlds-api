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
use WapplerSystems\LearnWorldsApi\Model\UserProgressProgressPerSectionUnitItemUnitsItem;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\Runtime\Normalizer\ValidatorTrait;
use function array_key_exists;
use function is_array;

class UserProgressProgressPerSectionUnitItemUnitsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\Model\\UserProgressProgressPerSectionUnitItemUnitsItem';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\Model\\UserProgressProgressPerSectionUnitItemUnitsItem';
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
        $object = new UserProgressProgressPerSectionUnitItemUnitsItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('unit_section_name', $data)) {
            $object->setUnitSectionName($data['unit_section_name']);
            unset($data['unit_section_name']);
        }
        if (array_key_exists('unit_id', $data)) {
            $object->setUnitId($data['unit_id']);
            unset($data['unit_id']);
        }
        if (array_key_exists('unit_name', $data)) {
            $object->setUnitName($data['unit_name']);
            unset($data['unit_name']);
        }
        if (array_key_exists('unit_type', $data)) {
            $object->setUnitType($data['unit_type']);
            unset($data['unit_type']);
        }
        if (array_key_exists('unit_status', $data)) {
            $object->setUnitStatus($data['unit_status']);
            unset($data['unit_status']);
        }
        if (array_key_exists('unit_duration', $data)) {
            $object->setUnitDuration($data['unit_duration']);
            unset($data['unit_duration']);
        }
        if (array_key_exists('time_on_unit', $data)) {
            $object->setTimeOnUnit($data['time_on_unit']);
            unset($data['time_on_unit']);
        }
        if (array_key_exists('score_on_unit', $data)) {
            $object->setScoreOnUnit($data['score_on_unit']);
            unset($data['score_on_unit']);
        }
        if (array_key_exists('unit_progress_rate', $data)) {
            $object->setUnitProgressRate($data['unit_progress_rate']);
            unset($data['unit_progress_rate']);
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
        if ($object->isInitialized('unitSectionName') && null !== $object->getUnitSectionName()) {
            $data['unit_section_name'] = $object->getUnitSectionName();
        }
        if ($object->isInitialized('unitId') && null !== $object->getUnitId()) {
            $data['unit_id'] = $object->getUnitId();
        }
        if ($object->isInitialized('unitName') && null !== $object->getUnitName()) {
            $data['unit_name'] = $object->getUnitName();
        }
        if ($object->isInitialized('unitType') && null !== $object->getUnitType()) {
            $data['unit_type'] = $object->getUnitType();
        }
        if ($object->isInitialized('unitStatus') && null !== $object->getUnitStatus()) {
            $data['unit_status'] = $object->getUnitStatus();
        }
        if ($object->isInitialized('unitDuration') && null !== $object->getUnitDuration()) {
            $data['unit_duration'] = $object->getUnitDuration();
        }
        if ($object->isInitialized('timeOnUnit') && null !== $object->getTimeOnUnit()) {
            $data['time_on_unit'] = $object->getTimeOnUnit();
        }
        if ($object->isInitialized('scoreOnUnit') && null !== $object->getScoreOnUnit()) {
            $data['score_on_unit'] = $object->getScoreOnUnit();
        }
        if ($object->isInitialized('unitProgressRate') && null !== $object->getUnitProgressRate()) {
            $data['unit_progress_rate'] = $object->getUnitProgressRate();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
