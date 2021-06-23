# # CrossMarginAccountBook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Balance change record ID | [optional] 
**time** | **int** | Account changed timestamp in milliseconds | [optional] 
**currency** | **string** | Currency changed | [optional] 
**change** | **string** | Amount changed. Positive value means transferring in, while negative out | [optional] 
**balance** | **string** | Balance after change | [optional] 
**type** | **string** | Account change type, including:  - in: transferals into cross margin account - out: transferals out from cross margin account - repay: loan repayment - borrow: borrowed loan - new_order: new order locked - order_fill: order fills - referral_fee: fee refund from referrals - order_fee: order fee generated from fills - unknown: unknown type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
