# QuantiModo\Client\StudyApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postStudyPublish**](StudyApi.md#postStudyPublish) | **POST** /v3/study/publish | Post Study Publish


# **postStudyPublish**
> \QuantiModo\Client\Model\PostStudyPublishResponse postStudyPublish()

Post Study Publish

Post Study Publish

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new QuantiModo\Client\Api\StudyApi();

try {
    $result = $api_instance->postStudyPublish();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudyApi->postStudyPublish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QuantiModo\Client\Model\PostStudyPublishResponse**](../Model/PostStudyPublishResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

