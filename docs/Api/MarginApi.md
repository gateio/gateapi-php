# GateApi\MarginApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelLoan**](MarginApi.md#cancelLoan) | **DELETE** /margin/loans/{loan_id} | Cancel lending loan
[**createLoan**](MarginApi.md#createLoan) | **POST** /margin/loans | Lend or borrow
[**getLoan**](MarginApi.md#getLoan) | **GET** /margin/loans/{loan_id} | Retrieve one single loan detail
[**getLoanRecord**](MarginApi.md#getLoanRecord) | **GET** /margin/loan_records/{loan_record_id} | Get one single loan record
[**listFundingAccounts**](MarginApi.md#listFundingAccounts) | **GET** /margin/funding_accounts | Funding account list
[**listFundingBook**](MarginApi.md#listFundingBook) | **GET** /margin/funding_book | Order book of lending loans
[**listLoanRecords**](MarginApi.md#listLoanRecords) | **GET** /margin/loan_records | List repayment records of specified loan
[**listLoanRepayments**](MarginApi.md#listLoanRepayments) | **GET** /margin/loans/{loan_id}/repayment | List loan repayment records
[**listLoans**](MarginApi.md#listLoans) | **GET** /margin/loans | List all loans
[**listMarginAccounts**](MarginApi.md#listMarginAccounts) | **GET** /margin/accounts | Margin account list
[**listMarginCurrencyPairs**](MarginApi.md#listMarginCurrencyPairs) | **GET** /margin/currency_pairs | List all supported currency pairs supported in margin trading
[**mergeLoans**](MarginApi.md#mergeLoans) | **POST** /margin/merged_loans | Merge multiple lending loans
[**repayLoan**](MarginApi.md#repayLoan) | **POST** /margin/loans/{loan_id}/repayment | Repay a loan
[**updateLoan**](MarginApi.md#updateLoan) | **PATCH** /margin/loans/{loan_id} | Modify a loan
[**updateLoanRecord**](MarginApi.md#updateLoanRecord) | **PATCH** /margin/loan_records/{loan_record_id} | Modify a loan record


# **cancelLoan**
> \GateApi\Model\Loan cancelLoan($currency)

Cancel lending loan

Only lending loans can be cancelled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$currency = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->cancelLoan($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->cancelLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLoan**
> \GateApi\Model\Loan createLoan($loan)

Lend or borrow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$loan = new \GateApi\Model\Loan(); // \GateApi\Model\Loan | 

try {
    $result = $apiInstance->createLoan($loan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->createLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan** | [**\GateApi\Model\Loan**](../Model/Loan.md)|  |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoan**
> \GateApi\Model\Loan getLoan($side)

Retrieve one single loan detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$side = 'lend'; // string | Lend or borrow

try {
    $result = $apiInstance->getLoan($side);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->getLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **side** | **string**| Lend or borrow |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLoanRecord**
> \GateApi\Model\LoanRecord getLoanRecord($loan_id)

Get one single loan record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$loan_id = 'loan_id_example'; // string | Loan ID

try {
    $result = $apiInstance->getLoanRecord($loan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->getLoanRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |

### Return type

[**\GateApi\Model\LoanRecord**](../Model/LoanRecord.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFundingAccounts**
> \GateApi\Model\FundingAccount[] listFundingAccounts($currency)

Funding account list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$currency = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->listFundingAccounts($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listFundingAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data | [optional]

### Return type

[**\GateApi\Model\FundingAccount[]**](../Model/FundingAccount.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFundingBook**
> \GateApi\Model\FundingBookItem[] listFundingBook($currency)

Order book of lending loans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MarginApi()
$currency = 'BTC'; // string | Retrieved specified currency related data

try {
    $result = $apiInstance->listFundingBook($currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listFundingBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data |

### Return type

[**\GateApi\Model\FundingBookItem[]**](../Model/FundingBookItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLoanRecords**
> \GateApi\Model\LoanRecord[] listLoanRecords($loan_id, $status, $page, $limit)

List repayment records of specified loan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$loan_id = 'loan_id_example'; // string | Loan ID
$status = 'status_example'; // string | Loan record status
$page = 1; // int | Page number
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listLoanRecords($loan_id, $status, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listLoanRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_id** | **string**| Loan ID |
 **status** | **string**| Loan record status | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\LoanRecord[]**](../Model/LoanRecord.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLoanRepayments**
> \GateApi\Model\Repayment[] listLoanRepayments()

List loan repayment records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)

try {
    $result = $apiInstance->listLoanRepayments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listLoanRepayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\Repayment[]**](../Model/Repayment.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listLoans**
> \GateApi\Model\Loan[] listLoans($status, $side, $currency, $page, $limit)

List all loans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$status = 'open'; // string | Loan status
$side = 'lend'; // string | Lend or borrow
$currency = 'BTC'; // string | Retrieved specified currency related data
$page = 1; // int | Page number
$limit = 100; // int | Maximum number of record returned in one list

try {
    $result = $apiInstance->listLoans($status, $side, $currency, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Loan status |
 **side** | **string**| Lend or borrow |
 **currency** | **string**| Retrieved specified currency related data | [optional]
 **page** | **int**| Page number | [optional] [default to 1]
 **limit** | **int**| Maximum number of record returned in one list | [optional] [default to 100]

### Return type

[**\GateApi\Model\Loan[]**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMarginAccounts**
> \GateApi\Model\MarginAccount[] listMarginAccounts($currency_pair)

Margin account list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$currency_pair = 'BTC_USDT'; // string | Currency pair

try {
    $result = $apiInstance->listMarginAccounts($currency_pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listMarginAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency_pair** | **string**| Currency pair | [optional]

### Return type

[**\GateApi\Model\MarginAccount[]**](../Model/MarginAccount.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMarginCurrencyPairs**
> \GateApi\Model\MarginCurrencyPair[] listMarginCurrencyPairs()

List all supported currency pairs supported in margin trading

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\MarginApi()

try {
    $result = $apiInstance->listMarginCurrencyPairs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->listMarginCurrencyPairs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\GateApi\Model\MarginCurrencyPair[]**](../Model/MarginCurrencyPair.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeLoans**
> \GateApi\Model\Loan mergeLoans($currency, $ids)

Merge multiple lending loans

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$currency = 'BTC'; // string | Retrieved specified currency related data
$ids = '123,234,345'; // string | Lending loan ID list separated by `,`. Maximum of 20 IDs are allowed in one request

try {
    $result = $apiInstance->mergeLoans($currency, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->mergeLoans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currency** | **string**| Retrieved specified currency related data |
 **ids** | **string**| Lending loan ID list separated by &#x60;,&#x60;. Maximum of 20 IDs are allowed in one request |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **repayLoan**
> \GateApi\Model\Loan repayLoan($repay_request)

Repay a loan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$repay_request = new \GateApi\Model\RepayRequest(); // \GateApi\Model\RepayRequest | 

try {
    $result = $apiInstance->repayLoan($repay_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->repayLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **repay_request** | [**\GateApi\Model\RepayRequest**](../Model/RepayRequest.md)|  |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoan**
> \GateApi\Model\Loan updateLoan($loan_patch)

Modify a loan

Only `auto_renew` modification is supported currently

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$loan_patch = new \GateApi\Model\LoanPatch(); // \GateApi\Model\LoanPatch | 

try {
    $result = $apiInstance->updateLoan($loan_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->updateLoan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_patch** | [**\GateApi\Model\LoanPatch**](../Model/LoanPatch.md)|  |

### Return type

[**\GateApi\Model\Loan**](../Model/Loan.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLoanRecord**
> \GateApi\Model\LoanRecord updateLoanRecord($loan_patch)

Modify a loan record

Only `auto_renew` modification is supported currently

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = new GateApi\Api\Configuration("YOUR_API_KEY", "YOUR_API_SECRET");
$apiInstance = new GateApi\Api\MarginApi(null, $config)
$loan_patch = new \GateApi\Model\LoanPatch(); // \GateApi\Model\LoanPatch | 

try {
    $result = $apiInstance->updateLoanRecord($loan_patch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarginApi->updateLoanRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **loan_patch** | [**\GateApi\Model\LoanPatch**](../Model/LoanPatch.md)|  |

### Return type

[**\GateApi\Model\LoanRecord**](../Model/LoanRecord.md)

### Authorization

Authentication with API key and secret is required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

