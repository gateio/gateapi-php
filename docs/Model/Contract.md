# Contract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Futures name | [optional] 
**type** | **string** | Futures type | [optional] 
**quanto_multiplier** | **string** | Multiplier used in converting from invoicing to settlement currency in quanto futures | [optional] 
**leverage_min** | **string** | minimum leverage | [optional] 
**leverage_max** | **string** | maximum leverage | [optional] 
**mark_type** | **string** | mark price type, internal - based on internal trading, index - based on external index price | [optional] 
**mark_price** | **string** | latest mark price | [optional] 
**index_price** | **string** | latest index price | [optional] 
**maintenance_rate** | **string** | maintenance rate of margin | [optional] 
**funding_rate** | **string** | funding rate | [optional] 
**funding_interval** | **int** | funding application interval, unit in seconds | [optional] 
**funding_next_apply** | **float** | next funding time | [optional] 
**risk_limit_base** | **string** | risk limit base | [optional] 
**risk_limit_step** | **string** | step of adjusting risk limit | [optional] 
**risk_limit_max** | **string** | maximum risk limit the contract allowed | [optional] 
**order_size_min** | **int** | minimum order size the contract allowed | [optional] 
**order_size_max** | **int** | maximum order size the contract allowed | [optional] 
**order_price_deviate** | **string** | deviation between order price and current index price. If price of an order is denoted as &#x60;order_price&#x60;, it must meet the following condition:      abs(order_price - mark_price) &lt;&#x3D; mark_price * order_price_deviate | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


