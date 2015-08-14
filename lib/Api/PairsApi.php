<?php
/**
 * PairsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
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
 * PairsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PairsApi
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
            $apiClient->getConfig()->setHost('https://localhost/api');
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
     * @return PairsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * pairsGet
     *
     * Get pairs
     *
     * @param string $cause Original variable name for the explanatory or independent variable (required)
     * @param string $effect Original variable name for the outcome or dependent variable (required)
     * @param string $cause_source Name of data source that the cause measurements should come from (optional)
     * @param string $cause_unit Abbreviated name for the unit cause measurements to be returned in (optional)
     * @param string $delay Delay before onset of action (in seconds) from the cause variable settings. (optional)
     * @param string $duration Duration of action (in seconds) from the cause variable settings. (optional)
     * @param string $effect_source Name of data source that the effectmeasurements should come from (optional)
     * @param string $effect_unit Abbreviated name for the unit effect measurements to be returned in (optional)
     * @param string $end_time The most recent date (in epoch time) for which we should return measurements (optional)
     * @param string $start_time The earliest date (in epoch time) for which we should return measurements (optional)
     * @param int $limit The LIMIT is used to limit the number of results returned. So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. (optional)
     * @param int $offset Now suppose you wanted to show results 11-20. You&#39;d set the offset to 10 and the limit to 10. (optional)
     * @param int $sort Sort by given field. If the field is prefixed with `-, it will sort in descending order. (optional)
     * @return \Swagger\Client\Model\Pairs[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function pairsGet($cause, $effect, $cause_source=null, $cause_unit=null, $delay=null, $duration=null, $effect_source=null, $effect_unit=null, $end_time=null, $start_time=null, $limit=null, $offset=null, $sort=null)
    {
        
        // verify the required parameter 'cause' is set
        if ($cause === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cause when calling pairsGet');
        }
        // verify the required parameter 'effect' is set
        if ($effect === null) {
            throw new \InvalidArgumentException('Missing the required parameter $effect when calling pairsGet');
        }
  
        // parse inputs
        $resourcePath = "/pairs";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($cause !== null) {
            $queryParams['cause'] = $this->apiClient->getSerializer()->toQueryValue($cause);
        }// query params
        if ($cause_source !== null) {
            $queryParams['causeSource'] = $this->apiClient->getSerializer()->toQueryValue($cause_source);
        }// query params
        if ($cause_unit !== null) {
            $queryParams['causeUnit'] = $this->apiClient->getSerializer()->toQueryValue($cause_unit);
        }// query params
        if ($delay !== null) {
            $queryParams['delay'] = $this->apiClient->getSerializer()->toQueryValue($delay);
        }// query params
        if ($duration !== null) {
            $queryParams['duration'] = $this->apiClient->getSerializer()->toQueryValue($duration);
        }// query params
        if ($effect !== null) {
            $queryParams['effect'] = $this->apiClient->getSerializer()->toQueryValue($effect);
        }// query params
        if ($effect_source !== null) {
            $queryParams['effectSource'] = $this->apiClient->getSerializer()->toQueryValue($effect_source);
        }// query params
        if ($effect_unit !== null) {
            $queryParams['effectUnit'] = $this->apiClient->getSerializer()->toQueryValue($effect_unit);
        }// query params
        if ($end_time !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($end_time);
        }// query params
        if ($start_time !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($start_time);
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
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\Pairs[]'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Pairs[]', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Pairs[]');
        
    }
    
}
