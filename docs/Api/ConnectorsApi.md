# QuantiModo\Client\ConnectorsApi

All URIs are relative to *https://app.quantimo.do/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ConnectJsGet**](ConnectorsApi.md#v1ConnectJsGet) | **GET** /v1/connect.js | Get embeddable connect javascript
[**v1ConnectMobileGet**](ConnectorsApi.md#v1ConnectMobileGet) | **GET** /v1/connect/mobile | Mobile connect page
[**v1ConnectorsConnectorConnectGet**](ConnectorsApi.md#v1ConnectorsConnectorConnectGet) | **GET** /v1/connectors/{connector}/connect | Obtain a token from 3rd party data source
[**v1ConnectorsConnectorConnectInstructionsGet**](ConnectorsApi.md#v1ConnectorsConnectorConnectInstructionsGet) | **GET** /v1/connectors/{connector}/connectInstructions | Connection Instructions
[**v1ConnectorsConnectorConnectParameterGet**](ConnectorsApi.md#v1ConnectorsConnectorConnectParameterGet) | **GET** /v1/connectors/{connector}/connectParameter | Connect Parameter
[**v1ConnectorsConnectorDisconnectGet**](ConnectorsApi.md#v1ConnectorsConnectorDisconnectGet) | **GET** /v1/connectors/{connector}/disconnect | Delete stored connection info
[**v1ConnectorsConnectorInfoGet**](ConnectorsApi.md#v1ConnectorsConnectorInfoGet) | **GET** /v1/connectors/{connector}/info | Get connector info for user
[**v1ConnectorsConnectorUpdateGet**](ConnectorsApi.md#v1ConnectorsConnectorUpdateGet) | **GET** /v1/connectors/{connector}/update | Sync with data source
[**v1ConnectorsListGet**](ConnectorsApi.md#v1ConnectorsListGet) | **GET** /v1/connectors/list | List of Connectors


# **v1ConnectJsGet**
> v1ConnectJsGet($access_token)

Get embeddable connect javascript

Get embeddable connect javascript. Usage:    - Embedding in applications with popups for 3rd-party authentication windows.      Use `qmSetupInPopup` function after connecting `connect.js`.    - Embedding in applications with popups for 3rd-party authentication windows.      Requires a selector to block. It will be embedded in this block.      Use `qmSetupOnPage` function after connecting `connect.js`.    - Embedding in mobile applications without popups for 3rd-party authentication.      Use `qmSetupOnMobile` function after connecting `connect.js`.      if using the MoodiModo Clones, Use `qmSetupOnIonic` function after connecting `connect.js`.

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

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $api_instance->v1ConnectJsGet($access_token);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectJsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2), [internalApiKey](../../README.md#internalApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/x-javascript

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectMobileGet**
> v1ConnectMobileGet($access_token)

Mobile connect page

This page is designed to be opened in a webview.  Instead of using popup authentication boxes, it uses redirection. You can include the user's access_token as a URL parameter like https://app.quantimo.do/api/v1/connect/mobile?access_token=123

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

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$access_token = "access_token_example"; // string | User OAuth access token

try {
    $api_instance->v1ConnectMobileGet($access_token);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectMobileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| User OAuth access token |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2), [internalApiKey](../../README.md#internalApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsConnectorConnectGet**
> v1ConnectorsConnectorConnectGet($connector, $access_token)

Obtain a token from 3rd party data source

Attempt to obtain a token from the data provider, store it in the database. With this, the connector to continue to obtain new user data until the token is revoked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$connector = "connector_example"; // string | Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $api_instance->v1ConnectorsConnectorConnectGet($connector, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsConnectorConnectGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | **string**| Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsConnectorConnectInstructionsGet**
> v1ConnectorsConnectorConnectInstructionsGet($connector, $parameters, $url, $use_popup, $access_token)

Connection Instructions

Returns instructions that describe what parameters and endpoint to use to connect to the given data provider.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$connector = "connector_example"; // string | Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint.
$parameters = "parameters_example"; // string | JSON Array of Parameters for the request to enable connector.
$url = "url_example"; // string | URL which should be used to enable the connector.
$use_popup = true; // bool | Should use popup when enabling connector
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $api_instance->v1ConnectorsConnectorConnectInstructionsGet($connector, $parameters, $url, $use_popup, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsConnectorConnectInstructionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | **string**| Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. |
 **parameters** | **string**| JSON Array of Parameters for the request to enable connector. |
 **url** | **string**| URL which should be used to enable the connector. |
 **use_popup** | **bool**| Should use popup when enabling connector |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsConnectorConnectParameterGet**
> \QuantiModo\Client\Model\ConnectorInstruction v1ConnectorsConnectorConnectParameterGet($connector, $display_name, $key, $placeholder, $type, $use_popup, $access_token, $default_value)

Connect Parameter

Returns instructions that describe what parameters and endpoint to use to connect to the given data provider.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$connector = "connector_example"; // string | Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint.
$display_name = "display_name_example"; // string | Name of the parameter that is user visible in the form
$key = "key_example"; // string | Name of the property that the user has to enter such as username or password Connector (used in HTTP request)
$placeholder = "placeholder_example"; // string | Placeholder hint value for the parameter input tag.
$type = "type_example"; // string | Type of input field such as those found here http://www.w3schools.com/tags/tag_input.asp
$use_popup = true; // bool | Should use popup when enabling connector
$access_token = "access_token_example"; // string | User's OAuth2 access token
$default_value = "default_value_example"; // string | Default parameter value

try {
    $result = $api_instance->v1ConnectorsConnectorConnectParameterGet($connector, $display_name, $key, $placeholder, $type, $use_popup, $access_token, $default_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsConnectorConnectParameterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | **string**| Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. |
 **display_name** | **string**| Name of the parameter that is user visible in the form |
 **key** | **string**| Name of the property that the user has to enter such as username or password Connector (used in HTTP request) |
 **placeholder** | **string**| Placeholder hint value for the parameter input tag. |
 **type** | **string**| Type of input field such as those found here http://www.w3schools.com/tags/tag_input.asp |
 **use_popup** | **bool**| Should use popup when enabling connector |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]
 **default_value** | **string**| Default parameter value | [optional]

### Return type

[**\QuantiModo\Client\Model\ConnectorInstruction**](../Model/ConnectorInstruction.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsConnectorDisconnectGet**
> v1ConnectorsConnectorDisconnectGet($connector)

Delete stored connection info

The disconnect method deletes any stored tokens or connection information from the connectors database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$connector = "connector_example"; // string | Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint.

try {
    $api_instance->v1ConnectorsConnectorDisconnectGet($connector);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsConnectorDisconnectGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | **string**| Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsConnectorInfoGet**
> \QuantiModo\Client\Model\ConnectorInfo v1ConnectorsConnectorInfoGet($connector, $access_token)

Get connector info for user

Returns information about the connector such as the connector id, whether or not is connected for this user (i.e. we have a token or credentials), and its update history for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$connector = "connector_example"; // string | Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint.
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $result = $api_instance->v1ConnectorsConnectorInfoGet($connector, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsConnectorInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | **string**| Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

[**\QuantiModo\Client\Model\ConnectorInfo**](../Model/ConnectorInfo.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsConnectorUpdateGet**
> v1ConnectorsConnectorUpdateGet($connector, $access_token)

Sync with data source

The update method tells the QM Connector Framework to check with the data provider (such as Fitbit or MyFitnessPal) and retrieve any new measurements available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();
$connector = "connector_example"; // string | Lowercase system name of the source application or device
$access_token = "access_token_example"; // string | User's OAuth2 access token

try {
    $api_instance->v1ConnectorsConnectorUpdateGet($connector, $access_token);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsConnectorUpdateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connector** | **string**| Lowercase system name of the source application or device |
 **access_token** | **string**| User&#39;s OAuth2 access token | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ConnectorsListGet**
> \QuantiModo\Client\Model\Connector[] v1ConnectorsListGet()

List of Connectors

A connector pulls data from other data providers using their API or a screenscraper. Returns a list of all available connectors and information about them such as their id, name, whether the user has provided access, logo url, connection instructions, and the update history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
QuantiModo\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new QuantiModo\Client\Api\ConnectorsApi();

try {
    $result = $api_instance->v1ConnectorsListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->v1ConnectorsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\QuantiModo\Client\Model\Connector[]**](../Model/Connector.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

