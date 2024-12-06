# GateApi\CollateralLoanApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCollateralLoanOrders**](CollateralLoanApi.md#listCollateralLoanOrders) | **GET** /loan/collateral/orders | List Orders
[**createCollateralLoan**](CollateralLoanApi.md#createCollateralLoan) | **POST** /loan/collateral/orders | Place order
[**getCollateralLoanOrderDetail**](CollateralLoanApi.md#getCollateralLoanOrderDetail) | **GET** /loan/collateral/orders/{order_id} | Get a single order
[**repayCollateralLoan**](CollateralLoanApi.md#repayCollateralLoan) | **POST** /loan/collateral/repay | Repayment
[**listRepayRecords**](CollateralLoanApi.md#listRepayRecords) | **GET** /loan/collateral/repay_records | Repayment history
[**listCollateralRecords**](CollateralLoanApi.md#listCollateralRecords) | **GET** /loan/collateral/collaterals | Query collateral adjustment records
[**operateCollateral**](CollateralLoanApi.md#operateCollateral) | **POST** /loan/collateral/collaterals | Increase or redeem collateral
[**getUserTotalAmount**](CollateralLoanApi.md#getUserTotalAmount) | **GET** /loan/collateral/total_amount | Query the total borrowing and collateral amount for the user
[**getUserLtvInfo**](CollateralLoanApi.md#getUserLtvInfo) | **GET** /loan/collateral/ltv | Query user&#39;s collateralization ratio
[**listCollateralCurrencies**](CollateralLoanApi.md#listCollateralCurrencies) | **GET** /loan/collateral/currencies | Query supported borrowing and collateral currencies


## listCollateralLoanOrders

> \GateApi\Model\CollateralOrder[] listCollateralLoanOrders($page, $limit, $collateral_currency, $borrow_currency)

List Orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['collateral_currency'] = 'BTC'; // string | Collateral
$associate_array['borrow_currency'] = 'USDT'; // string | Borrowed currency

try {
    $result = $apiInstance->listCollateralLoanOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->listCollateralLoanOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **collateral_currency** | **string**| Collateral | [optional]
 **borrow_currency** | **string**| Borrowed currency | [optional]

### Return type

[**\GateApi\Model\CollateralOrder[]**](../Model/CollateralOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCollateralLoan

> \GateApi\Model\OrderResp createCollateralLoan($create_collateral_order)

Place order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_collateral_order = new \GateApi\Model\CreateCollateralOrder(); // \GateApi\Model\CreateCollateralOrder | 

try {
    $result = $apiInstance->createCollateralLoan($create_collateral_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->createCollateralLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_collateral_order** | [**\GateApi\Model\CreateCollateralOrder**](../Model/CreateCollateralOrder.md)|  |

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


## getCollateralLoanOrderDetail

> \GateApi\Model\CollateralOrder getCollateralLoanOrderDetail($order_id)

Get a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 100001; // int | Order ID returned on successful order creation

try {
    $result = $apiInstance->getCollateralLoanOrderDetail($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->getCollateralLoanOrderDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID returned on successful order creation |

### Return type

[**\GateApi\Model\CollateralOrder**](../Model/CollateralOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## repayCollateralLoan

> \GateApi\Model\RepayResp repayCollateralLoan($repay_loan)

Repayment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repay_loan = new \GateApi\Model\RepayLoan(); // \GateApi\Model\RepayLoan | 

try {
    $result = $apiInstance->repayCollateralLoan($repay_loan);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->repayCollateralLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repay_loan** | [**\GateApi\Model\RepayLoan**](../Model/RepayLoan.md)|  |

### Return type

[**\GateApi\Model\RepayResp**](../Model/RepayResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listRepayRecords

> \GateApi\Model\RepayRecord[] listRepayRecords($source, $borrow_currency, $collateral_currency, $page, $limit, $from, $to)

Repayment history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['source'] = 'repay'; // string | Operation type: repay - Regular repayment, liquidate - Liquidation
$associate_array['borrow_currency'] = 'USDT'; // string | Borrowed currency
$associate_array['collateral_currency'] = 'BTC'; // string | Collateral
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1609459200; // int | Start timestamp of the query
$associate_array['to'] = 1609459200; // int | Time range ending, default to current time

try {
    $result = $apiInstance->listRepayRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->listRepayRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source** | **string**| Operation type: repay - Regular repayment, liquidate - Liquidation |
 **borrow_currency** | **string**| Borrowed currency | [optional]
 **collateral_currency** | **string**| Collateral | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]

### Return type

[**\GateApi\Model\RepayRecord[]**](../Model/RepayRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCollateralRecords

> \GateApi\Model\CollateralRecord[] listCollateralRecords($page, $limit, $from, $to, $borrow_currency, $collateral_currency)

Query collateral adjustment records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1609459200; // int | Start timestamp of the query
$associate_array['to'] = 1609459200; // int | Time range ending, default to current time
$associate_array['borrow_currency'] = 'USDT'; // string | Borrowed currency
$associate_array['collateral_currency'] = 'BTC'; // string | Collateral

try {
    $result = $apiInstance->listCollateralRecords($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->listCollateralRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **borrow_currency** | **string**| Borrowed currency | [optional]
 **collateral_currency** | **string**| Collateral | [optional]

### Return type

[**\GateApi\Model\CollateralRecord[]**](../Model/CollateralRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## operateCollateral

> operateCollateral($collateral_align)

Increase or redeem collateral

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collateral_align = new \GateApi\Model\CollateralAlign(); // \GateApi\Model\CollateralAlign | 

try {
    $apiInstance->operateCollateral($collateral_align);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->operateCollateral: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collateral_align** | [**\GateApi\Model\CollateralAlign**](../Model/CollateralAlign.md)|  |

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


## getUserTotalAmount

> \GateApi\Model\UserTotalAmount getUserTotalAmount()

Query the total borrowing and collateral amount for the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserTotalAmount();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->getUserTotalAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\UserTotalAmount**](../Model/UserTotalAmount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUserLtvInfo

> \GateApi\Model\UserLtvInfo getUserLtvInfo($collateral_currency, $borrow_currency)

Query user's collateralization ratio

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collateral_currency = 'BTC'; // string | Collateral
$borrow_currency = 'USDT'; // string | Borrowed currency

try {
    $result = $apiInstance->getUserLtvInfo($collateral_currency, $borrow_currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->getUserLtvInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collateral_currency** | **string**| Collateral |
 **borrow_currency** | **string**| Borrowed currency |

### Return type

[**\GateApi\Model\UserLtvInfo**](../Model/UserLtvInfo.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCollateralCurrencies

> \GateApi\Model\CollateralLoanCurrency[] listCollateralCurrencies($loan_currency)

Query supported borrowing and collateral currencies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\CollateralLoanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['loan_currency'] = 'BTC'; // string | The parameter loan_currency is used to specify the borrowing currency. If loan_currency is not provided, the API will return all supported borrowing currencies. If loan_currency is provided, the API will return an array of collateral currencies supported for the specified borrowing currency.

try {
    $result = $apiInstance->listCollateralCurrencies($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling CollateralLoanApi->listCollateralCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_currency** | **string**| The parameter loan_currency is used to specify the borrowing currency. If loan_currency is not provided, the API will return all supported borrowing currencies. If loan_currency is provided, the API will return an array of collateral currencies supported for the specified borrowing currency. | [optional]

### Return type

[**\GateApi\Model\CollateralLoanCurrency[]**](../Model/CollateralLoanCurrency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

