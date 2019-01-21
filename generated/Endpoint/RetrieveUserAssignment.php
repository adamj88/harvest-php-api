<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class RetrieveUserAssignment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $ProjectId;
    protected $UserAssignmentId;

    /**
     * Retrieves the user assignment with the given ID. Returns a user assignment object and a 200 OK response code if a valid identifier was provided.
     *
     * @param string $projectId
     * @param string $userAssignmentId
     */
    public function __construct(string $projectId, string $userAssignmentId)
    {
        $this->projectId = $projectId;
        $this->userAssignmentId = $userAssignmentId;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{ProjectId}', '{UserAssignmentId}'], [$this->ProjectId, $this->UserAssignmentId], '/projects/{ProjectId}/user_assignments/{UserAssignmentId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
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
