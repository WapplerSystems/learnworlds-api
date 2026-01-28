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
use WapplerSystems\LearnWorldsApi\V2\Model\CertificateUpdate;
use WapplerSystems\LearnWorldsApi\V2\Model\CertificateUpdateForm;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class CertificateUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\CertificateUpdate';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof CertificateUpdate;
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
        $object = new CertificateUpdate();
        if (array_key_exists('issued', $data) && is_int($data['issued'])) {
            $data['issued'] = (double)$data['issued'];
        }
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('issued', $data)) {
            $object->setIssued($data['issued']);
            unset($data['issued']);
        }
        if (array_key_exists('form', $data)) {
            $object->setForm($this->denormalizer->denormalize($data['form'], CertificateUpdateForm::class, 'json', $context));
            unset($data['form']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value;
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
        $data['issued'] = $object->getIssued();
        $data['form'] = $this->normalizer->normalize($object->getForm(), 'json', $context);
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [CertificateUpdate::class => false];
    }
}
