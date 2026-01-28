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
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressProgressPerSectionUnitItem;
use WapplerSystems\LearnWorldsApi\V2\Model\UserProgressProgressPerSectionUnitItemUnitsItem;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class UserProgressProgressPerSectionUnitItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserProgressProgressPerSectionUnitItem';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof UserProgressProgressPerSectionUnitItem;
    }

    /**
     * @return mixed
     * @throws ExceptionInterface
     */
    public function denormalize($data, $class, $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new UserProgressProgressPerSectionUnitItem();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('section_id', $data)) {
            $object->setSectionId($data['section_id']);
            unset($data['section_id']);
        }
        if (array_key_exists('units', $data)) {
            $values = [];
            foreach ($data['units'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, UserProgressProgressPerSectionUnitItemUnitsItem::class, 'json', $context);
            }
            $object->setUnits($values);
            unset($data['units']);
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
     * @throws ExceptionInterface
     */
    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('sectionId') && null !== $object->getSectionId()) {
            $data['section_id'] = $object->getSectionId();
        }
        if ($object->isInitialized('units') && null !== $object->getUnits()) {
            $values = [];
            foreach ($object->getUnits() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['units'] = $values;
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
        return [UserProgressProgressPerSectionUnitItem::class => false];
    }
}
