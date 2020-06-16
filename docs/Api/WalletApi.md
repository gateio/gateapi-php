# GateApi\WalletApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDepositAddress**](WalletApi.md#getDepositAddress) | **GET** /wallet/deposit_address | Generate currency deposit address
[**listDeposits**](WalletApi.md#listDeposits) | **GET** /wallet/deposits | Retrieve deposit records. Time range cannot exceed 30 days
[**listWithdrawals**](WalletApi.md#listWithdrawals) | **GET** /wallet/withdrawals | Retrieve withdrawal records. Time range cannot exceed 30 days
[**transfer**](WalletApi.md#transfer) | **POST** /wallet/transfers | Transfer between accounts
[**transferWithSubAccount**](WalletApi.md#transferWithSubAccount) | **POST** /wallet/sub_account_transfers | Transfer between main and sub accounts


# **getDepositAddress**
> \GateApi\Model\DepositAddress getDepositAddress($currency)

Generate currency deposit address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\WalletApi(null, $config)
$currency = 'currency_example'; // string | Currency name

try {
    $result = $apiInstance->getDepositAddress($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getDepositAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency name |

### Return type

[**\GateApi\Model\DepositAddress**](../Model/DepositAddress.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDeposits**
> \GateApi\Model\LedgerRecord[] listDeposits($currency, $from, $to, $limit, $offset)

Retrieve deposit records. Time range cannot exceed 30 days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\WalletApi(null, $config)
$currency = 'BTC'; // string | Filter by currency. Return all currency records if not specified
$from = 56; // int | Time range beginning, default to 7 days before current time
$to = 56; // int | Time range ending, default to current time
$limit = 100; // int | Maximum number of record returned in one list
$offset = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listDeposits($currency, $from, $to, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listDeposits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Filter by currency. Return all currency records if not specified | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\LedgerRecord[]**](../Model/LedgerRecord.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listWithdrawals**
> \GateApi\Model\LedgerRecord[] listWithdrawals($currency, $from, $to, $limit, $offset)

Retrieve withdrawal records. Time range cannot exceed 30 days

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\WalletApi(null, $config)
$currency = 'BTC'; // string | Filter by currency. Return all currency records if not specified
$from = 56; // int | Time range beginning, default to 7 days before current time
$to = 56; // int | Time range ending, default to current time
$limit = 100; // int | Maximum number of record returned in one list
$offset = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listWithdrawals($currency, $from, $to, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listWithdrawals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Filter by currency. Return all currency records if not specified | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\LedgerRecord[]**](../Model/LedgerRecord.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transfer**
> transfer($transfer)

Transfer between accounts

Transfer between different accounts. Currently support transfers between the following:  1. spot - margin 2. spot - futures

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

# **transferWithSubAccount**
> transferWithSubAccount($sub_account_transfer)

Transfer between main and sub accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\WalletApi(null, $config)
$sub_account_transfer = new \GateApi\Model\SubAccountTransfer(); // \GateApi\Model\SubAccountTransfer | 

try {
    $apiInstance->transferWithSubAccount($sub_account_transfer);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->transferWithSubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_transfer** | [**\GateApi\Model\SubAccountTransfer**](../Model/SubAccountTransfer.md)|  |

### Return type

void (empty response body)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

