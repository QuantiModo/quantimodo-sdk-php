<?php
/**
 * ConnectorsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QuantiModo
 *
 * Welcome to QuantiModo API! QuantiModo makes it easy to retrieve normalized user data from a wide array of devices and applications. [Learn about QuantiModo](https://quantimo.do) or contact us at <api@quantimo.do>.         Before you get started, you will need to: * Sign in/Sign up, and add some data at [https://app.quantimo.do/api/v2/account/connectors](https://app.quantimo.do/api/v2/account/connectors) to try out the API for yourself * Create an app to get your client id and secret at [https://app.quantimo.do/api/v2/apps](https://app.quantimo.do/api/v2/apps) * As long as you're signed in, it will use your browser's cookie for authentication.  However, client applications must use OAuth2 tokens to access the API.     ## Application Endpoints These endpoints give you access to all authorized users' data for that application. ### Getting Application Token Make a `POST` request to `/api/v2/oauth/access_token`         * `grant_type` Must be `client_credentials`.         * `clientId` Your application's clientId.         * `client_secret` Your application's client_secret.         * `redirect_uri` Your application's redirect url.                ## Example Queries ### Query Options The standard query options for QuantiModo API are as described in the table below. These are the available query options in QuantiModo API: <table>            <thead>                <tr>                    <th>Parameter</th>                    <th>Description</th>                </tr>            </thead>            <tbody>                <tr>                    <td>limit</td>                    <td>The LIMIT is used to limit the number of results returned.  So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.</td>                </tr>                <tr>                    <td>offset</td>                    <td>Suppose you wanted to show results 11-20. You'd set the    offset to 10 and the limit to 10.</td>                </tr>                <tr>                    <td>sort</td>                    <td>Sort by given field. If the field is prefixed with '-', it    will sort in descending order.</td>                </tr>            </tbody>        </table>         ### Pagination Conventions Since the maximum limit is 200 records, to get more than that you'll have to make multiple API calls and page through the results. To retrieve all the data, you can iterate through data by using the `limit` and `offset` query parameters.For example, if you want to retrieve data from 61-80 then you can use a query with the following parameters,         `/v2/variables?limit=20&offset=60`         Generally, you'll be retrieving new or updated user data. To avoid unnecessary API calls, you'll want to store your last refresh time locally.  Initially, it should be set to 0. Then whenever you make a request to get new data, you should limit the returned results to those updated since your last refresh by appending append         `?lastUpdated=(ge)&quot2013-01-D01T01:01:01&quot`         to your request.         Also for better pagination, you can get link to the records of first, last, next and previous page from response headers: * `Total-Count` - Total number of results for given query * `Link-First` - Link to get first page records * `Link-Last` - Link to get last page records * `Link-Prev` - Link to get previous records set * `Link-Next` - Link to get next records set         Remember, response header will be only sent when the record set is available. e.g. You will not get a ```Link-Last``` & ```Link-Next``` when you query for the last page.         ### Filter operators support API supports the following operators with filter parameters: <br> **Comparison operators**         Comparison operators allow you to limit results to those greater than, less than, or equal to a specified value for a specified attribute. These operators can be used with strings, numbers, and dates. The following comparison operators are available: * `gt` for `greater than` comparison * `ge` for `greater than or equal` comparison * `lt` for `less than` comparison * `le` for `less than or equal` comparison         They are included in queries using the following format:         `(<operator>)<value>`         For example, in order to filter value which is greater than 21, the following query parameter should be used:         `?value=(gt)21` <br><br> **Equals/In Operators**         It also allows filtering by the exact value of an attribute or by a set of values, depending on the type of value passed as a query parameter. If the value contains commas, the parameter is split on commas and used as array input for `IN` filtering, otherwise the exact match is applied. In order to only show records which have the value 42, the following query should be used:         `?value=42`         In order to filter records which have value 42 or 43, the following query should be used:         `?value=42,43` <br><br> **Like operators**         Like operators allow filtering using `LIKE` query. This operator is triggered if exact match operator is used, but value contains `%` sign as the first or last character. In order to filter records which category that start with `Food`, the following query should be used:         `?category=Food%` <br><br> **Negation operator**         It is possible to get negated results of a query by prefixed the operator with `!`. Some examples:         `//filter records except those with value are not 42 or 43`<br> `?value=!42,43`         `//filter records with value not greater than 21`<br> `?value=!(ge)21` <br><br> **Multiple constraints for single attribute**         It is possible to apply multiple constraints by providing an array of query filters:         Filter all records which value is greater than 20.2 and less than 20.3<br> `?value[]=(gt)20.2&value[]=(lt)20.3`         Filter all records which value is greater than 20.2 and less than 20.3 but not 20.2778<br> `?value[]=(gt)20.2&value[]=(lt)20.3&value[]=!20.2778`<br><br>
 *
 * OpenAPI spec version: 2.0.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ConnectorsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectorsApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://app.quantimo.do/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ConnectorsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1ConnectJsGet
     *
     * Get embeddable connect javascript.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectJsGet($access_token = null)
    {
        list($response) = $this->v1ConnectJsGetWithHttpInfo($access_token);
        return $response;
    }


    /**
     * Operation v1ConnectJsGetWithHttpInfo
     *
     * Get embeddable connect javascript.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectJsGetWithHttpInfo($access_token = null)
    {
        
        // parse inputs
        $resourcePath = "/v1/connect.js";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/x-javascript'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }

        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api_key'] = $apiKey;
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectMobileGet
     *
     * Mobile connect page.
     *
     * @param string $access_token User OAuth access token (required)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectMobileGet($access_token)
    {
        list($response) = $this->v1ConnectMobileGetWithHttpInfo($access_token);
        return $response;
    }


    /**
     * Operation v1ConnectMobileGetWithHttpInfo
     *
     * Mobile connect page.
     *
     * @param string $access_token User OAuth access token (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectMobileGetWithHttpInfo($access_token)
    {
        
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling v1ConnectMobileGet');
        }

        // parse inputs
        $resourcePath = "/v1/connect/mobile";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('text/html'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }

        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api_key'] = $apiKey;
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsConnectorConnectGet
     *
     * Obtain a token from 3rd party data source.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorConnectGet($connector, $access_token = null)
    {
        list($response) = $this->v1ConnectorsConnectorConnectGetWithHttpInfo($connector, $access_token);
        return $response;
    }


    /**
     * Operation v1ConnectorsConnectorConnectGetWithHttpInfo
     *
     * Obtain a token from 3rd party data source.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorConnectGetWithHttpInfo($connector, $access_token = null)
    {
        
        // verify the required parameter 'connector' is set
        if ($connector === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector when calling v1ConnectorsConnectorConnectGet');
        }

        // parse inputs
        $resourcePath = "/v1/connectors/{connector}/connect";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        if ($connector !== null) {
            $resourcePath = str_replace(
                "{" . "connector" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsConnectorConnectInstructionsGet
     *
     * Connection Instructions.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $parameters JSON Array of Parameters for the request to enable connector. (required)
     * @param string $url URL which should be used to enable the connector. (required)
     * @param bool $use_popup Should use popup when enabling connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorConnectInstructionsGet($connector, $parameters, $url, $use_popup, $access_token = null)
    {
        list($response) = $this->v1ConnectorsConnectorConnectInstructionsGetWithHttpInfo($connector, $parameters, $url, $use_popup, $access_token);
        return $response;
    }


    /**
     * Operation v1ConnectorsConnectorConnectInstructionsGetWithHttpInfo
     *
     * Connection Instructions.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $parameters JSON Array of Parameters for the request to enable connector. (required)
     * @param string $url URL which should be used to enable the connector. (required)
     * @param bool $use_popup Should use popup when enabling connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorConnectInstructionsGetWithHttpInfo($connector, $parameters, $url, $use_popup, $access_token = null)
    {
        
        // verify the required parameter 'connector' is set
        if ($connector === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector when calling v1ConnectorsConnectorConnectInstructionsGet');
        }

        // verify the required parameter 'parameters' is set
        if ($parameters === null) {
            throw new \InvalidArgumentException('Missing the required parameter $parameters when calling v1ConnectorsConnectorConnectInstructionsGet');
        }

        // verify the required parameter 'url' is set
        if ($url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $url when calling v1ConnectorsConnectorConnectInstructionsGet');
        }

        // verify the required parameter 'use_popup' is set
        if ($use_popup === null) {
            throw new \InvalidArgumentException('Missing the required parameter $use_popup when calling v1ConnectorsConnectorConnectInstructionsGet');
        }

        // parse inputs
        $resourcePath = "/v1/connectors/{connector}/connectInstructions";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }// query params
        if ($parameters !== null) {
            $queryParams['parameters'] = $this->apiClient->getSerializer()->toQueryValue($parameters);
        }// query params
        if ($url !== null) {
            $queryParams['url'] = $this->apiClient->getSerializer()->toQueryValue($url);
        }// query params
        if ($use_popup !== null) {
            $queryParams['usePopup'] = $this->apiClient->getSerializer()->toQueryValue($use_popup);
        }
        
        // path params
        if ($connector !== null) {
            $resourcePath = str_replace(
                "{" . "connector" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsConnectorConnectParameterGet
     *
     * Connect Parameter.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $display_name Name of the parameter that is user visible in the form (required)
     * @param string $key Name of the property that the user has to enter such as username or password Connector (used in HTTP request) (required)
     * @param string $placeholder Placeholder hint value for the parameter input tag. (required)
     * @param string $type Type of input field such as those found here http://www.w3schools.com/tags/tag_input.asp (required)
     * @param bool $use_popup Should use popup when enabling connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $default_value Default parameter value (optional)
     *
     * @return \Swagger\Client\Model\ConnectorInstruction
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorConnectParameterGet($connector, $display_name, $key, $placeholder, $type, $use_popup, $access_token = null, $default_value = null)
    {
        list($response) = $this->v1ConnectorsConnectorConnectParameterGetWithHttpInfo($connector, $display_name, $key, $placeholder, $type, $use_popup, $access_token, $default_value);
        return $response;
    }


    /**
     * Operation v1ConnectorsConnectorConnectParameterGetWithHttpInfo
     *
     * Connect Parameter.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $display_name Name of the parameter that is user visible in the form (required)
     * @param string $key Name of the property that the user has to enter such as username or password Connector (used in HTTP request) (required)
     * @param string $placeholder Placeholder hint value for the parameter input tag. (required)
     * @param string $type Type of input field such as those found here http://www.w3schools.com/tags/tag_input.asp (required)
     * @param bool $use_popup Should use popup when enabling connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $default_value Default parameter value (optional)
     *
     * @return Array of \Swagger\Client\Model\ConnectorInstruction, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorConnectParameterGetWithHttpInfo($connector, $display_name, $key, $placeholder, $type, $use_popup, $access_token = null, $default_value = null)
    {
        
        // verify the required parameter 'connector' is set
        if ($connector === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector when calling v1ConnectorsConnectorConnectParameterGet');
        }

        // verify the required parameter 'display_name' is set
        if ($display_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $display_name when calling v1ConnectorsConnectorConnectParameterGet');
        }

        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $key when calling v1ConnectorsConnectorConnectParameterGet');
        }

        // verify the required parameter 'placeholder' is set
        if ($placeholder === null) {
            throw new \InvalidArgumentException('Missing the required parameter $placeholder when calling v1ConnectorsConnectorConnectParameterGet');
        }

        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling v1ConnectorsConnectorConnectParameterGet');
        }

        // verify the required parameter 'use_popup' is set
        if ($use_popup === null) {
            throw new \InvalidArgumentException('Missing the required parameter $use_popup when calling v1ConnectorsConnectorConnectParameterGet');
        }

        // parse inputs
        $resourcePath = "/v1/connectors/{connector}/connectParameter";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }// query params
        if ($default_value !== null) {
            $queryParams['defaultValue'] = $this->apiClient->getSerializer()->toQueryValue($default_value);
        }// query params
        if ($display_name !== null) {
            $queryParams['displayName'] = $this->apiClient->getSerializer()->toQueryValue($display_name);
        }// query params
        if ($key !== null) {
            $queryParams['key'] = $this->apiClient->getSerializer()->toQueryValue($key);
        }// query params
        if ($placeholder !== null) {
            $queryParams['placeholder'] = $this->apiClient->getSerializer()->toQueryValue($placeholder);
        }// query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }// query params
        if ($use_popup !== null) {
            $queryParams['usePopup'] = $this->apiClient->getSerializer()->toQueryValue($use_popup);
        }
        
        // path params
        if ($connector !== null) {
            $resourcePath = str_replace(
                "{" . "connector" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ConnectorInstruction'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ConnectorInstruction', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ConnectorInstruction', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsConnectorDisconnectGet
     *
     * Delete stored connection info.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorDisconnectGet($connector)
    {
        list($response) = $this->v1ConnectorsConnectorDisconnectGetWithHttpInfo($connector);
        return $response;
    }


    /**
     * Operation v1ConnectorsConnectorDisconnectGetWithHttpInfo
     *
     * Delete stored connection info.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorDisconnectGetWithHttpInfo($connector)
    {
        
        // verify the required parameter 'connector' is set
        if ($connector === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector when calling v1ConnectorsConnectorDisconnectGet');
        }

        // parse inputs
        $resourcePath = "/v1/connectors/{connector}/disconnect";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        // path params
        if ($connector !== null) {
            $resourcePath = str_replace(
                "{" . "connector" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsConnectorInfoGet
     *
     * Get connector info for user.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return \Swagger\Client\Model\ConnectorInfo
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorInfoGet($connector, $access_token = null)
    {
        list($response) = $this->v1ConnectorsConnectorInfoGetWithHttpInfo($connector, $access_token);
        return $response;
    }


    /**
     * Operation v1ConnectorsConnectorInfoGetWithHttpInfo
     *
     * Get connector info for user.
     *
     * @param string $connector Lowercase system name of the source application or device. Get a list of available connectors from the /connectors/list endpoint. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of \Swagger\Client\Model\ConnectorInfo, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorInfoGetWithHttpInfo($connector, $access_token = null)
    {
        
        // verify the required parameter 'connector' is set
        if ($connector === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector when calling v1ConnectorsConnectorInfoGet');
        }

        // parse inputs
        $resourcePath = "/v1/connectors/{connector}/info";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        if ($connector !== null) {
            $resourcePath = str_replace(
                "{" . "connector" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ConnectorInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ConnectorInfo', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ConnectorInfo', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsConnectorUpdateGet
     *
     * Sync with data source.
     *
     * @param string $connector Lowercase system name of the source application or device (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorUpdateGet($connector, $access_token = null)
    {
        list($response) = $this->v1ConnectorsConnectorUpdateGetWithHttpInfo($connector, $access_token);
        return $response;
    }


    /**
     * Operation v1ConnectorsConnectorUpdateGetWithHttpInfo
     *
     * Sync with data source.
     *
     * @param string $connector Lowercase system name of the source application or device (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsConnectorUpdateGetWithHttpInfo($connector, $access_token = null)
    {
        
        // verify the required parameter 'connector' is set
        if ($connector === null) {
            throw new \InvalidArgumentException('Missing the required parameter $connector when calling v1ConnectorsConnectorUpdateGet');
        }

        // parse inputs
        $resourcePath = "/v1/connectors/{connector}/update";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        
        // path params
        if ($connector !== null) {
            $resourcePath = str_replace(
                "{" . "connector" . "}",
                $this->apiClient->getSerializer()->toPathValue($connector),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
    /**
     * Operation v1ConnectorsListGet
     *
     * List of Connectors.
     *
     *
     * @return \Swagger\Client\Model\Connector[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsListGet()
    {
        list($response) = $this->v1ConnectorsListGetWithHttpInfo();
        return $response;
    }


    /**
     * Operation v1ConnectorsListGetWithHttpInfo
     *
     * List of Connectors.
     *
     *
     * @return Array of \Swagger\Client\Model\Connector[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function v1ConnectorsListGetWithHttpInfo()
    {
        
        // parse inputs
        $resourcePath = "/v1/connectors/list";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Connector[]'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Connector[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Connector[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
