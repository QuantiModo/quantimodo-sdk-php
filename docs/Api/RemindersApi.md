# QuantiModo\Client\RemindersApi

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
> \QuantiModo\Client\Model\InlineResponse20012 v1TrackingReminderNotificationsGet($access_token, $user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort)

Get specific pending tracking reminders

Specfic pending reminder instances that still need to be tracked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$variable_category_name = "variable_category_name_example"; // string | Limit tracking reminder notifications to a specific variable category
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format. Time zone should be UTC and not local.
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try {
    $result = $api_instance->v1TrackingReminderNotificationsGet($access_token, $user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort);
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
 **user_id** | **int**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Limit tracking reminder notifications to a specific variable category | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 \&quot;YYYY-MM-DDThh:mm:ss\&quot;  datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 \&quot;YYYY-MM-DDThh:mm:ss\&quot;  datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingReminderNotificationsSkipPost**
> \QuantiModo\Client\Model\CommonResponse v1TrackingReminderNotificationsSkipPost($body, $access_token, $user_id)

Skip a pending tracking reminder

Deletes the pending tracking reminder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = new \QuantiModo\Client\Model\TrackingReminderNotificationSkip(); // \QuantiModo\Client\Model\TrackingReminderNotificationSkip | Id of the pending reminder to be skipped or deleted
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id

try {
    $result = $api_instance->v1TrackingReminderNotificationsSkipPost($body, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsSkipPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderNotificationSkip**](../Model/\QuantiModo\Client\Model\TrackingReminderNotificationSkip.md)| Id of the pending reminder to be skipped or deleted |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingReminderNotificationsSnoozePost**
> \QuantiModo\Client\Model\CommonResponse v1TrackingReminderNotificationsSnoozePost($body, $access_token, $user_id)

Snooze a pending tracking reminder

Changes the reminder time to now plus one hour

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = new \QuantiModo\Client\Model\TrackingReminderNotificationSnooze(); // \QuantiModo\Client\Model\TrackingReminderNotificationSnooze | Id of the pending reminder to be snoozed
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id

try {
    $result = $api_instance->v1TrackingReminderNotificationsSnoozePost($body, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsSnoozePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderNotificationSnooze**](../Model/\QuantiModo\Client\Model\TrackingReminderNotificationSnooze.md)| Id of the pending reminder to be snoozed |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingReminderNotificationsTrackPost**
> \QuantiModo\Client\Model\CommonResponse v1TrackingReminderNotificationsTrackPost($body, $access_token, $user_id)

Track a pending tracking reminder

Adds the default measurement for the pending tracking reminder with the reminder time as the measurment start time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = new \QuantiModo\Client\Model\TrackingReminderNotificationTrack(); // \QuantiModo\Client\Model\TrackingReminderNotificationTrack | Id of the pending reminder to be tracked
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id

try {
    $result = $api_instance->v1TrackingReminderNotificationsTrackPost($body, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingReminderNotificationsTrackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderNotificationTrack**](../Model/\QuantiModo\Client\Model\TrackingReminderNotificationTrack.md)| Id of the pending reminder to be tracked |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingRemindersDeletePost**
> \QuantiModo\Client\Model\CommonResponse v1TrackingRemindersDeletePost($body, $access_token, $user_id)

Delete tracking reminder

Delete previously created tracking reminder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = new \QuantiModo\Client\Model\TrackingReminderDelete(); // \QuantiModo\Client\Model\TrackingReminderDelete | Id of reminder to be deleted
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id

try {
    $result = $api_instance->v1TrackingRemindersDeletePost($body, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->v1TrackingRemindersDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderDelete**](../Model/\QuantiModo\Client\Model\TrackingReminderDelete.md)| Id of reminder to be deleted |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingRemindersGet**
> \QuantiModo\Client\Model\InlineResponse2005 v1TrackingRemindersGet($access_token, $user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort)

Get repeating tracking reminder settings

Users can be reminded to track certain variables at a specified frequency with a default value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$variable_category_name = "variable_category_name_example"; // string | Limit tracking reminders to a specific variable category
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format. Time zone should be UTC and not local.
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try {
    $result = $api_instance->v1TrackingRemindersGet($access_token, $user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort);
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
 **user_id** | **int**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Limit tracking reminders to a specific variable category | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 \&quot;YYYY-MM-DDThh:mm:ss\&quot;  datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 \&quot;YYYY-MM-DDThh:mm:ss\&quot;  datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TrackingRemindersPost**
> \QuantiModo\Client\Model\InlineResponse20011 v1TrackingRemindersPost($access_token, $user_id, $body)

Store a Tracking Reminder

This is to enable users to create reminders to track a variable with a default value at a specified frequency

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$body = new \QuantiModo\Client\Model\TrackingReminder(); // \QuantiModo\Client\Model\TrackingReminder | TrackingReminder that should be stored

try {
    $result = $api_instance->v1TrackingRemindersPost($access_token, $user_id, $body);
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
 **user_id** | **int**| User&#39;s id | [optional]
 **body** | [**\QuantiModo\Client\Model\TrackingReminder**](../Model/\QuantiModo\Client\Model\TrackingReminder.md)| TrackingReminder that should be stored | [optional]

### Return type

[**\QuantiModo\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

