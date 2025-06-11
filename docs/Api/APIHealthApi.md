# DevDraftAISDK\APIHealthApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**healthControllerCheckV0**](APIHealthApi.md#healthcontrollercheckv0) | **GET** /api/v0/health | Authenticated health check endpoint
[**healthControllerPublicHealthCheckV0**](APIHealthApi.md#healthcontrollerpublichealthcheckv0) | **GET** /api/v0/health/public | Public health check endpoint

# **healthControllerCheckV0**
> \DevDraftAISDK\Model\HealthResponseDto healthControllerCheckV0()

Authenticated health check endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\APIHealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthControllerCheckV0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHealthApi->healthControllerCheckV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DevDraftAISDK\Model\HealthResponseDto**](../Model/HealthResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **healthControllerPublicHealthCheckV0**
> \DevDraftAISDK\Model\PublicHealthResponseDto healthControllerPublicHealthCheckV0()

Public health check endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\APIHealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthControllerPublicHealthCheckV0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHealthApi->healthControllerPublicHealthCheckV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\DevDraftAISDK\Model\PublicHealthResponseDto**](../Model/PublicHealthResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

