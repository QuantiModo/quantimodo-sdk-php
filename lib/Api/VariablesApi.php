<?php
/**
 * VariablesApi
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
 * VariablesApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariablesApi
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
     * @return VariablesApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v1PublicVariablesGet
     *
     * Get public variables
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id Common variable id (optional)
     * @param int $user_id2 User id (optional)
     * @param string $category Filter data by category (optional)
     * @param string $name Original name of the variable (supports exact name match only) (optional)
     * @param string $last_updated Filter by the last time any of the properties of the variable were changed. Uses UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $source The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param string $latest_measurement_time Filter variables based on the last time a measurement for them was created or updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param string $last_source Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only) (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Variable
     */
    public function v1PublicVariablesGet($access_token = null, $user_id = null, $id = null, $user_id2 = null, $category = null, $name = null, $last_updated = null, $source = null, $latest_measurement_time = null, $number_of_raw_measurements = null, $last_source = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1PublicVariablesGetWithHttpInfo($access_token, $user_id, $id, $user_id2, $category, $name, $last_updated, $source, $latest_measurement_time, $number_of_raw_measurements, $last_source, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1PublicVariablesGetWithHttpInfo
     *
     * Get public variables
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id Common variable id (optional)
     * @param int $user_id2 User id (optional)
     * @param string $category Filter data by category (optional)
     * @param string $name Original name of the variable (supports exact name match only) (optional)
     * @param string $last_updated Filter by the last time any of the properties of the variable were changed. Uses UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $source The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param string $latest_measurement_time Filter variables based on the last time a measurement for them was created or updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param string $last_source Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only) (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Variable, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PublicVariablesGetWithHttpInfo($access_token = null, $user_id = null, $id = null, $user_id2 = null, $category = null, $name = null, $last_updated = null, $source = null, $latest_measurement_time = null, $number_of_raw_measurements = null, $last_source = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v1/public/variables";
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
        if ($user_id2 !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id2);
        }
        // query params
        if ($category !== null) {
            $queryParams['category'] = $this->apiClient->getSerializer()->toQueryValue($category);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }
        // query params
        if ($last_updated !== null) {
            $queryParams['lastUpdated'] = $this->apiClient->getSerializer()->toQueryValue($last_updated);
        }
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }
        // query params
        if ($latest_measurement_time !== null) {
            $queryParams['latestMeasurementTime'] = $this->apiClient->getSerializer()->toQueryValue($latest_measurement_time);
        }
        // query params
        if ($number_of_raw_measurements !== null) {
            $queryParams['numberOfRawMeasurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_raw_measurements);
        }
        // query params
        if ($last_source !== null) {
            $queryParams['lastSource'] = $this->apiClient->getSerializer()->toQueryValue($last_source);
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
                '\QuantiModo\Client\Model\Variable',
                '/v1/public/variables'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Variable', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Variable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1PublicVariablesSearchSearchGet
     *
     * Get top 5 PUBLIC variables with the most correlations
     *
     * @param string $search Search query can be some fraction of a variable name. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. (optional)
     * @param string $source Specify a data source name to only return variables from a specific data source. (optional)
     * @param string $effect_or_cause Indicate if you only want variables that have user correlations.  Possible values are effect and cause. (optional)
     * @param string $public_effect_or_cause Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Variable
     */
    public function v1PublicVariablesSearchSearchGet($search, $access_token = null, $user_id = null, $variable_category_name = null, $source = null, $effect_or_cause = null, $public_effect_or_cause = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1PublicVariablesSearchSearchGetWithHttpInfo($search, $access_token, $user_id, $variable_category_name, $source, $effect_or_cause, $public_effect_or_cause, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1PublicVariablesSearchSearchGetWithHttpInfo
     *
     * Get top 5 PUBLIC variables with the most correlations
     *
     * @param string $search Search query can be some fraction of a variable name. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. (optional)
     * @param string $source Specify a data source name to only return variables from a specific data source. (optional)
     * @param string $effect_or_cause Indicate if you only want variables that have user correlations.  Possible values are effect and cause. (optional)
     * @param string $public_effect_or_cause Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Variable, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1PublicVariablesSearchSearchGetWithHttpInfo($search, $access_token = null, $user_id = null, $variable_category_name = null, $source = null, $effect_or_cause = null, $public_effect_or_cause = null, $limit = null, $offset = null, $sort = null)
    {
        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling v1PublicVariablesSearchSearchGet');
        }
        // parse inputs
        $resourcePath = "/v1/public/variables/search/{search}";
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
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }
        // query params
        if ($effect_or_cause !== null) {
            $queryParams['effectOrCause'] = $this->apiClient->getSerializer()->toQueryValue($effect_or_cause);
        }
        // query params
        if ($public_effect_or_cause !== null) {
            $queryParams['publicEffectOrCause'] = $this->apiClient->getSerializer()->toQueryValue($public_effect_or_cause);
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
        // path params
        if ($search !== null) {
            $resourcePath = str_replace(
                "{" . "search" . "}",
                $this->apiClient->getSerializer()->toPathValue($search),
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
                '\QuantiModo\Client\Model\Variable',
                '/v1/public/variables/search/{search}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Variable', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Variable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1UserVariablesDeletePost
     *
     * Delete All Measurements For Variable
     *
     * @param \QuantiModo\Client\Model\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v1UserVariablesDeletePost($variable_id)
    {
        list($response) = $this->v1UserVariablesDeletePostWithHttpInfo($variable_id);
        return $response;
    }

    /**
     * Operation v1UserVariablesDeletePostWithHttpInfo
     *
     * Delete All Measurements For Variable
     *
     * @param \QuantiModo\Client\Model\UserVariableDelete $variable_id Id of the variable whose measurements should be deleted (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserVariablesDeletePostWithHttpInfo($variable_id)
    {
        // verify the required parameter 'variable_id' is set
        if ($variable_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_id when calling v1UserVariablesDeletePost');
        }
        // parse inputs
        $resourcePath = "/v1/userVariables/delete";
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

        // body params
        $_tempBody = null;
        if (isset($variable_id)) {
            $_tempBody = $variable_id;
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
                '/v1/userVariables/delete'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v1UserVariablesPost
     *
     * Update User Settings for a Variable
     *
     * @param \QuantiModo\Client\Model\UserVariables $user_variables Variable user settings data (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v1UserVariablesPost($user_variables)
    {
        list($response) = $this->v1UserVariablesPostWithHttpInfo($user_variables);
        return $response;
    }

    /**
     * Operation v1UserVariablesPostWithHttpInfo
     *
     * Update User Settings for a Variable
     *
     * @param \QuantiModo\Client\Model\UserVariables $user_variables Variable user settings data (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserVariablesPostWithHttpInfo($user_variables)
    {
        // verify the required parameter 'user_variables' is set
        if ($user_variables === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_variables when calling v1UserVariablesPost');
        }
        // parse inputs
        $resourcePath = "/v1/userVariables";
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

        // body params
        $_tempBody = null;
        if (isset($user_variables)) {
            $_tempBody = $user_variables;
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
                '/v1/userVariables'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v1UserVariablesResetPost
     *
     * Reset user settings for a variable to defaults
     *
     * @param \QuantiModo\Client\Model\UserVariableDelete $variable_id Id of the variable that should be reset (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v1UserVariablesResetPost($variable_id)
    {
        list($response) = $this->v1UserVariablesResetPostWithHttpInfo($variable_id);
        return $response;
    }

    /**
     * Operation v1UserVariablesResetPostWithHttpInfo
     *
     * Reset user settings for a variable to defaults
     *
     * @param \QuantiModo\Client\Model\UserVariableDelete $variable_id Id of the variable that should be reset (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1UserVariablesResetPostWithHttpInfo($variable_id)
    {
        // verify the required parameter 'variable_id' is set
        if ($variable_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_id when calling v1UserVariablesResetPost');
        }
        // parse inputs
        $resourcePath = "/v1/userVariables/reset";
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

        // body params
        $_tempBody = null;
        if (isset($variable_id)) {
            $_tempBody = $variable_id;
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
                '/v1/userVariables/reset'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariableCategoriesGet
     *
     * Variable categories
     *
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\VariableCategory[]
     */
    public function v1VariableCategoriesGet()
    {
        list($response) = $this->v1VariableCategoriesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation v1VariableCategoriesGetWithHttpInfo
     *
     * Variable categories
     *
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\VariableCategory[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariableCategoriesGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/v1/variableCategories";
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
                '\QuantiModo\Client\Model\VariableCategory[]',
                '/v1/variableCategories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\VariableCategory[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\VariableCategory[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesGet
     *
     * Get variables with user's settings
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id Common variable id (optional)
     * @param int $user_id2 User id (optional)
     * @param string $category Filter data by category (optional)
     * @param string $name Original name of the variable (supports exact name match only) (optional)
     * @param string $last_updated Filter by the last time any of the properties of the variable were changed. Uses UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $source The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param string $latest_measurement_time Filter variables based on the last time a measurement for them was created or updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param string $last_source Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only) (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Variable
     */
    public function v1VariablesGet($access_token = null, $user_id = null, $id = null, $user_id2 = null, $category = null, $name = null, $last_updated = null, $source = null, $latest_measurement_time = null, $number_of_raw_measurements = null, $last_source = null, $limit = null, $offset = null, $sort = null)
    {
        list($response) = $this->v1VariablesGetWithHttpInfo($access_token, $user_id, $id, $user_id2, $category, $name, $last_updated, $source, $latest_measurement_time, $number_of_raw_measurements, $last_source, $limit, $offset, $sort);
        return $response;
    }

    /**
     * Operation v1VariablesGetWithHttpInfo
     *
     * Get variables with user's settings
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param int $id Common variable id (optional)
     * @param int $user_id2 User id (optional)
     * @param string $category Filter data by category (optional)
     * @param string $name Original name of the variable (supports exact name match only) (optional)
     * @param string $last_updated Filter by the last time any of the properties of the variable were changed. Uses UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $source The name of the data source that created the variable (supports exact name match only). So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here (optional)
     * @param string $latest_measurement_time Filter variables based on the last time a measurement for them was created or updated in the UTC format \&quot;YYYY-MM-DDThh:mm:ss\&quot; (optional)
     * @param string $number_of_raw_measurements Filter variables by the total number of measurements that they have. This could be used of you want to filter or sort by popularity. (optional)
     * @param string $last_source Limit variables to those which measurements were last submitted by a specific source. So if you have a client application and you only want variables that were last updated by your app, you can include the name of your app here. (supports exact name match only) (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with &#x60;-, it will sort in descending order. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Variable, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesGetWithHttpInfo($access_token = null, $user_id = null, $id = null, $user_id2 = null, $category = null, $name = null, $last_updated = null, $source = null, $latest_measurement_time = null, $number_of_raw_measurements = null, $last_source = null, $limit = null, $offset = null, $sort = null)
    {
        // parse inputs
        $resourcePath = "/v1/variables";
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
        if ($user_id2 !== null) {
            $queryParams['userId'] = $this->apiClient->getSerializer()->toQueryValue($user_id2);
        }
        // query params
        if ($category !== null) {
            $queryParams['category'] = $this->apiClient->getSerializer()->toQueryValue($category);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }
        // query params
        if ($last_updated !== null) {
            $queryParams['lastUpdated'] = $this->apiClient->getSerializer()->toQueryValue($last_updated);
        }
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }
        // query params
        if ($latest_measurement_time !== null) {
            $queryParams['latestMeasurementTime'] = $this->apiClient->getSerializer()->toQueryValue($latest_measurement_time);
        }
        // query params
        if ($number_of_raw_measurements !== null) {
            $queryParams['numberOfRawMeasurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_raw_measurements);
        }
        // query params
        if ($last_source !== null) {
            $queryParams['lastSource'] = $this->apiClient->getSerializer()->toQueryValue($last_source);
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
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\QuantiModo\Client\Model\Variable',
                '/v1/variables'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Variable', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Variable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesPost
     *
     * Create Variables
     *
     * @param \QuantiModo\Client\Model\VariablesNew $body Original name for the variable. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v1VariablesPost($body, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1VariablesPostWithHttpInfo($body, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1VariablesPostWithHttpInfo
     *
     * Create Variables
     *
     * @param \QuantiModo\Client\Model\VariablesNew $body Original name for the variable. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesPostWithHttpInfo($body, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling v1VariablesPost');
        }
        // parse inputs
        $resourcePath = "/v1/variables";
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
                null,
                '/v1/variables'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesSearchSearchGet
     *
     * Get variables by search query
     *
     * @param string $search Search query which may be an entire variable name or a fragment of one. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. (optional)
     * @param bool $include_public Set to true if you would like to include public variables when no user variables are found. (optional)
     * @param bool $manual_tracking Set to true if you would like to exlude variables like apps and website names. (optional)
     * @param string $source Specify a data source name to only return variables from a specific data source. (optional)
     * @param string $effect_or_cause Indicate if you only want variables that have user correlations.  Possible values are effect and cause. (optional)
     * @param string $public_effect_or_cause Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Variable[]
     */
    public function v1VariablesSearchSearchGet($search, $access_token = null, $user_id = null, $variable_category_name = null, $include_public = null, $manual_tracking = null, $source = null, $effect_or_cause = null, $public_effect_or_cause = null, $limit = null, $offset = null)
    {
        list($response) = $this->v1VariablesSearchSearchGetWithHttpInfo($search, $access_token, $user_id, $variable_category_name, $include_public, $manual_tracking, $source, $effect_or_cause, $public_effect_or_cause, $limit, $offset);
        return $response;
    }

    /**
     * Operation v1VariablesSearchSearchGetWithHttpInfo
     *
     * Get variables by search query
     *
     * @param string $search Search query which may be an entire variable name or a fragment of one. (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @param string $variable_category_name Filter variables by category name. The variable categories include Activity, Causes of Illness, Cognitive Performance, Conditions, Environment, Foods, Location, Miscellaneous, Mood, Nutrition, Physical Activity, Physique, Sleep, Social Interactions, Symptoms, Treatments, Vital Signs, and Work. (optional)
     * @param bool $include_public Set to true if you would like to include public variables when no user variables are found. (optional)
     * @param bool $manual_tracking Set to true if you would like to exlude variables like apps and website names. (optional)
     * @param string $source Specify a data source name to only return variables from a specific data source. (optional)
     * @param string $effect_or_cause Indicate if you only want variables that have user correlations.  Possible values are effect and cause. (optional)
     * @param string $public_effect_or_cause Indicate if you only want variables that have aggregated correlations.  Possible values are effect and cause. (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Variable[], HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesSearchSearchGetWithHttpInfo($search, $access_token = null, $user_id = null, $variable_category_name = null, $include_public = null, $manual_tracking = null, $source = null, $effect_or_cause = null, $public_effect_or_cause = null, $limit = null, $offset = null)
    {
        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling v1VariablesSearchSearchGet');
        }
        // parse inputs
        $resourcePath = "/v1/variables/search/{search}";
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
        if ($include_public !== null) {
            $queryParams['includePublic'] = $this->apiClient->getSerializer()->toQueryValue($include_public);
        }
        // query params
        if ($manual_tracking !== null) {
            $queryParams['manualTracking'] = $this->apiClient->getSerializer()->toQueryValue($manual_tracking);
        }
        // query params
        if ($source !== null) {
            $queryParams['source'] = $this->apiClient->getSerializer()->toQueryValue($source);
        }
        // query params
        if ($effect_or_cause !== null) {
            $queryParams['effectOrCause'] = $this->apiClient->getSerializer()->toQueryValue($effect_or_cause);
        }
        // query params
        if ($public_effect_or_cause !== null) {
            $queryParams['publicEffectOrCause'] = $this->apiClient->getSerializer()->toQueryValue($public_effect_or_cause);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // path params
        if ($search !== null) {
            $resourcePath = str_replace(
                "{" . "search" . "}",
                $this->apiClient->getSerializer()->toPathValue($search),
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
                '\QuantiModo\Client\Model\Variable[]',
                '/v1/variables/search/{search}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Variable[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Variable[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation v1VariablesVariableNameGet
     *
     * Get info about a variable
     *
     * @param string $variable_name Variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return \QuantiModo\Client\Model\Variable
     */
    public function v1VariablesVariableNameGet($variable_name, $access_token = null, $user_id = null)
    {
        list($response) = $this->v1VariablesVariableNameGetWithHttpInfo($variable_name, $access_token, $user_id);
        return $response;
    }

    /**
     * Operation v1VariablesVariableNameGetWithHttpInfo
     *
     * Get info about a variable
     *
     * @param string $variable_name Variable name (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param int $user_id User&#39;s id (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of \QuantiModo\Client\Model\Variable, HTTP status code, HTTP response headers (array of strings)
     */
    public function v1VariablesVariableNameGetWithHttpInfo($variable_name, $access_token = null, $user_id = null)
    {
        // verify the required parameter 'variable_name' is set
        if ($variable_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling v1VariablesVariableNameGet');
        }
        // parse inputs
        $resourcePath = "/v1/variables/{variableName}";
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
                '\QuantiModo\Client\Model\Variable',
                '/v1/variables/{variableName}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\QuantiModo\Client\Model\Variable', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\QuantiModo\Client\Model\Variable', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
