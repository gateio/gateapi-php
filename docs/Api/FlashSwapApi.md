# GateApi\FlashSwapApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFlashSwapCurrencyPair**](FlashSwapApi.md#listFlashSwapCurrencyPair) | **GET** /flash_swap/currency_pairs | List All Supported Currency Pairs In Flash Swap
[**listFlashSwapOrders**](FlashSwapApi.md#listFlashSwapOrders) | **GET** /flash_swap/orders | List all flash swap orders
[**createFlashSwapOrder**](FlashSwapApi.md#createFlashSwapOrder) | **POST** /flash_swap/orders | Create a flash swap order
[**getFlashSwapOrder**](FlashSwapApi.md#getFlashSwapOrder) | **GET** /flash_swap/orders/{order_id} | Get a single flash swap order&#39;s detail
[**previewFlashSwapOrder**](FlashSwapApi.md#previewFlashSwapOrder) | **POST** /flash_swap/orders/preview | Initiate a flash swap order preview


## listFlashSwapCurrencyPair

> \GateApi\Model\FlashSwapCurrencyPair[] listFlashSwapCurrencyPair($currency, $page, $limit)

List All Supported Currency Pairs In Flash Swap

`BTC_GT` represents selling BTC and buying GT. The limits for each currency may vary across different currency pairs.  It is not necessary that two currencies that can be swapped instantaneously can be exchanged with each other. For example, it is possible to sell BTC and buy GT, but it does not necessarily mean that GT can be sold to buy BTC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FlashSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['currency'] = 'BTC'; // string | Retrieve data of the specified currency
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 1000; // int | Maximum response items.  Default: 100, minimum: 1, Maximum: 1000

try {
    $result = $apiInstance->listFlashSwapCurrencyPair($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FlashSwapApi->listFlashSwapCurrencyPair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieve data of the specified currency | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum response items.  Default: 100, minimum: 1, Maximum: 1000 | [optional] [default to 1000]

### Return type

[**\GateApi\Model\FlashSwapCurrencyPair[]**](../Model/FlashSwapCurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFlashSwapOrders

> \GateApi\Model\FlashSwapOrder[] listFlashSwapOrders($status, $sell_currency, $buy_currency, $reverse, $limit, $page)

List all flash swap orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FlashSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['status'] = 1; // int | Flash swap order status  `1` - success `2` - failure
$associate_array['sell_currency'] = 'BTC'; // string | Currency to sell which can be retrieved from supported currency list API `GET /flash_swap/currencies`
$associate_array['buy_currency'] = 'BTC'; // string | Currency to buy which can be retrieved from supported currency list API `GET /flash_swap/currencies`
$associate_array['reverse'] = true; // bool | If results are sorted by id in reverse order. Default to `true`  - `true`: sort by id in descending order(recent first) - `false`: sort by id in ascending order(oldest first)
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listFlashSwapOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FlashSwapApi->listFlashSwapOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **int**| Flash swap order status  &#x60;1&#x60; - success &#x60;2&#x60; - failure | [optional]
 **sell_currency** | **string**| Currency to sell which can be retrieved from supported currency list API &#x60;GET /flash_swap/currencies&#x60; | [optional]
 **buy_currency** | **string**| Currency to buy which can be retrieved from supported currency list API &#x60;GET /flash_swap/currencies&#x60; | [optional]
 **reverse** | **bool**| If results are sorted by id in reverse order. Default to &#x60;true&#x60;  - &#x60;true&#x60;: sort by id in descending order(recent first) - &#x60;false&#x60;: sort by id in ascending order(oldest first) | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\FlashSwapOrder[]**](../Model/FlashSwapOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createFlashSwapOrder

> \GateApi\Model\FlashSwapOrder createFlashSwapOrder($flash_swap_order_request)

Create a flash swap order

Initiate a flash swap preview in advance because order creation requires a preview result

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FlashSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flash_swap_order_request = new \GateApi\Model\FlashSwapOrderRequest(); // \GateApi\Model\FlashSwapOrderRequest | 

try {
    $result = $apiInstance->createFlashSwapOrder($flash_swap_order_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FlashSwapApi->createFlashSwapOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flash_swap_order_request** | [**\GateApi\Model\FlashSwapOrderRequest**](../Model/FlashSwapOrderRequest.md)|  |

### Return type

[**\GateApi\Model\FlashSwapOrder**](../Model/FlashSwapOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFlashSwapOrder

> \GateApi\Model\FlashSwapOrder getFlashSwapOrder($order_id)

Get a single flash swap order's detail

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FlashSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 1; // int | Flash swap order ID

try {
    $result = $apiInstance->getFlashSwapOrder($order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FlashSwapApi->getFlashSwapOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| Flash swap order ID |

### Return type

[**\GateApi\Model\FlashSwapOrder**](../Model/FlashSwapOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## previewFlashSwapOrder

> \GateApi\Model\FlashSwapOrderPreview previewFlashSwapOrder($flash_swap_preview_request)

Initiate a flash swap order preview

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FlashSwapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flash_swap_preview_request = new \GateApi\Model\FlashSwapPreviewRequest(); // \GateApi\Model\FlashSwapPreviewRequest | 

try {
    $result = $apiInstance->previewFlashSwapOrder($flash_swap_preview_request);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FlashSwapApi->previewFlashSwapOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flash_swap_preview_request** | [**\GateApi\Model\FlashSwapPreviewRequest**](../Model/FlashSwapPreviewRequest.md)|  |

### Return type

[**\GateApi\Model\FlashSwapOrderPreview**](../Model/FlashSwapOrderPreview.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

