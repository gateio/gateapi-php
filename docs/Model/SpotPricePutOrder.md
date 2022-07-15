# # SpotPricePutOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Order type, default to &#x60;limit&#x60; | [optional] [default to 'limit']
**side** | **string** | Order side  - buy: buy side - sell: sell side | 
**price** | **string** | Order price | 
**amount** | **string** | Order amount | 
**account** | **string** | Trading account type.  Portfolio margin account must set to &#x60;cross_margin&#x60;  - normal: spot trading - margin: margin trading - cross_margin: cross_margin trading | [default to 'normal']
**time_in_force** | **string** | time_in_force  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled, taker only | [optional] [default to 'gtc']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
