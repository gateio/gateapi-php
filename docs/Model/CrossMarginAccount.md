# # CrossMarginAccount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **int** | User ID | [optional] 
**refresh_time** | **int** | Time of the most recent refresh | [optional] 
**locked** | **bool** | Whether account is locked | [optional] 
**balances** | [**map[string,\GateApi\Model\CrossMarginBalance]**](CrossMarginBalance.md) |  | [optional] 
**total** | **string** | Total account value in USDT, i.e., the sum of all currencies&#39; &#x60;(available+freeze)*price*discount&#x60; | [optional] 
**borrowed** | **string** | Total borrowed value in USDT, i.e., the sum of all currencies&#39; &#x60;borrowed*price*discount&#x60; | [optional] 
**interest** | **string** | Total unpaid interests in USDT, i.e., the sum of all currencies&#39; &#x60;interest*price*discount&#x60; | [optional] 
**risk** | **string** | Risk rate. When it belows 110%, liquidation will be triggered. Calculation formula: &#x60;total / (borrowed+interest)&#x60; | [optional] 
**total_initial_margin** | **string** | Total initial margin | [optional] 
**total_margin_balance** | **string** | Total Margin Balance (∑(positive equity ＊ index price * discount) + ∑(negative equity * index price)) | [optional] 
**total_maintenance_margin** | **string** | Total maintenance margin | [optional] 
**total_initial_margin_rate** | **string** | Total initial margin rate | [optional] 
**total_maintenance_margin_rate** | **string** | Total maintenance margin rate | [optional] 
**total_available_margin** | **string** | Total available margin | [optional] 
**portfolio_margin_total** | **string** | Total amount of the portfolio margin account | [optional] 
**portfolio_margin_total_liab** | **string** | Total liabilities of the portfolio margin account | [optional] 
**portfolio_margin_total_equity** | **string** | Total equity of the portfolio margin account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
