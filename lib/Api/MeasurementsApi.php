<?php
/**
 * MeasurementsApi
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
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

namespace QuantiModo\Client\Api;

use \QuantiModo\Client\Configuration;
use \QuantiModo\Client\ApiClient;
use \QuantiModo\Client\ApiException;
use \QuantiModo\Client\ObjectSerializer;

/**
 * MeasurementsApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeasurementsApi
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
        if ($apiClient == null) {
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
     * @return MeasurementsApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1MeasurementSourcesGet
     *
     * Get measurement sources.
     *
     *
     * @return \QuantiModo\Client\Model\MeasurementSource
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementSourcesGet()
    {
        list($response) = $this->v1MeasurementSourcesGetWithHttpInfo();
        return $response;
    }


    /**
     * Operation v1MeasurementSourcesGetWithHttpInfo
     *
     * Get measurement sources.
     *
     *
     * @return Array of \QuantiModo\Client\Model\MeasurementSource, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementSourcesGetWithHttpInfo()
    {
        
        // parse inputs
        $resourcePath = "/v1/measurementSources";
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
                '\QuantiModo\Client\Model\MeasurementSource'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\MeasurementSource', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\MeasurementSource', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v1MeasurementSourcesPost
     *
     * Add a data source.
     *
     * @param \QuantiModo\Client\Model\MeasurementSource $body An array of names of data sources you want to add. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return void
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementSourcesPost($body, $access_token = null)
    {
        list($response) = $this->v1MeasurementSourcesPostWithHttpInfo($body, $access_token);
        return $response;
    }


    /**
     * Operation v1MeasurementSourcesPostWithHttpInfo
     *
     * Add a data source.
     *
     * @param \QuantiModo\Client\Model\MeasurementSource $body An array of names of data sources you want to add. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementSourcesPostWithHttpInfo($body, $access_token = null)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1MeasurementSourcesPost');
        }

        // parse inputs
        $resourcePath = "/v1/measurementSources";
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
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
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
     * Operation v1MeasurementsDailyGet
     *
     * Get daily measurements for this user.
     *
     * @param string $variable_name Name of the variable you want measurements for (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $abbreviated_unit_name The unit your want the measurements in (optional)
     * @param string $start_time The lower limit of measurements returned (Iso8601) (optional)
     * @param string $end_time The upper limit of measurements returned (Iso8601) (optional)
     * @param int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     *
     * @return \QuantiModo\Client\Model\Measurement
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsDailyGet($variable_name, $access_token = null, $abbreviated_unit_name = null, $start_time = null, $end_time = null, $grouping_width = null, $grouping_timezone = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1MeasurementsDailyGetWithHttpInfo($variable_name, $access_token, $abbreviated_unit_name, $start_time, $end_time, $grouping_width, $grouping_timezone, $limit, $offset, $sort);
        return $response;
    }


    /**
     * Operation v1MeasurementsDailyGetWithHttpInfo
     *
     * Get daily measurements for this user.
     *
     * @param string $variable_name Name of the variable you want measurements for (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $abbreviated_unit_name The unit your want the measurements in (optional)
     * @param string $start_time The lower limit of measurements returned (Iso8601) (optional)
     * @param string $end_time The upper limit of measurements returned (Iso8601) (optional)
     * @param int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     *
     * @return Array of \QuantiModo\Client\Model\Measurement, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsDailyGetWithHttpInfo($variable_name, $access_token = null, $abbreviated_unit_name = null, $start_time = null, $end_time = null, $grouping_width = null, $grouping_timezone = null, $limit = null, $offset = null, $sort = null)
    {
        
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1MeasurementsDailyGet');
        }

        // parse inputs
        $resourcePath = "/v1/measurements/daily";
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
        if ($variable_name !== null) {
            $queryParams['variableName'] = $this->apiClient->getSerializer()->toQueryValue($variable_name);
        }// query params
        if ($abbreviated_unit_name !== null) {
            $queryParams['abbreviatedUnitName'] = $this->apiClient->getSerializer()->toQueryValue($abbreviated_unit_name);
        }// query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }// query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }// query params
        if ($grouping_width !== null) {
            $queryParams['groupingWidth'] = $this->apiClient->getSerializer()->toQueryValue($grouping_width);
        }// query params
        if ($grouping_timezone !== null) {
            $queryParams['groupingTimezone'] = $this->apiClient->getSerializer()->toQueryValue($grouping_timezone);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Measurement'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Measurement', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Measurement', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v1MeasurementsDeletePost
     *
     * Delete a measurement.
     *
     * @param \QuantiModo\Client\Model\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @return \QuantiModo\Client\Model\CommonResponse
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsDeletePost($body)
    {
        list($response) = $this->v1MeasurementsDeletePostWithHttpInfo($body);
        return $response;
    }


    /**
     * Operation v1MeasurementsDeletePostWithHttpInfo
     *
     * Delete a measurement.
     *
     * @param \QuantiModo\Client\Model\MeasurementDelete $body The startTime and variableId of the measurement to be deleted. (required)
     *
     * @return Array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsDeletePostWithHttpInfo($body)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1MeasurementsDeletePost');
        }

        // parse inputs
        $resourcePath = "/v1/measurements/delete";
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

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\CommonResponse'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\CommonResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\CommonResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v1MeasurementsGet
     *
     * Get measurements for this user.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $variable_name Name of the variable you want measurements for (optional)
     * @param string $variable_category_name Name of the variable category you want measurements for (optional)
     * @param string $source Name of the source you want measurements for (supports exact name match only) (optional)
     * @param string $value Value of measurement (optional)
     * @param string $last_updated The time that this measurement was created or last updated in the format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $unit The unit you want the measurements returned in (optional)
     * @param string $start_time The lower limit of measurements returned (Epoch) (optional)
     * @param string $created_at The time the measurement record was first created in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local. (optional)
     * @param string $updated_at The time the measurement record was last changed in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local. (optional)
     * @param string $end_time The upper limit of measurements returned (Epoch) (optional)
     * @param int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     *
     * @return \QuantiModo\Client\Model\Measurement
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsGet($access_token = null, $variable_name = null, $variable_category_name = null, $source = null, $value = null, $last_updated = null, $unit = null, $start_time = null, $created_at = null, $updated_at = null, $end_time = null, $grouping_width = null, $grouping_timezone = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1MeasurementsGetWithHttpInfo($access_token, $variable_name, $variable_category_name, $source, $value, $last_updated, $unit, $start_time, $created_at, $updated_at, $end_time, $grouping_width, $grouping_timezone, $limit, $offset, $sort);
        return $response;
    }


    /**
     * Operation v1MeasurementsGetWithHttpInfo
     *
     * Get measurements for this user.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $variable_name Name of the variable you want measurements for (optional)
     * @param string $variable_category_name Name of the variable category you want measurements for (optional)
     * @param string $source Name of the source you want measurements for (supports exact name match only) (optional)
     * @param string $value Value of measurement (optional)
     * @param string $last_updated The time that this measurement was created or last updated in the format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $unit The unit you want the measurements returned in (optional)
     * @param string $start_time The lower limit of measurements returned (Epoch) (optional)
     * @param string $created_at The time the measurement record was first created in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local. (optional)
     * @param string $updated_at The time the measurement record was last changed in the format YYYY-MM-DDThh:mm:ss. Time zone should be UTC and not local. (optional)
     * @param string $end_time The upper limit of measurements returned (Epoch) (optional)
     * @param int $grouping_width The time (in seconds) over which measurements are grouped together (optional)
     * @param string $grouping_timezone The time (in seconds) over which measurements are grouped together (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     *
     * @return Array of \QuantiModo\Client\Model\Measurement, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsGetWithHttpInfo($access_token = null, $variable_name = null, $variable_category_name = null, $source = null, $value = null, $last_updated = null, $unit = null, $start_time = null, $created_at = null, $updated_at = null, $end_time = null, $grouping_width = null, $grouping_timezone = null, $limit = null, $offset = null, $sort = null)
    {
        
        // parse inputs
        $resourcePath = "/v1/measurements";
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
        if ($variable_name !== null) {
            $queryParams['variableName'] = $this->apiClient->getSerializer()->toQueryValue($variable_name);
        }// query params
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_name);
        }// query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }// query params
        if ($value !== null) {
            $queryParams['value'] = $this->apiClient->getSerializer()->toQueryValue($value);
        }// query params
        if ($last_updated !== null) {
            $queryParams['lastUpdated'] = $this->apiClient->getSerializer()->toQueryValue($last_updated);
        }// query params
        if ($unit !== null) {
            $queryParams['unit'] = $this->apiClient->getSerializer()->toQueryValue($unit);
        }// query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
        }// query params
        if ($created_at !== null) {
            $queryParams['createdAt'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }// query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }// query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }// query params
        if ($grouping_width !== null) {
            $queryParams['groupingWidth'] = $this->apiClient->getSerializer()->toQueryValue($grouping_width);
        }// query params
        if ($grouping_timezone !== null) {
            $queryParams['groupingTimezone'] = $this->apiClient->getSerializer()->toQueryValue($grouping_timezone);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }// query params
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Measurement'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Measurement', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Measurement', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v1MeasurementsPost
     *
     * Post a new set or update existing measurements to the database.
     *
     * @param \QuantiModo\Client\Model\MeasurementSet $body An array of measurements you want to insert. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return void
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsPost($body, $access_token = null)
    {
        list($response) = $this->v1MeasurementsPostWithHttpInfo($body, $access_token);
        return $response;
    }


    /**
     * Operation v1MeasurementsPostWithHttpInfo
     *
     * Post a new set or update existing measurements to the database.
     *
     * @param \QuantiModo\Client\Model\MeasurementSet $body An array of measurements you want to insert. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsPostWithHttpInfo($body, $access_token = null)
    {
        
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1MeasurementsPost');
        }

        // parse inputs
        $resourcePath = "/v1/measurements";
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
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
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
     * Operation v1MeasurementsRangeGet
     *
     * Get measurements range for this user.
     *
     * @param string $sources Enter source name to limit to specific source (varchar) (optional)
     * @param int $user If not specified, uses currently logged in user (bigint) (optional)
     *
     * @return \QuantiModo\Client\Model\MeasurementRange
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsRangeGet($sources = null, $user = null)
    {
        list($response) = $this->v1MeasurementsRangeGetWithHttpInfo($sources, $user);
        return $response;
    }


    /**
     * Operation v1MeasurementsRangeGetWithHttpInfo
     *
     * Get measurements range for this user.
     *
     * @param string $sources Enter source name to limit to specific source (varchar) (optional)
     * @param int $user If not specified, uses currently logged in user (bigint) (optional)
     *
     * @return Array of \QuantiModo\Client\Model\MeasurementRange, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v1MeasurementsRangeGetWithHttpInfo($sources = null, $user = null)
    {
        
        // parse inputs
        $resourcePath = "/v1/measurementsRange";
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
        if ($sources !== null) {
            $queryParams['sources'] = $this->apiClient->getSerializer()->toQueryValue($sources);
        }// query params
        if ($user !== null) {
            $queryParams['user'] = $this->apiClient->getSerializer()->toQueryValue($user);
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
                '\QuantiModo\Client\Model\MeasurementRange'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\MeasurementRange', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\MeasurementRange', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsCsvGet
     *
     * Get Measurements CSV.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return \SplFileObject
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsCsvGet($access_token = null)
    {
        list($response) = $this->v2MeasurementsCsvGetWithHttpInfo($access_token);
        return $response;
    }


    /**
     * Operation v2MeasurementsCsvGetWithHttpInfo
     *
     * Get Measurements CSV.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsCsvGetWithHttpInfo($access_token = null)
    {
        
        // parse inputs
        $resourcePath = "/v2/measurements/csv";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('text/csv'));
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SplFileObject'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsIdDelete
     *
     * Delete Measurement.
     *
     * @param int $id id of Measurement (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return \QuantiModo\Client\Model\InlineResponse20012
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsIdDelete($id, $access_token = null)
    {
        list($response) = $this->v2MeasurementsIdDeleteWithHttpInfo($id, $access_token);
        return $response;
    }


    /**
     * Operation v2MeasurementsIdDeleteWithHttpInfo
     *
     * Delete Measurement.
     *
     * @param int $id id of Measurement (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of \QuantiModo\Client\Model\InlineResponse20012, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v2MeasurementsIdDelete');
        }

        // parse inputs
        $resourcePath = "/v2/measurements/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse20012'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse20012', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse20012', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsIdGet
     *
     * Get Measurement.
     *
     * @param int $id id of Measurement (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return \QuantiModo\Client\Model\InlineResponse20011
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsIdGet($id, $access_token = null)
    {
        list($response) = $this->v2MeasurementsIdGetWithHttpInfo($id, $access_token);
        return $response;
    }


    /**
     * Operation v2MeasurementsIdGetWithHttpInfo
     *
     * Get Measurement.
     *
     * @param int $id id of Measurement (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of \QuantiModo\Client\Model\InlineResponse20011, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v2MeasurementsIdGet');
        }

        // parse inputs
        $resourcePath = "/v2/measurements/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
                '\QuantiModo\Client\Model\InlineResponse20011'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse20011', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse20011', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsIdPut
     *
     * Update Measurement.
     *
     * @param int $id id of Measurement (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \QuantiModo\Client\Model\Measurement $body Measurement that should be updated (optional)
     *
     * @return \QuantiModo\Client\Model\InlineResponse20012
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsIdPut($id, $access_token = null, $body = null)
    {
        list($response) = $this->v2MeasurementsIdPutWithHttpInfo($id, $access_token, $body);
        return $response;
    }


    /**
     * Operation v2MeasurementsIdPutWithHttpInfo
     *
     * Update Measurement.
     *
     * @param int $id id of Measurement (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \QuantiModo\Client\Model\Measurement $body Measurement that should be updated (optional)
     *
     * @return Array of \QuantiModo\Client\Model\InlineResponse20012, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling v2MeasurementsIdPut');
        }

        // parse inputs
        $resourcePath = "/v2/measurements/{id}";
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
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\InlineResponse20012'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse20012', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse20012', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsRequestCsvPost
     *
     * Post Request for Measurements CSV.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return int
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsRequestCsvPost($access_token = null)
    {
        list($response) = $this->v2MeasurementsRequestCsvPostWithHttpInfo($access_token);
        return $response;
    }


    /**
     * Operation v2MeasurementsRequestCsvPostWithHttpInfo
     *
     * Post Request for Measurements CSV.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of int, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsRequestCsvPostWithHttpInfo($access_token = null)
    {
        
        // parse inputs
        $resourcePath = "/v2/measurements/request_csv";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'int'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsRequestPdfPost
     *
     * Post Request for Measurements PDF.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return int
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsRequestPdfPost($access_token = null)
    {
        list($response) = $this->v2MeasurementsRequestPdfPostWithHttpInfo($access_token);
        return $response;
    }


    /**
     * Operation v2MeasurementsRequestPdfPostWithHttpInfo
     *
     * Post Request for Measurements PDF.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of int, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsRequestPdfPostWithHttpInfo($access_token = null)
    {
        
        // parse inputs
        $resourcePath = "/v2/measurements/request_pdf";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'int'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
    /**
     * Operation v2MeasurementsRequestXlsPost
     *
     * Post Request for Measurements XLS.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return int
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsRequestXlsPost($access_token = null)
    {
        list($response) = $this->v2MeasurementsRequestXlsPostWithHttpInfo($access_token);
        return $response;
    }


    /**
     * Operation v2MeasurementsRequestXlsPostWithHttpInfo
     *
     * Post Request for Measurements XLS.
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     *
     * @return Array of int, HTTP status code, HTTP response headers (array of strings)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     */
    public function v2MeasurementsRequestXlsPostWithHttpInfo($access_token = null)
    {
        
        // parse inputs
        $resourcePath = "/v2/measurements/request_xls";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'int'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
