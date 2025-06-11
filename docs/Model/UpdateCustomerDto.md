# UpdateCustomerDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | Customer&#x27;s first name. Used for personalization and legal documentation. | [optional] 
**last_name** | **string** | Customer&#x27;s last name. Used for personalization and legal documentation. | [optional] 
**email** | **string** | Customer&#x27;s email address. Used for notifications, receipts, and account management. Must be a valid email format. | [optional] 
**phone_number** | **string** | Customer&#x27;s phone number. Used for SMS notifications and verification. Include country code for international numbers. | [optional] 
**customer_type** | **string** | Type of customer account. Determines available features and compliance requirements. | [optional] [default to 'Individual']
**status** | [**AllOfUpdateCustomerDtoStatus**](AllOfUpdateCustomerDtoStatus.md) | Current status of the customer account. Controls access to services and features. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

