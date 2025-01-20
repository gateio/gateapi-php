# GateApi\RebateApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**agencyTransactionHistory**](RebateApi.md#agencyTransactionHistory) | **GET** /rebate/agency/transaction_history | The agency obtains the transaction history of the recommended user
[**agencyCommissionsHistory**](RebateApi.md#agencyCommissionsHistory) | **GET** /rebate/agency/commission_history | The agency obtains the commission history of the recommended user
[**partnerTransactionHistory**](RebateApi.md#partnerTransactionHistory) | **GET** /rebate/partner/transaction_history | Partner obtains transaction records of recommended users
[**partnerCommissionsHistory**](RebateApi.md#partnerCommissionsHistory) | **GET** /rebate/partner/commission_history | Partner obtains commission records of recommended users
[**partnerSubList**](RebateApi.md#partnerSubList) | **GET** /rebate/partner/sub_list | Partner subordinate list
[**rebateBrokerCommissionHistory**](RebateApi.md#rebateBrokerCommissionHistory) | **GET** /rebate/broker/commission_history | The broker obtains the user&#39;s commission rebate records
[**rebateBrokerTransactionHistory**](RebateApi.md#rebateBrokerTransactionHistory) | **GET** /rebate/broker/transaction_history | The broker obtains the user&#39;s trading history
[**rebateUserInfo**](RebateApi.md#rebateUserInfo) | **GET** /rebate/user/info | User retrieves rebate information
[**userSubRelation**](RebateApi.md#userSubRelation) | **GET** /rebate/user/sub_relation | User-subordinate relationship


## agencyTransactionHistory

> \GateApi\Model\AgencyTransactionHistory[] agencyTransactionHistory($currency_pair, $user_id, $from, $to, $limit, $offset)

The agency obtains the transaction history of the recommended user

Record time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify the currency pair, if not specified, return all currency pairs
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Time range beginning, default to 7 days before current time
$associate_array['to'] = 1602123600; // int | Time range ending, default to current time
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->agencyTransactionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->agencyTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Specify the currency pair, if not specified, return all currency pairs | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\AgencyTransactionHistory[]**](../Model/AgencyTransactionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## agencyCommissionsHistory

> \GateApi\Model\AgencyCommissionHistory[] agencyCommissionsHistory($currency, $user_id, $from, $to, $limit, $offset)

The agency obtains the commission history of the recommended user

Record time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Filter by currency. Return all currency records if not specified
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Time range beginning, default to 7 days before current time
$associate_array['to'] = 1602123600; // int | Time range ending, default to current time
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->agencyCommissionsHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->agencyCommissionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Filter by currency. Return all currency records if not specified | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\AgencyCommissionHistory[]**](../Model/AgencyCommissionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## partnerTransactionHistory

> \GateApi\Model\PartnerTransactionHistory partnerTransactionHistory($currency_pair, $user_id, $from, $to, $limit, $offset)

Partner obtains transaction records of recommended users

Record time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency_pair'] = 'BTC_USDT'; // string | Specify the currency pair, if not specified, return all currency pairs
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Time range beginning, default to 7 days before current time
$associate_array['to'] = 1602123600; // int | Time range ending, default to current time
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->partnerTransactionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->partnerTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Specify the currency pair, if not specified, return all currency pairs | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerTransactionHistory**](../Model/PartnerTransactionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## partnerCommissionsHistory

> \GateApi\Model\PartnerCommissionHistory partnerCommissionsHistory($currency, $user_id, $from, $to, $limit, $offset)

Partner obtains commission records of recommended users

Record time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['currency'] = 'BTC'; // string | Filter by currency. Return all currency records if not specified
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1602120000; // int | Time range beginning, default to 7 days before current time
$associate_array['to'] = 1602123600; // int | Time range ending, default to current time
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->partnerCommissionsHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->partnerCommissionsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Filter by currency. Return all currency records if not specified | [optional]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| Time range beginning, default to 7 days before current time | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerCommissionHistory**](../Model/PartnerCommissionHistory.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## partnerSubList

> \GateApi\Model\PartnerSubList partnerSubList($user_id, $limit, $offset)

Partner subordinate list

Including sub-agents, direct customers, indirect customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->partnerSubList($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->partnerSubList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\PartnerSubList**](../Model/PartnerSubList.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebateBrokerCommissionHistory

> \GateApi\Model\BrokerCommission[] rebateBrokerCommissionHistory($limit, $offset, $user_id, $from, $to)

The broker obtains the user's commission rebate records

Record time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1711929600; // int | The start time of the query record. If not specified, the default is to push forward 30 days from the current time.
$associate_array['to'] = 1714521600; // int | Time range ending, default to current time

try {
    $result = $apiInstance->rebateBrokerCommissionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->rebateBrokerCommissionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| The start time of the query record. If not specified, the default is to push forward 30 days from the current time. | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]

### Return type

[**\GateApi\Model\BrokerCommission[]**](../Model/BrokerCommission.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebateBrokerTransactionHistory

> \GateApi\Model\BrokerTransaction[] rebateBrokerTransactionHistory($limit, $offset, $user_id, $from, $to)

The broker obtains the user's trading history

Record time range cannot exceed 30 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['user_id'] = 10003; // int | User ID. If not specified, all user records will be returned
$associate_array['from'] = 1711929600; // int | The start time of the query record. If not specified, the default is to push forward 30 days from the current time.
$associate_array['to'] = 1714521600; // int | Time range ending, default to current time

try {
    $result = $apiInstance->rebateBrokerTransactionHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->rebateBrokerTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **user_id** | **int**| User ID. If not specified, all user records will be returned | [optional]
 **from** | **int**| The start time of the query record. If not specified, the default is to push forward 30 days from the current time. | [optional]
 **to** | **int**| Time range ending, default to current time | [optional]

### Return type

[**\GateApi\Model\BrokerTransaction[]**](../Model/BrokerTransaction.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## rebateUserInfo

> \GateApi\Model\RebateUserInfo[] rebateUserInfo()

User retrieves rebate information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->rebateUserInfo();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->rebateUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\RebateUserInfo[]**](../Model/RebateUserInfo.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userSubRelation

> \GateApi\Model\UserSubRelation userSubRelation($user_id_list)

User-subordinate relationship

Query whether the specified user is in the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\RebateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id_list = '1, 2, 3'; // string | Query the user's ID list, split by,, if there are more than 100, take 100

try {
    $result = $apiInstance->userSubRelation($user_id_list);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling RebateApi->userSubRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id_list** | **string**| Query the user&#39;s ID list, split by,, if there are more than 100, take 100 |

### Return type

[**\GateApi\Model\UserSubRelation**](../Model/UserSubRelation.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

