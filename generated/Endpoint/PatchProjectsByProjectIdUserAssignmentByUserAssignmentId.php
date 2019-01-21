<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class PatchProjectsByProjectIdUserAssignmentByUserAssignmentId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $ProjectId;
    protected $UserAssignmentId;

    /**
     * Updates the specific user assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a user assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId
     * @param string $userAssignmentId
     * @param array  $queryParameters  {
     *
     *     @var string $is_active whether the user assignment is active or archived
     *     @var string $is_project_manager determines if the user has project manager permissions for the project
     *     @var string $hourly_rate rate used when the project’s bill_by is People
     *     @var string $budget Budget used when the project’s budget_by is person.
     * }
     */
    public function __construct(string $projectId, string $userAssignmentId, array $queryParameters = [])
    {
        $this->projectId = $projectId;
        $this->userAssignmentId = $userAssignmentId;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{ProjectId}', '{UserAssignmentId}'], [$this->ProjectId, $this->UserAssignmentId], '/projects/{ProjectId}/user_assignments/{UserAssignmentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['is_active', 'is_project_manager', 'hourly_rate', 'budget']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('is_active', ['string']);
        $optionsResolver->setAllowedTypes('is_project_manager', ['string']);
        $optionsResolver->setAllowedTypes('hourly_rate', ['string']);
        $optionsResolver->setAllowedTypes('budget', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\UserAssignment|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\UserAssignment', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
