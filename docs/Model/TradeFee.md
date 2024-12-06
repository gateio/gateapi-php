# # TradeFee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | User ID | [optional] 
**taker_fee** | **string** | taker fee rate | [optional] 
**maker_fee** | **string** | maker fee rate | [optional] 
**gt_discount** | **bool** | If GT deduction is enabled | [optional] 
**gt_taker_fee** | **string** | Taker fee rate if using GT deduction. It will be 0 if GT deduction is disabled | [optional] 
**gt_maker_fee** | **string** | Maker fee rate if using GT deduction. It will be 0 if GT deduction is disabled | [optional] 
**loan_fee** | **string** | Loan fee rate of margin lending | [optional] 
**point_type** | **string** | Point type. 0 - Initial version. 1 - new version since 202009 | [optional] 
**futures_taker_fee** | **string** | Futures trading taker fee | [optional] 
**futures_maker_fee** | **string** | Future trading maker fee | [optional] 
**delivery_taker_fee** | **string** | Delivery trading taker fee | [optional] 
**delivery_maker_fee** | **string** | Delivery trading maker fee | [optional] 
**debit_fee** | **int** | Deduction types for rates, 1 - GT deduction, 2 - Point card deduction, 3 - VIP rates | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
