# # LedgerRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Record ID | [optional] [readonly] 
**txid** | **string** | Hash record of the withdrawal | [optional] [readonly] 
**timestamp** | **string** | Record time | [optional] [readonly] 
**amount** | **string** | Trade amount | 
**currency** | **string** | Record currency | 
**address** | **string** | Withdrawal address. Required for withdrawals | [optional] 
**memo** | **string** | Extra withdrawal memo | [optional] 
**status** | **string** | Record status.  - DONE: done - CANCEL: cancelled - REQUEST: requesting - MANUAL: waiting for manual approval - BCODE: GateCode operation | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
