# QuantiModo\Client\NotificationsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNotificationPreferences**](NotificationsApi.md#getNotificationPreferences) | **GET** /v3/notificationPreferences | Get NotificationPreferences
[**postDeviceTokens**](NotificationsApi.md#postDeviceTokens) | **POST** /v3/deviceTokens | Post DeviceTokens


# **getNotificationPreferences**
> getNotificationPreferences()

Get NotificationPreferences

Get NotificationPreferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QuantiModo\Client\Api\NotificationsApi();

try {
    $api_instance->getNotificationPreferences();
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDeviceTokens**
> postDeviceTokens()

Post DeviceTokens

Post DeviceTokens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QuantiModo\Client\Api\NotificationsApi();

try {
    $api_instance->postDeviceTokens();
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->postDeviceTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

