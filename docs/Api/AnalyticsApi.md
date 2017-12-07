# QuantiModo\Client\AnalyticsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVote**](AnalyticsApi.md#deleteVote) | **DELETE** /v3/votes/delete | Delete vote
[**getCorrelationExplanations**](AnalyticsApi.md#getCorrelationExplanations) | **GET** /v3/correlations/explanations | Get correlation explanations
[**getCorrelations**](AnalyticsApi.md#getCorrelations) | **GET** /v3/correlations | Get correlations
[**getStudy**](AnalyticsApi.md#getStudy) | **GET** /v4/study | Get Study
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

# **getCorrelationExplanations**
> \QuantiModo\Client\Model\Correlation[] getCorrelationExplanations($cause_variable_name, $effect_variable_name)

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
    $result = $api_instance->getCorrelationExplanations($cause_variable_name, $effect_variable_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getCorrelationExplanations: ', $e->getMessage(), PHP_EOL;
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

# **getCorrelations**
> \QuantiModo\Client\Model\GetCorrelationsResponse getCorrelations($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only)

Get correlations

Get a list of correlations that can be used to display top predictors of a given outcome like mood, for instance.

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
$client_id = "client_id_example"; // string | Example: oauth_test_client
$common_only = true; // bool | Return only public, anonymized and aggregated population data instead of user-specific variables

try {
    $result = $api_instance->getCorrelations($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $common_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getCorrelations: ', $e->getMessage(), PHP_EOL;
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
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **common_only** | **bool**| Return only public, anonymized and aggregated population data instead of user-specific variables | [optional]

### Return type

[**\QuantiModo\Client\Model\GetCorrelationsResponse**](../Model/GetCorrelationsResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudy**
> \QuantiModo\Client\Model\Study getStudy($cause_variable_name, $effect_variable_name, $user_id, $app_name, $client_id, $include_charts)

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
$user_id = 3.4; // float | User's id
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client
$include_charts = true; // bool | Example: true

try {
    $result = $api_instance->getStudy($cause_variable_name, $effect_variable_name, $user_id, $app_name, $client_id, $include_charts);
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
 **user_id** | **float**| User&#39;s id | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **include_charts** | **bool**| Example: true | [optional]

### Return type

[**\QuantiModo\Client\Model\Study**](../Model/Study.md)

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

