# # Currency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency** | **string** | Currency symbol | [optional] 
**name** | **string** | Currency name | [optional] 
**delisted** | **bool** | Whether currency is de-listed | [optional] 
**withdraw_disabled** | **bool** | Whether currency&#39;s withdrawal is disabled (deprecated) | [optional] 
**withdraw_delayed** | **bool** | Whether currency&#39;s withdrawal is delayed (deprecated) | [optional] 
**deposit_disabled** | **bool** | Whether currency&#39;s deposit is disabled (deprecated) | [optional] 
**trade_disabled** | **bool** | Whether currency&#39;s trading is disabled | [optional] 
**fixed_rate** | **string** | Fixed fee rate. Only for fixed rate currencies, not valid for normal currencies | [optional] 
**chain** | **string** | The main chain corresponding to the coin | [optional] 
**chains** | [**\GateApi\Model\SpotCurrencyChain[]**](SpotCurrencyChain.md) | All links corresponding to coins | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
