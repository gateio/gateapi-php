# # UnifiedHistoryLoanRate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency name. | [optional] 
**tier** | **string** | The VIP level of the floating rate required. | [optional] 
**tier_up_rate** | **string** | VIP level corresponding floating rate. | [optional] 
**rates** | [**\GateApi\Model\UnifiedHistoryLoanRateRates[]**](UnifiedHistoryLoanRateRates.md) | Historical interest rate information, one data per hour, the array size is determined by the page and limit parameters provided by the interface request parameters, sorted from recent to far in time | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
