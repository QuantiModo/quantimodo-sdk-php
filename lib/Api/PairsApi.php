<?php
/**
 * PairsApi
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QuantiModo
 *
 * Welcome to QuantiModo API! QuantiModo makes it easy to retrieve normalized user data from a wide array of devices and applications. [Learn about QuantiModo](https://quantimo.do) or contact us at <api@quantimo.do>.         Before you get started, you will need to: * Sign in/Sign up, and add some data at [https://app.quantimo.do/api/v2/account/connectors](https://app.quantimo.do/api/v2/account/connectors) to try out the API for yourself * Create an app to get your client id and secret at [https://app.quantimo.do/api/v2/apps](https://app.quantimo.do/api/v2/apps) * As long as you're signed in, it will use your browser's cookie for authentication.  However, client applications must use OAuth2 tokens to access the API.     ## Application Endpoints These endpoints give you access to all authorized users' data for that application. ### Getting Application Token Make a `POST` request to `/api/v2/oauth/access_token`         * `grant_type` Must be `client_credentials`.         * `clientId` Your application's clientId.         * `client_secret` Your application's client_secret.         * `redirect_uri` Your application's redirect url.                ## Example Queries ### Query Options The standard query options for QuantiModo API are as described in the table below. These are the available query options in QuantiModo API: <table>            <thead>                <tr>                    <th>Parameter</th>                    <th>Description</th>                </tr>            </thead>            <tbody>                <tr>                    <td>limit</td>                    <td>The LIMIT is used to limit the number of results returned.  So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.</td>                </tr>                <tr>                    <td>offset</td>                    <td>Suppose you wanted to show results 11-20. You'd set the    offset to 10 and the limit to 10.</td>                </tr>                <tr>                    <td>sort</td>                    <td>Sort by given field. If the field is prefixed with '-', it    will sort in descending order.</td>                </tr>            </tbody>        </table>         ### Pagination Conventions Since the maximum limit is 200 records, to get more than that you'll have to make multiple API calls and page through the results. To retrieve all the data, you can iterate through data by using the `limit` and `offset` query parameters.For example, if you want to retrieve data from 61-80 then you can use a query with the following parameters,         `/v2/variables?limit=20&offset=60`         Generally, you'll be retrieving new or updated user data. To avoid unnecessary API calls, you'll want to store your last refresh time locally.  Initially, it should be set to 0. Then whenever you make a request to get new data, you should limit the returned results to those updated since your last refresh by appending append         `?lastUpdated=(ge)&quot2013-01-D01T01:01:01&quot`         to your request.         Also for better pagination, you can get link to the records of first, last, next and previous page from response headers: * `Total-Count` - Total number of results for given query * `Link-First` - Link to get first page records * `Link-Last` - Link to get last page records * `Link-Prev` - Link to get previous records set * `Link-Next` - Link to get next records set         Remember, response header will be only sent when the record set is available. e.g. You will not get a ```Link-Last``` & ```Link-Next``` when you query for the last page.         ### Filter operators support API supports the following operators with filter parameters: <br> **Comparison operators**         Comparison operators allow you to limit results to those greater than, less than, or equal to a specified value for a specified attribute. These operators can be used with strings, numbers, and dates. The following comparison operators are available: * `gt` for `greater than` comparison * `ge` for `greater than or equal` comparison * `lt` for `less than` comparison * `le` for `less than or equal` comparison         They are included in queries using the following format:         `(<operator>)<value>`         For example, in order to filter value which is greater than 21, the following query parameter should be used:         `?value=(gt)21` <br><br> **Equals/In Operators**         It also allows filtering by the exact value of an attribute or by a set of values, depending on the type of value passed as a query parameter. If the value contains commas, the parameter is split on commas and used as array input for `IN` filtering, otherwise the exact match is applied. In order to only show records which have the value 42, the following query should be used:         `?value=42`         In order to filter records which have value 42 or 43, the following query should be used:         `?value=42,43` <br><br> **Like operators**         Like operators allow filtering using `LIKE` query. This operator is triggered if exact match operator is used, but value contains `%` sign as the first or last character. In order to filter records which category that start with `Food`, the following query should be used:         `?category=Food%` <br><br> **Negation operator**         It is possible to get negated results of a query by prefixed the operator with `!`. Some examples:         `//filter records except those with value are not 42 or 43`<br> `?value=!42,43`         `//filter records with value not greater than 21`<br> `?value=!(ge)21` <br><br> **Multiple constraints for single attribute**         It is possible to apply multiple constraints by providing an array of query filters:         Filter all records which value is greater than 20.2 and less than 20.3<br> `?value[]=(gt)20.2&value[]=(lt)20.3`         Filter all records which value is greater than 20.2 and less than 20.3 but not 20.2778<br> `?value[]=(gt)20.2&value[]=(lt)20.3&value[]=!20.2778`<br><br>
 *
 * OpenAPI spec version: 4.6.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
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
 * PairsApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PairsApi
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
     * @return PairsApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1PairsCsvGet
     *
     * Get pairs
     *
     * @param string $cause Original variable name for the explanatory or independent variable (required)
     * @param string $effect Original variable name for the outcome or dependent variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $cause_source Name of data source that the cause measurements should come from (optional)
     * @param string $cause_unit Abbreviated name for the unit cause measurements to be returned in (optional)
     * @param string $delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $effect_source Name of data source that the effectmeasurements should come from (optional)
     * @param string $effect_unit Abbreviated name for the unit effect measurements to be returned in (optional)
     * @param string $end_time The most recent date (in epoch time) for which we should return measurements (optional)
     * @param string $start_time The earliest date (in epoch time) for which we should return measurements (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Pairs[]
     */
    public function v1PairsCsvGet($cause, $effect, $access_token = null, $user_id = null, $cause_source = null, $cause_unit = null, $delay = null, $duration = null, $effect_source = null, $effect_unit = null, $end_time = null, $start_time = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1PairsCsvGetWithHttpInfo($cause, $effect, $access_token, $user_id, $cause_source, $cause_unit, $delay, $duration, $effect_source, $effect_unit, $end_time, $start_time, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1PairsCsvGetWithHttpInfo
     *
     * Get pairs
     *
     * @param string $cause Original variable name for the explanatory or independent variable (required)
     * @param string $effect Original variable name for the outcome or dependent variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $cause_source Name of data source that the cause measurements should come from (optional)
     * @param string $cause_unit Abbreviated name for the unit cause measurements to be returned in (optional)
     * @param string $delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $effect_source Name of data source that the effectmeasurements should come from (optional)
     * @param string $effect_unit Abbreviated name for the unit effect measurements to be returned in (optional)
     * @param string $end_time The most recent date (in epoch time) for which we should return measurements (optional)
     * @param string $start_time The earliest date (in epoch time) for which we should return measurements (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Pairs[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PairsCsvGetWithHttpInfo($cause, $effect, $access_token = null, $user_id = null, $cause_source = null, $cause_unit = null, $delay = null, $duration = null, $effect_source = null, $effect_unit = null, $end_time = null, $start_time = null, $limit = null, $offset = null, $sort = null)
    {
        // verify the required parameter 'cause' is set
        if ($cause === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cause when calling v1PairsCsvGet');
        }
        // verify the required parameter 'effect' is set
        if ($effect === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effect when calling v1PairsCsvGet');
        }
        // parse inputs
        $resourcePath = "/v1/pairsCsv";
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
        if ($cause !== null) {
            $queryParams['cause'] = $this->apiClient->getSerializer()->toQueryValue($cause);
        }
        // query params
        if ($cause_source !== null) {
            $queryParams['causeSource'] = $this->apiClient->getSerializer()->toQueryValue($cause_source);
        }
        // query params
        if ($cause_unit !== null) {
            $queryParams['causeUnit'] = $this->apiClient->getSerializer()->toQueryValue($cause_unit);
        }
        // query params
        if ($delay !== null) {
            $queryParams['delay'] = $this->apiClient->getSerializer()->toQueryValue($delay);
        }
        // query params
        if ($duration !== null) {
            $queryParams['duration'] = $this->apiClient->getSerializer()->toQueryValue($duration);
        }
        // query params
        if ($effect !== null) {
            $queryParams['effect'] = $this->apiClient->getSerializer()->toQueryValue($effect);
        }
        // query params
        if ($effect_source !== null) {
            $queryParams['effectSource'] = $this->apiClient->getSerializer()->toQueryValue($effect_source);
        }
        // query params
        if ($effect_unit !== null) {
            $queryParams['effectUnit'] = $this->apiClient->getSerializer()->toQueryValue($effect_unit);
        }
        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Pairs[]',
                '/v1/pairsCsv'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Pairs[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Pairs[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1PairsGet
     *
     * Get pairs
     *
     * @param string $cause Original variable name for the explanatory or independent variable (required)
     * @param string $effect Original variable name for the outcome or dependent variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $cause_source Name of data source that the cause measurements should come from (optional)
     * @param string $cause_unit Abbreviated name for the unit cause measurements to be returned in (optional)
     * @param string $delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $effect_source Name of data source that the effectmeasurements should come from (optional)
     * @param string $effect_unit Abbreviated name for the unit effect measurements to be returned in (optional)
     * @param string $end_time The most recent date (in epoch time) for which we should return measurements (optional)
     * @param string $start_time The earliest date (in epoch time) for which we should return measurements (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Pairs[]
     */
    public function v1PairsGet($cause, $effect, $access_token = null, $user_id = null, $cause_source = null, $cause_unit = null, $delay = null, $duration = null, $effect_source = null, $effect_unit = null, $end_time = null, $start_time = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1PairsGetWithHttpInfo($cause, $effect, $access_token, $user_id, $cause_source, $cause_unit, $delay, $duration, $effect_source, $effect_unit, $end_time, $start_time, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1PairsGetWithHttpInfo
     *
     * Get pairs
     *
     * @param string $cause Original variable name for the explanatory or independent variable (required)
     * @param string $effect Original variable name for the outcome or dependent variable (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $cause_source Name of data source that the cause measurements should come from (optional)
     * @param string $cause_unit Abbreviated name for the unit cause measurements to be returned in (optional)
     * @param string $delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $effect_source Name of data source that the effectmeasurements should come from (optional)
     * @param string $effect_unit Abbreviated name for the unit effect measurements to be returned in (optional)
     * @param string $end_time The most recent date (in epoch time) for which we should return measurements (optional)
     * @param string $start_time The earliest date (in epoch time) for which we should return measurements (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Pairs[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PairsGetWithHttpInfo($cause, $effect, $access_token = null, $user_id = null, $cause_source = null, $cause_unit = null, $delay = null, $duration = null, $effect_source = null, $effect_unit = null, $end_time = null, $start_time = null, $limit = null, $offset = null, $sort = null)
    {
        // verify the required parameter 'cause' is set
        if ($cause === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cause when calling v1PairsGet');
        }
        // verify the required parameter 'effect' is set
        if ($effect === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effect when calling v1PairsGet');
        }
        // parse inputs
        $resourcePath = "/v1/pairs";
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
        if ($cause !== null) {
            $queryParams['cause'] = $this->apiClient->getSerializer()->toQueryValue($cause);
        }
        // query params
        if ($cause_source !== null) {
            $queryParams['causeSource'] = $this->apiClient->getSerializer()->toQueryValue($cause_source);
        }
        // query params
        if ($cause_unit !== null) {
            $queryParams['causeUnit'] = $this->apiClient->getSerializer()->toQueryValue($cause_unit);
        }
        // query params
        if ($delay !== null) {
            $queryParams['delay'] = $this->apiClient->getSerializer()->toQueryValue($delay);
        }
        // query params
        if ($duration !== null) {
            $queryParams['duration'] = $this->apiClient->getSerializer()->toQueryValue($duration);
        }
        // query params
        if ($effect !== null) {
            $queryParams['effect'] = $this->apiClient->getSerializer()->toQueryValue($effect);
        }
        // query params
        if ($effect_source !== null) {
            $queryParams['effectSource'] = $this->apiClient->getSerializer()->toQueryValue($effect_source);
        }
        // query params
        if ($effect_unit !== null) {
            $queryParams['effectUnit'] = $this->apiClient->getSerializer()->toQueryValue($effect_unit);
        }
        // query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }
        // query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Pairs[]',
                '/v1/pairs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Pairs[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Pairs[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
