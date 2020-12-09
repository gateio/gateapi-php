# # Position

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **int** | User ID | [optional] [readonly] 
**contract** | **string** | Futures contract | [optional] [readonly] 
**size** | **int** | Position size | [optional] [readonly] 
**leverage** | **string** | Position leverage. 0 means cross margin; positive number means isolated margin | [optional] 
**risk_limit** | **string** | Position risk limit | [optional] 
**leverage_max** | **string** | Maximum leverage under current risk limit | [optional] [readonly] 
**maintenance_rate** | **string** | Maintenance rate under current risk limit | [optional] [readonly] 
**value** | **string** | Position value calculated in settlement currency | [optional] [readonly] 
**margin** | **string** | Position margin | [optional] 
**entry_price** | **string** | Entry price | [optional] [readonly] 
**liq_price** | **string** | Liquidation price | [optional] [readonly] 
**mark_price** | **string** | Current mark price | [optional] [readonly] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] [readonly] 
**realised_pnl** | **string** | Realized PNL | [optional] [readonly] 
**history_pnl** | **string** | History realized PNL | [optional] [readonly] 
**last_close_pnl** | **string** | PNL of last position close | [optional] [readonly] 
**realised_point** | **string** | Realized POINT PNL | [optional] [readonly] 
**history_point** | **string** | History realized POINT PNL | [optional] [readonly] 
**adl_ranking** | **int** | ADL ranking, range from 1 to 5 | [optional] [readonly] 
**pending_orders** | **int** | Current open orders | [optional] [readonly] 
**close_order** | [**\GateApi\Model\PositionCloseOrder**](PositionCloseOrder.md) |  | [optional] 
**dual_mode** | **string** | Position mode, including:  - &#x60;single&#x60;: dual mode is not enabled- &#x60;dual_long&#x60;: long position in dual mode- &#x60;dual_short&#x60;: short position in dual mode | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
