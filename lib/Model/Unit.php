<?php
/**
 * Unit
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
 * Unit Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Unit implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'abbreviated_name' => 'string',
        'category' => 'string',
        'minimum_value' => 'double',
        'maximum_value' => 'double',
        'conversion_steps' => '\Swagger\Client\Model\ConversionStep[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'abbreviated_name' => 'abbreviatedName',
        'category' => 'category',
        'minimum_value' => 'minimumValue',
        'maximum_value' => 'maximumValue',
        'conversion_steps' => 'conversionSteps'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'abbreviated_name' => 'setAbbreviatedName',
        'category' => 'setCategory',
        'minimum_value' => 'setMinimumValue',
        'maximum_value' => 'setMaximumValue',
        'conversion_steps' => 'setConversionSteps'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'abbreviated_name' => 'getAbbreviatedName',
        'category' => 'getCategory',
        'minimum_value' => 'getMinimumValue',
        'maximum_value' => 'getMaximumValue',
        'conversion_steps' => 'getConversionSteps'
    );
  
    
    /**
      * $name Unit name
      * @var string
      */
    protected $name;
    
    /**
      * $abbreviated_name Unit abbreviation
      * @var string
      */
    protected $abbreviated_name;
    
    /**
      * $category Unit category
      * @var string
      */
    protected $category;
    
    /**
      * $minimum_value The smallest acceptable value for measurements using this unit
      * @var double
      */
    protected $minimum_value;
    
    /**
      * $maximum_value The largest acceptable value for measurements using this unit
      * @var double
      */
    protected $maximum_value;
    
    /**
      * $conversion_steps Conversion steps list
      * @var \Swagger\Client\Model\ConversionStep[]
      */
    protected $conversion_steps;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->name = $data["name"];
            $this->abbreviated_name = $data["abbreviated_name"];
            $this->category = $data["category"];
            $this->minimum_value = $data["minimum_value"];
            $this->maximum_value = $data["maximum_value"];
            $this->conversion_steps = $data["conversion_steps"];
        }
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Unit name
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets abbreviated_name
     * @return string
     */
    public function getAbbreviatedName()
    {
        return $this->abbreviated_name;
    }
  
    /**
     * Sets abbreviated_name
     * @param string $abbreviated_name Unit abbreviation
     * @return $this
     */
    public function setAbbreviatedName($abbreviated_name)
    {
        
        $this->abbreviated_name = $abbreviated_name;
        return $this;
    }
    
    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }
  
    /**
     * Sets category
     * @param string $category Unit category
     * @return $this
     */
    public function setCategory($category)
    {
        $allowed_values = array("Distance", "Duration", "Energy", "Frequency", "Miscellany", "Pressure", "Proportion", "Rating", "Temperature", "Volume", "Weight");
        if (!in_array($category, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'category', must be one of 'Distance', 'Duration', 'Energy', 'Frequency', 'Miscellany', 'Pressure', 'Proportion', 'Rating', 'Temperature', 'Volume', 'Weight'");
        }
        $this->category = $category;
        return $this;
    }
    
    /**
     * Gets minimum_value
     * @return double
     */
    public function getMinimumValue()
    {
        return $this->minimum_value;
    }
  
    /**
     * Sets minimum_value
     * @param double $minimum_value The smallest acceptable value for measurements using this unit
     * @return $this
     */
    public function setMinimumValue($minimum_value)
    {
        
        $this->minimum_value = $minimum_value;
        return $this;
    }
    
    /**
     * Gets maximum_value
     * @return double
     */
    public function getMaximumValue()
    {
        return $this->maximum_value;
    }
  
    /**
     * Sets maximum_value
     * @param double $maximum_value The largest acceptable value for measurements using this unit
     * @return $this
     */
    public function setMaximumValue($maximum_value)
    {
        
        $this->maximum_value = $maximum_value;
        return $this;
    }
    
    /**
     * Gets conversion_steps
     * @return \Swagger\Client\Model\ConversionStep[]
     */
    public function getConversionSteps()
    {
        return $this->conversion_steps;
    }
  
    /**
     * Sets conversion_steps
     * @param \Swagger\Client\Model\ConversionStep[] $conversion_steps Conversion steps list
     * @return $this
     */
    public function setConversionSteps($conversion_steps)
    {
        
        $this->conversion_steps = $conversion_steps;
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
