# DevDraftAISDK\WalletsApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**walletControllerGetWallets**](WalletsApi.md#walletcontrollergetwallets) | **GET** /api/v0/wallets | Get wallets for an app

# **walletControllerGetWallets**
> walletControllerGetWallets()

Get wallets for an app

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

$apiInstance = new DevDraftAISDK\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->walletControllerGetWallets();
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletControllerGetWallets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

