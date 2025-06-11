# UpdateWebhookDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the webhook for identification purposes | [optional] 
**url** | **string** | URL where webhook events will be sent | [optional] 
**is_active** | **bool** | Whether the webhook is active and will receive events | [optional] [default to true]
**signing_secret** | **string** | Secret key used to sign webhook payloads for verification | [optional] 
**encrypted** | **bool** | Whether webhook payloads should be encrypted | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

