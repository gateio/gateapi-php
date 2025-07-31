# # WithdrawalRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Record ID | [optional] [readonly] 
**txid** | **string** | Hash record of the withdrawal | [optional] [readonly] 
**block_number** | **string** | Block Number | [optional] [readonly] 
**withdraw_order_id** | **string** | Client order id, up to 32 length and can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.) | [optional] 
**timestamp** | **string** | Operation time | [optional] [readonly] 
**amount** | **string** | Token amount | 
**fee** | **string** | fee | [optional] [readonly] 
**currency** | **string** | Currency name | 
**address** | **string** | Withdrawal address | [optional] 
**fail_reason** | **string** | Reason for withdrawal failure. Has a value when status &#x3D; CANCEL, empty for all other statuses | [optional] 
**timestamp2** | **string** | Withdrawal final time, i.e.: withdrawal cancellation time or withdrawal success time When status &#x3D; CANCEL, corresponds to cancellation time When status &#x3D; DONE and block_number &gt; 0, it is the withdrawal success time | [optional] 
**memo** | **string** | Additional remarks with regards to the withdrawal | [optional] 
**status** | **string** | Transaction status  - DONE: Completed (block_number &gt; 0 is considered to be truly completed) - CANCEL: Canceled - REQUEST: Requesting - MANUAL: Pending manual review - BCODE: Recharge code operation - EXTPEND: Sent awaiting confirmation - FAIL: Failure on the chain awaiting confirmation - INVALID: Invalid order - VERIFY: Verifying - PROCES: Processing - PEND: Processing - DMOVE: pending manual review - REVIEW: Under review | [optional] [readonly] 
**chain** | **string** | Name of the chain used in withdrawals | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
