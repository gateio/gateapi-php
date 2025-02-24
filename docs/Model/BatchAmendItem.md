# # BatchAmendItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The order ID returned upon successful creation or the custom ID specified by the user during creation (i.e., the &#39;text&#39; field). | 
**currency_pair** | **string** | Currency pair | 
**account** | **string** | Default spot, unified account and warehouse-by-store leverage account. | [optional] 
**amount** | **string** | trade amount, only one of amount and price can be specified | [optional] 
**price** | **string** | trade price, only one of amount and price can be specified | [optional] 
**amend_text** | **string** | Custom info during amending order | [optional] 
**action_mode** | **string** | Processing Mode: When placing an order, different fields are returned based on action_mode. This field is only valid during the request and is not included in the response result ACK: Asynchronous mode, only returns key order fields RESULT: No clearing information FULL: Full mode (default) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
