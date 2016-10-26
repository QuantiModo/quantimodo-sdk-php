<?php
/**
 * ApplicationEndpointsApi
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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

namespace QuantiModo\Client\Api;

use \QuantiModo\Client\ApiClient;
use \QuantiModo\Client\ApiException;
use \QuantiModo\Client\Configuration;
use \QuantiModo\Client\ObjectSerializer;

/**
 * ApplicationEndpointsApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplicationEndpointsApi
{
    /**
     * API Client
     *
     * @var \QuantiModo\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \QuantiModo\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\QuantiModo\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://app.quantimo.do/api');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \QuantiModo\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \QuantiModo\Client\ApiClient $apiClient set the API client
     *
     * @return ApplicationEndpointsApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v2ApplicationConnectionsGet
     *
     * Get all Connections
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $connector_id The id for the connector data source for which the connection is connected (optional)
     * @param string $connect_status Indicates whether a connector is currently connected to a service for a user. (optional)
     * @param string $connect_error Error message if there is a problem with authorizing this connection. (optional)
     * @param string $update_requested_at Time at which an update was requested by a user. (optional)
     * @param string $update_status Indicates whether a connector is currently updated. (optional)
     * @param string $update_error Indicates if there was an error during the update. (optional)
     * @param string $last_successful_updated_at The time at which the connector was last successfully updated. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2003
     */
    public function v2ApplicationConnectionsGet($access_token = null, $user_id = null, $connector_id = null, $connect_status = null, $connect_error = null, $update_requested_at = null, $update_status = null, $update_error = null, $last_successful_updated_at = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationConnectionsGetWithHttpInfo($access_token, $user_id, $connector_id, $connect_status, $connect_error, $update_requested_at, $update_status, $update_error, $last_successful_updated_at, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationConnectionsGetWithHttpInfo
     *
     * Get all Connections
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $connector_id The id for the connector data source for which the connection is connected (optional)
     * @param string $connect_status Indicates whether a connector is currently connected to a service for a user. (optional)
     * @param string $connect_error Error message if there is a problem with authorizing this connection. (optional)
     * @param string $update_requested_at Time at which an update was requested by a user. (optional)
     * @param string $update_status Indicates whether a connector is currently updated. (optional)
     * @param string $update_error Indicates if there was an error during the update. (optional)
     * @param string $last_successful_updated_at The time at which the connector was last successfully updated. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationConnectionsGetWithHttpInfo($access_token = null, $user_id = null, $connector_id = null, $connect_status = null, $connect_error = null, $update_requested_at = null, $update_status = null, $update_error = null, $last_successful_updated_at = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/connections";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($connector_id !== null) {
            $queryParams['connector_id'] = $this->apiClient->getSerializer()->toQueryValue($connector_id);
        }
        // query params
        if ($connect_status !== null) {
            $queryParams['connect_status'] = $this->apiClient->getSerializer()->toQueryValue($connect_status);
        }
        // query params
        if ($connect_error !== null) {
            $queryParams['connect_error'] = $this->apiClient->getSerializer()->toQueryValue($connect_error);
        }
        // query params
        if ($update_requested_at !== null) {
            $queryParams['update_requested_at'] = $this->apiClient->getSerializer()->toQueryValue($update_requested_at);
        }
        // query params
        if ($update_status !== null) {
            $queryParams['update_status'] = $this->apiClient->getSerializer()->toQueryValue($update_status);
        }
        // query params
        if ($update_error !== null) {
            $queryParams['update_error'] = $this->apiClient->getSerializer()->toQueryValue($update_error);
        }
        // query params
        if ($last_successful_updated_at !== null) {
            $queryParams['last_successful_updated_at'] = $this->apiClient->getSerializer()->toQueryValue($last_successful_updated_at);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2003',
                '/v2/application/connections'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationCredentialsGet
     *
     * Get all Credentials
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $connector_id The id for the connector data source from which the credential was obtained (optional)
     * @param string $attr_key Attribute name such as token, userid, username, or password (optional)
     * @param string $attr_value Encrypted value for the attribute specified (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2004
     */
    public function v2ApplicationCredentialsGet($access_token = null, $user_id = null, $connector_id = null, $attr_key = null, $attr_value = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationCredentialsGetWithHttpInfo($access_token, $user_id, $connector_id, $attr_key, $attr_value, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationCredentialsGetWithHttpInfo
     *
     * Get all Credentials
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $connector_id The id for the connector data source from which the credential was obtained (optional)
     * @param string $attr_key Attribute name such as token, userid, username, or password (optional)
     * @param string $attr_value Encrypted value for the attribute specified (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationCredentialsGetWithHttpInfo($access_token = null, $user_id = null, $connector_id = null, $attr_key = null, $attr_value = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/credentials";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($connector_id !== null) {
            $queryParams['connector_id'] = $this->apiClient->getSerializer()->toQueryValue($connector_id);
        }
        // query params
        if ($attr_key !== null) {
            $queryParams['attr_key'] = $this->apiClient->getSerializer()->toQueryValue($attr_key);
        }
        // query params
        if ($attr_value !== null) {
            $queryParams['attr_value'] = $this->apiClient->getSerializer()->toQueryValue($attr_value);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2004',
                '/v2/application/credentials'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2004', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationMeasurementsGet
     *
     * Get measurements for all users using your application
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which originally stored the measurement (optional)
     * @param int $connector_id The id for the connector data source from which the measurement was obtained (optional)
     * @param int $variable_id ID of the variable for which we are creating the measurement records (optional)
     * @param int $source_id Application or device used to record the measurement values (optional)
     * @param string $start_time start time for the measurement event. Use ISO 8601 datetime format (optional)
     * @param float $value The value of the measurement after conversion to the default unit for that variable (optional)
     * @param int $unit_id The default unit id for the variable (optional)
     * @param float $original_value Unconverted value of measurement as originally posted (before conversion to default unit) (optional)
     * @param int $original_unit_id Unit id of the measurement as originally submitted (optional)
     * @param int $duration The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $note An optional note the user may include with their measurement (optional)
     * @param float $latitude Latitude at which the measurement was taken (optional)
     * @param float $longitude Longitude at which the measurement was taken (optional)
     * @param string $location Optional human readable name for the location where the measurement was recorded (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param string $error An error message if there is a problem with the measurement (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2005
     */
    public function v2ApplicationMeasurementsGet($access_token = null, $user_id = null, $client_id = null, $connector_id = null, $variable_id = null, $source_id = null, $start_time = null, $value = null, $unit_id = null, $original_value = null, $original_unit_id = null, $duration = null, $note = null, $latitude = null, $longitude = null, $location = null, $created_at = null, $updated_at = null, $error = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationMeasurementsGetWithHttpInfo($access_token, $user_id, $client_id, $connector_id, $variable_id, $source_id, $start_time, $value, $unit_id, $original_value, $original_unit_id, $duration, $note, $latitude, $longitude, $location, $created_at, $updated_at, $error, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationMeasurementsGetWithHttpInfo
     *
     * Get measurements for all users using your application
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which originally stored the measurement (optional)
     * @param int $connector_id The id for the connector data source from which the measurement was obtained (optional)
     * @param int $variable_id ID of the variable for which we are creating the measurement records (optional)
     * @param int $source_id Application or device used to record the measurement values (optional)
     * @param string $start_time start time for the measurement event. Use ISO 8601 datetime format (optional)
     * @param float $value The value of the measurement after conversion to the default unit for that variable (optional)
     * @param int $unit_id The default unit id for the variable (optional)
     * @param float $original_value Unconverted value of measurement as originally posted (before conversion to default unit) (optional)
     * @param int $original_unit_id Unit id of the measurement as originally submitted (optional)
     * @param int $duration The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $note An optional note the user may include with their measurement (optional)
     * @param float $latitude Latitude at which the measurement was taken (optional)
     * @param float $longitude Longitude at which the measurement was taken (optional)
     * @param string $location Optional human readable name for the location where the measurement was recorded (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param string $error An error message if there is a problem with the measurement (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationMeasurementsGetWithHttpInfo($access_token = null, $user_id = null, $client_id = null, $connector_id = null, $variable_id = null, $source_id = null, $start_time = null, $value = null, $unit_id = null, $original_value = null, $original_unit_id = null, $duration = null, $note = null, $latitude = null, $longitude = null, $location = null, $created_at = null, $updated_at = null, $error = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/measurements";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($connector_id !== null) {
            $queryParams['connector_id'] = $this->apiClient->getSerializer()->toQueryValue($connector_id);
        }
        // query params
        if ($variable_id !== null) {
            $queryParams['variable_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_id);
        }
        // query params
        if ($source_id !== null) {
            $queryParams['source_id'] = $this->apiClient->getSerializer()->toQueryValue($source_id);
        }
        // query params
        if ($start_time !== null) {
            $queryParams['start_time'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = $this->apiClient->getSerializer()->toQueryValue($value);
        }
        // query params
        if ($unit_id !== null) {
            $queryParams['unit_id'] = $this->apiClient->getSerializer()->toQueryValue($unit_id);
        }
        // query params
        if ($original_value !== null) {
            $queryParams['original_value'] = $this->apiClient->getSerializer()->toQueryValue($original_value);
        }
        // query params
        if ($original_unit_id !== null) {
            $queryParams['original_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($original_unit_id);
        }
        // query params
        if ($duration !== null) {
            $queryParams['duration'] = $this->apiClient->getSerializer()->toQueryValue($duration);
        }
        // query params
        if ($note !== null) {
            $queryParams['note'] = $this->apiClient->getSerializer()->toQueryValue($note);
        }
        // query params
        if ($latitude !== null) {
            $queryParams['latitude'] = $this->apiClient->getSerializer()->toQueryValue($latitude);
        }
        // query params
        if ($longitude !== null) {
            $queryParams['longitude'] = $this->apiClient->getSerializer()->toQueryValue($longitude);
        }
        // query params
        if ($location !== null) {
            $queryParams['location'] = $this->apiClient->getSerializer()->toQueryValue($location);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($error !== null) {
            $queryParams['error'] = $this->apiClient->getSerializer()->toQueryValue($error);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2005',
                '/v2/application/measurements'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationTrackingRemindersGet
     *
     * Get tracking reminders
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which last created or updated this trackingReminder (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2001
     */
    public function v2ApplicationTrackingRemindersGet($access_token = null, $user_id = null, $client_id = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationTrackingRemindersGetWithHttpInfo($access_token, $user_id, $client_id, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationTrackingRemindersGetWithHttpInfo
     *
     * Get tracking reminders
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which last created or updated this trackingReminder (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationTrackingRemindersGetWithHttpInfo($access_token = null, $user_id = null, $client_id = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/trackingReminders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2001',
                '/v2/application/trackingReminders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2001', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2001', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationUpdatesGet
     *
     * Get all Updates
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $connector_id connector_id (optional)
     * @param int $number_of_measurements number_of_measurements (optional)
     * @param bool $success success (optional)
     * @param string $message message (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2006
     */
    public function v2ApplicationUpdatesGet($access_token = null, $user_id = null, $connector_id = null, $number_of_measurements = null, $success = null, $message = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationUpdatesGetWithHttpInfo($access_token, $user_id, $connector_id, $number_of_measurements, $success, $message, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationUpdatesGetWithHttpInfo
     *
     * Get all Updates
     *
     * @param string $access_token Application&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $connector_id connector_id (optional)
     * @param int $number_of_measurements number_of_measurements (optional)
     * @param bool $success success (optional)
     * @param string $message message (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationUpdatesGetWithHttpInfo($access_token = null, $user_id = null, $connector_id = null, $number_of_measurements = null, $success = null, $message = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/updates";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($connector_id !== null) {
            $queryParams['connector_id'] = $this->apiClient->getSerializer()->toQueryValue($connector_id);
        }
        // query params
        if ($number_of_measurements !== null) {
            $queryParams['number_of_measurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_measurements);
        }
        // query params
        if ($success !== null) {
            $queryParams['success'] = $this->apiClient->getSerializer()->toQueryValue($success);
        }
        // query params
        if ($message !== null) {
            $queryParams['message'] = $this->apiClient->getSerializer()->toQueryValue($message);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2006',
                '/v2/application/updates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2006', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2006', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationUserVariableRelationshipsGet
     *
     * Get all UserVariableRelationships
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id id (optional)
     * @param string $confidence_level Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param float $confidence_score A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param string $direction Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. (optional)
     * @param int $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $error_message error_message (optional)
     * @param int $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param int $outcome_variable_id Variable ID for the outcome variable (optional)
     * @param int $predictor_variable_id Variable ID for the predictor variable (optional)
     * @param int $predictor_unit_id ID for default unit of the predictor variable (optional)
     * @param float $sinn_rank A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting. (optional)
     * @param string $strength_level Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores. (optional)
     * @param float $strength_score A value represented to the size of the effect which the predictor appears to have on the outcome. (optional)
     * @param string $vote vote (optional)
     * @param float $value_predicting_high_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes an above average outcome value (optional)
     * @param float $value_predicting_low_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes a below average outcome value (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2007
     */
    public function v2ApplicationUserVariableRelationshipsGet($access_token = null, $user_id = null, $id = null, $confidence_level = null, $confidence_score = null, $direction = null, $duration_of_action = null, $error_message = null, $onset_delay = null, $outcome_variable_id = null, $predictor_variable_id = null, $predictor_unit_id = null, $sinn_rank = null, $strength_level = null, $strength_score = null, $vote = null, $value_predicting_high_outcome = null, $value_predicting_low_outcome = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationUserVariableRelationshipsGetWithHttpInfo($access_token, $user_id, $id, $confidence_level, $confidence_score, $direction, $duration_of_action, $error_message, $onset_delay, $outcome_variable_id, $predictor_variable_id, $predictor_unit_id, $sinn_rank, $strength_level, $strength_score, $vote, $value_predicting_high_outcome, $value_predicting_low_outcome, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationUserVariableRelationshipsGetWithHttpInfo
     *
     * Get all UserVariableRelationships
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id id (optional)
     * @param string $confidence_level Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param float $confidence_score A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors (optional)
     * @param string $direction Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values. (optional)
     * @param int $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $error_message error_message (optional)
     * @param int $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param int $outcome_variable_id Variable ID for the outcome variable (optional)
     * @param int $predictor_variable_id Variable ID for the predictor variable (optional)
     * @param int $predictor_unit_id ID for default unit of the predictor variable (optional)
     * @param float $sinn_rank A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting. (optional)
     * @param string $strength_level Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores. (optional)
     * @param float $strength_score A value represented to the size of the effect which the predictor appears to have on the outcome. (optional)
     * @param string $vote vote (optional)
     * @param float $value_predicting_high_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes an above average outcome value (optional)
     * @param float $value_predicting_low_outcome Value for the predictor variable (in it&#39;s default unit) which typically precedes a below average outcome value (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationUserVariableRelationshipsGetWithHttpInfo($access_token = null, $user_id = null, $id = null, $confidence_level = null, $confidence_score = null, $direction = null, $duration_of_action = null, $error_message = null, $onset_delay = null, $outcome_variable_id = null, $predictor_variable_id = null, $predictor_unit_id = null, $sinn_rank = null, $strength_level = null, $strength_score = null, $vote = null, $value_predicting_high_outcome = null, $value_predicting_low_outcome = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/userVariableRelationships";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($confidence_level !== null) {
            $queryParams['confidence_level'] = $this->apiClient->getSerializer()->toQueryValue($confidence_level);
        }
        // query params
        if ($confidence_score !== null) {
            $queryParams['confidence_score'] = $this->apiClient->getSerializer()->toQueryValue($confidence_score);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = $this->apiClient->getSerializer()->toQueryValue($direction);
        }
        // query params
        if ($duration_of_action !== null) {
            $queryParams['duration_of_action'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }
        // query params
        if ($error_message !== null) {
            $queryParams['error_message'] = $this->apiClient->getSerializer()->toQueryValue($error_message);
        }
        // query params
        if ($onset_delay !== null) {
            $queryParams['onset_delay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }
        // query params
        if ($outcome_variable_id !== null) {
            $queryParams['outcome_variable_id'] = $this->apiClient->getSerializer()->toQueryValue($outcome_variable_id);
        }
        // query params
        if ($predictor_variable_id !== null) {
            $queryParams['predictor_variable_id'] = $this->apiClient->getSerializer()->toQueryValue($predictor_variable_id);
        }
        // query params
        if ($predictor_unit_id !== null) {
            $queryParams['predictor_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($predictor_unit_id);
        }
        // query params
        if ($sinn_rank !== null) {
            $queryParams['sinn_rank'] = $this->apiClient->getSerializer()->toQueryValue($sinn_rank);
        }
        // query params
        if ($strength_level !== null) {
            $queryParams['strength_level'] = $this->apiClient->getSerializer()->toQueryValue($strength_level);
        }
        // query params
        if ($strength_score !== null) {
            $queryParams['strength_score'] = $this->apiClient->getSerializer()->toQueryValue($strength_score);
        }
        // query params
        if ($vote !== null) {
            $queryParams['vote'] = $this->apiClient->getSerializer()->toQueryValue($vote);
        }
        // query params
        if ($value_predicting_high_outcome !== null) {
            $queryParams['value_predicting_high_outcome'] = $this->apiClient->getSerializer()->toQueryValue($value_predicting_high_outcome);
        }
        // query params
        if ($value_predicting_low_outcome !== null) {
            $queryParams['value_predicting_low_outcome'] = $this->apiClient->getSerializer()->toQueryValue($value_predicting_low_outcome);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2007',
                '/v2/application/userVariableRelationships'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2007', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2007', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationUserVariablesGet
     *
     * Get all UserVariables
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which last created or updated this user variable (optional)
     * @param int $parent_id ID of the parent variable if this variable has any parent (optional)
     * @param int $variable_id ID of variable (optional)
     * @param int $default_unit_id D of unit to use for this variable (optional)
     * @param float $minimum_allowed_value The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis. (optional)
     * @param float $maximum_allowed_value The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis. (optional)
     * @param float $filling_value When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. (optional)
     * @param int $join_with The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables (optional)
     * @param int $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param int $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param int $variable_category_id ID of variable category (optional)
     * @param int $updated updated (optional)
     * @param int $public Is variable public (optional)
     * @param bool $cause_only A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user (optional)
     * @param string $filling_type 0 -&gt; No filling, 1 -&gt; Use filling-value (optional)
     * @param int $number_of_measurements Number of measurements (optional)
     * @param int $number_of_processed_measurements Number of processed measurements (optional)
     * @param int $measurements_at_last_analysis Number of measurements at last analysis (optional)
     * @param int $last_unit_id ID of last Unit (optional)
     * @param int $last_original_unit_id ID of last original Unit (optional)
     * @param int $last_original_value Last original value which is stored (optional)
     * @param float $last_value Last Value (optional)
     * @param int $last_source_id ID of last source (optional)
     * @param int $number_of_correlations Number of correlations for this variable (optional)
     * @param string $status status (optional)
     * @param string $error_message error_message (optional)
     * @param string $last_successful_update_time When this variable or its settings were last updated (optional)
     * @param float $standard_deviation Standard deviation (optional)
     * @param float $variance Variance (optional)
     * @param float $minimum_recorded_value Minimum recorded value of this variable (optional)
     * @param float $maximum_recorded_value Maximum recorded value of this variable (optional)
     * @param float $mean Mean (optional)
     * @param float $median Median (optional)
     * @param int $most_common_unit_id Most common Unit ID (optional)
     * @param float $most_common_value Most common value (optional)
     * @param float $number_of_unique_daily_values Number of unique daily values (optional)
     * @param int $number_of_changes Number of changes (optional)
     * @param float $skewness Skewness (optional)
     * @param float $kurtosis Kurtosis (optional)
     * @param float $latitude Latitude (optional)
     * @param float $longitude Longitude (optional)
     * @param string $location Location (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param bool $outcome Outcome variables (those with &#x60;outcome&#x60; &#x3D;&#x3D; 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables (optional)
     * @param string $sources Comma-separated list of source names to limit variables to those sources (optional)
     * @param int $earliest_source_time Earliest source time (optional)
     * @param int $latest_source_time Latest source time (optional)
     * @param int $earliest_measurement_time Earliest measurement time (optional)
     * @param int $latest_measurement_time Latest measurement time (optional)
     * @param int $earliest_filling_time Earliest filling time (optional)
     * @param int $latest_filling_time Latest filling time (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2008
     */
    public function v2ApplicationUserVariablesGet($access_token = null, $user_id = null, $client_id = null, $parent_id = null, $variable_id = null, $default_unit_id = null, $minimum_allowed_value = null, $maximum_allowed_value = null, $filling_value = null, $join_with = null, $onset_delay = null, $duration_of_action = null, $variable_category_id = null, $updated = null, $public = null, $cause_only = null, $filling_type = null, $number_of_measurements = null, $number_of_processed_measurements = null, $measurements_at_last_analysis = null, $last_unit_id = null, $last_original_unit_id = null, $last_original_value = null, $last_value = null, $last_source_id = null, $number_of_correlations = null, $status = null, $error_message = null, $last_successful_update_time = null, $standard_deviation = null, $variance = null, $minimum_recorded_value = null, $maximum_recorded_value = null, $mean = null, $median = null, $most_common_unit_id = null, $most_common_value = null, $number_of_unique_daily_values = null, $number_of_changes = null, $skewness = null, $kurtosis = null, $latitude = null, $longitude = null, $location = null, $created_at = null, $updated_at = null, $outcome = null, $sources = null, $earliest_source_time = null, $latest_source_time = null, $earliest_measurement_time = null, $latest_measurement_time = null, $earliest_filling_time = null, $latest_filling_time = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationUserVariablesGetWithHttpInfo($access_token, $user_id, $client_id, $parent_id, $variable_id, $default_unit_id, $minimum_allowed_value, $maximum_allowed_value, $filling_value, $join_with, $onset_delay, $duration_of_action, $variable_category_id, $updated, $public, $cause_only, $filling_type, $number_of_measurements, $number_of_processed_measurements, $measurements_at_last_analysis, $last_unit_id, $last_original_unit_id, $last_original_value, $last_value, $last_source_id, $number_of_correlations, $status, $error_message, $last_successful_update_time, $standard_deviation, $variance, $minimum_recorded_value, $maximum_recorded_value, $mean, $median, $most_common_unit_id, $most_common_value, $number_of_unique_daily_values, $number_of_changes, $skewness, $kurtosis, $latitude, $longitude, $location, $created_at, $updated_at, $outcome, $sources, $earliest_source_time, $latest_source_time, $earliest_measurement_time, $latest_measurement_time, $earliest_filling_time, $latest_filling_time, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationUserVariablesGetWithHttpInfo
     *
     * Get all UserVariables
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which last created or updated this user variable (optional)
     * @param int $parent_id ID of the parent variable if this variable has any parent (optional)
     * @param int $variable_id ID of variable (optional)
     * @param int $default_unit_id D of unit to use for this variable (optional)
     * @param float $minimum_allowed_value The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis. (optional)
     * @param float $maximum_allowed_value The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis. (optional)
     * @param float $filling_value When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. (optional)
     * @param int $join_with The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables (optional)
     * @param int $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param int $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param int $variable_category_id ID of variable category (optional)
     * @param int $updated updated (optional)
     * @param int $public Is variable public (optional)
     * @param bool $cause_only A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user (optional)
     * @param string $filling_type 0 -&gt; No filling, 1 -&gt; Use filling-value (optional)
     * @param int $number_of_measurements Number of measurements (optional)
     * @param int $number_of_processed_measurements Number of processed measurements (optional)
     * @param int $measurements_at_last_analysis Number of measurements at last analysis (optional)
     * @param int $last_unit_id ID of last Unit (optional)
     * @param int $last_original_unit_id ID of last original Unit (optional)
     * @param int $last_original_value Last original value which is stored (optional)
     * @param float $last_value Last Value (optional)
     * @param int $last_source_id ID of last source (optional)
     * @param int $number_of_correlations Number of correlations for this variable (optional)
     * @param string $status status (optional)
     * @param string $error_message error_message (optional)
     * @param string $last_successful_update_time When this variable or its settings were last updated (optional)
     * @param float $standard_deviation Standard deviation (optional)
     * @param float $variance Variance (optional)
     * @param float $minimum_recorded_value Minimum recorded value of this variable (optional)
     * @param float $maximum_recorded_value Maximum recorded value of this variable (optional)
     * @param float $mean Mean (optional)
     * @param float $median Median (optional)
     * @param int $most_common_unit_id Most common Unit ID (optional)
     * @param float $most_common_value Most common value (optional)
     * @param float $number_of_unique_daily_values Number of unique daily values (optional)
     * @param int $number_of_changes Number of changes (optional)
     * @param float $skewness Skewness (optional)
     * @param float $kurtosis Kurtosis (optional)
     * @param float $latitude Latitude (optional)
     * @param float $longitude Longitude (optional)
     * @param string $location Location (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param bool $outcome Outcome variables (those with &#x60;outcome&#x60; &#x3D;&#x3D; 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables (optional)
     * @param string $sources Comma-separated list of source names to limit variables to those sources (optional)
     * @param int $earliest_source_time Earliest source time (optional)
     * @param int $latest_source_time Latest source time (optional)
     * @param int $earliest_measurement_time Earliest measurement time (optional)
     * @param int $latest_measurement_time Latest measurement time (optional)
     * @param int $earliest_filling_time Earliest filling time (optional)
     * @param int $latest_filling_time Latest filling time (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationUserVariablesGetWithHttpInfo($access_token = null, $user_id = null, $client_id = null, $parent_id = null, $variable_id = null, $default_unit_id = null, $minimum_allowed_value = null, $maximum_allowed_value = null, $filling_value = null, $join_with = null, $onset_delay = null, $duration_of_action = null, $variable_category_id = null, $updated = null, $public = null, $cause_only = null, $filling_type = null, $number_of_measurements = null, $number_of_processed_measurements = null, $measurements_at_last_analysis = null, $last_unit_id = null, $last_original_unit_id = null, $last_original_value = null, $last_value = null, $last_source_id = null, $number_of_correlations = null, $status = null, $error_message = null, $last_successful_update_time = null, $standard_deviation = null, $variance = null, $minimum_recorded_value = null, $maximum_recorded_value = null, $mean = null, $median = null, $most_common_unit_id = null, $most_common_value = null, $number_of_unique_daily_values = null, $number_of_changes = null, $skewness = null, $kurtosis = null, $latitude = null, $longitude = null, $location = null, $created_at = null, $updated_at = null, $outcome = null, $sources = null, $earliest_source_time = null, $latest_source_time = null, $earliest_measurement_time = null, $latest_measurement_time = null, $earliest_filling_time = null, $latest_filling_time = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/userVariables";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($parent_id !== null) {
            $queryParams['parent_id'] = $this->apiClient->getSerializer()->toQueryValue($parent_id);
        }
        // query params
        if ($variable_id !== null) {
            $queryParams['variable_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_id);
        }
        // query params
        if ($default_unit_id !== null) {
            $queryParams['default_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($default_unit_id);
        }
        // query params
        if ($minimum_allowed_value !== null) {
            $queryParams['minimum_allowed_value'] = $this->apiClient->getSerializer()->toQueryValue($minimum_allowed_value);
        }
        // query params
        if ($maximum_allowed_value !== null) {
            $queryParams['maximum_allowed_value'] = $this->apiClient->getSerializer()->toQueryValue($maximum_allowed_value);
        }
        // query params
        if ($filling_value !== null) {
            $queryParams['filling_value'] = $this->apiClient->getSerializer()->toQueryValue($filling_value);
        }
        // query params
        if ($join_with !== null) {
            $queryParams['join_with'] = $this->apiClient->getSerializer()->toQueryValue($join_with);
        }
        // query params
        if ($onset_delay !== null) {
            $queryParams['onset_delay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }
        // query params
        if ($duration_of_action !== null) {
            $queryParams['duration_of_action'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }
        // query params
        if ($variable_category_id !== null) {
            $queryParams['variable_category_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_id);
        }
        // query params
        if ($updated !== null) {
            $queryParams['updated'] = $this->apiClient->getSerializer()->toQueryValue($updated);
        }
        // query params
        if ($public !== null) {
            $queryParams['public'] = $this->apiClient->getSerializer()->toQueryValue($public);
        }
        // query params
        if ($cause_only !== null) {
            $queryParams['cause_only'] = $this->apiClient->getSerializer()->toQueryValue($cause_only);
        }
        // query params
        if ($filling_type !== null) {
            $queryParams['filling_type'] = $this->apiClient->getSerializer()->toQueryValue($filling_type);
        }
        // query params
        if ($number_of_measurements !== null) {
            $queryParams['number_of_measurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_measurements);
        }
        // query params
        if ($number_of_processed_measurements !== null) {
            $queryParams['number_of_processed_measurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_processed_measurements);
        }
        // query params
        if ($measurements_at_last_analysis !== null) {
            $queryParams['measurements_at_last_analysis'] = $this->apiClient->getSerializer()->toQueryValue($measurements_at_last_analysis);
        }
        // query params
        if ($last_unit_id !== null) {
            $queryParams['last_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($last_unit_id);
        }
        // query params
        if ($last_original_unit_id !== null) {
            $queryParams['last_original_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($last_original_unit_id);
        }
        // query params
        if ($last_original_value !== null) {
            $queryParams['last_original_value'] = $this->apiClient->getSerializer()->toQueryValue($last_original_value);
        }
        // query params
        if ($last_value !== null) {
            $queryParams['last_value'] = $this->apiClient->getSerializer()->toQueryValue($last_value);
        }
        // query params
        if ($last_source_id !== null) {
            $queryParams['last_source_id'] = $this->apiClient->getSerializer()->toQueryValue($last_source_id);
        }
        // query params
        if ($number_of_correlations !== null) {
            $queryParams['number_of_correlations'] = $this->apiClient->getSerializer()->toQueryValue($number_of_correlations);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($error_message !== null) {
            $queryParams['error_message'] = $this->apiClient->getSerializer()->toQueryValue($error_message);
        }
        // query params
        if ($last_successful_update_time !== null) {
            $queryParams['last_successful_update_time'] = $this->apiClient->getSerializer()->toQueryValue($last_successful_update_time);
        }
        // query params
        if ($standard_deviation !== null) {
            $queryParams['standard_deviation'] = $this->apiClient->getSerializer()->toQueryValue($standard_deviation);
        }
        // query params
        if ($variance !== null) {
            $queryParams['variance'] = $this->apiClient->getSerializer()->toQueryValue($variance);
        }
        // query params
        if ($minimum_recorded_value !== null) {
            $queryParams['minimum_recorded_value'] = $this->apiClient->getSerializer()->toQueryValue($minimum_recorded_value);
        }
        // query params
        if ($maximum_recorded_value !== null) {
            $queryParams['maximum_recorded_value'] = $this->apiClient->getSerializer()->toQueryValue($maximum_recorded_value);
        }
        // query params
        if ($mean !== null) {
            $queryParams['mean'] = $this->apiClient->getSerializer()->toQueryValue($mean);
        }
        // query params
        if ($median !== null) {
            $queryParams['median'] = $this->apiClient->getSerializer()->toQueryValue($median);
        }
        // query params
        if ($most_common_unit_id !== null) {
            $queryParams['most_common_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($most_common_unit_id);
        }
        // query params
        if ($most_common_value !== null) {
            $queryParams['most_common_value'] = $this->apiClient->getSerializer()->toQueryValue($most_common_value);
        }
        // query params
        if ($number_of_unique_daily_values !== null) {
            $queryParams['number_of_unique_daily_values'] = $this->apiClient->getSerializer()->toQueryValue($number_of_unique_daily_values);
        }
        // query params
        if ($number_of_changes !== null) {
            $queryParams['number_of_changes'] = $this->apiClient->getSerializer()->toQueryValue($number_of_changes);
        }
        // query params
        if ($skewness !== null) {
            $queryParams['skewness'] = $this->apiClient->getSerializer()->toQueryValue($skewness);
        }
        // query params
        if ($kurtosis !== null) {
            $queryParams['kurtosis'] = $this->apiClient->getSerializer()->toQueryValue($kurtosis);
        }
        // query params
        if ($latitude !== null) {
            $queryParams['latitude'] = $this->apiClient->getSerializer()->toQueryValue($latitude);
        }
        // query params
        if ($longitude !== null) {
            $queryParams['longitude'] = $this->apiClient->getSerializer()->toQueryValue($longitude);
        }
        // query params
        if ($location !== null) {
            $queryParams['location'] = $this->apiClient->getSerializer()->toQueryValue($location);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($outcome !== null) {
            $queryParams['outcome'] = $this->apiClient->getSerializer()->toQueryValue($outcome);
        }
        // query params
        if ($sources !== null) {
            $queryParams['sources'] = $this->apiClient->getSerializer()->toQueryValue($sources);
        }
        // query params
        if ($earliest_source_time !== null) {
            $queryParams['earliest_source_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_source_time);
        }
        // query params
        if ($latest_source_time !== null) {
            $queryParams['latest_source_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_source_time);
        }
        // query params
        if ($earliest_measurement_time !== null) {
            $queryParams['earliest_measurement_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_measurement_time);
        }
        // query params
        if ($latest_measurement_time !== null) {
            $queryParams['latest_measurement_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_measurement_time);
        }
        // query params
        if ($earliest_filling_time !== null) {
            $queryParams['earliest_filling_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_filling_time);
        }
        // query params
        if ($latest_filling_time !== null) {
            $queryParams['latest_filling_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_filling_time);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2008',
                '/v2/application/userVariables'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2008', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2008', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationVariableUserSourcesGet
     *
     * Get all VariableUserSources
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $variable_id ID of variable (optional)
     * @param int $timestamp Time that this measurement occurred Uses epoch minute (epoch time divided by 60) (optional)
     * @param int $earliest_measurement_time Earliest measurement time (optional)
     * @param int $latest_measurement_time Latest measurement time (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2009
     */
    public function v2ApplicationVariableUserSourcesGet($access_token = null, $user_id = null, $variable_id = null, $timestamp = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationVariableUserSourcesGetWithHttpInfo($access_token, $user_id, $variable_id, $timestamp, $earliest_measurement_time, $latest_measurement_time, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationVariableUserSourcesGetWithHttpInfo
     *
     * Get all VariableUserSources
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $variable_id ID of variable (optional)
     * @param int $timestamp Time that this measurement occurred Uses epoch minute (epoch time divided by 60) (optional)
     * @param int $earliest_measurement_time Earliest measurement time (optional)
     * @param int $latest_measurement_time Latest measurement time (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2009, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationVariableUserSourcesGetWithHttpInfo($access_token = null, $user_id = null, $variable_id = null, $timestamp = null, $earliest_measurement_time = null, $latest_measurement_time = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/variableUserSources";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($variable_id !== null) {
            $queryParams['variable_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_id);
        }
        // query params
        if ($timestamp !== null) {
            $queryParams['timestamp'] = $this->apiClient->getSerializer()->toQueryValue($timestamp);
        }
        // query params
        if ($earliest_measurement_time !== null) {
            $queryParams['earliest_measurement_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_measurement_time);
        }
        // query params
        if ($latest_measurement_time !== null) {
            $queryParams['latest_measurement_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_measurement_time);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse2009',
                '/v2/application/variableUserSources'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2009', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2009', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v2ApplicationVotesGet
     *
     * Get all Votes
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which last created or updated this vote (optional)
     * @param int $cause_id ID of predictor variable (optional)
     * @param int $effect_id ID of outcome variable (optional)
     * @param int $value Value of Vote. 1 is for upvote. 0 is for downvote.  Otherwise, there is no vote. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse20010
     */
    public function v2ApplicationVotesGet($access_token = null, $user_id = null, $client_id = null, $cause_id = null, $effect_id = null, $value = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v2ApplicationVotesGetWithHttpInfo($access_token, $user_id, $client_id, $cause_id, $effect_id, $value, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v2ApplicationVotesGetWithHttpInfo
     *
     * Get all Votes
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $client_id The ID of the client application which last created or updated this vote (optional)
     * @param int $cause_id ID of predictor variable (optional)
     * @param int $effect_id ID of outcome variable (optional)
     * @param int $value Value of Vote. 1 is for upvote. 0 is for downvote.  Otherwise, there is no vote. (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse20010, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2ApplicationVotesGetWithHttpInfo($access_token = null, $user_id = null, $client_id = null, $cause_id = null, $effect_id = null, $value = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v2/application/votes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($cause_id !== null) {
            $queryParams['cause_id'] = $this->apiClient->getSerializer()->toQueryValue($cause_id);
        }
        // query params
        if ($effect_id !== null) {
            $queryParams['effect_id'] = $this->apiClient->getSerializer()->toQueryValue($effect_id);
        }
        // query params
        if ($value !== null) {
            $queryParams['value'] = $this->apiClient->getSerializer()->toQueryValue($value);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
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
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse20010',
                '/v2/application/votes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse20010', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse20010', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
