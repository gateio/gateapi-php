# # SpotFee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | User ID | [optional] 
**taker_fee** | **string** | taker fee rate | [optional] 
**maker_fee** | **string** | maker fee rate | [optional] 
**gt_discount** | **bool** | Whether GT deduction discount is enabled | [optional] 
**gt_taker_fee** | **string** | Taker fee rate if using GT deduction. It will be 0 if GT deduction is disabled | [optional] 
**gt_maker_fee** | **string** | Maker fee rate with GT deduction. Returns 0 if GT deduction is disabled | [optional] 
**loan_fee** | **string** | Loan fee rate of margin lending | [optional] 
**point_type** | **string** | Point card type: 0 - Original version, 1 - New version since 202009 | [optional] 
**currency_pair** | **string** | Currency pair | [optional] 
**debit_fee** | **int** | Deduction types for rates, 1 - GT deduction, 2 - Point card deduction, 3 - VIP rates | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
