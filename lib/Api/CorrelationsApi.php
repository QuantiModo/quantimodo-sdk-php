<?php
/**
 * CorrelationsApi
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
 * OpenAPI spec version: 2.0
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
 * CorrelationsApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CorrelationsApi
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
     * @return CorrelationsApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1AggregatedCorrelationsGet
     *
     * Get aggregated correlations
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $effect ORIGINAL variable name of the effect variable for which the user desires correlations (optional)
     * @param string $cause ORIGINAL variable name of the cause variable for which the user desires correlations (optional)
     * @param string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $last_updated The time that this measurement was last updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @param bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1AggregatedCorrelationsGet($access_token = null, $user_id = null, $effect = null, $cause = null, $correlation_coefficient = null, $onset_delay = null, $duration_of_action = null, $last_updated = null, $limit = null, $offset = null, $sort = null, $outcomes_of_interest = null)
    {
        list($response) = $this->v1AggregatedCorrelationsGetWithHttpInfo($access_token, $user_id, $effect, $cause, $correlation_coefficient, $onset_delay, $duration_of_action, $last_updated, $limit, $offset, $sort, $outcomes_of_interest);
        return $response;
    }

    /**
     * Operation v1AggregatedCorrelationsGetWithHttpInfo
     *
     * Get aggregated correlations
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $effect ORIGINAL variable name of the effect variable for which the user desires correlations (optional)
     * @param string $cause ORIGINAL variable name of the cause variable for which the user desires correlations (optional)
     * @param string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $last_updated The time that this measurement was last updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @param bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1AggregatedCorrelationsGetWithHttpInfo($access_token = null, $user_id = null, $effect = null, $cause = null, $correlation_coefficient = null, $onset_delay = null, $duration_of_action = null, $last_updated = null, $limit = null, $offset = null, $sort = null, $outcomes_of_interest = null)
    {
        // parse inputs
        $resourcePath = "/v1/aggregatedCorrelations";
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
        if ($effect !== null) {
            $queryParams['effect'] = $this->apiClient->getSerializer()->toQueryValue($effect);
        }
        // query params
        if ($cause !== null) {
            $queryParams['cause'] = $this->apiClient->getSerializer()->toQueryValue($cause);
        }
        // query params
        if ($correlation_coefficient !== null) {
            $queryParams['correlationCoefficient'] = $this->apiClient->getSerializer()->toQueryValue($correlation_coefficient);
        }
        // query params
        if ($onset_delay !== null) {
            $queryParams['onsetDelay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }
        // query params
        if ($duration_of_action !== null) {
            $queryParams['durationOfAction'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }
        // query params
        if ($last_updated !== null) {
            $queryParams['lastUpdated'] = $this->apiClient->getSerializer()->toQueryValue($last_updated);
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
        // query params
        if ($outcomes_of_interest !== null) {
            $queryParams['outcomesOfInterest'] = $this->apiClient->getSerializer()->toQueryValue($outcomes_of_interest);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/aggregatedCorrelations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1AggregatedCorrelationsPost
     *
     * Store or Update a Correlation
     *
     * @param \QuantiModo\Client\Model\PostCorrelation $body Provides correlation data (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v1AggregatedCorrelationsPost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1AggregatedCorrelationsPostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1AggregatedCorrelationsPostWithHttpInfo
     *
     * Store or Update a Correlation
     *
     * @param \QuantiModo\Client\Model\PostCorrelation $body Provides correlation data (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1AggregatedCorrelationsPostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1AggregatedCorrelationsPost');
        }
        // parse inputs
        $resourcePath = "/v1/aggregatedCorrelations";
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
                null,
                '/v1/aggregatedCorrelations'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\JsonErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1CorrelationsGet
     *
     * Get correlations
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $effect ORIGINAL variable name of the effect variable for which the user desires correlations (optional)
     * @param string $cause ORIGINAL variable name of the cause variable for which the user desires correlations (optional)
     * @param string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $last_updated The time that this measurement was last updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @param bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1CorrelationsGet($access_token = null, $user_id = null, $effect = null, $cause = null, $correlation_coefficient = null, $onset_delay = null, $duration_of_action = null, $last_updated = null, $limit = null, $offset = null, $sort = null, $outcomes_of_interest = null)
    {
        list($response) = $this->v1CorrelationsGetWithHttpInfo($access_token, $user_id, $effect, $cause, $correlation_coefficient, $onset_delay, $duration_of_action, $last_updated, $limit, $offset, $sort, $outcomes_of_interest);
        return $response;
    }

    /**
     * Operation v1CorrelationsGetWithHttpInfo
     *
     * Get correlations
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $effect ORIGINAL variable name of the effect variable for which the user desires correlations (optional)
     * @param string $cause ORIGINAL variable name of the cause variable for which the user desires correlations (optional)
     * @param string $correlation_coefficient Pearson correlation coefficient between cause and effect after lagging by onset delay and grouping by duration of action (optional)
     * @param string $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. (optional)
     * @param string $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. (optional)
     * @param string $last_updated The time that this measurement was last updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @param bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1CorrelationsGetWithHttpInfo($access_token = null, $user_id = null, $effect = null, $cause = null, $correlation_coefficient = null, $onset_delay = null, $duration_of_action = null, $last_updated = null, $limit = null, $offset = null, $sort = null, $outcomes_of_interest = null)
    {
        // parse inputs
        $resourcePath = "/v1/correlations";
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
        if ($effect !== null) {
            $queryParams['effect'] = $this->apiClient->getSerializer()->toQueryValue($effect);
        }
        // query params
        if ($cause !== null) {
            $queryParams['cause'] = $this->apiClient->getSerializer()->toQueryValue($cause);
        }
        // query params
        if ($correlation_coefficient !== null) {
            $queryParams['correlationCoefficient'] = $this->apiClient->getSerializer()->toQueryValue($correlation_coefficient);
        }
        // query params
        if ($onset_delay !== null) {
            $queryParams['onsetDelay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }
        // query params
        if ($duration_of_action !== null) {
            $queryParams['durationOfAction'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }
        // query params
        if ($last_updated !== null) {
            $queryParams['lastUpdated'] = $this->apiClient->getSerializer()->toQueryValue($last_updated);
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
        // query params
        if ($outcomes_of_interest !== null) {
            $queryParams['outcomesOfInterest'] = $this->apiClient->getSerializer()->toQueryValue($outcomes_of_interest);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/correlations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet
     *
     * Search user correlations for a given cause
     *
     * @param int $organization_id Organization ID (required)
     * @param int $user_id2 User id (required)
     * @param string $variable_name Effect variable name (required)
     * @param string $organization_token Organization access token (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $include_public Include public correlations, Can be \&quot;1\&quot; or empty. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet($organization_id, $user_id2, $variable_name, $organization_token, $access_token = null, $user_id = null, $include_public = null)
    {
        list($response) = $this->v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGetWithHttpInfo($organization_id, $user_id2, $variable_name, $organization_token, $access_token, $user_id, $include_public);
        return $response;
    }

    /**
     * Operation v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGetWithHttpInfo
     *
     * Search user correlations for a given cause
     *
     * @param int $organization_id Organization ID (required)
     * @param int $user_id2 User id (required)
     * @param string $variable_name Effect variable name (required)
     * @param string $organization_token Organization access token (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $include_public Include public correlations, Can be \&quot;1\&quot; or empty. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGetWithHttpInfo($organization_id, $user_id2, $variable_name, $organization_token, $access_token = null, $user_id = null, $include_public = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_id when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet');
        }
        // verify the required parameter 'user_id2' is set
        if ($user_id2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id2 when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet');
        }
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet');
        }
        // verify the required parameter 'organization_token' is set
        if ($organization_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_token when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameCausesGet');
        }
        // parse inputs
        $resourcePath = "/v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/causes";
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
        if ($organization_token !== null) {
            $queryParams['organization_token'] = $this->apiClient->getSerializer()->toQueryValue($organization_token);
        }
        // query params
        if ($include_public !== null) {
            $queryParams['includePublic'] = $this->apiClient->getSerializer()->toQueryValue($include_public);
        }
        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($user_id2 !== null) {
            $resourcePath = str_replace(
                "{" . "userId" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id2),
                $resourcePath
            );
        }
        // path params
        if ($variable_name !== null) {
            $resourcePath = str_replace(
                "{" . "variableName" . "}",
                $this->apiClient->getSerializer()->toPathValue($variable_name),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/causes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet
     *
     * Search user correlations for a given cause
     *
     * @param int $organization_id Organization ID (required)
     * @param int $user_id2 User id (required)
     * @param string $variable_name Cause variable name (required)
     * @param string $organization_token Organization access token (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $include_public Include public correlations, Can be \&quot;1\&quot; or empty. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse[]
     */
    public function v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet($organization_id, $user_id2, $variable_name, $organization_token, $access_token = null, $user_id = null, $include_public = null)
    {
        list($response) = $this->v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGetWithHttpInfo($organization_id, $user_id2, $variable_name, $organization_token, $access_token, $user_id, $include_public);
        return $response;
    }

    /**
     * Operation v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGetWithHttpInfo
     *
     * Search user correlations for a given cause
     *
     * @param int $organization_id Organization ID (required)
     * @param int $user_id2 User id (required)
     * @param string $variable_name Cause variable name (required)
     * @param string $organization_token Organization access token (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $include_public Include public correlations, Can be \&quot;1\&quot; or empty. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGetWithHttpInfo($organization_id, $user_id2, $variable_name, $organization_token, $access_token = null, $user_id = null, $include_public = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_id when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet');
        }
        // verify the required parameter 'user_id2' is set
        if ($user_id2 === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id2 when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet');
        }
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet');
        }
        // verify the required parameter 'organization_token' is set
        if ($organization_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $organization_token when calling v1OrganizationsOrganizationIdUsersUserIdVariablesVariableNameEffectsGet');
        }
        // parse inputs
        $resourcePath = "/v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/effects";
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
        if ($organization_token !== null) {
            $queryParams['organization_token'] = $this->apiClient->getSerializer()->toQueryValue($organization_token);
        }
        // query params
        if ($include_public !== null) {
            $queryParams['include_public'] = $this->apiClient->getSerializer()->toQueryValue($include_public);
        }
        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                "{" . "organizationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($organization_id),
                $resourcePath
            );
        }
        // path params
        if ($user_id2 !== null) {
            $resourcePath = str_replace(
                "{" . "userId" . "}",
                $this->apiClient->getSerializer()->toPathValue($user_id2),
                $resourcePath
            );
        }
        // path params
        if ($variable_name !== null) {
            $resourcePath = str_replace(
                "{" . "variableName" . "}",
                $this->apiClient->getSerializer()->toPathValue($variable_name),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\CommonResponse[]',
                '/v1/organizations/{organizationId}/users/{userId}/variables/{variableName}/effects'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\CommonResponse[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\CommonResponse[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1PublicCorrelationsSearchSearchGet
     *
     * Get average correlations for variables containing search term
     *
     * @param string $search Name of the variable that you want to know the causes or effects of. (required)
     * @param string $effect_or_cause Setting this to effect indicates that the searched variable is the effect and that the causes of this variable should be returned.  cause indicates that the searched variable is the cause and the effects should be returned. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1PublicCorrelationsSearchSearchGet($search, $effect_or_cause, $access_token = null, $user_id = null, $outcomes_of_interest = null)
    {
        list($response) = $this->v1PublicCorrelationsSearchSearchGetWithHttpInfo($search, $effect_or_cause, $access_token, $user_id, $outcomes_of_interest);
        return $response;
    }

    /**
     * Operation v1PublicCorrelationsSearchSearchGetWithHttpInfo
     *
     * Get average correlations for variables containing search term
     *
     * @param string $search Name of the variable that you want to know the causes or effects of. (required)
     * @param string $effect_or_cause Setting this to effect indicates that the searched variable is the effect and that the causes of this variable should be returned.  cause indicates that the searched variable is the cause and the effects should be returned. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param bool $outcomes_of_interest Only include correlations for which the effect is an outcome of interest for the user (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PublicCorrelationsSearchSearchGetWithHttpInfo($search, $effect_or_cause, $access_token = null, $user_id = null, $outcomes_of_interest = null)
    {
        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling v1PublicCorrelationsSearchSearchGet');
        }
        // verify the required parameter 'effect_or_cause' is set
        if ($effect_or_cause === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effect_or_cause when calling v1PublicCorrelationsSearchSearchGet');
        }
        // parse inputs
        $resourcePath = "/v1/public/correlations/search/{search}";
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
        if ($effect_or_cause !== null) {
            $queryParams['effectOrCause'] = $this->apiClient->getSerializer()->toQueryValue($effect_or_cause);
        }
        // query params
        if ($outcomes_of_interest !== null) {
            $queryParams['outcomesOfInterest'] = $this->apiClient->getSerializer()->toQueryValue($outcomes_of_interest);
        }
        // path params
        if ($search !== null) {
            $resourcePath = str_replace(
                "{" . "search" . "}",
                $this->apiClient->getSerializer()->toPathValue($search),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/public/correlations/search/{search}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesVariableNameCausesGet
     *
     * Search user correlations for a given effect
     *
     * @param string $variable_name Effect variable name (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1VariablesVariableNameCausesGet($variable_name)
    {
        list($response) = $this->v1VariablesVariableNameCausesGetWithHttpInfo($variable_name);
        return $response;
    }

    /**
     * Operation v1VariablesVariableNameCausesGetWithHttpInfo
     *
     * Search user correlations for a given effect
     *
     * @param string $variable_name Effect variable name (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesVariableNameCausesGetWithHttpInfo($variable_name)
    {
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1VariablesVariableNameCausesGet');
        }
        // parse inputs
        $resourcePath = "/v1/variables/{variableName}/causes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($variable_name !== null) {
            $resourcePath = str_replace(
                "{" . "variableName" . "}",
                $this->apiClient->getSerializer()->toPathValue($variable_name),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/variables/{variableName}/causes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesVariableNameEffectsGet
     *
     * Search user correlations for a given cause
     *
     * @param string $variable_name Cause variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $correlation_coefficient You can use this to get effects with correlations greater than or less than 0 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1VariablesVariableNameEffectsGet($variable_name, $access_token = null, $user_id = null, $correlation_coefficient = null)
    {
        list($response) = $this->v1VariablesVariableNameEffectsGetWithHttpInfo($variable_name, $access_token, $user_id, $correlation_coefficient);
        return $response;
    }

    /**
     * Operation v1VariablesVariableNameEffectsGetWithHttpInfo
     *
     * Search user correlations for a given cause
     *
     * @param string $variable_name Cause variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $correlation_coefficient You can use this to get effects with correlations greater than or less than 0 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesVariableNameEffectsGetWithHttpInfo($variable_name, $access_token = null, $user_id = null, $correlation_coefficient = null)
    {
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1VariablesVariableNameEffectsGet');
        }
        // parse inputs
        $resourcePath = "/v1/variables/{variableName}/effects";
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
        if ($correlation_coefficient !== null) {
            $queryParams['correlationCoefficient'] = $this->apiClient->getSerializer()->toQueryValue($correlation_coefficient);
        }
        // path params
        if ($variable_name !== null) {
            $resourcePath = str_replace(
                "{" . "variableName" . "}",
                $this->apiClient->getSerializer()->toPathValue($variable_name),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/variables/{variableName}/effects'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesVariableNamePublicCausesGet
     *
     * Search public correlations for a given effect
     *
     * @param string $variable_name Effect variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $correlation_coefficient You can use this to get causes with correlations greater than or less than 0 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1VariablesVariableNamePublicCausesGet($variable_name, $access_token = null, $user_id = null, $correlation_coefficient = null)
    {
        list($response) = $this->v1VariablesVariableNamePublicCausesGetWithHttpInfo($variable_name, $access_token, $user_id, $correlation_coefficient);
        return $response;
    }

    /**
     * Operation v1VariablesVariableNamePublicCausesGetWithHttpInfo
     *
     * Search public correlations for a given effect
     *
     * @param string $variable_name Effect variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $correlation_coefficient You can use this to get causes with correlations greater than or less than 0 (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesVariableNamePublicCausesGetWithHttpInfo($variable_name, $access_token = null, $user_id = null, $correlation_coefficient = null)
    {
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1VariablesVariableNamePublicCausesGet');
        }
        // parse inputs
        $resourcePath = "/v1/variables/{variableName}/public/causes";
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
        if ($correlation_coefficient !== null) {
            $queryParams['correlationCoefficient'] = $this->apiClient->getSerializer()->toQueryValue($correlation_coefficient);
        }
        // path params
        if ($variable_name !== null) {
            $resourcePath = str_replace(
                "{" . "variableName" . "}",
                $this->apiClient->getSerializer()->toPathValue($variable_name),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/variables/{variableName}/public/causes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesVariableNamePublicEffectsGet
     *
     * Search public correlations for a given cause
     *
     * @param string $variable_name Cause variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Correlation[]
     */
    public function v1VariablesVariableNamePublicEffectsGet($variable_name, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1VariablesVariableNamePublicEffectsGetWithHttpInfo($variable_name, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1VariablesVariableNamePublicEffectsGetWithHttpInfo
     *
     * Search public correlations for a given cause
     *
     * @param string $variable_name Cause variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Correlation[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesVariableNamePublicEffectsGetWithHttpInfo($variable_name, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1VariablesVariableNamePublicEffectsGet');
        }
        // parse inputs
        $resourcePath = "/v1/variables/{variableName}/public/effects";
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
        // path params
        if ($variable_name !== null) {
            $resourcePath = str_replace(
                "{" . "variableName" . "}",
                $this->apiClient->getSerializer()->toPathValue($variable_name),
                $resourcePath
            );
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Correlation[]',
                '/v1/variables/{variableName}/public/effects'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Correlation[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Correlation[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VotesDeletePost
     *
     * Delete vote
     *
     * @param \QuantiModo\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function v1VotesDeletePost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1VotesDeletePostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1VotesDeletePostWithHttpInfo
     *
     * Delete vote
     *
     * @param \QuantiModo\Client\Model\VoteDelete $body The cause and effect variable names for the predictor vote to be deleted. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VotesDeletePostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1VotesDeletePost');
        }
        // parse inputs
        $resourcePath = "/v1/votes/delete";
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
                '\QuantiModo\Client\Model\CommonResponse',
                '/v1/votes/delete'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\CommonResponse', $httpHeader), $statusCode, $httpHeader];
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
     * Operation v1VotesPost
     *
     * Post or update vote
     *
     * @param \QuantiModo\Client\Model\PostVote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function v1VotesPost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1VotesPostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1VotesPostWithHttpInfo
     *
     * Post or update vote
     *
     * @param \QuantiModo\Client\Model\PostVote $body Contains the cause variable, effect variable, and vote value. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VotesPostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1VotesPost');
        }
        // parse inputs
        $resourcePath = "/v1/votes";
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
                '\QuantiModo\Client\Model\CommonResponse',
                '/v1/votes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\CommonResponse', $httpHeader), $statusCode, $httpHeader];
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
}
