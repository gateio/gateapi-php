# # QuoteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quote_id** | **string** | The quotation ID (quote_id) is used for placing orders and is valid for 1 minute | [optional] 
**min_amount** | **string** | 最小下单量 | [optional] 
**max_amount** | **string** | 最大下单量 | [optional] 
**price** | **string** | Coin Price (USDT-based) | [optional] 
**slippage** | **string** | Slippage | [optional] 
**estimate_gas_fee_amount_usdt** | **string** | Estimated Network Fee (USDT-based) | [optional] 
**order_fee** | **string** | Slippage value of 10 represents a 10% tolerance | [optional] 
**target_token_min_amount** | **string** | 最小获得数量 | [optional] 
**target_token_max_amount** | **string** | 最大获得数量 | [optional] 
**error_type** | **int** | Failure Type - &#x60;0&#x60; : Success - &#x60;1&#x60; : Exceeds maximum value - &#x60;2&#x60; : Below minimum value | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
