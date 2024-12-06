# # FuturesAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **string** | total is the balance after the user&#39;s accumulated deposit, withdraw, profit and loss (including realized profit and loss, fund, fee and referral rebate), excluding unrealized profit and loss.  total &#x3D; SUM(history_dnw, history_pnl, history_fee, history_refr, history_fund) | [optional] 
**unrealised_pnl** | **string** | Unrealized PNL | [optional] 
**position_margin** | **string** | Position margin | [optional] 
**order_margin** | **string** | Order margin of unfinished orders | [optional] 
**available** | **string** | The available balance for transferring or trading(including bonus.  Bonus can&#39;t be be withdrawn. The transfer amount needs to deduct the bonus) | [optional] 
**point** | **string** | POINT amount | [optional] 
**currency** | **string** | Settle currency | [optional] 
**in_dual_mode** | **bool** | Whether dual mode is enabled | [optional] 
**enable_credit** | **bool** | Whether portfolio margin account mode is enabled | [optional] 
**position_initial_margin** | **string** | Initial margin position, applicable to the portfolio margin account model | [optional] 
**maintenance_margin** | **string** | The maintenance deposit occupied by the position is suitable for the new classic account margin model and unified account model | [optional] 
**bonus** | **string** | Perpetual Contract Bonus | [optional] 
**enable_evolved_classic** | **bool** | Classic account margin mode, true-new mode, false-old mode | [optional] 
**cross_order_margin** | **string** | Full -warehouse hanging order deposit, suitable for the new classic account margin model | [optional] 
**cross_initial_margin** | **string** | The initial security deposit of the full warehouse is suitable for the new classic account margin model | [optional] 
**cross_maintenance_margin** | **string** | Maintain deposit in full warehouse, suitable for new classic account margin models | [optional] 
**cross_unrealised_pnl** | **string** | The full warehouse does not achieve profit and loss, suitable for the new classic account margin model | [optional] 
**cross_available** | **string** | Full warehouse available amount, suitable for the new classic account margin model | [optional] 
**isolated_position_margin** | **string** | Ware -position margin, suitable for the new classic account margin model | [optional] 
**enable_new_dual_mode** | **bool** | Whether to open a new two-way position mode | [optional] 
**margin_mode** | **int** | Margin mode, 0-classic margin mode, 1-cross-currency margin mode, 2-combined margin mode | [optional] 
**history** | [**\GateApi\Model\FuturesAccountHistory**](FuturesAccountHistory.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
