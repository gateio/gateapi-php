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
**initial_margin** | **string** | The initial margin occupied by the position, applicable to the portfolio margin account | [optional] [readonly] 
**maintenance_margin** | **string** | Maintenance margin required for the position, applicable to portfolio margin account | [optional] [readonly] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] [readonly] 
**realised_pnl** | **string** | Realized PNL | [optional] [readonly] 
**pnl_pnl** | **string** | Realized PNL - Position P/L | [optional] [readonly] 
**pnl_fund** | **string** | Realized PNL -  Funding Fees | [optional] [readonly] 
**pnl_fee** | **string** | Realized PNL - Transaction Fees | [optional] [readonly] 
**history_pnl** | **string** | History realized PNL | [optional] [readonly] 
**last_close_pnl** | **string** | PNL of last position close | [optional] [readonly] 
**realised_point** | **string** | Realized POINT PNL | [optional] [readonly] 
**history_point** | **string** | History realized POINT PNL | [optional] [readonly] 
**adl_ranking** | **int** | Ranking of auto deleveraging, a total of 1-5 grades, &#x60;1&#x60; is the highest, &#x60;5&#x60; is the lowest, and &#x60;6&#x60; is the special case when there is no position held or in liquidation | [optional] [readonly] 
**pending_orders** | **int** | Current open orders | [optional] [readonly] 
**close_order** | [**\GateApi\Model\PositionCloseOrder**](PositionCloseOrder.md) |  | [optional] 
**mode** | **string** | Position mode, including:  - &#x60;single&#x60;: dual mode is not enabled- &#x60;dual_long&#x60;: long position in dual mode- &#x60;dual_short&#x60;: short position in dual mode | [optional] 
**cross_leverage_limit** | **string** | Cross margin leverage(valid only when &#x60;leverage&#x60; is 0) | [optional] 
**update_time** | **int** | Last update time | [optional] [readonly] 
**update_id** | **int** | Update id. Each time the position is updated, the value will be +1. | [optional] [readonly] 
**open_time** | **int** | First Open Time | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
