<?php
/**
 * Measurement
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * QuantiModo
 *
 * Welcome to QuantiModo API! QuantiModo makes it easy to retrieve normalized user data from a wide array of devices and applications. [Learn about QuantiModo](https://quantimo.do) or contact us at <api@quantimo.do>.         Before you get started, you will need to: * Sign in/Sign up, and add some data at [https://app.quantimo.do/api/v2/account/connectors](https://app.quantimo.do/api/v2/account/connectors) to try out the API for yourself * Create an app to get your client id and secret at [https://app.quantimo.do/api/v2/apps](https://app.quantimo.do/api/v2/apps) * As long as you're signed in, it will use your browser's cookie for authentication.  However, client applications must use OAuth2 tokens to access the API.     ## Application Endpoints These endpoints give you access to all authorized users' data for that application. ### Getting Application Token Make a `POST` request to `/api/v2/oauth/access_token`         * `grant_type` Must be `client_credentials`.         * `clientId` Your application's clientId.         * `client_secret` Your application's client_secret.         * `redirect_uri` Your application's redirect url.                ## Example Queries ### Query Options The standard query options for QuantiModo API are as described in the table below. These are the available query options in QuantiModo API: <table>            <thead>                <tr>                    <th>Parameter</th>                    <th>Description</th>                </tr>            </thead>            <tbody>                <tr>                    <td>limit</td>                    <td>The LIMIT is used to limit the number of results returned.  So if you have 1000 results, but only want to the first 10, you would set this to 10 and offset to 0. The maximum limit is 200 records.</td>                </tr>                <tr>                    <td>offset</td>                    <td>Suppose you wanted to show results 11-20. You'd set the    offset to 10 and the limit to 10.</td>                </tr>                <tr>                    <td>sort</td>                    <td>Sort by given field. If the field is prefixed with '-', it    will sort in descending order.</td>                </tr>            </tbody>        </table>         ### Pagination Conventions Since the maximum limit is 200 records, to get more than that you'll have to make multiple API calls and page through the results. To retrieve all the data, you can iterate through data by using the `limit` and `offset` query parameters.For example, if you want to retrieve data from 61-80 then you can use a query with the following parameters,         `/v2/variables?limit=20&offset=60`         Generally, you'll be retrieving new or updated user data. To avoid unnecessary API calls, you'll want to store your last refresh time locally.  Initially, it should be set to 0. Then whenever you make a request to get new data, you should limit the returned results to those updated since your last refresh by appending append         `?lastUpdated=(ge)&quot2013-01-D01T01:01:01&quot`         to your request.         Also for better pagination, you can get link to the records of first, last, next and previous page from response headers: * `Total-Count` - Total number of results for given query * `Link-First` - Link to get first page records * `Link-Last` - Link to get last page records * `Link-Prev` - Link to get previous records set * `Link-Next` - Link to get next records set         Remember, response header will be only sent when the record set is available. e.g. You will not get a ```Link-Last``` & ```Link-Next``` when you query for the last page.         ### Filter operators support API supports the following operators with filter parameters: <br> **Comparison operators**         Comparison operators allow you to limit results to those greater than, less than, or equal to a specified value for a specified attribute. These operators can be used with strings, numbers, and dates. The following comparison operators are available: * `gt` for `greater than` comparison * `ge` for `greater than or equal` comparison * `lt` for `less than` comparison * `le` for `less than or equal` comparison         They are included in queries using the following format:         `(<operator>)<value>`         For example, in order to filter value which is greater than 21, the following query parameter should be used:         `?value=(gt)21` <br><br> **Equals/In Operators**         It also allows filtering by the exact value of an attribute or by a set of values, depending on the type of value passed as a query parameter. If the value contains commas, the parameter is split on commas and used as array input for `IN` filtering, otherwise the exact match is applied. In order to only show records which have the value 42, the following query should be used:         `?value=42`         In order to filter records which have value 42 or 43, the following query should be used:         `?value=42,43` <br><br> **Like operators**         Like operators allow filtering using `LIKE` query. This operator is triggered if exact match operator is used, but value contains `%` sign as the first or last character. In order to filter records which category that start with `Food`, the following query should be used:         `?category=Food%` <br><br> **Negation operator**         It is possible to get negated results of a query by prefixed the operator with `!`. Some examples:         `//filter records except those with value are not 42 or 43`<br> `?value=!42,43`         `//filter records with value not greater than 21`<br> `?value=!(ge)21` <br><br> **Multiple constraints for single attribute**         It is possible to apply multiple constraints by providing an array of query filters:         Filter all records which value is greater than 20.2 and less than 20.3<br> `?value[]=(gt)20.2&value[]=(lt)20.3`         Filter all records which value is greater than 20.2 and less than 20.3 but not 20.2778<br> `?value[]=(gt)20.2&value[]=(lt)20.3&value[]=!20.2778`<br><br>
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\QuantiModo\Client\Model;

use \ArrayAccess;

/**
 * Measurement Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Measurement implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Measurement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'variable_name' => 'string',
        'source_name' => 'string',
        'start_time_string' => 'string',
        'start_time_epoch' => 'int',
        'human_time' => '\QuantiModo\Client\QuantiModo\Client\Model\HumanTime',
        'value' => 'double',
        'original_value' => 'int',
        'original_abbreviated_unit_name' => 'string',
        'abbreviated_unit_name' => 'string',
        'note' => 'string'
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
        'variable_name' => 'variableName',
        'source_name' => 'sourceName',
        'start_time_string' => 'startTimeString',
        'start_time_epoch' => 'startTimeEpoch',
        'human_time' => 'humanTime',
        'value' => 'value',
        'original_value' => 'originalValue',
        'original_abbreviated_unit_name' => 'originalAbbreviatedUnitName',
        'abbreviated_unit_name' => 'abbreviatedUnitName',
        'note' => 'note'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'variable_name' => 'setVariableName',
        'source_name' => 'setSourceName',
        'start_time_string' => 'setStartTimeString',
        'start_time_epoch' => 'setStartTimeEpoch',
        'human_time' => 'setHumanTime',
        'value' => 'setValue',
        'original_value' => 'setOriginalValue',
        'original_abbreviated_unit_name' => 'setOriginalAbbreviatedUnitName',
        'abbreviated_unit_name' => 'setAbbreviatedUnitName',
        'note' => 'setNote'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'variable_name' => 'getVariableName',
        'source_name' => 'getSourceName',
        'start_time_string' => 'getStartTimeString',
        'start_time_epoch' => 'getStartTimeEpoch',
        'human_time' => 'getHumanTime',
        'value' => 'getValue',
        'original_value' => 'getOriginalValue',
        'original_abbreviated_unit_name' => 'getOriginalAbbreviatedUnitName',
        'abbreviated_unit_name' => 'getAbbreviatedUnitName',
        'note' => 'getNote'
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
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['source_name'] = isset($data['source_name']) ? $data['source_name'] : null;
        $this->container['start_time_string'] = isset($data['start_time_string']) ? $data['start_time_string'] : null;
        $this->container['start_time_epoch'] = isset($data['start_time_epoch']) ? $data['start_time_epoch'] : null;
        $this->container['human_time'] = isset($data['human_time']) ? $data['human_time'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['original_value'] = isset($data['original_value']) ? $data['original_value'] : null;
        $this->container['original_abbreviated_unit_name'] = isset($data['original_abbreviated_unit_name']) ? $data['original_abbreviated_unit_name'] : null;
        $this->container['abbreviated_unit_name'] = isset($data['abbreviated_unit_name']) ? $data['abbreviated_unit_name'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['variable_name'] === null) {
            $invalid_properties[] = "'variable_name' can't be null";
        }
        if ($this->container['source_name'] === null) {
            $invalid_properties[] = "'source_name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ($this->container['abbreviated_unit_name'] === null) {
            $invalid_properties[] = "'abbreviated_unit_name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['variable_name'] === null) {
            return false;
        }
        if ($this->container['source_name'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if ($this->container['abbreviated_unit_name'] === null) {
            return false;
        }
        return true;
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
     * @param string $variable_name Name of the variable for which we are creating the measurement records
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

        return $this;
    }

    /**
     * Gets source_name
     * @return string
     */
    public function getSourceName()
    {
        return $this->container['source_name'];
    }

    /**
     * Sets source_name
     * @param string $source_name Application or device used to record the measurement values
     * @return $this
     */
    public function setSourceName($source_name)
    {
        $this->container['source_name'] = $source_name;

        return $this;
    }

    /**
     * Gets start_time_string
     * @return string
     */
    public function getStartTimeString()
    {
        return $this->container['start_time_string'];
    }

    /**
     * Sets start_time_string
     * @param string $start_time_string Start Time for the measurement event in UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"
     * @return $this
     */
    public function setStartTimeString($start_time_string)
    {
        $this->container['start_time_string'] = $start_time_string;

        return $this;
    }

    /**
     * Gets start_time_epoch
     * @return int
     */
    public function getStartTimeEpoch()
    {
        return $this->container['start_time_epoch'];
    }

    /**
     * Sets start_time_epoch
     * @param int $start_time_epoch Seconds between the start of the event measured and 1970 (Unix timestamp)
     * @return $this
     */
    public function setStartTimeEpoch($start_time_epoch)
    {
        $this->container['start_time_epoch'] = $start_time_epoch;

        return $this;
    }

    /**
     * Gets human_time
     * @return \QuantiModo\Client\QuantiModo\Client\Model\HumanTime
     */
    public function getHumanTime()
    {
        return $this->container['human_time'];
    }

    /**
     * Sets human_time
     * @param \QuantiModo\Client\QuantiModo\Client\Model\HumanTime $human_time
     * @return $this
     */
    public function setHumanTime($human_time)
    {
        $this->container['human_time'] = $human_time;

        return $this;
    }

    /**
     * Gets value
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param double $value Converted measurement value in requested unit
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets original_value
     * @return int
     */
    public function getOriginalValue()
    {
        return $this->container['original_value'];
    }

    /**
     * Sets original_value
     * @param int $original_value Original value as originally submitted
     * @return $this
     */
    public function setOriginalValue($original_value)
    {
        $this->container['original_value'] = $original_value;

        return $this;
    }

    /**
     * Gets original_abbreviated_unit_name
     * @return string
     */
    public function getOriginalAbbreviatedUnitName()
    {
        return $this->container['original_abbreviated_unit_name'];
    }

    /**
     * Sets original_abbreviated_unit_name
     * @param string $original_abbreviated_unit_name Original Unit of measurement as originally submitted
     * @return $this
     */
    public function setOriginalAbbreviatedUnitName($original_abbreviated_unit_name)
    {
        $this->container['original_abbreviated_unit_name'] = $original_abbreviated_unit_name;

        return $this;
    }

    /**
     * Gets abbreviated_unit_name
     * @return string
     */
    public function getAbbreviatedUnitName()
    {
        return $this->container['abbreviated_unit_name'];
    }

    /**
     * Sets abbreviated_unit_name
     * @param string $abbreviated_unit_name Abbreviated name for the unit of measurement
     * @return $this
     */
    public function setAbbreviatedUnitName($abbreviated_unit_name)
    {
        $this->container['abbreviated_unit_name'] = $abbreviated_unit_name;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note Note of measurement
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


