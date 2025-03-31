# # MarginAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_pair** | **string** | Currency pair | [optional] 
**account_type** | **string** | Account type, risk - risk rate account, mmr - maintenance margin rate account, inactive - market not activated | [optional] 
**leverage** | **string** | User current market leverage multiple | [optional] 
**locked** | **bool** | Whether account is locked | [optional] 
**risk** | **string** | Leveraged Account Current Risk Rate (Returned when the Account is a Risk Rate Account) | [optional] 
**mmr** | **string** | Leveraged Account Current Maintenance Margin Rate (returned when the Account is a Maintenance Margin Rate Account) | [optional] 
**base** | [**\GateApi\Model\MarginAccountCurrency**](MarginAccountCurrency.md) |  | [optional] 
**quote** | [**\GateApi\Model\MarginAccountCurrency**](MarginAccountCurrency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
