# # SubAccountTransferRecordItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timest** | **string** | Transfer timestamp | [optional] [readonly] 
**uid** | **string** | Main account user ID | [optional] [readonly] 
**sub_account** | **string** | Sub account user ID | 
**sub_account_type** | **string** | 操作的子账号交易账户， spot - 现货账户， futures - 永续合约账户， delivery - 交割合约账户, options - 期权账户 | [optional] [default to 'spot']
**currency** | **string** | Transfer currency name | 
**amount** | **string** | Transfer amount | 
**direction** | **string** | Transfer direction. to - transfer into sub account; from - transfer out from sub account | 
**source** | **string** | Where the operation is initiated from | [optional] [readonly] 
**client_order_id** | **string** | The custom ID provided by the customer serves as a safeguard against duplicate transfers. It can be a combination of letters (case-sensitive), numbers, hyphens &#39;-&#39;, and underscores &#39;_&#39;, with a length ranging from 1 to 64 characters. | [optional] 
**status** | **string** | Sub-account transfer record status, currently only success | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
