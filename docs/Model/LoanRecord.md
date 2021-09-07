# # LoanRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Loan record ID | [optional] 
**loan_id** | **string** | Loan ID the record belongs to | [optional] 
**create_time** | **string** | Loan time | [optional] 
**expire_time** | **string** | Expiration time | [optional] 
**status** | **string** | Loan record status | [optional] 
**borrow_user_id** | **string** | Garbled user ID | [optional] 
**currency** | **string** | Loan currency | [optional] 
**rate** | **string** | Loan rate | [optional] 
**amount** | **string** | Loan amount | [optional] 
**days** | **int** | Loan days | [optional] 
**auto_renew** | **bool** | Whether the record will auto renew on expiration | [optional] [default to false]
**repaid** | **string** | Repaid amount | [optional] 
**paid_interest** | **string** | Repaid interest | [optional] [readonly] 
**unpaid_interest** | **string** | Outstanding interest yet to be paid | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
