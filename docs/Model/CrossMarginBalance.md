# # CrossMarginBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **string** | Available amount | [optional] 
**freeze** | **string** | Locked amount | [optional] 
**borrowed** | **string** | Borrowed amount | [optional] 
**interest** | **string** | Unpaid interests | [optional] 
**negative_liab** | **string** | Negative Liabilities. Formula:Min[available+total+unrealized_pnl,0] | [optional] 
**futures_pos_liab** | **string** | Borrowing to Open Positions in Futures | [optional] 
**equity** | **string** | Equity. Formula: available + freeze - borrowed + futures account&#39;s total + unrealized_pnl | [optional] 
**total_freeze** | **string** | Total freeze. Formula: freeze + position_initial_margin + order_margin | [optional] 
**total_liab** | **string** | Total liabilities. Formula: Max[Abs[Min[quity - total_freeze,0], borrowed]] - futures_pos_liab | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
