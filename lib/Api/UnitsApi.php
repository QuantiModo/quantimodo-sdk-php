<?php
/**
 * UnitsApi
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
 * UnitsApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UnitsApi
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
     * @return UnitsApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1UnitCategoriesGet
     *
     * Get unit categories
     *
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\UnitCategory
     */
    public function v1UnitCategoriesGet()
    {
        list($response) = $this->v1UnitCategoriesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation v1UnitCategoriesGetWithHttpInfo
     *
     * Get unit categories
     *
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\UnitCategory, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UnitCategoriesGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/unitCategories";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                '\QuantiModo\Client\Model\UnitCategory',
                '/v1/unitCategories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\UnitCategory', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\UnitCategory', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1UnitsGet
     *
     * Get all available units
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id Unit id (optional)
     * @param string $unit_name Unit name (optional)
     * @param string $abbreviated_unit_name Restrict the results to a specific unit by providing the unit abbreviation. (optional)
     * @param string $unit_category_name Restrict the results to a specific unit category by providing the unit category name. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Unit[]
     */
    public function v1UnitsGet($access_token = null, $user_id = null, $id = null, $unit_name = null, $abbreviated_unit_name = null, $unit_category_name = null)
    {
        list($response) = $this->v1UnitsGetWithHttpInfo($access_token, $user_id, $id, $unit_name, $abbreviated_unit_name, $unit_category_name);
        return $response;
    }

    /**
     * Operation v1UnitsGetWithHttpInfo
     *
     * Get all available units
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id Unit id (optional)
     * @param string $unit_name Unit name (optional)
     * @param string $abbreviated_unit_name Restrict the results to a specific unit by providing the unit abbreviation. (optional)
     * @param string $unit_category_name Restrict the results to a specific unit category by providing the unit category name. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Unit[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UnitsGetWithHttpInfo($access_token = null, $user_id = null, $id = null, $unit_name = null, $abbreviated_unit_name = null, $unit_category_name = null)
    {
        // parse inputs
        $resourcePath = "/v1/units";
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
        if ($unit_name !== null) {
            $queryParams['unitName'] = $this->apiClient->getSerializer()->toQueryValue($unit_name);
        }
        // query params
        if ($abbreviated_unit_name !== null) {
            $queryParams['abbreviatedUnitName'] = $this->apiClient->getSerializer()->toQueryValue($abbreviated_unit_name);
        }
        // query params
        if ($unit_category_name !== null) {
            $queryParams['unitCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($unit_category_name);
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
                '\QuantiModo\Client\Model\Unit[]',
                '/v1/units'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Unit[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Unit[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1UnitsVariableGet
     *
     * Units for Variable
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $unit_name Name of Unit you want to retrieve (optional)
     * @param string $abbreviated_unit_name Abbreviated Unit Name of the unit you want (optional)
     * @param string $unit_category_name Name of the category you want units for (optional)
     * @param string $variable Name of the variable you want units for (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Unit[]
     */
    public function v1UnitsVariableGet($access_token = null, $user_id = null, $unit_name = null, $abbreviated_unit_name = null, $unit_category_name = null, $variable = null)
    {
        list($response) = $this->v1UnitsVariableGetWithHttpInfo($access_token, $user_id, $unit_name, $abbreviated_unit_name, $unit_category_name, $variable);
        return $response;
    }

    /**
     * Operation v1UnitsVariableGetWithHttpInfo
     *
     * Units for Variable
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $unit_name Name of Unit you want to retrieve (optional)
     * @param string $abbreviated_unit_name Abbreviated Unit Name of the unit you want (optional)
     * @param string $unit_category_name Name of the category you want units for (optional)
     * @param string $variable Name of the variable you want units for (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Unit[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UnitsVariableGetWithHttpInfo($access_token = null, $user_id = null, $unit_name = null, $abbreviated_unit_name = null, $unit_category_name = null, $variable = null)
    {
        // parse inputs
        $resourcePath = "/v1/unitsVariable";
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
        if ($unit_name !== null) {
            $queryParams['unitName'] = $this->apiClient->getSerializer()->toQueryValue($unit_name);
        }
        // query params
        if ($abbreviated_unit_name !== null) {
            $queryParams['abbreviatedUnitName'] = $this->apiClient->getSerializer()->toQueryValue($abbreviated_unit_name);
        }
        // query params
        if ($unit_category_name !== null) {
            $queryParams['unitCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($unit_category_name);
        }
        // query params
        if ($variable !== null) {
            $queryParams['variable'] = $this->apiClient->getSerializer()->toQueryValue($variable);
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
                '\QuantiModo\Client\Model\Unit[]',
                '/v1/unitsVariable'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Unit[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Unit[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
