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

class MeasurementsApi {

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
   * measurementSourcesGet
   *
   * Get measurement sources
   *
   * @return MeasurementSource
   */
   public function measurementSourcesGet() {
      

      // parse inputs
      $resourcePath = "/measurementSources";
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

      $responseObject = $this->apiClient->deserialize($response,'MeasurementSource');
      return $responseObject;
  }
  
  /**
   * measurementSourcesPost
   *
   * Add a data source
   *
   * @param MeasurementSource $name An array of names of data sources you want to add. (required)
   * @return void
   */
   public function measurementSourcesPost($name) {
      
      // verify the required parameter 'name' is set
      if ($name === null) {
        throw new \InvalidArgumentException('Missing the required parameter $name when calling measurementSourcesPost');
      }
      

      // parse inputs
      $resourcePath = "/measurementSources";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($name)) {
        $_tempBody = $name;
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

      
  }
  
  /**
   * measurementsGet
   *
   * Get measurements for this user
   *
   * @param string $variable_name Name of the variable you want measurements for (required)
   * @param string $unit The unit your want the measurements in (required)
   * @param string $start_time The lower limit of measurements returned (Epoch) (required)
   * @param string $end_time The upper limit of measurements returned (Epoch) (required)
   * @param int $grouping_width The time (in seconds) over which measurements are grouped together (required)
   * @param string $grouping_timezone The time (in seconds) over which measurements are grouped together (required)
   * @return Measurement
   */
   public function measurementsGet($variable_name, $unit, $start_time, $end_time, $grouping_width, $grouping_timezone) {
      
      // verify the required parameter 'variable_name' is set
      if ($variable_name === null) {
        throw new \InvalidArgumentException('Missing the required parameter $variable_name when calling measurementsGet');
      }
      

      // parse inputs
      $resourcePath = "/measurements";
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
      if($variable_name !== null) {
        $queryParams['variableName'] = $this->apiClient->toQueryValue($variable_name);
      }// query params
      if($unit !== null) {
        $queryParams['unit'] = $this->apiClient->toQueryValue($unit);
      }// query params
      if($start_time !== null) {
        $queryParams['startTime'] = $this->apiClient->toQueryValue($start_time);
      }// query params
      if($end_time !== null) {
        $queryParams['endTime'] = $this->apiClient->toQueryValue($end_time);
      }// query params
      if($grouping_width !== null) {
        $queryParams['groupingWidth'] = $this->apiClient->toQueryValue($grouping_width);
      }// query params
      if($grouping_timezone !== null) {
        $queryParams['groupingTimezone'] = $this->apiClient->toQueryValue($grouping_timezone);
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

      $responseObject = $this->apiClient->deserialize($response,'Measurement');
      return $responseObject;
  }
  
  /**
   * measurementsV2Post
   *
   * Post a new set or update existing measurements to the database
   *
   * @param MeasurementSet $measurements An array of measurements you want to insert. (required)
   * @return void
   */
   public function measurementsV2Post($measurements) {
      
      // verify the required parameter 'measurements' is set
      if ($measurements === null) {
        throw new \InvalidArgumentException('Missing the required parameter $measurements when calling measurementsV2Post');
      }
      

      // parse inputs
      $resourcePath = "/measurements/v2";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($measurements)) {
        $_tempBody = $measurements;
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

      
  }
  
  /**
   * measurementsRangeGet
   *
   * Get measurements range for this user
   *
   * @param string $sources Enter source name to limit to specific source (varchar) (required)
   * @param int $user If not specified, uses currently logged in user (bigint) (required)
   * @return MeasurementRange
   */
   public function measurementsRangeGet($sources, $user) {
      

      // parse inputs
      $resourcePath = "/measurementsRange";
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
      if($sources !== null) {
        $queryParams['sources'] = $this->apiClient->toQueryValue($sources);
      }// query params
      if($user !== null) {
        $queryParams['user'] = $this->apiClient->toQueryValue($user);
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

      $responseObject = $this->apiClient->deserialize($response,'MeasurementRange');
      return $responseObject;
  }
  

}