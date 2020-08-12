# GateApi\MarginApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listMarginCurrencyPairs**](MarginApi.md#listMarginCurrencyPairs) | **GET** /margin/currency_pairs | List all supported currency pairs supported in margin trading
[**listFundingBook**](MarginApi.md#listFundingBook) | **GET** /margin/funding_book | Order book of lending loans
[**listMarginAccounts**](MarginApi.md#listMarginAccounts) | **GET** /margin/accounts | Margin account list
[**listMarginAccountBook**](MarginApi.md#listMarginAccountBook) | **GET** /margin/account_book | List margin account balance change history
[**listFundingAccounts**](MarginApi.md#listFundingAccounts) | **GET** /margin/funding_accounts | Funding account list
[**listLoans**](MarginApi.md#listLoans) | **GET** /margin/loans | List all loans
[**createLoan**](MarginApi.md#createLoan) | **POST** /margin/loans | Lend or borrow
[**mergeLoans**](MarginApi.md#mergeLoans) | **POST** /margin/merged_loans | Merge multiple lending loans
[**getLoan**](MarginApi.md#getLoan) | **GET** /margin/loans/{loan_id} | Retrieve one single loan detail
[**cancelLoan**](MarginApi.md#cancelLoan) | **DELETE** /margin/loans/{loan_id} | Cancel lending loan
[**updateLoan**](MarginApi.md#updateLoan) | **PATCH** /margin/loans/{loan_id} | Modify a loan
[**listLoanRepayments**](MarginApi.md#listLoanRepayments) | **GET** /margin/loans/{loan_id}/repayment | List loan repayment records
[**repayLoan**](MarginApi.md#repayLoan) | **POST** /margin/loans/{loan_id}/repayment | Repay a loan
[**listLoanRecords**](MarginApi.md#listLoanRecords) | **GET** /margin/loan_records | List repayment records of specified loan
[**getLoanRecord**](MarginApi.md#getLoanRecord) | **GET** /margin/loan_records/{loan_record_id} | Get one single loan record
[**updateLoanRecord**](MarginApi.md#updateLoanRecord) | **PATCH** /margin/loan_records/{loan_record_id} | Modify a loan record


## listMarginCurrencyPairs

> \GateApi\Model\MarginCurrencyPair[] listMarginCurrencyPairs()

List all supported currency pairs supported in margin trading

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listMarginCurrencyPairs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listMarginCurrencyPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\MarginCurrencyPair[]**](../Model/MarginCurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFundingBook

> \GateApi\Model\FundingBookItem[] listFundingBook($currency)

Order book of lending loans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->listFundingBook($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listFundingBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data |

### Return type

[**\GateApi\Model\FundingBookItem[]**](../Model/FundingBookItem.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMarginAccounts

> \GateApi\Model\MarginAccount[] listMarginAccounts($currency_pair)

Margin account list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair

try {
    $result = $apiInstance->listMarginAccounts($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listMarginAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]

### Return type

[**\GateApi\Model\MarginAccount[]**](../Model/MarginAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMarginAccountBook

> \GateApi\Model\MarginAccountBook[] listMarginAccountBook($currency, $currency_pair, $from, $to, $page, $limit)

List margin account balance change history

Only transferring from or to margin account are provided for now. Time range allows 30 days at most

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'currency_example'; // string | List records related to specified currency only. If specified, `currency_pair` is also required.
$associate_array['currency_pair'] = 'currency_pair_example'; // string | List records related to specified currency pair. Used in combination with `currency`. Ignored if `currency` is not provided
$associate_array['from'] = 56; // int | Time range beginning, default to 7 days before current time
$associate_array['to'] = 56; // int | Time range ending, default to current time
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records returned in one list

try {
    $result = $apiInstance->listMarginAccountBook($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listMarginAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| List records related to specified currency only. If specified, &#x60;currency_pair&#x60; is also required. | [optional]
 **currency_pair** | **string**| List records related to specified currency pair. Used in combination with &#x60;currency&#x60;. Ignored if &#x60;currency&#x60; is not provided | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\MarginAccountBook[]**](../Model/MarginAccountBook.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFundingAccounts

> \GateApi\Model\FundingAccount[] listFundingAccounts($currency)

Funding account list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->listFundingAccounts($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listFundingAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data | [optional]

### Return type

[**\GateApi\Model\FundingAccount[]**](../Model/FundingAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLoans

> \GateApi\Model\Loan[] listLoans($status, $side, $currency, $currency_pair, $sort_by, $reverse_sort, $page, $limit)

List all loans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['status'] = 'open'; // string | Loan status
$associate_array['side'] = 'lend'; // string | Lend or borrow
$associate_array['currency'] = 'BTC'; // string | Retrieved specified currency related data
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['sort_by'] = 'rate'; // string | Specify which field is used to sort. `create_time` or `rate` is supported. Default to `create_time`
$associate_array['reverse_sort'] = false; // bool | Whether to sort in descending order. Default to `true`
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records returned in one list

try {
    $result = $apiInstance->listLoans($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Loan status |
 **side** | **string**| Lend or borrow |
 **currency** | **string**| Retrieved specified currency related data | [optional]
 **currency_pair** | **string**| Currency pair | [optional]
 **sort_by** | **string**| Specify which field is used to sort. &#x60;create_time&#x60; or &#x60;rate&#x60; is supported. Default to &#x60;create_time&#x60; | [optional]
 **reverse_sort** | **bool**| Whether to sort in descending order. Default to &#x60;true&#x60; | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\Loan[]**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createLoan

> \GateApi\Model\Loan createLoan($loan)

Lend or borrow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan = new \GateApi\Model\Loan(); // \GateApi\Model\Loan | 

try {
    $result = $apiInstance->createLoan($loan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->createLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan** | [**\GateApi\Model\Loan**](../Model/Loan.md)|  |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## mergeLoans

> \GateApi\Model\Loan mergeLoans($currency, $ids)

Merge multiple lending loans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'BTC'; // string | Retrieved specified currency related data
$ids = '123,234,345'; // string | Lending loan ID list separated by `,`. Maximum of 20 IDs are allowed in one request

try {
    $result = $apiInstance->mergeLoans($currency, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->mergeLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data |
 **ids** | **string**| Lending loan ID list separated by &#x60;,&#x60;. Maximum of 20 IDs are allowed in one request |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoan

> \GateApi\Model\Loan getLoan($loan_id, $side)

Retrieve one single loan detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_id = '12345'; // string | Loan ID
$side = 'lend'; // string | Lend or borrow

try {
    $result = $apiInstance->getLoan($loan_id, $side);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->getLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |
 **side** | **string**| Lend or borrow |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelLoan

> \GateApi\Model\Loan cancelLoan($loan_id, $currency)

Cancel lending loan

Only lending loans can be cancelled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_id = '12345'; // string | Loan ID
$currency = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->cancelLoan($loan_id, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->cancelLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |
 **currency** | **string**| Retrieved specified currency related data |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateLoan

> \GateApi\Model\Loan updateLoan($loan_id, $loan_patch)

Modify a loan

Only `auto_renew` modification is supported currently

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_id = '12345'; // string | Loan ID
$loan_patch = new \GateApi\Model\LoanPatch(); // \GateApi\Model\LoanPatch | 

try {
    $result = $apiInstance->updateLoan($loan_id, $loan_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->updateLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |
 **loan_patch** | [**\GateApi\Model\LoanPatch**](../Model/LoanPatch.md)|  |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLoanRepayments

> \GateApi\Model\Repayment[] listLoanRepayments($loan_id)

List loan repayment records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_id = '12345'; // string | Loan ID

try {
    $result = $apiInstance->listLoanRepayments($loan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listLoanRepayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |

### Return type

[**\GateApi\Model\Repayment[]**](../Model/Repayment.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## repayLoan

> \GateApi\Model\Loan repayLoan($loan_id, $repay_request)

Repay a loan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_id = '12345'; // string | Loan ID
$repay_request = new \GateApi\Model\RepayRequest(); // \GateApi\Model\RepayRequest | 

try {
    $result = $apiInstance->repayLoan($loan_id, $repay_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->repayLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |
 **repay_request** | [**\GateApi\Model\RepayRequest**](../Model/RepayRequest.md)|  |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLoanRecords

> \GateApi\Model\LoanRecord[] listLoanRecords($loan_id, $status, $page, $limit)

List repayment records of specified loan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['loan_id'] = '12345'; // string | Loan ID
$associate_array['status'] = 'loaned'; // string | Loan record status
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records returned in one list

try {
    $result = $apiInstance->listLoanRecords($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listLoanRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |
 **status** | **string**| Loan record status | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\LoanRecord[]**](../Model/LoanRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLoanRecord

> \GateApi\Model\LoanRecord getLoanRecord($loan_record_id, $loan_id)

Get one single loan record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_record_id = '12345'; // string | Loan record ID
$loan_id = '12345'; // string | Loan ID

try {
    $result = $apiInstance->getLoanRecord($loan_record_id, $loan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->getLoanRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_record_id** | **string**| Loan record ID |
 **loan_id** | **string**| Loan ID |

### Return type

[**\GateApi\Model\LoanRecord**](../Model/LoanRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateLoanRecord

> \GateApi\Model\LoanRecord updateLoanRecord($loan_record_id, $loan_patch)

Modify a loan record

Only `auto_renew` modification is supported currently

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loan_record_id = '12345'; // string | Loan record ID
$loan_patch = new \GateApi\Model\LoanPatch(); // \GateApi\Model\LoanPatch | 

try {
    $result = $apiInstance->updateLoanRecord($loan_record_id, $loan_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->updateLoanRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_record_id** | **string**| Loan record ID |
 **loan_patch** | [**\GateApi\Model\LoanPatch**](../Model/LoanPatch.md)|  |

### Return type

[**\GateApi\Model\LoanRecord**](../Model/LoanRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

