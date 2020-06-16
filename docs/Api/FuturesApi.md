# GateApi\FuturesApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelFuturesOrder**](FuturesApi.md#cancelFuturesOrder) | **DELETE** /futures/{settle}/orders/{order_id} | Cancel a single order
[**cancelFuturesOrders**](FuturesApi.md#cancelFuturesOrders) | **DELETE** /futures/{settle}/orders | Cancel all &#x60;open&#x60; orders matched
[**cancelPriceTriggeredOrder**](FuturesApi.md#cancelPriceTriggeredOrder) | **DELETE** /futures/{settle}/price_orders/{order_id} | Cancel a single order
[**cancelPriceTriggeredOrderList**](FuturesApi.md#cancelPriceTriggeredOrderList) | **DELETE** /futures/{settle}/price_orders | Cancel all open orders
[**createFuturesOrder**](FuturesApi.md#createFuturesOrder) | **POST** /futures/{settle}/orders | Create a futures order
[**createPriceTriggeredOrder**](FuturesApi.md#createPriceTriggeredOrder) | **POST** /futures/{settle}/price_orders | Create a price-triggered order
[**getFuturesContract**](FuturesApi.md#getFuturesContract) | **GET** /futures/{settle}/contracts/{contract} | Get a single contract
[**getFuturesOrder**](FuturesApi.md#getFuturesOrder) | **GET** /futures/{settle}/orders/{order_id} | Get a single order
[**getMyTrades**](FuturesApi.md#getMyTrades) | **GET** /futures/{settle}/my_trades | List personal trading history
[**getPosition**](FuturesApi.md#getPosition) | **GET** /futures/{settle}/positions/{contract} | Get single position
[**getPriceTriggeredOrder**](FuturesApi.md#getPriceTriggeredOrder) | **GET** /futures/{settle}/price_orders/{order_id} | Get a single order
[**listFuturesAccountBook**](FuturesApi.md#listFuturesAccountBook) | **GET** /futures/{settle}/account_book | Query account book
[**listFuturesAccounts**](FuturesApi.md#listFuturesAccounts) | **GET** /futures/{settle}/accounts | Query futures account
[**listFuturesCandlesticks**](FuturesApi.md#listFuturesCandlesticks) | **GET** /futures/{settle}/candlesticks | Get futures candlesticks
[**listFuturesContracts**](FuturesApi.md#listFuturesContracts) | **GET** /futures/{settle}/contracts | List all futures contracts
[**listFuturesFundingRateHistory**](FuturesApi.md#listFuturesFundingRateHistory) | **GET** /futures/{settle}/funding_rate | Funding rate history
[**listFuturesInsuranceLedger**](FuturesApi.md#listFuturesInsuranceLedger) | **GET** /futures/{settle}/insurance | Futures insurance balance history
[**listFuturesOrderBook**](FuturesApi.md#listFuturesOrderBook) | **GET** /futures/{settle}/order_book | Futures order book
[**listFuturesOrders**](FuturesApi.md#listFuturesOrders) | **GET** /futures/{settle}/orders | List futures orders
[**listFuturesTickers**](FuturesApi.md#listFuturesTickers) | **GET** /futures/{settle}/tickers | List futures tickers
[**listFuturesTrades**](FuturesApi.md#listFuturesTrades) | **GET** /futures/{settle}/trades | Futures trading history
[**listLiquidates**](FuturesApi.md#listLiquidates) | **GET** /futures/{settle}/liquidates | List liquidation history
[**listPositionClose**](FuturesApi.md#listPositionClose) | **GET** /futures/{settle}/position_close | List position close history
[**listPositions**](FuturesApi.md#listPositions) | **GET** /futures/{settle}/positions | List all positions of a user
[**listPriceTriggeredOrders**](FuturesApi.md#listPriceTriggeredOrders) | **GET** /futures/{settle}/price_orders | List all auto orders
[**updatePositionLeverage**](FuturesApi.md#updatePositionLeverage) | **POST** /futures/{settle}/positions/{contract}/leverage | Update position leverage
[**updatePositionMargin**](FuturesApi.md#updatePositionMargin) | **POST** /futures/{settle}/positions/{contract}/margin | Update position margin
[**updatePositionRiskLimit**](FuturesApi.md#updatePositionRiskLimit) | **POST** /futures/{settle}/positions/{contract}/risk_limit | Update position risk limit


# **cancelFuturesOrder**
> \GateApi\Model\FuturesOrder cancelFuturesOrder($settle, $order_id)

Cancel a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$order_id = '12345'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->cancelFuturesOrder($settle, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **order_id** | **string**| ID returned on order successfully being created |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelFuturesOrders**
> \GateApi\Model\FuturesOrder[] cancelFuturesOrders($settle, $contract, $side)

Cancel all `open` orders matched

Zero-fill order cannot be retrieved 60 seconds after cancellation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$side = 'ask'; // string | All bids or asks. Both included in not specified

try {
    $result = $apiInstance->cancelFuturesOrders($settle, $contract, $side);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelFuturesOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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

# **cancelPriceTriggeredOrder**
> \GateApi\Model\FuturesPriceTriggeredOrder cancelPriceTriggeredOrder($settle, $order_id)

Cancel a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$order_id = 'order_id_example'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->cancelPriceTriggeredOrder($settle, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **order_id** | **string**| ID returned on order successfully being created |

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelPriceTriggeredOrderList**
> \GateApi\Model\FuturesPriceTriggeredOrder[] cancelPriceTriggeredOrderList($settle, $contract)

Cancel all open orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract

try {
    $result = $apiInstance->cancelPriceTriggeredOrderList($settle, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelPriceTriggeredOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder[]**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFuturesOrder**
> \GateApi\Model\FuturesOrder createFuturesOrder($settle, $futures_order)

Create a futures order

Zero-fill order cannot be retrieved 60 seconds after cancellation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$futures_order = new \GateApi\Model\FuturesOrder(); // \GateApi\Model\FuturesOrder | 

try {
    $result = $apiInstance->createFuturesOrder($settle, $futures_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->createFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **futures_order** | [**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)|  |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPriceTriggeredOrder**
> \GateApi\Model\TriggerOrderResponse createPriceTriggeredOrder($settle, $futures_price_triggered_order)

Create a price-triggered order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$futures_price_triggered_order = new \GateApi\Model\FuturesPriceTriggeredOrder(); // \GateApi\Model\FuturesPriceTriggeredOrder | 

try {
    $result = $apiInstance->createPriceTriggeredOrder($settle, $futures_price_triggered_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->createPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **futures_price_triggered_order** | [**\GateApi\Model\FuturesPriceTriggeredOrder**](../Model/FuturesPriceTriggeredOrder.md)|  |

### Return type

[**\GateApi\Model\TriggerOrderResponse**](../Model/TriggerOrderResponse.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFuturesContract**
> \GateApi\Model\Contract getFuturesContract($settle, $contract)

Get a single contract

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract

try {
    $result = $apiInstance->getFuturesContract($settle, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getFuturesContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFuturesOrder**
> \GateApi\Model\FuturesOrder getFuturesOrder($settle, $order_id)

Get a single order

Zero-fill order cannot be retrieved 60 seconds after cancellation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$order_id = '12345'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->getFuturesOrder($settle, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **order_id** | **string**| ID returned on order successfully being created |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyTrades**
> \GateApi\Model\MyFuturesTrade[] getMyTrades($settle, $contract, $order, $limit, $offset, $last_id, $count_total)

List personal trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified
$order = 12345; // int | Futures order ID, return related data only if specified
$limit = 100; // int | Maximum number of record returned in one list
$offset = 0; // int | List offset, starting from 0
$last_id = '12345'; // string | Specify list staring point using the `id` of last record in previous list-query results
$count_total = 0; // int | Whether to return total number matched. Default to 0(no return)

try {
    $result = $apiInstance->getMyTrades($settle, $contract, $order, $limit, $offset, $last_id, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getMyTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **order** | **int**| Futures order ID, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **last_id** | **string**| Specify list staring point using the &#x60;id&#x60; of last record in previous list-query results | [optional]
 **count_total** | **int**| Whether to return total number matched. Default to 0(no return) | [optional] [default to 0]

### Return type

[**\GateApi\Model\MyFuturesTrade[]**](../Model/MyFuturesTrade.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPosition**
> \GateApi\Model\Position getPosition($settle, $contract)

Get single position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract

try {
    $result = $apiInstance->getPosition($settle, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceTriggeredOrder**
> \GateApi\Model\FuturesPriceTriggeredOrder getPriceTriggeredOrder($settle, $order_id)

Get a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$order_id = 'order_id_example'; // string | ID returned on order successfully being created

try {
    $result = $apiInstance->getPriceTriggeredOrder($settle, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **order_id** | **string**| ID returned on order successfully being created |

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesAccountBook**
> \GateApi\Model\FuturesAccountBook[] listFuturesAccountBook($settle, $limit, $from, $to, $type)

Query account book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$limit = 100; // int | Maximum number of record returned in one list
$from = 1547706332; // int | Start timestamp
$to = 1547706332; // int | End timestamp
$type = 'dnw'; // string | Changing Type: - dnw: Deposit & Withdraw - pnl: Profit & Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding - point_dnw: POINT Deposit & Withdraw - point_fee: POINT Trading fee - point_refr: POINT Referrer rebate

try {
    $result = $apiInstance->listFuturesAccountBook($settle, $limit, $from, $to, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **type** | **string**| Changing Type: - dnw: Deposit &amp; Withdraw - pnl: Profit &amp; Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding - point_dnw: POINT Deposit &amp; Withdraw - point_fee: POINT Trading fee - point_refr: POINT Referrer rebate | [optional]

### Return type

[**\GateApi\Model\FuturesAccountBook[]**](../Model/FuturesAccountBook.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesAccounts**
> \GateApi\Model\FuturesAccount listFuturesAccounts($settle)

Query futures account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency

try {
    $result = $apiInstance->listFuturesAccounts($settle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]

### Return type

[**\GateApi\Model\FuturesAccount**](../Model/FuturesAccount.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesCandlesticks**
> \GateApi\Model\FuturesCandlestick[] listFuturesCandlesticks($settle, $contract, $from, $to, $limit, $interval)

Get futures candlesticks

Return specified contract candlesticks. If prefix `contract` with `mark_`, the contract's mark price candlesticks are returned; if prefix with `index_`, index price candlesticks will be returned.  Maximum of 2000 points are returned in one query. Be sure not to exceed the limit when specifying `from`, `to` and `interval`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$from = 1546905600; // float | Start time of candlesticks, formatted in Unix timestamp in seconds. Default to`to - 100 * interval` if not specified
$to = 1546935600; // float | End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time
$limit = 100; // int | Maximum recent data points returned. `limit` is conflicted with `from` and `to`. If either `from` or `to` is specified, request will be rejected.
$interval = '5m'; // string | Interval time between data points

try {
    $result = $apiInstance->listFuturesCandlesticks($settle, $contract, $from, $to, $limit, $interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\Contract[] listFuturesContracts($settle)

List all futures contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency

try {
    $result = $apiInstance->listFuturesContracts($settle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]

### Return type

[**\GateApi\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesFundingRateHistory**
> \GateApi\Model\FundingRateRecord[] listFuturesFundingRateHistory($settle, $contract, $limit)

Funding rate history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listFuturesFundingRateHistory($settle, $contract, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesFundingRateHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\InsuranceRecord[] listFuturesInsuranceLedger($settle, $limit)

Futures insurance balance history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listFuturesInsuranceLedger($settle, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesInsuranceLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\FuturesOrderBook listFuturesOrderBook($settle, $contract, $interval, $limit)

Futures order book

Bids will be sorted by price from high to low, while asks sorted reversely

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$interval = '0'; // string | Order depth. 0 means no aggregation is applied. default to 0
$limit = 10; // int | Maximum number of order depth data in asks or bids

try {
    $result = $apiInstance->listFuturesOrderBook($settle, $contract, $interval, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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

# **listFuturesOrders**
> \GateApi\Model\FuturesOrder[] listFuturesOrders($settle, $contract, $status, $limit, $offset, $last_id, $count_total)

List futures orders

Zero-fill order cannot be retrieved 60 seconds after cancellation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$status = 'open'; // string | List orders based on status
$limit = 100; // int | Maximum number of record returned in one list
$offset = 0; // int | List offset, starting from 0
$last_id = '12345'; // string | Specify list staring point using the `id` of last record in previous list-query results
$count_total = 0; // int | Whether to return total number matched. Default to 0(no return)

try {
    $result = $apiInstance->listFuturesOrders($settle, $contract, $status, $limit, $offset, $last_id, $count_total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract |
 **status** | **string**| List orders based on status |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **last_id** | **string**| Specify list staring point using the &#x60;id&#x60; of last record in previous list-query results | [optional]
 **count_total** | **int**| Whether to return total number matched. Default to 0(no return) | [optional] [default to 0]

### Return type

[**\GateApi\Model\FuturesOrder[]**](../Model/FuturesOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesTickers**
> \GateApi\Model\FuturesTicker[] listFuturesTickers($settle, $contract)

List futures tickers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified

try {
    $result = $apiInstance->listFuturesTickers($settle, $contract);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\FuturesTrade[] listFuturesTrades($settle, $contract, $limit, $last_id, $from, $to)

Futures trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi()
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$limit = 100; // int | Maximum number of record returned in one list
$last_id = '12345'; // string | Specify list staring point using the id of last record in previous list-query results  This parameter is deprecated. Use `from` and `to` instead to limit time range
$from = 1546905600; // float | Specify starting time in Unix seconds. If not specified, `to` and `limit` will be used to limit response items. If items between `from` and `to` are more than `limit`, only `limit` number will be returned.
$to = 1546935600; // float | Specify end time in Unix seconds, default to current time

try {
    $result = $apiInstance->listFuturesTrades($settle, $contract, $limit, $last_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract |
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **last_id** | **string**| Specify list staring point using the id of last record in previous list-query results  This parameter is deprecated. Use &#x60;from&#x60; and &#x60;to&#x60; instead to limit time range | [optional]
 **from** | **float**| Specify starting time in Unix seconds. If not specified, &#x60;to&#x60; and &#x60;limit&#x60; will be used to limit response items. If items between &#x60;from&#x60; and &#x60;to&#x60; are more than &#x60;limit&#x60;, only &#x60;limit&#x60; number will be returned. | [optional]
 **to** | **float**| Specify end time in Unix seconds, default to current time | [optional]

### Return type

[**\GateApi\Model\FuturesTrade[]**](../Model/FuturesTrade.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLiquidates**
> \GateApi\Model\FuturesLiquidate[] listLiquidates($settle, $contract, $limit, $at)

List liquidation history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified
$limit = 100; // int | Maximum number of record returned in one list
$at = 0; // int | Specify a liquidation timestamp

try {
    $result = $apiInstance->listLiquidates($settle, $contract, $limit, $at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listLiquidates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **at** | **int**| Specify a liquidation timestamp | [optional] [default to 0]

### Return type

[**\GateApi\Model\FuturesLiquidate[]**](../Model/FuturesLiquidate.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPositionClose**
> \GateApi\Model\PositionClose[] listPositionClose($settle, $contract, $limit)

List position close history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listPositionClose($settle, $contract, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPositionClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\Position[] listPositions($settle)

List all positions of a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency

try {
    $result = $apiInstance->listPositions($settle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPriceTriggeredOrders**
> \GateApi\Model\FuturesPriceTriggeredOrder[] listPriceTriggeredOrders($settle, $status, $contract, $limit, $offset)

List all auto orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$status = 'status_example'; // string | List orders based on status
$contract = 'BTC_USD'; // string | Futures contract, return related data only if specified
$limit = 100; // int | Maximum number of record returned in one list
$offset = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listPriceTriggeredOrders($settle, $status, $contract, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPriceTriggeredOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
 **status** | **string**| List orders based on status |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder[]**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionLeverage**
> \GateApi\Model\Position updatePositionLeverage($settle, $contract, $leverage)

Update position leverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$leverage = '10'; // string | New position leverage

try {
    $result = $apiInstance->updatePositionLeverage($settle, $contract, $leverage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\Position updatePositionMargin($settle, $contract, $change)

Update position margin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$change = '0.01'; // string | Margin change. Use positive number to increase margin, negative number otherwise.

try {
    $result = $apiInstance->updatePositionMargin($settle, $contract, $change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionMargin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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
> \GateApi\Model\Position updatePositionRiskLimit($settle, $contract, $risk_limit)

Update position risk limit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\FuturesApi(null, $config)
$settle = 'btc'; // string | Settle currency
$contract = 'BTC_USD'; // string | Futures contract
$risk_limit = '10'; // string | New position risk limit

try {
    $result = $apiInstance->updatePositionRiskLimit($settle, $contract, $risk_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionRiskLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency | [default to &#39;btc&#39;]
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

