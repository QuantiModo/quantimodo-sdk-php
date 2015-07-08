<?php
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
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 */

namespace SwaggerClient;

class PairsApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * pairsGet
   *
   * Get pairs
   *
   * @param string $cause Original variable name for the explanatory or independent variable (required)
   * @param string $cause_source Name of data source that the cause measurements should come from (required)
   * @param string $cause_unit Abbreviated name for the unit cause measurements to be returned in (required)
   * @param string $delay Delay before onset of action (in seconds) from the cause variable settings. (required)
   * @param string $duration Duration of action (in seconds) from the cause variable settings. (required)
   * @param string $effect Original variable name for the outcome or dependent variable (required)
   * @param string $effect_source Name of data source that the effectmeasurements should come from (required)
   * @param string $effect_unit Abbreviated name for the unit effect measurements to be returned in (required)
   * @param string $end_time The most recent date (in epoch time) for which we should return measurements (required)
   * @param string $start_time The earliest date (in epoch time) for which we should return measurements (required)
   * @return array[Pairs]
   */
   public function pairsGet($cause, $cause_source, $cause_unit, $delay, $duration, $effect, $effect_source, $effect_unit, $end_time, $start_time) {
      
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
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($cause !== null) {
        $queryParams['cause'] = $this->apiClient->toQueryValue($cause);
      }// query params
      if($cause_source !== null) {
        $queryParams['causeSource'] = $this->apiClient->toQueryValue($cause_source);
      }// query params
      if($cause_unit !== null) {
        $queryParams['causeUnit'] = $this->apiClient->toQueryValue($cause_unit);
      }// query params
      if($delay !== null) {
        $queryParams['delay'] = $this->apiClient->toQueryValue($delay);
      }// query params
      if($duration !== null) {
        $queryParams['duration'] = $this->apiClient->toQueryValue($duration);
      }// query params
      if($effect !== null) {
        $queryParams['effect'] = $this->apiClient->toQueryValue($effect);
      }// query params
      if($effect_source !== null) {
        $queryParams['effectSource'] = $this->apiClient->toQueryValue($effect_source);
      }// query params
      if($effect_unit !== null) {
        $queryParams['effectUnit'] = $this->apiClient->toQueryValue($effect_unit);
      }// query params
      if($end_time !== null) {
        $queryParams['endTime'] = $this->apiClient->toQueryValue($end_time);
      }// query params
      if($start_time !== null) {
        $queryParams['startTime'] = $this->apiClient->toQueryValue($start_time);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('oauth2');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'array[Pairs]');
      return $responseObject;
  }
  

}