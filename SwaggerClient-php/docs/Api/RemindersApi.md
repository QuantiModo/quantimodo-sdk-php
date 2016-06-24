# Swagger\Client\RemindersApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1TrackingReminderNotificationsGet**](RemindersApi.md#v1TrackingReminderNotificationsGet) | **GET** /v1/trackingReminderNotifications | Get specific pending tracking reminders
[**v1TrackingReminderNotificationsSkipPost**](RemindersApi.md#v1TrackingReminderNotificationsSkipPost) | **POST** /v1/trackingReminderNotifications/skip | Skip a pending tracking reminder
[**v1TrackingReminderNotificationsSnoozePost**](RemindersApi.md#v1TrackingReminderNotificationsSnoozePost) | **POST** /v1/trackingReminderNotifications/snooze | Snooze a pending tracking reminder
[**v1TrackingReminderNotificationsTrackPost**](RemindersApi.md#v1TrackingReminderNotificationsTrackPost) | **POST** /v1/trackingReminderNotifications/track | Track a pending tracking reminder
[**v1TrackingRemindersDeletePost**](RemindersApi.md#v1TrackingRemindersDeletePost) | **POST** /v1/trackingReminders/delete | Delete tracking reminder
[**v1TrackingRemindersGet**](RemindersApi.md#v1TrackingRemindersGet) | **GET** /v1/trackingReminders | Get repeating tracking reminder settings
[**v1TrackingRemindersPost**](RemindersApi.md#v1TrackingRemindersPost) | **POST** /v1/trackingReminders | Store a Tracking Reminder


# **v1TrackingReminderNotificationsGet**
> \Swagger\Client\Model\InlineResponse200 v1TrackingReminderNotificationsGet($access_token, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort)

Get specific pending tracking reminders

Specfic pending reminder instances that still need to be tracked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$variable_category_name = "variable_category_name_example"; // string | Limit tracking reminder notifications to a specific variable category
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local.
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try {
    $result = $api_instance->v1TrackingReminderNotificationsGet($access_token, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **variable_category_name** | **string**| Limit tracking reminder notifications to a specific variable category | [optional]
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingReminderNotificationsSkipPost**
> \Swagger\Client\Model\CommonResponse v1TrackingReminderNotificationsSkipPost($body, $access_token)

Skip a pending tracking reminder

Deletes the pending tracking reminder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$body = new \Swagger\Client\Model\TrackingReminderNotificationSkip(); // \Swagger\Client\Model\TrackingReminderNotificationSkip | Id of the pending reminder to be skipped or deleted
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1TrackingReminderNotificationsSkipPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsSkipPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TrackingReminderNotificationSkip**](../Model/\Swagger\Client\Model\TrackingReminderNotificationSkip.md)| Id of the pending reminder to be skipped or deleted |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingReminderNotificationsSnoozePost**
> \Swagger\Client\Model\CommonResponse v1TrackingReminderNotificationsSnoozePost($body, $access_token)

Snooze a pending tracking reminder

Changes the reminder time to now plus one hour

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$body = new \Swagger\Client\Model\TrackingReminderNotificationSnooze(); // \Swagger\Client\Model\TrackingReminderNotificationSnooze | Id of the pending reminder to be snoozed
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1TrackingReminderNotificationsSnoozePost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsSnoozePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TrackingReminderNotificationSnooze**](../Model/\Swagger\Client\Model\TrackingReminderNotificationSnooze.md)| Id of the pending reminder to be snoozed |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingReminderNotificationsTrackPost**
> \Swagger\Client\Model\CommonResponse v1TrackingReminderNotificationsTrackPost($body, $access_token)

Track a pending tracking reminder

Adds the default measurement for the pending tracking reminder with the reminder time as the measurment start time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$body = new \Swagger\Client\Model\TrackingReminderNotificationTrack(); // \Swagger\Client\Model\TrackingReminderNotificationTrack | Id of the pending reminder to be tracked
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1TrackingReminderNotificationsTrackPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsTrackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TrackingReminderNotificationTrack**](../Model/\Swagger\Client\Model\TrackingReminderNotificationTrack.md)| Id of the pending reminder to be tracked |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingRemindersDeletePost**
> \Swagger\Client\Model\CommonResponse v1TrackingRemindersDeletePost($body, $access_token)

Delete tracking reminder

Delete previously created tracking reminder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$body = new \Swagger\Client\Model\TrackingReminderDelete(); // \Swagger\Client\Model\TrackingReminderDelete | Id of reminder to be deleted
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1TrackingRemindersDeletePost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingRemindersDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TrackingReminderDelete**](../Model/\Swagger\Client\Model\TrackingReminderDelete.md)| Id of reminder to be deleted |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingRemindersGet**
> \Swagger\Client\Model\InlineResponse2001 v1TrackingRemindersGet($access_token, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort)

Get repeating tracking reminder settings

Users can be reminded to track certain variables at a specified frequency with a default value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$variable_category_name = "variable_category_name_example"; // string | Limit tracking reminders to a specific variable category
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local.
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try {
    $result = $api_instance->v1TrackingRemindersGet($access_token, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingRemindersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **variable_category_name** | **string**| Limit tracking reminders to a specific variable category | [optional]
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingRemindersPost**
> \Swagger\Client\Model\InlineResponse2002 v1TrackingRemindersPost($access_token, $body)

Store a Tracking Reminder

This is to enable users to create reminders to track a variable with a default value at a specified frequency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\RemindersApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$body = new \Swagger\Client\Model\TrackingReminder(); // \Swagger\Client\Model\TrackingReminder | TrackingReminder that should be stored

try {
    $result = $api_instance->v1TrackingRemindersPost($access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingRemindersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **body** | [**\Swagger\Client\Model\TrackingReminder**](../Model/\Swagger\Client\Model\TrackingReminder.md)| TrackingReminder that should be stored | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

