# # UnifiedLoanRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id | [optional] [readonly] 
**type** | **string** | type: borrow - borrow, repay - repay | [optional] [readonly] 
**repayment_type** | **string** | Repayment type: none - no repayment type, manual_repay - manual repayment, auto_repay - automatic repayment, cancel_auto_repay - automatic repayment after cancellation | [optional] [readonly] 
**borrow_type** | **string** | Loan type, returned when querying loan records. manual_borrow - Manual repayment , auto_borrow - Automatic repayment | [optional] 
**currency_pair** | **string** | Currency pair | [optional] [readonly] 
**currency** | **string** | Currency | [optional] [readonly] 
**amount** | **string** | The amount of lending or repaying | [optional] [readonly] 
**create_time** | **int** | Created time | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
