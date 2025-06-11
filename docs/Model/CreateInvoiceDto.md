# CreateInvoiceDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the invoice | 
**email** | **string** | Email address | 
**customer_id** | **string** | Customer ID | 
**currency** | **string** | Currency for the invoice | 
**items** | [**\DevDraftAISDK\Model\InvoiceProductDto[]**](InvoiceProductDto.md) | Array of products in the invoice | 
**due_date** | [**\DateTime**](\DateTime.md) | Due date of the invoice | 
**delivery** | **string** | Delivery method | 
**payment_link** | **bool** | Whether to generate a payment link | 
**payment_methods** | **string[]** | Array of accepted payment methods | 
**status** | **string** | Invoice status | 
**address** | **string** | Address | [optional] 
**phone_number** | **string** | Phone number | [optional] 
**send_date** | [**\DateTime**](\DateTime.md) | Send date | [optional] 
**logo** | **string** | Logo URL | [optional] 
**partial_payment** | **bool** | Allow partial payments | 
**tax_id** | **string** | Tax ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

