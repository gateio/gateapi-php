# # CollateralOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order ID | [optional] 
**collateral_currency** | **string** | Collateral currency | [optional] 
**collateral_amount** | **string** | Collateral amount | [optional] 
**borrow_currency** | **string** | Borrowed currency | [optional] 
**borrow_amount** | **string** | Borrowed amount | [optional] 
**repaid_amount** | **string** | Repaid amount | [optional] 
**repaid_principal** | **string** | Repaid principal | [optional] 
**repaid_interest** | **string** | Repaid interest | [optional] 
**init_ltv** | **string** | Initial collateralization rate | [optional] 
**current_ltv** | **string** | Current collateralization rate | [optional] 
**liquidate_ltv** | **string** | Liquidation collateralization rate | [optional] 
**status** | **string** | Order status: - initial: Initial state after placing the order - collateral_deducted: Collateral deduction successful - collateral_returning: Loan failed - Collateral return pending - lent: Loan successful - repaying: Repayment in progress - liquidating: Liquidation in progress - finished: Order completed - closed_liquidated: Liquidation and repayment completed | [optional] 
**borrow_time** | **int** | Borrowing time, timestamp in seconds | [optional] 
**left_repay_total** | **string** | Outstanding principal and interest (outstanding principal + outstanding interest) | [optional] 
**left_repay_principal** | **string** | Outstanding principal | [optional] 
**left_repay_interest** | **string** | Outstanding interest | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
