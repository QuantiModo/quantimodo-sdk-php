# QuantiModo\Client\CorrelationsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1AggregatedCorrelationsGet**](CorrelationsApi.md#v1AggregatedCorrelationsGet) | **GET** /v1/aggregatedCorrelations | Get aggregated correlations
[**v1AggregatedCorrelationsPost**](CorrelationsApi.md#v1AggregatedCorrelationsPost) | **POST** /v1/aggregatedCorrelations | Store or Update a Correlation
[**v1CorrelationsGet**](CorrelationsApi.md#v1CorrelationsGet) | **GET** /v1/correlations | Get correlations
[**v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet**](CorrelationsApi.md#v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet) | **GET** /v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/causes | Search user correlations for a given cause
[**v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet**](CorrelationsApi.md#v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet) | **GET** /v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/effects | Search user correlations for a given cause
[**v1PublicCorrelationsSearchSearchGet**](CorrelationsApi.md#v1PublicCorrelationsSearchSearchGet) | **GET** /v1/public/correlations/search/{search} | Get average correlations for variables containing search term
[**v1VariablesVariableNameCausesGet**](CorrelationsApi.md#v1VariablesVariableNameCausesGet) | **GET** /v1/variables/{variableName}/causes | Search user correlations for a given effect
[**v1VariablesVariableNameEffectsGet**](CorrelationsApi.md#v1VariablesVariableNameEffectsGet) | **GET** /v1/variables/{variableName}/effects | Search user correlations for a given cause
[**v1VariablesVariableNamePublicCausesGet**](CorrelationsApi.md#v1VariablesVariableNamePublicCausesGet) | **GET** /v1/variables/{variableName}/public/causes | Search public correlations for a given effect
[**v1VariablesVariableNamePublicEffectsGet**](CorrelationsApi.md#v1VariablesVariableNamePublicEffectsGet) | **GET** /v1/variables/{variableName}/public/effects | Search public correlations for a given cause
[**v1VotesDeletePost**](CorrelationsApi.md#v1VotesDeletePost) | **POST** /v1/votes/delete | Delete vote
[**v1VotesPost**](CorrelationsApi.md#v1VotesPost) | **POST** /v1/votes | Post or update vote


# **v1AggregatedCorrelationsGet**
> \QuantiModo\Client\Model\Correlation[] v1AggregatedCorrelationsGet($access_token, $effect, $cause, $correlation_coefficient, $onset_delay, $duration_of_action, $last_updated, $limit, $offset, $sort)

Get aggregated correlations

Get correlations based on the anonymized aggregate data from all QuantiModo users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$effect = "effect_example"; // string | ORIGINAL variable name of the effect variable for which the user desires correlations
$cause = "cause_example"; // string | ORIGINAL variable name of the cause variable for which the user desires correlations
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$onset_delay = "onset_delay_example"; // string | The number of seconds which pass following a cause measurement before an effect would likely be observed.
$duration_of_action = "duration_of_action_example"; // string | The time in seconds over which the cause would be expected to exert a measurable effect. We have selected a default value for each variable. This default value may be replaced by a user specified by adjusting their variable user settings.
$last_updated = "last_updated_example"; // string | The time that this measurement was last updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1AggregatedCorrelationsGet($access_token, $effect, $cause, $correlation_coefficient, $onset_delay, $duration_of_action, $last_updated, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1AggregatedCorrelationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **effect** | **string**| ORIGINAL variable name of the effect variable for which the user desires correlations | [optional]
 **cause** | **string**| ORIGINAL variable name of the cause variable for which the user desires correlations | [optional]
 **correlation_coefficient** | **string**| Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action | [optional]
 **onset_delay** | **string**| The number of seconds which pass following a cause measurement before an effect would likely be observed. | [optional]
 **duration_of_action** | **string**| The time in seconds over which the cause would be expected to exert a measurable effect. We have selected a default value for each variable. This default value may be replaced by a user specified by adjusting their variable user settings. | [optional]
 **last_updated** | **string**| The time that this measurement was last updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1AggregatedCorrelationsPost**
> v1AggregatedCorrelationsPost($body, $access_token)

Store or Update a Correlation

Add correlation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$body = new \QuantiModo\Client\Model\PostCorrelation(); // \QuantiModo\Client\Model\PostCorrelation | Provides correlation data
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $api_instance->v1AggregatedCorrelationsPost($body, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1AggregatedCorrelationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\PostCorrelation**](../Model/\QuantiModo\Client\Model\PostCorrelation.md)| Provides correlation data |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1CorrelationsGet**
> \QuantiModo\Client\Model\Correlation[] v1CorrelationsGet($access_token, $effect, $cause, $correlation_coefficient, $onset_delay, $duration_of_action, $last_updated, $limit, $offset, $sort)

Get correlations

Get correlations.<br>Supported filter parameters:<br><ul><li><b>correlationCoefficient</b> - Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action</li><li><b>onsetDelay</b> - The number of seconds which pass following a cause measurement before an effect would likely be observed.</li><li><b>durationOfAction</b> - The time in seconds over which the cause would be expected to exert a measurable effect. We have selected a default value for each variable. This default value may be replaced by a user specified by adjusting their variable user settings.</li><li><b>lastUpdated</b> - The time that this measurement was last updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"</li></ul><br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$effect = "effect_example"; // string | ORIGINAL variable name of the effect variable for which the user desires correlations
$cause = "cause_example"; // string | ORIGINAL variable name of the cause variable for which the user desires correlations
$correlation_coefficient = "correlation_coefficient_example"; // string | Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action
$onset_delay = "onset_delay_example"; // string | The number of seconds which pass following a cause measurement before an effect would likely be observed.
$duration_of_action = "duration_of_action_example"; // string | The time in seconds over which the cause would be expected to exert a measurable effect. We have selected a default value for each variable. This default value may be replaced by a user specified by adjusting their variable user settings.
$last_updated = "last_updated_example"; // string | The time that this measurement was last updated in the UTC format \"YYYY-MM-DDThh:mm:ss\"
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1CorrelationsGet($access_token, $effect, $cause, $correlation_coefficient, $onset_delay, $duration_of_action, $last_updated, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1CorrelationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **effect** | **string**| ORIGINAL variable name of the effect variable for which the user desires correlations | [optional]
 **cause** | **string**| ORIGINAL variable name of the cause variable for which the user desires correlations | [optional]
 **correlation_coefficient** | **string**| Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action | [optional]
 **onset_delay** | **string**| The number of seconds which pass following a cause measurement before an effect would likely be observed. | [optional]
 **duration_of_action** | **string**| The time in seconds over which the cause would be expected to exert a measurable effect. We have selected a default value for each variable. This default value may be replaced by a user specified by adjusting their variable user settings. | [optional]
 **last_updated** | **string**| The time that this measurement was last updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet**
> \QuantiModo\Client\Model\Correlation[] v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet($organization_id, $user_id, $variable_name, $organization_token, $access_token, $include_public)

Search user correlations for a given cause

Returns average of all correlations and votes for all user cause variables for a given cause. If parameter \"include_public\" is used, it also returns public correlations. User correlation overwrites or supersedes public correlation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$organization_id = 56; // int | Organization ID
$user_id = 56; // int | User id
$variable_name = "variable_name_example"; // string | Effect variable name
$organization_token = "organization_token_example"; // string | Organization access token
$access_token = "access_token_example"; // string | User's OAuth2 access token
$include_public = "include_public_example"; // string | Include public correlations, Can be \"1\" or empty.

try {
    $result = $api_instance->v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet($organization_id, $user_id, $variable_name, $organization_token, $access_token, $include_public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **user_id** | **int**| User id |
 **variable_name** | **string**| Effect variable name |
 **organization_token** | **string**| Organization access token |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **include_public** | **string**| Include public correlations, Can be \&quot;1\&quot; or empty. | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet**
> \QuantiModo\Client\Model\CommonResponse[] v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet($organization_id, $user_id, $variable_name, $organization_token, $access_token, $include_public)

Search user correlations for a given cause

Returns average of all correlations and votes for all user cause variables for a given effect. If parameter \"include_public\" is used, it also returns public correlations. User correlation overwrites or supersedes public correlation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$organization_id = 56; // int | Organization ID
$user_id = 56; // int | User id
$variable_name = "variable_name_example"; // string | Cause variable name
$organization_token = "organization_token_example"; // string | Organization access token
$access_token = "access_token_example"; // string | User's OAuth2 access token
$include_public = "include_public_example"; // string | Include public correlations, Can be \"1\" or empty.

try {
    $result = $api_instance->v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet($organization_id, $user_id, $variable_name, $organization_token, $access_token, $include_public);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **user_id** | **int**| User id |
 **variable_name** | **string**| Cause variable name |
 **organization_token** | **string**| Organization access token |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **include_public** | **string**| Include public correlations, Can be \&quot;1\&quot; or empty. | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse[]**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PublicCorrelationsSearchSearchGet**
> \QuantiModo\Client\Model\Correlation[] v1PublicCorrelationsSearchSearchGet($search, $effect_or_cause, $access_token)

Get average correlations for variables containing search term

Returns the average correlations from all users for all public variables that contain the characters in the search query. Returns average of all users public variable correlations with a specified cause or effect.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$search = "search_example"; // string | Name of the variable that you want to know the causes or effects of.
$effect_or_cause = "effect_or_cause_example"; // string | Setting this to effect indicates that the searched variable is the effect and that the causes of this variable should be returned.  cause indicates that the searched variable is the cause and the effects should be returned.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1PublicCorrelationsSearchSearchGet($search, $effect_or_cause, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1PublicCorrelationsSearchSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Name of the variable that you want to know the causes or effects of. |
 **effect_or_cause** | **string**| Setting this to effect indicates that the searched variable is the effect and that the causes of this variable should be returned.  cause indicates that the searched variable is the cause and the effects should be returned. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesVariableNameCausesGet**
> \QuantiModo\Client\Model\Correlation[] v1VariablesVariableNameCausesGet($variable_name)

Search user correlations for a given effect

Returns average of all correlations and votes for all user cause variables for a given effect

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$variable_name = "variable_name_example"; // string | Effect variable name

try {
    $result = $api_instance->v1VariablesVariableNameCausesGet($variable_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1VariablesVariableNameCausesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Effect variable name |

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesVariableNameEffectsGet**
> \QuantiModo\Client\Model\Correlation[] v1VariablesVariableNameEffectsGet($variable_name, $access_token)

Search user correlations for a given cause

Returns average of all correlations and votes for all user effect variables for a given cause

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$variable_name = "variable_name_example"; // string | Cause variable name
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VariablesVariableNameEffectsGet($variable_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1VariablesVariableNameEffectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Cause variable name |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesVariableNamePublicCausesGet**
> \QuantiModo\Client\Model\Correlation[] v1VariablesVariableNamePublicCausesGet($variable_name, $access_token)

Search public correlations for a given effect

Returns average of all correlations and votes for all public cause variables for a given effect

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$variable_name = "variable_name_example"; // string | Effect variable name
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VariablesVariableNamePublicCausesGet($variable_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1VariablesVariableNamePublicCausesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Effect variable name |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VariablesVariableNamePublicEffectsGet**
> \QuantiModo\Client\Model\Correlation[] v1VariablesVariableNamePublicEffectsGet($variable_name, $access_token)

Search public correlations for a given cause

Returns average of all correlations and votes for all public cause variables for a given cause

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$variable_name = "variable_name_example"; // string | Cause variable name
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VariablesVariableNamePublicEffectsGet($variable_name, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1VariablesVariableNamePublicEffectsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variable_name** | **string**| Cause variable name |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\Correlation[]**](../Model/Correlation.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VotesDeletePost**
> \QuantiModo\Client\Model\CommonResponse v1VotesDeletePost($body, $access_token)

Delete vote

Delete previously posted vote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$body = new \QuantiModo\Client\Model\VoteDelete(); // \QuantiModo\Client\Model\VoteDelete | The cause and effect variable names for the predictor vote to be deleted.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VotesDeletePost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1VotesDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\VoteDelete**](../Model/\QuantiModo\Client\Model\VoteDelete.md)| The cause and effect variable names for the predictor vote to be deleted. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VotesPost**
> \QuantiModo\Client\Model\CommonResponse v1VotesPost($body, $access_token)

Post or update vote

This is to enable users to indicate their opinion on the plausibility of a causal relationship between a treatment and outcome. QuantiModo incorporates crowd-sourced plausibility estimations into their algorithm. This is done allowing user to indicate their view of the plausibility of each relationship with thumbs up/down buttons placed next to each prediction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\CorrelationsApi();
$body = new \QuantiModo\Client\Model\PostVote(); // \QuantiModo\Client\Model\PostVote | Contains the cause variable, effect variable, and vote value.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VotesPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorrelationsApi->v1VotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\QuantiModo\Client\Model\PostVote**](../Model/\QuantiModo\Client\Model\PostVote.md)| Contains the cause variable, effect variable, and vote value. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

