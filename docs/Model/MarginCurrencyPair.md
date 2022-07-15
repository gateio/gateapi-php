# # MarginCurrencyPair

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Currency pair | [optional] 
**base** | **string** | Base currency | [optional] 
**quote** | **string** | Quote currency | [optional] 
**leverage** | **int** | Leverage | [optional] 
**min_base_amount** | **string** | Minimum base currency to loan, &#x60;null&#x60; means no limit | [optional] 
**min_quote_amount** | **string** | Minimum quote currency to loan, &#x60;null&#x60; means no limit | [optional] 
**max_quote_amount** | **string** | Maximum borrowable amount for quote currency. Base currency limit is calculated by quote maximum and market price. &#x60;null&#x60; means no limit | [optional] 
**status** | **int** | Currency pair status   - &#x60;0&#x60;: disabled  - &#x60;1&#x60;: enabled | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
