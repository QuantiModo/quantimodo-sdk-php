# Swagger\Client\PairsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1PairsCsvGet**](PairsApi.md#v1PairsCsvGet) | **GET** /v1/pairsCsv | Get pairs
[**v1PairsGet**](PairsApi.md#v1PairsGet) | **GET** /v1/pairs | Get pairs


# **v1PairsCsvGet**
> \Swagger\Client\Model\Pairs[] v1PairsCsvGet($cause, $effect, $access_token, $cause_source, $cause_unit, $delay, $duration, $effect_source, $effect_unit, $end_time, $start_time, $limit, $offset, $sort)

Get pairs

Pairs cause measurements with effect measurements grouped over the duration of action after the onset delay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PairsApi();
$cause = "cause_example"; // string | Original variable name for the explanatory or independent variable
$effect = "effect_example"; // string | Original variable name for the outcome or dependent variable
$access_token = "access_token_example"; // string | User's OAuth2 access token
$cause_source = "cause_source_example"; // string | Name of data source that the cause measurements should come from
$cause_unit = "cause_unit_example"; // string | Abbreviated name for the unit cause measurements to be returned in
$delay = "delay_example"; // string | Delay before onset of action (in seconds) from the cause variable settings.
$duration = "duration_example"; // string | Duration of action (in seconds) from the cause variable settings.
$effect_source = "effect_source_example"; // string | Name of data source that the effectmeasurements should come from
$effect_unit = "effect_unit_example"; // string | Abbreviated name for the unit effect measurements to be returned in
$end_time = "end_time_example"; // string | The most recent date (in epoch time) for which we should return measurements
$start_time = "start_time_example"; // string | The earliest date (in epoch time) for which we should return measurements
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1PairsCsvGet($cause, $effect, $access_token, $cause_source, $cause_unit, $delay, $duration, $effect_source, $effect_unit, $end_time, $start_time, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PairsApi->v1PairsCsvGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause** | **string**| Original variable name for the explanatory or independent variable |
 **effect** | **string**| Original variable name for the outcome or dependent variable |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **cause_source** | **string**| Name of data source that the cause measurements should come from | [optional]
 **cause_unit** | **string**| Abbreviated name for the unit cause measurements to be returned in | [optional]
 **delay** | **string**| Delay before onset of action (in seconds) from the cause variable settings. | [optional]
 **duration** | **string**| Duration of action (in seconds) from the cause variable settings. | [optional]
 **effect_source** | **string**| Name of data source that the effectmeasurements should come from | [optional]
 **effect_unit** | **string**| Abbreviated name for the unit effect measurements to be returned in | [optional]
 **end_time** | **string**| The most recent date (in epoch time) for which we should return measurements | [optional]
 **start_time** | **string**| The earliest date (in epoch time) for which we should return measurements | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\Pairs[]**](../Model/Pairs.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1PairsGet**
> \Swagger\Client\Model\Pairs[] v1PairsGet($cause, $effect, $access_token, $cause_source, $cause_unit, $delay, $duration, $effect_source, $effect_unit, $end_time, $start_time, $limit, $offset, $sort)

Get pairs

Pairs cause measurements with effect measurements grouped over the duration of action after the onset delay.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Swagger\Client\Api\PairsApi();
$cause = "cause_example"; // string | Original variable name for the explanatory or independent variable
$effect = "effect_example"; // string | Original variable name for the outcome or dependent variable
$access_token = "access_token_example"; // string | User's OAuth2 access token
$cause_source = "cause_source_example"; // string | Name of data source that the cause measurements should come from
$cause_unit = "cause_unit_example"; // string | Abbreviated name for the unit cause measurements to be returned in
$delay = "delay_example"; // string | Delay before onset of action (in seconds) from the cause variable settings.
$duration = "duration_example"; // string | Duration of action (in seconds) from the cause variable settings.
$effect_source = "effect_source_example"; // string | Name of data source that the effectmeasurements should come from
$effect_unit = "effect_unit_example"; // string | Abbreviated name for the unit effect measurements to be returned in
$end_time = "end_time_example"; // string | The most recent date (in epoch time) for which we should return measurements
$start_time = "start_time_example"; // string | The earliest date (in epoch time) for which we should return measurements
$limit = 56; // int | The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0.
$offset = 56; // int | Now suppose you wanted to show results 11-20. You'd set the offset to 10 and the limit to 10.
$sort = 56; // int | Sort by given field. If the field is prefixed with `-, it will sort in descending order.

try {
    $result = $api_instance->v1PairsGet($cause, $effect, $access_token, $cause_source, $cause_unit, $delay, $duration, $effect_source, $effect_unit, $end_time, $start_time, $limit, $offset, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PairsApi->v1PairsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cause** | **string**| Original variable name for the explanatory or independent variable |
 **effect** | **string**| Original variable name for the outcome or dependent variable |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **cause_source** | **string**| Name of data source that the cause measurements should come from | [optional]
 **cause_unit** | **string**| Abbreviated name for the unit cause measurements to be returned in | [optional]
 **delay** | **string**| Delay before onset of action (in seconds) from the cause variable settings. | [optional]
 **duration** | **string**| Duration of action (in seconds) from the cause variable settings. | [optional]
 **effect_source** | **string**| Name of data source that the effectmeasurements should come from | [optional]
 **effect_unit** | **string**| Abbreviated name for the unit effect measurements to be returned in | [optional]
 **end_time** | **string**| The most recent date (in epoch time) for which we should return measurements | [optional]
 **start_time** | **string**| The earliest date (in epoch time) for which we should return measurements | [optional]
 **limit** | **int**| The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. | [optional]
 **offset** | **int**| Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. | [optional]
 **sort** | **int**| Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. | [optional]

### Return type

[**\Swagger\Client\Model\Pairs[]**](../Model/Pairs.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

