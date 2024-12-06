# GateApi\OptionsApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOptionsUnderlyings**](OptionsApi.md#listOptionsUnderlyings) | **GET** /options/underlyings | List all underlyings
[**listOptionsExpirations**](OptionsApi.md#listOptionsExpirations) | **GET** /options/expirations | List all expiration times
[**listOptionsContracts**](OptionsApi.md#listOptionsContracts) | **GET** /options/contracts | List all the contracts with specified underlying and expiration time
[**getOptionsContract**](OptionsApi.md#getOptionsContract) | **GET** /options/contracts/{contract} | Query specified contract detail
[**listOptionsSettlements**](OptionsApi.md#listOptionsSettlements) | **GET** /options/settlements | List settlement history
[**getOptionsSettlement**](OptionsApi.md#getOptionsSettlement) | **GET** /options/settlements/{contract} | Get specified contract&#39;s settlement
[**listMyOptionsSettlements**](OptionsApi.md#listMyOptionsSettlements) | **GET** /options/my_settlements | List my options settlements
[**listOptionsOrderBook**](OptionsApi.md#listOptionsOrderBook) | **GET** /options/order_book | Options order book
[**listOptionsTickers**](OptionsApi.md#listOptionsTickers) | **GET** /options/tickers | List tickers of options contracts
[**listOptionsUnderlyingTickers**](OptionsApi.md#listOptionsUnderlyingTickers) | **GET** /options/underlying/tickers/{underlying} | Get underlying ticker
[**listOptionsCandlesticks**](OptionsApi.md#listOptionsCandlesticks) | **GET** /options/candlesticks | Get options candlesticks
[**listOptionsUnderlyingCandlesticks**](OptionsApi.md#listOptionsUnderlyingCandlesticks) | **GET** /options/underlying/candlesticks | Mark price candlesticks of an underlying
[**listOptionsTrades**](OptionsApi.md#listOptionsTrades) | **GET** /options/trades | Options trade history
[**listOptionsAccount**](OptionsApi.md#listOptionsAccount) | **GET** /options/accounts | List options account
[**listOptionsAccountBook**](OptionsApi.md#listOptionsAccountBook) | **GET** /options/account_book | List account changing history
[**listOptionsPositions**](OptionsApi.md#listOptionsPositions) | **GET** /options/positions | List user&#39;s positions of specified underlying
[**getOptionsPosition**](OptionsApi.md#getOptionsPosition) | **GET** /options/positions/{contract} | Get specified contract position
[**listOptionsPositionClose**](OptionsApi.md#listOptionsPositionClose) | **GET** /options/position_close | List user&#39;s liquidation history of specified underlying
[**listOptionsOrders**](OptionsApi.md#listOptionsOrders) | **GET** /options/orders | List options orders
[**createOptionsOrder**](OptionsApi.md#createOptionsOrder) | **POST** /options/orders | Create an options order
[**cancelOptionsOrders**](OptionsApi.md#cancelOptionsOrders) | **DELETE** /options/orders | Cancel all &#x60;open&#x60; orders matched
[**getOptionsOrder**](OptionsApi.md#getOptionsOrder) | **GET** /options/orders/{order_id} | Get a single order
[**cancelOptionsOrder**](OptionsApi.md#cancelOptionsOrder) | **DELETE** /options/orders/{order_id} | Cancel a single order
[**countdownCancelAllOptions**](OptionsApi.md#countdownCancelAllOptions) | **POST** /options/countdown_cancel_all | Countdown cancel orders
[**listMyOptionsTrades**](OptionsApi.md#listMyOptionsTrades) | **GET** /options/my_trades | List personal trading history
[**getOptionsMMP**](OptionsApi.md#getOptionsMMP) | **GET** /options/mmp | MMP Query
[**setOptionsMMP**](OptionsApi.md#setOptionsMMP) | **POST** /options/mmp | MMP Settings
[**resetOptionsMMP**](OptionsApi.md#resetOptionsMMP) | **POST** /options/mmp/reset | MMP Reset


## listOptionsUnderlyings

> \GateApi\Model\OptionsUnderlying[] listOptionsUnderlyings()

List all underlyings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listOptionsUnderlyings();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsUnderlyings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\OptionsUnderlying[]**](../Model/OptionsUnderlying.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsExpirations

> int[] listOptionsExpirations($underlying)

List all expiration times

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)

try {
    $result = $apiInstance->listOptionsExpirations($underlying);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsExpirations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsContracts

> \GateApi\Model\OptionsContract[] listOptionsContracts($underlying, $expiration)

List all the contracts with specified underlying and expiration time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$associate_array['expiration'] = 1636588800; // int | Unix timestamp of the expiration time

try {
    $result = $apiInstance->listOptionsContracts($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **expiration** | **int**| Unix timestamp of the expiration time | [optional]

### Return type

[**\GateApi\Model\OptionsContract[]**](../Model/OptionsContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOptionsContract

> \GateApi\Model\OptionsContract getOptionsContract($contract)

Query specified contract detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract = 'BTC_USDT-20211130-65000-C'; // string | 

try {
    $result = $apiInstance->getOptionsContract($contract);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**|  |

### Return type

[**\GateApi\Model\OptionsContract**](../Model/OptionsContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsSettlements

> \GateApi\Model\OptionsSettlement[] listOptionsSettlements($underlying, $limit, $offset, $from, $to)

List settlement history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listOptionsSettlements($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsSettlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

### Return type

[**\GateApi\Model\OptionsSettlement[]**](../Model/OptionsSettlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOptionsSettlement

> \GateApi\Model\OptionsSettlement getOptionsSettlement($contract, $underlying, $at)

Get specified contract's settlement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract = 'BTC_USDT-20211130-65000-C'; // string | 
$underlying = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$at = 56; // int | 

try {
    $result = $apiInstance->getOptionsSettlement($contract, $underlying, $at);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsSettlement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**|  |
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **at** | **int**|  |

### Return type

[**\GateApi\Model\OptionsSettlement**](../Model/OptionsSettlement.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMyOptionsSettlements

> \GateApi\Model\OptionsMySettlements[] listMyOptionsSettlements($underlying, $contract, $limit, $offset, $from, $to)

List my options settlements

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listMyOptionsSettlements($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listMyOptionsSettlements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **contract** | **string**| Options contract name | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

### Return type

[**\GateApi\Model\OptionsMySettlements[]**](../Model/OptionsMySettlements.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsOrderBook

> \GateApi\Model\FuturesOrderBook listOptionsOrderBook($contract, $interval, $limit, $with_id)

Options order book

Bids will be sorted by price from high to low, while asks sorted reversely

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$associate_array['interval'] = '0'; // string | Order depth. 0 means no aggregation is applied. default to 0
$associate_array['limit'] = 10; // int | Maximum number of order depth data in asks or bids
$associate_array['with_id'] = false; // bool | Whether the order book update ID will be returned. This ID increases by 1 on every order book update

try {
    $result = $apiInstance->listOptionsOrderBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Options contract name |
 **interval** | **string**| Order depth. 0 means no aggregation is applied. default to 0 | [optional] [default to &#39;0&#39;]
 **limit** | **int**| Maximum number of order depth data in asks or bids | [optional] [default to 10]
 **with_id** | **bool**| Whether the order book update ID will be returned. This ID increases by 1 on every order book update | [optional] [default to false]

### Return type

[**\GateApi\Model\FuturesOrderBook**](../Model/FuturesOrderBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsTickers

> \GateApi\Model\OptionsTicker[] listOptionsTickers($underlying)

List tickers of options contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)

try {
    $result = $apiInstance->listOptionsTickers($underlying);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |

### Return type

[**\GateApi\Model\OptionsTicker[]**](../Model/OptionsTicker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsUnderlyingTickers

> \GateApi\Model\OptionsUnderlyingTicker listOptionsUnderlyingTickers($underlying)

Get underlying ticker

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'BTC_USDT'; // string | Underlying

try {
    $result = $apiInstance->listOptionsUnderlyingTickers($underlying);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsUnderlyingTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying |

### Return type

[**\GateApi\Model\OptionsUnderlyingTicker**](../Model/OptionsUnderlyingTicker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsCandlesticks

> \GateApi\Model\OptionsCandlestick[] listOptionsCandlesticks($contract, $limit, $from, $to, $interval)

Get options candlesticks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp
$associate_array['interval'] = '5m'; // string | Interval time between data points

try {
    $result = $apiInstance->listOptionsCandlesticks($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Options contract name |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **interval** | **string**| Interval time between data points | [optional] [default to &#39;5m&#39;]

### Return type

[**\GateApi\Model\OptionsCandlestick[]**](../Model/OptionsCandlestick.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsUnderlyingCandlesticks

> \GateApi\Model\FuturesCandlestick[] listOptionsUnderlyingCandlesticks($underlying, $limit, $from, $to, $interval)

Mark price candlesticks of an underlying

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp
$associate_array['interval'] = '5m'; // string | Interval time between data points

try {
    $result = $apiInstance->listOptionsUnderlyingCandlesticks($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsUnderlyingCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **interval** | **string**| Interval time between data points | [optional] [default to &#39;5m&#39;]

### Return type

[**\GateApi\Model\FuturesCandlestick[]**](../Model/FuturesCandlestick.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsTrades

> \GateApi\Model\FuturesTrade[] listOptionsTrades($contract, $type, $limit, $offset, $from, $to)

Options trade history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$associate_array['type'] = '1546935600'; // string | `C` is call, while `P` is put
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listOptionsTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Options contract name | [optional]
 **type** | **string**| &#x60;C&#x60; is call, while &#x60;P&#x60; is put | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

### Return type

[**\GateApi\Model\FuturesTrade[]**](../Model/FuturesTrade.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsAccount

> \GateApi\Model\OptionsAccount listOptionsAccount()

List options account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listOptionsAccount();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\OptionsAccount**](../Model/OptionsAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsAccountBook

> \GateApi\Model\OptionsAccountBook[] listOptionsAccountBook($limit, $offset, $from, $to, $type)

List account changing history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp
$associate_array['type'] = 'dnw'; // string | Changing Type: - dnw: Deposit & Withdraw - prem: Trading premium - fee: Trading fee - refr: Referrer rebate - set: settlement PNL

try {
    $result = $apiInstance->listOptionsAccountBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **type** | **string**| Changing Type: - dnw: Deposit &amp; Withdraw - prem: Trading premium - fee: Trading fee - refr: Referrer rebate - set: settlement PNL | [optional]

### Return type

[**\GateApi\Model\OptionsAccountBook[]**](../Model/OptionsAccountBook.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsPositions

> \GateApi\Model\OptionsPosition[] listOptionsPositions($underlying)

List user's positions of specified underlying

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying

try {
    $result = $apiInstance->listOptionsPositions($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying | [optional]

### Return type

[**\GateApi\Model\OptionsPosition[]**](../Model/OptionsPosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOptionsPosition

> \GateApi\Model\OptionsPosition getOptionsPosition($contract)

Get specified contract position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract = 'BTC_USDT-20211130-65000-C'; // string | 

try {
    $result = $apiInstance->getOptionsPosition($contract);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**|  |

### Return type

[**\GateApi\Model\OptionsPosition**](../Model/OptionsPosition.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsPositionClose

> \GateApi\Model\OptionsPositionClose[] listOptionsPositionClose($underlying, $contract)

List user's liquidation history of specified underlying

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name

try {
    $result = $apiInstance->listOptionsPositionClose($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsPositionClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **contract** | **string**| Options contract name | [optional]

### Return type

[**\GateApi\Model\OptionsPositionClose[]**](../Model/OptionsPositionClose.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listOptionsOrders

> \GateApi\Model\OptionsOrder[] listOptionsOrders($status, $contract, $underlying, $limit, $offset, $from, $to)

List options orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['status'] = 'open'; // string | Only list the orders with this status
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listOptionsOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listOptionsOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Only list the orders with this status |
 **contract** | **string**| Options contract name | [optional]
 **underlying** | **string**| Underlying | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

### Return type

[**\GateApi\Model\OptionsOrder[]**](../Model/OptionsOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createOptionsOrder

> \GateApi\Model\OptionsOrder createOptionsOrder($options_order)

Create an options order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options_order = new \GateApi\Model\OptionsOrder(); // \GateApi\Model\OptionsOrder | 

try {
    $result = $apiInstance->createOptionsOrder($options_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->createOptionsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options_order** | [**\GateApi\Model\OptionsOrder**](../Model/OptionsOrder.md)|  |

### Return type

[**\GateApi\Model\OptionsOrder**](../Model/OptionsOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelOptionsOrders

> \GateApi\Model\OptionsOrder[] cancelOptionsOrders($contract, $underlying, $side)

Cancel all `open` orders matched

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$underlying = 'BTC_USDT'; // string | Underlying
$side = 'ask'; // string | All bids or asks. Both included if not specified

try {
    $result = $apiInstance->cancelOptionsOrders($contract, $underlying, $side);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->cancelOptionsOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contract** | **string**| Options contract name | [optional]
 **underlying** | **string**| Underlying | [optional]
 **side** | **string**| All bids or asks. Both included if not specified | [optional]

### Return type

[**\GateApi\Model\OptionsOrder[]**](../Model/OptionsOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOptionsOrder

> \GateApi\Model\OptionsOrder getOptionsOrder($order_id)

Get a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 12345; // int | Order ID returned on successful order creation

try {
    $result = $apiInstance->getOptionsOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID returned on successful order creation |

### Return type

[**\GateApi\Model\OptionsOrder**](../Model/OptionsOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelOptionsOrder

> \GateApi\Model\OptionsOrder cancelOptionsOrder($order_id)

Cancel a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 12345; // int | Order ID returned on successful order creation

try {
    $result = $apiInstance->cancelOptionsOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->cancelOptionsOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Order ID returned on successful order creation |

### Return type

[**\GateApi\Model\OptionsOrder**](../Model/OptionsOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## countdownCancelAllOptions

> \GateApi\Model\TriggerTime countdownCancelAllOptions($countdown_cancel_all_options_task)

Countdown cancel orders

Option order heartbeat detection, when the `timeout` time set by the user is reached, if the existing countdown is not canceled or a new countdown is set, the related `option pending order` will be automatically canceled.  This interface can be called repeatedly to set a new countdown or cancel the countdown.  Usage example: Repeat this interface at intervals of 30 seconds, with each countdown `timeout` set to 30 (seconds).  If this interface is not called again within 30 seconds, all pending orders on the `underlying` `contract` you specified will be automatically cancelled. If `underlying` `contract` is not specified, all pending orders of the user will be automatically cancelled  If `timeout` is set to 0 within 30 seconds, the countdown timer will expire and the automatic order cancellation function will be cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countdown_cancel_all_options_task = new \GateApi\Model\CountdownCancelAllOptionsTask(); // \GateApi\Model\CountdownCancelAllOptionsTask | 

try {
    $result = $apiInstance->countdownCancelAllOptions($countdown_cancel_all_options_task);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->countdownCancelAllOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countdown_cancel_all_options_task** | [**\GateApi\Model\CountdownCancelAllOptionsTask**](../Model/CountdownCancelAllOptionsTask.md)|  |

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


## listMyOptionsTrades

> \GateApi\Model\OptionsMyTrade[] listMyOptionsTrades($underlying, $contract, $limit, $offset, $from, $to)

List personal trading history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying (Obtained by listing underlying endpoint)
$associate_array['contract'] = 'BTC_USDT-20210916-5000-C'; // string | Options contract name
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listMyOptionsTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->listMyOptionsTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying (Obtained by listing underlying endpoint) |
 **contract** | **string**| Options contract name | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

### Return type

[**\GateApi\Model\OptionsMyTrade[]**](../Model/OptionsMyTrade.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getOptionsMMP

> \GateApi\Model\OptionsMMP[] getOptionsMMP($underlying)

MMP Query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['underlying'] = 'BTC_USDT'; // string | Underlying

try {
    $result = $apiInstance->getOptionsMMP($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptionsMMP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **underlying** | **string**| Underlying | [optional]

### Return type

[**\GateApi\Model\OptionsMMP[]**](../Model/OptionsMMP.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setOptionsMMP

> \GateApi\Model\OptionsMMP setOptionsMMP($options_mmp)

MMP Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options_mmp = new \GateApi\Model\OptionsMMP(); // \GateApi\Model\OptionsMMP | 

try {
    $result = $apiInstance->setOptionsMMP($options_mmp);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->setOptionsMMP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options_mmp** | [**\GateApi\Model\OptionsMMP**](../Model/OptionsMMP.md)|  |

### Return type

[**\GateApi\Model\OptionsMMP**](../Model/OptionsMMP.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resetOptionsMMP

> \GateApi\Model\OptionsMMP resetOptionsMMP($options_mmp_reset)

MMP Reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options_mmp_reset = new \GateApi\Model\OptionsMMPReset(); // \GateApi\Model\OptionsMMPReset | 

try {
    $result = $apiInstance->resetOptionsMMP($options_mmp_reset);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->resetOptionsMMP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options_mmp_reset** | [**\GateApi\Model\OptionsMMPReset**](../Model/OptionsMMPReset.md)|  |

### Return type

[**\GateApi\Model\OptionsMMP**](../Model/OptionsMMP.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

