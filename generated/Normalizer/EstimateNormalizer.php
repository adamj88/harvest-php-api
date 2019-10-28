<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class EstimateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\Estimate';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\Estimate';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\Estimate();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'client') && $data->{'client'} !== null) {
            $object->setClient($this->denormalizer->denormalize($data->{'client'}, 'JoliCode\\Harvest\\Api\\Model\\EstimateClient', 'json', $context));
        }
        if (property_exists($data, 'line_items') && $data->{'line_items'} !== null) {
            $values = [];
            foreach ($data->{'line_items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Harvest\\Api\\Model\\EstimateLineItem', 'json', $context);
            }
            $object->setLineItems($values);
        }
        if (property_exists($data, 'creator') && $data->{'creator'} !== null) {
            $object->setCreator($this->denormalizer->denormalize($data->{'creator'}, 'JoliCode\\Harvest\\Api\\Model\\EstimateCreator', 'json', $context));
        }
        if (property_exists($data, 'client_key') && $data->{'client_key'} !== null) {
            $object->setClientKey($data->{'client_key'});
        }
        if (property_exists($data, 'number') && $data->{'number'} !== null) {
            $object->setNumber($data->{'number'});
        }
        if (property_exists($data, 'purchase_order') && $data->{'purchase_order'} !== null) {
            $object->setPurchaseOrder($data->{'purchase_order'});
        }
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'tax') && $data->{'tax'} !== null) {
            $object->setTax($data->{'tax'});
        }
        if (property_exists($data, 'tax_amount') && $data->{'tax_amount'} !== null) {
            $object->setTaxAmount($data->{'tax_amount'});
        }
        if (property_exists($data, 'tax2') && $data->{'tax2'} !== null) {
            $object->setTax2($data->{'tax2'});
        }
        if (property_exists($data, 'tax2_amount') && $data->{'tax2_amount'} !== null) {
            $object->setTax2Amount($data->{'tax2_amount'});
        }
        if (property_exists($data, 'discount') && $data->{'discount'} !== null) {
            $object->setDiscount($data->{'discount'});
        }
        if (property_exists($data, 'discount_amount') && $data->{'discount_amount'} !== null) {
            $object->setDiscountAmount($data->{'discount_amount'});
        }
        if (property_exists($data, 'subject') && $data->{'subject'} !== null) {
            $object->setSubject($data->{'subject'});
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'state') && $data->{'state'} !== null) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'issue_date') && $data->{'issue_date'} !== null) {
            $object->setIssueDate($data->{'issue_date'});
        }
        if (property_exists($data, 'sent_at') && $data->{'sent_at'} !== null) {
            $object->setSentAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'sent_at'}));
        }
        if (property_exists($data, 'accepted_at') && $data->{'accepted_at'} !== null) {
            $object->setAcceptedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'accepted_at'}));
        }
        if (property_exists($data, 'declined_at') && $data->{'declined_at'} !== null) {
            $object->setDeclinedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'declined_at'}));
        }
        if (property_exists($data, 'created_at') && $data->{'created_at'} !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'created_at'}));
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'updated_at'}));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getClient()) {
            $data->{'client'} = $this->normalizer->normalize($object->getClient(), 'json', $context);
        }
        if (null !== $object->getLineItems()) {
            $values = [];
            foreach ($object->getLineItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'line_items'} = $values;
        }
        if (null !== $object->getCreator()) {
            $data->{'creator'} = $this->normalizer->normalize($object->getCreator(), 'json', $context);
        }
        if (null !== $object->getClientKey()) {
            $data->{'client_key'} = $object->getClientKey();
        }
        if (null !== $object->getNumber()) {
            $data->{'number'} = $object->getNumber();
        }
        if (null !== $object->getPurchaseOrder()) {
            $data->{'purchase_order'} = $object->getPurchaseOrder();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getTax()) {
            $data->{'tax'} = $object->getTax();
        }
        if (null !== $object->getTaxAmount()) {
            $data->{'tax_amount'} = $object->getTaxAmount();
        }
        if (null !== $object->getTax2()) {
            $data->{'tax2'} = $object->getTax2();
        }
        if (null !== $object->getTax2Amount()) {
            $data->{'tax2_amount'} = $object->getTax2Amount();
        }
        if (null !== $object->getDiscount()) {
            $data->{'discount'} = $object->getDiscount();
        }
        if (null !== $object->getDiscountAmount()) {
            $data->{'discount_amount'} = $object->getDiscountAmount();
        }
        if (null !== $object->getSubject()) {
            $data->{'subject'} = $object->getSubject();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getIssueDate()) {
            $data->{'issue_date'} = $object->getIssueDate();
        }
        if (null !== $object->getSentAt()) {
            $data->{'sent_at'} = $object->getSentAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getAcceptedAt()) {
            $data->{'accepted_at'} = $object->getAcceptedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getDeclinedAt()) {
            $data->{'declined_at'} = $object->getDeclinedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:sP");
        }

        return $data;
    }
}
