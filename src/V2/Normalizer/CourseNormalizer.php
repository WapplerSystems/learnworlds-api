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
class CourseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Course';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\Course';
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
        $object = new \WapplerSystems\LearnWorldsApi\V2\Model\Course();
        if (\array_key_exists('original_price', $data) && \is_int($data['original_price'])) {
            $data['original_price'] = (double) $data['original_price'];
        }
        if (\array_key_exists('discount_price', $data) && \is_int($data['discount_price'])) {
            $data['discount_price'] = (double) $data['discount_price'];
        }
        if (\array_key_exists('final_price', $data) && \is_int($data['final_price'])) {
            $data['final_price'] = (double) $data['final_price'];
        }
        if (\array_key_exists('created', $data) && \is_int($data['created'])) {
            $data['created'] = (double) $data['created'];
        }
        if (\array_key_exists('modified', $data) && \is_int($data['modified'])) {
            $data['modified'] = (double) $data['modified'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
            unset($data['title']);
        }
        if (\array_key_exists('expires', $data)) {
            $object->setExpires($data['expires']);
            unset($data['expires']);
        }
        if (\array_key_exists('expiresType', $data)) {
            $object->setExpiresType($data['expiresType']);
            unset($data['expiresType']);
        }
        if (\array_key_exists('afterPurchase', $data)) {
            $object->setAfterPurchase($this->denormalizer->denormalize($data['afterPurchase'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\CourseAfterPurchase', 'json', $context));
            unset($data['afterPurchase']);
        }
        if (\array_key_exists('categories', $data)) {
            $values = array();
            foreach ($data['categories'] as $value) {
                $values[] = $value;
            }
            $object->setCategories($values);
            unset($data['categories']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
            unset($data['label']);
        }
        if (\array_key_exists('author', $data)) {
            $object->setAuthor($data['author']);
            unset($data['author']);
        }
        if (\array_key_exists('courseImage', $data)) {
            $object->setCourseImage($data['courseImage']);
            unset($data['courseImage']);
        }
        if (\array_key_exists('original_price', $data)) {
            $object->setOriginalPrice($data['original_price']);
            unset($data['original_price']);
        }
        if (\array_key_exists('discount_price', $data)) {
            $object->setDiscountPrice($data['discount_price']);
            unset($data['discount_price']);
        }
        if (\array_key_exists('final_price', $data)) {
            $object->setFinalPrice($data['final_price']);
            unset($data['final_price']);
        }
        if (\array_key_exists('dripFeed', $data)) {
            $object->setDripFeed($data['dripFeed']);
            unset($data['dripFeed']);
        }
        if (\array_key_exists('identifiers', $data)) {
            $object->setIdentifiers($this->denormalizer->denormalize($data['identifiers'], 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\CourseIdentifiers', 'json', $context));
            unset($data['identifiers']);
        }
        if (\array_key_exists('access', $data)) {
            $object->setAccess($data['access']);
            unset($data['access']);
        }
        if (\array_key_exists('created', $data)) {
            $object->setCreated($data['created']);
            unset($data['created']);
        }
        if (\array_key_exists('modified', $data)) {
            $object->setModified($data['modified']);
            unset($data['modified']);
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
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('title') && null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if ($object->isInitialized('expires') && null !== $object->getExpires()) {
            $data['expires'] = $object->getExpires();
        }
        if ($object->isInitialized('expiresType') && null !== $object->getExpiresType()) {
            $data['expiresType'] = $object->getExpiresType();
        }
        if ($object->isInitialized('afterPurchase') && null !== $object->getAfterPurchase()) {
            $data['afterPurchase'] = $this->normalizer->normalize($object->getAfterPurchase(), 'json', $context);
        }
        if ($object->isInitialized('categories') && null !== $object->getCategories()) {
            $values = array();
            foreach ($object->getCategories() as $value) {
                $values[] = $value;
            }
            $data['categories'] = $values;
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('author') && null !== $object->getAuthor()) {
            $data['author'] = $object->getAuthor();
        }
        if ($object->isInitialized('courseImage') && null !== $object->getCourseImage()) {
            $data['courseImage'] = $object->getCourseImage();
        }
        if ($object->isInitialized('originalPrice') && null !== $object->getOriginalPrice()) {
            $data['original_price'] = $object->getOriginalPrice();
        }
        if ($object->isInitialized('discountPrice') && null !== $object->getDiscountPrice()) {
            $data['discount_price'] = $object->getDiscountPrice();
        }
        if ($object->isInitialized('finalPrice') && null !== $object->getFinalPrice()) {
            $data['final_price'] = $object->getFinalPrice();
        }
        if ($object->isInitialized('dripFeed') && null !== $object->getDripFeed()) {
            $data['dripFeed'] = $object->getDripFeed();
        }
        if ($object->isInitialized('identifiers') && null !== $object->getIdentifiers()) {
            $data['identifiers'] = $this->normalizer->normalize($object->getIdentifiers(), 'json', $context);
        }
        if ($object->isInitialized('access') && null !== $object->getAccess()) {
            $data['access'] = $object->getAccess();
        }
        if ($object->isInitialized('created') && null !== $object->getCreated()) {
            $data['created'] = $object->getCreated();
        }
        if ($object->isInitialized('modified') && null !== $object->getModified()) {
            $data['modified'] = $object->getModified();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}