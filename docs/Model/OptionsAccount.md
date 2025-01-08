# # OptionsAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **int** | User ID | [optional] 
**total** | **string** | Account balance | [optional] 
**position_value** | **string** | Position value, long position value is positive, short position value is negative | [optional] 
**equity** | **string** | Account equity, the sum of account balance and position value | [optional] 
**short_enabled** | **bool** | If the account is allowed to short | [optional] 
**mmp_enabled** | **bool** | Whether to enable MMP | [optional] 
**liq_triggered** | **bool** | Whether to trigger position liquidation | [optional] 
**margin_mode** | **int** | ｜ 保证金模式： - 0：经典现货保证金模式 - 1：跨币种保证金模式 - 2：组合保证金模式 | [optional] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] 
**init_margin** | **string** | Initial position margin | [optional] 
**maint_margin** | **string** | Position maintenance margin | [optional] 
**order_margin** | **string** | Order margin of unfinished orders | [optional] 
**ask_order_margin** | **string** | Margin for outstanding sell orders | [optional] 
**bid_order_margin** | **string** | Margin for outstanding buy orders | [optional] 
**available** | **string** | Available balance to transfer out or trade | [optional] 
**point** | **string** | POINT amount | [optional] 
**currency** | **string** | Settle currency | [optional] 
**orders_limit** | **int** | Maximum number of outstanding orders | [optional] 
**position_notional_limit** | **int** | Notional value upper limit, including the nominal value of positions and outstanding orders | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
