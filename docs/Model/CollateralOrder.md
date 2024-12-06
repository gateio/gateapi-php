# # CollateralOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** | Order ID | [optional] 
**collateral_currency** | **string** | Collateral | [optional] 
**collateral_amount** | **string** | Collateral amount | [optional] 
**borrow_currency** | **string** | Borrowed currency | [optional] 
**borrow_amount** | **string** | Borrowing amount | [optional] 
**repaid_amount** | **string** | Repaid amount | [optional] 
**repaid_principal** | **string** | Repaid principal | [optional] 
**repaid_interest** | **string** | Repaid interest | [optional] 
**init_ltv** | **string** | The initial collateralization rate | [optional] 
**current_ltv** | **string** | The current collateralization rate | [optional] 
**liquidate_ltv** | **string** | The liquidation collateralization rate | [optional] 
**status** | **string** | Order status: - initial: Initial state after placing the order - collateral_deducted: Collateral deduction successful - collateral_returning: Loan failed - Collateral return pending - lent: Loan successful - repaying: Repayment in progress - liquidating: Liquidation in progress - finished: Order completed - closed_liquidated: Liquidation and repayment completed | [optional] 
**borrow_time** | **int** | Borrowing time, timestamp in seconds | [optional] 
**left_repay_total** | **string** | Outstanding principal and interest (outstanding principal + outstanding interest) | [optional] 
**left_repay_principal** | **string** | outstanding principal | [optional] 
**left_repay_interest** | **string** | outstanding interest | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
