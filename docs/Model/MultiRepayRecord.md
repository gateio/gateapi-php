# # MultiRepayRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order ID | [optional] 
**record_id** | **int** | Repayment record ID | [optional] 
**init_ltv** | **string** | The initial collateralization rate | [optional] 
**before_ltv** | **string** | Ltv before the operation | [optional] 
**after_ltv** | **string** | Ltv after the operation | [optional] 
**borrow_time** | **int** | Borrowing time, timestamp in seconds. | [optional] 
**repay_time** | **int** | Repayment time, timestamp in seconds. | [optional] 
**borrow_currencies** | [**\GateApi\Model\RepayRecordCurrency[]**](RepayRecordCurrency.md) | List of borrowing information | [optional] 
**collateral_currencies** | [**\GateApi\Model\RepayRecordCurrency[]**](RepayRecordCurrency.md) | List of collateral information | [optional] 
**repaid_currencies** | [**\GateApi\Model\RepayRecordRepaidCurrency[]**](RepayRecordRepaidCurrency.md) | Repay Currency List | [optional] 
**total_interest_list** | [**\GateApi\Model\RepayRecordTotalInterest[]**](RepayRecordTotalInterest.md) | Total Interest List | [optional] 
**left_repay_interest_list** | [**\GateApi\Model\RepayRecordLeftInterest[]**](RepayRecordLeftInterest.md) | List of left repay interest | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
