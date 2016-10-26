<?php
/**
 * AuthenticationApi
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
 * AuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApi
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
     * @return AuthenticationApi
     */
    public function setApiClient(\QuantiModo\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation v2AuthSocialAuthorizeCodeGet
     *
     * Second Step in Social Authentication flow with JWT Token
     *
     * @param string $code Authorization code obtained from the provider. (required)
     * @param string $provider The current options are &#x60;google&#x60; and &#x60;facebook&#x60;. (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v2AuthSocialAuthorizeCodeGet($code, $provider)
    {
        list($response) = $this->v2AuthSocialAuthorizeCodeGetWithHttpInfo($code, $provider);
        return $response;
    }

    /**
     * Operation v2AuthSocialAuthorizeCodeGetWithHttpInfo
     *
     * Second Step in Social Authentication flow with JWT Token
     *
     * @param string $code Authorization code obtained from the provider. (required)
     * @param string $provider The current options are &#x60;google&#x60; and &#x60;facebook&#x60;. (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2AuthSocialAuthorizeCodeGetWithHttpInfo($code, $provider)
    {
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling v2AuthSocialAuthorizeCodeGet');
        }
        // verify the required parameter 'provider' is set
        if ($provider === null) {
            throw new \InvalidArgumentException('Missing the required parameter $provider when calling v2AuthSocialAuthorizeCodeGet');
        }
        // parse inputs
        $resourcePath = "/v2/auth/social/authorizeCode";
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
        if ($code !== null) {
            $queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
        }
        // query params
        if ($provider !== null) {
            $queryParams['provider'] = $this->apiClient->getSerializer()->toQueryValue($provider);
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
                null,
                '/v2/auth/social/authorizeCode'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v2AuthSocialAuthorizeTokenGet
     *
     * Native Social Authentication
     *
     * @param string $access_token User&#39;s OAuth2 access token obtained from Google or FB native SDK (required)
     * @param string $provider The current options are &#x60;google&#x60; and &#x60;facebook&#x60;. (required)
     * @param string $refresh_token Optional refresh token obtained from Google or FB native SDK (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v2AuthSocialAuthorizeTokenGet($access_token, $provider, $refresh_token = null)
    {
        list($response) = $this->v2AuthSocialAuthorizeTokenGetWithHttpInfo($access_token, $provider, $refresh_token);
        return $response;
    }

    /**
     * Operation v2AuthSocialAuthorizeTokenGetWithHttpInfo
     *
     * Native Social Authentication
     *
     * @param string $access_token User&#39;s OAuth2 access token obtained from Google or FB native SDK (required)
     * @param string $provider The current options are &#x60;google&#x60; and &#x60;facebook&#x60;. (required)
     * @param string $refresh_token Optional refresh token obtained from Google or FB native SDK (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2AuthSocialAuthorizeTokenGetWithHttpInfo($access_token, $provider, $refresh_token = null)
    {
        // verify the required parameter 'access_token' is set
        if ($access_token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_token when calling v2AuthSocialAuthorizeTokenGet');
        }
        // verify the required parameter 'provider' is set
        if ($provider === null) {
            throw new \InvalidArgumentException('Missing the required parameter $provider when calling v2AuthSocialAuthorizeTokenGet');
        }
        // parse inputs
        $resourcePath = "/v2/auth/social/authorizeToken";
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
        if ($refresh_token !== null) {
            $queryParams['refreshToken'] = $this->apiClient->getSerializer()->toQueryValue($refresh_token);
        }
        // query params
        if ($access_token !== null) {
            $queryParams['accessToken'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }
        // query params
        if ($provider !== null) {
            $queryParams['provider'] = $this->apiClient->getSerializer()->toQueryValue($provider);
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
                null,
                '/v2/auth/social/authorizeToken'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v2AuthSocialLoginGet
     *
     * First Setp in Social Authentication flow with JWT Token
     *
     * @param string $redirect_url The redirect URI is the URL within your client application that will receive the OAuth2 credentials. Url should be registered with our social apps. Facebook and Twitter are fine with any redirect url with the same domain base url but Google needs exact redirect url. (required)
     * @param string $provider The current options are &#x60;google&#x60; and &#x60;facebook&#x60;. (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v2AuthSocialLoginGet($redirect_url, $provider)
    {
        list($response) = $this->v2AuthSocialLoginGetWithHttpInfo($redirect_url, $provider);
        return $response;
    }

    /**
     * Operation v2AuthSocialLoginGetWithHttpInfo
     *
     * First Setp in Social Authentication flow with JWT Token
     *
     * @param string $redirect_url The redirect URI is the URL within your client application that will receive the OAuth2 credentials. Url should be registered with our social apps. Facebook and Twitter are fine with any redirect url with the same domain base url but Google needs exact redirect url. (required)
     * @param string $provider The current options are &#x60;google&#x60; and &#x60;facebook&#x60;. (required)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2AuthSocialLoginGetWithHttpInfo($redirect_url, $provider)
    {
        // verify the required parameter 'redirect_url' is set
        if ($redirect_url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $redirect_url when calling v2AuthSocialLoginGet');
        }
        // verify the required parameter 'provider' is set
        if ($provider === null) {
            throw new \InvalidArgumentException('Missing the required parameter $provider when calling v2AuthSocialLoginGet');
        }
        // parse inputs
        $resourcePath = "/v2/auth/social/login";
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
        if ($redirect_url !== null) {
            $queryParams['redirectUrl'] = $this->apiClient->getSerializer()->toQueryValue($redirect_url);
        }
        // query params
        if ($provider !== null) {
            $queryParams['provider'] = $this->apiClient->getSerializer()->toQueryValue($provider);
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
                null,
                '/v2/auth/social/login'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v2Oauth2AccessTokenGet
     *
     * Get a user access token
     *
     * @param string $client_id This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by emailing info@quantimo.do. (required)
     * @param string $client_secret This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId. (required)
     * @param string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param string $code Authorization code you received with the previous request. (required)
     * @param string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (optional)
     * @param string $scope Scopes include basic, readmeasurements, and writemeasurements. The \&quot;basic\&quot; scope allows you to read user info (displayname, email, etc). The \&quot;readmeasurements\&quot; scope allows one to read a user&#39;s data. The \&quot;writemeasurements\&quot; scope allows you to write user data. Separate multiple scopes by a space. (optional)
     * @param string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v2Oauth2AccessTokenGet($client_id, $client_secret, $grant_type, $code, $response_type = null, $scope = null, $redirect_uri = null, $state = null)
    {
        list($response) = $this->v2Oauth2AccessTokenGetWithHttpInfo($client_id, $client_secret, $grant_type, $code, $response_type, $scope, $redirect_uri, $state);
        return $response;
    }

    /**
     * Operation v2Oauth2AccessTokenGetWithHttpInfo
     *
     * Get a user access token
     *
     * @param string $client_id This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by emailing info@quantimo.do. (required)
     * @param string $client_secret This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId. (required)
     * @param string $grant_type Grant Type can be &#39;authorization_code&#39; or &#39;refresh_token&#39; (required)
     * @param string $code Authorization code you received with the previous request. (required)
     * @param string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (optional)
     * @param string $scope Scopes include basic, readmeasurements, and writemeasurements. The \&quot;basic\&quot; scope allows you to read user info (displayname, email, etc). The \&quot;readmeasurements\&quot; scope allows one to read a user&#39;s data. The \&quot;writemeasurements\&quot; scope allows you to write user data. Separate multiple scopes by a space. (optional)
     * @param string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2Oauth2AccessTokenGetWithHttpInfo($client_id, $client_secret, $grant_type, $code, $response_type = null, $scope = null, $redirect_uri = null, $state = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling v2Oauth2AccessTokenGet');
        }
        // verify the required parameter 'client_secret' is set
        if ($client_secret === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_secret when calling v2Oauth2AccessTokenGet');
        }
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling v2Oauth2AccessTokenGet');
        }
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling v2Oauth2AccessTokenGet');
        }
        // parse inputs
        $resourcePath = "/v2/oauth2/access_token";
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
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($client_secret !== null) {
            $queryParams['client_secret'] = $this->apiClient->getSerializer()->toQueryValue($client_secret);
        }
        // query params
        if ($grant_type !== null) {
            $queryParams['grant_type'] = $this->apiClient->getSerializer()->toQueryValue($grant_type);
        }
        // query params
        if ($code !== null) {
            $queryParams['code'] = $this->apiClient->getSerializer()->toQueryValue($code);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['response_type'] = $this->apiClient->getSerializer()->toQueryValue($response_type);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = $this->apiClient->getSerializer()->toQueryValue($scope);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = $this->apiClient->getSerializer()->toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
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
                null,
                '/v2/oauth2/access_token'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation v2OauthAuthorizeGet
     *
     * Request Authorization Code
     *
     * @param string $client_id This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do). (required)
     * @param string $client_secret This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId.  Obtain this by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do). (required)
     * @param string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param string $scope Scopes include basic, readmeasurements, and writemeasurements. The \&quot;basic\&quot; scope allows you to read user info (displayname, email, etc). The \&quot;readmeasurements\&quot; scope allows one to read a user&#39;s data. The \&quot;writemeasurements\&quot; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return void
     */
    public function v2OauthAuthorizeGet($client_id, $client_secret, $response_type, $scope, $redirect_uri = null, $state = null)
    {
        list($response) = $this->v2OauthAuthorizeGetWithHttpInfo($client_id, $client_secret, $response_type, $scope, $redirect_uri, $state);
        return $response;
    }

    /**
     * Operation v2OauthAuthorizeGetWithHttpInfo
     *
     * Request Authorization Code
     *
     * @param string $client_id This is the unique ID that QuantiModo uses to identify your application. Obtain a client id by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do). (required)
     * @param string $client_secret This is the secret for your obtained clientId. QuantiModo uses this to validate that only your application uses the clientId.  Obtain this by creating a free application at [https://admin.quantimo.do](https://admin.quantimo.do). (required)
     * @param string $response_type If the value is code, launches a Basic flow, requiring a POST to the token endpoint to obtain the tokens. If the value is token id_token or id_token token, launches an Implicit flow, requiring the use of Javascript at the redirect URI to retrieve tokens from the URI #fragment. (required)
     * @param string $scope Scopes include basic, readmeasurements, and writemeasurements. The \&quot;basic\&quot; scope allows you to read user info (displayname, email, etc). The \&quot;readmeasurements\&quot; scope allows one to read a user&#39;s data. The \&quot;writemeasurements\&quot; scope allows you to write user data. Separate multiple scopes by a space. (required)
     * @param string $redirect_uri The redirect URI is the URL within your client application that will receive the OAuth2 credentials. (optional)
     * @param string $state An opaque string that is round-tripped in the protocol; that is to say, it is returned as a URI parameter in the Basic flow, and in the URI (optional)
     * @throws \QuantiModo\Client\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function v2OauthAuthorizeGetWithHttpInfo($client_id, $client_secret, $response_type, $scope, $redirect_uri = null, $state = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling v2OauthAuthorizeGet');
        }
        // verify the required parameter 'client_secret' is set
        if ($client_secret === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_secret when calling v2OauthAuthorizeGet');
        }
        // verify the required parameter 'response_type' is set
        if ($response_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $response_type when calling v2OauthAuthorizeGet');
        }
        // verify the required parameter 'scope' is set
        if ($scope === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scope when calling v2OauthAuthorizeGet');
        }
        // parse inputs
        $resourcePath = "/v2/oauth/authorize";
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
        if ($client_id !== null) {
            $queryParams['clientId'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }
        // query params
        if ($client_secret !== null) {
            $queryParams['client_secret'] = $this->apiClient->getSerializer()->toQueryValue($client_secret);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['response_type'] = $this->apiClient->getSerializer()->toQueryValue($response_type);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = $this->apiClient->getSerializer()->toQueryValue($scope);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = $this->apiClient->getSerializer()->toQueryValue($redirect_uri);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
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
                null,
                '/v2/oauth/authorize'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
