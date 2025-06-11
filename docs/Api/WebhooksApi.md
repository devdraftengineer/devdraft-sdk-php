# DevDraftAISDK\WebhooksApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookControllerCreate**](WebhooksApi.md#webhookcontrollercreate) | **POST** /api/v0/webhooks | Create a new webhook
[**webhookControllerFindAll**](WebhooksApi.md#webhookcontrollerfindall) | **GET** /api/v0/webhooks | Get all webhooks
[**webhookControllerFindOne**](WebhooksApi.md#webhookcontrollerfindone) | **GET** /api/v0/webhooks/{id} | Get a webhook by id
[**webhookControllerRemove**](WebhooksApi.md#webhookcontrollerremove) | **DELETE** /api/v0/webhooks/{id} | Delete a webhook
[**webhookControllerUpdate**](WebhooksApi.md#webhookcontrollerupdate) | **PATCH** /api/v0/webhooks/{id} | Update a webhook

# **webhookControllerCreate**
> \DevDraftAISDK\Model\WebhookResponseDto webhookControllerCreate($body)

Create a new webhook

Creates a new webhook endpoint for receiving event notifications. Requires webhook:create scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-client-key
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-key', 'Bearer');// Configure API key authorization: x-client-secret
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

$apiInstance = new DevDraftAISDK\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\CreateWebhookDto(); // \DevDraftAISDK\Model\CreateWebhookDto | Webhook configuration details

try {
    $result = $apiInstance->webhookControllerCreate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookControllerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\CreateWebhookDto**](../Model/CreateWebhookDto.md)| Webhook configuration details |

### Return type

[**\DevDraftAISDK\Model\WebhookResponseDto**](../Model/WebhookResponseDto.md)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookControllerFindAll**
> \DevDraftAISDK\Model\WebhookResponseDto[] webhookControllerFindAll($skip, $take)

Get all webhooks

Retrieves a list of all webhooks for your application. Requires webhook:read scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-client-key
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-key', 'Bearer');// Configure API key authorization: x-client-secret
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

$apiInstance = new DevDraftAISDK\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 1.2; // float | Number of records to skip (default: 0)
$take = 1.2; // float | Number of records to return (default: 10)

try {
    $result = $apiInstance->webhookControllerFindAll($skip, $take);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **float**| Number of records to skip (default: 0) | [optional]
 **take** | **float**| Number of records to return (default: 10) | [optional]

### Return type

[**\DevDraftAISDK\Model\WebhookResponseDto[]**](../Model/WebhookResponseDto.md)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookControllerFindOne**
> \DevDraftAISDK\Model\WebhookResponseDto webhookControllerFindOne($id)

Get a webhook by id

Retrieves details for a specific webhook. Requires webhook:read scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-client-key
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-key', 'Bearer');// Configure API key authorization: x-client-secret
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

$apiInstance = new DevDraftAISDK\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Webhook ID

try {
    $result = $apiInstance->webhookControllerFindOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

[**\DevDraftAISDK\Model\WebhookResponseDto**](../Model/WebhookResponseDto.md)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookControllerRemove**
> \DevDraftAISDK\Model\WebhookResponseDto webhookControllerRemove($id)

Delete a webhook

Deletes a webhook configuration. Requires webhook:delete scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-client-key
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-key', 'Bearer');// Configure API key authorization: x-client-secret
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

$apiInstance = new DevDraftAISDK\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Webhook ID

try {
    $result = $apiInstance->webhookControllerRemove($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookControllerRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Webhook ID |

### Return type

[**\DevDraftAISDK\Model\WebhookResponseDto**](../Model/WebhookResponseDto.md)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhookControllerUpdate**
> \DevDraftAISDK\Model\WebhookResponseDto webhookControllerUpdate($body, $id)

Update a webhook

Updates an existing webhook configuration. Requires webhook:update scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: x-client-key
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-key', 'Bearer');// Configure API key authorization: x-client-secret
$config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKey('x-client-secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DevDraftAISDK\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-client-secret', 'Bearer');

$apiInstance = new DevDraftAISDK\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\UpdateWebhookDto(); // \DevDraftAISDK\Model\UpdateWebhookDto | Webhook update details
$id = "id_example"; // string | Webhook ID

try {
    $result = $apiInstance->webhookControllerUpdate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhookControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\UpdateWebhookDto**](../Model/UpdateWebhookDto.md)| Webhook update details |
 **id** | **string**| Webhook ID |

### Return type

[**\DevDraftAISDK\Model\WebhookResponseDto**](../Model/WebhookResponseDto.md)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

