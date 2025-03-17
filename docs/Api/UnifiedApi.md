# GateApi\UnifiedApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUnifiedAccounts**](UnifiedApi.md#listUnifiedAccounts) | **GET** /unified/accounts | Get unified account information
[**getUnifiedBorrowable**](UnifiedApi.md#getUnifiedBorrowable) | **GET** /unified/borrowable | Query about the maximum borrowing for the unified account
[**getUnifiedTransferable**](UnifiedApi.md#getUnifiedTransferable) | **GET** /unified/transferable | Query about the maximum transferable for the unified account
[**listUnifiedLoans**](UnifiedApi.md#listUnifiedLoans) | **GET** /unified/loans | List loans
[**createUnifiedLoan**](UnifiedApi.md#createUnifiedLoan) | **POST** /unified/loans | Borrow or repay
[**listUnifiedLoanRecords**](UnifiedApi.md#listUnifiedLoanRecords) | **GET** /unified/loan_records | Get load records
[**listUnifiedLoanInterestRecords**](UnifiedApi.md#listUnifiedLoanInterestRecords) | **GET** /unified/interest_records | List interest records
[**getUnifiedRiskUnits**](UnifiedApi.md#getUnifiedRiskUnits) | **GET** /unified/risk_units | Get user risk unit details
[**getUnifiedMode**](UnifiedApi.md#getUnifiedMode) | **GET** /unified/unified_mode | Query mode of the unified account
[**setUnifiedMode**](UnifiedApi.md#setUnifiedMode) | **PUT** /unified/unified_mode | Set mode of the unified account
[**getUnifiedEstimateRate**](UnifiedApi.md#getUnifiedEstimateRate) | **GET** /unified/estimate_rate | Get unified estimate rate
[**listCurrencyDiscountTiers**](UnifiedApi.md#listCurrencyDiscountTiers) | **GET** /unified/currency_discount_tiers | List currency discount tiers
[**listLoanMarginTiers**](UnifiedApi.md#listLoanMarginTiers) | **GET** /unified/loan_margin_tiers | List loan margin tiers
[**calculatePortfolioMargin**](UnifiedApi.md#calculatePortfolioMargin) | **POST** /unified/portfolio_calculator | Portfolio margin calculator
[**getUserLeverageCurrencyConfig**](UnifiedApi.md#getUserLeverageCurrencyConfig) | **GET** /unified/leverage/user_currency_config | Minimum currency leverage that can be set
[**getUserLeverageCurrencySetting**](UnifiedApi.md#getUserLeverageCurrencySetting) | **GET** /unified/leverage/user_currency_setting | Get the leverage multiple of the user currency
[**setUserLeverageCurrencySetting**](UnifiedApi.md#setUserLeverageCurrencySetting) | **POST** /unified/leverage/user_currency_setting | Set the loan currency leverage
[**listUnifiedCurrencies**](UnifiedApi.md#listUnifiedCurrencies) | **GET** /unified/currencies | List of loan currencies supported by unified account
[**getHistoryLoanRate**](UnifiedApi.md#getHistoryLoanRate) | **GET** /unified/history_loan_rate | get historical lending rates


## listUnifiedAccounts

> \GateApi\Model\UnifiedAccount listUnifiedAccounts($currency, $sub_uid)

Get unified account information

The assets of each currency in the account will be adjusted according to their liquidity, defined by corresponding adjustment coefficients, and then uniformly converted to USD to calculate the total asset value and position value of the account.  You can refer to the [Formula](#portfolio-account) in the documentation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['sub_uid'] = '10001'; // string | Sub account user ID

try {
    $result = $apiInstance->listUnifiedAccounts($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listUnifiedAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **sub_uid** | **string**| Sub account user ID | [optional]

### Return type

[**\GateApi\Model\UnifiedAccount**](../Model/UnifiedAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUnifiedBorrowable

> \GateApi\Model\UnifiedBorrowable getUnifiedBorrowable($currency)

Query about the maximum borrowing for the unified account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'BTC'; // string | Retrieve data of the specified currency

try {
    $result = $apiInstance->getUnifiedBorrowable($currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUnifiedBorrowable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency |

### Return type

[**\GateApi\Model\UnifiedBorrowable**](../Model/UnifiedBorrowable.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUnifiedTransferable

> \GateApi\Model\UnifiedTransferable getUnifiedTransferable($currency)

Query about the maximum transferable for the unified account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'BTC'; // string | Retrieve data of the specified currency

try {
    $result = $apiInstance->getUnifiedTransferable($currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUnifiedTransferable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency |

### Return type

[**\GateApi\Model\UnifiedTransferable**](../Model/UnifiedTransferable.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUnifiedLoans

> \GateApi\Model\UniLoan[] listUnifiedLoans($currency, $page, $limit, $type)

List loans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100
$associate_array['type'] = 'platform'; // string | Loan type, platform - platform, margin - margin

try {
    $result = $apiInstance->listUnifiedLoans($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listUnifiedLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]
 **type** | **string**| Loan type, platform - platform, margin - margin | [optional]

### Return type

[**\GateApi\Model\UniLoan[]**](../Model/UniLoan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createUnifiedLoan

> createUnifiedLoan($unified_loan)

Borrow or repay

When borrowing, it is essential to ensure that the borrowed amount is not below the minimum borrowing threshold for the specific cryptocurrency and does not exceed the maximum borrowing limit set by the platform and the user.  The interest on the loan will be automatically deducted from the account at regular intervals. It is the user's responsibility to manage the repayment of the borrowed amount.  For repayment, the option to repay the entire borrowed amount is available by setting the parameter `repaid_all=true`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unified_loan = new \GateApi\Model\UnifiedLoan(); // \GateApi\Model\UnifiedLoan | 

try {
    $apiInstance->createUnifiedLoan($unified_loan);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->createUnifiedLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unified_loan** | [**\GateApi\Model\UnifiedLoan**](../Model/UnifiedLoan.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUnifiedLoanRecords

> \GateApi\Model\UnifiedLoanRecord[] listUnifiedLoanRecords($type, $currency, $page, $limit)

Get load records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = 'type_example'; // string | The types of lending records, borrow - indicates the action of borrowing funds, repay - indicates the action of repaying the borrowed funds
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100

try {
    $result = $apiInstance->listUnifiedLoanRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listUnifiedLoanRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| The types of lending records, borrow - indicates the action of borrowing funds, repay - indicates the action of repaying the borrowed funds | [optional]
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]

### Return type

[**\GateApi\Model\UnifiedLoanRecord[]**](../Model/UnifiedLoanRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUnifiedLoanInterestRecords

> \GateApi\Model\UniLoanInterestRecord[] listUnifiedLoanInterestRecords($currency, $page, $limit, $from, $to, $type)

List interest records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100
$associate_array['from'] = 1627706330; // int | Start timestamp of the query
$associate_array['to'] = 1635329650; // int | Time range ending, default to current time
$associate_array['type'] = 'platform'; // string | Loan type, platform loan - platform, leverage loan - margin, if not passed, defaults to margin

try {
    $result = $apiInstance->listUnifiedLoanInterestRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listUnifiedLoanInterestRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **type** | **string**| Loan type, platform loan - platform, leverage loan - margin, if not passed, defaults to margin | [optional]

### Return type

[**\GateApi\Model\UniLoanInterestRecord[]**](../Model/UniLoanInterestRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUnifiedRiskUnits

> \GateApi\Model\UnifiedRiskUnits getUnifiedRiskUnits()

Get user risk unit details

Retrieve user risk unit details, only valid in portfolio margin mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnifiedRiskUnits();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUnifiedRiskUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UnifiedRiskUnits**](../Model/UnifiedRiskUnits.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUnifiedMode

> \GateApi\Model\UnifiedModeSet getUnifiedMode()

Query mode of the unified account

Unified account mode: - `classic`: Classic account mode - `multi_currency`: Cross-currency margin mode - `portfolio`: Portfolio margin mode - `single_currency`: Single-currency margin mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUnifiedMode();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUnifiedMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UnifiedModeSet**](../Model/UnifiedModeSet.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setUnifiedMode

> setUnifiedMode($unified_mode_set)

Set mode of the unified account

Switching each account mode only requires passing the parameters of the corresponding account mode, and supports turning on or off the configuration switch in the corresponding account mode when switching the account mode  - When opening the classic account mode, mode=classic ```  PUT /unified/unified_mode  {  \"mode\": \"classic\"  } ``` - Open the cross-currency margin mode, mode=multi_currency ```  PUT /unified/unified_mode  {  \"mode\": \"multi_currency\",  \"settings\": {  \"usdt_futures\": true  }  } ``` - When the portfolio margin mode is enabled, mode=portfolio ```  PUT /unified/unified_mode  {  \"mode\": \"portfolio\",  \"settings\": {  \"spot_hedge\": true  }  } ``` - When opening a single currency margin mode, mode=single_currency ```  PUT /unified/unified_mode  {  \"mode\": \"single_currency\"  } ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unified_mode_set = new \GateApi\Model\UnifiedModeSet(); // \GateApi\Model\UnifiedModeSet | 

try {
    $apiInstance->setUnifiedMode($unified_mode_set);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->setUnifiedMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unified_mode_set** | [**\GateApi\Model\UnifiedModeSet**](../Model/UnifiedModeSet.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUnifiedEstimateRate

> map[string,string] getUnifiedEstimateRate($currencies)

Get unified estimate rate

Due to fluctuations in lending depth, hourly interest rates may vary, and thus, I cannot provide exact rates. When a currency is not supported, the interest rate returned will be an empty string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currencies = array('[\"BTC\",\"GT\"]'); // string[] | Specify the currency names for querying in an array, separated by commas, with a maximum of 10 currencies.

try {
    $result = $apiInstance->getUnifiedEstimateRate($currencies);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUnifiedEstimateRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currencies** | [**string[]**](../Model/string.md)| Specify the currency names for querying in an array, separated by commas, with a maximum of 10 currencies. |

### Return type

**map[string,string]**

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCurrencyDiscountTiers

> \GateApi\Model\UnifiedDiscount[] listCurrencyDiscountTiers()

List currency discount tiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCurrencyDiscountTiers();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listCurrencyDiscountTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UnifiedDiscount[]**](../Model/UnifiedDiscount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLoanMarginTiers

> \GateApi\Model\UnifiedMarginTiers[] listLoanMarginTiers()

List loan margin tiers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listLoanMarginTiers();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listLoanMarginTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UnifiedMarginTiers[]**](../Model/UnifiedMarginTiers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## calculatePortfolioMargin

> \GateApi\Model\UnifiedPortfolioOutput calculatePortfolioMargin($unified_portfolio_input)

Portfolio margin calculator

Portfolio Margin Calculator When inputting a simulated position portfolio, each position includes the position name and quantity held, supporting markets within the range of BTC and ETH perpetual contracts, options, and spot markets. When inputting simulated orders, each order includes the market identifier, order price, and order quantity,  supporting markets within the range of BTC and ETH perpetual contracts, options, and spot markets. Market orders are not included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unified_portfolio_input = new \GateApi\Model\UnifiedPortfolioInput(); // \GateApi\Model\UnifiedPortfolioInput | 

try {
    $result = $apiInstance->calculatePortfolioMargin($unified_portfolio_input);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->calculatePortfolioMargin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unified_portfolio_input** | [**\GateApi\Model\UnifiedPortfolioInput**](../Model/UnifiedPortfolioInput.md)|  |

### Return type

[**\GateApi\Model\UnifiedPortfolioOutput**](../Model/UnifiedPortfolioOutput.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserLeverageCurrencyConfig

> \GateApi\Model\UnifiedLeverageConfig getUserLeverageCurrencyConfig($currency)

Minimum currency leverage that can be set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'BTC'; // string | Currency

try {
    $result = $apiInstance->getUserLeverageCurrencyConfig($currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUserLeverageCurrencyConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency |

### Return type

[**\GateApi\Model\UnifiedLeverageConfig**](../Model/UnifiedLeverageConfig.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserLeverageCurrencySetting

> \GateApi\Model\UnifiedLeverageSetting getUserLeverageCurrencySetting($currency)

Get the leverage multiple of the user currency

Get the user's currency leverage. If currency is not passed, query all currencies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Currency

try {
    $result = $apiInstance->getUserLeverageCurrencySetting($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getUserLeverageCurrencySetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency | [optional]

### Return type

[**\GateApi\Model\UnifiedLeverageSetting**](../Model/UnifiedLeverageSetting.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setUserLeverageCurrencySetting

> setUserLeverageCurrencySetting($unified_leverage_setting)

Set the loan currency leverage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unified_leverage_setting = new \GateApi\Model\UnifiedLeverageSetting(); // \GateApi\Model\UnifiedLeverageSetting | 

try {
    $apiInstance->setUserLeverageCurrencySetting($unified_leverage_setting);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->setUserLeverageCurrencySetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unified_leverage_setting** | [**\GateApi\Model\UnifiedLeverageSetting**](../Model/UnifiedLeverageSetting.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUnifiedCurrencies

> \GateApi\Model\UnifiedCurrency[] listUnifiedCurrencies($currency)

List of loan currencies supported by unified account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency'] = 'BTC'; // string | Currency

try {
    $result = $apiInstance->listUnifiedCurrencies($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->listUnifiedCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency | [optional]

### Return type

[**\GateApi\Model\UnifiedCurrency[]**](../Model/UnifiedCurrency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getHistoryLoanRate

> \GateApi\Model\UnifiedHistoryLoanRate getHistoryLoanRate($currency, $tier, $page, $limit)

get historical lending rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\UnifiedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'USDT'; // string | Currency
$associate_array['tier'] = '1'; // string | The VIP level of the floating rate that needs to be queried
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100

try {
    $result = $apiInstance->getHistoryLoanRate($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling UnifiedApi->getHistoryLoanRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency |
 **tier** | **string**| The VIP level of the floating rate that needs to be queried | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]

### Return type

[**\GateApi\Model\UnifiedHistoryLoanRate**](../Model/UnifiedHistoryLoanRate.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

