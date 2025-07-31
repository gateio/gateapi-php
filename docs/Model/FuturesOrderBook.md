# # FuturesOrderBook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Order Book ID. Increases by 1 on every order book change. Set &#x60;with_id&#x3D;true&#x60; to include this field in response | [optional] 
**current** | **double** | Response data generation timestamp | [optional] 
**update** | **double** | Order book changed timestamp | [optional] 
**asks** | [**\GateApi\Model\FuturesOrderBookItem[]**](FuturesOrderBookItem.md) | Ask Depth | 
**bids** | [**\GateApi\Model\FuturesOrderBookItem[]**](FuturesOrderBookItem.md) | Bid Depth | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
