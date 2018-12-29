# GateClient\FuturesApi

All URIs are relative to *https://fx-api.gateio.io/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder**](FuturesApi.md#cancelOrder) | **DELETE** /futures/orders/{order_id} | Cancel a single order
[**cancelOrders**](FuturesApi.md#cancelOrders) | **DELETE** /futures/orders | Cancel all &#x60;open&#x60; orders matched
[**createOrder**](FuturesApi.md#createOrder) | **POST** /futures/orders | Create a futures order
[**getMyTrades**](FuturesApi.md#getMyTrades) | **GET** /futures/my_trades | List personal trading history
[**getOrder**](FuturesApi.md#getOrder) | **GET** /futures/orders/{order_id} | Get a single order
[**listFuturesAccounts**](FuturesApi.md#listFuturesAccounts) | **GET** /futures/accounts | Query futures account
[**listFuturesCandlesticks**](FuturesApi.md#listFuturesCandlesticks) | **GET** /futures/candlesticks | Get futures candlesticks
[**listFuturesContracts**](FuturesApi.md#listFuturesContracts) | **GET** /futures/contracts | List all futures contracts
[**listFuturesFundingRateHistory**](FuturesApi.md#listFuturesFundingRateHistory) | **GET** /futures/funding_rate | Funding rate history
[**listFuturesInsuranceLedger**](FuturesApi.md#listFuturesInsuranceLedger) | **GET** /futures/insurance | Futures insurance balance history
[**listFuturesOrderBook**](FuturesApi.md#listFuturesOrderBook) | **GET** /futures/order_book | Futures order book
[**listFuturesTickers**](FuturesApi.md#listFuturesTickers) | **GET** /futures/tickers | List futures tickers
[**listFuturesTrades**](FuturesApi.md#listFuturesTrades) | **GET** /futures/trades | Futures trading history
[**listOrders**](FuturesApi.md#listOrders) | **GET** /futures/orders | List futures orders
[**listPositions**](FuturesApi.md#listPositions) | **GET** /futures/positions | List all positions
[**updatePositionLeverage**](FuturesApi.md#updatePositionLeverage) | **POST** /futures/positions/{contract}/leverage | Update position leverage
[**updatePositionMargin**](FuturesApi.md#updatePositionMargin) | **POST** /futures/positions/{contract}/margin | Update position margin
[**updatePositionRiskLimit**](FuturesApi.md#updatePositionRiskLimit) | **POST** /futures/positions/{contract}/risk_limit | Update poisition risk limit


# **cancelOrder**
> cancelOrder($order_id)

Cancel a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$order_id = 'order_id_example'; // string | order id
try {
    $apiInstance->cancelOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| order id |

### Return type

void (empty response body)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelOrders**
> cancelOrders($contract, $side)

Cancel all `open` orders matched

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$contract = 'contract_example'; // string | futures contract
$side = 'side_example'; // string | All bids or asks. Both included in not specfied

try {
    $apiInstance->cancelOrders($contract, $side);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| futures contract |
 **side** | **string**| All bids or asks. Both included in not specfied | [optional]

### Return type

void (empty response body)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrder**
> \GateClient\Model\FuturesOrder createOrder($futures_order)

Create a futures order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$futures_order = new \GateClient\Model\FuturesOrder([
    "contract" => "contract_example",
    "size" => 1,
    "price" => "4000"
]); // \GateClient\Model\FuturesOrder | 

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
 **futures_order** | [**\GateClient\Model\FuturesOrder**](../Model/FuturesOrder.md)|  | [optional]

### Return type

[**\GateClient\Model\FuturesOrder**](../Model/FuturesOrder.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyTrades**
> \GateClient\Model\MyFuturesTrade[] getMyTrades($contract, $limit, $last_id)

List personal trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$contract = 'contract_example'; // string | futures contract. If specified, return only data related to the contract
$limit = 100; // int | maximum number of data returned in one request
$last_id = 'last_id_example'; // string | specify list staring record. Use the `id` in every last record of one list-query request to achieve consecutive list query

try {
    $result = $apiInstance->getMyTrades($contract, $limit, $last_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getMyTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| futures contract. If specified, return only data related to the contract | [optional]
 **limit** | **int**| maximum number of data returned in one request | [optional] [default to 100]
 **last_id** | **string**| specify list staring record. Use the &#x60;id&#x60; in every last record of one list-query request to achieve consecutive list query | [optional]

### Return type

[**\GateClient\Model\MyFuturesTrade[]**](../Model/MyFuturesTrade.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrder**
> \GateClient\Model\FuturesOrder getOrder($order_id)

Get a single order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$order_id = 'order_id_example'; // string | order id

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
 **order_id** | **string**| order id |

### Return type

[**\GateClient\Model\FuturesOrder**](../Model/FuturesOrder.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesAccounts**
> \GateClient\Model\FuturesAccount listFuturesAccounts()

Query futures account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

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

[**\GateClient\Model\FuturesAccount**](../Model/FuturesAccount.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesCandlesticks**
> \GateClient\Model\FuturesCandlestick listFuturesCandlesticks($contract, $from, $to, $limit, $interval)

Get futures candlesticks

Return specified contract candlesticks. If prefix `contract` with `mark_`, the contract's mark price candlesticks are returned; if prefix with `index_`, index price candlesticks will be returned.  Maximum of 2000 points are returned in one query. Be sure not to exceed the limit when specifying `from`, `to` and `interval`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new \GateClient\Api\FuturesApi();

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
 **contract** | **string**| futures contract |
 **from** | **float**| Start time of candlesticks, formatted in Unix timestamp in seconds. Default to &#x60;to - 100 * interval&#x60; if not specified | [optional]
 **to** | **float**| End time of candlesticsk, formatted in Unix timestamp in seconds. Default to current time | [optional]
 **limit** | **int**| Maximum recent data points returned. &#x60;limit&#x60; is conflicted with &#x60;from&#x60; and &#x60;to&#x60;. If either &#x60;from&#x60; or &#x60;to&#x60; is specified, request will be rejected. | [optional] [default to 100]
 **interval** | **string**| interval time between data points | [optional] [default to &#39;5m&#39;]

### Return type

[**\GateClient\Model\FuturesCandlestick**](../Model/FuturesCandlestick.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesContracts**
> \GateClient\Model\Contract[] listFuturesContracts()

List all futures contracts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GateClient\Api\FuturesApi();

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

[**\GateClient\Model\Contract[]**](../Model/Contract.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesFundingRateHistory**
> \GateClient\Model\FundingRateRecord listFuturesFundingRateHistory($contract, $limit)

Funding rate history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GateClient\Api\FuturesApi();
$contract = 'contract_example'; // string | futures contract
$limit = 100; // int | maximum number of data returned in one request

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
 **contract** | **string**| futures contract |
 **limit** | **int**| maximum number of data returned in one request | [optional] [default to 100]

### Return type

[**\GateClient\Model\FundingRateRecord**](../Model/FundingRateRecord.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesInsuranceLedger**
> \GateClient\Model\InsuranceRecord listFuturesInsuranceLedger($limit)

Futures insurance balance history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GateClient\Api\FuturesApi();
$limit = 100; // int | maximum number of data returned in one request

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
 **limit** | **int**| maximum number of data returned in one request | [optional] [default to 100]

### Return type

[**\GateClient\Model\InsuranceRecord**](../Model/InsuranceRecord.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesOrderBook**
> \GateClient\Model\FuturesOrderBook listFuturesOrderBook($contract, $interval, $limit)

Futures order book

bids will be sorted by price from high to low, while asks sorted reversely

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GateClient\Api\FuturesApi();
$contract = 'contract_example'; // string | futures contract
$interval = '0'; // string | order depth. 0 means no aggregation is applied. default to 0
$limit = 10; // int | maximum number of order depth data in asks or bids

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
 **contract** | **string**| futures contract |
 **interval** | **string**| order depth. 0 means no aggregation is applied. default to 0 | [optional] [default to &#39;0&#39;]
 **limit** | **int**| maximum number of order depth data in asks or bids | [optional] [default to 10]

### Return type

[**\GateClient\Model\FuturesOrderBook**](../Model/FuturesOrderBook.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesTickers**
> \GateClient\Model\FuturesTicker[] listFuturesTickers($contract)

List futures tickers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GateClient\Api\FuturesApi();
$contract = 'contract_example'; // string | futures contract. If specified, return only data related to the contract

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
 **contract** | **string**| futures contract. If specified, return only data related to the contract | [optional]

### Return type

[**\GateClient\Model\FuturesTicker[]**](../Model/FuturesTicker.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFuturesTrades**
> \GateClient\Model\FuturesTrade[] listFuturesTrades($contract, $limit, $last_id)

Futures trading history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GateClient\Api\FuturesApi();
$contract = 'contract_example'; // string | futures contract
$limit = 100; // int | maximum number of data returned in one request
$last_id = 'last_id_example'; // string | specify list staring record. Use the `id` in every last record of one list-query request to achieve consecutive list query

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
 **contract** | **string**| futures contract |
 **limit** | **int**| maximum number of data returned in one request | [optional] [default to 100]
 **last_id** | **string**| specify list staring record. Use the &#x60;id&#x60; in every last record of one list-query request to achieve consecutive list query | [optional]

### Return type

[**\GateClient\Model\FuturesTrade[]**](../Model/FuturesTrade.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOrders**
> \GateClient\Model\FuturesOrder[] listOrders($contract, $status, $limit, $last_id)

List futures orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$contract = 'contract_example'; // string | futures contract
$status = 'status_example'; // string | order status
$limit = 100; // int | maximum number of data returned in one request
$last_id = 'last_id_example'; // string | specify list staring record. Use the `id` in every last record of one list-query request to achieve consecutive list query

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
 **contract** | **string**| futures contract |
 **status** | **string**| order status |
 **limit** | **int**| maximum number of data returned in one request | [optional] [default to 100]
 **last_id** | **string**| specify list staring record. Use the &#x60;id&#x60; in every last record of one list-query request to achieve consecutive list query | [optional]

### Return type

[**\GateClient\Model\FuturesOrder[]**](../Model/FuturesOrder.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPositions**
> \GateClient\Model\Position[] listPositions()

List all positions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

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

[**\GateClient\Model\Position[]**](../Model/Position.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionLeverage**
> \GateClient\Model\Position updatePositionLeverage($contract, $leverage)

Update position leverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$contract = 'contract_example'; // string | futures contract
$leverage = 'leverage_example'; // string | new leverage of position

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
 **contract** | **string**| futures contract |
 **leverage** | **string**| new leverage of position |

### Return type

[**\GateClient\Model\Position**](../Model/Position.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionMargin**
> \GateClient\Model\Position updatePositionMargin($contract, $change)

Update position margin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$contract = 'contract_example'; // string | futures contract
$change = 'change_example'; // string | margin change. Use positive number to increase margin, negative number otherwise.

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
 **contract** | **string**| futures contract |
 **change** | **string**| margin change. Use positive number to increase margin, negative number otherwise. |

### Return type

[**\GateClient\Model\Position**](../Model/Position.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePositionRiskLimit**
> \GateClient\Model\Position updatePositionRiskLimit($contract, $risk_limit)

Update poisition risk limit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new \GateClient\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new \GateClient\Api\FuturesApi(null, $config);

$contract = 'contract_example'; // string | futures contract
$risk_limit = 'risk_limit_example'; // string | new risk limit of position

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
 **contract** | **string**| futures contract |
 **risk_limit** | **string**| new risk limit of position |

### Return type

[**\GateClient\Model\Position**](../Model/Position.md)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

