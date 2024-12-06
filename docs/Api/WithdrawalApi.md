# GateApi\WithdrawalApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**withdraw**](WithdrawalApi.md#withdraw) | **POST** /withdrawals | Withdraw
[**withdrawPushOrder**](WithdrawalApi.md#withdrawPushOrder) | **POST** /withdrawals/push | UID transfer
[**cancelWithdrawal**](WithdrawalApi.md#cancelWithdrawal) | **DELETE** /withdrawals/{withdrawal_id} | Cancel withdrawal with specified ID


## withdraw

> \GateApi\Model\LedgerRecord withdraw($ledger_record)

Withdraw

Withdrawals to Gate addresses do not incur transaction fees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WithdrawalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ledger_record = new \GateApi\Model\LedgerRecord(); // \GateApi\Model\LedgerRecord | 

try {
    $result = $apiInstance->withdraw($ledger_record);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
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

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## withdrawPushOrder

> \GateApi\Model\UidPushWithdrawalResp withdrawPushOrder($uid_push_withdrawal)

UID transfer

Transfers between main spot accounts are allowed; however, both parties cannot be sub-accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WithdrawalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid_push_withdrawal = new \GateApi\Model\UidPushWithdrawal(); // \GateApi\Model\UidPushWithdrawal | 

try {
    $result = $apiInstance->withdrawPushOrder($uid_push_withdrawal);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WithdrawalApi->withdrawPushOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uid_push_withdrawal** | [**\GateApi\Model\UidPushWithdrawal**](../Model/UidPushWithdrawal.md)|  |

### Return type

[**\GateApi\Model\UidPushWithdrawalResp**](../Model/UidPushWithdrawalResp.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelWithdrawal

> \GateApi\Model\LedgerRecord cancelWithdrawal($withdrawal_id)

Cancel withdrawal with specified ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WithdrawalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$withdrawal_id = '210496'; // string | 

try {
    $result = $apiInstance->cancelWithdrawal($withdrawal_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WithdrawalApi->cancelWithdrawal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **withdrawal_id** | **string**|  |

### Return type

[**\GateApi\Model\LedgerRecord**](../Model/LedgerRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

