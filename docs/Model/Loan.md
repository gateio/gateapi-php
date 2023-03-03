# # Loan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Loan ID | [optional] [readonly] 
**create_time** | **string** | Creation time | [optional] [readonly] 
**expire_time** | **string** | Repay time of the loan. No value will be returned for lending loan | [optional] [readonly] 
**status** | **string** | Loan status  open - not fully loaned loaned - all loaned out for lending loan; loaned in for borrowing side finished - loan is finished, either being all repaid or cancelled by the lender auto_repaid - automatically repaid by the system | [optional] [readonly] 
**side** | **string** | Loan side | 
**currency** | **string** | Loan currency | 
**rate** | **string** | Loan rate. Only rates in [0.0001, 0.01] are supported.  Not required in lending. Market rate calculated from recent rates will be used if not set | [optional] 
**amount** | **string** | Loan amount | 
**days** | **int** | Loan days. Only 10 is supported for now | [optional] 
**auto_renew** | **bool** | Whether to auto renew the loan upon expiration | [optional] [default to false]
**currency_pair** | **string** | Currency pair. Required if borrowing | [optional] 
**left** | **string** | Amount not lent out yet | [optional] [readonly] 
**repaid** | **string** | Repaid amount | [optional] [readonly] 
**paid_interest** | **string** | Repaid interest | [optional] [readonly] 
**unpaid_interest** | **string** | Outstanding interest yet to be paid | [optional] [readonly] 
**fee_rate** | **string** | Loan fee rate | [optional] 
**orig_id** | **string** | Original loan ID of the loan if auto-renewed, otherwise equals to id | [optional] 
**text** | **string** | User defined custom ID | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
