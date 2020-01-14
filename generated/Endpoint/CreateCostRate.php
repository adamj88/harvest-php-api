<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class CreateCostRate extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $userId;

    /**
     * Creates a new cost rate object. Returns a cost rate object and a 201 Created response code if the call succeeded.


     Creating a cost rate with no start_date will replace a user’s existing rate(s).
     Creating a cost rate with a start_date that is before a user’s existing rate(s) will replace those cost rates with the new one.

     *
     * @param string                                                   $userId
     * @param \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody $payload json payload
     */
    public function __construct(string $userId, \JoliCode\Harvest\Api\Model\UsersUserIdCostRatesPostBody $payload)
    {
        $this->userId = $userId;
        $this->body = $payload;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{userId}'], [$this->userId], '/users/{userId}/cost_rates');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Harvest\Api\Model\CostRate|\JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (201 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\CostRate', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
