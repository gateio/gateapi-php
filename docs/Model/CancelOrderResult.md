# # CancelOrderResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_pair** | **string** | Order currency pair | [optional] 
**id** | **string** | Order ID | [optional] 
**text** | **string** | Custom order information | [optional] 
**succeeded** | **bool** | Whether cancellation succeeded | [optional] 
**label** | **string** | Error label when failed to cancel the order; emtpy if succeeded | [optional] 
**message** | **string** | Error message when failed to cancel the order; empty if succeeded | [optional] 
**account** | **string** | Empty by default. If cancelled order is cross margin order, this field is set to &#x60;cross_margin&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
