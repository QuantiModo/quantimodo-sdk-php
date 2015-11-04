<?php
/**
 * UserVariableApi
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
 * UserVariableApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserVariableApi
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
     * @return UserVariableApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * userVariablesGet
     *
     * Get all UserVariables
     *
     * @param string $client_id client_id (optional)
     * @param int $variable_id variable_id (optional)
     * @param int $default_unit_id default_unit_id (optional)
     * @param Number $minimum_allowed_value minimum_allowed_value (optional)
     * @param Number $maximum_allowed_value maximum_allowed_value (optional)
     * @param Number $filling_value filling_value (optional)
     * @param int $join_with join_with (optional)
     * @param int $onset_delay onset_delay (optional)
     * @param int $duration_of_action duration_of_action (optional)
     * @param int $variable_category_id variable_category_id (optional)
     * @param int $updated updated (optional)
     * @param int $public public (optional)
     * @param bool $cause_only cause_only (optional)
     * @param string $filling_type filling_type (optional)
     * @param int $number_of_measurements number_of_measurements (optional)
     * @param int $number_of_processed_measurements number_of_processed_measurements (optional)
     * @param int $measurements_at_last_analysis measurements_at_last_analysis (optional)
     * @param int $last_unit_id last_unit_id (optional)
     * @param int $last_original_unit_id last_original_unit_id (optional)
     * @param int $last_original_value last_original_value (optional)
     * @param Number $last_value last_value (optional)
     * @param int $last_source_id last_source_id (optional)
     * @param int $number_of_correlations number_of_correlations (optional)
     * @param string $status status (optional)
     * @param string $error_message error_message (optional)
     * @param string $last_successful_update_time last_successful_update_time (optional)
     * @param Number $standard_deviation standard_deviation (optional)
     * @param Number $variance variance (optional)
     * @param Number $minimum_recorded_daily_value minimum_recorded_daily_value (optional)
     * @param Number $maximum_recorded_daily_value maximum_recorded_daily_value (optional)
     * @param Number $mean mean (optional)
     * @param Number $median median (optional)
     * @param int $most_common_unit_id most_common_unit_id (optional)
     * @param Number $most_common_value most_common_value (optional)
     * @param Number $number_of_unique_daily_values number_of_unique_daily_values (optional)
     * @param int $number_of_changes number_of_changes (optional)
     * @param Number $skewness skewness (optional)
     * @param Number $kurtosis kurtosis (optional)
     * @param Number $latitude latitude (optional)
     * @param Number $longitude longitude (optional)
     * @param string $location location (optional)
     * @param string $created_at created_at (optional)
     * @param string $updated_at updated_at (optional)
     * @param bool $outcome outcome (optional)
     * @param string $sources sources (optional)
     * @param int $earliest_source_time earliest_source_time (optional)
     * @param int $latest_source_time latest_source_time (optional)
     * @param int $earliest_measurement_time earliest_measurement_time (optional)
     * @param int $latest_measurement_time latest_measurement_time (optional)
     * @param int $earliest_filling_time earliest_filling_time (optional)
     * @param int $latest_filling_time latest_filling_time (optional)
     * @param int $limit limit (optional)
     * @param int $offset offset (optional)
     * @param string $sort sort (optional)
     * @return \Swagger\Client\Model\InlineResponse20021
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariablesGet($client_id=null, $variable_id=null, $default_unit_id=null, $minimum_allowed_value=null, $maximum_allowed_value=null, $filling_value=null, $join_with=null, $onset_delay=null, $duration_of_action=null, $variable_category_id=null, $updated=null, $public=null, $cause_only=null, $filling_type=null, $number_of_measurements=null, $number_of_processed_measurements=null, $measurements_at_last_analysis=null, $last_unit_id=null, $last_original_unit_id=null, $last_original_value=null, $last_value=null, $last_source_id=null, $number_of_correlations=null, $status=null, $error_message=null, $last_successful_update_time=null, $standard_deviation=null, $variance=null, $minimum_recorded_daily_value=null, $maximum_recorded_daily_value=null, $mean=null, $median=null, $most_common_unit_id=null, $most_common_value=null, $number_of_unique_daily_values=null, $number_of_changes=null, $skewness=null, $kurtosis=null, $latitude=null, $longitude=null, $location=null, $created_at=null, $updated_at=null, $outcome=null, $sources=null, $earliest_source_time=null, $latest_source_time=null, $earliest_measurement_time=null, $latest_measurement_time=null, $earliest_filling_time=null, $latest_filling_time=null, $limit=null, $offset=null, $sort=null)
    {
        
  
        // parse inputs
        $resourcePath = "/userVariables";
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
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        // query params
        if ($client_id !== null) {
            $queryParams['client_id'] = $this->apiClient->getSerializer()->toQueryValue($client_id);
        }// query params
        if ($variable_id !== null) {
            $queryParams['variable_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_id);
        }// query params
        if ($default_unit_id !== null) {
            $queryParams['default_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($default_unit_id);
        }// query params
        if ($minimum_allowed_value !== null) {
            $queryParams['minimum_allowed_value'] = $this->apiClient->getSerializer()->toQueryValue($minimum_allowed_value);
        }// query params
        if ($maximum_allowed_value !== null) {
            $queryParams['maximum_allowed_value'] = $this->apiClient->getSerializer()->toQueryValue($maximum_allowed_value);
        }// query params
        if ($filling_value !== null) {
            $queryParams['filling_value'] = $this->apiClient->getSerializer()->toQueryValue($filling_value);
        }// query params
        if ($join_with !== null) {
            $queryParams['join_with'] = $this->apiClient->getSerializer()->toQueryValue($join_with);
        }// query params
        if ($onset_delay !== null) {
            $queryParams['onset_delay'] = $this->apiClient->getSerializer()->toQueryValue($onset_delay);
        }// query params
        if ($duration_of_action !== null) {
            $queryParams['duration_of_action'] = $this->apiClient->getSerializer()->toQueryValue($duration_of_action);
        }// query params
        if ($variable_category_id !== null) {
            $queryParams['variable_category_id'] = $this->apiClient->getSerializer()->toQueryValue($variable_category_id);
        }// query params
        if ($updated !== null) {
            $queryParams['updated'] = $this->apiClient->getSerializer()->toQueryValue($updated);
        }// query params
        if ($public !== null) {
            $queryParams['public'] = $this->apiClient->getSerializer()->toQueryValue($public);
        }// query params
        if ($cause_only !== null) {
            $queryParams['cause_only'] = $this->apiClient->getSerializer()->toQueryValue($cause_only);
        }// query params
        if ($filling_type !== null) {
            $queryParams['filling_type'] = $this->apiClient->getSerializer()->toQueryValue($filling_type);
        }// query params
        if ($number_of_measurements !== null) {
            $queryParams['number_of_measurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_measurements);
        }// query params
        if ($number_of_processed_measurements !== null) {
            $queryParams['number_of_processed_measurements'] = $this->apiClient->getSerializer()->toQueryValue($number_of_processed_measurements);
        }// query params
        if ($measurements_at_last_analysis !== null) {
            $queryParams['measurements_at_last_analysis'] = $this->apiClient->getSerializer()->toQueryValue($measurements_at_last_analysis);
        }// query params
        if ($last_unit_id !== null) {
            $queryParams['last_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($last_unit_id);
        }// query params
        if ($last_original_unit_id !== null) {
            $queryParams['last_original_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($last_original_unit_id);
        }// query params
        if ($last_original_value !== null) {
            $queryParams['last_original_value'] = $this->apiClient->getSerializer()->toQueryValue($last_original_value);
        }// query params
        if ($last_value !== null) {
            $queryParams['last_value'] = $this->apiClient->getSerializer()->toQueryValue($last_value);
        }// query params
        if ($last_source_id !== null) {
            $queryParams['last_source_id'] = $this->apiClient->getSerializer()->toQueryValue($last_source_id);
        }// query params
        if ($number_of_correlations !== null) {
            $queryParams['number_of_correlations'] = $this->apiClient->getSerializer()->toQueryValue($number_of_correlations);
        }// query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }// query params
        if ($error_message !== null) {
            $queryParams['error_message'] = $this->apiClient->getSerializer()->toQueryValue($error_message);
        }// query params
        if ($last_successful_update_time !== null) {
            $queryParams['last_successful_update_time'] = $this->apiClient->getSerializer()->toQueryValue($last_successful_update_time);
        }// query params
        if ($standard_deviation !== null) {
            $queryParams['standard_deviation'] = $this->apiClient->getSerializer()->toQueryValue($standard_deviation);
        }// query params
        if ($variance !== null) {
            $queryParams['variance'] = $this->apiClient->getSerializer()->toQueryValue($variance);
        }// query params
        if ($minimum_recorded_daily_value !== null) {
            $queryParams['minimum_recorded_daily_value'] = $this->apiClient->getSerializer()->toQueryValue($minimum_recorded_daily_value);
        }// query params
        if ($maximum_recorded_daily_value !== null) {
            $queryParams['maximum_recorded_daily_value'] = $this->apiClient->getSerializer()->toQueryValue($maximum_recorded_daily_value);
        }// query params
        if ($mean !== null) {
            $queryParams['mean'] = $this->apiClient->getSerializer()->toQueryValue($mean);
        }// query params
        if ($median !== null) {
            $queryParams['median'] = $this->apiClient->getSerializer()->toQueryValue($median);
        }// query params
        if ($most_common_unit_id !== null) {
            $queryParams['most_common_unit_id'] = $this->apiClient->getSerializer()->toQueryValue($most_common_unit_id);
        }// query params
        if ($most_common_value !== null) {
            $queryParams['most_common_value'] = $this->apiClient->getSerializer()->toQueryValue($most_common_value);
        }// query params
        if ($number_of_unique_daily_values !== null) {
            $queryParams['number_of_unique_daily_values'] = $this->apiClient->getSerializer()->toQueryValue($number_of_unique_daily_values);
        }// query params
        if ($number_of_changes !== null) {
            $queryParams['number_of_changes'] = $this->apiClient->getSerializer()->toQueryValue($number_of_changes);
        }// query params
        if ($skewness !== null) {
            $queryParams['skewness'] = $this->apiClient->getSerializer()->toQueryValue($skewness);
        }// query params
        if ($kurtosis !== null) {
            $queryParams['kurtosis'] = $this->apiClient->getSerializer()->toQueryValue($kurtosis);
        }// query params
        if ($latitude !== null) {
            $queryParams['latitude'] = $this->apiClient->getSerializer()->toQueryValue($latitude);
        }// query params
        if ($longitude !== null) {
            $queryParams['longitude'] = $this->apiClient->getSerializer()->toQueryValue($longitude);
        }// query params
        if ($location !== null) {
            $queryParams['location'] = $this->apiClient->getSerializer()->toQueryValue($location);
        }// query params
        if ($created_at !== null) {
            $queryParams['created_at'] = $this->apiClient->getSerializer()->toQueryValue($created_at);
        }// query params
        if ($updated_at !== null) {
            $queryParams['updated_at'] = $this->apiClient->getSerializer()->toQueryValue($updated_at);
        }// query params
        if ($outcome !== null) {
            $queryParams['outcome'] = $this->apiClient->getSerializer()->toQueryValue($outcome);
        }// query params
        if ($sources !== null) {
            $queryParams['sources'] = $this->apiClient->getSerializer()->toQueryValue($sources);
        }// query params
        if ($earliest_source_time !== null) {
            $queryParams['earliest_source_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_source_time);
        }// query params
        if ($latest_source_time !== null) {
            $queryParams['latest_source_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_source_time);
        }// query params
        if ($earliest_measurement_time !== null) {
            $queryParams['earliest_measurement_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_measurement_time);
        }// query params
        if ($latest_measurement_time !== null) {
            $queryParams['latest_measurement_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_measurement_time);
        }// query params
        if ($earliest_filling_time !== null) {
            $queryParams['earliest_filling_time'] = $this->apiClient->getSerializer()->toQueryValue($earliest_filling_time);
        }// query params
        if ($latest_filling_time !== null) {
            $queryParams['latest_filling_time'] = $this->apiClient->getSerializer()->toQueryValue($latest_filling_time);
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
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20021'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20021', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20021', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * userVariablesPost
     *
     * Store UserVariable
     *
     * @param \Swagger\Client\Model\UserVariable $body UserVariable that should be stored (optional)
     * @return \Swagger\Client\Model\InlineResponse20022
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariablesPost($body=null)
    {
        
  
        // parse inputs
        $resourcePath = "/userVariables";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20022'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20022', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20022', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * userVariablesIdGet
     *
     * Get UserVariable
     *
     * @param int $id id of UserVariable (required)
     * @return \Swagger\Client\Model\InlineResponse20022
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariablesIdGet($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userVariablesIdGet');
        }
  
        // parse inputs
        $resourcePath = "/userVariables/{id}";
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
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse20022'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse20022', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse20022', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * userVariablesIdPut
     *
     * Update UserVariable
     *
     * @param int $id id of UserVariable (required)
     * @param \Swagger\Client\Model\UserVariable $body UserVariable that should be updated (optional)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariablesIdPut($id, $body=null)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userVariablesIdPut');
        }
  
        // parse inputs
        $resourcePath = "/userVariables/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "PUT";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
    /**
     * userVariablesIdDelete
     *
     * Delete UserVariable
     *
     * @param int $id id of UserVariable (required)
     * @return \Swagger\Client\Model\InlineResponse2002
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function userVariablesIdDelete($id)
    {
        
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling userVariablesIdDelete');
        }
  
        // parse inputs
        $resourcePath = "/userVariables/{id}";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "DELETE";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\InlineResponse2002'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2002', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2002', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}