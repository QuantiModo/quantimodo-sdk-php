<?php
/**
 * Variable
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
 * OpenAPI spec version: 4.6.5
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
 * Variable Class Doc Comment
 *
 * @category    Class */
/**
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Variable implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Variable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'original_name' => 'string',
        'category' => 'string',
        'abbreviated_unit_name' => 'string',
        'abbreviated_unit_id' => 'int',
        'sources' => 'string',
        'minimum_allowed_value' => 'double',
        'maximum_allowed_value' => 'double',
        'combination_operation' => 'string',
        'filling_value' => 'double',
        'join_with' => 'string',
        'joined_variables' => '\QuantiModo\Client\Model\Variable[]',
        'parent' => 'int',
        'sub_variables' => '\QuantiModo\Client\Model\Variable[]',
        'onset_delay' => 'int',
        'duration_of_action' => 'int',
        'earliest_measurement_time' => 'int',
        'latest_measurement_time' => 'int',
        'updated' => 'int',
        'cause_only' => 'int',
        'number_of_correlations' => 'int',
        'outcome' => 'int',
        'raw_measurements_at_last_analysis' => 'int',
        'number_of_raw_measurements' => 'int',
        'last_unit' => 'string',
        'last_value' => 'int',
        'most_common_value' => 'int',
        'most_common_unit' => 'string',
        'last_source' => 'int',
        'image_url' => 'string',
        'ion_icon' => 'string'
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
        'name' => 'name',
        'original_name' => 'originalName',
        'category' => 'category',
        'abbreviated_unit_name' => 'abbreviatedUnitName',
        'abbreviated_unit_id' => 'abbreviatedUnitId',
        'sources' => 'sources',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'combination_operation' => 'combinationOperation',
        'filling_value' => 'fillingValue',
        'join_with' => 'joinWith',
        'joined_variables' => 'joinedVariables',
        'parent' => 'parent',
        'sub_variables' => 'subVariables',
        'onset_delay' => 'onsetDelay',
        'duration_of_action' => 'durationOfAction',
        'earliest_measurement_time' => 'earliestMeasurementTime',
        'latest_measurement_time' => 'latestMeasurementTime',
        'updated' => 'updated',
        'cause_only' => 'causeOnly',
        'number_of_correlations' => 'numberOfCorrelations',
        'outcome' => 'outcome',
        'raw_measurements_at_last_analysis' => 'rawMeasurementsAtLastAnalysis',
        'number_of_raw_measurements' => 'numberOfRawMeasurements',
        'last_unit' => 'lastUnit',
        'last_value' => 'lastValue',
        'most_common_value' => 'mostCommonValue',
        'most_common_unit' => 'mostCommonUnit',
        'last_source' => 'lastSource',
        'image_url' => 'imageUrl',
        'ion_icon' => 'ionIcon'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'original_name' => 'setOriginalName',
        'category' => 'setCategory',
        'abbreviated_unit_name' => 'setAbbreviatedUnitName',
        'abbreviated_unit_id' => 'setAbbreviatedUnitId',
        'sources' => 'setSources',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'combination_operation' => 'setCombinationOperation',
        'filling_value' => 'setFillingValue',
        'join_with' => 'setJoinWith',
        'joined_variables' => 'setJoinedVariables',
        'parent' => 'setParent',
        'sub_variables' => 'setSubVariables',
        'onset_delay' => 'setOnsetDelay',
        'duration_of_action' => 'setDurationOfAction',
        'earliest_measurement_time' => 'setEarliestMeasurementTime',
        'latest_measurement_time' => 'setLatestMeasurementTime',
        'updated' => 'setUpdated',
        'cause_only' => 'setCauseOnly',
        'number_of_correlations' => 'setNumberOfCorrelations',
        'outcome' => 'setOutcome',
        'raw_measurements_at_last_analysis' => 'setRawMeasurementsAtLastAnalysis',
        'number_of_raw_measurements' => 'setNumberOfRawMeasurements',
        'last_unit' => 'setLastUnit',
        'last_value' => 'setLastValue',
        'most_common_value' => 'setMostCommonValue',
        'most_common_unit' => 'setMostCommonUnit',
        'last_source' => 'setLastSource',
        'image_url' => 'setImageUrl',
        'ion_icon' => 'setIonIcon'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'original_name' => 'getOriginalName',
        'category' => 'getCategory',
        'abbreviated_unit_name' => 'getAbbreviatedUnitName',
        'abbreviated_unit_id' => 'getAbbreviatedUnitId',
        'sources' => 'getSources',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'combination_operation' => 'getCombinationOperation',
        'filling_value' => 'getFillingValue',
        'join_with' => 'getJoinWith',
        'joined_variables' => 'getJoinedVariables',
        'parent' => 'getParent',
        'sub_variables' => 'getSubVariables',
        'onset_delay' => 'getOnsetDelay',
        'duration_of_action' => 'getDurationOfAction',
        'earliest_measurement_time' => 'getEarliestMeasurementTime',
        'latest_measurement_time' => 'getLatestMeasurementTime',
        'updated' => 'getUpdated',
        'cause_only' => 'getCauseOnly',
        'number_of_correlations' => 'getNumberOfCorrelations',
        'outcome' => 'getOutcome',
        'raw_measurements_at_last_analysis' => 'getRawMeasurementsAtLastAnalysis',
        'number_of_raw_measurements' => 'getNumberOfRawMeasurements',
        'last_unit' => 'getLastUnit',
        'last_value' => 'getLastValue',
        'most_common_value' => 'getMostCommonValue',
        'most_common_unit' => 'getMostCommonUnit',
        'last_source' => 'getLastSource',
        'image_url' => 'getImageUrl',
        'ion_icon' => 'getIonIcon'
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

    const COMBINATION_OPERATION_MEAN = 'MEAN';
    const COMBINATION_OPERATION_SUM = 'SUM';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCombinationOperationAllowableValues()
    {
        return [
            self::COMBINATION_OPERATION_MEAN,
            self::COMBINATION_OPERATION_SUM,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['original_name'] = isset($data['original_name']) ? $data['original_name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['abbreviated_unit_name'] = isset($data['abbreviated_unit_name']) ? $data['abbreviated_unit_name'] : null;
        $this->container['abbreviated_unit_id'] = isset($data['abbreviated_unit_id']) ? $data['abbreviated_unit_id'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['combination_operation'] = isset($data['combination_operation']) ? $data['combination_operation'] : null;
        $this->container['filling_value'] = isset($data['filling_value']) ? $data['filling_value'] : null;
        $this->container['join_with'] = isset($data['join_with']) ? $data['join_with'] : null;
        $this->container['joined_variables'] = isset($data['joined_variables']) ? $data['joined_variables'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['sub_variables'] = isset($data['sub_variables']) ? $data['sub_variables'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['earliest_measurement_time'] = isset($data['earliest_measurement_time']) ? $data['earliest_measurement_time'] : null;
        $this->container['latest_measurement_time'] = isset($data['latest_measurement_time']) ? $data['latest_measurement_time'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['cause_only'] = isset($data['cause_only']) ? $data['cause_only'] : null;
        $this->container['number_of_correlations'] = isset($data['number_of_correlations']) ? $data['number_of_correlations'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['raw_measurements_at_last_analysis'] = isset($data['raw_measurements_at_last_analysis']) ? $data['raw_measurements_at_last_analysis'] : null;
        $this->container['number_of_raw_measurements'] = isset($data['number_of_raw_measurements']) ? $data['number_of_raw_measurements'] : null;
        $this->container['last_unit'] = isset($data['last_unit']) ? $data['last_unit'] : null;
        $this->container['last_value'] = isset($data['last_value']) ? $data['last_value'] : null;
        $this->container['most_common_value'] = isset($data['most_common_value']) ? $data['most_common_value'] : null;
        $this->container['most_common_unit'] = isset($data['most_common_unit']) ? $data['most_common_unit'] : null;
        $this->container['last_source'] = isset($data['last_source']) ? $data['last_source'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['ion_icon'] = isset($data['ion_icon']) ? $data['ion_icon'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['original_name'] === null) {
            $invalid_properties[] = "'original_name' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['abbreviated_unit_name'] === null) {
            $invalid_properties[] = "'abbreviated_unit_name' can't be null";
        }
        if ($this->container['abbreviated_unit_id'] === null) {
            $invalid_properties[] = "'abbreviated_unit_id' can't be null";
        }
        if ($this->container['sources'] === null) {
            $invalid_properties[] = "'sources' can't be null";
        }
        if ($this->container['minimum_allowed_value'] === null) {
            $invalid_properties[] = "'minimum_allowed_value' can't be null";
        }
        if ($this->container['maximum_allowed_value'] === null) {
            $invalid_properties[] = "'maximum_allowed_value' can't be null";
        }
        if ($this->container['combination_operation'] === null) {
            $invalid_properties[] = "'combination_operation' can't be null";
        }
        $allowed_values = ["MEAN", "SUM"];
        if (!in_array($this->container['combination_operation'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'combination_operation', must be one of #{allowed_values}.";
        }

        if ($this->container['filling_value'] === null) {
            $invalid_properties[] = "'filling_value' can't be null";
        }
        if ($this->container['join_with'] === null) {
            $invalid_properties[] = "'join_with' can't be null";
        }
        if ($this->container['joined_variables'] === null) {
            $invalid_properties[] = "'joined_variables' can't be null";
        }
        if ($this->container['parent'] === null) {
            $invalid_properties[] = "'parent' can't be null";
        }
        if ($this->container['sub_variables'] === null) {
            $invalid_properties[] = "'sub_variables' can't be null";
        }
        if ($this->container['onset_delay'] === null) {
            $invalid_properties[] = "'onset_delay' can't be null";
        }
        if ($this->container['duration_of_action'] === null) {
            $invalid_properties[] = "'duration_of_action' can't be null";
        }
        if ($this->container['earliest_measurement_time'] === null) {
            $invalid_properties[] = "'earliest_measurement_time' can't be null";
        }
        if ($this->container['latest_measurement_time'] === null) {
            $invalid_properties[] = "'latest_measurement_time' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalid_properties[] = "'updated' can't be null";
        }
        if ($this->container['cause_only'] === null) {
            $invalid_properties[] = "'cause_only' can't be null";
        }
        if ($this->container['number_of_correlations'] === null) {
            $invalid_properties[] = "'number_of_correlations' can't be null";
        }
        if ($this->container['outcome'] === null) {
            $invalid_properties[] = "'outcome' can't be null";
        }
        if ($this->container['raw_measurements_at_last_analysis'] === null) {
            $invalid_properties[] = "'raw_measurements_at_last_analysis' can't be null";
        }
        if ($this->container['number_of_raw_measurements'] === null) {
            $invalid_properties[] = "'number_of_raw_measurements' can't be null";
        }
        if ($this->container['last_unit'] === null) {
            $invalid_properties[] = "'last_unit' can't be null";
        }
        if ($this->container['last_value'] === null) {
            $invalid_properties[] = "'last_value' can't be null";
        }
        if ($this->container['most_common_value'] === null) {
            $invalid_properties[] = "'most_common_value' can't be null";
        }
        if ($this->container['most_common_unit'] === null) {
            $invalid_properties[] = "'most_common_unit' can't be null";
        }
        if ($this->container['last_source'] === null) {
            $invalid_properties[] = "'last_source' can't be null";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['original_name'] === null) {
            return false;
        }
        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['abbreviated_unit_name'] === null) {
            return false;
        }
        if ($this->container['abbreviated_unit_id'] === null) {
            return false;
        }
        if ($this->container['sources'] === null) {
            return false;
        }
        if ($this->container['minimum_allowed_value'] === null) {
            return false;
        }
        if ($this->container['maximum_allowed_value'] === null) {
            return false;
        }
        if ($this->container['combination_operation'] === null) {
            return false;
        }
        $allowed_values = ["MEAN", "SUM"];
        if (!in_array($this->container['combination_operation'], $allowed_values)) {
            return false;
        }
        if ($this->container['filling_value'] === null) {
            return false;
        }
        if ($this->container['join_with'] === null) {
            return false;
        }
        if ($this->container['joined_variables'] === null) {
            return false;
        }
        if ($this->container['parent'] === null) {
            return false;
        }
        if ($this->container['sub_variables'] === null) {
            return false;
        }
        if ($this->container['onset_delay'] === null) {
            return false;
        }
        if ($this->container['duration_of_action'] === null) {
            return false;
        }
        if ($this->container['earliest_measurement_time'] === null) {
            return false;
        }
        if ($this->container['latest_measurement_time'] === null) {
            return false;
        }
        if ($this->container['updated'] === null) {
            return false;
        }
        if ($this->container['cause_only'] === null) {
            return false;
        }
        if ($this->container['number_of_correlations'] === null) {
            return false;
        }
        if ($this->container['outcome'] === null) {
            return false;
        }
        if ($this->container['raw_measurements_at_last_analysis'] === null) {
            return false;
        }
        if ($this->container['number_of_raw_measurements'] === null) {
            return false;
        }
        if ($this->container['last_unit'] === null) {
            return false;
        }
        if ($this->container['last_value'] === null) {
            return false;
        }
        if ($this->container['most_common_value'] === null) {
            return false;
        }
        if ($this->container['most_common_unit'] === null) {
            return false;
        }
        if ($this->container['last_source'] === null) {
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
     * @param int $id Variable ID
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
     * @param string $name User-defined variable display name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets original_name
     * @return string
     */
    public function getOriginalName()
    {
        return $this->container['original_name'];
    }

    /**
     * Sets original_name
     * @param string $original_name Name used when the variable was originally created in the `variables` table.
     * @return $this
     */
    public function setOriginalName($original_name)
    {
        $this->container['original_name'] = $original_name;

        return $this;
    }

    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category Variable category like Mood, Sleep, Physical Activity, Treatment, Symptom, etc.
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param string $abbreviated_unit_name Abbreviated name of the default unit for the variable
     * @return $this
     */
    public function setAbbreviatedUnitName($abbreviated_unit_name)
    {
        $this->container['abbreviated_unit_name'] = $abbreviated_unit_name;

        return $this;
    }

    /**
     * Gets abbreviated_unit_id
     * @return int
     */
    public function getAbbreviatedUnitId()
    {
        return $this->container['abbreviated_unit_id'];
    }

    /**
     * Sets abbreviated_unit_id
     * @param int $abbreviated_unit_id Id of the default unit for the variable
     * @return $this
     */
    public function setAbbreviatedUnitId($abbreviated_unit_id)
    {
        $this->container['abbreviated_unit_id'] = $abbreviated_unit_id;

        return $this;
    }

    /**
     * Gets sources
     * @return string
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     * @param string $sources Comma-separated list of source names to limit variables to those sources
     * @return $this
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     * @return double
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     * @param double $minimum_allowed_value The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis.
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     * @return double
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     * @param double $maximum_allowed_value The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis.
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets combination_operation
     * @return string
     */
    public function getCombinationOperation()
    {
        return $this->container['combination_operation'];
    }

    /**
     * Sets combination_operation
     * @param string $combination_operation Way to aggregate measurements over time. Options are \"MEAN\" or \"SUM\".  SUM should be used for things like minutes of exercise.  If you use MEAN for exercise, then a person might exercise more minutes in one day but add separate measurements that were smaller.  So when we are doing correlational analysis, we would think that the person exercised less that day even though they exercised more.  Conversely, we must use MEAN for things such as ratings which cannot be SUMMED.
     * @return $this
     */
    public function setCombinationOperation($combination_operation)
    {
        $allowed_values = array('MEAN', 'SUM');
        if ((!in_array($combination_operation, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'combination_operation', must be one of 'MEAN', 'SUM'");
        }
        $this->container['combination_operation'] = $combination_operation;

        return $this;
    }

    /**
     * Gets filling_value
     * @return double
     */
    public function getFillingValue()
    {
        return $this->container['filling_value'];
    }

    /**
     * Sets filling_value
     * @param double $filling_value When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven't taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing.
     * @return $this
     */
    public function setFillingValue($filling_value)
    {
        $this->container['filling_value'] = $filling_value;

        return $this;
    }

    /**
     * Gets join_with
     * @return string
     */
    public function getJoinWith()
    {
        return $this->container['join_with'];
    }

    /**
     * Sets join_with
     * @param string $join_with The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables.
     * @return $this
     */
    public function setJoinWith($join_with)
    {
        $this->container['join_with'] = $join_with;

        return $this;
    }

    /**
     * Gets joined_variables
     * @return \QuantiModo\Client\Model\Variable[]
     */
    public function getJoinedVariables()
    {
        return $this->container['joined_variables'];
    }

    /**
     * Sets joined_variables
     * @param \QuantiModo\Client\Model\Variable[] $joined_variables Array of Variables that are joined with this Variable
     * @return $this
     */
    public function setJoinedVariables($joined_variables)
    {
        $this->container['joined_variables'] = $joined_variables;

        return $this;
    }

    /**
     * Gets parent
     * @return int
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param int $parent Id of the parent variable if this variable has any parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets sub_variables
     * @return \QuantiModo\Client\Model\Variable[]
     */
    public function getSubVariables()
    {
        return $this->container['sub_variables'];
    }

    /**
     * Sets sub_variables
     * @param \QuantiModo\Client\Model\Variable[] $sub_variables Array of Variables that are sub variables to this Variable
     * @return $this
     */
    public function setSubVariables($sub_variables)
    {
        $this->container['sub_variables'] = $sub_variables;

        return $this;
    }

    /**
     * Gets onset_delay
     * @return int
     */
    public function getOnsetDelay()
    {
        return $this->container['onset_delay'];
    }

    /**
     * Sets onset_delay
     * @param int $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
     * @return $this
     */
    public function setOnsetDelay($onset_delay)
    {
        $this->container['onset_delay'] = $onset_delay;

        return $this;
    }

    /**
     * Gets duration_of_action
     * @return int
     */
    public function getDurationOfAction()
    {
        return $this->container['duration_of_action'];
    }

    /**
     * Sets duration_of_action
     * @param int $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.
     * @return $this
     */
    public function setDurationOfAction($duration_of_action)
    {
        $this->container['duration_of_action'] = $duration_of_action;

        return $this;
    }

    /**
     * Gets earliest_measurement_time
     * @return int
     */
    public function getEarliestMeasurementTime()
    {
        return $this->container['earliest_measurement_time'];
    }

    /**
     * Sets earliest_measurement_time
     * @param int $earliest_measurement_time Earliest measurement time
     * @return $this
     */
    public function setEarliestMeasurementTime($earliest_measurement_time)
    {
        $this->container['earliest_measurement_time'] = $earliest_measurement_time;

        return $this;
    }

    /**
     * Gets latest_measurement_time
     * @return int
     */
    public function getLatestMeasurementTime()
    {
        return $this->container['latest_measurement_time'];
    }

    /**
     * Sets latest_measurement_time
     * @param int $latest_measurement_time Latest measurement time
     * @return $this
     */
    public function setLatestMeasurementTime($latest_measurement_time)
    {
        $this->container['latest_measurement_time'] = $latest_measurement_time;

        return $this;
    }

    /**
     * Gets updated
     * @return int
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     * @param int $updated When this variable or its settings were last updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets cause_only
     * @return int
     */
    public function getCauseOnly()
    {
        return $this->container['cause_only'];
    }

    /**
     * Sets cause_only
     * @param int $cause_only A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user.
     * @return $this
     */
    public function setCauseOnly($cause_only)
    {
        $this->container['cause_only'] = $cause_only;

        return $this;
    }

    /**
     * Gets number_of_correlations
     * @return int
     */
    public function getNumberOfCorrelations()
    {
        return $this->container['number_of_correlations'];
    }

    /**
     * Sets number_of_correlations
     * @param int $number_of_correlations Number of correlations
     * @return $this
     */
    public function setNumberOfCorrelations($number_of_correlations)
    {
        $this->container['number_of_correlations'] = $number_of_correlations;

        return $this;
    }

    /**
     * Gets outcome
     * @return int
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     * @param int $outcome Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables.
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

        return $this;
    }

    /**
     * Gets raw_measurements_at_last_analysis
     * @return int
     */
    public function getRawMeasurementsAtLastAnalysis()
    {
        return $this->container['raw_measurements_at_last_analysis'];
    }

    /**
     * Sets raw_measurements_at_last_analysis
     * @param int $raw_measurements_at_last_analysis The number of measurements that a given user had for this variable the last time a correlation calculation was performed. Generally correlation values are only updated once the current number of measurements for a variable is more than 10% greater than the rawMeasurementsAtLastAnalysis.  This avoids a computationally-demanding recalculation when there's not enough new data to make a significant difference in the correlation.
     * @return $this
     */
    public function setRawMeasurementsAtLastAnalysis($raw_measurements_at_last_analysis)
    {
        $this->container['raw_measurements_at_last_analysis'] = $raw_measurements_at_last_analysis;

        return $this;
    }

    /**
     * Gets number_of_raw_measurements
     * @return int
     */
    public function getNumberOfRawMeasurements()
    {
        return $this->container['number_of_raw_measurements'];
    }

    /**
     * Sets number_of_raw_measurements
     * @param int $number_of_raw_measurements Number of measurements
     * @return $this
     */
    public function setNumberOfRawMeasurements($number_of_raw_measurements)
    {
        $this->container['number_of_raw_measurements'] = $number_of_raw_measurements;

        return $this;
    }

    /**
     * Gets last_unit
     * @return string
     */
    public function getLastUnit()
    {
        return $this->container['last_unit'];
    }

    /**
     * Sets last_unit
     * @param string $last_unit Last unit
     * @return $this
     */
    public function setLastUnit($last_unit)
    {
        $this->container['last_unit'] = $last_unit;

        return $this;
    }

    /**
     * Gets last_value
     * @return int
     */
    public function getLastValue()
    {
        return $this->container['last_value'];
    }

    /**
     * Sets last_value
     * @param int $last_value Last value
     * @return $this
     */
    public function setLastValue($last_value)
    {
        $this->container['last_value'] = $last_value;

        return $this;
    }

    /**
     * Gets most_common_value
     * @return int
     */
    public function getMostCommonValue()
    {
        return $this->container['most_common_value'];
    }

    /**
     * Sets most_common_value
     * @param int $most_common_value Most common value
     * @return $this
     */
    public function setMostCommonValue($most_common_value)
    {
        $this->container['most_common_value'] = $most_common_value;

        return $this;
    }

    /**
     * Gets most_common_unit
     * @return string
     */
    public function getMostCommonUnit()
    {
        return $this->container['most_common_unit'];
    }

    /**
     * Sets most_common_unit
     * @param string $most_common_unit Most common unit
     * @return $this
     */
    public function setMostCommonUnit($most_common_unit)
    {
        $this->container['most_common_unit'] = $most_common_unit;

        return $this;
    }

    /**
     * Gets last_source
     * @return int
     */
    public function getLastSource()
    {
        return $this->container['last_source'];
    }

    /**
     * Sets last_source
     * @param int $last_source Last source
     * @return $this
     */
    public function setLastSource($last_source)
    {
        $this->container['last_source'] = $last_source;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url 
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets ion_icon
     * @return string
     */
    public function getIonIcon()
    {
        return $this->container['ion_icon'];
    }

    /**
     * Sets ion_icon
     * @param string $ion_icon 
     * @return $this
     */
    public function setIonIcon($ion_icon)
    {
        $this->container['ion_icon'] = $ion_icon;

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
