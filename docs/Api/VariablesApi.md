# QuantiModo\Client\VariablesApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PublicVariablesGet**](VariablesApi.md#v1PublicVariablesGet) | **GET** /v1/public/variables | Get public variables
[**v1PublicVariablesSearchSearchGet**](VariablesApi.md#v1PublicVariablesSearchSearchGet) | **GET** /v1/public/variables/search/{search} | Get top 5 PUBLIC variables with the most correlations
[**v1UserVariablesDeletePost**](VariablesApi.md#v1UserVariablesDeletePost) | **POST** /v1/userVariables/delete | Delete All Measurements For Variable
[**v1UserVariablesPost**](VariablesApi.md#v1UserVariablesPost) | **POST** /v1/userVariables | Update User Settings for a Variable
[**v1UserVariablesResetPost**](VariablesApi.md#v1UserVariablesResetPost) | **POST** /v1/userVariables/reset | Reset user settings for a variable to defaults
[**v1VariableCategoriesGet**](VariablesApi.md#v1VariableCategoriesGet) | **GET** /v1/variableCategories | Variable categories
[**v1VariablesGet**](VariablesApi.md#v1VariablesGet) | **GET** /v1/variables | Get variables with user&#39;s settings
[**v1VariablesPost**](VariablesApi.md#v1VariablesPost) | **POST** /v1/variables | Create Variables
[**v1VariablesSearchSearchGet**](VariablesApi.md#v1VariablesSearchSearchGet) | **GET** /v1/variables/search/{search} | Get variables by search query
[**v1VariablesVariableNameGet**](VariablesApi.md#v1VariablesVariableNameGet) | **GET** /v1/variables/{variableName} | Get info about a variable


# **v1PublicVariablesGet**
> \QuantiModo\Client\Model\Variable v1PublicVariablesGet($access_token, $user_id, $id, $user_id2, $category, $name, $last_updated, $source, $latest_measurement_time, $number_of_raw_measurements, $last_source, $limit, $offset, $sort)

Get public variables

This endpoint retrieves an array of all public variables. Public variables are things like foods, medications, symptoms, conditions, and anything not unique to a particular user. For instance, a telephone number or name would not be a public variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$id = 56; // int | Common variable id
$user_id2 = 56; // int | User id
$category = "category_example"; // string | Filter data by category
$name = "name_example"; // string | Original name of the variable (supports exact name match only)
$last_updated = "last_updated_example"; // string | Filter by the last time any of the properties of the variable were changed. Uses UTC format \"YYYY-MM-DDThh:mm:ss\"
$source = "source_example"; // string | The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here
$latest_measurement_time = "latest_measurement_time_example"; // string | Filter variables based on the last time a measurement for them was created or updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"
$number_of_raw_measurements = "number_of_raw_measurements_example"; // string | Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity.
$last_source = "last_source_example"; // string | Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only)
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1PublicVariablesGet($access_token, $user_id, $id, $user_id2, $category, $name, $last_updated, $source, $latest_measurement_time, $number_of_raw_measurements, $last_source, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1PublicVariablesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]
 **id** | **int**| Common variable id | [optional]
 **user_id2** | **int**| User id | [optional]
 **category** | **string**| Filter data by category | [optional]
 **name** | **string**| Original name of the variable (supports exact name match only) | [optional]
 **last_updated** | **string**| Filter by the last time any of the properties of the variable were changed. Uses UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional]
 **source** | **string**| The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here | [optional]
 **latest_measurement_time** | **string**| Filter variables based on the last time a measurement for them was created or updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional]
 **number_of_raw_measurements** | **string**| Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. | [optional]
 **last_source** | **string**| Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only) | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\Variable**](../Model/Variable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PublicVariablesSearchSearchGet**
> \QuantiModo\Client\Model\Variable v1PublicVariablesSearchSearchGet($search, $access_token, $user_id, $variable_category_name, $source, $effect_or_cause, $public_effect_or_cause, $limit, $offset, $sort)

Get top 5 PUBLIC variables with the most correlations

Get top 5 PUBLIC variables with the most correlations containing the entered search characters. For example, search for 'mood' as an effect. Since 'Overall Mood' has a lot of correlations with other variables, it should be in the autocomplete list.<br>Supported filter parameters:<br><ul><li><b>category</b> - Category of Variable</li></ul><br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$search = "search_example"; // string | Search query can be some fraction of a variable name.
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$variable_category_name = "variable_category_name_example"; // string | Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work.
$source = "source_example"; // string | Specify a data source name to only return variables from a specific data source.
$effect_or_cause = "effect_or_cause_example"; // string | Indicate if you only want variables that have user correlations.  Possible values are effect and cause.
$public_effect_or_cause = "public_effect_or_cause_example"; // string | Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause.
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1PublicVariablesSearchSearchGet($search, $access_token, $user_id, $variable_category_name, $source, $effect_or_cause, $public_effect_or_cause, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1PublicVariablesSearchSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search query can be some fraction of a variable name. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. | [optional]
 **source** | **string**| Specify a data source name to only return variables from a specific data source. | [optional]
 **effect_or_cause** | **string**| Indicate if you only want variables that have user correlations.  Possible values are effect and cause. | [optional]
 **public_effect_or_cause** | **string**| Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\Variable**](../Model/Variable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserVariablesDeletePost**
> v1UserVariablesDeletePost($variable_id)

Delete All Measurements For Variable

Users can delete all of their measurements for a variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$variable_id = new \QuantiModo\Client\Model\UserVariableDelete(); // \QuantiModo\Client\Model\UserVariableDelete | Id of the variable whose measurements should be deleted

try {
    $api_instance->v1UserVariablesDeletePost($variable_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1UserVariablesDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_id** | [**\QuantiModo\Client\Model\UserVariableDelete**](../Model/\QuantiModo\Client\Model\UserVariableDelete.md)| Id of the variable whose measurements should be deleted |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserVariablesPost**
> v1UserVariablesPost($user_variables)

Update User Settings for a Variable

Users can change the parameters used in analysis of that variable such as the expected duration of action for a variable to have an effect, the estimated delay before the onset of action. In order to filter out erroneous data, they are able to set the maximum and minimum reasonable daily values for a variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$user_variables = new \QuantiModo\Client\Model\UserVariables(); // \QuantiModo\Client\Model\UserVariables | Variable user settings data

try {
    $api_instance->v1UserVariablesPost($user_variables);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1UserVariablesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_variables** | [**\QuantiModo\Client\Model\UserVariables**](../Model/\QuantiModo\Client\Model\UserVariables.md)| Variable user settings data |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserVariablesResetPost**
> v1UserVariablesResetPost($variable_id)

Reset user settings for a variable to defaults

Reset user settings for a variable to defaults

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$variable_id = new \QuantiModo\Client\Model\UserVariableDelete(); // \QuantiModo\Client\Model\UserVariableDelete | Id of the variable that should be reset

try {
    $api_instance->v1UserVariablesResetPost($variable_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1UserVariablesResetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_id** | [**\QuantiModo\Client\Model\UserVariableDelete**](../Model/\QuantiModo\Client\Model\UserVariableDelete.md)| Id of the variable that should be reset |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariableCategoriesGet**
> \QuantiModo\Client\Model\VariableCategory[] v1VariableCategoriesGet()

Variable categories

The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();

try {
    $result = $api_instance->v1VariableCategoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1VariableCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QuantiModo\Client\Model\VariableCategory[]**](../Model/VariableCategory.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesGet**
> \QuantiModo\Client\Model\Variable v1VariablesGet($access_token, $user_id, $id, $user_id2, $category, $name, $last_updated, $source, $latest_measurement_time, $number_of_raw_measurements, $last_source, $limit, $offset, $sort)

Get variables with user's settings

Get variables for which the user has measurements. If the user has specified variable settings, these are provided instead of the common variable defaults.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure HTTP basic authorization: basicAuth
QuantiModo\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
QuantiModo\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$id = 56; // int | Common variable id
$user_id2 = 56; // int | User id
$category = "category_example"; // string | Filter data by category
$name = "name_example"; // string | Original name of the variable (supports exact name match only)
$last_updated = "last_updated_example"; // string | Filter by the last time any of the properties of the variable were changed. Uses UTC format \"YYYY-MM-DDThh:mm:ss\"
$source = "source_example"; // string | The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here
$latest_measurement_time = "latest_measurement_time_example"; // string | Filter variables based on the last time a measurement for them was created or updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"
$number_of_raw_measurements = "number_of_raw_measurements_example"; // string | Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity.
$last_source = "last_source_example"; // string | Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only)
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1VariablesGet($access_token, $user_id, $id, $user_id2, $category, $name, $last_updated, $source, $latest_measurement_time, $number_of_raw_measurements, $last_source, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1VariablesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]
 **id** | **int**| Common variable id | [optional]
 **user_id2** | **int**| User id | [optional]
 **category** | **string**| Filter data by category | [optional]
 **name** | **string**| Original name of the variable (supports exact name match only) | [optional]
 **last_updated** | **string**| Filter by the last time any of the properties of the variable were changed. Uses UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional]
 **source** | **string**| The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here | [optional]
 **latest_measurement_time** | **string**| Filter variables based on the last time a measurement for them was created or updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional]
 **number_of_raw_measurements** | **string**| Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. | [optional]
 **last_source** | **string**| Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only) | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\Variable**](../Model/Variable.md)

### Authorization

[oauth2](../../README.md#oauth2), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesPost**
> v1VariablesPost($body, $access_token, $user_id)

Create Variables

Allows the client to create a new variable in the `variables` table.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$body = new \QuantiModo\Client\Model\VariablesNew(); // \QuantiModo\Client\Model\VariablesNew | Original name for the variable.
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id

try {
    $api_instance->v1VariablesPost($body, $access_token, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1VariablesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\VariablesNew**](../Model/\QuantiModo\Client\Model\VariablesNew.md)| Original name for the variable. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesSearchSearchGet**
> \QuantiModo\Client\Model\Variable[] v1VariablesSearchSearchGet($search, $access_token, $user_id, $variable_category_name, $include_public, $manual_tracking, $source, $effect_or_cause, $public_effect_or_cause, $limit, $offset)

Get variables by search query

Get variables containing the search characters for which the currently logged in user has measurements. Used to provide auto-complete function in variable search boxes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$search = "search_example"; // string | Search query which may be an entire variable name or a fragment of one.
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$variable_category_name = "variable_category_name_example"; // string | Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work.
$include_public = true; // bool | Set to true if you would like to include public variables when no user variables are found.
$manual_tracking = true; // bool | Set to true if you would like to exlude variables like apps and website names.
$source = "source_example"; // string | Specify a data source name to only return variables from a specific data source.
$effect_or_cause = "effect_or_cause_example"; // string | Indicate if you only want variables that have user correlations.  Possible values are effect and cause.
$public_effect_or_cause = "public_effect_or_cause_example"; // string | Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause.
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.

try {
    $result = $api_instance->v1VariablesSearchSearchGet($search, $access_token, $user_id, $variable_category_name, $include_public, $manual_tracking, $source, $effect_or_cause, $public_effect_or_cause, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1VariablesSearchSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search query which may be an entire variable name or a fragment of one. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]
 **variable_category_name** | **string**| Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. | [optional]
 **include_public** | **bool**| Set to true if you would like to include public variables when no user variables are found. | [optional]
 **manual_tracking** | **bool**| Set to true if you would like to exlude variables like apps and website names. | [optional]
 **source** | **string**| Specify a data source name to only return variables from a specific data source. | [optional]
 **effect_or_cause** | **string**| Indicate if you only want variables that have user correlations.  Possible values are effect and cause. | [optional]
 **public_effect_or_cause** | **string**| Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause. | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]

### Return type

[**\QuantiModo\Client\Model\Variable[]**](../Model/Variable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesVariableNameGet**
> \QuantiModo\Client\Model\Variable v1VariablesVariableNameGet($variable_name, $access_token, $user_id)

Get info about a variable

Get all of the settings and information about a variable by its name. If the logged in user has modified the settings for the variable, these will be provided instead of the default settings for that variable.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\VariablesApi();
$variable_name = "variable_name_example"; // string | Variable name
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id

try {
    $result = $api_instance->v1VariablesVariableNameGet($variable_name, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->v1VariablesVariableNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Variable name |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]

### Return type

[**\QuantiModo\Client\Model\Variable**](../Model/Variable.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

