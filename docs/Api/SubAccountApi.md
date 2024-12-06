# GateApi\SubAccountApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listSubAccounts**](SubAccountApi.md#listSubAccounts) | **GET** /sub_accounts | List sub-accounts
[**createSubAccounts**](SubAccountApi.md#createSubAccounts) | **POST** /sub_accounts | Create a new sub-account
[**getSubAccount**](SubAccountApi.md#getSubAccount) | **GET** /sub_accounts/{user_id} | Get the sub-account
[**listSubAccountKeys**](SubAccountApi.md#listSubAccountKeys) | **GET** /sub_accounts/{user_id}/keys | List all API Key of the sub-account
[**createSubAccountKeys**](SubAccountApi.md#createSubAccountKeys) | **POST** /sub_accounts/{user_id}/keys | Create API Key of the sub-account
[**getSubAccountKey**](SubAccountApi.md#getSubAccountKey) | **GET** /sub_accounts/{user_id}/keys/{key} | Get the API Key of the sub-account
[**updateSubAccountKeys**](SubAccountApi.md#updateSubAccountKeys) | **PUT** /sub_accounts/{user_id}/keys/{key} | Update API key of the sub-account
[**deleteSubAccountKeys**](SubAccountApi.md#deleteSubAccountKeys) | **DELETE** /sub_accounts/{user_id}/keys/{key} | Delete API key of the sub-account
[**lockSubAccount**](SubAccountApi.md#lockSubAccount) | **POST** /sub_accounts/{user_id}/lock | Lock the sub-account
[**unlockSubAccount**](SubAccountApi.md#unlockSubAccount) | **POST** /sub_accounts/{user_id}/unlock | Unlock the sub-account
[**listUnifiedMode**](SubAccountApi.md#listUnifiedMode) | **GET** /sub_accounts/unified_mode | Get sub-account mode


## listSubAccounts

> \GateApi\Model\SubAccount[] listSubAccounts($type)

List sub-accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = '0'; // string | `0` to list all types of sub-accounts (currently supporting cross margin accounts and sub-accounts).  `1` to list sub-accounts only. If no parameter is passed, only sub-accounts will be listed by default.

try {
    $result = $apiInstance->listSubAccounts($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->listSubAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| &#x60;0&#x60; to list all types of sub-accounts (currently supporting cross margin accounts and sub-accounts).  &#x60;1&#x60; to list sub-accounts only. If no parameter is passed, only sub-accounts will be listed by default. | [optional]

### Return type

[**\GateApi\Model\SubAccount[]**](../Model/SubAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSubAccounts

> \GateApi\Model\SubAccount createSubAccounts($sub_account)

Create a new sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sub_account = new \GateApi\Model\SubAccount(); // \GateApi\Model\SubAccount | 

try {
    $result = $apiInstance->createSubAccounts($sub_account);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->createSubAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sub_account** | [**\GateApi\Model\SubAccount**](../Model/SubAccount.md)|  |

### Return type

[**\GateApi\Model\SubAccount**](../Model/SubAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSubAccount

> \GateApi\Model\SubAccount getSubAccount($user_id)

Get the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Sub-account user id

try {
    $result = $apiInstance->getSubAccount($user_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->getSubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Sub-account user id |

### Return type

[**\GateApi\Model\SubAccount**](../Model/SubAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listSubAccountKeys

> \GateApi\Model\SubAccountKey[] listSubAccountKeys($user_id)

List all API Key of the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Sub-account user id

try {
    $result = $apiInstance->listSubAccountKeys($user_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->listSubAccountKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Sub-account user id |

### Return type

[**\GateApi\Model\SubAccountKey[]**](../Model/SubAccountKey.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createSubAccountKeys

> \GateApi\Model\SubAccountKey[] createSubAccountKeys($user_id, $sub_account_key)

Create API Key of the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Sub-account user id
$sub_account_key = new \GateApi\Model\SubAccountKey(); // \GateApi\Model\SubAccountKey | 

try {
    $result = $apiInstance->createSubAccountKeys($user_id, $sub_account_key);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->createSubAccountKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Sub-account user id |
 **sub_account_key** | [**\GateApi\Model\SubAccountKey**](../Model/SubAccountKey.md)|  |

### Return type

[**\GateApi\Model\SubAccountKey[]**](../Model/SubAccountKey.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSubAccountKey

> \GateApi\Model\SubAccountKey getSubAccountKey($user_id, $key)

Get the API Key of the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Sub-account user id
$key = 'key_example'; // string | The API Key of the sub-account

try {
    $result = $apiInstance->getSubAccountKey($user_id, $key);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->getSubAccountKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Sub-account user id |
 **key** | **string**| The API Key of the sub-account |

### Return type

[**\GateApi\Model\SubAccountKey**](../Model/SubAccountKey.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSubAccountKeys

> updateSubAccountKeys($user_id, $key, $sub_account_key)

Update API key of the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Sub-account user id
$key = 'key_example'; // string | The API Key of the sub-account
$sub_account_key = new \GateApi\Model\SubAccountKey(); // \GateApi\Model\SubAccountKey | 

try {
    $apiInstance->updateSubAccountKeys($user_id, $key, $sub_account_key);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->updateSubAccountKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Sub-account user id |
 **key** | **string**| The API Key of the sub-account |
 **sub_account_key** | [**\GateApi\Model\SubAccountKey**](../Model/SubAccountKey.md)|  |

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


## deleteSubAccountKeys

> deleteSubAccountKeys($user_id, $key)

Delete API key of the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Sub-account user id
$key = 'key_example'; // string | The API Key of the sub-account

try {
    $apiInstance->deleteSubAccountKeys($user_id, $key);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->deleteSubAccountKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Sub-account user id |
 **key** | **string**| The API Key of the sub-account |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## lockSubAccount

> lockSubAccount($user_id)

Lock the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The user id of the sub-account

try {
    $apiInstance->lockSubAccount($user_id);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->lockSubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id of the sub-account |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## unlockSubAccount

> unlockSubAccount($user_id)

Unlock the sub-account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | The user id of the sub-account

try {
    $apiInstance->unlockSubAccount($user_id);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->unlockSubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| The user id of the sub-account |

### Return type

void (empty response body)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUnifiedMode

> \GateApi\Model\SubUserMode[] listUnifiedMode()

Get sub-account mode

Unified account mode： - `classic`: Classic account mode - `multi_currency`: Multi-currency margin mode - `portfolio`: Portfolio margin mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\SubAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listUnifiedMode();
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling SubAccountApi->listUnifiedMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\SubUserMode[]**](../Model/SubUserMode.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

