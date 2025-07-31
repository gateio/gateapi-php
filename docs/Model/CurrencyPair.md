# # CurrencyPair

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Currency pair | [optional] 
**base** | **string** | Base currency | [optional] 
**base_name** | **string** | Base currency name | [optional] 
**quote** | **string** | Quote currency | [optional] 
**quote_name** | **string** | Quote currency name | [optional] 
**fee** | **string** | Trading fee rate | [optional] 
**min_base_amount** | **string** | Minimum amount of base currency to trade, &#x60;null&#x60; means no limit | [optional] 
**min_quote_amount** | **string** | Minimum amount of quote currency to trade, &#x60;null&#x60; means no limit | [optional] 
**max_base_amount** | **string** | Maximum amount of base currency to trade, &#x60;null&#x60; means no limit | [optional] 
**max_quote_amount** | **string** | Maximum amount of quote currency to trade, &#x60;null&#x60; means no limit | [optional] 
**amount_precision** | **int** | Amount scale | [optional] 
**precision** | **int** | Price scale | [optional] 
**trade_status** | **string** | Trading status  - untradable: cannot be traded - buyable: can be bought - sellable: can be sold - tradable: can be bought and sold | [optional] 
**sell_start** | **int** | Sell start unix timestamp in seconds | [optional] 
**buy_start** | **int** | Buy start unix timestamp in seconds | [optional] 
**delisting_time** | **int** | Expected time to remove the shelves, Unix timestamp in seconds | [optional] 
**type** | **string** | Trading pair type, normal: normal, premarket: pre-market | [optional] 
**trade_url** | **string** | Transaction link | [optional] 
**st_tag** | **bool** | Whether the trading pair is in ST risk assessment, false - No, true - Yes | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
