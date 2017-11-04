# QuantiModo\Client\AnalyticsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVote**](AnalyticsApi.md#deleteVote) | **DELETE** /v3/votes/delete | Delete vote
[**getAggregatedCorrelations**](AnalyticsApi.md#getAggregatedCorrelations) | **GET** /v3/aggregatedCorrelations | Get aggregated correlations
[**getStudy**](AnalyticsApi.md#getStudy) | **GET** /v4/study | Get Study
[**getUserCorrelationExplanations**](AnalyticsApi.md#getUserCorrelationExplanations) | **GET** /v3/correlations/explanations | Get correlation explanations
[**getUserCorrelations**](AnalyticsApi.md#getUserCorrelations) | **GET** /v3/correlations | Get correlations
[**postAggregatedCorrelations**](AnalyticsApi.md#postAggregatedCorrelations) | **POST** /v3/aggregatedCorrelations | Store or Update a Correlation
[**postVote**](AnalyticsApi.md#postVote) | **POST** /v3/votes | Post or update vote


# **deleteVote**
> \QuantiModo\Client\Model\CommonResponse deleteVote($body, $user_id)

Delete vote

Delete previously posted vote

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$body = new \QuantiModo\Client\Model\VoteDelete(); // \QuantiModo\Client\Model\VoteDelete | The cause and effect variable names for the predictor vote to be deleted.
$user_id = 3.4; // float | User's id

try {
    $result = $api_instance->deleteVote($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->deleteVote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\VoteDelete**](../Model/VoteDelete.md)| The cause and effect variable names for the predictor vote to be deleted. |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAggregatedCorrelations**
> \QuantiModo\Client\Model\Correlation[] getAggregatedCorrelations($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $onset_delay, $duration_of_action)

Get aggregated correlations

Get correlations based on the anonymized aggregate data from all QuantiModo users.

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$cause_variable_name = "cause_variable_name_example"; // string | Variable name of the hypothetical cause variable.  Example: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Variable name of the hypothetical effect variable.  Example: Overall Mood
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$user_id = 3.4; // float | User's id
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$outcomes_of_interest = true; // bool | Only include correlations for which the effect is an outcome of interest for the user
$onset_delay = "onset_delay_example"; // string | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
$duration_of_action = "duration_of_action_example"; // string | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.

try {
    $result = $api_instance->getAggregatedCorrelations($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $onset_delay, $duration_of_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAggregatedCorrelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Variable name of the hypothetical cause variable.  Example: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Variable name of the hypothetical effect variable.  Example: Overall Mood | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **correlation_coefficient** | **string**| Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **outcomes_of_interest** | **bool**| Only include correlations for which the effect is an outcome of interest for the user | [optional]
 **onset_delay** | **string**| The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional]
 **duration_of_action** | **string**| The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudy**
> \QuantiModo\Client\Model\GetStudyResponse getStudy($cause_variable_name, $effect_variable_name, $app_name, $client_id, $include_charts)

Get Study

Get Study

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$cause_variable_name = "cause_variable_name_example"; // string | Variable name of the hypothetical cause variable.  Example: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Variable name of the hypothetical effect variable.  Example: Overall Mood
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client
$include_charts = true; // bool | Example: true

try {
    $result = $api_instance->getStudy($cause_variable_name, $effect_variable_name, $app_name, $client_id, $include_charts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getStudy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Variable name of the hypothetical cause variable.  Example: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Variable name of the hypothetical effect variable.  Example: Overall Mood | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **include_charts** | **bool**| Example: true | [optional]

### Return type

[**\QuantiModo\Client\Model\GetStudyResponse**](../Model/GetStudyResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCorrelationExplanations**
> \QuantiModo\Client\Model\Correlation[] getUserCorrelationExplanations($cause_variable_name, $effect_variable_name)

Get correlation explanations

Get explanations of  correlations based on data from a single user.

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$cause_variable_name = "cause_variable_name_example"; // string | Variable name of the hypothetical cause variable.  Example: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Variable name of the hypothetical effect variable.  Example: Overall Mood

try {
    $result = $api_instance->getUserCorrelationExplanations($cause_variable_name, $effect_variable_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getUserCorrelationExplanations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Variable name of the hypothetical cause variable.  Example: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Variable name of the hypothetical effect variable.  Example: Overall Mood | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCorrelations**
> \QuantiModo\Client\Model\GetCorrelationsResponse getUserCorrelations($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $onset_delay, $duration_of_action, $updated_at, $outcomes_of_interest, $app_name, $client_id, $fallback_to_study_for_cause_and_effect, $fallback_to_aggregate_correlations)

Get correlations

Get correlations based on data from a single user.

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$cause_variable_name = "cause_variable_name_example"; // string | Variable name of the hypothetical cause variable.  Example: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Variable name of the hypothetical effect variable.  Example: Overall Mood
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$user_id = 3.4; // float | User's id
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$onset_delay = "onset_delay_example"; // string | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
$duration_of_action = "duration_of_action_example"; // string | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$outcomes_of_interest = true; // bool | Only include correlations for which the effect is an outcome of interest for the user
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client
$fallback_to_study_for_cause_and_effect = true; // bool | Example: 1
$fallback_to_aggregate_correlations = true; // bool | Example: true

try {
    $result = $api_instance->getUserCorrelations($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $onset_delay, $duration_of_action, $updated_at, $outcomes_of_interest, $app_name, $client_id, $fallback_to_study_for_cause_and_effect, $fallback_to_aggregate_correlations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getUserCorrelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Variable name of the hypothetical cause variable.  Example: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Variable name of the hypothetical effect variable.  Example: Overall Mood | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **correlation_coefficient** | **string**| Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action | [optional]
 **onset_delay** | **string**| The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional]
 **duration_of_action** | **string**| The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **outcomes_of_interest** | **bool**| Only include correlations for which the effect is an outcome of interest for the user | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **fallback_to_study_for_cause_and_effect** | **bool**| Example: 1 | [optional]
 **fallback_to_aggregate_correlations** | **bool**| Example: true | [optional]

### Return type

[**\QuantiModo\Client\Model\GetCorrelationsResponse**](../Model/GetCorrelationsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAggregatedCorrelations**
> postAggregatedCorrelations($body, $user_id)

Store or Update a Correlation

Add correlation

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$body = new \QuantiModo\Client\Model\PostCorrelation(); // \QuantiModo\Client\Model\PostCorrelation | Provides correlation data
$user_id = 3.4; // float | User's id

try {
    $api_instance->postAggregatedCorrelations($body, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAggregatedCorrelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\PostCorrelation**](../Model/PostCorrelation.md)| Provides correlation data |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVote**
> \QuantiModo\Client\Model\CommonResponse postVote($body, $user_id)

Post or update vote

This is to enable users to indicate their opinion on the plausibility of a causal relationship between a treatment and outcome. We incorporates crowd-sourced plausibility estimations into our algorithm. This is done allowing user to indicate their view of the plausibility of each relationship with thumbs up/down buttons placed next to each prediction.

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

$api_instance = new QuantiModo\Client\Api\AnalyticsApi();
$body = new \QuantiModo\Client\Model\Vote(); // \QuantiModo\Client\Model\Vote | Contains the cause variable, effect variable, and vote value.
$user_id = 3.4; // float | User's id

try {
    $result = $api_instance->postVote($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postVote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\Vote**](../Model/Vote.md)| Contains the cause variable, effect variable, and vote value. |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

