<?php
/**
 * RemindersApi
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
 * RemindersApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RemindersApi
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
     * @return RemindersApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1TrackingReminderNotificationsGet
     *
     * Get specific pending tracking reminders
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Limit tracking reminder notifications to a specific variable category (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse200
     */
    public function v1TrackingReminderNotificationsGet($access_token = null, $user_id = null, $variable_category_name = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1TrackingReminderNotificationsGetWithHttpInfo($access_token, $user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1TrackingReminderNotificationsGetWithHttpInfo
     *
     * Get specific pending tracking reminders
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Limit tracking reminder notifications to a specific variable category (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingReminderNotificationsGetWithHttpInfo($access_token = null, $user_id = null, $variable_category_name = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v1/trackingReminderNotifications";
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
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_name);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['createdAt'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
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
                '\QuantiModo\Client\Model\InlineResponse200',
                '/v1/trackingReminderNotifications'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1TrackingReminderNotificationsSkipPost
     *
     * Skip a pending tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationSkip $body Id of the pending reminder to be skipped or deleted (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function v1TrackingReminderNotificationsSkipPost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1TrackingReminderNotificationsSkipPostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1TrackingReminderNotificationsSkipPostWithHttpInfo
     *
     * Skip a pending tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationSkip $body Id of the pending reminder to be skipped or deleted (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingReminderNotificationsSkipPostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1TrackingReminderNotificationsSkipPost');
        }
        // parse inputs
        $resourcePath = "/v1/trackingReminderNotifications/skip";
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
                '\QuantiModo\Client\Model\CommonResponse',
                '/v1/trackingReminderNotifications/skip'
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
     * Operation v1TrackingReminderNotificationsSnoozePost
     *
     * Snooze a pending tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationSnooze $body Id of the pending reminder to be snoozed (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function v1TrackingReminderNotificationsSnoozePost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1TrackingReminderNotificationsSnoozePostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1TrackingReminderNotificationsSnoozePostWithHttpInfo
     *
     * Snooze a pending tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationSnooze $body Id of the pending reminder to be snoozed (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingReminderNotificationsSnoozePostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1TrackingReminderNotificationsSnoozePost');
        }
        // parse inputs
        $resourcePath = "/v1/trackingReminderNotifications/snooze";
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
                '\QuantiModo\Client\Model\CommonResponse',
                '/v1/trackingReminderNotifications/snooze'
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
     * Operation v1TrackingReminderNotificationsTrackPost
     *
     * Track a pending tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationTrack $body Id of the pending reminder to be tracked (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function v1TrackingReminderNotificationsTrackPost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1TrackingReminderNotificationsTrackPostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1TrackingReminderNotificationsTrackPostWithHttpInfo
     *
     * Track a pending tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderNotificationTrack $body Id of the pending reminder to be tracked (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingReminderNotificationsTrackPostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1TrackingReminderNotificationsTrackPost');
        }
        // parse inputs
        $resourcePath = "/v1/trackingReminderNotifications/track";
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
                '\QuantiModo\Client\Model\CommonResponse',
                '/v1/trackingReminderNotifications/track'
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
     * Operation v1TrackingRemindersDeletePost
     *
     * Delete tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderDelete $body Id of reminder to be deleted (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\CommonResponse
     */
    public function v1TrackingRemindersDeletePost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1TrackingRemindersDeletePostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1TrackingRemindersDeletePostWithHttpInfo
     *
     * Delete tracking reminder
     *
     * @param \QuantiModo\Client\Model\TrackingReminderDelete $body Id of reminder to be deleted (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\CommonResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingRemindersDeletePostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1TrackingRemindersDeletePost');
        }
        // parse inputs
        $resourcePath = "/v1/trackingReminders/delete";
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
                '\QuantiModo\Client\Model\CommonResponse',
                '/v1/trackingReminders/delete'
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
     * Operation v1TrackingRemindersGet
     *
     * Get repeating tracking reminder settings
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Limit tracking reminders to a specific variable category (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2001
     */
    public function v1TrackingRemindersGet($access_token = null, $user_id = null, $variable_category_name = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1TrackingRemindersGetWithHttpInfo($access_token, $user_id, $variable_category_name, $created_at, $updated_at, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1TrackingRemindersGetWithHttpInfo
     *
     * Get repeating tracking reminder settings
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Limit tracking reminders to a specific variable category (optional)
     * @param string $created_at When the record was first created. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param string $updated_at When the record was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingRemindersGetWithHttpInfo($access_token = null, $user_id = null, $variable_category_name = null, $created_at = null, $updated_at = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v1/trackingReminders";
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
        if ($variable_category_name !== null) {
            $queryParams['variableCategoryName'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_name);
        }
        // query params
        if ($created_at !== null) {
            $queryParams['createdAt'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }
        // query params
        if ($updated_at !== null) {
            $queryParams['updatedAt'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
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
                '\QuantiModo\Client\Model\InlineResponse2001',
                '/v1/trackingReminders'
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
     * Operation v1TrackingRemindersPost
     *
     * Store a Tracking Reminder
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param \QuantiModo\Client\Model\TrackingReminder $body TrackingReminder that should be stored (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\InlineResponse2002
     */
    public function v1TrackingRemindersPost($access_token = null, $user_id = null, $body = null)
    {
        list($response) = $this->v1TrackingRemindersPostWithHttpInfo($access_token, $user_id, $body);
        return $response;
    }

    /**
     * Operation v1TrackingRemindersPostWithHttpInfo
     *
     * Store a Tracking Reminder
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param \QuantiModo\Client\Model\TrackingReminder $body TrackingReminder that should be stored (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1TrackingRemindersPostWithHttpInfo($access_token = null, $user_id = null, $body = null)
    {
        // parse inputs
        $resourcePath = "/v1/trackingReminders";
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
                '\QuantiModo\Client\Model\InlineResponse2002',
                '/v1/trackingReminders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
