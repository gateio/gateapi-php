# Position

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contract** | **string** | futures contract name | [optional] 
**size** | **int** | position size | [optional] 
**leverage** | **string** | position leverage | [optional] 
**leverage_max** | **string** | maximum leverage of position | [optional] 
**value** | **string** | position value calculated in settlement currency | [optional] 
**margin** | **string** | position margin | [optional] 
**entry_price** | **string** | entry price | [optional] 
**liq_price** | **string** | liquidation price | [optional] 
**unrealised_pnl** | **string** | unrealised pnl | [optional] 
**realised_pnl** | **string** | realised pnl | [optional] 
**history_pnl** | **string** | history realised pnl | [optional] 
**locked** | **bool** | is position locked. e.g. position will be locked if failed to liquidate | [optional] 
**risk_limit** | **string** | position risk limit | [optional] 
**adl_ranking** | **int** | AutoDeleverage ranking, from 1 to 5. Ranking larger than 5 is not considered | [optional] 
**close_price** | **string** | close price of position in closing. 0 if position is not in closing | [optional] 
**close_order_id** | **string** | close order id if position in closing | [optional] 
**last_close_pnl** | **string** | last closed pnl | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


