<?php

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TimeEntryExternalReferenceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\TimeEntryExternalReference';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\TimeEntryExternalReference();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        elseif (property_exists($data, 'id') && $data->{'id'} === null) {
            $object->setId(null);
        }
        if (property_exists($data, 'group_id') && $data->{'group_id'} !== null) {
            $object->setGroupId($data->{'group_id'});
        }
        elseif (property_exists($data, 'group_id') && $data->{'group_id'} === null) {
            $object->setGroupId(null);
        }
        if (property_exists($data, 'permalink') && $data->{'permalink'} !== null) {
            $object->setPermalink($data->{'permalink'});
        }
        elseif (property_exists($data, 'permalink') && $data->{'permalink'} === null) {
            $object->setPermalink(null);
        }
        if (property_exists($data, 'service') && $data->{'service'} !== null) {
            $object->setService($data->{'service'});
        }
        elseif (property_exists($data, 'service') && $data->{'service'} === null) {
            $object->setService(null);
        }
        if (property_exists($data, 'service_icon_url') && $data->{'service_icon_url'} !== null) {
            $object->setServiceIconUrl($data->{'service_icon_url'});
        }
        elseif (property_exists($data, 'service_icon_url') && $data->{'service_icon_url'} === null) {
            $object->setServiceIconUrl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        else {
            $data->{'id'} = null;
        }
        if (null !== $object->getGroupId()) {
            $data->{'group_id'} = $object->getGroupId();
        }
        else {
            $data->{'group_id'} = null;
        }
        if (null !== $object->getPermalink()) {
            $data->{'permalink'} = $object->getPermalink();
        }
        else {
            $data->{'permalink'} = null;
        }
        if (null !== $object->getService()) {
            $data->{'service'} = $object->getService();
        }
        else {
            $data->{'service'} = null;
        }
        if (null !== $object->getServiceIconUrl()) {
            $data->{'service_icon_url'} = $object->getServiceIconUrl();
        }
        else {
            $data->{'service_icon_url'} = null;
        }
        return $data;
    }
}