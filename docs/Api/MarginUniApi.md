# GateApi\MarginUniApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUniCurrencyPairs**](MarginUniApi.md#listUniCurrencyPairs) | **GET** /margin/uni/currency_pairs | List lending markets
[**getUniCurrencyPair**](MarginUniApi.md#getUniCurrencyPair) | **GET** /margin/uni/currency_pairs/{currency_pair} | Get detail of lending market
[**getMarginUniEstimateRate**](MarginUniApi.md#getMarginUniEstimateRate) | **GET** /margin/uni/estimate_rate | Estimate interest Rate
[**listUniLoans**](MarginUniApi.md#listUniLoans) | **GET** /margin/uni/loans | List loans
[**createUniLoan**](MarginUniApi.md#createUniLoan) | **POST** /margin/uni/loans | Borrow or repay
[**listUniLoanRecords**](MarginUniApi.md#listUniLoanRecords) | **GET** /margin/uni/loan_records | Get load records
[**listUniLoanInterestRecords**](MarginUniApi.md#listUniLoanInterestRecords) | **GET** /margin/uni/interest_records | List interest records
[**getUniBorrowable**](MarginUniApi.md#getUniBorrowable) | **GET** /margin/uni/borrowable | Get maximum borrowable


## listUniCurrencyPairs

> \GateApi\Model\UniCurrencyPair[] listUniCurrencyPairs()

List lending markets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listUniCurrencyPairs();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->listUniCurrencyPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UniCurrencyPair[]**](../Model/UniCurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUniCurrencyPair

> \GateApi\Model\UniCurrencyPair getUniCurrencyPair($currency_pair)

Get detail of lending market

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_pair = 'AE_USDT'; // string | Currency pair

try {
    $result = $apiInstance->getUniCurrencyPair($currency_pair);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->getUniCurrencyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |

### Return type

[**\GateApi\Model\UniCurrencyPair**](../Model/UniCurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMarginUniEstimateRate

> map[string,string] getMarginUniEstimateRate($currencies)

Estimate interest Rate

Please note that the interest rates are subject to change based on the borrowing and lending demand, and therefore, the provided rates may not be entirely accurate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currencies = array('[\"BTC\",\"GT\"]'); // string[] | An array of up to 10 specifying the currency name

try {
    $result = $apiInstance->getMarginUniEstimateRate($currencies);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->getMarginUniEstimateRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currencies** | [**string[]**](../Model/string.md)| An array of up to 10 specifying the currency name |

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


## listUniLoans

> \GateApi\Model\UniLoan[] listUniLoans($currency_pair, $currency, $page, $limit)

List loans

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100

try {
    $result = $apiInstance->listUniLoans($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->listUniLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]

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


## createUniLoan

> createUniLoan($create_uni_loan)

Borrow or repay

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_uni_loan = new \GateApi\Model\CreateUniLoan(); // \GateApi\Model\CreateUniLoan | 

try {
    $apiInstance->createUniLoan($create_uni_loan);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->createUniLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_uni_loan** | [**\GateApi\Model\CreateUniLoan**](../Model/CreateUniLoan.md)|  |

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


## listUniLoanRecords

> \GateApi\Model\UniLoanRecord[] listUniLoanRecords($type, $currency, $currency_pair, $page, $limit)

Get load records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = 'type_example'; // string | type: borrow - borrow, repay - repay
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100

try {
    $result = $apiInstance->listUniLoanRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->listUniLoanRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type: borrow - borrow, repay - repay | [optional]
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **currency_pair** | **string**| Currency pair | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]

### Return type

[**\GateApi\Model\UniLoanRecord[]**](../Model/UniLoanRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUniLoanInterestRecords

> \GateApi\Model\UniLoanInterestRecord[] listUniLoanInterestRecords($currency_pair, $currency, $page, $limit, $from, $to)

List interest records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listUniLoanInterestRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->listUniLoanInterestRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

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


## getUniBorrowable

> \GateApi\Model\MaxUniBorrowable getUniBorrowable($currency, $currency_pair)

Get maximum borrowable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MarginUniApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'BTC'; // string | Retrieve data of the specified currency
$currency_pair = 'BTC_USDT'; // string | Currency pair

try {
    $result = $apiInstance->getUniBorrowable($currency, $currency_pair);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MarginUniApi->getUniBorrowable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency |
 **currency_pair** | **string**| Currency pair |

### Return type

[**\GateApi\Model\MaxUniBorrowable**](../Model/MaxUniBorrowable.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

