<?php
/**
 * Connector
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

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Connector Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Connector implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Connector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'display_name' => 'string',
        'image' => 'string',
        'get_it_url' => 'string',
        'connected' => 'string',
        'connect_instructions' => 'string',
        'last_update' => 'int',
        'total_measurements_in_last_update' => 'int',
        'no_data_yet' => 'bool'
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
        'id' => 'id',
        'name' => 'name',
        'display_name' => 'displayName',
        'image' => 'image',
        'get_it_url' => 'getItUrl',
        'connected' => 'connected',
        'connect_instructions' => 'connectInstructions',
        'last_update' => 'lastUpdate',
        'total_measurements_in_last_update' => 'totalMeasurementsInLastUpdate',
        'no_data_yet' => 'noDataYet'
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
        'id' => 'setId',
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'image' => 'setImage',
        'get_it_url' => 'setGetItUrl',
        'connected' => 'setConnected',
        'connect_instructions' => 'setConnectInstructions',
        'last_update' => 'setLastUpdate',
        'total_measurements_in_last_update' => 'setTotalMeasurementsInLastUpdate',
        'no_data_yet' => 'setNoDataYet'
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
        'id' => 'getId',
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'image' => 'getImage',
        'get_it_url' => 'getGetItUrl',
        'connected' => 'getConnected',
        'connect_instructions' => 'getConnectInstructions',
        'last_update' => 'getLastUpdate',
        'total_measurements_in_last_update' => 'getTotalMeasurementsInLastUpdate',
        'no_data_yet' => 'getNoDataYet'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['get_it_url'] = isset($data['get_it_url']) ? $data['get_it_url'] : null;
        $this->container['connected'] = isset($data['connected']) ? $data['connected'] : null;
        $this->container['connect_instructions'] = isset($data['connect_instructions']) ? $data['connect_instructions'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
        $this->container['total_measurements_in_last_update'] = isset($data['total_measurements_in_last_update']) ? $data['total_measurements_in_last_update'] : null;
        $this->container['no_data_yet'] = isset($data['no_data_yet']) ? $data['no_data_yet'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalid_properties[] = "'display_name' can't be null";
        }
        if ($this->container['image'] === null) {
            $invalid_properties[] = "'image' can't be null";
        }
        if ($this->container['get_it_url'] === null) {
            $invalid_properties[] = "'get_it_url' can't be null";
        }
        if ($this->container['connected'] === null) {
            $invalid_properties[] = "'connected' can't be null";
        }
        if ($this->container['connect_instructions'] === null) {
            $invalid_properties[] = "'connect_instructions' can't be null";
        }
        if ($this->container['last_update'] === null) {
            $invalid_properties[] = "'last_update' can't be null";
        }
        if ($this->container['total_measurements_in_last_update'] === null) {
            $invalid_properties[] = "'total_measurements_in_last_update' can't be null";
        }
        if ($this->container['no_data_yet'] === null) {
            $invalid_properties[] = "'no_data_yet' can't be null";
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['display_name'] === null) {
            return false;
        }
        if ($this->container['image'] === null) {
            return false;
        }
        if ($this->container['get_it_url'] === null) {
            return false;
        }
        if ($this->container['connected'] === null) {
            return false;
        }
        if ($this->container['connect_instructions'] === null) {
            return false;
        }
        if ($this->container['last_update'] === null) {
            return false;
        }
        if ($this->container['total_measurements_in_last_update'] === null) {
            return false;
        }
        if ($this->container['no_data_yet'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Connector ID number
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Connector lowercase system name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name Connector pretty display name
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image URL to the image of the connector logo
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets get_it_url
     * @return string
     */
    public function getGetItUrl()
    {
        return $this->container['get_it_url'];
    }

    /**
     * Sets get_it_url
     * @param string $get_it_url URL to a site where one can get this device or application
     * @return $this
     */
    public function setGetItUrl($get_it_url)
    {
        $this->container['get_it_url'] = $get_it_url;

        return $this;
    }

    /**
     * Gets connected
     * @return string
     */
    public function getConnected()
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     * @param string $connected True if the authenticated user has this connector enabled
     * @return $this
     */
    public function setConnected($connected)
    {
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets connect_instructions
     * @return string
     */
    public function getConnectInstructions()
    {
        return $this->container['connect_instructions'];
    }

    /**
     * Sets connect_instructions
     * @param string $connect_instructions URL and parameters used when connecting to a service
     * @return $this
     */
    public function setConnectInstructions($connect_instructions)
    {
        $this->container['connect_instructions'] = $connect_instructions;

        return $this;
    }

    /**
     * Gets last_update
     * @return int
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     * @param int $last_update Epoch timestamp of last sync
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

        return $this;
    }

    /**
     * Gets total_measurements_in_last_update
     * @return int
     */
    public function getTotalMeasurementsInLastUpdate()
    {
        return $this->container['total_measurements_in_last_update'];
    }

    /**
     * Sets total_measurements_in_last_update
     * @param int $total_measurements_in_last_update Number of measurements obtained during latest update
     * @return $this
     */
    public function setTotalMeasurementsInLastUpdate($total_measurements_in_last_update)
    {
        $this->container['total_measurements_in_last_update'] = $total_measurements_in_last_update;

        return $this;
    }

    /**
     * Gets no_data_yet
     * @return bool
     */
    public function getNoDataYet()
    {
        return $this->container['no_data_yet'];
    }

    /**
     * Sets no_data_yet
     * @param bool $no_data_yet True if user has no measurements for this connector
     * @return $this
     */
    public function setNoDataYet($no_data_yet)
    {
        $this->container['no_data_yet'] = $no_data_yet;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
