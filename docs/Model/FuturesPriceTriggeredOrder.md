# # FuturesPriceTriggeredOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**initial** | [**\GateApi\Model\FuturesInitialOrder**](FuturesInitialOrder.md) |  | 
**trigger** | [**\GateApi\Model\FuturesPriceTrigger**](FuturesPriceTrigger.md) |  | 
**id** | **int** | Auto order ID. | [optional] [readonly] 
**user** | **int** | User ID. | [optional] [readonly] 
**create_time** | **double** | Creation time. | [optional] [readonly] 
**finish_time** | **double** | Finished time. | [optional] [readonly] 
**trade_id** | **int** | ID of the newly created order on condition triggered. | [optional] [readonly] 
**status** | **string** | Auto order status  - &#x60;open&#x60;: order is active - &#x60;finished&#x60;: order is finished - &#x60;inactive&#x60;: order is not active, only for close-long-order or close-short-order - &#x60;invalid&#x60;: order is close-short-order | [optional] [readonly] 
**finish_as** | **string** | How order is finished. | [optional] [readonly] 
**reason** | **string** | Additional remarks on how the order was finished. | [optional] [readonly] 
**order_type** | **string** | Types of stop-profit and stop-loss, including:  - &#x60;close-long-order&#x60;: Entrusting order stop profit and stop loss, flat long position - &#x60;close-short-order&#x60;: loss, short position  - &#x60;close-long-position&#x60;: Position stop-profit stop loss, used to close long positions - &#x60;close-short-position&#x60;: Position stop-profit stop loss, used to close all short positions - &#x60;plan-close-long-position&#x60;: Position plan take profit and stop loss, used to close long positions in all or part of long positions - &#x60;plan-close-short-position&#x60;: Position plan stop-profit and stop loss, used to close all short positions or partially close short positions  The two types of entrusted order stop-profit and stop-loss are read-only and cannot be passed in through requests | [optional] 
**me_order_id** | **int** | Corresponding order ID of order take-profit/stop-loss. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
