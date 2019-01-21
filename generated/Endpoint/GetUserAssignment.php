<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class GetUserAssignment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Returns a list of your user assignments. The user assignments are returned sorted by creation date, with the most recently created user assignments appearing first.

    The response contains an object with a user_assignments property that contains an array of up to per_page user assignments. Each entry in the array is a separate user assignment object. If no more user assignments are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your user assignments.
     *
     * @param array $queryParameters {
     *
     *     @var string $is_active pass true to only return active user assignments and false to return inactive user assignments
     *     @var string $updated_since only return user assignments that have been updated since the given date and time
     *     @var string $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var string $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
     * }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/user_assignments';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['is_active', 'updated_since', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('is_active', ['string']);
        $optionsResolver->setAllowedTypes('updated_since', ['string']);
        $optionsResolver->setAllowedTypes('page', ['string']);
        $optionsResolver->setAllowedTypes('per_page', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\UserAssignments|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\UserAssignments', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
