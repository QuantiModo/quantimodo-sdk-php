# QuantiModo\Client\UserApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OrganizationsOrganizationIdUsersPost**](UserApi.md#v1OrganizationsOrganizationIdUsersPost) | **POST** /v1/organizations/{organizationId}/users | Get user tokens for existing users, create new users
[**v1UserMeGet**](UserApi.md#v1UserMeGet) | **GET** /v1/user/me | Get all available units for variableGet authenticated user


# **v1OrganizationsOrganizationIdUsersPost**
> \QuantiModo\Client\Model\UserTokenSuccessfulResponse v1OrganizationsOrganizationIdUsersPost($organization_id, $body, $access_token)

Get user tokens for existing users, create new users

Get user tokens for existing users, create new users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// QuantiModo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$api_instance = new QuantiModo\Client\Api\UserApi();
$organization_id = 56; // int | Organization ID
$body = new \QuantiModo\Client\Model\UserTokenRequest(); // \QuantiModo\Client\Model\UserTokenRequest | Provides organization token and user ID
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1OrganizationsOrganizationIdUsersPost($organization_id, $body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1OrganizationsOrganizationIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **body** | [**\QuantiModo\Client\Model\UserTokenRequest**](../Model/\QuantiModo\Client\Model\UserTokenRequest.md)| Provides organization token and user ID |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\UserTokenSuccessfulResponse**](../Model/UserTokenSuccessfulResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [internalApiKey](../../README.md#internalApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UserMeGet**
> \QuantiModo\Client\Model\User v1UserMeGet()

Get all available units for variableGet authenticated user

Returns user info for the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\UserApi();

try {
    $result = $api_instance->v1UserMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->v1UserMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QuantiModo\Client\Model\User**](../Model/User.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

