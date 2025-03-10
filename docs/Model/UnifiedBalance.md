# # UnifiedBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **string** | Available amount is valid in single currency margin/cross-currency margin/combined margin mode, and the calculation is different in different modes | [optional] 
**freeze** | **string** | The locked amount is valid in single currency margin/cross-currency margin/combined margin mode | [optional] 
**borrowed** | **string** | Borrow limit, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode | [optional] 
**negative_liab** | **string** | Negative balance loan is valid in cross-currency margin/combined margin mode, and is 0 in other modes such as single-currency margin mode | [optional] 
**futures_pos_liab** | **string** | Contract opening position borrowing currency (abandoned, to be offline field) | [optional] 
**equity** | **string** | Equity, valid in single currency margin/cross currency margin/combined margin mode | [optional] 
**total_freeze** | **string** | Total occupancy (discarded, to be offline field) | [optional] 
**total_liab** | **string** | Total borrowing, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode | [optional] 
**spot_in_use** | **string** | The amount of spot hedging is valid in the combined margin mode, and is 0 in other margin modes such as single currency and cross-currency margin modes | [optional] 
**funding** | **string** | Uniloan financial management amount, effective when Uniloan financial management is turned on as a unified account margin switch | [optional] 
**funding_version** | **string** | Funding version | [optional] 
**cross_balance** | **string** | Full margin balance is valid in single currency margin mode, and is 0 in other modes such as cross currency margin/combined margin mode | [optional] 
**iso_balance** | **string** | Isolated margin balance is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**im** | **string** | Full-position initial margin is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**mm** | **string** | The full position maintains margin, which is valid in the single currency margin mode, and other cross-currency margin combination margin mode is 0. | [optional] 
**imr** | **string** | Full-position initial margin rate is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**mmr** | **string** | Full-position maintenance margin rate is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 
**margin_balance** | **string** | Full margin balance is valid in single currency margin mode and is 0 in other modes such as cross currency margin/combined margin mode | [optional] 
**available_margin** | **string** | Full margin available for full position is valid in single currency margin mode, and is 0 in other modes such as cross-currency margin/combined margin mode | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
