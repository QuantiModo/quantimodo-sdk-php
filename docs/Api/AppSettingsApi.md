# QuantiModo\Client\AppSettingsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppSettings**](AppSettingsApi.md#getAppSettings) | **GET** /v3/appSettings | Get client app settings


# **getAppSettings**
> \QuantiModo\Client\Model\AppSettingsResponse getAppSettings($client_id, $client_secret, $platform)

Get client app settings

Get the settings for your application configurable at https://build.quantimo.do

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new QuantiModo\Client\Api\AppSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$client_secret = "client_secret_example"; // string | This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.quantimo.do](https://builder.quantimo.do).
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getAppSettings($client_id, $client_secret, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppSettingsApi->getAppSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **client_secret** | **string**| This is the secret for your obtained clientId. We use this to ensure that only your application uses the clientId.  Obtain this by creating a free application at [https://builder.quantimo.do](https://builder.quantimo.do). | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\AppSettingsResponse**](../Model/AppSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

