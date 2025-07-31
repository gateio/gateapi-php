# # MarginAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_pair** | **string** | Currency pair | [optional] 
**account_type** | **string** | Account type: risk - risk rate account, mmr - maintenance margin rate account, inactive - market not activated | [optional] 
**leverage** | **string** | User&#39;s current market leverage multiplier | [optional] 
**locked** | **bool** | Whether the account is locked | [optional] 
**risk** | **string** | Current risk rate of the margin account (returned when the account is a risk rate account) | [optional] 
**mmr** | **string** | Leveraged Account Current Maintenance Margin Rate (returned when the Account is Account) | [optional] 
**base** | [**\GateApi\Model\MarginAccountCurrency**](MarginAccountCurrency.md) |  | [optional] 
**quote** | [**\GateApi\Model\MarginAccountCurrency**](MarginAccountCurrency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
