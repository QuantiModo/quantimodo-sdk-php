# QuantiModo\Client\StudiesApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStudy**](StudiesApi.md#createStudy) | **POST** /v3/study/create | Create a Study
[**deleteVote**](StudiesApi.md#deleteVote) | **DELETE** /v3/votes/delete | Delete vote
[**getOpenStudies**](StudiesApi.md#getOpenStudies) | **GET** /v3/studies/open | These are open studies that anyone can join
[**getStudies**](StudiesApi.md#getStudies) | **GET** /v3/studies | Get Personal or Population Studies
[**getStudiesCreated**](StudiesApi.md#getStudiesCreated) | **GET** /v3/studies/created | Get studies you have created
[**getStudiesJoined**](StudiesApi.md#getStudiesJoined) | **GET** /v3/studies/joined | Studies You Have Joined
[**getStudy**](StudiesApi.md#getStudy) | **GET** /v4/study | Get Study
[**joinStudy**](StudiesApi.md#joinStudy) | **POST** /v3/study/join | Join a Study
[**postVote**](StudiesApi.md#postVote) | **POST** /v3/votes | Post or update vote
[**publishStudy**](StudiesApi.md#publishStudy) | **POST** /v3/study/publish | Publish Your Study


# **createStudy**
> \QuantiModo\Client\Model\PostStudyCreateResponse createStudy($body, $client_id, $platform)

Create a Study

Create an individual, group, or population study examining the relationship between a predictor and outcome variable. You will be given a study id which you can invite participants to join and share their measurements for the specified variables.

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\StudyCreationBody(); // \QuantiModo\Client\Model\StudyCreationBody | Details about the study you want to create
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->createStudy($body, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->createStudy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\StudyCreationBody**](../Model/StudyCreationBody.md)| Details about the study you want to create |
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\PostStudyCreateResponse**](../Model/PostStudyCreateResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVote**
> \QuantiModo\Client\Model\CommonResponse deleteVote($body, $user_id)

Delete vote

Delete previously posted vote

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\VoteDelete(); // \QuantiModo\Client\Model\VoteDelete | The cause and effect variable names for the predictor vote to be deleted.
$user_id = 8.14; // float | User's id

try {
    $result = $apiInstance->deleteVote($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->deleteVote: ', $e->getMessage(), PHP_EOL;
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

# **getOpenStudies**
> \QuantiModo\Client\Model\GetStudiesResponse getOpenStudies($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id)

These are open studies that anyone can join

These are studies that anyone can join and share their data for the predictor and outcome variables of interest.

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$user_id = 8.14; // float | User's id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$include_charts = true; // bool | Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided.
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$recalculate = true; // bool | Recalculate instead of using cached analysis
$study_id = "study_id_example"; // string | Client id for the study you want

try {
    $result = $apiInstance->getOpenStudies($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getOpenStudies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **include_charts** | **bool**| Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **recalculate** | **bool**| Recalculate instead of using cached analysis | [optional]
 **study_id** | **string**| Client id for the study you want | [optional]

### Return type

[**\QuantiModo\Client\Model\GetStudiesResponse**](../Model/GetStudiesResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudies**
> \QuantiModo\Client\Model\GetStudiesResponse getStudies($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id, $sort, $limit, $offset, $correlation_coefficient, $updated_at, $outcomes_of_interest, $principal_investigator_user_id, $open, $joined, $created, $population)

Get Personal or Population Studies

If you have enough data, this will be a list of your personal studies, otherwise it will consist of aggregated population studies.

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$user_id = 8.14; // float | User's id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$include_charts = true; // bool | Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided.
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$recalculate = true; // bool | Recalculate instead of using cached analysis
$study_id = "study_id_example"; // string | Client id for the study you want
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$outcomes_of_interest = true; // bool | Only include correlations for which the effect is an outcome of interest for the user
$principal_investigator_user_id = 56; // int | These are studies created by a specific principal investigator
$open = true; // bool | These are studies that anyone can join
$joined = true; // bool | These are studies that you have joined
$created = true; // bool | These are studies that you have created
$population = true; // bool | These are studies based on the entire population of users that have shared their data

try {
    $result = $apiInstance->getStudies($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id, $sort, $limit, $offset, $correlation_coefficient, $updated_at, $outcomes_of_interest, $principal_investigator_user_id, $open, $joined, $created, $population);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getStudies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **include_charts** | **bool**| Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **recalculate** | **bool**| Recalculate instead of using cached analysis | [optional]
 **study_id** | **string**| Client id for the study you want | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **correlation_coefficient** | **string**| Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **outcomes_of_interest** | **bool**| Only include correlations for which the effect is an outcome of interest for the user | [optional]
 **principal_investigator_user_id** | **int**| These are studies created by a specific principal investigator | [optional]
 **open** | **bool**| These are studies that anyone can join | [optional]
 **joined** | **bool**| These are studies that you have joined | [optional]
 **created** | **bool**| These are studies that you have created | [optional]
 **population** | **bool**| These are studies based on the entire population of users that have shared their data | [optional]

### Return type

[**\QuantiModo\Client\Model\GetStudiesResponse**](../Model/GetStudiesResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudiesCreated**
> \QuantiModo\Client\Model\GetStudiesResponse getStudiesCreated($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $updated_at, $client_id, $platform)

Get studies you have created

These are studies that you have created.

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$user_id = 8.14; // float | User's id
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getStudiesCreated($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $updated_at, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getStudiesCreated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\GetStudiesResponse**](../Model/GetStudiesResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudiesJoined**
> \QuantiModo\Client\Model\GetStudiesResponse getStudiesJoined($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $platform)

Studies You Have Joined

These are studies that you are currently sharing your data with.

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$user_id = 8.14; // float | User's id
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local.
$outcomes_of_interest = true; // bool | Only include correlations for which the effect is an outcome of interest for the user
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->getStudiesJoined($cause_variable_name, $effect_variable_name, $sort, $limit, $offset, $user_id, $correlation_coefficient, $updated_at, $outcomes_of_interest, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getStudiesJoined: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **correlation_coefficient** | **string**| Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 YYYY-MM-DDThh:mm:ss datetime format. Time zone should be UTC and not local. | [optional]
 **outcomes_of_interest** | **bool**| Only include correlations for which the effect is an outcome of interest for the user | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\GetStudiesResponse**](../Model/GetStudiesResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudy**
> \QuantiModo\Client\Model\Study getStudy($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id)

Get Study

Get Study

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$user_id = 8.14; // float | User's id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$include_charts = true; // bool | Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided.
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$recalculate = true; // bool | Recalculate instead of using cached analysis
$study_id = "study_id_example"; // string | Client id for the study you want

try {
    $result = $apiInstance->getStudy($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getStudy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **include_charts** | **bool**| Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **recalculate** | **bool**| Recalculate instead of using cached analysis | [optional]
 **study_id** | **string**| Client id for the study you want | [optional]

### Return type

[**\QuantiModo\Client\Model\Study**](../Model/Study.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **joinStudy**
> \QuantiModo\Client\Model\StudyJoinResponse joinStudy($study_id, $cause_variable_name, $effect_variable_name, $user_id, $client_id, $platform)

Join a Study

Anonymously share measurements for specified variables

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$study_id = "study_id_example"; // string | Client id for the study you want
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$user_id = 8.14; // float | User's id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$platform = "platform_example"; // string | Ex: chrome, android, ios, web

try {
    $result = $apiInstance->joinStudy($study_id, $cause_variable_name, $effect_variable_name, $user_id, $client_id, $platform);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->joinStudy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_id** | **string**| Client id for the study you want | [optional]
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]

### Return type

[**\QuantiModo\Client\Model\StudyJoinResponse**](../Model/StudyJoinResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVote**
> \QuantiModo\Client\Model\CommonResponse postVote($body, $user_id)

Post or update vote

I am really good at finding correlations and even compensating for various onset delays and durations of action. However, you are much better than me at knowing if there's a way that a given factor could plausibly influence an outcome. You can help me learn and get better at my predictions by pressing the thumbs down button for relationships that you think are coincidences and thumbs up once that make logic sense.

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \QuantiModo\Client\Model\Vote(); // \QuantiModo\Client\Model\Vote | Contains the cause variable, effect variable, and vote value.
$user_id = 8.14; // float | User's id

try {
    $result = $apiInstance->postVote($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->postVote: ', $e->getMessage(), PHP_EOL;
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

# **publishStudy**
> \QuantiModo\Client\Model\PostStudyPublishResponse publishStudy($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id)

Publish Your Study

Make a study and all related measurements publicly visible by anyone

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

$apiInstance = new QuantiModo\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cause_variable_name = "cause_variable_name_example"; // string | Name of the hypothetical predictor variable.  Ex: Sleep Duration
$effect_variable_name = "effect_variable_name_example"; // string | Name of the hypothetical outcome variable.  Ex: Overall Mood
$user_id = 8.14; // float | User's id
$client_id = "client_id_example"; // string | Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do
$include_charts = true; // bool | Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided.
$platform = "platform_example"; // string | Ex: chrome, android, ios, web
$recalculate = true; // bool | Recalculate instead of using cached analysis
$study_id = "study_id_example"; // string | Client id for the study you want

try {
    $result = $apiInstance->publishStudy($cause_variable_name, $effect_variable_name, $user_id, $client_id, $include_charts, $platform, $recalculate, $study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->publishStudy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause_variable_name** | **string**| Name of the hypothetical predictor variable.  Ex: Sleep Duration | [optional]
 **effect_variable_name** | **string**| Name of the hypothetical outcome variable.  Ex: Overall Mood | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **client_id** | **string**| Your QuantiModo client id can be obtained by creating an app at https://builder.quantimo.do | [optional]
 **include_charts** | **bool**| Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. | [optional]
 **platform** | **string**| Ex: chrome, android, ios, web | [optional]
 **recalculate** | **bool**| Recalculate instead of using cached analysis | [optional]
 **study_id** | **string**| Client id for the study you want | [optional]

### Return type

[**\QuantiModo\Client\Model\PostStudyPublishResponse**](../Model/PostStudyPublishResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

