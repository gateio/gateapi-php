# GateApi\SpotApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](SpotApi.md#cancelOrder) | **DELETE** /spot/orders/{order_id} | Cancel a single order
[**cancelOrders**](SpotApi.md#cancelOrders) | **DELETE** /spot/orders | Cancel all &#x60;open&#x60; orders in specified currency pair
[**createBatchOrders**](SpotApi.md#createBatchOrders) | **POST** /spot/batch_orders | Create a batch of orders
[**createOrder**](SpotApi.md#createOrder) | **POST** /spot/orders | Create an order
[**getCurrencyPair**](SpotApi.md#getCurrencyPair) | **GET** /spot/currency_pairs/{currency_pair} | Get detail of one single order
[**getOrder**](SpotApi.md#getOrder) | **GET** /spot/orders/{order_id} | Get a single order
[**listCandlesticks**](SpotApi.md#listCandlesticks) | **GET** /spot/candlesticks | Market candlesticks
[**listCurrencyPairs**](SpotApi.md#listCurrencyPairs) | **GET** /spot/currency_pairs | List all currency pairs supported
[**listMyTrades**](SpotApi.md#listMyTrades) | **GET** /spot/my_trades | List personal trading history
[**listOrderBook**](SpotApi.md#listOrderBook) | **GET** /spot/order_book | Retrieve order book
[**listOrders**](SpotApi.md#listOrders) | **GET** /spot/orders | List orders
[**listSpotAccounts**](SpotApi.md#listSpotAccounts) | **GET** /spot/accounts | List spot accounts
[**listTickers**](SpotApi.md#listTickers) | **GET** /spot/tickers | Retrieve ticker information
[**listTrades**](SpotApi.md#listTrades) | **GET** /spot/trades | Retrieve market trades


# **cancelOrder**
> \GateApi\Model\Order cancelOrder($order_id, $currency_pair)

Cancel a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$order_id = '12345'; // string | ID returned on order successfully being created
$currency_pair = 'BTC_USDT'; // string | Currency pair

try {
    $result = $apiInstance->cancelOrder($order_id, $currency_pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID returned on order successfully being created |
 **currency_pair** | **string**| Currency pair |

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrders**
> \GateApi\Model\Order[] cancelOrders($currency_pair, $side, $account)

Cancel all `open` orders in specified currency pair

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$currency_pair = 'BTC_USDT'; // string | Currency pair
$side = 'sell'; // string | All bids or asks. Both included in not specified
$account = 'spot'; // string | Specify account type. Default to all account types being included

try {
    $result = $apiInstance->cancelOrders($currency_pair, $side, $account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->cancelOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **side** | **string**| All bids or asks. Both included in not specified | [optional]
 **account** | **string**| Specify account type. Default to all account types being included | [optional]

### Return type

[**\GateApi\Model\Order[]**](../Model/Order.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createBatchOrders**
> \GateApi\Model\BatchOrder[] createBatchOrders($order)

Create a batch of orders

Batch orders requirements:  1. custom order field `text` is required 2. At most 4 currency pairs, maximum 5 orders each, are allowed in one request 3. No mixture of spot orders and margin orders, e.g. `account` must be identical for all orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$order = array(new \GateApi\Model\Order()); // \GateApi\Model\Order[] | 

try {
    $result = $apiInstance->createBatchOrders($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->createBatchOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\GateApi\Model\Order[]**](../Model/Order.md)|  |

### Return type

[**\GateApi\Model\BatchOrder[]**](../Model/BatchOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrder**
> \GateApi\Model\Order createOrder($order)

Create an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$order = new \GateApi\Model\Order(); // \GateApi\Model\Order | 

try {
    $result = $apiInstance->createOrder($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\GateApi\Model\Order**](../Model/Order.md)|  |

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrencyPair**
> \GateApi\Model\CurrencyPair getCurrencyPair($currency_pair)

Get detail of one single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi()
$currency_pair = 'ETH_BTC'; // string | Currency pair

try {
    $result = $apiInstance->getCurrencyPair($currency_pair);
    print_r($result);
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \GateApi\Model\Order getOrder($order_id, $currency_pair)

Get a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$order_id = '12345'; // string | ID returned on order successfully being created
$currency_pair = 'BTC_USDT'; // string | Currency pair

try {
    $result = $apiInstance->getOrder($order_id, $currency_pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID returned on order successfully being created |
 **currency_pair** | **string**| Currency pair |

### Return type

[**\GateApi\Model\Order**](../Model/Order.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCandlesticks**
> string[][] listCandlesticks($currency_pair, $limit, $interval)

Market candlesticks

Candlestick data will start from (current time - limit * interval), end at current time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi()
$currency_pair = 'BTC_USDT'; // string | Currency pair
$limit = 100; // int | Maximum number of record returned in one list
$interval = '30m'; // string | Interval time between data points

try {
    $result = $apiInstance->listCandlesticks($currency_pair, $limit, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **interval** | **string**| Interval time between data points | [optional] [default to &#39;30m&#39;]

### Return type

[**string[][]**](../Model/array.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCurrencyPairs**
> \GateApi\Model\CurrencyPair[] listCurrencyPairs()

List all currency pairs supported

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi()

try {
    $result = $apiInstance->listCurrencyPairs();
    print_r($result);
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMyTrades**
> \GateApi\Model\Trade[] listMyTrades($currency_pair, $limit, $page, $order_id)

List personal trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$currency_pair = 'BTC_USDT'; // string | Currency pair
$limit = 100; // int | Maximum number of record returned in one list
$page = 1; // int | Page number
$order_id = '12345'; // string | List all trades of specified order

try {
    $result = $apiInstance->listMyTrades($currency_pair, $limit, $page, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listMyTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]
 **order_id** | **string**| List all trades of specified order | [optional]

### Return type

[**\GateApi\Model\Trade[]**](../Model/Trade.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrderBook**
> \GateApi\Model\OrderBook listOrderBook($currency_pair, $interval, $limit)

Retrieve order book

Order book will be sorted by price from high to low on bids; reversed on asks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi()
$currency_pair = 'BTC_USDT'; // string | Currency pair
$interval = '0'; // string | Order depth. 0 means no aggregation is applied. default to 0
$limit = 10; // int | Maximum number of order depth data in asks or bids

try {
    $result = $apiInstance->listOrderBook($currency_pair, $interval, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **interval** | **string**| Order depth. 0 means no aggregation is applied. default to 0 | [optional] [default to &#39;0&#39;]
 **limit** | **int**| Maximum number of order depth data in asks or bids | [optional] [default to 10]

### Return type

[**\GateApi\Model\OrderBook**](../Model/OrderBook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrders**
> \GateApi\Model\Order[] listOrders($currency_pair, $status, $page, $limit)

List orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$currency_pair = 'BTC_USDT'; // string | Currency pair
$status = 'open'; // string | List orders based on status  `open` - order is waiting to be filled `finished` - order has been filled or cancelled
$page = 1; // int | Page number
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listOrders($currency_pair, $status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **status** | **string**| List orders based on status  &#x60;open&#x60; - order is waiting to be filled &#x60;finished&#x60; - order has been filled or cancelled |
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\Order[]**](../Model/Order.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSpotAccounts**
> \GateApi\Model\SpotAccount[] listSpotAccounts($currency)

List spot accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\SpotApi(null, $config)
$currency = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->listSpotAccounts($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listSpotAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data | [optional]

### Return type

[**\GateApi\Model\SpotAccount[]**](../Model/SpotAccount.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTickers**
> \GateApi\Model\Ticker[] listTickers($currency_pair)

Retrieve ticker information

Return only related data if `currency_pair` is specified; otherwise return all of them

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi()
$currency_pair = 'BTC_USDT'; // string | Currency pair

try {
    $result = $apiInstance->listTickers($currency_pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]

### Return type

[**\GateApi\Model\Ticker[]**](../Model/Ticker.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTrades**
> \GateApi\Model\Trade[] listTrades($currency_pair, $limit, $last_id)

Retrieve market trades

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\SpotApi()
$currency_pair = 'BTC_USDT'; // string | Currency pair
$limit = 100; // int | Maximum number of record returned in one list
$last_id = '12345'; // string | Specify list staring point using the last record of `id` in previous list-query results

try {
    $result = $apiInstance->listTrades($currency_pair, $limit, $last_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotApi->listTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **last_id** | **string**| Specify list staring point using the last record of &#x60;id&#x60; in previous list-query results | [optional]

### Return type

[**\GateApi\Model\Trade[]**](../Model/Trade.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

