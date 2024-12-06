# # OptionsPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **int** | User ID | [optional] [readonly] 
**underlying** | **string** | Underlying | [optional] [readonly] 
**underlying_price** | **string** | Underlying price (quote currency) | [optional] [readonly] 
**contract** | **string** | Options contract name | [optional] [readonly] 
**size** | **int** | Position size (contract size) | [optional] [readonly] 
**entry_price** | **string** | Entry size (quote currency) | [optional] [readonly] 
**mark_price** | **string** | Current mark price (quote currency) | [optional] [readonly] 
**mark_iv** | **string** | Implied volatility | [optional] [readonly] 
**realised_pnl** | **string** | Realized PNL | [optional] [readonly] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] [readonly] 
**pending_orders** | **int** | Current open orders | [optional] [readonly] 
**close_order** | [**\GateApi\Model\OptionsPositionCloseOrder**](OptionsPositionCloseOrder.md) |  | [optional] 
**delta** | **string** | Delta | [optional] [readonly] 
**gamma** | **string** | Gamma | [optional] [readonly] 
**vega** | **string** | Vega | [optional] [readonly] 
**theta** | **string** | Theta | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
