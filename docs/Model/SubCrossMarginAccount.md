# # SubCrossMarginAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | Cross margin account user ID. 0 means this sub-account has not yet opened a cross margin account | [optional] 
**locked** | **bool** | Whether the account is locked | [optional] 
**balances** | [**map[string,\GateApi\Model\CrossMarginBalance]**](CrossMarginBalance.md) |  | [optional] 
**total** | **string** | Total account value in USDT, i.e., the sum of all currencies&#39; &#x60;(available+freeze)*price*discount&#x60; | [optional] 
**borrowed** | **string** | Total borrowed value in USDT, i.e., the sum of all currencies&#39; &#x60;borrowed*price*discount&#x60; | [optional] 
**borrowed_net** | **string** | Total borrowed value in USDT * leverage factor | [optional] 
**net** | **string** | Total net assets in USDT | [optional] 
**leverage** | **string** | Position leverage | [optional] 
**interest** | **string** | Total unpaid interest in USDT, i.e., the sum of all currencies&#39; &#x60;interest*price*discount&#x60; | [optional] 
**risk** | **string** | Risk rate. When it falls below 110%, liquidation will be triggered. Calculation formula: &#x60;total / (borrowed+interest)&#x60; | [optional] 
**total_initial_margin** | **string** | Total initial margin | [optional] 
**total_margin_balance** | **string** | Total margin balance | [optional] 
**total_maintenance_margin** | **string** | Total maintenance margin | [optional] 
**total_initial_margin_rate** | **string** | Total initial margin rate | [optional] 
**total_maintenance_margin_rate** | **string** | Total maintenance margin rate | [optional] 
**total_available_margin** | **string** | Total available margin | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
