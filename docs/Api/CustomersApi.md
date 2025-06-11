# DevDraftAISDK\CustomersApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerControllerCreate**](CustomersApi.md#customercontrollercreate) | **POST** /api/v0/customers | Create a new customer
[**customerControllerFindAll**](CustomersApi.md#customercontrollerfindall) | **GET** /api/v0/customers | Get all customers with filters
[**customerControllerFindOne**](CustomersApi.md#customercontrollerfindone) | **GET** /api/v0/customers/{id} | Get a customer by ID
[**customerControllerUpdate**](CustomersApi.md#customercontrollerupdate) | **PATCH** /api/v0/customers/{id} | Update a customer

# **customerControllerCreate**
> customerControllerCreate($body)

Create a new customer

Creates a new customer in the system with their personal and contact information.      This endpoint allows you to register new customers and store their details for future transactions.  ## Use Cases - Register new customers for payment processing - Store customer information for recurring payments - Maintain customer profiles for transaction history  ## Example: Create New Customer ```json {   \"firstName\": \"John\",   \"lastName\": \"Doe\",   \"email\": \"john.doe@example.com\",   \"phone\": \"+1234567890\",   \"address\": {     \"street\": \"123 Main St\",     \"city\": \"New York\",     \"state\": \"NY\",     \"zipCode\": \"10001\",     \"country\": \"USA\"   } } ```  ## Required Fields - `firstName`: Customer's first name - `lastName`: Customer's last name - `email`: Valid email address (must be unique)  ## Optional Fields - `phone`: Contact phone number - `address`: Complete address information   - `street`: Street address   - `city`: City name   - `state`: State/province   - `zipCode`: Postal/ZIP code   - `country`: Country name

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

$apiInstance = new DevDraftAISDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\CreateCustomerDto(); // \DevDraftAISDK\Model\CreateCustomerDto | Customer creation data

try {
    $apiInstance->customerControllerCreate($body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerControllerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\CreateCustomerDto**](../Model/CreateCustomerDto.md)| Customer creation data |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerFindAll**
> customerControllerFindAll($status, $name, $email, $take, $skip)

Get all customers with filters

Retrieves a list of customers with optional filtering and pagination.      This endpoint allows you to search and filter customers based on various criteria.  ## Use Cases - List all customers with pagination - Search customers by name or email - Filter customers by status - Export customer data  ## Query Parameters - `skip`: Number of records to skip (default: 0) - `take`: Number of records to take (default: 10) - `status`: Filter by customer status (ACTIVE, INACTIVE, SUSPENDED) - `name`: Filter by customer name (partial match) - `email`: Filter by customer email (exact match)  ## Example Response ```json {   \"data\": [     {       \"id\": \"cust_123456\",       \"firstName\": \"John\",       \"lastName\": \"Doe\",       \"email\": \"john.doe@example.com\",       \"status\": \"ACTIVE\",       \"createdAt\": \"2024-03-20T10:00:00Z\"     }   ],   \"total\": 100,   \"skip\": 0,   \"take\": 10 } ```

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

$apiInstance = new DevDraftAISDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | Filter by customer status
$name = "name_example"; // string | Filter by customer name
$email = "email_example"; // string | Filter by customer email
$take = 1.2; // float | Number of records to take
$skip = 1.2; // float | Number of records to skip

try {
    $apiInstance->customerControllerFindAll($status, $name, $email, $take, $skip);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Filter by customer status | [optional]
 **name** | **string**| Filter by customer name | [optional]
 **email** | **string**| Filter by customer email | [optional]
 **take** | **float**| Number of records to take | [optional]
 **skip** | **float**| Number of records to skip | [optional]

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerFindOne**
> customerControllerFindOne($id)

Get a customer by ID

Retrieves detailed information about a specific customer.      This endpoint allows you to fetch complete customer details including their address and contact information.  ## Use Cases - View customer details - Verify customer information - Update customer records  ## Example Response ```json {   \"id\": \"cust_123456\",   \"firstName\": \"John\",   \"lastName\": \"Doe\",   \"email\": \"john.doe@example.com\",   \"phone\": \"+1234567890\",   \"status\": \"ACTIVE\",   \"address\": {     \"street\": \"123 Main St\",     \"city\": \"New York\",     \"state\": \"NY\",     \"zipCode\": \"10001\",     \"country\": \"USA\"   },   \"createdAt\": \"2024-03-20T10:00:00Z\",   \"updatedAt\": \"2024-03-20T10:00:00Z\" } ```

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

$apiInstance = new DevDraftAISDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->customerControllerFindOne($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerControllerUpdate**
> customerControllerUpdate($body, $id)

Update a customer

Updates an existing customer's information.      This endpoint allows you to modify customer details while preserving their core information.  ## Use Cases - Update customer contact information - Change customer address - Modify customer status  ## Example Request ```json {   \"firstName\": \"John\",   \"lastName\": \"Smith\",   \"phone\": \"+1987654321\",   \"address\": {     \"street\": \"456 Oak St\",     \"city\": \"Los Angeles\",     \"state\": \"CA\",     \"zipCode\": \"90001\",     \"country\": \"USA\"   } } ```  ## Notes - Only include fields that need to be updated - Email address cannot be changed - Status changes may require additional verification

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

$apiInstance = new DevDraftAISDK\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DevDraftAISDK\Model\UpdateCustomerDto(); // \DevDraftAISDK\Model\UpdateCustomerDto | Customer update data
$id = "id_example"; // string | 

try {
    $apiInstance->customerControllerUpdate($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DevDraftAISDK\Model\UpdateCustomerDto**](../Model/UpdateCustomerDto.md)| Customer update data |
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

