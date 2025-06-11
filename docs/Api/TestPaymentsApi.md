# DevDraftAISDK\TestPaymentsApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testPaymentControllerCreatePaymentV0**](TestPaymentsApi.md#testpaymentcontrollercreatepaymentv0) | **POST** /api/v0/test-payment | Process a test payment
[**testPaymentControllerGetPaymentV0**](TestPaymentsApi.md#testpaymentcontrollergetpaymentv0) | **GET** /api/v0/test-payment/{id} | Get payment details by ID
[**testPaymentControllerRefundPaymentV0**](TestPaymentsApi.md#testpaymentcontrollerrefundpaymentv0) | **POST** /api/v0/test-payment/{id}/refund | Refund a payment

# **testPaymentControllerCreatePaymentV0**
> \DevDraftAISDK\Model\PaymentResponseDto testPaymentControllerCreatePaymentV0($body, $idempotency_key)

Process a test payment

Creates a new payment. Requires an idempotency key to prevent duplicate payments on retry.      ## Idempotency Key Best Practices  1. **Generate unique keys**: Use UUIDs or similar unique identifiers, prefixed with a descriptive operation name 2. **Store keys client-side**: Save the key with the original request so you can retry with the same key 3. **Key format**: Between 6-64 alphanumeric characters 4. **Expiration**: Keys expire after 24 hours by default 5. **Use case**: Perfect for ensuring payment operations are never processed twice, even during network failures  ## Example Request (curl)  ```bash curl -X POST \\   https://api.example.com/rest-api/v0/test-payment \\   -H 'Content-Type: application/json' \\   -H 'Client-Key: your-api-key' \\   -H 'Client-Secret: your-api-secret' \\   -H 'Idempotency-Key: payment_123456_unique_key' \\   -d '{     \"amount\": 100.00,     \"currency\": \"USD\",     \"description\": \"Test payment for order #12345\",     \"customerId\": \"cus_12345\"   }' ```  ## Example Response (First Request)  ```json {   \"id\": \"pay_abc123xyz456\",   \"amount\": 100.00,   \"currency\": \"USD\",   \"status\": \"succeeded\",   \"timestamp\": \"2023-07-01T12:00:00.000Z\" } ```  ## Example Response (Duplicate Request)  The exact same response will be returned for any duplicate request with the same idempotency key, without creating a new payment.  ## Retry Scenario Example  Network failure during payment submission: 1. Client creates payment request with idempotency key: \"payment_123456_unique_key\" 2. Request begins processing, but network connection fails before response received 3. Client retries the exact same request with the same idempotency key 4. Server detects duplicate idempotency key and returns the result of the first request 5. No duplicate payment is created  If you retry with same key but different parameters (e.g., different amount), you'll receive a 409 Conflict error.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\TestPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \DevDraftAISDK\Model\PaymentRequestDto(); // \DevDraftAISDK\Model\PaymentRequestDto | 
$idempotency_key = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Unique key to ensure the request is idempotent. If a request with the same key is sent multiple times, only the first will be processed, and subsequent requests will return the same response.

try {
    $result = $apiInstance->testPaymentControllerCreatePaymentV0($body, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPaymentsApi->testPaymentControllerCreatePaymentV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\PaymentRequestDto**](../Model/PaymentRequestDto.md)|  |
 **idempotency_key** | [**string**](../Model/.md)| Unique key to ensure the request is idempotent. If a request with the same key is sent multiple times, only the first will be processed, and subsequent requests will return the same response. |

### Return type

[**\DevDraftAISDK\Model\PaymentResponseDto**](../Model/PaymentResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPaymentControllerGetPaymentV0**
> \DevDraftAISDK\Model\PaymentResponseDto testPaymentControllerGetPaymentV0($id)

Get payment details by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\TestPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Payment ID

try {
    $result = $apiInstance->testPaymentControllerGetPaymentV0($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPaymentsApi->testPaymentControllerGetPaymentV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment ID |

### Return type

[**\DevDraftAISDK\Model\PaymentResponseDto**](../Model/PaymentResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **testPaymentControllerRefundPaymentV0**
> \DevDraftAISDK\Model\RefundResponseDto testPaymentControllerRefundPaymentV0($id, $idempotency_key)

Refund a payment

Refunds an existing payment. Requires an idempotency key to prevent duplicate refunds on retry.      ## Idempotency Key Benefits for Refunds  Refunds are critical financial operations where duplicates can cause serious issues. Using idempotency keys ensures:  1. **Prevent duplicate refunds**: Even if a request times out or fails, retrying with the same key won't issue multiple refunds 2. **Safe retries**: Network failures or timeouts won't risk creating multiple refunds 3. **Consistent response**: Always get the same response for the same operation  ## Example Request (curl)  ```bash curl -X POST \\   https://api.example.com/rest-api/v0/test-payment/pay_abc123xyz456/refund \\   -H 'Content-Type: application/json' \\   -H 'Client-Key: your-api-key' \\   -H 'Client-Secret: your-api-secret' \\   -H 'Idempotency-Key: refund_123456_unique_key' ```  ## Example Response (First Request)  ```json {   \"id\": \"ref_xyz789\",   \"paymentId\": \"pay_abc123xyz456\",   \"amount\": 100.00,   \"status\": \"succeeded\",   \"timestamp\": \"2023-07-01T14:30:00.000Z\" } ```  ## Example Response (Duplicate Request)  The exact same response will be returned for any duplicate request with the same idempotency key, without creating a new refund.  ## Idempotency Key Guidelines  - Use a unique key for each distinct refund operation - Store keys client-side to ensure you can retry with the same key if needed - Keys expire after 24 hours by default

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DevDraftAISDK\Api\TestPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Payment ID to refund
$idempotency_key = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Unique key to ensure the refund request is idempotent. If a request with the same key is sent multiple times, only the first will be processed, and subsequent requests will return the same response.

try {
    $result = $apiInstance->testPaymentControllerRefundPaymentV0($id, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TestPaymentsApi->testPaymentControllerRefundPaymentV0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Payment ID to refund |
 **idempotency_key** | [**string**](../Model/.md)| Unique key to ensure the refund request is idempotent. If a request with the same key is sent multiple times, only the first will be processed, and subsequent requests will return the same response. |

### Return type

[**\DevDraftAISDK\Model\RefundResponseDto**](../Model/RefundResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

