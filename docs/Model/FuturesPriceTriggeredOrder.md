# # FuturesPriceTriggeredOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**initial** | [**\GateApi\Model\FuturesInitialOrder**](FuturesInitialOrder.md) |  | 
**trigger** | [**\GateApi\Model\FuturesPriceTrigger**](FuturesPriceTrigger.md) |  | 
**id** | **int** | Auto order ID | [optional] [readonly] 
**user** | **int** | User ID | [optional] [readonly] 
**create_time** | **double** | Creation time | [optional] [readonly] 
**finish_time** | **double** | Finished time | [optional] [readonly] 
**trade_id** | **int** | ID of the newly created order on condition triggered | [optional] [readonly] 
**status** | **string** | Order status. | [optional] [readonly] 
**finish_as** | **string** | How order is finished | [optional] [readonly] 
**reason** | **string** | Extra messages of how order is finished | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
