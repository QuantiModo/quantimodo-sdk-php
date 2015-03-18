<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
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
class OauthApi {

	function __construct($apiClient) {
	  $this->apiClient = $apiClient;
	}

  
	/**
	 * oauth2AuthorizeGet
   *
	 * Authorize
   * response_type, string: Response type (required)
   * * redirect_uri, string: Redirect uri (required)
   * * realm, string: Realm (required)
   * * client_id, string: Client id (required)
   * * scope, string: Scope (required)
   * * state, string: State (required)
   * 
	 * @return 
	 */

   public function oauth2AuthorizeGet($response_type, $redirect_uri, $realm, $client_id, $scope, $state) {

  		// parse inputs
  		$resourcePath = "/oauth2/authorize";
  		$resourcePath = str_replace("{format}", "json", $resourcePath);
  		$method = "GET";
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $headerParams['Accept'] = 'application/json';
      $headerParams['Content-Type'] = '';

      // query params
      if($response_type !== null) {
  		  $queryParams['response_type'] = $this->apiClient->toQueryValue($response_type);
  		}// query params
      if($redirect_uri !== null) {
  		  $queryParams['redirect_uri'] = $this->apiClient->toQueryValue($redirect_uri);
  		}// query params
      if($realm !== null) {
  		  $queryParams['realm'] = $this->apiClient->toQueryValue($realm);
  		}// query params
      if($client_id !== null) {
  		  $queryParams['client_id'] = $this->apiClient->toQueryValue($client_id);
  		}// query params
      if($scope !== null) {
  		  $queryParams['scope'] = $this->apiClient->toQueryValue($scope);
  		}// query params
      if($state !== null) {
  		  $queryParams['state'] = $this->apiClient->toQueryValue($state);
  		}
      
      
      
      

      $body = $body ?: $formParams;

      if (strpos($headerParams['Content-Type'], "application/x-www-form-urlencoded") > -1) {
        $body = http_build_query($body);
      }

  		// make the API Call
  		$response = $this->apiClient->callAPI($resourcePath, $method,
  		                                      $queryParams, $body,
  		                                      $headerParams);

      
  }
  

}