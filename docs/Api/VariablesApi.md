# QuantiModo\Client\VariablesApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserTag**](VariablesApi.md#deleteUserTag) | **DELETE** /v3/userTags/delete | Delete user tag or ingredient
[**deleteUserVariable**](VariablesApi.md#deleteUserVariable) | **DELETE** /v3/userVariables/delete | Delete All Measurements For Variable
[**getVariableCategories**](VariablesApi.md#getVariableCategories) | **GET** /v3/variableCategories | Variable categories
[**getVariables**](VariablesApi.md#getVariables) | **GET** /v3/variables | Get variables along with related user-specific analysis settings and statistics
[**postUserTags**](VariablesApi.md#postUserTags) | **POST** /v3/userTags | Post or update user tags or ingredients
[**postUserVariables**](VariablesApi.md#postUserVariables) | **POST** /v3/variables | Update User Settings for a Variable
[**resetUserVariableSettings**](VariablesApi.md#resetUserVariableSettings) | **POST** /v3/userVariables/reset | Reset user settings for a variable to defaults


# **deleteUserTag**
> \QuantiModo\Client\Model\CommonResponse deleteUserTag($tagged_variable_id, $tag_variable_id)

Delete user tag or ingredient

Delete previously created user tags or ingredients.

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$tagged_variable_id = 56; // int | This is the id of the variable being tagged with an ingredient or something.
$tag_variable_id = 56; // int | This is the id of the ingredient variable whose value is determined based on the value of the tagged variable.

try {
    $result = $api_instance->deleteUserTag($tagged_variable_id, $tag_variable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->deleteUserTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagged_variable_id** | **int**| This is the id of the variable being tagged with an ingredient or something. |
 **tag_variable_id** | **int**| This is the id of the ingredient variable whose value is determined based on the value of the tagged variable. |

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserVariable**
> deleteUserVariable($variable_id)

Delete All Measurements For Variable

Users can delete all of their measurements for a variable

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$variable_id = new \QuantiModo\Client\Model\UserVariableDelete(); // \QuantiModo\Client\Model\UserVariableDelete | Id of the variable whose measurements should be deleted

try {
    $api_instance->deleteUserVariable($variable_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->deleteUserVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_id** | [**\QuantiModo\Client\Model\UserVariableDelete**](../Model/UserVariableDelete.md)| Id of the variable whose measurements should be deleted |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariableCategories**
> \QuantiModo\Client\Model\VariableCategory[] getVariableCategories()

Variable categories

The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work.

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();

try {
    $result = $api_instance->getVariableCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->getVariableCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QuantiModo\Client\Model\VariableCategory[]**](../Model/VariableCategory.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariables**
> \QuantiModo\Client\Model\Variable[] getVariables($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $app_name, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $common_only, $user_only)

Get variables along with related user-specific analysis settings and statistics

Get variables. If the user has specified variable settings, these are provided instead of the common variable defaults.

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$include_charts = true; // bool | Return Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided.
$number_of_raw_measurements = "number_of_raw_measurements_example"; // string | Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity.
$user_id = 3.4; // float | User's id
$variable_category_name = "variable_category_name_example"; // string | Limit results to a specific variable category
$name = "name_example"; // string | Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain `Mood`, the following query should be used: ?variableName=%Mood%
$updated_at = "updated_at_example"; // string | When the record was last updated. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss` datetime format. Time zone should be UTC and not local.
$source_name = "source_name_example"; // string | ID of the source you want measurements for (supports exact name match only)
$earliest_measurement_time = "earliest_measurement_time_example"; // string | Excluded records with measurement times earlier than this value. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss`  datetime format. Time zone should be UTC and not local.
$latest_measurement_time = "latest_measurement_time_example"; // string | Excluded records with measurement times later than this value. Use UTC ISO 8601 `YYYY-MM-DDThh:mm:ss`  datetime format. Time zone should be UTC and not local.
$id = 56; // int | Common variable id
$last_source_name = "last_source_name_example"; // string | Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here
$limit = 100; // int | The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.
$offset = 56; // int | OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned.
$sort = "sort_example"; // string | Sort by one of the listed field names. If the field name is prefixed with `-`, it will sort in descending order.
$include_public = true; // bool | Example: true
$manual_tracking = true; // bool | Example:
$app_name = "app_name_example"; // string | Example: MoodiModo
$client_id = "client_id_example"; // string | Example: oauth_test_client
$upc = "upc_example"; // string | UPC or other barcode scan result
$effect_or_cause = "effect_or_cause_example"; // string | Example:
$public_effect_or_cause = "public_effect_or_cause_example"; // string | Example:
$exact_match = true; // bool | Example:
$variable_category_id = 56; // int | Example: 13
$include_private = true; // bool | Example:
$search_phrase = "search_phrase_example"; // string | Example: %Body Fat%
$synonyms = "synonyms_example"; // string | Example: %McDonalds hotcake%
$tagged_variable_id = 56; // int | Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar) .  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient).
$tag_variable_id = 56; // int | Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop) .  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient).
$join_variable_id = 56; // int | Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId
$parent_user_tag_variable_id = 56; // int | Id of the parent variable (i.e. Fruit)  you would like to get eligible child variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child of variable Fruit could be Apple
$child_user_tag_variable_id = 56; // int | Id of the child variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child of variable Fruit could be Apple
$common_only = true; // bool | Return only public and aggregated common variable data instead of user-specific variables
$user_only = true; // bool | Return only user-specific variables and data, excluding common aggregated variable data

try {
    $result = $api_instance->getVariables($include_charts, $number_of_raw_measurements, $user_id, $variable_category_name, $name, $updated_at, $source_name, $earliest_measurement_time, $latest_measurement_time, $id, $last_source_name, $limit, $offset, $sort, $include_public, $manual_tracking, $app_name, $client_id, $upc, $effect_or_cause, $public_effect_or_cause, $exact_match, $variable_category_id, $include_private, $search_phrase, $synonyms, $tagged_variable_id, $tag_variable_id, $join_variable_id, $parent_user_tag_variable_id, $child_user_tag_variable_id, $common_only, $user_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->getVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_charts** | **bool**| Return Highcharts configs that can be used if you have highcharts.js included on the page.  This only works if the id or name query parameter is also provided. | [optional]
 **number_of_raw_measurements** | **string**| Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. | [optional]
 **user_id** | **float**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Limit results to a specific variable category | [optional]
 **name** | **string**| Name of the variable. To get results matching a substring, add % as a wildcard as the first and/or last character of a query string parameter. In order to get variables that contain &#x60;Mood&#x60;, the following query should be used: ?variableName&#x3D;%Mood% | [optional]
 **updated_at** | **string**| When the record was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60; datetime format. Time zone should be UTC and not local. | [optional]
 **source_name** | **string**| ID of the source you want measurements for (supports exact name match only) | [optional]
 **earliest_measurement_time** | **string**| Excluded records with measurement times earlier than this value. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60;  datetime format. Time zone should be UTC and not local. | [optional]
 **latest_measurement_time** | **string**| Excluded records with measurement times later than this value. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60;  datetime format. Time zone should be UTC and not local. | [optional]
 **id** | **int**| Common variable id | [optional]
 **last_source_name** | **string**| Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if youhave 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. | [optional] [default to 100]
 **offset** | **int**| OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause.If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. | [optional]
 **sort** | **string**| Sort by one of the listed field names. If the field name is prefixed with &#x60;-&#x60;, it will sort in descending order. | [optional]
 **include_public** | **bool**| Example: true | [optional]
 **manual_tracking** | **bool**| Example: | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **upc** | **string**| UPC or other barcode scan result | [optional]
 **effect_or_cause** | **string**| Example: | [optional]
 **public_effect_or_cause** | **string**| Example: | [optional]
 **exact_match** | **bool**| Example: | [optional]
 **variable_category_id** | **int**| Example: 13 | [optional]
 **include_private** | **bool**| Example: | [optional]
 **search_phrase** | **string**| Example: %Body Fat% | [optional]
 **synonyms** | **string**| Example: %McDonalds hotcake% | [optional]
 **tagged_variable_id** | **int**| Id of the tagged variable (i.e. Lollipop) you would like to get variables it can be tagged with (i.e. Sugar) .  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). | [optional]
 **tag_variable_id** | **int**| Id of the tag variable (i.e. Sugar) you would like to get variables it can be tagged to (i.e. Lollipop) .  Converted measurements of the tagged variable are included in analysis of the tag variable (i.e. ingredient). | [optional]
 **join_variable_id** | **int**| Id of the variable you would like to get variables that can be joined to.  This is used to merge duplicate variables.   If joinVariableId is specified, this returns only variables eligible to be joined to the variable specified by the joinVariableId | [optional]
 **parent_user_tag_variable_id** | **int**| Id of the parent variable (i.e. Fruit)  you would like to get eligible child variables (i.e. Apple) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child of variable Fruit could be Apple | [optional]
 **child_user_tag_variable_id** | **int**| Id of the child variable (i.e. Apple) you would like to get eligible parent variables (i.e. Fruit) for.  Child variable measurements will be included in analysis of the parent variable.  For instance, a child of variable Fruit could be Apple | [optional]
 **common_only** | **bool**| Return only public and aggregated common variable data instead of user-specific variables | [optional]
 **user_only** | **bool**| Return only user-specific variables and data, excluding common aggregated variable data | [optional]

### Return type

[**\QuantiModo\Client\Model\Variable[]**](../Model/Variable.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserTags**
> \QuantiModo\Client\Model\CommonResponse postUserTags($body, $user_id)

Post or update user tags or ingredients

This endpoint allows users to tag foods with their ingredients.  This information will then be used to infer the user intake of the different ingredients by just entering the foods. The inferred intake levels will then be used to determine the effects of different nutrients on the user during analysis.

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$body = new \QuantiModo\Client\Model\UserTag(); // \QuantiModo\Client\Model\UserTag | Contains the new user tag data
$user_id = 3.4; // float | User's id

try {
    $result = $api_instance->postUserTags($body, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->postUserTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\UserTag**](../Model/UserTag.md)| Contains the new user tag data |
 **user_id** | **float**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserVariables**
> \QuantiModo\Client\Model\CommonResponse postUserVariables($user_variables, $include_private, $client_id, $include_public, $search_phrase, $app_name, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms)

Update User Settings for a Variable

Users can change the parameters used in analysis of that variable such as the expected duration of action for a variable to have an effect, the estimated delay before the onset of action. In order to filter out erroneous data, they are able to set the maximum and minimum reasonable daily values for a variable.

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$user_variables = array(new \QuantiModo\Client\Model\Variable()); // \QuantiModo\Client\Model\Variable[] | Variable user settings data
$include_private = true; // bool | Example:
$client_id = "client_id_example"; // string | Example: oauth_test_client
$include_public = true; // bool | Example: true
$search_phrase = "search_phrase_example"; // string | Example: %Body Fat%
$app_name = "app_name_example"; // string | Example: MoodiModo
$exact_match = true; // bool | Example:
$manual_tracking = true; // bool | Example:
$variable_category_name = "variable_category_name_example"; // string | Limit results to a specific variable category
$variable_category_id = 56; // int | Example: 13
$synonyms = "synonyms_example"; // string | Example: %McDonalds hotcake%

try {
    $result = $api_instance->postUserVariables($user_variables, $include_private, $client_id, $include_public, $search_phrase, $app_name, $exact_match, $manual_tracking, $variable_category_name, $variable_category_id, $synonyms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->postUserVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_variables** | [**\QuantiModo\Client\Model\Variable[]**](../Model/Variable.md)| Variable user settings data |
 **include_private** | **bool**| Example: | [optional]
 **client_id** | **string**| Example: oauth_test_client | [optional]
 **include_public** | **bool**| Example: true | [optional]
 **search_phrase** | **string**| Example: %Body Fat% | [optional]
 **app_name** | **string**| Example: MoodiModo | [optional]
 **exact_match** | **bool**| Example: | [optional]
 **manual_tracking** | **bool**| Example: | [optional]
 **variable_category_name** | **string**| Limit results to a specific variable category | [optional]
 **variable_category_id** | **int**| Example: 13 | [optional]
 **synonyms** | **string**| Example: %McDonalds hotcake% | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetUserVariableSettings**
> resetUserVariableSettings($variable_id)

Reset user settings for a variable to defaults

Reset user settings for a variable to defaults

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

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$variable_id = new \QuantiModo\Client\Model\UserVariableDelete(); // \QuantiModo\Client\Model\UserVariableDelete | Id of the variable whose measurements should be deleted

try {
    $api_instance->resetUserVariableSettings($variable_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->resetUserVariableSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_id** | [**\QuantiModo\Client\Model\UserVariableDelete**](../Model/UserVariableDelete.md)| Id of the variable whose measurements should be deleted |

### Return type

void (empty response body)

### Authorization

[access_token](../../README.md#access_token), [quantimodo_oauth2](../../README.md#quantimodo_oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

