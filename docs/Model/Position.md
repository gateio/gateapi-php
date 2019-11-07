# Position

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **int** | User ID | [optional] 
**contract** | **string** | Futures contract | [optional] 
**size** | **int** | Position size | [optional] 
**leverage** | **string** | Position leverage. 0 means cross margin; positive number means isolated margin | [optional] 
**risk_limit** | **string** | Position risk limit | [optional] 
**leverage_max** | **string** | Maximum leverage under current risk limit | [optional] 
**maintenance_rate** | **string** | Maintenance rate under current risk limit | [optional] 
**value** | **string** | Position value calculated in settlement currency | [optional] 
**margin** | **string** | Position margin | [optional] 
**entry_price** | **string** | Entry price | [optional] 
**liq_price** | **string** | Liquidation price | [optional] 
**mark_price** | **string** | Current mark price | [optional] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] 
**realised_pnl** | **string** | Realized PNL | [optional] 
**history_pnl** | **string** | History realized PNL | [optional] 
**last_close_pnl** | **string** | PNL of last position close | [optional] 
**realised_point** | **string** | Realized POINT PNL | [optional] 
**history_point** | **string** | History realized POINT PNL | [optional] 
**adl_ranking** | **int** | ADL ranking, range from 1 to 5 | [optional] 
**pending_orders** | **int** | Current open orders | [optional] 
**close_order** | [**\GateApi\Model\PositionCloseOrder**](PositionCloseOrder.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


