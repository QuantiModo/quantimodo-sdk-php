# Swagger\Client\VotesApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1VotesDeletePost**](VotesApi.md#v1VotesDeletePost) | **POST** /v1/votes/delete | Delete vote
[**v1VotesPost**](VotesApi.md#v1VotesPost) | **POST** /v1/votes | Post or update vote


# **v1VotesDeletePost**
> \Swagger\Client\Model\CommonResponse v1VotesDeletePost($body, $access_token)

Delete vote

Delete previously posted vote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\VotesApi();
$body = new \Swagger\Client\Model\VoteDelete(); // \Swagger\Client\Model\VoteDelete | The cause and effect variable names for the predictor vote to be deleted.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VotesDeletePost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotesApi->v1VotesDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\VoteDelete**](../Model/\Swagger\Client\Model\VoteDelete.md)| The cause and effect variable names for the predictor vote to be deleted. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1VotesPost**
> \Swagger\Client\Model\CommonResponse v1VotesPost($body, $access_token)

Post or update vote

This is to enable users to indicate their opinion on the plausibility of a causal relationship between a treatment and outcome. QuantiModo incorporates crowd-sourced plausibility estimations into their algorithm. This is done allowing user to indicate their view of the plausibility of each relationship with thumbs up/down buttons placed next to each prediction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\VotesApi();
$body = new \Swagger\Client\Model\PostVote(); // \Swagger\Client\Model\PostVote | Contains the cause variable, effect variable, and vote value.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1VotesPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotesApi->v1VotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PostVote**](../Model/\Swagger\Client\Model\PostVote.md)| Contains the cause variable, effect variable, and vote value. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\Swagger\Client\Model\CommonResponse**](../Model/CommonResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

