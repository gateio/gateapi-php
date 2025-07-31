# # UnifiedHistoryLoanRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency name | [optional] 
**tier** | **string** | VIP level for the floating rate to be retrieved | [optional] 
**tier_up_rate** | **string** | Floating rate corresponding to VIP level | [optional] 
**rates** | [**\GateApi\Model\UnifiedHistoryLoanRateRates[]**](UnifiedHistoryLoanRateRates.md) | Historical interest rate information, one data point per hour, array size determined by page and limit parameters from the API request, sorted by time from recent to distant | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
