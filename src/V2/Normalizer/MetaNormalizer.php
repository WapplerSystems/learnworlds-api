<?php

namespace WapplerSystems\LearnWorldsApi\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class MetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Meta';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Meta';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Meta();
        if (\array_key_exists('page', $data) && \is_int($data['page'])) {
            $data['page'] = (double) $data['page'];
        }
        if (\array_key_exists('totalItems', $data) && \is_int($data['totalItems'])) {
            $data['totalItems'] = (double) $data['totalItems'];
        }
        if (\array_key_exists('totalPages', $data) && \is_int($data['totalPages'])) {
            $data['totalPages'] = (double) $data['totalPages'];
        }
        if (\array_key_exists('itemsPerPage', $data) && \is_int($data['itemsPerPage'])) {
            $data['itemsPerPage'] = (double) $data['itemsPerPage'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('page', $data)) {
            $object->setPage($data['page']);
            unset($data['page']);
        }
        if (\array_key_exists('totalItems', $data)) {
            $object->setTotalItems($data['totalItems']);
            unset($data['totalItems']);
        }
        if (\array_key_exists('totalPages', $data)) {
            $object->setTotalPages($data['totalPages']);
            unset($data['totalPages']);
        }
        if (\array_key_exists('itemsPerPage', $data)) {
            $object->setItemsPerPage($data['itemsPerPage']);
            unset($data['itemsPerPage']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('page') && null !== $object->getPage()) {
            $data['page'] = $object->getPage();
        }
        if ($object->isInitialized('totalItems') && null !== $object->getTotalItems()) {
            $data['totalItems'] = $object->getTotalItems();
        }
        if ($object->isInitialized('totalPages') && null !== $object->getTotalPages()) {
            $data['totalPages'] = $object->getTotalPages();
        }
        if ($object->isInitialized('itemsPerPage') && null !== $object->getItemsPerPage()) {
            $data['itemsPerPage'] = $object->getItemsPerPage();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}