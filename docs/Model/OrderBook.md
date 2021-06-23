# # OrderBook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Order book ID, which is updated whenever the order book is changed. Valid only when &#x60;with_id&#x60; is set to &#x60;true&#x60; | [optional] 
**current** | **int** | Response data generation timestamp in milliseconds | [optional] 
**update** | **int** | Order book changed timestamp in milliseconds | [optional] 
**asks** | [**string[][]**](array.md) | Asks order depth | 
**bids** | [**string[][]**](array.md) | Bids order depth | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
