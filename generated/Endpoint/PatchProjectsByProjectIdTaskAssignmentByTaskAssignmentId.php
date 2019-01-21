<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class PatchProjectsByProjectIdTaskAssignmentByTaskAssignmentId extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $ProjectId;
    protected $TaskAssignmentId;

    /**
     * Updates the specific task assignment by setting the values of the parameters passed. Any parameters not provided will be left unchanged. Returns a task assignment object and a 200 OK response code if the call succeeded.
     *
     * @param string $projectId
     * @param string $taskAssignmentId
     * @param array  $queryParameters  {
     *
     *     @var string $is_active whether the task assignment is active or archived
     *     @var string $billable whether the task assignment is billable or not
     *     @var string $hourly_rate rate used when the project’s bill_by is Tasks
     *     @var string $budget Budget used when the project’s budget_by is task or task_fees.
     * }
     */
    public function __construct(string $projectId, string $taskAssignmentId, array $queryParameters = [])
    {
        $this->projectId = $projectId;
        $this->taskAssignmentId = $taskAssignmentId;
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{ProjectId}', '{TaskAssignmentId}'], [$this->ProjectId, $this->TaskAssignmentId], '/projects/{ProjectId}/task_assignments/{TaskAssignmentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['is_active', 'billable', 'hourly_rate', 'budget']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('is_active', ['string']);
        $optionsResolver->setAllowedTypes('billable', ['string']);
        $optionsResolver->setAllowedTypes('hourly_rate', ['string']);
        $optionsResolver->setAllowedTypes('budget', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\TaskAssignment|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\TaskAssignment', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
