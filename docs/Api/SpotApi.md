# GateApi\SpotApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCurrencies**](SpotApi.md#listCurrencies) | **GET** /spot/currencies | List all currencies&#39; details
[**getCurrency**](SpotApi.md#getCurrency) | **GET** /spot/currencies/{currency} | Get details of a specific currency
[**listCurrencyPairs**](SpotApi.md#listCurrencyPairs) | **GET** /spot/currency_pairs | List all currency pairs supported
[**getCurrencyPair**](SpotApi.md#getCurrencyPair) | **GET** /spot/currency_pairs/{currency_pair} | Get details of a specifc currency pair
[**listTickers**](SpotApi.md#listTickers) | **GET** /spot/tickers | Retrieve ticker information
[**listOrderBook**](SpotApi.md#listOrderBook) | **GET** /spot/order_book | Retrieve order book
[**listTrades**](SpotApi.md#listTrades) | **GET** /spot/trades | Retrieve market trades
[**listCandlesticks**](SpotApi.md#listCandlesticks) | **GET** /spot/candlesticks | Market candlesticks
[**getFee**](SpotApi.md#getFee) | **GET** /spot/fee | Query user trading fee rates
[**getBatchSpotFee**](SpotApi.md#getBatchSpotFee) | **GET** /spot/batch_fee | Query a batch of user trading fee rates
[**listSpotAccounts**](SpotApi.md#listSpotAccounts) | **GET** /spot/accounts | List spot accounts
[**listSpotAccountBook**](SpotApi.md#listSpotAccountBook) | **GET** /spot/account_book | Query account book
[**createBatchOrders**](SpotApi.md#createBatchOrders) | **POST** /spot/batch_orders | Create a batch of orders
[**listAllOpenOrders**](SpotApi.md#listAllOpenOrders) | **GET** /spot/open_orders | List all open orders
[**createCrossLiquidateOrder**](SpotApi.md#createCrossLiquidateOrder) | **POST** /spot/cross_liquidate_orders | close position when cross-currency is disabled
[**listOrders**](SpotApi.md#listOrders) | **GET** /spot/orders | List orders
[**createOrder**](SpotApi.md#createOrder) | **POST** /spot/orders | Create an order
[**cancelOrders**](SpotApi.md#cancelOrders) | **DELETE** /spot/orders | Cancel all &#x60;open&#x60; orders in specified currency pair
[**cancelBatchOrders**](SpotApi.md#cancelBatchOrders) | **POST** /spot/cancel_batch_orders | Cancel a batch of orders with an ID list
[**getOrder**](SpotApi.md#getOrder) | **GET** /spot/orders/{order_id} | Get a single order
[**cancelOrder**](SpotApi.md#cancelOrder) | **DELETE** /spot/orders/{order_id} | Cancel a single order
[**amendOrder**](SpotApi.md#amendOrder) | **PATCH** /spot/orders/{order_id} | Amend an order
[**listMyTrades**](SpotApi.md#listMyTrades) | **GET** /spot/my_trades | List personal trading history
[**getSystemTime**](SpotApi.md#getSystemTime) | **GET** /spot/time | Get server current time
[**countdownCancelAllSpot**](SpotApi.md#countdownCancelAllSpot) | **POST** /spot/countdown_cancel_all | Countdown cancel orders
[**amendBatchOrders**](SpotApi.md#amendBatchOrders) | **POST** /spot/amend_batch_orders | Batch modification of orders
[**getSpotInsuranceHistory**](SpotApi.md#getSpotInsuranceHistory) | **GET** /spot/insurance_history | Query spot insurance fund historical data
[**listSpotPriceTriggeredOrders**](SpotApi.md#listSpotPriceTriggeredOrders) | **GET** /spot/price_orders | Retrieve running auto order list
[**createSpotPriceTriggeredOrder**](SpotApi.md#createSpotPriceTriggeredOrder) | **POST** /spot/price_orders | Create a price-triggered order
[**cancelSpotPriceTriggeredOrderList**](SpotApi.md#cancelSpotPriceTriggeredOrderList) | **DELETE** /spot/price_orders | Cancel all open orders
[**getSpotPriceTriggeredOrder**](SpotApi.md#getSpotPriceTriggeredOrder) | **GET** /spot/price_orders/{order_id} | Get a price-triggered order
[**cancelSpotPriceTriggeredOrder**](SpotApi.md#cancelSpotPriceTriggeredOrder) | **DELETE** /spot/price_orders/{order_id} | cancel a price-triggered order


## listCurrencies

> \GateApi\Model\Currency[] listCurrencies()

List all currencies' details

When a currency corresponds to multiple chains, you can query the information of multiple chains through the `chains` field, such as the charging and recharge status, identification, etc. of the chain.

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

Get details of a specific currency

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

List all currency pairs supported

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

Get details of a specifc currency pair

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

Retrieve ticker information

Return only related data if `currency_pair` is specified; otherwise return all of them

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

Retrieve order book

Order book will be sorted by price from high to low on bids; low to high on asks

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
$associate_array['interval'] = '0'; // string | Order depth. 0 means no aggregation is applied. default to 0
$associate_array['limit'] = 10; // int | Maximum number of order depth data in asks or bids
$associate_array['with_id'] = false; // bool | Return order book ID

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
 **interval** | **string**| Order depth. 0 means no aggregation is applied. default to 0 | [optional] [default to &#39;0&#39;]
 **limit** | **int**| Maximum number of order depth data in asks or bids | [optional] [default to 10]
 **with_id** | **bool**| Return order book ID | [optional] [default to false]

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

Retrieve market trades

Supports `from` and `to` by time range query or page-turn query based on `last_id`. By default, query by time range is the last 30 days.  The query method based on `last_id` page turn is no longer recommended. If `last_id` is specified, the time range query parameters will be ignored.  The maximum number of pages when searching data using limit&page paging function is 100,000, that is, limit * (page - 1) <= 100,000.

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
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list.  Default: 100, Minimum: 1, Maximum: 1000
$associate_array['last_id'] = '12345'; // string | Specify list staring point using the `id` of last record in previous list-query results
$associate_array['reverse'] = false; // bool | Whether the id of records to be retrieved should be less than the last_id specified. Default to false.  When `last_id` is specified. Set `reverse` to `true` to trace back trading history; `false` to retrieve latest tradings.  No effect if `last_id` is not specified.
$associate_array['from'] = 1627706330; // int | Start timestamp of the query
$associate_array['to'] = 1635329650; // int | Time range ending, default to current time
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
 **limit** | **int**| Maximum number of records to be returned in a single list.  Default: 100, Minimum: 1, Maximum: 1000 | [optional] [default to 100]
 **last_id** | **string**| Specify list staring point using the &#x60;id&#x60; of last record in previous list-query results | [optional]
 **reverse** | **bool**| Whether the id of records to be retrieved should be less than the last_id specified. Default to false.  When &#x60;last_id&#x60; is specified. Set &#x60;reverse&#x60; to &#x60;true&#x60; to trace back trading history; &#x60;false&#x60; to retrieve latest tradings.  No effect if &#x60;last_id&#x60; is not specified. | [optional] [default to false]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
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

Market candlesticks

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
$associate_array['limit'] = 100; // int | Maximum recent data points to return. `limit` is conflicted with `from` and `to`. If either `from` or `to` is specified, request will be rejected.
$associate_array['from'] = 1546905600; // int | Start time of candlesticks, formatted in Unix timestamp in seconds. Default to`to - 100 * interval` if not specified
$associate_array['to'] = 1546935600; // int | End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time
$associate_array['interval'] = '30m'; // string | Interval time between data points. Note that `30d` means 1 natual month, not 30 days

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
 **limit** | **int**| Maximum recent data points to return. &#x60;limit&#x60; is conflicted with &#x60;from&#x60; and &#x60;to&#x60;. If either &#x60;from&#x60; or &#x60;to&#x60; is specified, request will be rejected. | [optional] [default to 100]
 **from** | **int**| Start time of candlesticks, formatted in Unix timestamp in seconds. Default to&#x60;to - 100 * interval&#x60; if not specified | [optional]
 **to** | **int**| End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time | [optional]
 **interval** | **string**| Interval time between data points. Note that &#x60;30d&#x60; means 1 natual month, not 30 days | [optional] [default to &#39;30m&#39;]

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

Query user trading fee rates

This API is deprecated in favour of new fee retrieving API `/wallet/fee`.

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
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify a currency pair to retrieve precise fee rate  This field is optional. In most cases, the fee rate is identical among all currency pairs

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
 **currency_pair** | **string**| Specify a currency pair to retrieve precise fee rate  This field is optional. In most cases, the fee rate is identical among all currency pairs | [optional]

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

Query a batch of user trading fee rates

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
$currency_pairs = 'BTC_USDT,ETH_USDT'; // string | A request can only query up to 50 currency pairs

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
 **currency_pairs** | **string**| A request can only query up to 50 currency pairs |

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

List spot accounts

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
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency

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
 **currency** | **string**| Retrieve data of the specified currency | [optional]

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

> \GateApi\Model\SpotAccountBook[] listSpotAccountBook($currency, $from, $to, $page, $limit, $type)

Query account book

Record query time range is not allowed to exceed 30 days.  The maximum number of pages when searching data using limit&page paging function is 100,000, that is, limit * (page - 1) <= 100,000.

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
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['from'] = 1627706330; // int | Start timestamp of the query
$associate_array['to'] = 1635329650; // int | Time range ending, default to current time
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['type'] = 'lend'; // string | Only retrieve changes of the specified type. All types will be returned if not specified.

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
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **type** | **string**| Only retrieve changes of the specified type. All types will be returned if not specified. | [optional]

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

Create a batch of orders

Batch orders requirements:  1. custom order field `text` is required 2. At most 4 currency pairs, maximum 10 orders each, are allowed in one request 3. No mixture of spot orders and margin orders, i.e. `account` must be identical for all orders

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
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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

Query the current order list of all trading pairs. Please note that the paging parameter controls the number of pending orders in each trading pair. There is no paging control for the number of trading pairs. All trading pairs with pending orders will be returned.

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
$associate_array['account'] = 'spot'; // string | Specify query account.

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
 **account** | **string**| Specify query account. | [optional]

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

close position when cross-currency is disabled

Currently, only cross-margin accounts are supported to close position when cross currencies are disabled.  Maximum buy quantity = (unpaid principal and interest - currency balance - the amount of the currency in the order book) / 0.998

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

Note that the query results are spot order lists for spot, unified account and warehouse-by-site leverage accounts by default.  `status` is set to `open`, that is, when querying the pending order list, only pagination control of `page` and `limit` is supported. `limit` Maximum setting is only allowed to 100 . The `side` and `from`, `to` parameters for time range query are not supported.  `status` is set to `finished`, that is, when querying historical delegations, in addition to pagination queries, `from` and `to` are also supported by time range queries. In addition, it supports setting the `side` parameter to filter one-side history.  The parameters of the time range filtering are processed according to the order end time.

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
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Retrieve results with specified currency pair. It is required for open orders, but optional for finished ones.
$associate_array['status'] = 'open'; // string | List orders based on status  `open` - order is waiting to be filled `finished` - order has been filled or cancelled
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of records to be returned. If `status` is `open`, maximum of `limit` is 100
$associate_array['account'] = 'spot'; // string | Specify query account.
$associate_array['from'] = 1627706330; // int | Start timestamp of the query
$associate_array['to'] = 1635329650; // int | Time range ending, default to current time
$associate_array['side'] = 'sell'; // string | All bids or asks. Both included if not specified

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
 **currency_pair** | **string**| Retrieve results with specified currency pair. It is required for open orders, but optional for finished ones. |
 **status** | **string**| List orders based on status  &#x60;open&#x60; - order is waiting to be filled &#x60;finished&#x60; - order has been filled or cancelled |
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of records to be returned. If &#x60;status&#x60; is &#x60;open&#x60;, maximum of &#x60;limit&#x60; is 100 | [optional] [default to 100]
 **account** | **string**| Specify query account. | [optional]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **side** | **string**| All bids or asks. Both included if not specified | [optional]

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

Support spot, margin, leverage, and full-position leverage orders. Use different accounts through the `account` field, default is `spot`, that is, use the spot account to place an order if the user is `unified` account, default is to place an order with a unified account  When using leveraged account trading, that is, when `account` is set to `margin`, you can set `auto_borrow` to `true`, In the case of insufficient account balance, the system will automatically execute the `POST /margin/uni/loans` to borrow the insufficient part. Whether the assets obtained after the leveraged order is automatically used to return the borrowing orders of the leveraged account in a position-by-store leverage account depends on the automatic repayment settings of the user's position-by-store leverage account**, The account automatic repayment settings can be queried and set through `/margin/auto_repay`.  Use unified account transactions, that is, when `account` is set to `unified`, `auto_borrow` \" can also be enableTo realize the insufficient part of automatic borrowing, but unlike the leverage account, whether the entrustment of a unified account is automatically repayable depends on the   when placing an order`auto_repay` setting, this setting is only effective for the current entrustment, that is, only the assets obtained after the entrustment transaction will be used to repay the borrowing orders of the full-position leverage account. Unified account ordering currently supports `auto_borrow` and `auto_repay` at the same time.  Auto repayment will be triggered at the end of the order, i.e. `status` is `cancelled` or `closed` .  **Delegation Status**  The entrustment status in the pending order is `open`, which remains at `open` until all the quantity is traded. If it is eaten, the order ends and the status becomes `closed`. If the order is cancelled before all transactions are completed, regardless of whether there are partial transactions, the status will become `cancelled`  **Iceberg Entrustment**  `iceberg` is used to set the number of iceberg delegations displayed, and does not support complete hiding. Note that when hidden part of the transaction is charged according to the taker's handling rate.  **Restrict user transactions**  Set `stp_act` to decide to use strategies that limit user transactions

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
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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

When the `account` parameter is not specified, all pending orders including spot, unified account, and position-by-position leverage will be cancelled. When `currency_pair` is not specified, all transaction pairs are revoked You can specify a certain account separately to cancel all orders under the specified account

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
$side = 'sell'; // string | All bids or asks. Both included if not specified
$account = 'spot'; // string | Specify Account Type  - Classic Account: If not specified, all include  - Unified Account: Specify `unified`
$action_mode = 'ACK'; // string | Processing Mode  When placing an order, different fields are returned based on the action_mode  - ACK: Asynchronous mode, returns only key order fields - RESULT: No clearing information - FULL: Full mode (default)
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **side** | **string**| All bids or asks. Both included if not specified | [optional]
 **account** | **string**| Specify Account Type  - Classic Account: If not specified, all include  - Unified Account: Specify &#x60;unified&#x60; | [optional]
 **action_mode** | **string**| Processing Mode  When placing an order, different fields are returned based on the action_mode  - ACK: Asynchronous mode, returns only key order fields - RESULT: No clearing information - FULL: Full mode (default) | [optional]
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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

Cancel a batch of orders with an ID list

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
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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

Get a single order

By default, orders for spot, unified account and warehouse-by-site leverage account are checked.

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
$currency_pair = 'BTC_USDT'; // string | Specify the transaction pair to query. If you are querying pending order records, this field is required. If you are querying traded records, this field can be left blank.
$account = 'spot'; // string | Specify query account.

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
 **currency_pair** | **string**| Specify the transaction pair to query. If you are querying pending order records, this field is required. If you are querying traded records, this field can be left blank. |
 **account** | **string**| Specify query account. | [optional]

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

Cancel a single order

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
$account = 'spot'; // string | Specify query account.
$action_mode = 'ACK'; // string | Processing Mode  When placing an order, different fields are returned based on the action_mode  - ACK: Asynchronous mode, returns only key order fields - RESULT: No clearing information - FULL: Full mode (default)
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **account** | **string**| Specify query account. | [optional]
 **action_mode** | **string**| Processing Mode  When placing an order, different fields are returned based on the action_mode  - ACK: Asynchronous mode, returns only key order fields - RESULT: No clearing information - FULL: Full mode (default) | [optional]
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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

Amend an order

By default modify orders for spot, unified account and leverage account.  At present, both the request body and query support currency_pair and account parameters, but the request body has higher priority  currency_pair must be filled in the request body or query   Currently, only the price or quantity modification (choose one of two)  About speed limit: Modify orders and create orders to share speed limit rules  About matching priority: Only modifying the quantity will become smaller and will not affect the priority of matching. If the price is modified or the quantity is modified, the priority will be adjusted to the end of the new price   Precautions: Modification quantity is less than the transaction quantity will trigger the order cancellation operation

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
$account = 'spot'; // string | Specify query account.
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **account** | **string**| Specify query account. | [optional]
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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

List personal trading history

By default query of transaction records for spot, unified account and warehouse-by-site leverage accounts.  The history within a specified time range can be queried by specifying `from` or (and) `to`.  - If no time parameters are specified, only data for the last 7 days can be obtained. - If only any parameter of `from` or `to` is specified, only 7-day data from the start (or end) of the specified time is returned. - The range of `from` and `to` is not allowed to exceed 30 days.  The parameters of the time range filter are processed according to the order end time.  The maximum number of pages when searching data using limit&page paging function is 100,000, that is, limit * (page - 1) <= 100,000.

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
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list.  Default: 100, Minimum: 1, Maximum: 1000
$associate_array['page'] = 1; // int | Page number
$associate_array['order_id'] = '12345'; // string | Filter trades with specified order ID. `currency_pair` is also required if this field is present
$associate_array['account'] = 'spot'; // string | Specify query account.
$associate_array['from'] = 1627706330; // int | Start timestamp of the query
$associate_array['to'] = 1635329650; // int | Time range ending, default to current time

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
 **limit** | **int**| Maximum number of records to be returned in a single list.  Default: 100, Minimum: 1, Maximum: 1000 | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]
 **order_id** | **string**| Filter trades with specified order ID. &#x60;currency_pair&#x60; is also required if this field is present | [optional]
 **account** | **string**| Specify query account. | [optional]
 **from** | **int**| Start timestamp of the query | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]

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

When the timeout set by the user is reached, if there is no cancel or set a new countdown, the related pending orders will be automatically cancelled.  This endpoint can be called repeatedly to set a new countdown or cancel the countdown. For example, call this endpoint at 30s intervals, each countdown`timeout` is set to 30s. If this endpoint is not called again within 30 seconds, all pending orders on the specified `market` will be automatically cancelled, if no `market` is specified, all market pending orders will be cancelled. If the `timeout` is set to 0 within 30 seconds, the countdown timer will expire and the cacnel function will be cancelled.

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

By default modify orders for spot, unified account and leverage account. Currently, only the price or quantity modification (choose one of two) Modify unfinished orders, up to 5 orders can be modified in batches at a time. The request parameters should be passed in array format. When the order modification fails during batch modification, the modification of the order will continue to be executed. After execution, the failure information of the corresponding order will be carried The order of calling the batch modification order is consistent with the order list The order of return content of batch modification orders is consistent with the order list

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
$x_gate_exptime = 1689560679123; // int | Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected

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
 **x_gate_exptime** | **int**| Specify the expiration time (milliseconds); if the GATE receives the request time greater than the expiration time, the request will be rejected | [optional]

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
$associate_array['from'] = 1547706332; // int | Start timestamp, seconds
$associate_array['to'] = 1547706332; // int | End timestamp, in seconds
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
 **from** | **int**| Start timestamp, seconds |
 **to** | **int**| End timestamp, in seconds |
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

Retrieve running auto order list

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
$associate_array['status'] = 'status_example'; // string | Only list the orders with this status
$associate_array['market'] = 'BTC_USDT'; // string | Currency pair
$associate_array['account'] = 'account_example'; // string | Trading account type.  Portfolio margin account must set to `unified`
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
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
 **status** | **string**| Only list the orders with this status |
 **market** | **string**| Currency pair | [optional]
 **account** | **string**| Trading account type.  Portfolio margin account must set to &#x60;unified&#x60; | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
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

Create a price-triggered order

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

Cancel all open orders

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
$market = 'BTC_USDT'; // string | Currency pair
$account = 'account_example'; // string | Trading account type.  Portfolio margin account must set to `unified`

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
 **market** | **string**| Currency pair | [optional]
 **account** | **string**| Trading account type.  Portfolio margin account must set to &#x60;unified&#x60; | [optional]

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

Get a price-triggered order

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
$order_id = 'order_id_example'; // string | Retrieve the data of the order with the specified ID

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
 **order_id** | **string**| Retrieve the data of the order with the specified ID |

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

cancel a price-triggered order

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
$order_id = 'order_id_example'; // string | Retrieve the data of the order with the specified ID

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
 **order_id** | **string**| Retrieve the data of the order with the specified ID |

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

