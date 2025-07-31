# # FuturesTicker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract** | **string** | Futures contract | [optional] 
**last** | **string** | Last trading price | [optional] 
**change_percentage** | **string** | Price change percentage. Negative values indicate price decrease, e.g. -7.45 | [optional] 
**total_size** | **string** | Contract total size | [optional] 
**low_24h** | **string** | 24-hour lowest price | [optional] 
**high_24h** | **string** | 24-hour highest price | [optional] 
**volume_24h** | **string** | 24-hour trading volume | [optional] 
**volume_24h_btc** | **string** | 24-hour trading volume in BTC (deprecated, use &#x60;volume_24h_base&#x60;, &#x60;volume_24h_quote&#x60;, &#x60;volume_24h_settle&#x60; instead) | [optional] 
**volume_24h_usd** | **string** | 24-hour trading volume in USD (deprecated, use &#x60;volume_24h_base&#x60;, &#x60;volume_24h_quote&#x60;, &#x60;volume_24h_settle&#x60; instead) | [optional] 
**volume_24h_base** | **string** | 24-hour trading volume in base currency | [optional] 
**volume_24h_quote** | **string** | 24-hour trading volume in quote currency | [optional] 
**volume_24h_settle** | **string** | 24-hour trading volume in settle currency | [optional] 
**mark_price** | **string** | Recent mark price | [optional] 
**funding_rate** | **string** | Funding rate | [optional] 
**funding_rate_indicative** | **string** | Indicative Funding rate in next period. (deprecated. use &#x60;funding_rate&#x60;) | [optional] 
**index_price** | **string** | Index price | [optional] 
**quanto_base_rate** | **string** | Exchange rate of base currency and settlement currency in Quanto contract. Does not exists in contracts of other types | [optional] 
**lowest_ask** | **string** | Recent lowest ask | [optional] 
**lowest_size** | **string** | The latest seller&#39;s lowest price order quantity | [optional] 
**highest_bid** | **string** | Recent highest bid | [optional] 
**highest_size** | **string** | The latest buyer&#39;s highest price order volume | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
