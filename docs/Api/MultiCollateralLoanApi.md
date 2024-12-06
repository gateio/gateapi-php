# GateApi\MultiCollateralLoanApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listMultiCollateralOrders**](MultiCollateralLoanApi.md#listMultiCollateralOrders) | **GET** /loan/multi_collateral/orders | List Multi-Collateral Orders
[**createMultiCollateral**](MultiCollateralLoanApi.md#createMultiCollateral) | **POST** /loan/multi_collateral/orders | Create Multi-Collateral Order
[**getMultiCollateralOrderDetail**](MultiCollateralLoanApi.md#getMultiCollateralOrderDetail) | **GET** /loan/multi_collateral/orders/{order_id} | Get Multi-Collateral Order Detail
[**listMultiRepayRecords**](MultiCollateralLoanApi.md#listMultiRepayRecords) | **GET** /loan/multi_collateral/repay | List Multi-Collateral Repay Records
[**repayMultiCollateralLoan**](MultiCollateralLoanApi.md#repayMultiCollateralLoan) | **POST** /loan/multi_collateral/repay | Repay Multi-Collateral Loan
[**listMultiCollateralRecords**](MultiCollateralLoanApi.md#listMultiCollateralRecords) | **GET** /loan/multi_collateral/mortgage | Query collateral adjustment records
[**operateMultiCollateral**](MultiCollateralLoanApi.md#operateMultiCollateral) | **POST** /loan/multi_collateral/mortgage | Operate Multi-Collateral
[**listUserCurrencyQuota**](MultiCollateralLoanApi.md#listUserCurrencyQuota) | **GET** /loan/multi_collateral/currency_quota | List User Currency Quota
[**listMultiCollateralCurrencies**](MultiCollateralLoanApi.md#listMultiCollateralCurrencies) | **GET** /loan/multi_collateral/currencies | Query supported borrowing and collateral currencies in Multi-Collateral
[**getMultiCollateralLtv**](MultiCollateralLoanApi.md#getMultiCollateralLtv) | **GET** /loan/multi_collateral/ltv | Get Multi-Collateral ratio
[**getMultiCollateralFixRate**](MultiCollateralLoanApi.md#getMultiCollateralFixRate) | **GET** /loan/multi_collateral/fixed_rate | Query fixed interest rates for the currency for 7 days and 30 days
[**getMultiCollateralCurrentRate**](MultiCollateralLoanApi.md#getMultiCollateralCurrentRate) | **GET** /loan/multi_collateral/current_rate | Query the current interest rate of the currency


## listMultiCollateralOrders

> \GateApi\Model\MultiCollateralOrder[] listMultiCollateralOrders($page, $limit, $sort, $order_type)

List Multi-Collateral Orders

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
$associate_array['limit'] = 10; // int | Maximum number of records to be returned in a single list
$associate_array['sort'] = 'ltv_asc'; // string | Sort types: time_desc - default sorting by creation time in descending order, ltv_asc - ascending order of ltv, ltv_desc - descending order of ltv.
$associate_array['order_type'] = 'current'; // string | Order type, current - query current orders, fixed - query fixed orders. If not specified, default to querying current orders

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
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 10]
 **sort** | **string**| Sort types: time_desc - default sorting by creation time in descending order, ltv_asc - ascending order of ltv, ltv_desc - descending order of ltv. | [optional]
 **order_type** | **string**| Order type, current - query current orders, fixed - query fixed orders. If not specified, default to querying current orders | [optional]

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

Create Multi-Collateral Order

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

Get Multi-Collateral Order Detail

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
$order_id = '12345'; // string | Order ID returned on successful order creation

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
 **order_id** | **string**| Order ID returned on successful order creation |

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

List Multi-Collateral Repay Records

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
$associate_array['limit'] = 10; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1609459200; // int | Start timestamp of the query
$associate_array['to'] = 1609459200; // int | Time range ending, default to current time

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
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 10]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]

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

Repay Multi-Collateral Loan

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
$associate_array['limit'] = 10; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1609459200; // int | Start timestamp of the query
$associate_array['to'] = 1609459200; // int | Time range ending, default to current time
$associate_array['collateral_currency'] = 'BTC'; // string | Collateral

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
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 10]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **collateral_currency** | **string**| Collateral | [optional]

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

Operate Multi-Collateral

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

List User Currency Quota

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
$type = 'collateral'; // string | Currency types: collateral - collateral currency, borrow - borrowing currency.
$currency = 'BTC'; // string | When specifying collateral currencies, you can use commas to separate multiple currencies; for borrowing currencies, only one currency can be provided.

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
 **type** | **string**| Currency types: collateral - collateral currency, borrow - borrowing currency. |
 **currency** | **string**| When specifying collateral currencies, you can use commas to separate multiple currencies; for borrowing currencies, only one currency can be provided. |

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

Query supported borrowing and collateral currencies in Multi-Collateral

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

Get Multi-Collateral ratio

The Multi-Collateral ratio is fixed, irrespective of the currency.

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

Query fixed interest rates for the currency for 7 days and 30 days

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

Query the current interest rate of the currency

Query the current interest rate of the currency in the last hour. The current interest rate is updated every hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MultiCollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currencies'] = array('[\"BTC\",\"GT\"]'); // string[] | Specify the currency name to query the array. The array is separated by commas and has a maximum of 100 items.
$associate_array['vip_level'] = '0'; // string | VIP level, defaults to 0 if not transferred

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
 **currencies** | [**string[]**](../Model/string.md)| Specify the currency name to query the array. The array is separated by commas and has a maximum of 100 items. |
 **vip_level** | **string**| VIP level, defaults to 0 if not transferred | [optional] [default to &#39;0&#39;]

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

