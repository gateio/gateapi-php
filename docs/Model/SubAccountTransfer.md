# # SubAccountTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sub_account** | **string** | Sub account user ID | 
**sub_account_type** | **string** | Target sub-account trading account: spot - spot account, futures - perpetual contract account, delivery - delivery contract account, options - options account | [optional] [default to 'spot']
**currency** | **string** | Transfer currency name | 
**amount** | **string** | Transfer amount | 
**direction** | **string** | Transfer direction: to - transfer into sub-account, from - transfer out from sub-account | 
**client_order_id** | **string** | Customer-defined ID to prevent duplicate transfers. Can be a combination of letters (case-sensitive), numbers, hyphens &#39;-&#39;, and underscores &#39;_&#39;. Can be pure letters or pure numbers with length between 1-64 characters | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
