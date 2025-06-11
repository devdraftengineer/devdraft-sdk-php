# CreateProductDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Product name as it will appear to customers. Should be clear and descriptive. | 
**description** | **string** | Detailed description of the product. Supports markdown formatting for rich text display. | 
**price** | **float** | Product price in the specified currency. Must be greater than 0. | 
**currency** | **string** | Currency code for the price. Defaults to USD if not specified. | [optional] [default to 'USD']
**type** | **string** | Product type | [optional] 
**weight** | **float** | Weight of the product | [optional] 
**unit** | **string** | Unit of measurement | [optional] 
**quantity** | **float** | Quantity available | [optional] 
**stock_count** | **float** | Stock count | [optional] 
**status** | **string** | Product status | [optional] 
**product_type** | **string** | Product type | [optional] 
**images** | **string[]** | Array of image URLs | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

