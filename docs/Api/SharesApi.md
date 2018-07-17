# QuantiModo\Client\SharesApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteShare**](SharesApi.md#deleteShare) | **POST** /v3/shares/delete | Delete share
[**getShares**](SharesApi.md#getShares) | **GET** /v3/shares | Get Authorized Apps, Studies, and Individuals
[**inviteShare**](SharesApi.md#inviteShare) | **POST** /v3/shares/invite | Delete share


# **deleteShare**
> \QuantiModo\Client\Model\User deleteShare($client_id_to_revoke, $reason, $platform)

Delete share

Remove access to user data for a given client_id associated with a given individual, app, or study

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

$apiInstance = new QuantiModo\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id_to_revoke = "client_id_to_revoke_example"; // string | Client id of the individual, study, or app that the user wishes to no longer have access to their data
$reason = "reason_example"; // string | Ex: I hate you!
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->deleteShare($client_id_to_revoke, $reason, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id_to_revoke** | **string**| Client id of the individual, study, or app that the user wishes to no longer have access to their data |
 **reason** | **string**| Ex: I hate you! | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShares**
> \QuantiModo\Client\Model\GetSharesResponse getShares($user_id, $created_at, $updated_at, $client_id, $app_version, $platform, $log, $pwd)

Get Authorized Apps, Studies, and Individuals

This is a list of individuals, apps, or studies with access to your measurements.

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

$apiInstance = new QuantiModo\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$app_version = "app_version_example"; // string | Ex: 2.1.1.0
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$log = "log_example"; // string | Username or email
$pwd = "pwd_example"; // string | User password

try {
    $result = $apiInstance->getShares($user_id, $created_at, $updated_at, $client_id, $app_version, $platform, $log, $pwd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->getShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **app_version** | **string**| Ex: 2.1.1.0 | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **log** | **string**| Username or email | [optional]
 **pwd** | **string**| User password | [optional]

### Return type

[**\QuantiModo\Client\Model\GetSharesResponse**](../Model/GetSharesResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteShare**
> \QuantiModo\Client\Model\User inviteShare($body, $platform, $client_id)

Delete share

Invite someone to view your measurements

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

$apiInstance = new QuantiModo\Client\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\ShareInvitationBody(); // \QuantiModo\Client\Model\ShareInvitationBody | Details about person to share with
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do

try {
    $result = $apiInstance->inviteShare($body, $platform, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->inviteShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\ShareInvitationBody**](../Model/ShareInvitationBody.md)| Details about person to share with |
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]

### Return type

[**\QuantiModo\Client\Model\User**](../Model/User.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

