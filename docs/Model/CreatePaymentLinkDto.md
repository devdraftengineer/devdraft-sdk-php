# CreatePaymentLinkDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Display title for the payment link. This appears on the checkout page and in customer communications. | 
**url** | **string** | Unique URL slug for the payment link. Can be a full URL or just the path segment. Must be unique within your account. | 
**description** | **string** | Detailed description of what the customer is purchasing. Supports markdown formatting. | [optional] 
**cover_image** | **string** | Cover image URL | [optional] 
**link_type** | **string** | Type of the payment link | 
**amount** | **float** | Amount for the payment link | [optional] 
**payment_for_id** | **string** | Payment for ID | [optional] 
**recurring_type** | **string** | Recurring type | [default to 'ONE_TIME']
**customer_id** | **string** | Customer ID | [optional] 
**payment_link_products** | [**\DevDraftAISDK\Model\PaymentLinkProductDto[]**](PaymentLinkProductDto.md) | Array of products in the payment link | [optional] 
**is_for_all_product** | **bool** | Whether the payment link is for all products | [optional] [default to false]
**allow_quantity_adjustment** | **bool** | Whether to allow quantity adjustment | [default to true]
**collect_tax** | **bool** | Whether to collect tax | [default to false]
**tax_id** | **string** | Tax ID | [optional] 
**collect_address** | **bool** | Whether to collect address | [default to false]
**require_phone_number** | **bool** | Whether to require phone number | [default to false]
**limit_payments** | **bool** | Whether to limit payments | [optional] [default to false]
**max_payments** | **float** | Maximum number of payments | [optional] 
**custom_fields** | **object** | Custom fields | [optional] 
**allow_business_tax_id** | **bool** | Whether to allow business tax ID | [optional] [default to false]
**allow_mobile_payment** | **bool** | Whether to allow mobile payment | [default to false]
**confirmation_page** | **string** | Confirmation page type | [default to 'SHOW']
**create_invoice_pdf** | **bool** | Whether to create invoice PDF | [default to false]
**currency** | **string** | Currency | [default to 'usdc']
**expiration_date** | [**\DateTime**](\DateTime.md) | Expiration date | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

