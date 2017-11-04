# QuantiModo\Client\RemindersApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTrackingReminder**](RemindersApi.md#deleteTrackingReminder) | **DELETE** /v3/trackingReminders/delete | Delete tracking reminder
[**getTrackingReminderNotifications**](RemindersApi.md#getTrackingReminderNotifications) | **GET** /v3/trackingReminderNotifications | Get specific tracking reminder notifications
[**getTrackingReminders**](RemindersApi.md#getTrackingReminders) | **GET** /v3/trackingReminders | Get repeating tracking reminder settings
[**postTrackingReminderNotifications**](RemindersApi.md#postTrackingReminderNotifications) | **POST** /v3/trackingReminderNotifications | Snooze, skip, or track a tracking reminder notification
[**postTrackingReminders**](RemindersApi.md#postTrackingReminders) | **POST** /v3/trackingReminders | Store a Tracking Reminder


# **deleteTrackingReminder**
> \QuantiModo\Client\Model\CommonResponse deleteTrackingReminder($body, $user_id)

Delete tracking reminder

Delete previously created tracking reminder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = new \QuantiModo\Client\Model\TrackingReminderDelete(); // \QuantiModo\Client\Model\TrackingReminderDelete | Id of reminder to be deleted
$user_id = 3.4; // float | User's id

try {
    $result = $api_instance->deleteTrackingReminder($body, $user_id);
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
> \QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse getTrackingReminderNotifications($sort, $user_id, $created_at, $updated_at, $limit, $offset, $variable_category_name, $reminder_time, $app_name, $client_id, $only_past, $include_deleted)

Get specific tracking reminder notifications

Specific tracking reminder notification instances that still need to be tracked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$user_id = 3.4; // float | User's id
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$variable_category_name = "variable_category_name_example"; // string | Limit results to a specific variable category
$reminder_time = "reminder_time_example"; // string | Example: (lt)2017-07-31 21:43:26
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client
$only_past = true; // bool | Example: 1
$include_deleted = true; // bool | Example:

try {
    $result = $api_instance->getTrackingReminderNotifications($sort, $user_id, $created_at, $updated_at, $limit, $offset, $variable_category_name, $reminder_time, $app_name, $client_id, $only_past, $include_deleted);
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
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **variable_category_name** | **string**| Limit results to a specific variable category | [optional]
 **reminder_time** | **string**| Example: (lt)2017-07-31 21:43:26 | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **only_past** | **bool**| Example: 1 | [optional]
 **include_deleted** | **bool**| Example: | [optional]

### Return type

[**\QuantiModo\Client\Model\GetTrackingReminderNotificationsResponse**](../Model/GetTrackingReminderNotificationsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrackingReminders**
> \QuantiModo\Client\Model\TrackingReminderArray getTrackingReminders($user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort, $app_name, $client_id, $app_version)

Get repeating tracking reminder settings

Users can be reminded to track certain variables at a specified frequency with a default value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$user_id = 3.4; // float | User's id
$variable_category_name = "variable_category_name_example"; // string | Limit results to a specific variable category
$created_at = "created_at_example"; // string | When the record was first created. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client
$app_version = "app_version_example"; // string | Example: 2.1.1.0

try {
    $result = $api_instance->getTrackingReminders($user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort, $app_name, $client_id, $app_version);
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
 **variable_category_name** | **string**| Limit results to a specific variable category | [optional]
 **created_at** | **string**| When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **app_version** | **string**| Example: 2.1.1.0 | [optional]

### Return type

[**\QuantiModo\Client\Model\TrackingReminderArray**](../Model/TrackingReminderArray.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTrackingReminderNotifications**
> \QuantiModo\Client\Model\CommonResponse postTrackingReminderNotifications($body, $user_id, $app_name, $client_id)

Snooze, skip, or track a tracking reminder notification

Snooze, skip, or track a tracking reminder notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: access_token
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = array(new \QuantiModo\Client\Model\TrackingReminderNotificationPost()); // \QuantiModo\Client\Model\TrackingReminderNotificationPost[] | Id of the tracking reminder notification to be snoozed
$user_id = 3.4; // float | User's id
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client

try {
    $result = $api_instance->postTrackingReminderNotifications($body, $user_id, $app_name, $client_id);
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
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]

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
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');
// Configure OAuth2 access token for authorization: quantimodo_oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\RemindersApi();
$body = new \QuantiModo\Client\Model\TrackingReminderArray(); // \QuantiModo\Client\Model\TrackingReminderArray | TrackingReminder that should be stored

try {
    $result = $api_instance->postTrackingReminders($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemindersApi->postTrackingReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\TrackingReminderArray**](../Model/TrackingReminderArray.md)| TrackingReminder that should be stored |

### Return type

[**\QuantiModo\Client\Model\PostTrackingRemindersResponse**](../Model/PostTrackingRemindersResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

