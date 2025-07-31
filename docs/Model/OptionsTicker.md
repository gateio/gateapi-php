# # OptionsTicker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Options contract name | [optional] 
**last_price** | **string** | Last trade price (quote currency) | [optional] 
**mark_price** | **string** | Current mark price (quote currency) | [optional] 
**index_price** | **string** | Current index price (quote currency) | [optional] 
**ask1_size** | **int** | Best ask size | [optional] 
**ask1_price** | **string** | Best ask price | [optional] 
**bid1_size** | **int** | Best bid size | [optional] 
**bid1_price** | **string** | Best bid price | [optional] 
**position_size** | **int** | Current total long position size | [optional] 
**mark_iv** | **string** | Implied volatility | [optional] 
**bid_iv** | **string** | Bid side implied volatility | [optional] 
**ask_iv** | **string** | Ask side implied volatility | [optional] 
**leverage** | **string** | Current leverage. Formula: underlying_price / mark_price * delta | [optional] 
**delta** | **string** | Greek letter delta | [optional] 
**gamma** | **string** | Greek letter gamma | [optional] 
**vega** | **string** | Greek letter vega | [optional] 
**theta** | **string** | Greek letter theta | [optional] 
**rho** | **string** | Rho | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
