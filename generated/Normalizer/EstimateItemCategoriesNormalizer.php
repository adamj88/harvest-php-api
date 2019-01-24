<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EstimateItemCategoriesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategories';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Harvest\Api\Model\EstimateItemCategories;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\EstimateItemCategories();
        if (property_exists($data, 'estimate_item_categories')) {
            $values = [];
            foreach ($data->{'estimate_item_categories'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimateItemCategory', 'json', $context);
            }
            $object->setEstimateItemCategories($values);
        }
        if (property_exists($data, 'per_page')) {
            $object->setPerPage($data->{'per_page'});
        }
        if (property_exists($data, 'total_pages')) {
            $object->setTotalPages($data->{'total_pages'});
        }
        if (property_exists($data, 'total_entries')) {
            $object->setTotalEntries($data->{'total_entries'});
        }
        if (property_exists($data, 'next_page')) {
            $object->setNextPage($data->{'next_page'});
        }
        if (property_exists($data, 'previous_page')) {
            $object->setPreviousPage($data->{'previous_page'});
        }
        if (property_exists($data, 'page')) {
            $object->setPage($data->{'page'});
        }
        if (property_exists($data, 'links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'links'}, 'JoliCode\\Harvest\\Api\\Model\\PaginationLinks', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEstimateItemCategories()) {
            $values = [];
            foreach ($object->getEstimateItemCategories() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'estimate_item_categories'} = $values;
        }
        if (null !== $object->getPerPage()) {
            $data->{'per_page'} = $object->getPerPage();
        }
        if (null !== $object->getTotalPages()) {
            $data->{'total_pages'} = $object->getTotalPages();
        }
        if (null !== $object->getTotalEntries()) {
            $data->{'total_entries'} = $object->getTotalEntries();
        }
        if (null !== $object->getNextPage()) {
            $data->{'next_page'} = $object->getNextPage();
        }
        if (null !== $object->getPreviousPage()) {
            $data->{'previous_page'} = $object->getPreviousPage();
        }
        if (null !== $object->getPage()) {
            $data->{'page'} = $object->getPage();
        }
        if (null !== $object->getLinks()) {
            $data->{'links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }

        return $data;
    }
}
