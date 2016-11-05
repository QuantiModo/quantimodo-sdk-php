<?php
/**
 * Connection
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
 * Connection Class Doc Comment
 *
 * @category    Class */
/**
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Connection implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Connection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'user_id' => 'int',
        'connector_id' => 'int',
        'connect_status' => 'string',
        'connect_error' => 'string',
        'update_requested_at' => '\DateTime',
        'update_status' => 'string',
        'update_error' => 'string',
        'last_successful_updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'user_id' => 'user_id',
        'connector_id' => 'connector_id',
        'connect_status' => 'connect_status',
        'connect_error' => 'connect_error',
        'update_requested_at' => 'update_requested_at',
        'update_status' => 'update_status',
        'update_error' => 'update_error',
        'last_successful_updated_at' => 'last_successful_updated_at',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'connector_id' => 'setConnectorId',
        'connect_status' => 'setConnectStatus',
        'connect_error' => 'setConnectError',
        'update_requested_at' => 'setUpdateRequestedAt',
        'update_status' => 'setUpdateStatus',
        'update_error' => 'setUpdateError',
        'last_successful_updated_at' => 'setLastSuccessfulUpdatedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'connector_id' => 'getConnectorId',
        'connect_status' => 'getConnectStatus',
        'connect_error' => 'getConnectError',
        'update_requested_at' => 'getUpdateRequestedAt',
        'update_status' => 'getUpdateStatus',
        'update_error' => 'getUpdateError',
        'last_successful_updated_at' => 'getLastSuccessfulUpdatedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['connector_id'] = isset($data['connector_id']) ? $data['connector_id'] : null;
        $this->container['connect_status'] = isset($data['connect_status']) ? $data['connect_status'] : null;
        $this->container['connect_error'] = isset($data['connect_error']) ? $data['connect_error'] : null;
        $this->container['update_requested_at'] = isset($data['update_requested_at']) ? $data['update_requested_at'] : null;
        $this->container['update_status'] = isset($data['update_status']) ? $data['update_status'] : null;
        $this->container['update_error'] = isset($data['update_error']) ? $data['update_error'] : null;
        $this->container['last_successful_updated_at'] = isset($data['last_successful_updated_at']) ? $data['last_successful_updated_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['connector_id'] === null) {
            $invalid_properties[] = "'connector_id' can't be null";
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
        if ($this->container['connector_id'] === null) {
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
     * @param int $id id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id ID of user that owns this correlation
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets connector_id
     * @return int
     */
    public function getConnectorId()
    {
        return $this->container['connector_id'];
    }

    /**
     * Sets connector_id
     * @param int $connector_id The id for the connector data source for which the connection is connected
     * @return $this
     */
    public function setConnectorId($connector_id)
    {
        $this->container['connector_id'] = $connector_id;

        return $this;
    }

    /**
     * Gets connect_status
     * @return string
     */
    public function getConnectStatus()
    {
        return $this->container['connect_status'];
    }

    /**
     * Sets connect_status
     * @param string $connect_status Indicates whether a connector is currently connected to a service for a user.
     * @return $this
     */
    public function setConnectStatus($connect_status)
    {
        $this->container['connect_status'] = $connect_status;

        return $this;
    }

    /**
     * Gets connect_error
     * @return string
     */
    public function getConnectError()
    {
        return $this->container['connect_error'];
    }

    /**
     * Sets connect_error
     * @param string $connect_error Error message if there is a problem with authorizing this connection.
     * @return $this
     */
    public function setConnectError($connect_error)
    {
        $this->container['connect_error'] = $connect_error;

        return $this;
    }

    /**
     * Gets update_requested_at
     * @return \DateTime
     */
    public function getUpdateRequestedAt()
    {
        return $this->container['update_requested_at'];
    }

    /**
     * Sets update_requested_at
     * @param \DateTime $update_requested_at Time at which an update was requested by a user.
     * @return $this
     */
    public function setUpdateRequestedAt($update_requested_at)
    {
        $this->container['update_requested_at'] = $update_requested_at;

        return $this;
    }

    /**
     * Gets update_status
     * @return string
     */
    public function getUpdateStatus()
    {
        return $this->container['update_status'];
    }

    /**
     * Sets update_status
     * @param string $update_status Indicates whether a connector is currently updated.
     * @return $this
     */
    public function setUpdateStatus($update_status)
    {
        $this->container['update_status'] = $update_status;

        return $this;
    }

    /**
     * Gets update_error
     * @return string
     */
    public function getUpdateError()
    {
        return $this->container['update_error'];
    }

    /**
     * Sets update_error
     * @param string $update_error Indicates if there was an error during the update.
     * @return $this
     */
    public function setUpdateError($update_error)
    {
        $this->container['update_error'] = $update_error;

        return $this;
    }

    /**
     * Gets last_successful_updated_at
     * @return \DateTime
     */
    public function getLastSuccessfulUpdatedAt()
    {
        return $this->container['last_successful_updated_at'];
    }

    /**
     * Sets last_successful_updated_at
     * @param \DateTime $last_successful_updated_at The time at which the connector was last successfully updated.
     * @return $this
     */
    public function setLastSuccessfulUpdatedAt($last_successful_updated_at)
    {
        $this->container['last_successful_updated_at'] = $last_successful_updated_at;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at When the record was first created. Use ISO 8601 datetime format
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at When the record in the database was last updated. Use ISO 8601 datetime format
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
