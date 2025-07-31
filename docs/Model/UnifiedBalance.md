# # UnifiedBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **string** | Available balance, valid in single currency margin/cross-currency margin/combined margin mode, calculation varies by mode | [optional] 
**freeze** | **string** | Locked balance, valid in single currency margin/cross-currency margin/combined margin mode | [optional] 
**borrowed** | **string** | Borrowed amount, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode | [optional] 
**negative_liab** | **string** | Negative balance borrowing, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode | [optional] 
**futures_pos_liab** | **string** | Contract opening position borrowing currency (abandoned, to be offline field) | [optional] 
**equity** | **string** | Equity, valid in single currency margin/cross currency margin/combined margin mode | [optional] 
**total_freeze** | **string** | Total frozen (deprecated, to be removed) | [optional] 
**total_liab** | **string** | Total borrowed amount, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode | [optional] 
**spot_in_use** | **string** | The amount of spot hedging is valid in the combined margin mode, and is 0 in other margin modes such as single currency and cross-currency margin modes | [optional] 
**funding** | **string** | Uniloan financial management amount, effective when turned on as a unified account margin switch | [optional] 
**funding_version** | **string** | Funding version | [optional] 
**cross_balance** | **string** | Full margin balance is valid in single currency margin mode, and is 0 in other modes such as cross currency margin/combined margin mode | [optional] 
**iso_balance** | **string** | Isolated margin balance is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**im** | **string** | Full-position initial margin is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**mm** | **string** | Cross margin maintenance margin, valid in single-currency margin mode, 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**imr** | **string** | Full-position initial margin rate is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**mmr** | **string** | Full-position maintenance margin rate is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**margin_balance** | **string** | Full margin balance is valid in single currency margin mode and is 0 in other modes such as cross currency margin/combined margin mode | [optional] 
**available_margin** | **string** | Cross margin available balance, valid in single currency margin mode, 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**enabled_collateral** | **bool** | Currency enabled as margin: true - Enabled, false - Disabled | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
