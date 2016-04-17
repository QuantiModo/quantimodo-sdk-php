<?php
/**
 * HumanTime
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * HumanTime Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class HumanTime implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'date' => 'string',
        'timezone_type' => 'int',
        'timezone' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'date' => 'date',
        'timezone_type' => 'timezone_type',
        'timezone' => 'timezone'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'date' => 'setDate',
        'timezone_type' => 'setTimezoneType',
        'timezone' => 'setTimezone'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'date' => 'getDate',
        'timezone_type' => 'getTimezoneType',
        'timezone' => 'getTimezone'
    );
  
    
    /**
      * $date date time
      * @var string
      */
    protected $date;
    
    /**
      * $timezone_type 
      * @var int
      */
    protected $timezone_type;
    
    /**
      * $timezone timezone of date time
      * @var string
      */
    protected $timezone;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->date = $data["date"];
            $this->timezone_type = $data["timezone_type"];
            $this->timezone = $data["timezone"];
        }
    }
    
    /**
     * Gets date
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
  
    /**
     * Sets date
     * @param string $date date time
     * @return $this
     */
    public function setDate($date)
    {
        
        $this->date = $date;
        return $this;
    }
    
    /**
     * Gets timezone_type
     * @return int
     */
    public function getTimezoneType()
    {
        return $this->timezone_type;
    }
  
    /**
     * Sets timezone_type
     * @param int $timezone_type 
     * @return $this
     */
    public function setTimezoneType($timezone_type)
    {
        
        $this->timezone_type = $timezone_type;
        return $this;
    }
    
    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
  
    /**
     * Sets timezone
     * @param string $timezone timezone of date time
     * @return $this
     */
    public function setTimezone($timezone)
    {
        
        $this->timezone = $timezone;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}