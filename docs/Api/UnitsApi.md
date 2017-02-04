# QuantiModo\Client\UnitsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1UnitCategoriesGet**](UnitsApi.md#v1UnitCategoriesGet) | **GET** /v1/unitCategories | Get unit categories
[**v1UnitsGet**](UnitsApi.md#v1UnitsGet) | **GET** /v1/units | Get all available units
[**v1UnitsVariableGet**](UnitsApi.md#v1UnitsVariableGet) | **GET** /v1/unitsVariable | Units for Variable


# **v1UnitCategoriesGet**
> \QuantiModo\Client\QuantiModo\Client\Model\UnitCategory v1UnitCategoriesGet()

Get unit categories

Get a list of the categories of measurement units such as 'Distance', 'Duration', 'Energy', 'Frequency', 'Miscellany', 'Pressure', 'Proportion', 'Rating', 'Temperature', 'Volume', and 'Weight'.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\UnitsApi();

try {
    $result = $api_instance->v1UnitCategoriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->v1UnitCategoriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QuantiModo\Client\QuantiModo\Client\Model\UnitCategory**](../Model/UnitCategory.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UnitsGet**
> \QuantiModo\Client\QuantiModo\Client\Model\Unit[] v1UnitsGet($access_token, $user_id, $id, $unit_name, $abbreviated_unit_name, $unit_category_name)

Get all available units

Get all available units

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\UnitsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$id = 56; // int | Unit id
$unit_name = "unit_name_example"; // string | Unit name
$abbreviated_unit_name = "abbreviated_unit_name_example"; // string | Restrict the results to a specific unit by providing the unit abbreviation.
$unit_category_name = "unit_category_name_example"; // string | Restrict the results to a specific unit category by providing the unit category name.

try {
    $result = $api_instance->v1UnitsGet($access_token, $user_id, $id, $unit_name, $abbreviated_unit_name, $unit_category_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->v1UnitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]
 **id** | **int**| Unit id | [optional]
 **unit_name** | **string**| Unit name | [optional]
 **abbreviated_unit_name** | **string**| Restrict the results to a specific unit by providing the unit abbreviation. | [optional]
 **unit_category_name** | **string**| Restrict the results to a specific unit category by providing the unit category name. | [optional]

### Return type

[**\QuantiModo\Client\QuantiModo\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1UnitsVariableGet**
> \QuantiModo\Client\QuantiModo\Client\Model\Unit[] v1UnitsVariableGet($access_token, $user_id, $unit_name, $abbreviated_unit_name, $unit_category_name, $variable)

Units for Variable

Get a list of all possible units to use for a given variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\UnitsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token
$user_id = 56; // int | User's id
$unit_name = "unit_name_example"; // string | Name of Unit you want to retrieve
$abbreviated_unit_name = "abbreviated_unit_name_example"; // string | Abbreviated Unit Name of the unit you want
$unit_category_name = "unit_category_name_example"; // string | Name of the category you want units for
$variable = "variable_example"; // string | Name of the variable you want units for

try {
    $result = $api_instance->v1UnitsVariableGet($access_token, $user_id, $unit_name, $abbreviated_unit_name, $unit_category_name, $variable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsApi->v1UnitsVariableGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **user_id** | **int**| User&#39;s id | [optional]
 **unit_name** | **string**| Name of Unit you want to retrieve | [optional]
 **abbreviated_unit_name** | **string**| Abbreviated Unit Name of the unit you want | [optional]
 **unit_category_name** | **string**| Name of the category you want units for | [optional]
 **variable** | **string**| Name of the variable you want units for | [optional]

### Return type

[**\QuantiModo\Client\QuantiModo\Client\Model\Unit[]**](../Model/Unit.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

