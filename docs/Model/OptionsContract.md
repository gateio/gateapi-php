# # OptionsContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Options contract name | [optional] 
**tag** | **string** | tag | [optional] 
**create_time** | **double** | Creation time | [optional] 
**expiration_time** | **double** | Expiration time | [optional] 
**is_call** | **bool** | &#x60;true&#x60; means call options, while &#x60;false&#x60; is put options | [optional] 
**multiplier** | **string** | Multiplier used in converting from invoicing to settlement currency | [optional] 
**underlying** | **string** | Underlying | [optional] 
**underlying_price** | **string** | Underlying price (quote currency) | [optional] 
**last_price** | **string** | Last trading price | [optional] 
**mark_price** | **string** | Current mark price (quote currency) | [optional] 
**index_price** | **string** | Current index price (quote currency) | [optional] 
**maker_fee_rate** | **string** | Maker fee rate, where negative means rebate | [optional] 
**taker_fee_rate** | **string** | Taker fee rate | [optional] 
**order_price_round** | **string** | Minimum order price increment | [optional] 
**mark_price_round** | **string** | Minimum mark price increment | [optional] 
**order_size_min** | **int** | Minimum order size the contract allowed | [optional] 
**order_size_max** | **int** | Maximum order size the contract allowed | [optional] 
**order_price_deviate** | **string** | The positive and negative offset allowed between the order price and the current mark price, that is, the order price &#x60;order_price&#x60; must meet the following conditions:   order_price is within the range of mark_price +/- order_price_deviate * underlying_price  and does not distinguish between buy and sell orders | [optional] 
**ref_discount_rate** | **string** | Referral fee rate discount | [optional] 
**ref_rebate_rate** | **string** | Referrer commission rate | [optional] 
**orderbook_id** | **int** | Current orderbook ID | [optional] 
**trade_id** | **int** | Current trade ID | [optional] 
**trade_size** | **int** | Historical accumulated trade size | [optional] 
**position_size** | **int** | Current total long position size | [optional] 
**orders_limit** | **int** | Maximum number of open orders | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
