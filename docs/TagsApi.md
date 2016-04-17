# Swagger\Client\TagsApi

All URIs are relative to *https://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UserTagsDeletePost**](TagsApi.md#v1UserTagsDeletePost) | **POST** /v1/userTags/delete | Delete user tag or ingredient
[**v1UserTagsPost**](TagsApi.md#v1UserTagsPost) | **POST** /v1/userTags | Post or update user tags or ingredients


# **v1UserTagsDeletePost**
> \Swagger\Client\Model\CommonResponse v1UserTagsDeletePost($tagged_variable_id, $tag_variable_id)

Delete user tag or ingredient

Delete previously created user tags or ingredients.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TagsApi();
$tagged_variable_id = 56; // int | This is the id of the variable being tagged with an ingredient or something.
$tag_variable_id = 56; // int | This is the id of the ingredient variable whose value is determined based on the value of the tagged variable.

try { 
    $result = $api_instance->v1UserTagsDeletePost($tagged_variable_id, $tag_variable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->v1UserTagsDeletePost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tagged_variable_id** | [**int**](.md)| This is the id of the variable being tagged with an ingredient or something. | 
 **tag_variable_id** | [**int**](.md)| This is the id of the ingredient variable whose value is determined based on the value of the tagged variable. | 

### Return type

[**\Swagger\Client\Model\CommonResponse**](CommonResponse.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **v1UserTagsPost**
> \Swagger\Client\Model\CommonResponse v1UserTagsPost($body, $access_token)

Post or update user tags or ingredients

This endpoint allows users to tag foods with their ingredients.  This information will then be used to infer the user intake of the different ingredients by just entering the foods. The inferred intake levels will then be used to determine the effects of different nutrients on the user during analysis.

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\TagsApi();
$body = new \Swagger\Client\Model\UserTag(); // \Swagger\Client\Model\UserTag | Contains the new user tag data
$access_token = "access_token_example"; // string | User's OAuth2 access token

try { 
    $result = $api_instance->v1UserTagsPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->v1UserTagsPost: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserTag**](\Swagger\Client\Model\UserTag.md)| Contains the new user tag data | 
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional] 

### Return type

[**\Swagger\Client\Model\CommonResponse**](CommonResponse.md)

### Authorization

[oauth2](../README.md#oauth2)

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

