# # FuturesTrade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Trade ID. | [optional] 
**create_time** | **double** | Trading time. | [optional] 
**create_time_ms** | **double** | Trading time, with milliseconds set to 3 decimal places. | [optional] 
**contract** | **string** | Futures contract. | [optional] 
**size** | **int** | Trading size. | [optional] 
**price** | **string** | Trading price (quote currency). | [optional] 
**is_internal** | **bool** | Whether internal trade. Internal trade refers to the takeover of liquidation orders by the insurance fund and ADL users. Since it is not a normal matching on the market depth, the transaction price may deviate, and it will not be recorded in the K-line. an internal trade, this field will not be returned. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
