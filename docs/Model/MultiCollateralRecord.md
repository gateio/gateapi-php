# # MultiCollateralRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order ID | [optional] 
**record_id** | **int** | Collateral record ID | [optional] 
**before_ltv** | **string** | The collateral ratio before adjustment | [optional] 
**after_ltv** | **string** | The collateral ratio before adjustment | [optional] 
**operate_time** | **int** | Operation time, timestamp in seconds. | [optional] 
**borrow_currencies** | [**\GateApi\Model\MultiCollateralRecordCurrency[]**](MultiCollateralRecordCurrency.md) | Borrowing Currency List | [optional] 
**collateral_currencies** | [**\GateApi\Model\MultiCollateralRecordCurrency[]**](MultiCollateralRecordCurrency.md) | Collateral Currency List | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
