# GateApi\SpotApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCurrencies**](SpotApi.md#listCurrencies) | **GET** /spot/currencies | Query all currency information
[**getCurrency**](SpotApi.md#getCurrency) | **GET** /spot/currencies/{currency} | Query single currency information
[**listCurrencyPairs**](SpotApi.md#listCurrencyPairs) | **GET** /spot/currency_pairs | Query all supported currency pairs
[**getCurrencyPair**](SpotApi.md#getCurrencyPair) | **GET** /spot/currency_pairs/{currency_pair} | Query single currency pair details
[**listTickers**](SpotApi.md#listTickers) | **GET** /spot/tickers | Get currency pair ticker information
[**listOrderBook**](SpotApi.md#listOrderBook) | **GET** /spot/order_book | Get market depth information
[**listTrades**](SpotApi.md#listTrades) | **GET** /spot/trades | Query market transaction records
[**listCandlesticks**](SpotApi.md#listCandlesticks) | **GET** /spot/candlesticks | Market K-line chart
[**getFee**](SpotApi.md#getFee) | **GET** /spot/fee | Query account fee rates
[**getBatchSpotFee**](SpotApi.md#getBatchSpotFee) | **GET** /spot/batch_fee | Batch query account fee rates
[**listSpotAccounts**](SpotApi.md#listSpotAccounts) | **GET** /spot/accounts | List spot trading accounts
[**listSpotAccountBook**](SpotApi.md#listSpotAccountBook) | **GET** /spot/account_book | Query spot account transaction history
[**createBatchOrders**](SpotApi.md#createBatchOrders) | **POST** /spot/batch_orders | Batch place orders
[**listAllOpenOrders**](SpotApi.md#listAllOpenOrders) | **GET** /spot/open_orders | List all open orders
[**createCrossLiquidateOrder**](SpotApi.md#createCrossLiquidateOrder) | **POST** /spot/cross_liquidate_orders | Close position when cross-currency is disabled
[**listOrders**](SpotApi.md#listOrders) | **GET** /spot/orders | List orders
[**createOrder**](SpotApi.md#createOrder) | **POST** /spot/orders | Create an order
[**cancelOrders**](SpotApi.md#cancelOrders) | **DELETE** /spot/orders | Cancel all &#x60;open&#x60; orders in specified currency pair
[**cancelBatchOrders**](SpotApi.md#cancelBatchOrders) | **POST** /spot/cancel_batch_orders | Cancel batch orders by specified ID list
[**getOrder**](SpotApi.md#getOrder) | **GET** /spot/orders/{order_id} | Query single order details
[**cancelOrder**](SpotApi.md#cancelOrder) | **DELETE** /spot/orders/{order_id} | Cancel single order
[**amendOrder**](SpotApi.md#amendOrder) | **PATCH** /spot/orders/{order_id} | Amend single order
[**listMyTrades**](SpotApi.md#listMyTrades) | **GET** /spot/my_trades | Query personal trading records
[**getSystemTime**](SpotApi.md#getSystemTime) | **GET** /spot/time | Get server current time
[**countdownCancelAllSpot**](SpotApi.md#countdownCancelAllSpot) | **POST** /spot/countdown_cancel_all | Countdown cancel orders
[**amendBatchOrders**](SpotApi.md#amendBatchOrders) | **POST** /spot/amend_batch_orders | Batch modification of orders
[**getSpotInsuranceHistory**](SpotApi.md#getSpotInsuranceHistory) | **GET** /spot/insurance_history | Query spot insurance fund historical data
[**listSpotPriceTriggeredOrders**](SpotApi.md#listSpotPriceTriggeredOrders) | **GET** /spot/price_orders | Query running auto order list
[**createSpotPriceTriggeredOrder**](SpotApi.md#createSpotPriceTriggeredOrder) | **POST** /spot/price_orders | Create price-triggered order
[**cancelSpotPriceTriggeredOrderList**](SpotApi.md#cancelSpotPriceTriggeredOrderList) | **DELETE** /spot/price_orders | Cancel all auto orders
[**getSpotPriceTriggeredOrder**](SpotApi.md#getSpotPriceTriggeredOrder) | **GET** /spot/price_orders/{order_id} | Query single auto order details
[**cancelSpotPriceTriggeredOrder**](SpotApi.md#cancelSpotPriceTriggeredOrder) | **DELETE** /spot/price_orders/{order_id} | Cancel single auto order


## listCurrencies

> \GateApi\Model\Currency[] listCurrencies()

Query all currency information

When a currency corresponds to multiple chains, you can query the information of multiple chains through the `chains` field, such as the charging and recharge status, identification, etc. of the chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCurrencies();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Currency[]**](../Model/Currency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCurrency

> \GateApi\Model\Currency getCurrency($currency)

Query single currency information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'GT'; // string | Currency name

try {
    $result = $apiInstance->getCurrency($currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency name |

### Return type

[**\GateApi\Model\Currency**](../Model/Currency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCurrencyPairs

> \GateApi\Model\CurrencyPair[] listCurrencyPairs()

Query all supported currency pairs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listCurrencyPairs();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listCurrencyPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\CurrencyPair[]**](../Model/CurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCurrencyPair

> \GateApi\Model\CurrencyPair getCurrencyPair($currency_pair)

Query single currency pair details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency_pair = 'ETH_BTC'; // string | Currency pair

try {
    $result = $apiInstance->getCurrencyPair($currency_pair);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getCurrencyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |

### Return type

[**\GateApi\Model\CurrencyPair**](../Model/CurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTickers

> \GateApi\Model\Ticker[] listTickers($currency_pair, $timezone)

Get currency pair ticker information

If `currency_pair` is specified, only query that currency pair; otherwise return all information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['timezone'] = 'utc0'; // string | Timezone

try {
    $result = $apiInstance->listTickers($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]
 **timezone** | **string**| Timezone | [optional]

### Return type

[**\GateApi\Model\Ticker[]**](../Model/Ticker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOrderBook

> \GateApi\Model\OrderBook listOrderBook($currency_pair, $interval, $limit, $with_id)

Get market depth information

Market depth buy orders are sorted by price from high to low, sell orders are sorted from low to high

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['interval'] = '0'; // string | Price precision for depth aggregation, 0 means no aggregation, defaults to 0 if not specified
$associate_array['limit'] = 10; // int | Number of depth levels
$associate_array['with_id'] = false; // bool | Return order book update ID

try {
    $result = $apiInstance->listOrderBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **interval** | **string**| Price precision for depth aggregation, 0 means no aggregation, defaults to 0 if not specified | [optional] [default to &#39;0&#39;]
 **limit** | **int**| Number of depth levels | [optional] [default to 10]
 **with_id** | **bool**| Return order book update ID | [optional] [default to false]

### Return type

[**\GateApi\Model\OrderBook**](../Model/OrderBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTrades

> \GateApi\Model\Trade[] listTrades($currency_pair, $limit, $last_id, $reverse, $from, $to, $page)

Query market transaction records

Supports querying by time range using `from` and `to` parameters or pagination based on `last_id`. By default, queries the last 30 days.  Pagination based on `last_id` is no longer recommended. If `last_id` is specified, the time range query parameters will be ignored.  When using limit&page pagination to retrieve data, the maximum number of pages is 100,000, that is, limit * (page - 1) <= 100,000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['limit'] = 100; // int | Maximum number of items returned in list. Default: 100, minimum: 1, maximum: 1000
$associate_array['last_id'] = '12345'; // string | Specify the currency name to query in batches, and support up to 100 pass parameters at a time
$associate_array['reverse'] = false; // bool | Whether to retrieve data less than `last_id`. Default returns records greater than `last_id`.  Set to `true` to trace back market trade records, `false` to get latest trades.  No effect when `last_id` is not set.
$associate_array['from'] = 1627706330; // int | Start timestamp for the query
$associate_array['to'] = 1635329650; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **limit** | **int**| Maximum number of items returned in list. Default: 100, minimum: 1, maximum: 1000 | [optional] [default to 100]
 **last_id** | **string**| Specify the currency name to query in batches, and support up to 100 pass parameters at a time | [optional]
 **reverse** | **bool**| Whether to retrieve data less than &#x60;last_id&#x60;. Default returns records greater than &#x60;last_id&#x60;.  Set to &#x60;true&#x60; to trace back market trade records, &#x60;false&#x60; to get latest trades.  No effect when &#x60;last_id&#x60; is not set. | [optional] [default to false]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\Trade[]**](../Model/Trade.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCandlesticks

> string[][] listCandlesticks($currency_pair, $limit, $from, $to, $interval)

Market K-line chart

Maximum of 1000 points can be returned in a query. Be sure not to exceed the limit when specifying from, to and interval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Currency pair
$associate_array['limit'] = 100; // int | Maximum number of recent data points to return. `limit` conflicts with `from` and `to`. If either `from` or `to` is specified, request will be rejected.
$associate_array['from'] = 1546905600; // int | Start time of candlesticks, formatted in Unix timestamp in seconds. Default to`to - 100 * interval` if not specified
$associate_array['to'] = 1546935600; // int | Specify the end time of the K-line chart, defaults to current time if not specified, note that the time format is Unix timestamp with second precision
$associate_array['interval'] = '30m'; // string | Time interval between data points. Note that `30d` represents a calendar month, not aligned to 30 days

try {
    $result = $apiInstance->listCandlesticks($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **limit** | **int**| Maximum number of recent data points to return. &#x60;limit&#x60; conflicts with &#x60;from&#x60; and &#x60;to&#x60;. If either &#x60;from&#x60; or &#x60;to&#x60; is specified, request will be rejected. | [optional] [default to 100]
 **from** | **int**| Start time of candlesticks, formatted in Unix timestamp in seconds. Default to&#x60;to - 100 * interval&#x60; if not specified | [optional]
 **to** | **int**| Specify the end time of the K-line chart, defaults to current time if not specified, note that the time format is Unix timestamp with second precision | [optional]
 **interval** | **string**| Time interval between data points. Note that &#x60;30d&#x60; represents a calendar month, not aligned to 30 days | [optional] [default to &#39;30m&#39;]

### Return type

[**string[][]**](../Model/array.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFee

> \GateApi\Model\SpotFee getFee($currency_pair)

Query account fee rates

This API is deprecated. The new fee query API is `/wallet/fee`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify currency pair to get more accurate fee settings.  This field is optional. Usually fee settings are the same for all currency pairs.

try {
    $result = $apiInstance->getFee($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Specify currency pair to get more accurate fee settings.  This field is optional. Usually fee settings are the same for all currency pairs. | [optional]

### Return type

[**\GateApi\Model\SpotFee**](../Model/SpotFee.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBatchSpotFee

> map[string,\GateApi\Model\SpotFee] getBatchSpotFee($currency_pairs)

Batch query account fee rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_pairs = 'BTC_USDT,ETH_USDT'; // string | Maximum 50 currency pairs per request

try {
    $result = $apiInstance->getBatchSpotFee($currency_pairs);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getBatchSpotFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pairs** | **string**| Maximum 50 currency pairs per request |

### Return type

[**map[string,\GateApi\Model\SpotFee]**](../Model/SpotFee.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSpotAccounts

> \GateApi\Model\SpotAccount[] listSpotAccounts($currency)

List spot trading accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Query by specified currency name

try {
    $result = $apiInstance->listSpotAccounts($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listSpotAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Query by specified currency name | [optional]

### Return type

[**\GateApi\Model\SpotAccount[]**](../Model/SpotAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSpotAccountBook

> \GateApi\Model\SpotAccountBook[] listSpotAccountBook($currency, $from, $to, $page, $limit, $type, $code)

Query spot account transaction history

Record query time range cannot exceed 30 days.  When using limit&page pagination to retrieve data, the maximum number of pages is 100,000, that is, limit * (page - 1) <= 100,000.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Query by specified currency name
$associate_array['from'] = 1627706330; // int | Start timestamp for the query
$associate_array['to'] = 1635329650; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['type'] = 'lend'; // string | Query by specified account change type. If not specified, all change types will be included.
$associate_array['code'] = 'code_example'; // string | Specify account change code for query. If not specified, all change types are included. This parameter has higher priority than `type`

try {
    $result = $apiInstance->listSpotAccountBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listSpotAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Query by specified currency name | [optional]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **type** | **string**| Query by specified account change type. If not specified, all change types will be included. | [optional]
 **code** | **string**| Specify account change code for query. If not specified, all change types are included. This parameter has higher priority than &#x60;type&#x60; | [optional]

### Return type

[**\GateApi\Model\SpotAccountBook[]**](../Model/SpotAccountBook.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBatchOrders

> \GateApi\Model\BatchOrder[] createBatchOrders($order, $x_gate_exptime)

Batch place orders

Batch order requirements:  1. Custom order field `text` must be specified 2. Up to 4 currency pairs per request, with up to 10 orders per currency pair 3. Spot orders and margin orders cannot be mixed; all `account` fields in the same request must be identical

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = array(new \GateApi\Model\Order()); // \GateApi\Model\Order[] | 
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->createBatchOrders($order, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->createBatchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\GateApi\Model\Order[]**](../Model/Order.md)|  |
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\BatchOrder[]**](../Model/BatchOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listAllOpenOrders

> \GateApi\Model\OpenOrders[] listAllOpenOrders($page, $limit, $account)

List all open orders

Query the current order list of all trading pairs. Please note that the paging parameter controls the number of pending orders in each trading pair. There is no paging control trading pairs. All trading pairs with pending orders will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records returned in one page in each currency pair
$associate_array['account'] = 'spot'; // string | Specify query account

try {
    $result = $apiInstance->listAllOpenOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records returned in one page in each currency pair | [optional] [default to 100]
 **account** | **string**| Specify query account | [optional]

### Return type

[**\GateApi\Model\OpenOrders[]**](../Model/OpenOrders.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createCrossLiquidateOrder

> \GateApi\Model\Order createCrossLiquidateOrder($liquidate_order)

Close position when cross-currency is disabled

Currently, only cross-margin accounts are supported to place buy orders for disabled currencies. Maximum buy quantity = (unpaid principal and interest - currency balance - the amount of the currency in pending orders) / 0.998

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$liquidate_order = new \GateApi\Model\LiquidateOrder(); // \GateApi\Model\LiquidateOrder | 

try {
    $result = $apiInstance->createCrossLiquidateOrder($liquidate_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->createCrossLiquidateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **liquidate_order** | [**\GateApi\Model\LiquidateOrder**](../Model/LiquidateOrder.md)|  |

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOrders

> \GateApi\Model\Order[] listOrders($currency_pair, $status, $page, $limit, $account, $from, $to, $side)

List orders

Note that query results default to spot order lists for spot, unified account, and isolated margin accounts.  When `status` is set to `open` (i.e., when querying pending order lists), only `page` and `limit` pagination controls are supported. `limit` can only be set to a maximum of 100. The `side` parameter and time range query parameters `from` and `to` are not supported.  When `status` is set to `finished` (i.e., when querying historical orders), in addition to pagination queries, `from` and `to` time range queries are also supported. Additionally, the `side` parameter can be set to filter one-sided history.  Time range filter parameters are processed according to the order end time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Query by specified currency pair. Required for open orders, optional for filled orders
$associate_array['status'] = 'open'; // string | List orders based on status  `open` - order is waiting to be filled `finished` - order has been filled or cancelled
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned. If `status` is `open`, maximum of `limit` is 100
$associate_array['account'] = 'spot'; // string | Specify query account
$associate_array['from'] = 1627706330; // int | Start timestamp for the query
$associate_array['to'] = 1635329650; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['side'] = 'sell'; // string | Specify all bids or all asks, both included if not specified

try {
    $result = $apiInstance->listOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Query by specified currency pair. Required for open orders, optional for filled orders |
 **status** | **string**| List orders based on status  &#x60;open&#x60; - order is waiting to be filled &#x60;finished&#x60; - order has been filled or cancelled |
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned. If &#x60;status&#x60; is &#x60;open&#x60;, maximum of &#x60;limit&#x60; is 100 | [optional] [default to 100]
 **account** | **string**| Specify query account | [optional]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **side** | **string**| Specify all bids or all asks, both included if not specified | [optional]

### Return type

[**\GateApi\Model\Order[]**](../Model/Order.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOrder

> \GateApi\Model\Order createOrder($order, $x_gate_exptime)

Create an order

Supports spot, margin, leverage, and cross-margin leverage orders. Use different accounts through the `account` field. Default is `spot`, which means using the spot account to place orders. If the user has a `unified` account, the default is to place orders with the unified account.  When using leveraged account trading (i.e., when `account` is set to `margin`), you can set `auto_borrow` to `true`. In case of insufficient account balance, the system will automatically execute `POST /margin/uni/loans` to borrow the insufficient amount. Whether assets obtained after leveraged order execution are automatically used to repay borrowing orders of the isolated margin account depends on the automatic repayment settings of the user's isolated margin account. Account automatic repayment settings can be queried and set through `/margin/auto_repay`.  When using unified account trading (i.e., when `account` is set to `unified`), `auto_borrow` can also be enabled to realize automatic borrowing of insufficient amounts. However, unlike the isolated margin account, whether unified account orders are automatically repaid depends on the `auto_repay` setting when placing the order. This setting only applies to the current order, meaning only assets obtained after order execution will be used to repay borrowing orders of the cross-margin account. Unified account ordering currently supports enabling both `auto_borrow` and `auto_repay` simultaneously.  Auto repayment will be triggered when the order ends, i.e., when `status` is `cancelled` or `closed`.  **Order Status**  The order status in pending orders is `open`, which remains `open` until all quantity is filled. If fully filled, the order ends and status becomes `closed`. If the order is cancelled before all transactions are completed, regardless of partial fills, the status will become `cancelled`.  **Iceberg Orders**  `iceberg` is used to set the displayed quantity of iceberg orders and does not support complete hiding. Note that hidden portions are charged according to the taker's fee rate.  **Self-Trade Prevention**  Set `stp_act` to determine the self-trade prevention strategy to use

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \GateApi\Model\Order(); // \GateApi\Model\Order | 
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->createOrder($order, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\GateApi\Model\Order**](../Model/Order.md)|  |
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelOrders

> \GateApi\Model\OrderCancel[] cancelOrders($currency_pair, $side, $account, $action_mode, $x_gate_exptime)

Cancel all `open` orders in specified currency pair

When the `account` parameter is not specified, all pending orders including spot, unified account, and isolated margin will be cancelled. When `currency_pair` is not specified, all trading pair pending orders will be cancelled. You can specify a particular account to cancel all pending orders under that account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency_pair = 'BTC_USDT'; // string | Currency pair
$side = 'sell'; // string | Specify all bids or all asks, both included if not specified
$account = 'spot'; // string | Specify account type  Classic account: All are included if not specified Unified account: Specify `unified`
$action_mode = 'ACK'; // string | Processing Mode  When placing an order, different fields are returned based on the action_mode  - `ACK`: Asynchronous mode, returns only key order fields - `RESULT`: No clearing information - `FULL`: Full mode (default)
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->cancelOrders($currency_pair, $side, $account, $action_mode, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]
 **side** | **string**| Specify all bids or all asks, both included if not specified | [optional]
 **account** | **string**| Specify account type  Classic account: All are included if not specified Unified account: Specify &#x60;unified&#x60; | [optional]
 **action_mode** | **string**| Processing Mode  When placing an order, different fields are returned based on the action_mode  - &#x60;ACK&#x60;: Asynchronous mode, returns only key order fields - &#x60;RESULT&#x60;: No clearing information - &#x60;FULL&#x60;: Full mode (default) | [optional]
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\OrderCancel[]**](../Model/OrderCancel.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelBatchOrders

> \GateApi\Model\CancelOrderResult[] cancelBatchOrders($cancel_batch_order, $x_gate_exptime)

Cancel batch orders by specified ID list

Multiple currency pairs can be specified, but maximum 20 orders are allowed per request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cancel_batch_order = array(new \GateApi\Model\CancelBatchOrder()); // \GateApi\Model\CancelBatchOrder[] | 
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->cancelBatchOrders($cancel_batch_order, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelBatchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancel_batch_order** | [**\GateApi\Model\CancelBatchOrder[]**](../Model/CancelBatchOrder.md)|  |
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\CancelOrderResult[]**](../Model/CancelOrderResult.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOrder

> \GateApi\Model\Order getOrder($order_id, $currency_pair, $account)

Query single order details

By default, queries orders for spot, unified account, and isolated margin accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = '12345'; // string | The order ID returned when the order was successfully created or the custom ID specified by the user's creation (i.e. the `text` field). Operations based on custom IDs can only be checked in pending orders. Only order ID can be used after the order is finished (transaction/cancel)
$currency_pair = 'BTC_USDT'; // string | Specify the trading pair to query. This field is required when querying pending order records. This field can be omitted when querying filled order records.
$account = 'spot'; // string | Specify query account

try {
    $result = $apiInstance->getOrder($order_id, $currency_pair, $account);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order ID returned when the order was successfully created or the custom ID specified by the user&#39;s creation (i.e. the &#x60;text&#x60; field). Operations based on custom IDs can only be checked in pending orders. Only order ID can be used after the order is finished (transaction/cancel) |
 **currency_pair** | **string**| Specify the trading pair to query. This field is required when querying pending order records. This field can be omitted when querying filled order records. |
 **account** | **string**| Specify query account | [optional]

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelOrder

> \GateApi\Model\Order cancelOrder($order_id, $currency_pair, $account, $action_mode, $x_gate_exptime)

Cancel single order

By default, orders for spot, unified accounts and leveraged accounts are revoked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = '12345'; // string | The order ID returned when the order was successfully created or the custom ID specified by the user's creation (i.e. the `text` field). Operations based on custom IDs can only be checked in pending orders. Only order ID can be used after the order is finished (transaction/cancel)
$currency_pair = 'BTC_USDT'; // string | Currency pair
$account = 'spot'; // string | Specify query account
$action_mode = 'ACK'; // string | Processing Mode  When placing an order, different fields are returned based on the action_mode  - `ACK`: Asynchronous mode, returns only key order fields - `RESULT`: No clearing information - `FULL`: Full mode (default)
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->cancelOrder($order_id, $currency_pair, $account, $action_mode, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order ID returned when the order was successfully created or the custom ID specified by the user&#39;s creation (i.e. the &#x60;text&#x60; field). Operations based on custom IDs can only be checked in pending orders. Only order ID can be used after the order is finished (transaction/cancel) |
 **currency_pair** | **string**| Currency pair |
 **account** | **string**| Specify query account | [optional]
 **action_mode** | **string**| Processing Mode  When placing an order, different fields are returned based on the action_mode  - &#x60;ACK&#x60;: Asynchronous mode, returns only key order fields - &#x60;RESULT&#x60;: No clearing information - &#x60;FULL&#x60;: Full mode (default) | [optional]
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## amendOrder

> \GateApi\Model\Order amendOrder($order_id, $order_patch, $currency_pair, $account, $x_gate_exptime)

Amend single order

Modify orders in spot, unified account and isolated margin account by default.  Currently both request body and query support currency_pair and account parameters, but request body has higher priority.  currency_pair must be filled in one of the request body or query parameters.  About rate limit: Order modification and order creation share the same rate limit rules.  About matching priority: Only reducing the quantity does not affect the matching priority. Modifying the price or increasing the quantity will adjust the priority to the end of the new price level.  Note: Modifying the quantity to be less than the filled quantity will trigger a cancellation and isolated margin account by default.  Currently both request body and query support currency_pair and account parameters, but request body has higher priority.  currency_pair must be filled in one of the request body or query parameters.  About rate limit: Order modification and order creation share the same rate limit rules.  About matching priority: Only reducing the quantity does not affect the matching priority. Modifying the price or increasing the quantity will adjust the priority to the end of the new price level.  Note: Modifying the quantity to be less than the filled quantity will trigger a cancellation operation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = '12345'; // string | The order ID returned when the order was successfully created or the custom ID specified by the user's creation (i.e. the `text` field). Operations based on custom IDs can only be checked in pending orders. Only order ID can be used after the order is finished (transaction/cancel)
$order_patch = new \GateApi\Model\OrderPatch(); // \GateApi\Model\OrderPatch | 
$currency_pair = 'BTC_USDT'; // string | Currency pair
$account = 'spot'; // string | Specify query account
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->amendOrder($order_id, $order_patch, $currency_pair, $account, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->amendOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| The order ID returned when the order was successfully created or the custom ID specified by the user&#39;s creation (i.e. the &#x60;text&#x60; field). Operations based on custom IDs can only be checked in pending orders. Only order ID can be used after the order is finished (transaction/cancel) |
 **order_patch** | [**\GateApi\Model\OrderPatch**](../Model/OrderPatch.md)|  |
 **currency_pair** | **string**| Currency pair | [optional]
 **account** | **string**| Specify query account | [optional]
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMyTrades

> \GateApi\Model\Trade[] listMyTrades($currency_pair, $limit, $page, $order_id, $account, $from, $to)

Query personal trading records

By default query of transaction records for spot, unified account and warehouse-by-site leverage accounts.  The history within a specified time range can be queried by specifying `from` or (and) `to`.  - If no time parameters are specified, only data for the last 7 days can be obtained. - If only any parameter of `from` or `to` is specified, only 7-day data from the start (or end) of the specified time is returned. - The range not allowed to exceed 30 days.  The parameters of the time range filter are processed according to the order end time.  The maximum number of pages when searching data using limit&page paging function is 100,0, that is, limit * (page - 1) <= 100,0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Retrieve results with specified currency pair
$associate_array['limit'] = 100; // int | Maximum number of items returned in list. Default: 100, minimum: 1, maximum: 1000
$associate_array['page'] = 1; // int | Page number
$associate_array['order_id'] = '12345'; // string | Filter trades with specified order ID. `currency_pair` is also required if this field is present
$associate_array['account'] = 'spot'; // string | Specify query account
$associate_array['from'] = 1627706330; // int | Start timestamp for the query
$associate_array['to'] = 1635329650; // int | End timestamp for the query, defaults to current time if not specified

try {
    $result = $apiInstance->listMyTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listMyTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Retrieve results with specified currency pair | [optional]
 **limit** | **int**| Maximum number of items returned in list. Default: 100, minimum: 1, maximum: 1000 | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]
 **order_id** | **string**| Filter trades with specified order ID. &#x60;currency_pair&#x60; is also required if this field is present | [optional]
 **account** | **string**| Specify query account | [optional]
 **from** | **int**| Start timestamp for the query | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]

### Return type

[**\GateApi\Model\Trade[]**](../Model/Trade.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSystemTime

> \GateApi\Model\SystemTime getSystemTime()

Get server current time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSystemTime();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getSystemTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\SystemTime**](../Model/SystemTime.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## countdownCancelAllSpot

> \GateApi\Model\TriggerTime countdownCancelAllSpot($countdown_cancel_all_spot_task)

Countdown cancel orders

Spot order heartbeat detection. If there is no \"cancel existing countdown\" or \"set new countdown\" when the user-set `timeout` time is reached, the related `spot pending orders` will be automatically cancelled. This interface can be called repeatedly to set a new countdown or cancel the countdown. Usage example: Repeat this interface at 30s intervals, setting the countdown `timeout` to `30 (seconds)` each time. If this interface is not called again within 30 seconds, all pending orders on the `market` you specified will be automatically cancelled. If no `market` is specified, all market cancelled. If the `timeout` is set to 0 within 30 seconds, the countdown timer will be terminated and the automatic order cancellation function will be cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countdown_cancel_all_spot_task = new \GateApi\Model\CountdownCancelAllSpotTask(); // \GateApi\Model\CountdownCancelAllSpotTask | 

try {
    $result = $apiInstance->countdownCancelAllSpot($countdown_cancel_all_spot_task);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->countdownCancelAllSpot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countdown_cancel_all_spot_task** | [**\GateApi\Model\CountdownCancelAllSpotTask**](../Model/CountdownCancelAllSpotTask.md)|  |

### Return type

[**\GateApi\Model\TriggerTime**](../Model/TriggerTime.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## amendBatchOrders

> \GateApi\Model\BatchOrder[] amendBatchOrders($batch_amend_item, $x_gate_exptime)

Batch modification of orders

Modify orders in spot, unified account and isolated margin account by default. Modify uncompleted orders, up to 5 orders can be modified at a time. Request parameters should be passed in array format. If there are order modification failures during the batch modification process, the modification of the next order will continue to be executed, and the execution will return with the corresponding order failure information. The call order of batch modification orders is consistent with the order list order. The return content order of batch modification orders is consistent with the order list order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_amend_item = array(new \GateApi\Model\BatchAmendItem()); // \GateApi\Model\BatchAmendItem[] | 
$x_gate_exptime = '1689560679123'; // string | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

try {
    $result = $apiInstance->amendBatchOrders($batch_amend_item, $x_gate_exptime);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->amendBatchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_amend_item** | [**\GateApi\Model\BatchAmendItem[]**](../Model/BatchAmendItem.md)|  |
 **x_gate_exptime** | **string**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

### Return type

[**\GateApi\Model\BatchOrder[]**](../Model/BatchOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSpotInsuranceHistory

> \GateApi\Model\SpotInsuranceHistory[] getSpotInsuranceHistory($business, $currency, $from, $to, $page, $limit)

Query spot insurance fund historical data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['business'] = 'margin'; // string | Leverage business, margin - position by position; unified - unified account
$associate_array['currency'] = 'BTC'; // string | Currency
$associate_array['from'] = 1547706332; // int | Start timestamp in seconds
$associate_array['to'] = 1547706332; // int | End timestamp in seconds
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 30; // int | The maximum number of items returned in the list, the default value is 30

try {
    $result = $apiInstance->getSpotInsuranceHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getSpotInsuranceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business** | **string**| Leverage business, margin - position by position; unified - unified account |
 **currency** | **string**| Currency |
 **from** | **int**| Start timestamp in seconds |
 **to** | **int**| End timestamp in seconds |
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| The maximum number of items returned in the list, the default value is 30 | [optional] [default to 30]

### Return type

[**\GateApi\Model\SpotInsuranceHistory[]**](../Model/SpotInsuranceHistory.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSpotPriceTriggeredOrders

> \GateApi\Model\SpotPriceTriggeredOrder[] listSpotPriceTriggeredOrders($status, $market, $account, $limit, $offset)

Query running auto order list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['status'] = 'status_example'; // string | Query order list based on status
$associate_array['market'] = 'BTC_USDT'; // string | Trading market
$associate_array['account'] = 'account_example'; // string | Trading account type. Unified account must be set to `unified`
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listSpotPriceTriggeredOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listSpotPriceTriggeredOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Query order list based on status |
 **market** | **string**| Trading market | [optional]
 **account** | **string**| Trading account type. Unified account must be set to &#x60;unified&#x60; | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\SpotPriceTriggeredOrder[]**](../Model/SpotPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSpotPriceTriggeredOrder

> \GateApi\Model\TriggerOrderResponse createSpotPriceTriggeredOrder($spot_price_triggered_order)

Create price-triggered order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spot_price_triggered_order = new \GateApi\Model\SpotPriceTriggeredOrder(); // \GateApi\Model\SpotPriceTriggeredOrder | 

try {
    $result = $apiInstance->createSpotPriceTriggeredOrder($spot_price_triggered_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->createSpotPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **spot_price_triggered_order** | [**\GateApi\Model\SpotPriceTriggeredOrder**](../Model/SpotPriceTriggeredOrder.md)|  |

### Return type

[**\GateApi\Model\TriggerOrderResponse**](../Model/TriggerOrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelSpotPriceTriggeredOrderList

> \GateApi\Model\SpotPriceTriggeredOrder[] cancelSpotPriceTriggeredOrderList($market, $account)

Cancel all auto orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$market = 'BTC_USDT'; // string | Trading market
$account = 'account_example'; // string | Trading account type. Unified account must be set to `unified`

try {
    $result = $apiInstance->cancelSpotPriceTriggeredOrderList($market, $account);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelSpotPriceTriggeredOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **market** | **string**| Trading market | [optional]
 **account** | **string**| Trading account type. Unified account must be set to &#x60;unified&#x60; | [optional]

### Return type

[**\GateApi\Model\SpotPriceTriggeredOrder[]**](../Model/SpotPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSpotPriceTriggeredOrder

> \GateApi\Model\SpotPriceTriggeredOrder getSpotPriceTriggeredOrder($order_id)

Query single auto order details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | ID returned when order is successfully created

try {
    $result = $apiInstance->getSpotPriceTriggeredOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getSpotPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID returned when order is successfully created |

### Return type

[**\GateApi\Model\SpotPriceTriggeredOrder**](../Model/SpotPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelSpotPriceTriggeredOrder

> \GateApi\Model\SpotPriceTriggeredOrder cancelSpotPriceTriggeredOrder($order_id)

Cancel single auto order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SpotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | ID returned when order is successfully created

try {
    $result = $apiInstance->cancelSpotPriceTriggeredOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelSpotPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID returned when order is successfully created |

### Return type

[**\GateApi\Model\SpotPriceTriggeredOrder**](../Model/SpotPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

