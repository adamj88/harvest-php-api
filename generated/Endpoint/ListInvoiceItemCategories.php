<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class ListInvoiceItemCategories extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    /**
     * Returns a list of your invoice item categories. The invoice item categories are returned sorted by creation date, with the most recently created invoice item categories appearing first.

    The response contains an object with a invoice_item_categories property that contains an array of up to per_page invoice item categories. Each entry in the array is a separate invoice item category object. If no more invoice item categories are available, the resulting array will be empty. Several additional pagination properties are included in the response to simplify paginating your invoice item categories.
     *
     * @param array $queryParameters {
     *
     *     @var string $updated_since only return invoice item categories that have been updated since the given date and time
     *     @var int $page The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     *     @var int $per_page The number of records to return per page. Can range between 1 and 100.  (Default: 100)
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
        return '/invoice_item_categories';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['updated_since', 'page', 'per_page']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('updated_since', ['string']);
        $optionsResolver->setAllowedTypes('page', ['int']);
        $optionsResolver->setAllowedTypes('per_page', ['int']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Harvest\Api\Model\InvoiceItemCategories|\JoliCode\Harvest\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\InvoiceItemCategories', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
