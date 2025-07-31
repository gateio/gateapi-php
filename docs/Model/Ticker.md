# # Ticker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_pair** | **string** | Currency pair | [optional] 
**last** | **string** | Last trading price | [optional] 
**lowest_ask** | **string** | Recent lowest ask | [optional] 
**lowest_size** | **string** | Latest seller&#39;s lowest price quantity; not available for batch queries; available for single queries, empty if no data | [optional] 
**highest_bid** | **string** | Recent highest bid | [optional] 
**highest_size** | **string** | Latest buyer&#39;s highest price quantity; not available for batch queries; available for single queries, empty if no data | [optional] 
**change_percentage** | **string** | 24h price change percentage (negative for decrease, e.g., -7.45) | [optional] 
**change_utc0** | **string** | UTC+0 timezone, 24h price change percentage, negative for decline (e.g., -7.45) | [optional] 
**change_utc8** | **string** | UTC+8 timezone, 24h price change percentage, negative for decline (e.g., -7.45) | [optional] 
**base_volume** | **string** | Base currency trading volume in the last 24h | [optional] 
**quote_volume** | **string** | Quote currency trading volume in the last 24h | [optional] 
**high_24h** | **string** | 24h High | [optional] 
**low_24h** | **string** | 24h Low | [optional] 
**etf_net_value** | **string** | ETF net value | [optional] 
**etf_pre_net_value** | **string** | ETF net value at previous rebalancing point | [optional] 
**etf_pre_timestamp** | **int** | ETF previous rebalancing time | [optional] 
**etf_leverage** | **string** | ETF current leverage | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
