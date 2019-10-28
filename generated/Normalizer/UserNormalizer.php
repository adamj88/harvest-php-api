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

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Harvest\\Api\\Model\\User';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Harvest\\Api\\Model\\User';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Harvest\Api\Model\User();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'first_name') && $data->{'first_name'} !== null) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'last_name') && $data->{'last_name'} !== null) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'email') && $data->{'email'} !== null) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'timezone') && $data->{'timezone'} !== null) {
            $object->setTimezone($data->{'timezone'});
        }
        if (property_exists($data, 'has_access_to_all_future_projects') && $data->{'has_access_to_all_future_projects'} !== null) {
            $object->setHasAccessToAllFutureProjects($data->{'has_access_to_all_future_projects'});
        }
        if (property_exists($data, 'is_contractor') && $data->{'is_contractor'} !== null) {
            $object->setIsContractor($data->{'is_contractor'});
        }
        if (property_exists($data, 'is_admin') && $data->{'is_admin'} !== null) {
            $object->setIsAdmin($data->{'is_admin'});
        }
        if (property_exists($data, 'is_project_manager') && $data->{'is_project_manager'} !== null) {
            $object->setIsProjectManager($data->{'is_project_manager'});
        }
        if (property_exists($data, 'can_see_rates') && $data->{'can_see_rates'} !== null) {
            $object->setCanSeeRates($data->{'can_see_rates'});
        }
        if (property_exists($data, 'can_create_projects') && $data->{'can_create_projects'} !== null) {
            $object->setCanCreateProjects($data->{'can_create_projects'});
        }
        if (property_exists($data, 'can_create_invoices') && $data->{'can_create_invoices'} !== null) {
            $object->setCanCreateInvoices($data->{'can_create_invoices'});
        }
        if (property_exists($data, 'is_active') && $data->{'is_active'} !== null) {
            $object->setIsActive($data->{'is_active'});
        }
        if (property_exists($data, 'weekly_capacity') && $data->{'weekly_capacity'} !== null) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        if (property_exists($data, 'default_hourly_rate') && $data->{'default_hourly_rate'} !== null) {
            $object->setDefaultHourlyRate($data->{'default_hourly_rate'});
        }
        if (property_exists($data, 'cost_rate') && $data->{'cost_rate'} !== null) {
            $object->setCostRate($data->{'cost_rate'});
        }
        if (property_exists($data, 'roles') && $data->{'roles'} !== null) {
            $values = [];
            foreach ($data->{'roles'} as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (property_exists($data, 'avatar_url') && $data->{'avatar_url'} !== null) {
            $object->setAvatarUrl($data->{'avatar_url'});
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
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getTimezone()) {
            $data->{'timezone'} = $object->getTimezone();
        }
        if (null !== $object->getHasAccessToAllFutureProjects()) {
            $data->{'has_access_to_all_future_projects'} = $object->getHasAccessToAllFutureProjects();
        }
        if (null !== $object->getIsContractor()) {
            $data->{'is_contractor'} = $object->getIsContractor();
        }
        if (null !== $object->getIsAdmin()) {
            $data->{'is_admin'} = $object->getIsAdmin();
        }
        if (null !== $object->getIsProjectManager()) {
            $data->{'is_project_manager'} = $object->getIsProjectManager();
        }
        if (null !== $object->getCanSeeRates()) {
            $data->{'can_see_rates'} = $object->getCanSeeRates();
        }
        if (null !== $object->getCanCreateProjects()) {
            $data->{'can_create_projects'} = $object->getCanCreateProjects();
        }
        if (null !== $object->getCanCreateInvoices()) {
            $data->{'can_create_invoices'} = $object->getCanCreateInvoices();
        }
        if (null !== $object->getIsActive()) {
            $data->{'is_active'} = $object->getIsActive();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        if (null !== $object->getDefaultHourlyRate()) {
            $data->{'default_hourly_rate'} = $object->getDefaultHourlyRate();
        }
        if (null !== $object->getCostRate()) {
            $data->{'cost_rate'} = $object->getCostRate();
        }
        if (null !== $object->getRoles()) {
            $values = [];
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data->{'roles'} = $values;
        }
        if (null !== $object->getAvatarUrl()) {
            $data->{'avatar_url'} = $object->getAvatarUrl();
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
