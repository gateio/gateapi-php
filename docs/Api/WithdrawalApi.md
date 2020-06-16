# GateApi\WithdrawalApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**withdraw**](WithdrawalApi.md#withdraw) | **POST** /withdrawals | Withdraw


# **withdraw**
> \GateApi\Model\LedgerRecord withdraw($ledger_record)

Withdraw

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\WithdrawalApi(null, $config)
$ledger_record = new \GateApi\Model\LedgerRecord(); // \GateApi\Model\LedgerRecord | 

try {
    $result = $apiInstance->withdraw($ledger_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WithdrawalApi->withdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ledger_record** | [**\GateApi\Model\LedgerRecord**](../Model/LedgerRecord.md)|  |

### Return type

[**\GateApi\Model\LedgerRecord**](../Model/LedgerRecord.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

