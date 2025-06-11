# DevDraftAISDK\ProductsApi

All URIs are relative to *https://api.devdraft.ai*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productControllerCreate**](ProductsApi.md#productcontrollercreate) | **POST** /api/v0/products | Create a new product
[**productControllerFindAll**](ProductsApi.md#productcontrollerfindall) | **GET** /api/v0/products | Get all products
[**productControllerFindOne**](ProductsApi.md#productcontrollerfindone) | **GET** /api/v0/products/{id} | Get a product by ID
[**productControllerRemove**](ProductsApi.md#productcontrollerremove) | **DELETE** /api/v0/products/{id} | Delete a product
[**productControllerUpdate**](ProductsApi.md#productcontrollerupdate) | **PUT** /api/v0/products/{id} | Update a product
[**productControllerUploadImage**](ProductsApi.md#productcontrolleruploadimage) | **POST** /api/v0/products/{id}/images | Upload images for a product

# **productControllerCreate**
> productControllerCreate($name, $description, $price, $currency, $type, $weight, $unit, $quantity, $stock_count, $status, $product_type, $images)

Create a new product

Creates a new product with optional image uploads.      This endpoint allows you to create products with detailed information and multiple images.  ## Use Cases - Add new products to your catalog - Create products with multiple images - Set up product pricing and descriptions  ## Supported Image Formats - JPEG/JPG - PNG - WebP - Maximum 10 images per product - Maximum file size: 5MB per image  ## Example Request (multipart/form-data) ``` name: \"Premium Widget\" description: \"High-quality widget for all your needs\" price: \"99.99\" images: [file1.jpg, file2.jpg]  // Optional, up to 10 images ```  ## Required Fields - `name`: Product name - `price`: Product price (decimal number)  ## Optional Fields - `description`: Detailed product description - `images`: Product images (up to 10 files)

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

$apiInstance = new DevDraftAISDK\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$price = 1.2; // float | 
$currency = "currency_example"; // string | 
$type = "type_example"; // string | 
$weight = 1.2; // float | 
$unit = "unit_example"; // string | 
$quantity = 1.2; // float | 
$stock_count = 1.2; // float | 
$status = "status_example"; // string | 
$product_type = "product_type_example"; // string | 
$images = array("images_example"); // string[] | 

try {
    $apiInstance->productControllerCreate($name, $description, $price, $currency, $type, $weight, $unit, $quantity, $stock_count, $status, $product_type, $images);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productControllerCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **description** | **string**|  |
 **price** | **float**|  |
 **currency** | **string**|  |
 **type** | **string**|  |
 **weight** | **float**|  |
 **unit** | **string**|  |
 **quantity** | **float**|  |
 **stock_count** | **float**|  |
 **status** | **string**|  |
 **product_type** | **string**|  |
 **images** | [**string[]**](../Model/string.md)|  |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productControllerFindAll**
> productControllerFindAll($skip, $take)

Get all products

Retrieves a list of products with pagination.      This endpoint allows you to fetch products with optional pagination.  ## Use Cases - List all products - Browse product catalog - Implement product search  ## Query Parameters - `skip`: Number of records to skip (default: 0) - `take`: Number of records to take (default: 10)  ## Example Response ```json {   \"data\": [     {       \"id\": \"prod_123456\",       \"name\": \"Premium Widget\",       \"description\": \"High-quality widget for all your needs\",       \"price\": \"99.99\",       \"images\": [         \"https://storage.example.com/images/file1.jpg\",         \"https://storage.example.com/images/file2.jpg\"       ],       \"createdAt\": \"2024-03-20T10:00:00Z\"     }   ],   \"total\": 100,   \"skip\": 0,   \"take\": 10 } ```

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

$apiInstance = new DevDraftAISDK\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 1.2; // float | Number of records to skip
$take = 1.2; // float | Number of records to take

try {
    $apiInstance->productControllerFindAll($skip, $take);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productControllerFindAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **float**| Number of records to skip | [optional]
 **take** | **float**| Number of records to take | [optional]

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productControllerFindOne**
> productControllerFindOne($id)

Get a product by ID

Retrieves detailed information about a specific product.      This endpoint allows you to fetch complete product details including all images.  ## Use Cases - View product details - Display product information - Check product availability  ## Example Response ```json {   \"id\": \"prod_123456\",   \"name\": \"Premium Widget\",   \"description\": \"High-quality widget for all your needs\",   \"price\": \"99.99\",   \"images\": [     \"https://storage.example.com/images/file1.jpg\",     \"https://storage.example.com/images/file2.jpg\"   ],   \"createdAt\": \"2024-03-20T10:00:00Z\",   \"updatedAt\": \"2024-03-20T10:00:00Z\" } ```

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

$apiInstance = new DevDraftAISDK\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Product ID

try {
    $apiInstance->productControllerFindOne($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productControllerFindOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product ID |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productControllerRemove**
> productControllerRemove($id)

Delete a product

Deletes a product and its associated images.      This endpoint allows you to remove a product and all its associated data.  ## Use Cases - Remove discontinued products - Clean up product catalog - Delete test products  ## Notes - This action cannot be undone - All product images will be deleted - Associated data will be removed

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

$apiInstance = new DevDraftAISDK\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Product ID

try {
    $apiInstance->productControllerRemove($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productControllerRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product ID |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productControllerUpdate**
> productControllerUpdate($name, $description, $price, $currency, $type, $weight, $unit, $quantity, $stock_count, $status, $product_type, $images, $id)

Update a product

Updates an existing product's information and optionally adds new images.      This endpoint allows you to modify product details and manage product images.  ## Use Cases - Update product information - Change product pricing - Modify product images - Update product description  ## Example Request (multipart/form-data) ``` name: \"Updated Premium Widget\" description: \"Updated description\" price: \"129.99\" images: [file1.jpg, file2.jpg]  // Optional, up to 10 images ```  ## Notes - Only include fields that need to be updated - New images will replace existing images - Maximum 10 images per product - Images are automatically optimized

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

$apiInstance = new DevDraftAISDK\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$description = "description_example"; // string | 
$price = 1.2; // float | 
$currency = "currency_example"; // string | 
$type = "type_example"; // string | 
$weight = 1.2; // float | 
$unit = "unit_example"; // string | 
$quantity = 1.2; // float | 
$stock_count = 1.2; // float | 
$status = "status_example"; // string | 
$product_type = "product_type_example"; // string | 
$images = array("images_example"); // string[] | 
$id = "id_example"; // string | Product ID

try {
    $apiInstance->productControllerUpdate($name, $description, $price, $currency, $type, $weight, $unit, $quantity, $stock_count, $status, $product_type, $images, $id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productControllerUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **description** | **string**|  |
 **price** | **float**|  |
 **currency** | **string**|  |
 **type** | **string**|  |
 **weight** | **float**|  |
 **unit** | **string**|  |
 **quantity** | **float**|  |
 **stock_count** | **float**|  |
 **status** | **string**|  |
 **product_type** | **string**|  |
 **images** | [**string[]**](../Model/string.md)|  |
 **id** | **string**| Product ID |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productControllerUploadImage**
> productControllerUploadImage($id)

Upload images for a product

Adds new images to an existing product.      This endpoint allows you to upload additional images for a product that already exists.  ## Use Cases - Add more product images - Update product gallery - Enhance product presentation  ## Supported Image Formats - JPEG/JPG - PNG - WebP - Maximum 10 images per upload - Maximum file size: 5MB per image  ## Example Request (multipart/form-data) ``` images: [file1.jpg, file2.jpg]  // Up to 10 images ```  ## Notes - Images are appended to existing product images - Total images per product cannot exceed 10 - Images are automatically optimized and resized

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

$apiInstance = new DevDraftAISDK\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Product ID

try {
    $apiInstance->productControllerUploadImage($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productControllerUploadImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Product ID |

### Return type

void (empty response body)

### Authorization

[x-client-key](../../README.md#x-client-key), [x-client-secret](../../README.md#x-client-secret)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

