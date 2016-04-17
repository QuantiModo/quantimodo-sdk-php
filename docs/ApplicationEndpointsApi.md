# Swagger\Client\ApplicationEndpointsApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v2ApplicationConnectionsGet**](ApplicationEndpointsApi.md#v2ApplicationConnectionsGet) | **GET** /v2/application/connections | Get all Connections
[**v2ApplicationCredentialsGet**](ApplicationEndpointsApi.md#v2ApplicationCredentialsGet) | **GET** /v2/application/credentials | Get all Credentials
[**v2ApplicationMeasurementsGet**](ApplicationEndpointsApi.md#v2ApplicationMeasurementsGet) | **GET** /v2/application/measurements | Get measurements for all users using your application
[**v2ApplicationTrackingRemindersGet**](ApplicationEndpointsApi.md#v2ApplicationTrackingRemindersGet) | **GET** /v2/application/trackingReminders | Get tracking reminders
[**v2ApplicationUpdatesGet**](ApplicationEndpointsApi.md#v2ApplicationUpdatesGet) | **GET** /v2/application/updates | Get all Updates
[**v2ApplicationUserVariableRelationshipsGet**](ApplicationEndpointsApi.md#v2ApplicationUserVariableRelationshipsGet) | **GET** /v2/application/userVariableRelationships | Get all UserVariableRelationships
[**v2ApplicationUserVariablesGet**](ApplicationEndpointsApi.md#v2ApplicationUserVariablesGet) | **GET** /v2/application/userVariables | Get all UserVariables
[**v2ApplicationVariableUserSourcesGet**](ApplicationEndpointsApi.md#v2ApplicationVariableUserSourcesGet) | **GET** /v2/application/variableUserSources | Get all VariableUserSources
[**v2ApplicationVotesGet**](ApplicationEndpointsApi.md#v2ApplicationVotesGet) | **GET** /v2/application/votes | Get all Votes


# **v2ApplicationConnectionsGet**
> \Swagger\Client\Model\InlineResponse2003 v2ApplicationConnectionsGet($access_token, $connector_id, $connect_status, $connect_error, $update_requested_at, $update_status, $update_error, $last_successful_updated_at, $created_at, $updated_at, $limit, $offset, $sort)

Get all Connections

Get all Connections

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | Application's OAuth2 access token
$connector_id = 56; // int | The id for the connector data source for which the connection is connected
$connect_status = "connect_status_example"; // string | Indicates whether a connector is currently connected to a service for a user.
$connect_error = "connect_error_example"; // string | Error message if there is a problem with authorizing this connection.
$update_requested_at = "update_requested_at_example"; // string | Time at which an update was requested by a user.
$update_status = "update_status_example"; // string | Indicates whether a connector is currently updated.
$update_error = "update_error_example"; // string | Indicates if there was an error during the update.
$last_successful_updated_at = "last_successful_updated_at_example"; // string | The time at which the connector was last successfully updated.
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationConnectionsGet($access_token, $connector_id, $connect_status, $connect_error, $update_requested_at, $update_status, $update_error, $last_successful_updated_at, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationConnectionsGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Application&#39;s OAuth2 access token | [optional] 
 **connector_id** | [**int**](.md)| The id for the connector data source for which the connection is connected | [optional] 
 **connect_status** | **string**| Indicates whether a connector is currently connected to a service for a user. | [optional] 
 **connect_error** | **string**| Error message if there is a problem with authorizing this connection. | [optional] 
 **update_requested_at** | **string**| Time at which an update was requested by a user. | [optional] 
 **update_status** | **string**| Indicates whether a connector is currently updated. | [optional] 
 **update_error** | **string**| Indicates if there was an error during the update. | [optional] 
 **last_successful_updated_at** | **string**| The time at which the connector was last successfully updated. | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](InlineResponse2003.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationCredentialsGet**
> \Swagger\Client\Model\InlineResponse2004 v2ApplicationCredentialsGet($access_token, $connector_id, $attr_key, $attr_value, $created_at, $updated_at, $limit, $offset, $sort)

Get all Credentials

Get all Credentials

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | Application's OAuth2 access token
$connector_id = 56; // int | The id for the connector data source from which the credential was obtained
$attr_key = "attr_key_example"; // string | Attribute name such as token, userid, username, or password
$attr_value = "attr_value_example"; // string | Encrypted value for the attribute specified
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationCredentialsGet($access_token, $connector_id, $attr_key, $attr_value, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationCredentialsGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Application&#39;s OAuth2 access token | [optional] 
 **connector_id** | [**int**](.md)| The id for the connector data source from which the credential was obtained | [optional] 
 **attr_key** | **string**| Attribute name such as token, userid, username, or password | [optional] 
 **attr_value** | **string**| Encrypted value for the attribute specified | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](InlineResponse2004.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationMeasurementsGet**
> \Swagger\Client\Model\InlineResponse2005 v2ApplicationMeasurementsGet($access_token, $client_id, $connector_id, $variable_id, $source_id, $start_time, $value, $unit_id, $original_value, $original_unit_id, $duration, $note, $latitude, $longitude, $location, $created_at, $updated_at, $error, $limit, $offset, $sort)

Get measurements for all users using your application

Measurements are any value that can be recorded like daily steps, a mood rating, or apples eaten.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | Application's OAuth2 access token
$client_id = "client_id_example"; // string | The ID of the client application which originally stored the measurement
$connector_id = 56; // int | The id for the connector data source from which the measurement was obtained
$variable_id = 56; // int | ID of the variable for which we are creating the measurement records
$source_id = 56; // int | Application or device used to record the measurement values
$start_time = "start_time_example"; // string | start time for the measurement event. Use ISO 8601 datetime format
$value = new Number(); // Number | The value of the measurement after conversion to the default unit for that variable
$unit_id = 56; // int | The default unit id for the variable
$original_value = new Number(); // Number | Unconverted value of measurement as originally posted (before conversion to default unit)
$original_unit_id = 56; // int | Unit id of the measurement as originally submitted
$duration = 56; // int | Duration of the event being measurement in seconds
$note = "note_example"; // string | An optional note the user may include with their measurement
$latitude = new Number(); // Number | Latitude at which the measurement was taken
$longitude = new Number(); // Number | Longitude at which the measurement was taken
$location = "location_example"; // string | Optional human readable name for the location where the measurement was recorded
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$error = "error_example"; // string | An error message if there is a problem with the measurement
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationMeasurementsGet($access_token, $client_id, $connector_id, $variable_id, $source_id, $start_time, $value, $unit_id, $original_value, $original_unit_id, $duration, $note, $latitude, $longitude, $location, $created_at, $updated_at, $error, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationMeasurementsGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Application&#39;s OAuth2 access token | [optional] 
 **client_id** | **string**| The ID of the client application which originally stored the measurement | [optional] 
 **connector_id** | [**int**](.md)| The id for the connector data source from which the measurement was obtained | [optional] 
 **variable_id** | [**int**](.md)| ID of the variable for which we are creating the measurement records | [optional] 
 **source_id** | [**int**](.md)| Application or device used to record the measurement values | [optional] 
 **start_time** | **string**| start time for the measurement event. Use ISO 8601 datetime format | [optional] 
 **value** | [**Number**](.md)| The value of the measurement after conversion to the default unit for that variable | [optional] 
 **unit_id** | [**int**](.md)| The default unit id for the variable | [optional] 
 **original_value** | [**Number**](.md)| Unconverted value of measurement as originally posted (before conversion to default unit) | [optional] 
 **original_unit_id** | [**int**](.md)| Unit id of the measurement as originally submitted | [optional] 
 **duration** | [**int**](.md)| Duration of the event being measurement in seconds | [optional] 
 **note** | **string**| An optional note the user may include with their measurement | [optional] 
 **latitude** | [**Number**](.md)| Latitude at which the measurement was taken | [optional] 
 **longitude** | [**Number**](.md)| Longitude at which the measurement was taken | [optional] 
 **location** | **string**| Optional human readable name for the location where the measurement was recorded | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **error** | **string**| An error message if there is a problem with the measurement | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](InlineResponse2005.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationTrackingRemindersGet**
> \Swagger\Client\Model\InlineResponse2001 v2ApplicationTrackingRemindersGet($access_token, $client_id, $created_at, $updated_at, $limit, $offset, $sort)

Get tracking reminders

Get the variable id, frequency, and default value for the user tracking reminders

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$client_id = "client_id_example"; // string | The ID of the client application which last created or updated this trackingReminder
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationTrackingRemindersGet($access_token, $client_id, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationTrackingRemindersGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **client_id** | **string**| The ID of the client application which last created or updated this trackingReminder | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](InlineResponse2001.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationUpdatesGet**
> \Swagger\Client\Model\InlineResponse2006 v2ApplicationUpdatesGet($access_token, $connector_id, $number_of_measurements, $success, $message, $created_at, $updated_at, $limit, $offset, $sort)

Get all Updates

Get all Updates

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | Application's OAuth2 access token
$connector_id = 56; // int | connector_id
$number_of_measurements = 56; // int | number_of_measurements
$success = true; // bool | success
$message = "message_example"; // string | message
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationUpdatesGet($access_token, $connector_id, $number_of_measurements, $success, $message, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationUpdatesGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Application&#39;s OAuth2 access token | [optional] 
 **connector_id** | [**int**](.md)| connector_id | [optional] 
 **number_of_measurements** | [**int**](.md)| number_of_measurements | [optional] 
 **success** | **bool**| success | [optional] 
 **message** | **string**| message | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](InlineResponse2006.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationUserVariableRelationshipsGet**
> \Swagger\Client\Model\InlineResponse2007 v2ApplicationUserVariableRelationshipsGet($access_token, $id, $confidence_level, $confidence_score, $direction, $duration_of_action, $error_message, $onset_delay, $outcome_variable_id, $predictor_variable_id, $predictor_unit_id, $sinn_rank, $strength_level, $strength_score, $vote, $value_predicting_high_outcome, $value_predicting_low_outcome, $limit, $offset, $sort)

Get all UserVariableRelationships

Get all UserVariableRelationships

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$id = 56; // int | id
$confidence_level = "confidence_level_example"; // string | Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors
$confidence_score = new Number(); // Number | A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors
$direction = "direction_example"; // string | Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values.
$duration_of_action = 56; // int | Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect
$error_message = "error_message_example"; // string | error_message
$onset_delay = 56; // int | Estimated number of seconds that pass before a stimulus produces a perceivable effect
$outcome_variable_id = 56; // int | Variable ID for the outcome variable
$predictor_variable_id = 56; // int | Variable ID for the predictor variable
$predictor_unit_id = 56; // int | ID for default unit of the predictor variable
$sinn_rank = new Number(); // Number | A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting.
$strength_level = "strength_level_example"; // string | Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores.
$strength_score = new Number(); // Number | A value represented to the size of the effect which the predictor appears to have on the outcome.
$vote = "vote_example"; // string | vote
$value_predicting_high_outcome = new Number(); // Number | Value for the predictor variable (in it's default unit) which typically precedes an above average outcome value
$value_predicting_low_outcome = new Number(); // Number | Value for the predictor variable (in it's default unit) which typically precedes a below average outcome value
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationUserVariableRelationshipsGet($access_token, $id, $confidence_level, $confidence_score, $direction, $duration_of_action, $error_message, $onset_delay, $outcome_variable_id, $predictor_variable_id, $predictor_unit_id, $sinn_rank, $strength_level, $strength_score, $vote, $value_predicting_high_outcome, $value_predicting_low_outcome, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationUserVariableRelationshipsGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **id** | [**int**](.md)| id | [optional] 
 **confidence_level** | **string**| Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors | [optional] 
 **confidence_score** | [**Number**](.md)| A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors | [optional] 
 **direction** | **string**| Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. | [optional] 
 **duration_of_action** | [**int**](.md)| Estimated number of seconds following the onset delay in which a stimulus produces a perceivable effect | [optional] 
 **error_message** | **string**| error_message | [optional] 
 **onset_delay** | [**int**](.md)| Estimated number of seconds that pass before a stimulus produces a perceivable effect | [optional] 
 **outcome_variable_id** | [**int**](.md)| Variable ID for the outcome variable | [optional] 
 **predictor_variable_id** | [**int**](.md)| Variable ID for the predictor variable | [optional] 
 **predictor_unit_id** | [**int**](.md)| ID for default unit of the predictor variable | [optional] 
 **sinn_rank** | [**Number**](.md)| A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting. | [optional] 
 **strength_level** | **string**| Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores. | [optional] 
 **strength_score** | [**Number**](.md)| A value represented to the size of the effect which the predictor appears to have on the outcome. | [optional] 
 **vote** | **string**| vote | [optional] 
 **value_predicting_high_outcome** | [**Number**](.md)| Value for the predictor variable (in it&#39;s default unit) which typically precedes an above average outcome value | [optional] 
 **value_predicting_low_outcome** | [**Number**](.md)| Value for the predictor variable (in it&#39;s default unit) which typically precedes a below average outcome value | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](InlineResponse2007.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationUserVariablesGet**
> \Swagger\Client\Model\InlineResponse2008 v2ApplicationUserVariablesGet($access_token, $client_id, $parent_id, $variable_id, $default_unit_id, $minimum_allowed_value, $maximum_allowed_value, $filling_value, $join_with, $onset_delay, $duration_of_action, $variable_category_id, $updated, $public, $cause_only, $filling_type, $number_of_measurements, $number_of_processed_measurements, $measurements_at_last_analysis, $last_unit_id, $last_original_unit_id, $last_original_value, $last_value, $last_source_id, $number_of_correlations, $status, $error_message, $last_successful_update_time, $standard_deviation, $variance, $minimum_recorded_value, $maximum_recorded_value, $mean, $median, $most_common_unit_id, $most_common_value, $number_of_unique_daily_values, $number_of_changes, $skewness, $kurtosis, $latitude, $longitude, $location, $created_at, $updated_at, $outcome, $sources, $earliest_source_time, $latest_source_time, $earliest_measurement_time, $latest_measurement_time, $earliest_filling_time, $latest_filling_time, $limit, $offset, $sort)

Get all UserVariables

Get all UserVariables

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$client_id = "client_id_example"; // string | The ID of the client application which last created or updated this user variable
$parent_id = 56; // int | ID of the parent variable if this variable has any parent
$variable_id = 56; // int | ID of variable
$default_unit_id = 56; // int | D of unit to use for this variable
$minimum_allowed_value = new Number(); // Number | Minimum reasonable value for this variable (uses default unit)
$maximum_allowed_value = new Number(); // Number | Maximum reasonable value for this variable (uses default unit)
$filling_value = new Number(); // Number | Value for replacing null measurements
$join_with = 56; // int | The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables
$onset_delay = 56; // int | Estimated number of seconds that pass before a stimulus produces a perceivable effect
$duration_of_action = 56; // int | Estimated duration of time following the onset delay in which a stimulus produces a perceivable effect
$variable_category_id = 56; // int | ID of variable category
$updated = 56; // int | updated
$public = 56; // int | Is variable public
$cause_only = true; // bool | A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user
$filling_type = "filling_type_example"; // string | 0 -> No filling, 1 -> Use filling-value
$number_of_measurements = 56; // int | Number of measurements
$number_of_processed_measurements = 56; // int | Number of processed measurements
$measurements_at_last_analysis = 56; // int | Number of measurements at last analysis
$last_unit_id = 56; // int | ID of last Unit
$last_original_unit_id = 56; // int | ID of last original Unit
$last_original_value = 56; // int | Last original value which is stored
$last_value = new Number(); // Number | Last Value
$last_source_id = 56; // int | ID of last source
$number_of_correlations = 56; // int | Number of correlations for this variable
$status = "status_example"; // string | status
$error_message = "error_message_example"; // string | error_message
$last_successful_update_time = "last_successful_update_time_example"; // string | When this variable or its settings were last updated
$standard_deviation = new Number(); // Number | Standard deviation
$variance = new Number(); // Number | Variance
$minimum_recorded_value = new Number(); // Number | Minimum recorded value of this variable
$maximum_recorded_value = new Number(); // Number | Maximum recorded value of this variable
$mean = new Number(); // Number | Mean
$median = new Number(); // Number | Median
$most_common_unit_id = 56; // int | Most common Unit ID
$most_common_value = new Number(); // Number | Most common value
$number_of_unique_daily_values = new Number(); // Number | Number of unique daily values
$number_of_changes = 56; // int | Number of changes
$skewness = new Number(); // Number | Skewness
$kurtosis = new Number(); // Number | Kurtosis
$latitude = new Number(); // Number | Latitude
$longitude = new Number(); // Number | Longitude
$location = "location_example"; // string | Location
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$outcome = true; // bool | Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables
$sources = "sources_example"; // string | Comma-separated list of source names to limit variables to those sources
$earliest_source_time = 56; // int | Earliest source time
$latest_source_time = 56; // int | Latest source time
$earliest_measurement_time = 56; // int | Earliest measurement time
$latest_measurement_time = 56; // int | Latest measurement time
$earliest_filling_time = 56; // int | Earliest filling time
$latest_filling_time = 56; // int | Latest filling time
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationUserVariablesGet($access_token, $client_id, $parent_id, $variable_id, $default_unit_id, $minimum_allowed_value, $maximum_allowed_value, $filling_value, $join_with, $onset_delay, $duration_of_action, $variable_category_id, $updated, $public, $cause_only, $filling_type, $number_of_measurements, $number_of_processed_measurements, $measurements_at_last_analysis, $last_unit_id, $last_original_unit_id, $last_original_value, $last_value, $last_source_id, $number_of_correlations, $status, $error_message, $last_successful_update_time, $standard_deviation, $variance, $minimum_recorded_value, $maximum_recorded_value, $mean, $median, $most_common_unit_id, $most_common_value, $number_of_unique_daily_values, $number_of_changes, $skewness, $kurtosis, $latitude, $longitude, $location, $created_at, $updated_at, $outcome, $sources, $earliest_source_time, $latest_source_time, $earliest_measurement_time, $latest_measurement_time, $earliest_filling_time, $latest_filling_time, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationUserVariablesGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **client_id** | **string**| The ID of the client application which last created or updated this user variable | [optional] 
 **parent_id** | [**int**](.md)| ID of the parent variable if this variable has any parent | [optional] 
 **variable_id** | [**int**](.md)| ID of variable | [optional] 
 **default_unit_id** | [**int**](.md)| D of unit to use for this variable | [optional] 
 **minimum_allowed_value** | [**Number**](.md)| Minimum reasonable value for this variable (uses default unit) | [optional] 
 **maximum_allowed_value** | [**Number**](.md)| Maximum reasonable value for this variable (uses default unit) | [optional] 
 **filling_value** | [**Number**](.md)| Value for replacing null measurements | [optional] 
 **join_with** | [**int**](.md)| The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables | [optional] 
 **onset_delay** | [**int**](.md)| Estimated number of seconds that pass before a stimulus produces a perceivable effect | [optional] 
 **duration_of_action** | [**int**](.md)| Estimated duration of time following the onset delay in which a stimulus produces a perceivable effect | [optional] 
 **variable_category_id** | [**int**](.md)| ID of variable category | [optional] 
 **updated** | [**int**](.md)| updated | [optional] 
 **public** | [**int**](.md)| Is variable public | [optional] 
 **cause_only** | **bool**| A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user | [optional] 
 **filling_type** | **string**| 0 -&gt; No filling, 1 -&gt; Use filling-value | [optional] 
 **number_of_measurements** | [**int**](.md)| Number of measurements | [optional] 
 **number_of_processed_measurements** | [**int**](.md)| Number of processed measurements | [optional] 
 **measurements_at_last_analysis** | [**int**](.md)| Number of measurements at last analysis | [optional] 
 **last_unit_id** | [**int**](.md)| ID of last Unit | [optional] 
 **last_original_unit_id** | [**int**](.md)| ID of last original Unit | [optional] 
 **last_original_value** | [**int**](.md)| Last original value which is stored | [optional] 
 **last_value** | [**Number**](.md)| Last Value | [optional] 
 **last_source_id** | [**int**](.md)| ID of last source | [optional] 
 **number_of_correlations** | [**int**](.md)| Number of correlations for this variable | [optional] 
 **status** | **string**| status | [optional] 
 **error_message** | **string**| error_message | [optional] 
 **last_successful_update_time** | **string**| When this variable or its settings were last updated | [optional] 
 **standard_deviation** | [**Number**](.md)| Standard deviation | [optional] 
 **variance** | [**Number**](.md)| Variance | [optional] 
 **minimum_recorded_value** | [**Number**](.md)| Minimum recorded value of this variable | [optional] 
 **maximum_recorded_value** | [**Number**](.md)| Maximum recorded value of this variable | [optional] 
 **mean** | [**Number**](.md)| Mean | [optional] 
 **median** | [**Number**](.md)| Median | [optional] 
 **most_common_unit_id** | [**int**](.md)| Most common Unit ID | [optional] 
 **most_common_value** | [**Number**](.md)| Most common value | [optional] 
 **number_of_unique_daily_values** | [**Number**](.md)| Number of unique daily values | [optional] 
 **number_of_changes** | [**int**](.md)| Number of changes | [optional] 
 **skewness** | [**Number**](.md)| Skewness | [optional] 
 **kurtosis** | [**Number**](.md)| Kurtosis | [optional] 
 **latitude** | [**Number**](.md)| Latitude | [optional] 
 **longitude** | [**Number**](.md)| Longitude | [optional] 
 **location** | **string**| Location | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **outcome** | **bool**| Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables | [optional] 
 **sources** | **string**| Comma-separated list of source names to limit variables to those sources | [optional] 
 **earliest_source_time** | [**int**](.md)| Earliest source time | [optional] 
 **latest_source_time** | [**int**](.md)| Latest source time | [optional] 
 **earliest_measurement_time** | [**int**](.md)| Earliest measurement time | [optional] 
 **latest_measurement_time** | [**int**](.md)| Latest measurement time | [optional] 
 **earliest_filling_time** | [**int**](.md)| Earliest filling time | [optional] 
 **latest_filling_time** | [**int**](.md)| Latest filling time | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](InlineResponse2008.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationVariableUserSourcesGet**
> \Swagger\Client\Model\InlineResponse2009 v2ApplicationVariableUserSourcesGet($access_token, $variable_id, $timestamp, $earliest_measurement_time, $latest_measurement_time, $created_at, $updated_at, $limit, $offset, $sort)

Get all VariableUserSources

Get all VariableUserSources

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$variable_id = 56; // int | ID of variable
$timestamp = 56; // int | Time that this measurement occurred Uses epoch minute (epoch time divided by 60)
$earliest_measurement_time = 56; // int | Earliest measurement time
$latest_measurement_time = 56; // int | Latest measurement time
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationVariableUserSourcesGet($access_token, $variable_id, $timestamp, $earliest_measurement_time, $latest_measurement_time, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationVariableUserSourcesGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **variable_id** | [**int**](.md)| ID of variable | [optional] 
 **timestamp** | [**int**](.md)| Time that this measurement occurred Uses epoch minute (epoch time divided by 60) | [optional] 
 **earliest_measurement_time** | [**int**](.md)| Earliest measurement time | [optional] 
 **latest_measurement_time** | [**int**](.md)| Latest measurement time | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](InlineResponse2009.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v2ApplicationVotesGet**
> \Swagger\Client\Model\InlineResponse20010 v2ApplicationVotesGet($access_token, $client_id, $cause_id, $effect_id, $value, $created_at, $updated_at, $limit, $offset, $sort)

Get all Votes

Get all Votes

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. BEARER) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'BEARER');

$api_instance = new Swagger\Client\Api\ApplicationEndpointsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$client_id = "client_id_example"; // string | The ID of the client application which last created or updated this vote
$cause_id = 56; // int | ID of predictor variable
$effect_id = 56; // int | ID of outcome variable
$value = 56; // int | Value of Vote. 1 is for upvote. 0 is for downvote.  Otherwise, there is no vote.
$created_at = "created_at_example"; // string | When the record was first created. Use ISO 8601 datetime format
$updated_at = "updated_at_example"; // string | When the record was last updated. Use ISO 8601 datetime format
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by given field. If the field is prefixed with '-', it will sort in descending order.

try { 
    $result = $api_instance->v2ApplicationVotesGet($access_token, $client_id, $cause_id, $effect_id, $value, $created_at, $updated_at, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationEndpointsApi->v2ApplicationVotesGet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 
 **client_id** | **string**| The ID of the client application which last created or updated this vote | [optional] 
 **cause_id** | [**int**](.md)| ID of predictor variable | [optional] 
 **effect_id** | [**int**](.md)| ID of outcome variable | [optional] 
 **value** | [**int**](.md)| Value of Vote. 1 is for upvote. 0 is for downvote.  Otherwise, there is no vote. | [optional] 
 **created_at** | **string**| When the record was first created. Use ISO 8601 datetime format | [optional] 
 **updated_at** | **string**| When the record was last updated. Use ISO 8601 datetime format | [optional] 
 **limit** | [**int**](.md)| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] 
 **offset** | [**int**](.md)| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional] 
 **sort** | **string**| Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. | [optional] 

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](InlineResponse20010.md)

### Authorization

[oauth2](../README.md#oauth2), [internalApiKey](../README.md#internalApiKey)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
