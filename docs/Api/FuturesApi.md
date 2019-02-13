# GateApi\FuturesApi

All URIs are relative to *https://fx-api.gateio.io/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](FuturesApi.md#cancelOrder) | **DELETE** /futures/orders/{order_id} | Cancel a single order
[**cancelOrders**](FuturesApi.md#cancelOrders) | **DELETE** /futures/orders | Cancel all &#x60;open&#x60; orders matched
[**createOrder**](FuturesApi.md#createOrder) | **POST** /futures/orders | Create a futures order
[**getFuturesContract**](FuturesApi.md#getFuturesContract) | **GET** /futures/contracts/{contract} | Get a single contract
[**getMyTrades**](FuturesApi.md#getMyTrades) | **GET** /futures/my_trades | List personal trading history
[**getOrder**](FuturesApi.md#getOrder) | **GET** /futures/orders/{order_id} | Get a single order
[**getPosition**](FuturesApi.md#getPosition) | **GET** /futures/positions/{contract} | Get single position
[**listFuturesAccountBook**](FuturesApi.md#listFuturesAccountBook) | **GET** /futures/account_book | Query account book
[**listFuturesAccounts**](FuturesApi.md#listFuturesAccounts) | **GET** /futures/accounts | Query futures account
[**listFuturesCandlesticks**](FuturesApi.md#listFuturesCandlesticks) | **GET** /futures/candlesticks | Get futures candlesticks
[**listFuturesContracts**](FuturesApi.md#listFuturesContracts) | **GET** /futures/contracts | List all futures contracts
[**listFuturesFundingRateHistory**](FuturesApi.md#listFuturesFundingRateHistory) | **GET** /futures/funding_rate | Funding rate history
[**listFuturesInsuranceLedger**](FuturesApi.md#listFuturesInsuranceLedger) | **GET** /futures/insurance | Futures insurance balance history
[**listFuturesOrderBook**](FuturesApi.md#listFuturesOrderBook) | **GET** /futures/order_book | Futures order book
[**listFuturesTickers**](FuturesApi.md#listFuturesTickers) | **GET** /futures/tickers | List futures tickers
[**listFuturesTrades**](FuturesApi.md#listFuturesTrades) | **GET** /futures/trades | Futures trading history
[**listOrders**](FuturesApi.md#listOrders) | **GET** /futures/orders | List futures orders
[**listPositionClose**](FuturesApi.md#listPositionClose) | **GET** /futures/position_close | List position close history
[**listPositions**](FuturesApi.md#listPositions) | **GET** /futures/positions | List all positions of a user
[**updatePositionLeverage**](FuturesApi.md#updatePositionLeverage) | **POST** /futures/positions/{contract}/leverage | Update position leverage
[**updatePositionMargin**](FuturesApi.md#updatePositionMargin) | **POST** /futures/positions/{contract}/margin | Update position margin
[**updatePositionRiskLimit**](FuturesApi.md#updatePositionRiskLimit) | **POST** /futures/positions/{contract}/risk_limit | Update position risk limit


# **cancelOrder**
> \GateApi\Model\FuturesOrder cancelOrder($order_id)

Cancel a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$order_id = '12345'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->cancelOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID returned on order successfully being created |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrders**
> \GateApi\Model\FuturesOrder[] cancelOrders($contract, $side)

Cancel all `open` orders matched

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract
$side = 'ask'; // string | All bids or asks. Both included in not specified

try {
    $result = $apiInstance->cancelOrders($contract, $side);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **side** | **string**| All bids or asks. Both included in not specified | [optional]

### Return type

[**\GateApi\Model\FuturesOrder[]**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrder**
> \GateApi\Model\FuturesOrder createOrder($futures_order)

Create a futures order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$futures_order = new \GateApi\Model\FuturesOrder(); // \GateApi\Model\FuturesOrder | 

try {
    $result = $apiInstance->createOrder($futures_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **futures_order** | [**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)|  |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFuturesContract**
> \GateApi\Model\Contract getFuturesContract($contract)

Get a single contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$contract = 'BTC_USD'; // string | Futures contract

try {
    $result = $apiInstance->getFuturesContract($contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getFuturesContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyTrades**
> \GateApi\Model\MyFuturesTrade[] getMyTrades($contract, $order, $limit, $last_id)

List personal trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified
$order = 12345; // int | Futures order ID, return related data only if specified
$limit = 100; // int | Maximum number of record returned in one list
$last_id = '12345'; // string | Specify list staring point using the last record of `id` in previous list-query results

try {
    $result = $apiInstance->getMyTrades($contract, $order, $limit, $last_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getMyTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **order** | **int**| Futures order ID, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **last_id** | **string**| Specify list staring point using the last record of &#x60;id&#x60; in previous list-query results | [optional]

### Return type

[**\GateApi\Model\MyFuturesTrade[]**](../Model/MyFuturesTrade.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \GateApi\Model\FuturesOrder getOrder($order_id)

Get a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$order_id = '12345'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->getOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| ID returned on order successfully being created |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPosition**
> \GateApi\Model\Position getPosition($contract)

Get single position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract

try {
    $result = $apiInstance->getPosition($contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesAccountBook**
> \GateApi\Model\FuturesAccountBook[] listFuturesAccountBook($limit, $from, $to, $type)

Query account book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$limit = 100; // int | Maximum number of record returned in one list
$from = 1547706332; // int | Start timestamp
$to = 1547706332; // int | End timestamp
$type = 'dnw'; // string | Changing Type  - dnw: Deposit & Withdraw - pnl: Profit & Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding

try {
    $result = $apiInstance->listFuturesAccountBook($limit, $from, $to, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **type** | **string**| Changing Type  - dnw: Deposit &amp; Withdraw - pnl: Profit &amp; Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding | [optional]

### Return type

[**\GateApi\Model\FuturesAccountBook[]**](../Model/FuturesAccountBook.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesAccounts**
> \GateApi\Model\FuturesAccount listFuturesAccounts()

Query futures account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)

try {
    $result = $apiInstance->listFuturesAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\FuturesAccount**](../Model/FuturesAccount.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesCandlesticks**
> \GateApi\Model\FuturesCandlestick[] listFuturesCandlesticks($contract, $from, $to, $limit, $interval)

Get futures candlesticks

Return specified contract candlesticks. If prefix `contract` with `mark_`, the contract's mark price candlesticks are returned; if prefix with `index_`, index price candlesticks will be returned.  Maximum of 2000 points are returned in one query. Be sure not to exceed the limit when specifying `from`, `to` and `interval`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$contract = 'BTC_USD'; // string | Futures contract
$from = 1546905600; // float | Start time of candlesticks, formatted in Unix timestamp in seconds. Default to`to - 100 * interval` if not specified
$to = 1546935600; // float | End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time
$limit = 100; // int | Maximum recent data points returned. `limit` is conflicted with `from` and `to`. If either `from` or `to` is specified, request will be rejected.
$interval = '5m'; // string | Interval time between data points

try {
    $result = $apiInstance->listFuturesCandlesticks($contract, $from, $to, $limit, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **from** | **float**| Start time of candlesticks, formatted in Unix timestamp in seconds. Default to&#x60;to - 100 * interval&#x60; if not specified | [optional]
 **to** | **float**| End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time | [optional]
 **limit** | **int**| Maximum recent data points returned. &#x60;limit&#x60; is conflicted with &#x60;from&#x60; and &#x60;to&#x60;. If either &#x60;from&#x60; or &#x60;to&#x60; is specified, request will be rejected. | [optional] [default to 100]
 **interval** | **string**| Interval time between data points | [optional] [default to &#39;5m&#39;]

### Return type

[**\GateApi\Model\FuturesCandlestick[]**](../Model/FuturesCandlestick.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesContracts**
> \GateApi\Model\Contract[] listFuturesContracts()

List all futures contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()

try {
    $result = $apiInstance->listFuturesContracts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesFundingRateHistory**
> \GateApi\Model\FundingRateRecord[] listFuturesFundingRateHistory($contract, $limit)

Funding rate history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$contract = 'BTC_USD'; // string | Futures contract
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listFuturesFundingRateHistory($contract, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesFundingRateHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\FundingRateRecord[]**](../Model/FundingRateRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesInsuranceLedger**
> \GateApi\Model\InsuranceRecord[] listFuturesInsuranceLedger($limit)

Futures insurance balance history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listFuturesInsuranceLedger($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesInsuranceLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\InsuranceRecord[]**](../Model/InsuranceRecord.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesOrderBook**
> \GateApi\Model\FuturesOrderBook listFuturesOrderBook($contract, $interval, $limit)

Futures order book

Bids will be sorted by price from high to low, while asks sorted reversely

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$contract = 'BTC_USD'; // string | Futures contract
$interval = '0'; // string | Order depth. 0 means no aggregation is applied. default to 0
$limit = 10; // int | Maximum number of order depth data in asks or bids

try {
    $result = $apiInstance->listFuturesOrderBook($contract, $interval, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **interval** | **string**| Order depth. 0 means no aggregation is applied. default to 0 | [optional] [default to &#39;0&#39;]
 **limit** | **int**| Maximum number of order depth data in asks or bids | [optional] [default to 10]

### Return type

[**\GateApi\Model\FuturesOrderBook**](../Model/FuturesOrderBook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesTickers**
> \GateApi\Model\FuturesTicker[] listFuturesTickers($contract)

List futures tickers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified

try {
    $result = $apiInstance->listFuturesTickers($contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract, return related data only if specified | [optional]

### Return type

[**\GateApi\Model\FuturesTicker[]**](../Model/FuturesTicker.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesTrades**
> \GateApi\Model\FuturesTrade[] listFuturesTrades($contract, $limit, $last_id)

Futures trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$contract = 'BTC_USD'; // string | Futures contract
$limit = 100; // int | Maximum number of record returned in one list
$last_id = '12345'; // string | Specify list staring point using the last record of `id` in previous list-query results

try {
    $result = $apiInstance->listFuturesTrades($contract, $limit, $last_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **last_id** | **string**| Specify list staring point using the last record of &#x60;id&#x60; in previous list-query results | [optional]

### Return type

[**\GateApi\Model\FuturesTrade[]**](../Model/FuturesTrade.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrders**
> \GateApi\Model\FuturesOrder[] listOrders($contract, $status, $limit, $last_id)

List futures orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract
$status = 'open'; // string | List orders based on status
$limit = 100; // int | Maximum number of record returned in one list
$last_id = '12345'; // string | Specify list staring point using the last record of `id` in previous list-query results

try {
    $result = $apiInstance->listOrders($contract, $status, $limit, $last_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **status** | **string**| List orders based on status |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **last_id** | **string**| Specify list staring point using the last record of &#x60;id&#x60; in previous list-query results | [optional]

### Return type

[**\GateApi\Model\FuturesOrder[]**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPositionClose**
> \GateApi\Model\PositionClose[] listPositionClose($contract, $limit)

List position close history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listPositionClose($contract, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPositionClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\PositionClose[]**](../Model/PositionClose.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPositions**
> \GateApi\Model\Position[] listPositions()

List all positions of a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)

try {
    $result = $apiInstance->listPositions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionLeverage**
> \GateApi\Model\Position updatePositionLeverage($contract, $leverage)

Update position leverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract
$leverage = '10'; // string | New position leverage

try {
    $result = $apiInstance->updatePositionLeverage($contract, $leverage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **leverage** | **string**| New position leverage |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionMargin**
> \GateApi\Model\Position updatePositionMargin($contract, $change)

Update position margin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract
$change = '0.01'; // string | Margin change. Use positive number to increase margin, negative number otherwise.

try {
    $result = $apiInstance->updatePositionMargin($contract, $change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionMargin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **change** | **string**| Margin change. Use positive number to increase margin, negative number otherwise. |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionRiskLimit**
> \GateApi\Model\Position updatePositionRiskLimit($contract, $risk_limit)

Update position risk limit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$contract = 'BTC_USD'; // string | Futures contract
$risk_limit = '10'; // string | New position risk limit

try {
    $result = $apiInstance->updatePositionRiskLimit($contract, $risk_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionRiskLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Futures contract |
 **risk_limit** | **string**| New position risk limit |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

