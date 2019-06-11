# GateApi\WalletApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**transfer**](WalletApi.md#transfer) | **POST** /wallet/transfers | Transfer between accounts


# **transfer**
> transfer($transfer)

Transfer between accounts

Transfer between different accounts. Currently support transfers between the following:  1. spot - margin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\WalletApi(null, $config)
$transfer = new \GateApi\Model\Transfer(); // \GateApi\Model\Transfer | 

try {
    $apiInstance->transfer($transfer);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transfer** | [**\GateApi\Model\Transfer**](../Model/Transfer.md)|  |

### Return type

void (empty response body)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

