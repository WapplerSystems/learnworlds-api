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

class UserResponseAnswersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserResponseAnswersItem';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserResponseAnswersItem';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\UserResponseAnswersItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('blockId', $data)) {
            $object->setBlockId($data['blockId']);
            unset($data['blockId']);
        }
        if (\array_key_exists('blockType', $data)) {
            $object->setBlockType($data['blockType']);
            unset($data['blockType']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('answer', $data)) {
            $object->setAnswer($data['answer']);
            unset($data['answer']);
        }
        if (\array_key_exists('points', $data)) {
            $object->setPoints($data['points']);
            unset($data['points']);
        }
        if (\array_key_exists('blockMaxScore', $data)) {
            $object->setBlockMaxScore($data['blockMaxScore']);
            unset($data['blockMaxScore']);
        }
        if (\array_key_exists('answerData', $data)) {
            $object->setAnswerData($data['answerData']);
            unset($data['answerData']);
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
        if ($object->isInitialized('blockId') && null !== $object->getBlockId()) {
            $data['blockId'] = $object->getBlockId();
        }
        if ($object->isInitialized('blockType') && null !== $object->getBlockType()) {
            $data['blockType'] = $object->getBlockType();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('answer') && null !== $object->getAnswer()) {
            $data['answer'] = $object->getAnswer();
        }
        if ($object->isInitialized('points') && null !== $object->getPoints()) {
            $data['points'] = $object->getPoints();
        }
        if ($object->isInitialized('blockMaxScore') && null !== $object->getBlockMaxScore()) {
            $data['blockMaxScore'] = $object->getBlockMaxScore();
        }
        if ($object->isInitialized('answerData') && null !== $object->getAnswerData()) {
            $data['answerData'] = $object->getAnswerData();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}
