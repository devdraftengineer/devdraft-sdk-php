# DevDraftAISDK\LiquidationAddressesApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**liquidationAddressControllerCreateLiquidationAddress**](LiquidationAddressesApi.md#liquidationaddresscontrollercreateliquidationaddress) | **POST** /api/v0/customers/{customerId}/liquidation_addresses | Create a new liquidation address for a customer
[**liquidationAddressControllerGetLiquidationAddress**](LiquidationAddressesApi.md#liquidationaddresscontrollergetliquidationaddress) | **GET** /api/v0/customers/{customerId}/liquidation_addresses/{liquidationAddressId} | Get a specific liquidation address
[**liquidationAddressControllerGetLiquidationAddresses**](LiquidationAddressesApi.md#liquidationaddresscontrollergetliquidationaddresses) | **GET** /api/v0/customers/{customerId}/liquidation_addresses | Get all liquidation addresses for a customer

# **liquidationAddressControllerCreateLiquidationAddress**
> \DevDraftAISDK\Model\LiquidationAddressResponseDto liquidationAddressControllerCreateLiquidationAddress($body, $customer_id)

Create a new liquidation address for a customer

Create a new liquidation address for a customer. Liquidation addresses allow        customers to automatically liquidate cryptocurrency holdings to fiat or other        stablecoins based on configured parameters.        **Required fields:**       - chain: Blockchain network (ethereum, polygon, arbitrum, base)       - currency: Stablecoin currency (usdc, eurc, dai, pyusd, usdt)       - address: Valid blockchain address        **At least one destination must be specified:**       - external_account_id: External bank account       - prefunded_account_id: Developer's prefunded account       - bridge_wallet_id: Bridge wallet       - destination_address: Crypto wallet address        **Payment Rails:**       Different payment rails have different requirements:       - ACH: Requires external_account_id, supports destination_ach_reference       - SEPA: Requires external_account_id, supports destination_sepa_reference       - Wire: Requires external_account_id, supports destination_wire_message       - Crypto: Requires destination_address, supports destination_blockchain_memo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\LiquidationAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \DevDraftAISDK\Model\CreateLiquidationAddressDto(); // \DevDraftAISDK\Model\CreateLiquidationAddressDto | 
$customer_id = "customer_id_example"; // string | Unique identifier for the customer

try {
    $result = $apiInstance->liquidationAddressControllerCreateLiquidationAddress($body, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidationAddressesApi->liquidationAddressControllerCreateLiquidationAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\CreateLiquidationAddressDto**](../Model/CreateLiquidationAddressDto.md)|  |
 **customer_id** | **string**| Unique identifier for the customer |

### Return type

[**\DevDraftAISDK\Model\LiquidationAddressResponseDto**](../Model/LiquidationAddressResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **liquidationAddressControllerGetLiquidationAddress**
> \DevDraftAISDK\Model\LiquidationAddressResponseDto liquidationAddressControllerGetLiquidationAddress($customer_id, $liquidation_address_id)

Get a specific liquidation address

Retrieve a specific liquidation address by its ID for a given customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\LiquidationAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | Unique identifier for the customer
$liquidation_address_id = "liquidation_address_id_example"; // string | Unique identifier for the liquidation address

try {
    $result = $apiInstance->liquidationAddressControllerGetLiquidationAddress($customer_id, $liquidation_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidationAddressesApi->liquidationAddressControllerGetLiquidationAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Unique identifier for the customer |
 **liquidation_address_id** | **string**| Unique identifier for the liquidation address |

### Return type

[**\DevDraftAISDK\Model\LiquidationAddressResponseDto**](../Model/LiquidationAddressResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **liquidationAddressControllerGetLiquidationAddresses**
> \DevDraftAISDK\Model\LiquidationAddressResponseDto[] liquidationAddressControllerGetLiquidationAddresses($customer_id)

Get all liquidation addresses for a customer

Retrieve all liquidation addresses associated with a specific customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\LiquidationAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | Unique identifier for the customer

try {
    $result = $apiInstance->liquidationAddressControllerGetLiquidationAddresses($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiquidationAddressesApi->liquidationAddressControllerGetLiquidationAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Unique identifier for the customer |

### Return type

[**\DevDraftAISDK\Model\LiquidationAddressResponseDto[]**](../Model/LiquidationAddressResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

