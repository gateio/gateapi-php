# GateApi\AlphaApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAlphaAccounts**](AlphaApi.md#listAlphaAccounts) | **GET** /alpha/accounts | API for Alpha Accounts
[**listAlphaAccountBook**](AlphaApi.md#listAlphaAccountBook) | **GET** /alpha/account_book | Alpha Asset Transaction API
[**quoteAlphaOrder**](AlphaApi.md#quoteAlphaOrder) | **POST** /alpha/quote | Alpha Quotation API
[**listAlphaOrder**](AlphaApi.md#listAlphaOrder) | **GET** /alpha/orders | Alpha 查询订单列表接口
[**placeAlphaOrder**](AlphaApi.md#placeAlphaOrder) | **POST** /alpha/orders | Alpha Order Placement API
[**getAlphaOrder**](AlphaApi.md#getAlphaOrder) | **GET** /alpha/order | Alpha 查询单个订单接口
[**listAlphaCurrencies**](AlphaApi.md#listAlphaCurrencies) | **GET** /alpha/currencies | 查询币种信息
[**listAlphaTickers**](AlphaApi.md#listAlphaTickers) | **GET** /alpha/tickers | 查询币种ticker


## listAlphaAccounts

> \GateApi\Model\AccountsResponse[] listAlphaAccounts()

API for Alpha Accounts

Query Position Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listAlphaAccounts();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\AccountsResponse[]**](../Model/AccountsResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaAccountBook

> \GateApi\Model\AccountBookResponse[] listAlphaAccountBook($from, $to, $page, $limit)

Alpha Asset Transaction API

Query Asset Transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['from'] = 56; // int | Start timestamp of the query
$associate_array['to'] = 56; // int | Time range ending, default to current time
$associate_array['page'] = 56; // int | Page number
$associate_array['limit'] = 56; // int | The maximum number of items per page is 100

try {
    $result = $apiInstance->listAlphaAccountBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **int**| Start timestamp of the query |
 **to** | **int**| Time range ending, default to current time | [optional]
 **page** | **int**| Page number | [optional]
 **limit** | **int**| The maximum number of items per page is 100 | [optional]

### Return type

[**\GateApi\Model\AccountBookResponse[]**](../Model/AccountBookResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## quoteAlphaOrder

> \GateApi\Model\QuoteResponse quoteAlphaOrder($quote_request)

Alpha Quotation API

The quote_id returned by the quotation API is valid for one minute.You must place the order within this time window;otherwise, the quote will expire and a new quotation request is required

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_request = new \GateApi\Model\QuoteRequest(); // \GateApi\Model\QuoteRequest | 

try {
    $result = $apiInstance->quoteAlphaOrder($quote_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->quoteAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_request** | [**\GateApi\Model\QuoteRequest**](../Model/QuoteRequest.md)|  |

### Return type

[**\GateApi\Model\QuoteResponse**](../Model/QuoteResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaOrder

> \GateApi\Model\OrderResponse[] listAlphaOrder($currency, $side, $status, $from, $to, $limit, $page)

Alpha 查询订单列表接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'memeboxsst'; // string | Trading Symbol
$associate_array['side'] = 'buy'; // string | 买单或者卖单 - buy - sell
$associate_array['status'] = 2; // int | Order Status - `0` : All - `1` : Processing - `2` : Successful - `3` : Failed - `4` : Canceled - `5` : Buy order placed but transfer not completed - `6` : Cancelled order with transfer not complete
$associate_array['from'] = 1627706330; // int | 查询订单的起始时间
$associate_array['to'] = 1635329650; // int | 查询订单的结束时间，不指定则默认为当前时间
$associate_array['limit'] = 100; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 100
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaOrder($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Trading Symbol |
 **side** | **string**| 买单或者卖单 - buy - sell |
 **status** | **int**| Order Status - &#x60;0&#x60; : All - &#x60;1&#x60; : Processing - &#x60;2&#x60; : Successful - &#x60;3&#x60; : Failed - &#x60;4&#x60; : Canceled - &#x60;5&#x60; : Buy order placed but transfer not completed - &#x60;6&#x60; : Cancelled order with transfer not complete |
 **from** | **int**| 查询订单的起始时间 | [optional]
 **to** | **int**| 查询订单的结束时间，不指定则默认为当前时间 | [optional]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 100 | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\OrderResponse[]**](../Model/OrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## placeAlphaOrder

> \GateApi\Model\PlaceOrderResponse placeAlphaOrder($place_order_request)

Alpha Order Placement API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$place_order_request = new \GateApi\Model\PlaceOrderRequest(); // \GateApi\Model\PlaceOrderRequest | 

try {
    $result = $apiInstance->placeAlphaOrder($place_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->placeAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **place_order_request** | [**\GateApi\Model\PlaceOrderRequest**](../Model/PlaceOrderRequest.md)|  |

### Return type

[**\GateApi\Model\PlaceOrderResponse**](../Model/PlaceOrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAlphaOrder

> \GateApi\Model\OrderResponse getAlphaOrder($order_id)

Alpha 查询单个订单接口

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'fdaf12321'; // string | Order ID

try {
    $result = $apiInstance->getAlphaOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->getAlphaOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID |

### Return type

[**\GateApi\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaCurrencies

> \GateApi\Model\Currency2[] listAlphaCurrencies($currency, $limit, $page)

查询币种信息

When the currency parameter is provided, query and return information for the specified currency. When the currency parameter is not provided, return a paginated list of currencies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency'] = 'memeboxtrump'; // string | 根据币种符号查询币种信息
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaCurrencies($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| 根据币种符号查询币种信息 | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\Currency2[]**](../Model/Currency2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAlphaTickers

> \GateApi\Model\Ticker2[] listAlphaTickers($currency, $limit, $page)

查询币种ticker

When the currency parameter is provided, query and return information for the specified ticker, When the currency parameter is not provided, return a paginated list of tickers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\AlphaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency'] = 'memeboxtrump'; // string | Retrieve data of the specified currency
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listAlphaTickers($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling AlphaApi->listAlphaTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\Ticker2[]**](../Model/Ticker2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

