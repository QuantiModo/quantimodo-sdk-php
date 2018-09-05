# QuantiModo\Client\RemindersApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTrackingReminder**](RemindersApi.md#deleteTrackingReminder) | **DELETE** /v3/trackingReminders/delete | Delete Tracking Reminder
[**getTrackingReminderNotifications**](RemindersApi.md#getTrackingReminderNotifications) | **GET** /v3/trackingReminderNotifications | Get specific tracking reminder notifications
[**getTrackingReminders**](RemindersApi.md#getTrackingReminders) | **GET** /v3/trackingReminders | Get repeating tracking reminder settings
[**postTrackingReminderNotifications**](RemindersApi.md#postTrackingReminderNotifications) | **POST** /v3/trackingReminderNotifications | Snooze, skip, or track a tracking reminder notification
[**postTrackingReminders**](RemindersApi.md#postTrackingReminders) | **POST** /v3/trackingReminders | Store a Tracking Reminder


# **deleteTrackingReminder**
> \QuantiModo\Client\Model\CommonResponse deleteTrackingReminder($body, $user_id)

Delete Tracking Reminder

Stop getting notifications to record data for a variable.  Previously recorded measurements will be preserved.

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

$apiInstance = new QuantiModo\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\TrackingReminderDelete(); // \QuantiModo\Client\Model\TrackingReminderDelete | Id of reminder to be deleted
$user_id = 8.14; // float | User's id

try {
    $result = $apiInstance->deleteTrackingReminder($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->deleteTrackingReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderDelete**](../Model/TrackingReminderDelete.md)| Id of reminder to be deleted |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingReminderNotifications**
> \QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse getTrackingReminderNotifications($sort, $user_id, $created_at, $updated_at, $limit, $offset, $variable_category_name, $reminder_time, $client_id, $only_past, $include_deleted, $platform)

Get specific tracking reminder notifications

Specific tracking reminder notification instances that still need to be tracked.

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

$apiInstance = new QuantiModo\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$user_id = 8.14; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$variable_category_name = "variable_category_name_example"; // string | Ex: Emotions, Treatments, Symptoms...
$reminder_time = "reminder_time_example"; // string | Ex: (lt)2017-07-31 21:43:26
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$only_past = true; // bool | Ex: 1
$include_deleted = true; // bool | Include deleted variables
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getTrackingReminderNotifications($sort, $user_id, $created_at, $updated_at, $limit, $offset, $variable_category_name, $reminder_time, $client_id, $only_past, $include_deleted, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->getTrackingReminderNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **variable_category_name** | **string**| Ex: Emotions, Treatments, Symptoms... | [optional]
 **reminder_time** | **string**| Ex: (lt)2017-07-31 21:43:26 | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **only_past** | **bool**| Ex: 1 | [optional]
 **include_deleted** | **bool**| Include deleted variables | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse**](../Model/GetTrackingReminderNotificationsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingReminders**
> \QuantiModo\Client\Model\TrackingReminder[] getTrackingReminders($user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_version, $platform)

Get repeating tracking reminder settings

Users can be reminded to track certain variables at a specified frequency with a default value.

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

$apiInstance = new QuantiModo\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 8.14; // float | User's id
$variable_category_name = "variable_category_name_example"; // string | Ex: Emotions, Treatments, Symptoms...
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$app_version = "app_version_example"; // string | Ex: 2.1.1.0
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getTrackingReminders($user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort, $client_id, $app_version, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->getTrackingReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Ex: Emotions, Treatments, Symptoms... | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **app_version** | **string**| Ex: 2.1.1.0 | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\TrackingReminder[]**](../Model/TrackingReminder.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTrackingReminderNotifications**
> \QuantiModo\Client\Model\CommonResponse postTrackingReminderNotifications($body, $user_id, $client_id, $platform)

Snooze, skip, or track a tracking reminder notification

Snooze, skip, or track a tracking reminder notification

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

$apiInstance = new QuantiModo\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \QuantiModo\Client\Model\TrackingReminderNotificationPost()); // \QuantiModo\Client\Model\TrackingReminderNotificationPost[] | Id of the tracking reminder notification to be snoozed
$user_id = 8.14; // float | User's id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->postTrackingReminderNotifications($body, $user_id, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->postTrackingReminderNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderNotificationPost[]**](../Model/TrackingReminderNotificationPost.md)| Id of the tracking reminder notification to be snoozed |
 **user_id** | **float**| User&#39;s id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTrackingReminders**
> \QuantiModo\Client\Model\PostTrackingRemindersResponse postTrackingReminders($body)

Store a Tracking Reminder

This is to enable users to create reminders to track a variable with a default value at a specified frequency

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

$apiInstance = new QuantiModo\Client\Api\RemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \QuantiModo\Client\Model\TrackingReminder()); // \QuantiModo\Client\Model\TrackingReminder[] | TrackingReminder that should be stored

try {
    $result = $apiInstance->postTrackingReminders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->postTrackingReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminder[]**](../Model/TrackingReminder.md)| TrackingReminder that should be stored |

### Return type

[**\QuantiModo\Client\Model\PostTrackingRemindersResponse**](../Model/PostTrackingRemindersResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

