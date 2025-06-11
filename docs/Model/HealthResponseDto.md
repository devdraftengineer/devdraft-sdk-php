# HealthResponseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Overall health status of the service. Returns \&quot;ok\&quot; when healthy, \&quot;error\&quot; when issues detected. | 
**timestamp** | [**\DateTime**](\DateTime.md) | ISO 8601 timestamp when the health check was performed. | 
**version** | **string** | Current version of the API service. Useful for debugging and compatibility checks. | 
**database** | **string** | Database connectivity status. Shows \&quot;connected\&quot; when database is accessible, \&quot;error\&quot; when connection fails. | 
**message** | **string** | Human-readable message describing the current health status and any issues. | 
**authenticated** | **bool** | Indicates whether the request was properly authenticated. Always true for this endpoint since authentication is required. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

