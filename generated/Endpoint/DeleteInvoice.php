<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Harvest\Api\Endpoint;

class DeleteInvoice extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $invoiceId;

    /**
     * Delete an invoice. Returns a 200 OK response code if the call succeeded.
     *
     * @param string $invoiceId
     */
    public function __construct(string $invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{invoiceId}'], [$this->invoiceId], '/invoices/{invoiceId}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Harvest\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }

        return $serializer->deserialize($body, 'JoliCode\\Harvest\\Api\\Model\\Error', 'json');
    }
}
