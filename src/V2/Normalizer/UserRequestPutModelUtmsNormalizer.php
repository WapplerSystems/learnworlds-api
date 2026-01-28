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
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestPutModelUtms;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class UserRequestPutModelUtmsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserRequestPutModelUtms';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof UserRequestPutModelUtms;
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
        $object = new UserRequestPutModelUtms();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('fc_source', $data)) {
            $object->setFcSource($data['fc_source']);
            unset($data['fc_source']);
        }
        if (array_key_exists('fc_medium', $data)) {
            $object->setFcMedium($data['fc_medium']);
            unset($data['fc_medium']);
        }
        if (array_key_exists('fc_campaign', $data)) {
            $object->setFcCampaign($data['fc_campaign']);
            unset($data['fc_campaign']);
        }
        if (array_key_exists('fc_term', $data)) {
            $object->setFcTerm($data['fc_term']);
            unset($data['fc_term']);
        }
        if (array_key_exists('fc_content', $data)) {
            $object->setFcContent($data['fc_content']);
            unset($data['fc_content']);
        }
        if (array_key_exists('fc_landing', $data)) {
            $object->setFcLanding($data['fc_landing']);
            unset($data['fc_landing']);
        }
        if (array_key_exists('fc_referrer', $data)) {
            $object->setFcReferrer($data['fc_referrer']);
            unset($data['fc_referrer']);
        }
        if (array_key_exists('fc_country', $data)) {
            $object->setFcCountry($data['fc_country']);
            unset($data['fc_country']);
        }
        if (array_key_exists('lc_source', $data)) {
            $object->setLcSource($data['lc_source']);
            unset($data['lc_source']);
        }
        if (array_key_exists('lc_medium', $data)) {
            $object->setLcMedium($data['lc_medium']);
            unset($data['lc_medium']);
        }
        if (array_key_exists('lc_campaign', $data)) {
            $object->setLcCampaign($data['lc_campaign']);
            unset($data['lc_campaign']);
        }
        if (array_key_exists('lc_term', $data)) {
            $object->setLcTerm($data['lc_term']);
            unset($data['lc_term']);
        }
        if (array_key_exists('lc_content', $data)) {
            $object->setLcContent($data['lc_content']);
            unset($data['lc_content']);
        }
        if (array_key_exists('lc_landing', $data)) {
            $object->setLcLanding($data['lc_landing']);
            unset($data['lc_landing']);
        }
        if (array_key_exists('lc_referrer', $data)) {
            $object->setLcReferrer($data['lc_referrer']);
            unset($data['lc_referrer']);
        }
        if (array_key_exists('lc_country', $data)) {
            $object->setLcCountry($data['lc_country']);
            unset($data['lc_country']);
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
    public function normalize($object, $format = null, array $context = []): float|int|bool|ArrayObject|array|string|null
    {
        $data = [];
        if ($object->isInitialized('fcSource') && null !== $object->getFcSource()) {
            $data['fc_source'] = $object->getFcSource();
        }
        if ($object->isInitialized('fcMedium') && null !== $object->getFcMedium()) {
            $data['fc_medium'] = $object->getFcMedium();
        }
        if ($object->isInitialized('fcCampaign') && null !== $object->getFcCampaign()) {
            $data['fc_campaign'] = $object->getFcCampaign();
        }
        if ($object->isInitialized('fcTerm') && null !== $object->getFcTerm()) {
            $data['fc_term'] = $object->getFcTerm();
        }
        if ($object->isInitialized('fcContent') && null !== $object->getFcContent()) {
            $data['fc_content'] = $object->getFcContent();
        }
        if ($object->isInitialized('fcLanding') && null !== $object->getFcLanding()) {
            $data['fc_landing'] = $object->getFcLanding();
        }
        if ($object->isInitialized('fcReferrer') && null !== $object->getFcReferrer()) {
            $data['fc_referrer'] = $object->getFcReferrer();
        }
        if ($object->isInitialized('fcCountry') && null !== $object->getFcCountry()) {
            $data['fc_country'] = $object->getFcCountry();
        }
        if ($object->isInitialized('lcSource') && null !== $object->getLcSource()) {
            $data['lc_source'] = $object->getLcSource();
        }
        if ($object->isInitialized('lcMedium') && null !== $object->getLcMedium()) {
            $data['lc_medium'] = $object->getLcMedium();
        }
        if ($object->isInitialized('lcCampaign') && null !== $object->getLcCampaign()) {
            $data['lc_campaign'] = $object->getLcCampaign();
        }
        if ($object->isInitialized('lcTerm') && null !== $object->getLcTerm()) {
            $data['lc_term'] = $object->getLcTerm();
        }
        if ($object->isInitialized('lcContent') && null !== $object->getLcContent()) {
            $data['lc_content'] = $object->getLcContent();
        }
        if ($object->isInitialized('lcLanding') && null !== $object->getLcLanding()) {
            $data['lc_landing'] = $object->getLcLanding();
        }
        if ($object->isInitialized('lcReferrer') && null !== $object->getLcReferrer()) {
            $data['lc_referrer'] = $object->getLcReferrer();
        }
        if ($object->isInitialized('lcCountry') && null !== $object->getLcCountry()) {
            $data['lc_country'] = $object->getLcCountry();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string)$key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }

    public function getSupportedTypes(?string $format): array
    {
        return [UserRequestPutModelUtms::class => false];
    }
}
