# QuantiModo\Client\FriendsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFriends**](FriendsApi.md#getFriends) | **GET** /v3/friends | Get Friends
[**postFriends**](FriendsApi.md#postFriends) | **POST** /v3/friends | Post Friends


# **getFriends**
> \QuantiModo\Client\Model\FriendsResponse[] getFriends($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform)

Get Friends

Get Friends

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\FriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$id = 56; // int | Id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getFriends($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FriendsApi->getFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\FriendsResponse[]**](../Model/FriendsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFriends**
> \QuantiModo\Client\Model\FriendsResponse[] postFriends($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform)

Post Friends

Post Friends

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
$config = QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new QuantiModo\Client\Api\FriendsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$id = 56; // int | Id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->postFriends($sort, $limit, $offset, $updated_at, $user_id, $created_at, $id, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FriendsApi->postFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\FriendsResponse[]**](../Model/FriendsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

