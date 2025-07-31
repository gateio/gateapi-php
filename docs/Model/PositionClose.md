# # PositionClose

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | **double** | Position close time | [optional] [readonly] 
**contract** | **string** | Futures contract | [optional] [readonly] 
**side** | **string** | Position side  - &#x60;long&#x60;: Long position - &#x60;short&#x60;: Short position | [optional] [readonly] 
**pnl** | **string** | PnL | [optional] [readonly] 
**pnl_pnl** | **string** | PNL - Position P/L | [optional] [readonly] 
**pnl_fund** | **string** | PNL - Funding Fees | [optional] [readonly] 
**pnl_fee** | **string** | PNL - Transaction Fees | [optional] [readonly] 
**text** | **string** | Source of close order. See &#x60;order.text&#x60; field for specific values | [optional] [readonly] 
**max_size** | **string** | Max Trade Size | [optional] [readonly] 
**accum_size** | **string** | Cumulative closed position volume | [optional] [readonly] 
**first_open_time** | **int** | First Open Time | [optional] [readonly] 
**long_price** | **string** | When side is &#39;long&#39;, it indicates the opening average price; when side is &#39;short&#39;, it indicates the closing average price | [optional] [readonly] 
**short_price** | **string** | When side is &#39;long&#39;, it indicates the closing average price; when side is &#39;short&#39;, it indicates the opening average price | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
