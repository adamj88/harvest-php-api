# Harvest PHP API documentation

## Hunder the hood

This library mostly contains code which is automatically generated from
[Harvest's OpenAPI spec](https://github.com/jolicode/harvest-openapi-generator/).

The library provides three kinds of PHP classes:

 * [endpoints](generated/Endpoint/) represent requests to API methods
 * [models](generated/Model) represent data from the API
 * [normalizers](generated/Normalizer) transform JSON from the API to PHP models

If you use the provided [Client](generated/Client.php), you don't have to
understand how the library works internally. Calling one of its method will
make the HTTP request to the API and return the corresponding PHP object.

## Using the client

Use the `ClientFactory` to generate a `Client` configured with your token:

```php
<?php

use JoliCode\Harvest\Api\Client;
use JoliCode\Harvest\ClientFactory;

/** @var Client $client */
$client = ClientFactory::create(
  $accessToken,
  $harvestAccountId
);
```

The client contains all the methods to communicate with Harvest's API. Checkout its
PHP doc to know which option you can provide to each method:

```php
<?php
//...

$clients = $client->listClients([
  'is_active' => true,
])->getClients();
```

## Bypassing the incomplete API specification

Harvest's API does not have an officially supported OpenAPI specification. This library is automatically generated from an OpenAPI specification which has itself been generated by crawling Harvest's API html documentation pages. Hence, some API options might be
missing, inexactly documented or incomplete.

If you miss an option in a method, please:

 * open a pull request to add it to the [OpenAPI specification itself](https://github.com/jolicode/harvest-openapi-generator);
 * once the OpenAPI specification is up-to-date, [regenerate the SDK](./updating-sdk.md);
 * open a pull request in this library to submit your changes.