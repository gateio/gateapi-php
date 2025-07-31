# GateApi\WalletApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listCurrencyChains**](WalletApi.md#listCurrencyChains) | **GET** /wallet/currency_chains | Query chains supported for specified currency
[**getDepositAddress**](WalletApi.md#getDepositAddress) | **GET** /wallet/deposit_address | Generate currency deposit address
[**listWithdrawals**](WalletApi.md#listWithdrawals) | **GET** /wallet/withdrawals | Get withdrawal records
[**listDeposits**](WalletApi.md#listDeposits) | **GET** /wallet/deposits | Get deposit records
[**transfer**](WalletApi.md#transfer) | **POST** /wallet/transfers | Transfer between trading accounts
[**listSubAccountTransfers**](WalletApi.md#listSubAccountTransfers) | **GET** /wallet/sub_account_transfers | Get transfer records between main and sub accounts
[**transferWithSubAccount**](WalletApi.md#transferWithSubAccount) | **POST** /wallet/sub_account_transfers | Transfer between main and sub accounts
[**subAccountToSubAccount**](WalletApi.md#subAccountToSubAccount) | **POST** /wallet/sub_account_to_sub_account | Transfer between sub-accounts
[**getTransferOrderStatus**](WalletApi.md#getTransferOrderStatus) | **GET** /wallet/order_status | Transfer status query
[**listWithdrawStatus**](WalletApi.md#listWithdrawStatus) | **GET** /wallet/withdraw_status | Query withdrawal status
[**listSubAccountBalances**](WalletApi.md#listSubAccountBalances) | **GET** /wallet/sub_account_balances | Query sub-account balance information
[**listSubAccountMarginBalances**](WalletApi.md#listSubAccountMarginBalances) | **GET** /wallet/sub_account_margin_balances | Query sub-account isolated margin account balance information
[**listSubAccountFuturesBalances**](WalletApi.md#listSubAccountFuturesBalances) | **GET** /wallet/sub_account_futures_balances | Query sub-account perpetual futures account balance information
[**listSubAccountCrossMarginBalances**](WalletApi.md#listSubAccountCrossMarginBalances) | **GET** /wallet/sub_account_cross_margin_balances | Query sub-account cross margin account balance information
[**listSavedAddress**](WalletApi.md#listSavedAddress) | **GET** /wallet/saved_address | Query withdrawal address whitelist
[**getTradeFee**](WalletApi.md#getTradeFee) | **GET** /wallet/fee | Query personal trading fees
[**getTotalBalance**](WalletApi.md#getTotalBalance) | **GET** /wallet/total_balance | Query personal account totals
[**listSmallBalance**](WalletApi.md#listSmallBalance) | **GET** /wallet/small_balance | Get list of convertible small balance currencies
[**convertSmallBalance**](WalletApi.md#convertSmallBalance) | **POST** /wallet/small_balance | Convert small balance currency
[**listSmallBalanceHistory**](WalletApi.md#listSmallBalanceHistory) | **GET** /wallet/small_balance_history | Get convertible small balance currency history
[**listPushOrders**](WalletApi.md#listPushOrders) | **GET** /wallet/push | Get UID transfer history


## listCurrencyChains

> \GateApi\Model\CurrencyChain[] listCurrencyChains($currency)

Query chains supported for specified currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currency = 'GT'; // string | Currency name

try {
    $result = $apiInstance->listCurrencyChains($currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listCurrencyChains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency name |

### Return type

[**\GateApi\Model\CurrencyChain[]**](../Model/CurrencyChain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDepositAddress

> \GateApi\Model\DepositAddress getDepositAddress($currency)

Generate currency deposit address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = 'USDT'; // string | Currency name

try {
    $result = $apiInstance->getDepositAddress($currency);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
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

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWithdrawals

> \GateApi\Model\WithdrawalRecord[] listWithdrawals($currency, $withdraw_id, $asset_class, $withdraw_order_id, $from, $to, $limit, $offset)

Get withdrawal records

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Specify the currency. If not specified, returns all currencies
$associate_array['withdraw_id'] = 'withdraw_id_example'; // string | Withdrawal record ID starts with 'w', such as: w1879219868. When withdraw_id is not empty, only this specific withdrawal record will be queried, and time-based querying will be disabled
$associate_array['asset_class'] = 'asset_class_example'; // string | Currency type of withdrawal record, empty by default. Supports querying withdrawal records in main zone and innovation zone on demand. Value range: SPOT, PILOT  SPOT: Main Zone PILOT: Innovation Zone
$associate_array['withdraw_order_id'] = 'withdraw_order_id_example'; // string | User-defined order number for withdrawal. Default is empty. When not empty, the specified user-defined order number record will be queried
$associate_array['from'] = 1602120000; // int | Start time for querying records, defaults to 7 days before current time if not specified
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listWithdrawals($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listWithdrawals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Specify the currency. If not specified, returns all currencies | [optional]
 **withdraw_id** | **string**| Withdrawal record ID starts with &#39;w&#39;, such as: w1879219868. When withdraw_id is not empty, only this specific withdrawal record will be queried, and time-based querying will be disabled | [optional]
 **asset_class** | **string**| Currency type of withdrawal record, empty by default. Supports querying withdrawal records in main zone and innovation zone on demand. Value range: SPOT, PILOT  SPOT: Main Zone PILOT: Innovation Zone | [optional]
 **withdraw_order_id** | **string**| User-defined order number for withdrawal. Default is empty. When not empty, the specified user-defined order number record will be queried | [optional]
 **from** | **int**| Start time for querying records, defaults to 7 days before current time if not specified | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\WithdrawalRecord[]**](../Model/WithdrawalRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDeposits

> \GateApi\Model\DepositRecord[] listDeposits($currency, $from, $to, $limit, $offset)

Get deposit records

Record query time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Specify the currency. If not specified, returns all currencies
$associate_array['from'] = 1602120000; // int | Start time for querying records, defaults to 7 days before current time if not specified
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of entries returned in the list, limited to 500 transactions
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listDeposits($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listDeposits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Specify the currency. If not specified, returns all currencies | [optional]
 **from** | **int**| Start time for querying records, defaults to 7 days before current time if not specified | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of entries returned in the list, limited to 500 transactions | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\DepositRecord[]**](../Model/DepositRecord.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transfer

> \GateApi\Model\TransactionID transfer($transfer)

Transfer between trading accounts

Balance transfers between personal trading accounts. Currently supports the following transfer operations:  1. Spot account - Margin account 2. Spot account - Perpetual futures account 3. Spot account - Delivery futures account 4. Spot account - Options account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transfer = new \GateApi\Model\Transfer(); // \GateApi\Model\Transfer | 

try {
    $result = $apiInstance->transfer($transfer);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
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

[**\GateApi\Model\TransactionID**](../Model/TransactionID.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubAccountTransfers

> \GateApi\Model\SubAccountTransferRecordItem[] listSubAccountTransfers($sub_uid, $from, $to, $limit, $offset)

Get transfer records between main and sub accounts

Record query time range cannot exceed 30 days  > Note: Only records after 2020-04-10 can be retrieved

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['sub_uid'] = '10003'; // string | Sub-account user ID, you can query multiple records separated by `,`. If not specified, it will return records of all sub-accounts
$associate_array['from'] = 1602120000; // int | Start time for querying records, defaults to 7 days before current time if not specified
$associate_array['to'] = 1602123600; // int | End timestamp for the query, defaults to current time if not specified
$associate_array['limit'] = 100; // int | Maximum number of records returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listSubAccountTransfers($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSubAccountTransfers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_uid** | **string**| Sub-account user ID, you can query multiple records separated by &#x60;,&#x60;. If not specified, it will return records of all sub-accounts | [optional]
 **from** | **int**| Start time for querying records, defaults to 7 days before current time if not specified | [optional]
 **to** | **int**| End timestamp for the query, defaults to current time if not specified | [optional]
 **limit** | **int**| Maximum number of records returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\SubAccountTransferRecordItem[]**](../Model/SubAccountTransferRecordItem.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## transferWithSubAccount

> \GateApi\Model\TransactionID transferWithSubAccount($sub_account_transfer)

Transfer between main and sub accounts

Supports transfers to/from sub-account's spot or futures accounts. Note that regardless of which sub-account is operated, only the main account's spot account is used

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account_transfer = new \GateApi\Model\SubAccountTransfer(); // \GateApi\Model\SubAccountTransfer | 

try {
    $result = $apiInstance->transferWithSubAccount($sub_account_transfer);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
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

[**\GateApi\Model\TransactionID**](../Model/TransactionID.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## subAccountToSubAccount

> \GateApi\Model\TransactionID subAccountToSubAccount($sub_account_to_sub_account)

Transfer between sub-accounts

Supports balance transfers between two sub-accounts under the same main account. You can use either the main account's API Key or the source sub-account's API Key to perform the operation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account_to_sub_account = new \GateApi\Model\SubAccountToSubAccount(); // \GateApi\Model\SubAccountToSubAccount | 

try {
    $result = $apiInstance->subAccountToSubAccount($sub_account_to_sub_account);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->subAccountToSubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account_to_sub_account** | [**\GateApi\Model\SubAccountToSubAccount**](../Model/SubAccountToSubAccount.md)|  |

### Return type

[**\GateApi\Model\TransactionID**](../Model/TransactionID.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTransferOrderStatus

> \GateApi\Model\TransferOrderStatus getTransferOrderStatus($client_order_id, $tx_id)

Transfer status query

Supports querying transfer status based on user-defined client_order_id or tx_id returned by the transfer interface

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['client_order_id'] = 'da3ce7a088c8b0372b741419c7829033'; // string | Customer-defined ID to prevent duplicate transfers. Can be a combination of letters (case-sensitive), numbers, hyphens '-', and underscores '_'. Can be pure letters or pure numbers with length between 1-64 characters
$associate_array['tx_id'] = '59636381286'; // string | Transfer operation number, cannot be empty at the same time as client_order_id

try {
    $result = $apiInstance->getTransferOrderStatus($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getTransferOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_order_id** | **string**| Customer-defined ID to prevent duplicate transfers. Can be a combination of letters (case-sensitive), numbers, hyphens &#39;-&#39;, and underscores &#39;_&#39;. Can be pure letters or pure numbers with length between 1-64 characters | [optional]
 **tx_id** | **string**| Transfer operation number, cannot be empty at the same time as client_order_id | [optional]

### Return type

[**\GateApi\Model\TransferOrderStatus**](../Model/TransferOrderStatus.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listWithdrawStatus

> \GateApi\Model\WithdrawStatus[] listWithdrawStatus($currency)

Query withdrawal status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Query by specified currency name

try {
    $result = $apiInstance->listWithdrawStatus($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listWithdrawStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Query by specified currency name | [optional]

### Return type

[**\GateApi\Model\WithdrawStatus[]**](../Model/WithdrawStatus.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubAccountBalances

> \GateApi\Model\SubAccountBalance[] listSubAccountBalances($sub_uid)

Query sub-account balance information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['sub_uid'] = '10003'; // string | Sub-account user ID, you can query multiple records separated by `,`. If not specified, it will return records of all sub-accounts

try {
    $result = $apiInstance->listSubAccountBalances($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSubAccountBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_uid** | **string**| Sub-account user ID, you can query multiple records separated by &#x60;,&#x60;. If not specified, it will return records of all sub-accounts | [optional]

### Return type

[**\GateApi\Model\SubAccountBalance[]**](../Model/SubAccountBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubAccountMarginBalances

> \GateApi\Model\SubAccountMarginBalance[] listSubAccountMarginBalances($sub_uid)

Query sub-account isolated margin account balance information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['sub_uid'] = '10003'; // string | Sub-account user ID, you can query multiple records separated by `,`. If not specified, it will return records of all sub-accounts

try {
    $result = $apiInstance->listSubAccountMarginBalances($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSubAccountMarginBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_uid** | **string**| Sub-account user ID, you can query multiple records separated by &#x60;,&#x60;. If not specified, it will return records of all sub-accounts | [optional]

### Return type

[**\GateApi\Model\SubAccountMarginBalance[]**](../Model/SubAccountMarginBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubAccountFuturesBalances

> \GateApi\Model\SubAccountFuturesBalance[] listSubAccountFuturesBalances($sub_uid, $settle)

Query sub-account perpetual futures account balance information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['sub_uid'] = '10003'; // string | Sub-account user ID, you can query multiple records separated by `,`. If not specified, it will return records of all sub-accounts
$associate_array['settle'] = 'usdt'; // string | Query balance of specified settlement currency

try {
    $result = $apiInstance->listSubAccountFuturesBalances($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSubAccountFuturesBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_uid** | **string**| Sub-account user ID, you can query multiple records separated by &#x60;,&#x60;. If not specified, it will return records of all sub-accounts | [optional]
 **settle** | **string**| Query balance of specified settlement currency | [optional]

### Return type

[**\GateApi\Model\SubAccountFuturesBalance[]**](../Model/SubAccountFuturesBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubAccountCrossMarginBalances

> \GateApi\Model\SubAccountCrossMarginBalance[] listSubAccountCrossMarginBalances($sub_uid)

Query sub-account cross margin account balance information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['sub_uid'] = '10003'; // string | Sub-account user ID, you can query multiple records separated by `,`. If not specified, it will return records of all sub-accounts

try {
    $result = $apiInstance->listSubAccountCrossMarginBalances($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSubAccountCrossMarginBalances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_uid** | **string**| Sub-account user ID, you can query multiple records separated by &#x60;,&#x60;. If not specified, it will return records of all sub-accounts | [optional]

### Return type

[**\GateApi\Model\SubAccountCrossMarginBalance[]**](../Model/SubAccountCrossMarginBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSavedAddress

> \GateApi\Model\SavedAddress[] listSavedAddress($currency, $chain, $limit, $page)

Query withdrawal address whitelist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'USDT'; // string | Currency
$associate_array['chain'] = ''; // string | Chain name
$associate_array['limit'] = '50'; // string | Maximum number returned, up to 100
$associate_array['page'] = 1; // int | Page number

try {
    $result = $apiInstance->listSavedAddress($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSavedAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency |
 **chain** | **string**| Chain name | [optional] [default to &#39;&#39;]
 **limit** | **string**| Maximum number returned, up to 100 | [optional] [default to &#39;50&#39;]
 **page** | **int**| Page number | [optional] [default to 1]

### Return type

[**\GateApi\Model\SavedAddress[]**](../Model/SavedAddress.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTradeFee

> \GateApi\Model\TradeFee getTradeFee($currency_pair, $settle)

Query personal trading fees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify currency pair to get more accurate fee settings.  This field is optional. Usually fee settings are the same for all currency pairs.
$associate_array['settle'] = 'BTC'; // string | Specify the settlement currency of the contract to get more accurate fee settings.  This field is optional. Generally, the fee settings for all settlement currencies are the same.

try {
    $result = $apiInstance->getTradeFee($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getTradeFee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Specify currency pair to get more accurate fee settings.  This field is optional. Usually fee settings are the same for all currency pairs. | [optional]
 **settle** | **string**| Specify the settlement currency of the contract to get more accurate fee settings.  This field is optional. Generally, the fee settings for all settlement currencies are the same. | [optional]

### Return type

[**\GateApi\Model\TradeFee**](../Model/TradeFee.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTotalBalance

> \GateApi\Model\TotalBalance getTotalBalance($currency)

Query personal account totals

This query endpoint returns the total *estimated value* of all currencies in each account converted to the input currency. Exchange rates and related account balance information may be cached for up to 1 minute. It is not recommended to use this interface data for real-time calculations.  For real-time calculations, query the corresponding balance interface based on account type, such as:  - `GET /spot/accounts` to query spot account - `GET /margin/accounts` to query margin account - `GET /futures/{settle}/accounts` to query futures account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'USDT'; // string | Target currency type for statistical conversion. Accepts BTC, CNY, USD, and USDT. USDT is the default value

try {
    $result = $apiInstance->getTotalBalance($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getTotalBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Target currency type for statistical conversion. Accepts BTC, CNY, USD, and USDT. USDT is the default value | [optional] [default to &#39;USDT&#39;]

### Return type

[**\GateApi\Model\TotalBalance**](../Model/TotalBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSmallBalance

> \GateApi\Model\SmallBalance[] listSmallBalance()

Get list of convertible small balance currencies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSmallBalance();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSmallBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\SmallBalance[]**](../Model/SmallBalance.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## convertSmallBalance

> convertSmallBalance($convert_small_balance)

Convert small balance currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$convert_small_balance = new \GateApi\Model\ConvertSmallBalance(); // \GateApi\Model\ConvertSmallBalance | 

try {
    $apiInstance->convertSmallBalance($convert_small_balance);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->convertSmallBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **convert_small_balance** | [**\GateApi\Model\ConvertSmallBalance**](../Model/ConvertSmallBalance.md)|  |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSmallBalanceHistory

> \GateApi\Model\SmallBalanceHistory[] listSmallBalanceHistory($currency, $page, $limit)

Get convertible small balance currency history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'currency_example'; // string | Currency to convert
$associate_array['page'] = 1; // int | Page number
$associate_array['limit'] = 100; // int | Maximum number of items returned. Default: 100, minimum: 1, maximum: 100

try {
    $result = $apiInstance->listSmallBalanceHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listSmallBalanceHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Currency to convert | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of items returned. Default: 100, minimum: 1, maximum: 100 | [optional] [default to 100]

### Return type

[**\GateApi\Model\SmallBalanceHistory[]**](../Model/SmallBalanceHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPushOrders

> \GateApi\Model\UidPushOrder[] listPushOrders($id, $from, $to, $limit, $offset, $transaction_type)

Get UID transfer history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = 56; // int | Order ID
$associate_array['from'] = 56; // int | Start time for querying records. If not specified, defaults to 7 days before the current time. Unix timestamp in seconds
$associate_array['to'] = 56; // int | End time for querying records. If not specified, defaults to the current time. Unix timestamp in seconds
$associate_array['limit'] = 100; // int | Maximum number of items returned in the list, default value is 100
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['transaction_type'] = 'withdraw'; // string | Order type returned in the list: `withdraw`, `deposit`. Default is `withdraw`.

try {
    $result = $apiInstance->listPushOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->listPushOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Order ID | [optional]
 **from** | **int**| Start time for querying records. If not specified, defaults to 7 days before the current time. Unix timestamp in seconds | [optional]
 **to** | **int**| End time for querying records. If not specified, defaults to the current time. Unix timestamp in seconds | [optional]
 **limit** | **int**| Maximum number of items returned in the list, default value is 100 | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **transaction_type** | **string**| Order type returned in the list: &#x60;withdraw&#x60;, &#x60;deposit&#x60;. Default is &#x60;withdraw&#x60;. | [optional] [default to &#39;withdraw&#39;]

### Return type

[**\GateApi\Model\UidPushOrder[]**](../Model/UidPushOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

