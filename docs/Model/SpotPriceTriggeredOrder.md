# # SpotPriceTriggeredOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trigger** | [**\GateApi\Model\SpotPriceTrigger**](SpotPriceTrigger.md) |  | 
**put** | [**\GateApi\Model\SpotPricePutOrder**](SpotPricePutOrder.md) |  | 
**id** | **int** | Auto order ID | [optional] [readonly] 
**user** | **int** | User ID | [optional] [readonly] 
**market** | **string** | Currency pair | 
**ctime** | **int** | Creation time | [optional] [readonly] 
**ftime** | **int** | Finished time | [optional] [readonly] 
**fired_order_id** | **int** | ID of the newly created order on condition triggered | [optional] [readonly] 
**status** | **string** | Status  - open: open - cancelled: being manually cancelled - finish: successfully executed - failed: failed to execute - expired - expired | [optional] [readonly] 
**reason** | **string** | Additional remarks on how the order was finished | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
