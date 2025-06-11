# DevDraftAISDK\TransfersApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transferControllerCreateDirectBankTransfer**](TransfersApi.md#transfercontrollercreatedirectbanktransfer) | **POST** /api/v0/transfers/direct-bank | Create a direct bank transfer
[**transferControllerCreateDirectWalletTransfer**](TransfersApi.md#transfercontrollercreatedirectwallettransfer) | **POST** /api/v0/transfers/direct-wallet | Create a direct wallet transfer
[**transferControllerCreateStablecoinConversion**](TransfersApi.md#transfercontrollercreatestablecoinconversion) | **POST** /api/v0/transfers/stablecoin-conversion | Create a stablecoin conversion

# **transferControllerCreateDirectBankTransfer**
> transferControllerCreateDirectBankTransfer($body)

Create a direct bank transfer

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

$apiInstance = new DevDraftAISDK\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\CreateDirectBankTransferDto(); // \DevDraftAISDK\Model\CreateDirectBankTransferDto | 

try {
    $apiInstance->transferControllerCreateDirectBankTransfer($body);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transferControllerCreateDirectBankTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\CreateDirectBankTransferDto**](../Model/CreateDirectBankTransferDto.md)|  |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferControllerCreateDirectWalletTransfer**
> transferControllerCreateDirectWalletTransfer($body)

Create a direct wallet transfer

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

$apiInstance = new DevDraftAISDK\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\CreateDirectWalletTransferDto(); // \DevDraftAISDK\Model\CreateDirectWalletTransferDto | 

try {
    $apiInstance->transferControllerCreateDirectWalletTransfer($body);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transferControllerCreateDirectWalletTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\CreateDirectWalletTransferDto**](../Model/CreateDirectWalletTransferDto.md)|  |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferControllerCreateStablecoinConversion**
> transferControllerCreateStablecoinConversion($body)

Create a stablecoin conversion

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

$apiInstance = new DevDraftAISDK\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\CreateStablecoinConversionDto(); // \DevDraftAISDK\Model\CreateStablecoinConversionDto | 

try {
    $apiInstance->transferControllerCreateStablecoinConversion($body);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->transferControllerCreateStablecoinConversion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\CreateStablecoinConversionDto**](../Model/CreateStablecoinConversionDto.md)|  |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

