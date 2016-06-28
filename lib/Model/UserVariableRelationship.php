<?php
/**
 * UserVariableRelationship
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
 * UserVariableRelationship Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserVariableRelationship implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserVariableRelationship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'confidence_level' => 'string',
        'confidence_score' => 'float',
        'direction' => 'string',
        'duration_of_action' => 'int',
        'error_message' => 'string',
        'onset_delay' => 'int',
        'outcome_variable_id' => 'int',
        'predictor_variable_id' => 'int',
        'predictor_unit_id' => 'int',
        'sinn_rank' => 'float',
        'strength_level' => 'string',
        'strength_score' => 'float',
        'user_id' => 'int',
        'vote' => 'string',
        'value_predicting_high_outcome' => 'float',
        'value_predicting_low_outcome' => 'float'
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
        'confidence_level' => 'confidence_level',
        'confidence_score' => 'confidence_score',
        'direction' => 'direction',
        'duration_of_action' => 'duration_of_action',
        'error_message' => 'error_message',
        'onset_delay' => 'onset_delay',
        'outcome_variable_id' => 'outcome_variable_id',
        'predictor_variable_id' => 'predictor_variable_id',
        'predictor_unit_id' => 'predictor_unit_id',
        'sinn_rank' => 'sinn_rank',
        'strength_level' => 'strength_level',
        'strength_score' => 'strength_score',
        'user_id' => 'user_id',
        'vote' => 'vote',
        'value_predicting_high_outcome' => 'value_predicting_high_outcome',
        'value_predicting_low_outcome' => 'value_predicting_low_outcome'
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
        'confidence_level' => 'setConfidenceLevel',
        'confidence_score' => 'setConfidenceScore',
        'direction' => 'setDirection',
        'duration_of_action' => 'setDurationOfAction',
        'error_message' => 'setErrorMessage',
        'onset_delay' => 'setOnsetDelay',
        'outcome_variable_id' => 'setOutcomeVariableId',
        'predictor_variable_id' => 'setPredictorVariableId',
        'predictor_unit_id' => 'setPredictorUnitId',
        'sinn_rank' => 'setSinnRank',
        'strength_level' => 'setStrengthLevel',
        'strength_score' => 'setStrengthScore',
        'user_id' => 'setUserId',
        'vote' => 'setVote',
        'value_predicting_high_outcome' => 'setValuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'setValuePredictingLowOutcome'
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
        'confidence_level' => 'getConfidenceLevel',
        'confidence_score' => 'getConfidenceScore',
        'direction' => 'getDirection',
        'duration_of_action' => 'getDurationOfAction',
        'error_message' => 'getErrorMessage',
        'onset_delay' => 'getOnsetDelay',
        'outcome_variable_id' => 'getOutcomeVariableId',
        'predictor_variable_id' => 'getPredictorVariableId',
        'predictor_unit_id' => 'getPredictorUnitId',
        'sinn_rank' => 'getSinnRank',
        'strength_level' => 'getStrengthLevel',
        'strength_score' => 'getStrengthScore',
        'user_id' => 'getUserId',
        'vote' => 'getVote',
        'value_predicting_high_outcome' => 'getValuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'getValuePredictingLowOutcome'
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
        $this->container['confidence_level'] = isset($data['confidence_level']) ? $data['confidence_level'] : null;
        $this->container['confidence_score'] = isset($data['confidence_score']) ? $data['confidence_score'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['outcome_variable_id'] = isset($data['outcome_variable_id']) ? $data['outcome_variable_id'] : null;
        $this->container['predictor_variable_id'] = isset($data['predictor_variable_id']) ? $data['predictor_variable_id'] : null;
        $this->container['predictor_unit_id'] = isset($data['predictor_unit_id']) ? $data['predictor_unit_id'] : null;
        $this->container['sinn_rank'] = isset($data['sinn_rank']) ? $data['sinn_rank'] : null;
        $this->container['strength_level'] = isset($data['strength_level']) ? $data['strength_level'] : null;
        $this->container['strength_score'] = isset($data['strength_score']) ? $data['strength_score'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['vote'] = isset($data['vote']) ? $data['vote'] : null;
        $this->container['value_predicting_high_outcome'] = isset($data['value_predicting_high_outcome']) ? $data['value_predicting_high_outcome'] : null;
        $this->container['value_predicting_low_outcome'] = isset($data['value_predicting_low_outcome']) ? $data['value_predicting_low_outcome'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['confidence_level'] === null) {
            $invalid_properties[] = "'confidence_level' can't be null";
        }
        if ($this->container['confidence_score'] === null) {
            $invalid_properties[] = "'confidence_score' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalid_properties[] = "'direction' can't be null";
        }
        if ($this->container['duration_of_action'] === null) {
            $invalid_properties[] = "'duration_of_action' can't be null";
        }
        if ($this->container['outcome_variable_id'] === null) {
            $invalid_properties[] = "'outcome_variable_id' can't be null";
        }
        if ($this->container['predictor_variable_id'] === null) {
            $invalid_properties[] = "'predictor_variable_id' can't be null";
        }
        if ($this->container['predictor_unit_id'] === null) {
            $invalid_properties[] = "'predictor_unit_id' can't be null";
        }
        if ($this->container['sinn_rank'] === null) {
            $invalid_properties[] = "'sinn_rank' can't be null";
        }
        if ($this->container['strength_level'] === null) {
            $invalid_properties[] = "'strength_level' can't be null";
        }
        if ($this->container['strength_score'] === null) {
            $invalid_properties[] = "'strength_score' can't be null";
        }
        if ($this->container['value_predicting_high_outcome'] === null) {
            $invalid_properties[] = "'value_predicting_high_outcome' can't be null";
        }
        if ($this->container['value_predicting_low_outcome'] === null) {
            $invalid_properties[] = "'value_predicting_low_outcome' can't be null";
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
        if ($this->container['confidence_level'] === null) {
            return false;
        }
        if ($this->container['confidence_score'] === null) {
            return false;
        }
        if ($this->container['direction'] === null) {
            return false;
        }
        if ($this->container['duration_of_action'] === null) {
            return false;
        }
        if ($this->container['outcome_variable_id'] === null) {
            return false;
        }
        if ($this->container['predictor_variable_id'] === null) {
            return false;
        }
        if ($this->container['predictor_unit_id'] === null) {
            return false;
        }
        if ($this->container['sinn_rank'] === null) {
            return false;
        }
        if ($this->container['strength_level'] === null) {
            return false;
        }
        if ($this->container['strength_score'] === null) {
            return false;
        }
        if ($this->container['value_predicting_high_outcome'] === null) {
            return false;
        }
        if ($this->container['value_predicting_low_outcome'] === null) {
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
     * Gets confidence_level
     * @return string
     */
    public function getConfidenceLevel()
    {
        return $this->container['confidence_level'];
    }

    /**
     * Sets confidence_level
     * @param string $confidence_level Our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors
     * @return $this
     */
    public function setConfidenceLevel($confidence_level)
    {
        $this->container['confidence_level'] = $confidence_level;

        return $this;
    }

    /**
     * Gets confidence_score
     * @return float
     */
    public function getConfidenceScore()
    {
        return $this->container['confidence_score'];
    }

    /**
     * Sets confidence_score
     * @param float $confidence_score A quantitative representation of our confidence that a consistent predictive relationship exists based on the amount of evidence, reproducibility, and other factors
     * @return $this
     */
    public function setConfidenceScore($confidence_score)
    {
        $this->container['confidence_score'] = $confidence_score;

        return $this;
    }

    /**
     * Gets direction
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     * @param string $direction Direction is positive if higher predictor values generally precede higher outcome values. Direction is negative if higher predictor values generally precede lower outcome values.
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

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
     * @param int $duration_of_action Number of seconds over which the predictor variable event is expected to produce a perceivable effect following the onset delay
     * @return $this
     */
    public function setDurationOfAction($duration_of_action)
    {
        $this->container['duration_of_action'] = $duration_of_action;

        return $this;
    }

    /**
     * Gets error_message
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param string $error_message error_message
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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
     * @param int $onset_delay User estimated (or default number of seconds) after cause measurement before a perceivable effect is observed
     * @return $this
     */
    public function setOnsetDelay($onset_delay)
    {
        $this->container['onset_delay'] = $onset_delay;

        return $this;
    }

    /**
     * Gets outcome_variable_id
     * @return int
     */
    public function getOutcomeVariableId()
    {
        return $this->container['outcome_variable_id'];
    }

    /**
     * Sets outcome_variable_id
     * @param int $outcome_variable_id Variable ID for the outcome variable
     * @return $this
     */
    public function setOutcomeVariableId($outcome_variable_id)
    {
        $this->container['outcome_variable_id'] = $outcome_variable_id;

        return $this;
    }

    /**
     * Gets predictor_variable_id
     * @return int
     */
    public function getPredictorVariableId()
    {
        return $this->container['predictor_variable_id'];
    }

    /**
     * Sets predictor_variable_id
     * @param int $predictor_variable_id Variable ID for the predictor variable
     * @return $this
     */
    public function setPredictorVariableId($predictor_variable_id)
    {
        $this->container['predictor_variable_id'] = $predictor_variable_id;

        return $this;
    }

    /**
     * Gets predictor_unit_id
     * @return int
     */
    public function getPredictorUnitId()
    {
        return $this->container['predictor_unit_id'];
    }

    /**
     * Sets predictor_unit_id
     * @param int $predictor_unit_id ID for default unit of the predictor variable
     * @return $this
     */
    public function setPredictorUnitId($predictor_unit_id)
    {
        $this->container['predictor_unit_id'] = $predictor_unit_id;

        return $this;
    }

    /**
     * Gets sinn_rank
     * @return float
     */
    public function getSinnRank()
    {
        return $this->container['sinn_rank'];
    }

    /**
     * Sets sinn_rank
     * @param float $sinn_rank A value representative of the relevance of this predictor relative to other predictors of this outcome.  Usually used for relevancy sorting.
     * @return $this
     */
    public function setSinnRank($sinn_rank)
    {
        $this->container['sinn_rank'] = $sinn_rank;

        return $this;
    }

    /**
     * Gets strength_level
     * @return string
     */
    public function getStrengthLevel()
    {
        return $this->container['strength_level'];
    }

    /**
     * Sets strength_level
     * @param string $strength_level Can be weak, medium, or strong based on the size of the effect which the predictor appears to have on the outcome relative to other variable relationship strength scores.
     * @return $this
     */
    public function setStrengthLevel($strength_level)
    {
        $this->container['strength_level'] = $strength_level;

        return $this;
    }

    /**
     * Gets strength_score
     * @return float
     */
    public function getStrengthScore()
    {
        return $this->container['strength_score'];
    }

    /**
     * Sets strength_score
     * @param float $strength_score A value represented to the size of the effect which the predictor appears to have on the outcome.
     * @return $this
     */
    public function setStrengthScore($strength_score)
    {
        $this->container['strength_score'] = $strength_score;

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
     * @param int $user_id user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets vote
     * @return string
     */
    public function getVote()
    {
        return $this->container['vote'];
    }

    /**
     * Sets vote
     * @param string $vote vote
     * @return $this
     */
    public function setVote($vote)
    {
        $this->container['vote'] = $vote;

        return $this;
    }

    /**
     * Gets value_predicting_high_outcome
     * @return float
     */
    public function getValuePredictingHighOutcome()
    {
        return $this->container['value_predicting_high_outcome'];
    }

    /**
     * Sets value_predicting_high_outcome
     * @param float $value_predicting_high_outcome Value for the predictor variable (in it's default unit) which typically precedes an above average outcome value
     * @return $this
     */
    public function setValuePredictingHighOutcome($value_predicting_high_outcome)
    {
        $this->container['value_predicting_high_outcome'] = $value_predicting_high_outcome;

        return $this;
    }

    /**
     * Gets value_predicting_low_outcome
     * @return float
     */
    public function getValuePredictingLowOutcome()
    {
        return $this->container['value_predicting_low_outcome'];
    }

    /**
     * Sets value_predicting_low_outcome
     * @param float $value_predicting_low_outcome Value for the predictor variable (in it's default unit) which typically precedes a below average outcome value
     * @return $this
     */
    public function setValuePredictingLowOutcome($value_predicting_low_outcome)
    {
        $this->container['value_predicting_low_outcome'] = $value_predicting_low_outcome;

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
