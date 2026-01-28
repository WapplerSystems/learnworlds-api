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
use WapplerSystems\LearnWorldsApi\V2\Model\UserRequestModelFields;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\CheckArray;
use WapplerSystems\LearnWorldsApi\V2\Runtime\Normalizer\ValidatorTrait;


class UserRequestModelFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'WapplerSystems\\LearnWorldsApi\\V2\\Model\\UserRequestModelFields';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return $data instanceof UserRequestModelFields;
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
        $object = new UserRequestModelFields();
        if (null === $data || false === is_array($data)) {
            return $object;
        }
        if (array_key_exists('bio', $data)) {
            $object->setBio($data['bio']);
            unset($data['bio']);
        }
        if (array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
            unset($data['location']);
        }
        if (array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
            unset($data['url']);
        }
        if (array_key_exists('fb', $data)) {
            $object->setFb($data['fb']);
            unset($data['fb']);
        }
        if (array_key_exists('twitter', $data)) {
            $object->setTwitter($data['twitter']);
            unset($data['twitter']);
        }
        if (array_key_exists('instagram', $data)) {
            $object->setInstagram($data['instagram']);
            unset($data['instagram']);
        }
        if (array_key_exists('linkedin', $data)) {
            $object->setLinkedin($data['linkedin']);
            unset($data['linkedin']);
        }
        if (array_key_exists('skype', $data)) {
            $object->setSkype($data['skype']);
            unset($data['skype']);
        }
        if (array_key_exists('behance', $data)) {
            $object->setBehance($data['behance']);
            unset($data['behance']);
        }
        if (array_key_exists('dribbble', $data)) {
            $object->setDribbble($data['dribbble']);
            unset($data['dribbble']);
        }
        if (array_key_exists('github', $data)) {
            $object->setGithub($data['github']);
            unset($data['github']);
        }
        if (array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
            unset($data['phone']);
        }
        if (array_key_exists('address', $data)) {
            $object->setAddress($data['address']);
            unset($data['address']);
        }
        if (array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
            unset($data['country']);
        }
        if (array_key_exists('birthday', $data)) {
            $object->setBirthday($data['birthday']);
            unset($data['birthday']);
        }
        if (array_key_exists('company', $data)) {
            $object->setCompany($data['company']);
            unset($data['company']);
        }
        if (array_key_exists('company_size', $data)) {
            $object->setCompanySize($data['company_size']);
            unset($data['company_size']);
        }
        if (array_key_exists('university', $data)) {
            $object->setUniversity($data['university']);
            unset($data['university']);
        }
        if (array_key_exists('graduation_year', $data)) {
            $object->setGraduationYear($data['graduation_year']);
            unset($data['graduation_year']);
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
        if ($object->isInitialized('bio') && null !== $object->getBio()) {
            $data['bio'] = $object->getBio();
        }
        if ($object->isInitialized('location') && null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if ($object->isInitialized('url') && null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if ($object->isInitialized('fb') && null !== $object->getFb()) {
            $data['fb'] = $object->getFb();
        }
        if ($object->isInitialized('twitter') && null !== $object->getTwitter()) {
            $data['twitter'] = $object->getTwitter();
        }
        if ($object->isInitialized('instagram') && null !== $object->getInstagram()) {
            $data['instagram'] = $object->getInstagram();
        }
        if ($object->isInitialized('linkedin') && null !== $object->getLinkedin()) {
            $data['linkedin'] = $object->getLinkedin();
        }
        if ($object->isInitialized('skype') && null !== $object->getSkype()) {
            $data['skype'] = $object->getSkype();
        }
        if ($object->isInitialized('behance') && null !== $object->getBehance()) {
            $data['behance'] = $object->getBehance();
        }
        if ($object->isInitialized('dribbble') && null !== $object->getDribbble()) {
            $data['dribbble'] = $object->getDribbble();
        }
        if ($object->isInitialized('github') && null !== $object->getGithub()) {
            $data['github'] = $object->getGithub();
        }
        if ($object->isInitialized('phone') && null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if ($object->isInitialized('address') && null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if ($object->isInitialized('country') && null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if ($object->isInitialized('birthday') && null !== $object->getBirthday()) {
            $data['birthday'] = $object->getBirthday();
        }
        if ($object->isInitialized('company') && null !== $object->getCompany()) {
            $data['company'] = $object->getCompany();
        }
        if ($object->isInitialized('companySize') && null !== $object->getCompanySize()) {
            $data['company_size'] = $object->getCompanySize();
        }
        if ($object->isInitialized('university') && null !== $object->getUniversity()) {
            $data['university'] = $object->getUniversity();
        }
        if ($object->isInitialized('graduationYear') && null !== $object->getGraduationYear()) {
            $data['graduation_year'] = $object->getGraduationYear();
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
        return [UserRequestModelFields::class => false];
    }
}
