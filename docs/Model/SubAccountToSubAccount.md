# # SubAccountToSubAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Transfer currency name | 
**sub_account_type** | **string** | Transfer from the account. (deprecate, use &#x60;sub_account_from_type&#x60; and &#x60;sub_account_to_type&#x60; instead) | [optional] 
**sub_account_from** | **string** | Transfer from the user id of the sub-account | 
**sub_account_from_type** | **string** | The sub-account&#39;s outgoing trading account, spot - spot account, futures - perpetual contract account, delivery - delivery contract account. | 
**sub_account_to** | **string** | Transfer to the user id of the sub-account | 
**sub_account_to_type** | **string** | The sub-account&#39;s incoming trading account, spot - spot account, futures - perpetual contract account, delivery - delivery contract account | 
**amount** | **string** | Transfer amount | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
