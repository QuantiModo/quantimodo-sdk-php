<?php
/**
 * Permission
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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

namespace QuantiModo\Client\Model;

use \ArrayAccess;

/**
 * Permission Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Permission implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Permission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'target' => 'int',
        'variable_name' => 'string',
        'min_timestamp' => 'int',
        'max_timestamp' => 'int',
        'min_time_of_day' => 'int',
        'max_time_of_day' => 'int',
        'week' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'target' => 'target',
        'variable_name' => 'variableName',
        'min_timestamp' => 'minTimestamp',
        'max_timestamp' => 'maxTimestamp',
        'min_time_of_day' => 'minTimeOfDay',
        'max_time_of_day' => 'maxTimeOfDay',
        'week' => 'week'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'target' => 'setTarget',
        'variable_name' => 'setVariableName',
        'min_timestamp' => 'setMinTimestamp',
        'max_timestamp' => 'setMaxTimestamp',
        'min_time_of_day' => 'setMinTimeOfDay',
        'max_time_of_day' => 'setMaxTimeOfDay',
        'week' => 'setWeek'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'target' => 'getTarget',
        'variable_name' => 'getVariableName',
        'min_timestamp' => 'getMinTimestamp',
        'max_timestamp' => 'getMaxTimestamp',
        'min_time_of_day' => 'getMinTimeOfDay',
        'max_time_of_day' => 'getMaxTimeOfDay',
        'week' => 'getWeek'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['min_timestamp'] = isset($data['min_timestamp']) ? $data['min_timestamp'] : null;
        $this->container['max_timestamp'] = isset($data['max_timestamp']) ? $data['max_timestamp'] : null;
        $this->container['min_time_of_day'] = isset($data['min_time_of_day']) ? $data['min_time_of_day'] : null;
        $this->container['max_time_of_day'] = isset($data['max_time_of_day']) ? $data['max_time_of_day'] : null;
        $this->container['week'] = isset($data['week']) ? $data['week'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['target'] === null) {
            $invalid_properties[] = "'target' can't be null";
        }
        if ($this->container['variable_name'] === null) {
            $invalid_properties[] = "'variable_name' can't be null";
        }
        if ($this->container['min_timestamp'] === null) {
            $invalid_properties[] = "'min_timestamp' can't be null";
        }
        if ($this->container['max_timestamp'] === null) {
            $invalid_properties[] = "'max_timestamp' can't be null";
        }
        if ($this->container['min_time_of_day'] === null) {
            $invalid_properties[] = "'min_time_of_day' can't be null";
        }
        if ($this->container['max_time_of_day'] === null) {
            $invalid_properties[] = "'max_time_of_day' can't be null";
        }
        if ($this->container['week'] === null) {
            $invalid_properties[] = "'week' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['target'] === null) {
            return false;
        }
        if ($this->container['variable_name'] === null) {
            return false;
        }
        if ($this->container['min_timestamp'] === null) {
            return false;
        }
        if ($this->container['max_timestamp'] === null) {
            return false;
        }
        if ($this->container['min_time_of_day'] === null) {
            return false;
        }
        if ($this->container['max_time_of_day'] === null) {
            return false;
        }
        if ($this->container['week'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets target
     * @return int
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param int $target Grant permission to target user or public so they may access measurements within the given parameters. TODO: Rename target to something more intuitive.
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets variable_name
     * @return string
     */
    public function getVariableName()
    {
        return $this->container['variable_name'];
    }

    /**
     * Sets variable_name
     * @param string $variable_name ORIGINAL Variable name
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

        return $this;
    }

    /**
     * Gets min_timestamp
     * @return int
     */
    public function getMinTimestamp()
    {
        return $this->container['min_timestamp'];
    }

    /**
     * Sets min_timestamp
     * @param int $min_timestamp Earliest time when measurements will be accessible in epoch seconds
     * @return $this
     */
    public function setMinTimestamp($min_timestamp)
    {
        $this->container['min_timestamp'] = $min_timestamp;

        return $this;
    }

    /**
     * Gets max_timestamp
     * @return int
     */
    public function getMaxTimestamp()
    {
        return $this->container['max_timestamp'];
    }

    /**
     * Sets max_timestamp
     * @param int $max_timestamp Latest time when measurements will be accessible in epoch seconds
     * @return $this
     */
    public function setMaxTimestamp($max_timestamp)
    {
        $this->container['max_timestamp'] = $max_timestamp;

        return $this;
    }

    /**
     * Gets min_time_of_day
     * @return int
     */
    public function getMinTimeOfDay()
    {
        return $this->container['min_time_of_day'];
    }

    /**
     * Sets min_time_of_day
     * @param int $min_time_of_day Earliest time of day when measurements will be accessible in epoch seconds
     * @return $this
     */
    public function setMinTimeOfDay($min_time_of_day)
    {
        $this->container['min_time_of_day'] = $min_time_of_day;

        return $this;
    }

    /**
     * Gets max_time_of_day
     * @return int
     */
    public function getMaxTimeOfDay()
    {
        return $this->container['max_time_of_day'];
    }

    /**
     * Sets max_time_of_day
     * @param int $max_time_of_day Latest time of day when measurements will be accessible in epoch seconds
     * @return $this
     */
    public function setMaxTimeOfDay($max_time_of_day)
    {
        $this->container['max_time_of_day'] = $max_time_of_day;

        return $this;
    }

    /**
     * Gets week
     * @return string
     */
    public function getWeek()
    {
        return $this->container['week'];
    }

    /**
     * Sets week
     * @param string $week Maybe specifies if only weekday measurements should be accessible
     * @return $this
     */
    public function setWeek($week)
    {
        $this->container['week'] = $week;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
