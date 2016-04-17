<?php
/**
 * ConnectorApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
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
 * ConnectorApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConnectorApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://app.quantimo.do/api/v2');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return ConnectorApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * connectorsGet
     *
     * Get list of Connectors
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $name Lowercase system name for the data source (optional)
     * @param string $display_name Pretty display name for the data source (optional)
     * @param string $image URL to the image of the connector logo (optional)
     * @param string $get_it_url URL to a site where one can get this device or application (optional)
     * @param string $short_description Short description of the service (such as the categories it tracks) (optional)
     * @param string $long_description Longer paragraph description of the data provider (optional)
     * @param bool $enabled Set to 1 if the connector should be returned when listing connectors (optional)
     * @param bool $oauth Set to 1 if the connector uses OAuth authentication as opposed to username/password (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\InlineResponse20015
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsGet($access_token = null, $name = null, $display_name = null, $image = null, $get_it_url = null, $short_description = null, $long_description = null, $enabled = null, $oauth = null, $limit = null, $offset = null, $sort = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectorsGetWithHttpInfo ($access_token, $name, $display_name, $image, $get_it_url, $short_description, $long_description, $enabled, $oauth, $limit, $offset, $sort);
        return $response; 
    }


    /**
     * connectorsGetWithHttpInfo
     *
     * Get list of Connectors
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param string $name Lowercase system name for the data source (optional)
     * @param string $display_name Pretty display name for the data source (optional)
     * @param string $image URL to the image of the connector logo (optional)
     * @param string $get_it_url URL to a site where one can get this device or application (optional)
     * @param string $short_description Short description of the service (such as the categories it tracks) (optional)
     * @param string $long_description Longer paragraph description of the data provider (optional)
     * @param bool $enabled Set to 1 if the connector should be returned when listing connectors (optional)
     * @param bool $oauth Set to 1 if the connector uses OAuth authentication as opposed to username/password (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records. (optional)
     * @param int $offset OFFSET says to skip that many rows before beginning to return rows to the client. OFFSET 0 is the same as omitting the OFFSET clause. If both OFFSET and LIMIT appear, then OFFSET rows are skipped before starting to count the LIMIT rows that are returned. (optional)
     * @param string $sort Sort by given field. If the field is prefixed with &#39;-&#39;, it will sort in descending order. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20015, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsGetWithHttpInfo($access_token = null, $name = null, $display_name = null, $image = null, $get_it_url = null, $short_description = null, $long_description = null, $enabled = null, $oauth = null, $limit = null, $offset = null, $sort = null)
    {
        
  
        // parse inputs
        $resourcePath = "/connectors";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        
        if ($access_token !== null) {
            $queryParams['access_token'] = $this->apiClient->getSerializer()->toQueryValue($access_token);
        }// query params
        
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }// query params
        
        if ($display_name !== null) {
            $queryParams['display_name'] = $this->apiClient->getSerializer()->toQueryValue($display_name);
        }// query params
        
        if ($image !== null) {
            $queryParams['image'] = $this->apiClient->getSerializer()->toQueryValue($image);
        }// query params
        
        if ($get_it_url !== null) {
            $queryParams['get_it_url'] = $this->apiClient->getSerializer()->toQueryValue($get_it_url);
        }// query params
        
        if ($short_description !== null) {
            $queryParams['short_description'] = $this->apiClient->getSerializer()->toQueryValue($short_description);
        }// query params
        
        if ($long_description !== null) {
            $queryParams['long_description'] = $this->apiClient->getSerializer()->toQueryValue($long_description);
        }// query params
        
        if ($enabled !== null) {
            $queryParams['enabled'] = $this->apiClient->getSerializer()->toQueryValue($enabled);
        }// query params
        
        if ($oauth !== null) {
            $queryParams['oauth'] = $this->apiClient->getSerializer()->toQueryValue($oauth);
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
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20015'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20015', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20015', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectorsPost
     *
     * Store Connector
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connector $body Connector that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20016
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsPost($access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectorsPostWithHttpInfo ($access_token, $body);
        return $response; 
    }


    /**
     * connectorsPostWithHttpInfo
     *
     * Store Connector
     *
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connector $body Connector that should be stored (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20016, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsPostWithHttpInfo($access_token = null, $body = null)
    {
        
  
        // parse inputs
        $resourcePath = "/connectors";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
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
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20016'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20016', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20016', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectorsIdGet
     *
     * Get connector info for user
     *
     * @param int $id id of Connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse20016
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsIdGet($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectorsIdGetWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * connectorsIdGetWithHttpInfo
     *
     * Get connector info for user
     *
     * @param int $id id of Connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse20016, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsIdGetWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling connectorsIdGet');
        }
  
        // parse inputs
        $resourcePath = "/connectors/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
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
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20016'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse20016', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20016', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectorsIdPut
     *
     * Update Connector
     *
     * @param int $id id of Connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connector $body Connector that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsIdPut($id, $access_token = null, $body = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectorsIdPutWithHttpInfo ($id, $access_token, $body);
        return $response; 
    }


    /**
     * connectorsIdPutWithHttpInfo
     *
     * Update Connector
     *
     * @param int $id id of Connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @param \Swagger\Client\Model\Connector $body Connector that should be updated (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsIdPutWithHttpInfo($id, $access_token = null, $body = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling connectorsIdPut');
        }
  
        // parse inputs
        $resourcePath = "/connectors/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
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
                $resourcePath, 'PUT',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * connectorsIdDelete
     *
     * Delete Connector
     *
     * @param int $id id of Connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsIdDelete($id, $access_token = null)
    {
        list($response, $statusCode, $httpHeader) = $this->connectorsIdDeleteWithHttpInfo ($id, $access_token);
        return $response; 
    }


    /**
     * connectorsIdDeleteWithHttpInfo
     *
     * Delete Connector
     *
     * @param int $id id of Connector (required)
     * @param string $access_token User&#39;s OAuth2 access token (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function connectorsIdDeleteWithHttpInfo($id, $access_token = null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling connectorsIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/connectors/{id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
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
                $resourcePath, 'DELETE',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
