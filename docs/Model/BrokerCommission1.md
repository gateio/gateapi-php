# # BrokerCommission1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commission_time** | **int** | Commission time (Unix timestamp in seconds) | [optional] 
**user_id** | **int** | User ID | [optional] 
**group_name** | **string** | Group name | [optional] 
**amount** | **string** | The amount of commission rebates | [optional] 
**fee** | **string** | Fee | [optional] 
**fee_asset** | **string** | Fee currency | [optional] 
**rebate_fee** | **string** | The income from rebates, converted to USDT | [optional] 
**source** | **string** | Commission transaction type: Spot, Futures, Options, Alpha | [optional] 
**currency_pair** | **string** | Currency pair | [optional] 
**sub_broker_info** | [**\GateApi\Model\BrokerCommissionSubBrokerInfo**](BrokerCommissionSubBrokerInfo.md) |  | [optional] 
**alpha_contract_addr** | **string** | Alpha contract address | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
