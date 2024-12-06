# # MockMarginResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Position combination type &#x60;original_position&#x60; - Original position &#x60;long_delta_original_position&#x60; - Positive delta + Original position &#x60;short_delta_original_position&#x60; - Negative delta + Original position | [optional] 
**profit_loss_ranges** | [**\GateApi\Model\ProfitLossRange[]**](ProfitLossRange.md) | The results of 33 pressure scenarios for MR1 | [optional] 
**max_loss** | [**\GateApi\Model\ProfitLossRange**](.md) | 最大损失 | [optional] 
**mr1** | **string** | Stress testing | [optional] 
**mr2** | **string** | Basis spread risk | [optional] 
**mr3** | **string** | Volatility spread risk | [optional] 
**mr4** | **string** | Option short risk | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
