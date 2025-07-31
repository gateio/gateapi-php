# # Trade

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Fill ID | [optional] 
**create_time** | **string** | Fill Time | [optional] 
**create_time_ms** | **string** | Trading time, with millisecond precision | [optional] 
**currency_pair** | **string** | Currency pair | [optional] 
**side** | **string** | Buy or sell order | [optional] 
**role** | **string** | Trade role, not returned in public endpoints | [optional] 
**amount** | **string** | Trade amount | [optional] 
**price** | **string** | Order price | [optional] 
**order_id** | **string** | Related order ID, not returned in public endpoints | [optional] 
**fee** | **string** | Fee deducted, not returned in public endpoints | [optional] 
**fee_currency** | **string** | Fee currency unit, not returned in public endpoints | [optional] 
**point_fee** | **string** | Points used to deduct fee, not returned in public endpoints | [optional] 
**gt_fee** | **string** | GT used to deduct fee, not returned in public endpoints | [optional] 
**amend_text** | **string** | The custom data that the user remarked when amending the order | [optional] 
**sequence_id** | **string** | Consecutive trade ID within a single market. Used to track and identify trades in the specific market | [optional] 
**text** | **string** | User-defined information, not returned in public endpoints | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
