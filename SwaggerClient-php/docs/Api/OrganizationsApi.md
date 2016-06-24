# Swagger\Client\OrganizationsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1OrganizationsOrganizationIdUsersPost**](OrganizationsApi.md#v1OrganizationsOrganizationIdUsersPost) | **POST** /v1/organizations/{organizationId}/users | Get user tokens for existing users, create new users


# **v1OrganizationsOrganizationIdUsersPost**
> \Swagger\Client\Model\UserTokenSuccessfulResponse v1OrganizationsOrganizationIdUsersPost($organization_id, $body, $access_token)

Get user tokens for existing users, create new users

Get user tokens for existing users, create new users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: internalApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$api_instance = new Swagger\Client\Api\OrganizationsApi();
$organization_id = 56; // int | Organization ID
$body = new \Swagger\Client\Model\UserTokenRequest(); // \Swagger\Client\Model\UserTokenRequest | Provides organization token and user ID
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1OrganizationsOrganizationIdUsersPost($organization_id, $body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v1OrganizationsOrganizationIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **int**| Organization ID |
 **body** | [**\Swagger\Client\Model\UserTokenRequest**](../Model/\Swagger\Client\Model\UserTokenRequest.md)| Provides organization token and user ID |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\UserTokenSuccessfulResponse**](../Model/UserTokenSuccessfulResponse.md)

### Authorization

[oauth2](../../README.md#oauth2), [internalApiKey](../../README.md#internalApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

