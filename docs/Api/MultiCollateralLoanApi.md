# GateApi\MultiCollateralLoanApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listMultiCollateralOrders**](MultiCollateralLoanApi.md#listMultiCollateralOrders) | **GET** /loan/multi_collateral/orders | Query multi-currency collateral order list
[**createMultiCollateral**](MultiCollateralLoanApi.md#createMultiCollateral) | **POST** /loan/multi_collateral/orders | Place multi-currency collateral order
[**getMultiCollateralOrderDetail**](MultiCollateralLoanApi.md#getMultiCollateralOrderDetail) | **GET** /loan/multi_collateral/orders/{order_id} | Query order details
[**listMultiRepayRecords**](MultiCollateralLoanApi.md#listMultiRepayRecords) | **GET** /loan/multi_collateral/repay | Query multi-currency collateral repayment records
[**repayMultiCollateralLoan**](MultiCollateralLoanApi.md#repayMultiCollateralLoan) | **POST** /loan/multi_collateral/repay | Multi-currency collateral repayment
[**listMultiCollateralRecords**](MultiCollateralLoanApi.md#listMultiCollateralRecords) | **GET** /loan/multi_collateral/mortgage | Query collateral adjustment records
[**operateMultiCollateral**](MultiCollateralLoanApi.md#operateMultiCollateral) | **POST** /loan/multi_collateral/mortgage | Add or withdraw collateral
[**listUserCurrencyQuota**](MultiCollateralLoanApi.md#listUserCurrencyQuota) | **GET** /loan/multi_collateral/currency_quota | Query user&#39;s collateral and borrowing currency quota information
[**listMultiCollateralCurrencies**](MultiCollateralLoanApi.md#listMultiCollateralCurrencies) | **GET** /loan/multi_collateral/currencies | Query supported borrowing and collateral currencies for multi-currency collateral
[**getMultiCollateralLtv**](MultiCollateralLoanApi.md#getMultiCollateralLtv) | **GET** /loan/multi_collateral/ltv | Query collateralization ratio information
[**getMultiCollateralFixRate**](MultiCollateralLoanApi.md#getMultiCollateralFixRate) | **GET** /loan/multi_collateral/fixed_rate | Query currency&#39;s 7-day and 30-day fixed interest rates
[**getMultiCollateralCurrentRate**](MultiCollateralLoanApi.md#getMultiCollateralCurrentRate) | **GET** /loan/multi_collateral/current_rate | Query currency&#39;s current interest rate


## listMultiCollateralOrders

> \GateApi\Model\MultiCollateralOrder[] listMultiCollateralOrders($page, $limit, $sort, $order_type)

Query multi-currency collateral order list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 10; // int | Maximum number of records returned in a single list
$associate_array['sort'] = 'ltv_asc'; // string | Sort type: `time_desc` - Created time descending (default), `ltv_asc` - Collateral ratio ascending, `ltv_desc` - Collateral ratio descending.
$associate_array['order_type'] = 'current'; // string | Order type: current - Query current orders, fixed - Query fixed orders, defaults to current orders if not specifiedOrder type: current - Query current orders, fixed - Query fixed orders, defaults to current orders if not specified

try {
    $result = $apiInstance->listMultiCollateralOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->listMultiCollateralOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 10]
 **sort** | **string**| Sort type: &#x60;time_desc&#x60; - Created time descending (default), &#x60;ltv_asc&#x60; - Collateral ratio ascending, &#x60;ltv_desc&#x60; - Collateral ratio descending. | [optional]
 **order_type** | **string**| Order type: current - Query current orders, fixed - Query fixed orders, defaults to current orders if not specifiedOrder type: current - Query current orders, fixed - Query fixed orders, defaults to current orders if not specified | [optional]

### Return type

[**\GateApi\Model\MultiCollateralOrder[]**](../Model/MultiCollateralOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createMultiCollateral

> \GateApi\Model\OrderResp createMultiCollateral($create_multi_collateral_order)

Place multi-currency collateral order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_multi_collateral_order = new \GateApi\Model\CreateMultiCollateralOrder(); // \GateApi\Model\CreateMultiCollateralOrder | 

try {
    $result = $apiInstance->createMultiCollateral($create_multi_collateral_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->createMultiCollateral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_multi_collateral_order** | [**\GateApi\Model\CreateMultiCollateralOrder**](../Model/CreateMultiCollateralOrder.md)|  |

### Return type

[**\GateApi\Model\OrderResp**](../Model/OrderResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMultiCollateralOrderDetail

> \GateApi\Model\MultiCollateralOrder getMultiCollateralOrderDetail($order_id)

Query order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = '12345'; // string | Order ID returned when order is successfully created

try {
    $result = $apiInstance->getMultiCollateralOrderDetail($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->getMultiCollateralOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID returned when order is successfully created |

### Return type

[**\GateApi\Model\MultiCollateralOrder**](../Model/MultiCollateralOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMultiRepayRecords

> \GateApi\Model\MultiRepayRecord[] listMultiRepayRecords($type, $borrow_currency, $page, $limit, $from, $to)

Query multi-currency collateral repayment records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = 'repay'; // string | Operation type: repay - Regular repayment, liquidate - Liquidation
$associate_array['borrow_currency'] = 'USDT'; // string | Borrowed currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 10; // int | Maximum number of records returned in a single list
$associate_array['from'] = 1609459200; // int | Start timestamp for the query
$associate_array['to'] = 1609459200; // int | End timestamp for the query, defaults to current time if not specified

try {
    $result = $apiInstance->listMultiRepayRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->listMultiRepayRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Operation type: repay - Regular repayment, liquidate - Liquidation |
 **borrow_currency** | **string**| Borrowed currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 10]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]

### Return type

[**\GateApi\Model\MultiRepayRecord[]**](../Model/MultiRepayRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## repayMultiCollateralLoan

> \GateApi\Model\MultiRepayResp repayMultiCollateralLoan($repay_multi_loan)

Multi-currency collateral repayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repay_multi_loan = new \GateApi\Model\RepayMultiLoan(); // \GateApi\Model\RepayMultiLoan | 

try {
    $result = $apiInstance->repayMultiCollateralLoan($repay_multi_loan);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->repayMultiCollateralLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repay_multi_loan** | [**\GateApi\Model\RepayMultiLoan**](../Model/RepayMultiLoan.md)|  |

### Return type

[**\GateApi\Model\MultiRepayResp**](../Model/MultiRepayResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMultiCollateralRecords

> \GateApi\Model\MultiCollateralRecord[] listMultiCollateralRecords($page, $limit, $from, $to, $collateral_currency)

Query collateral adjustment records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 10; // int | Maximum number of records returned in a single list
$associate_array['from'] = 1609459200; // int | Start timestamp for the query
$associate_array['to'] = 1609459200; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['collateral_currency'] = 'BTC'; // string | Collateral currency

try {
    $result = $apiInstance->listMultiCollateralRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->listMultiCollateralRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 10]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **collateral_currency** | **string**| Collateral currency | [optional]

### Return type

[**\GateApi\Model\MultiCollateralRecord[]**](../Model/MultiCollateralRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## operateMultiCollateral

> \GateApi\Model\CollateralAdjustRes operateMultiCollateral($collateral_adjust)

Add or withdraw collateral

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collateral_adjust = new \GateApi\Model\CollateralAdjust(); // \GateApi\Model\CollateralAdjust | 

try {
    $result = $apiInstance->operateMultiCollateral($collateral_adjust);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->operateMultiCollateral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collateral_adjust** | [**\GateApi\Model\CollateralAdjust**](../Model/CollateralAdjust.md)|  |

### Return type

[**\GateApi\Model\CollateralAdjustRes**](../Model/CollateralAdjustRes.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUserCurrencyQuota

> \GateApi\Model\CurrencyQuota[] listUserCurrencyQuota($type, $currency)

Query user's collateral and borrowing currency quota information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'collateral'; // string | Currency type: collateral - Collateral currency, borrow - Borrowing currency
$currency = 'BTC'; // string | When it is a collateral currency, multiple currencies can be provided separated by commas; when it is a borrowing currency, only one currency can be provided.

try {
    $result = $apiInstance->listUserCurrencyQuota($type, $currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->listUserCurrencyQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Currency type: collateral - Collateral currency, borrow - Borrowing currency |
 **currency** | **string**| When it is a collateral currency, multiple currencies can be provided separated by commas; when it is a borrowing currency, only one currency can be provided. |

### Return type

[**\GateApi\Model\CurrencyQuota[]**](../Model/CurrencyQuota.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMultiCollateralCurrencies

> \GateApi\Model\MultiCollateralCurrency listMultiCollateralCurrencies()

Query supported borrowing and collateral currencies for multi-currency collateral

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listMultiCollateralCurrencies();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->listMultiCollateralCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\MultiCollateralCurrency**](../Model/MultiCollateralCurrency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMultiCollateralLtv

> \GateApi\Model\CollateralLtv getMultiCollateralLtv()

Query collateralization ratio information

Multi-currency collateral ratio is fixed, independent of currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMultiCollateralLtv();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->getMultiCollateralLtv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\CollateralLtv**](../Model/CollateralLtv.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMultiCollateralFixRate

> \GateApi\Model\CollateralFixRate[] getMultiCollateralFixRate()

Query currency's 7-day and 30-day fixed interest rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMultiCollateralFixRate();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->getMultiCollateralFixRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\CollateralFixRate[]**](../Model/CollateralFixRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMultiCollateralCurrentRate

> \GateApi\Model\CollateralCurrentRate[] getMultiCollateralCurrentRate($currencies, $vip_level)

Query currency's current interest rate

Query currency's current interest rate for the previous hour, current interest rate updates hourly

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currencies'] = array('[\"BTC\",\"GT\"]'); // string[] | Specify currency name query array, separated by commas, maximum 100 items
$associate_array['vip_level'] = '0'; // string | VIP level, defaults to 0 if not specified

try {
    $result = $apiInstance->getMultiCollateralCurrentRate($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling MultiCollateralLoanApi->getMultiCollateralCurrentRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currencies** | [**string[]**](../Model/string.md)| Specify currency name query array, separated by commas, maximum 100 items |
 **vip_level** | **string**| VIP level, defaults to 0 if not specified | [optional] [default to &#39;0&#39;]

### Return type

[**\GateApi\Model\CollateralCurrentRate[]**](../Model/CollateralCurrentRate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

