# GateApi
APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 4.13.0
- Package version: 4.13.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.gate.io/page/contacts](https://www.gate.io/page/contacts)

## Specific note for 4.8.0

**BREAKING** change:

4.8.0 add new support with different settle currency for futures API(BTC is the only one allowed before), which makes ALL methods in FuturesApi REQUIRE an additional `settle` parameter.

But previous `/futures/xxx` APIs are still preserved for compatibility usage(will be treated as BTC), so if one of the following condition is met:

- Changing all your futures method call to include `settle` is not a big issue for you
- You need to use futures settled in non-BTC currency

then you'd better move to 4.8.0 and changes all your futures method call to pass in `settle` parameter. Otherwise, you can stick to version<=4.7.3,
but will not receive any future API upgrade support

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/gateio/gateapi-php.git"
    }
  ],
  "require": {
    "gateio/gateapi": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/GateApi/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$order_id = '12345'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->cancelFuturesOrder($settle, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelFuturesOrder: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.gateio.ws/api/v4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FuturesApi* | [**cancelFuturesOrder**](docs/Api/FuturesApi.md#cancelfuturesorder) | **DELETE** /futures/{settle}/orders/{order_id} | Cancel a single order
*FuturesApi* | [**cancelFuturesOrders**](docs/Api/FuturesApi.md#cancelfuturesorders) | **DELETE** /futures/{settle}/orders | Cancel all &#x60;open&#x60; orders matched
*FuturesApi* | [**cancelPriceTriggeredOrder**](docs/Api/FuturesApi.md#cancelpricetriggeredorder) | **DELETE** /futures/{settle}/price_orders/{order_id} | Cancel a single order
*FuturesApi* | [**cancelPriceTriggeredOrderList**](docs/Api/FuturesApi.md#cancelpricetriggeredorderlist) | **DELETE** /futures/{settle}/price_orders | Cancel all open orders
*FuturesApi* | [**createFuturesOrder**](docs/Api/FuturesApi.md#createfuturesorder) | **POST** /futures/{settle}/orders | Create a futures order
*FuturesApi* | [**createPriceTriggeredOrder**](docs/Api/FuturesApi.md#createpricetriggeredorder) | **POST** /futures/{settle}/price_orders | Create a price-triggered order
*FuturesApi* | [**getFuturesContract**](docs/Api/FuturesApi.md#getfuturescontract) | **GET** /futures/{settle}/contracts/{contract} | Get a single contract
*FuturesApi* | [**getFuturesOrder**](docs/Api/FuturesApi.md#getfuturesorder) | **GET** /futures/{settle}/orders/{order_id} | Get a single order
*FuturesApi* | [**getMyTrades**](docs/Api/FuturesApi.md#getmytrades) | **GET** /futures/{settle}/my_trades | List personal trading history
*FuturesApi* | [**getPosition**](docs/Api/FuturesApi.md#getposition) | **GET** /futures/{settle}/positions/{contract} | Get single position
*FuturesApi* | [**getPriceTriggeredOrder**](docs/Api/FuturesApi.md#getpricetriggeredorder) | **GET** /futures/{settle}/price_orders/{order_id} | Get a single order
*FuturesApi* | [**listFuturesAccountBook**](docs/Api/FuturesApi.md#listfuturesaccountbook) | **GET** /futures/{settle}/account_book | Query account book
*FuturesApi* | [**listFuturesAccounts**](docs/Api/FuturesApi.md#listfuturesaccounts) | **GET** /futures/{settle}/accounts | Query futures account
*FuturesApi* | [**listFuturesCandlesticks**](docs/Api/FuturesApi.md#listfuturescandlesticks) | **GET** /futures/{settle}/candlesticks | Get futures candlesticks
*FuturesApi* | [**listFuturesContracts**](docs/Api/FuturesApi.md#listfuturescontracts) | **GET** /futures/{settle}/contracts | List all futures contracts
*FuturesApi* | [**listFuturesFundingRateHistory**](docs/Api/FuturesApi.md#listfuturesfundingratehistory) | **GET** /futures/{settle}/funding_rate | Funding rate history
*FuturesApi* | [**listFuturesInsuranceLedger**](docs/Api/FuturesApi.md#listfuturesinsuranceledger) | **GET** /futures/{settle}/insurance | Futures insurance balance history
*FuturesApi* | [**listFuturesOrderBook**](docs/Api/FuturesApi.md#listfuturesorderbook) | **GET** /futures/{settle}/order_book | Futures order book
*FuturesApi* | [**listFuturesOrders**](docs/Api/FuturesApi.md#listfuturesorders) | **GET** /futures/{settle}/orders | List futures orders
*FuturesApi* | [**listFuturesTickers**](docs/Api/FuturesApi.md#listfuturestickers) | **GET** /futures/{settle}/tickers | List futures tickers
*FuturesApi* | [**listFuturesTrades**](docs/Api/FuturesApi.md#listfuturestrades) | **GET** /futures/{settle}/trades | Futures trading history
*FuturesApi* | [**listLiquidates**](docs/Api/FuturesApi.md#listliquidates) | **GET** /futures/{settle}/liquidates | List liquidation history
*FuturesApi* | [**listPositionClose**](docs/Api/FuturesApi.md#listpositionclose) | **GET** /futures/{settle}/position_close | List position close history
*FuturesApi* | [**listPositions**](docs/Api/FuturesApi.md#listpositions) | **GET** /futures/{settle}/positions | List all positions of a user
*FuturesApi* | [**listPriceTriggeredOrders**](docs/Api/FuturesApi.md#listpricetriggeredorders) | **GET** /futures/{settle}/price_orders | List all auto orders
*FuturesApi* | [**updatePositionLeverage**](docs/Api/FuturesApi.md#updatepositionleverage) | **POST** /futures/{settle}/positions/{contract}/leverage | Update position leverage
*FuturesApi* | [**updatePositionMargin**](docs/Api/FuturesApi.md#updatepositionmargin) | **POST** /futures/{settle}/positions/{contract}/margin | Update position margin
*FuturesApi* | [**updatePositionRiskLimit**](docs/Api/FuturesApi.md#updatepositionrisklimit) | **POST** /futures/{settle}/positions/{contract}/risk_limit | Update position risk limit
*MarginApi* | [**cancelLoan**](docs/Api/MarginApi.md#cancelloan) | **DELETE** /margin/loans/{loan_id} | Cancel lending loan
*MarginApi* | [**createLoan**](docs/Api/MarginApi.md#createloan) | **POST** /margin/loans | Lend or borrow
*MarginApi* | [**getLoan**](docs/Api/MarginApi.md#getloan) | **GET** /margin/loans/{loan_id} | Retrieve one single loan detail
*MarginApi* | [**getLoanRecord**](docs/Api/MarginApi.md#getloanrecord) | **GET** /margin/loan_records/{loan_record_id} | Get one single loan record
*MarginApi* | [**listFundingAccounts**](docs/Api/MarginApi.md#listfundingaccounts) | **GET** /margin/funding_accounts | Funding account list
*MarginApi* | [**listFundingBook**](docs/Api/MarginApi.md#listfundingbook) | **GET** /margin/funding_book | Order book of lending loans
*MarginApi* | [**listLoanRecords**](docs/Api/MarginApi.md#listloanrecords) | **GET** /margin/loan_records | List repayment records of specified loan
*MarginApi* | [**listLoanRepayments**](docs/Api/MarginApi.md#listloanrepayments) | **GET** /margin/loans/{loan_id}/repayment | List loan repayment records
*MarginApi* | [**listLoans**](docs/Api/MarginApi.md#listloans) | **GET** /margin/loans | List all loans
*MarginApi* | [**listMarginAccounts**](docs/Api/MarginApi.md#listmarginaccounts) | **GET** /margin/accounts | Margin account list
*MarginApi* | [**listMarginCurrencyPairs**](docs/Api/MarginApi.md#listmargincurrencypairs) | **GET** /margin/currency_pairs | List all supported currency pairs supported in margin trading
*MarginApi* | [**mergeLoans**](docs/Api/MarginApi.md#mergeloans) | **POST** /margin/merged_loans | Merge multiple lending loans
*MarginApi* | [**repayLoan**](docs/Api/MarginApi.md#repayloan) | **POST** /margin/loans/{loan_id}/repayment | Repay a loan
*MarginApi* | [**updateLoan**](docs/Api/MarginApi.md#updateloan) | **PATCH** /margin/loans/{loan_id} | Modify a loan
*MarginApi* | [**updateLoanRecord**](docs/Api/MarginApi.md#updateloanrecord) | **PATCH** /margin/loan_records/{loan_record_id} | Modify a loan record
*SpotApi* | [**cancelBatchOrders**](docs/Api/SpotApi.md#cancelbatchorders) | **POST** /spot/cancel_batch_orders | Cancel a batch of orders with an ID list
*SpotApi* | [**cancelOrder**](docs/Api/SpotApi.md#cancelorder) | **DELETE** /spot/orders/{order_id} | Cancel a single order
*SpotApi* | [**cancelOrders**](docs/Api/SpotApi.md#cancelorders) | **DELETE** /spot/orders | Cancel all &#x60;open&#x60; orders in specified currency pair
*SpotApi* | [**createBatchOrders**](docs/Api/SpotApi.md#createbatchorders) | **POST** /spot/batch_orders | Create a batch of orders
*SpotApi* | [**createOrder**](docs/Api/SpotApi.md#createorder) | **POST** /spot/orders | Create an order
*SpotApi* | [**getCurrencyPair**](docs/Api/SpotApi.md#getcurrencypair) | **GET** /spot/currency_pairs/{currency_pair} | Get detail of one single order
*SpotApi* | [**getOrder**](docs/Api/SpotApi.md#getorder) | **GET** /spot/orders/{order_id} | Get a single order
*SpotApi* | [**listCandlesticks**](docs/Api/SpotApi.md#listcandlesticks) | **GET** /spot/candlesticks | Market candlesticks
*SpotApi* | [**listCurrencyPairs**](docs/Api/SpotApi.md#listcurrencypairs) | **GET** /spot/currency_pairs | List all currency pairs supported
*SpotApi* | [**listMyTrades**](docs/Api/SpotApi.md#listmytrades) | **GET** /spot/my_trades | List personal trading history
*SpotApi* | [**listOrderBook**](docs/Api/SpotApi.md#listorderbook) | **GET** /spot/order_book | Retrieve order book
*SpotApi* | [**listOrders**](docs/Api/SpotApi.md#listorders) | **GET** /spot/orders | List orders
*SpotApi* | [**listSpotAccounts**](docs/Api/SpotApi.md#listspotaccounts) | **GET** /spot/accounts | List spot accounts
*SpotApi* | [**listTickers**](docs/Api/SpotApi.md#listtickers) | **GET** /spot/tickers | Retrieve ticker information
*SpotApi* | [**listTrades**](docs/Api/SpotApi.md#listtrades) | **GET** /spot/trades | Retrieve market trades
*WalletApi* | [**getDepositAddress**](docs/Api/WalletApi.md#getdepositaddress) | **GET** /wallet/deposit_address | Generate currency deposit address
*WalletApi* | [**listDeposits**](docs/Api/WalletApi.md#listdeposits) | **GET** /wallet/deposits | Retrieve deposit records. Time range cannot exceed 30 days
*WalletApi* | [**listWithdrawals**](docs/Api/WalletApi.md#listwithdrawals) | **GET** /wallet/withdrawals | Retrieve withdrawal records. Time range cannot exceed 30 days
*WalletApi* | [**transfer**](docs/Api/WalletApi.md#transfer) | **POST** /wallet/transfers | Transfer between accounts
*WalletApi* | [**transferWithSubAccount**](docs/Api/WalletApi.md#transferwithsubaccount) | **POST** /wallet/sub_account_transfers | Transfer between main and sub accounts
*WithdrawalApi* | [**withdraw**](docs/Api/WithdrawalApi.md#withdraw) | **POST** /withdrawals | Withdraw


## Documentation For Models

 - [BatchOrder](docs/Model/BatchOrder.md)
 - [CancelOrder](docs/Model/CancelOrder.md)
 - [CancelOrderResult](docs/Model/CancelOrderResult.md)
 - [Contract](docs/Model/Contract.md)
 - [CurrencyPair](docs/Model/CurrencyPair.md)
 - [DepositAddress](docs/Model/DepositAddress.md)
 - [FundingAccount](docs/Model/FundingAccount.md)
 - [FundingBookItem](docs/Model/FundingBookItem.md)
 - [FundingRateRecord](docs/Model/FundingRateRecord.md)
 - [FuturesAccount](docs/Model/FuturesAccount.md)
 - [FuturesAccountBook](docs/Model/FuturesAccountBook.md)
 - [FuturesCandlestick](docs/Model/FuturesCandlestick.md)
 - [FuturesInitialOrder](docs/Model/FuturesInitialOrder.md)
 - [FuturesLiquidate](docs/Model/FuturesLiquidate.md)
 - [FuturesOrder](docs/Model/FuturesOrder.md)
 - [FuturesOrderBook](docs/Model/FuturesOrderBook.md)
 - [FuturesOrderBookItem](docs/Model/FuturesOrderBookItem.md)
 - [FuturesPriceTrigger](docs/Model/FuturesPriceTrigger.md)
 - [FuturesPriceTriggeredOrder](docs/Model/FuturesPriceTriggeredOrder.md)
 - [FuturesTicker](docs/Model/FuturesTicker.md)
 - [FuturesTrade](docs/Model/FuturesTrade.md)
 - [InsuranceRecord](docs/Model/InsuranceRecord.md)
 - [LedgerRecord](docs/Model/LedgerRecord.md)
 - [Loan](docs/Model/Loan.md)
 - [LoanPatch](docs/Model/LoanPatch.md)
 - [LoanRecord](docs/Model/LoanRecord.md)
 - [MarginAccount](docs/Model/MarginAccount.md)
 - [MarginAccountCurrency](docs/Model/MarginAccountCurrency.md)
 - [MarginCurrencyPair](docs/Model/MarginCurrencyPair.md)
 - [MyFuturesTrade](docs/Model/MyFuturesTrade.md)
 - [Order](docs/Model/Order.md)
 - [OrderBook](docs/Model/OrderBook.md)
 - [Position](docs/Model/Position.md)
 - [PositionClose](docs/Model/PositionClose.md)
 - [PositionCloseOrder](docs/Model/PositionCloseOrder.md)
 - [RepayRequest](docs/Model/RepayRequest.md)
 - [Repayment](docs/Model/Repayment.md)
 - [SpotAccount](docs/Model/SpotAccount.md)
 - [SubAccountTransfer](docs/Model/SubAccountTransfer.md)
 - [Ticker](docs/Model/Ticker.md)
 - [Trade](docs/Model/Trade.md)
 - [Transfer](docs/Model/Transfer.md)
 - [TriggerOrderResponse](docs/Model/TriggerOrderResponse.md)


## Author

support@mail.gate.io


