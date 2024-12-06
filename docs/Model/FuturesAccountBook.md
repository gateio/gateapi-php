# # FuturesAccountBook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**time** | **double** | Change time | [optional] 
**change** | **string** | Change amount | [optional] 
**balance** | **string** | Balance after change | [optional] 
**type** | **string** | Changing Type：  - dnw: Deposit &amp; Withdraw - pnl: Profit &amp; Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding - point_dnw: POINT Deposit &amp; Withdraw - point_fee: POINT Trading fee - point_refr: POINT Referrer rebate - bonus_offset: bouns deduction | [optional] 
**text** | **string** | Comment | [optional] 
**contract** | **string** | Futures contract, the field is only available for data after 2023-10-30. | [optional] 
**trade_id** | **string** | trade id | [optional] 
**id** | **string** | 账户变更记录 id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
