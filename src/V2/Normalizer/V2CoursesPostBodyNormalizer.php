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
use WapplerSystems\LearnWorldsApi\V2\Model\V2CoursesPostBody;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class V2CoursesPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\V2CoursesPostBody';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof V2CoursesPostBody;
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
        $object = new V2CoursesPostBody();
        if (array_key_exists('price', $data) && is_int($data['price'])) {
            $data['price'] = (double)$data['price'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('titleId', $data)) {
            $object->setTitleId($data['titleId']);
            unset($data['titleId']);
        }
        if (array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
            unset($data['price']);
        }
        if (array_key_exists('dripFeed', $data)) {
            $object->setDripFeed($data['dripFeed']);
            unset($data['dripFeed']);
        }
        if (array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
            unset($data['access']);
        }
        if (array_key_exists('categories', $data)) {
            $values = [];
            foreach ($data['categories'] as $value) {
                $values[] = $value;
            }
            $object->setCategories($values);
            unset($data['categories']);
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
        $data['titleId'] = $object->getTitleId();
        $data['title'] = $object->getTitle();
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('price') && null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if ($object->isInitialized('dripFeed') && null !== $object->getDripFeed()) {
            $data['dripFeed'] = $object->getDripFeed();
        }
        $data['access'] = $object->getAccess();
        if ($object->isInitialized('categories') && null !== $object->getCategories()) {
            $values = [];
            foreach ($object->getCategories() as $value) {
                $values[] = $value;
            }
            $data['categories'] = $values;
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
        return [V2CoursesPostBody::class => false];
    }
}
