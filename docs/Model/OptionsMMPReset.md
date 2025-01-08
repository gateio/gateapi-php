# # OptionsMMPReset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**underlying** | **string** | Underlying | 
**window** | **int** | Time window (milliseconds), between 1-5000, 0 means disabling MMP | [optional] [readonly] 
**frozen_period** | **int** | Freeze duration (milliseconds), 0 means always frozen, need to call reset API to unfreeze | [optional] [readonly] 
**qty_limit** | **string** | Trading volume upper limit (positive number, up to 2 decimal places) | [optional] [readonly] 
**delta_limit** | **string** | Upper limit of net delta value (positive number, up to 2 decimal places) | [optional] [readonly] 
**trigger_time_ms** | **int** | Trigger freeze time (milliseconds), 0 means no freeze is triggered | [optional] [readonly] 
**frozen_until_ms** | **int** | Unfreeze time (milliseconds). If the freeze duration is not configured, there will be no unfreeze time after the freeze is triggered. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)