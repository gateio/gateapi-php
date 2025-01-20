# # UidPushOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Order ID | [optional] 
**push_uid** | **int** | Initiator User ID | [optional] 
**receive_uid** | **int** | Recipient User ID | [optional] 
**currency** | **string** | Currency name | [optional] 
**amount** | **string** | Transfer amount | [optional] 
**create_time** | **int** | Creation time | [optional] 
**status** | **string** | Withdrawal Status  - CREATING: Creating - PENDING: Waiting for receiving(Please contact the other party to accept the transfer on the Gate official website) - CANCELLING: Cancelling - CANCELLED: Revoked - REFUSING: Rejection - REFUSED: Rejected - RECEIVING: Receiving - RECEIVED: Success | [optional] 
**message** | **string** | PENDING Reason Tips | [optional] 
**transaction_type** | **string** | Order Type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
