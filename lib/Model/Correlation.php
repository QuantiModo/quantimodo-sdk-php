<?php
/**
 * Correlation
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
 * Correlation Class Doc Comment
 *
 * @category    Class */
/**
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Correlation implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Correlation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'correlation_coefficient' => 'float',
        'cause' => 'string',
        'original_cause' => 'string',
        'effect' => 'string',
        'original_effect' => 'string',
        'onset_delay' => 'double',
        'duration_of_action' => 'float',
        'number_of_pairs' => 'float',
        'effect_size' => 'string',
        'statistical_significance' => 'string',
        'timestamp' => 'float',
        'reverse_correlation' => 'float',
        'causality_factor' => 'float',
        'cause_category' => 'string',
        'effect_category' => 'string',
        'value_predicting_high_outcome' => 'float',
        'value_predicting_low_outcome' => 'float',
        'optimal_pearson_product' => 'float',
        'average_vote' => 'float',
        'user_vote' => 'float',
        'cause_unit' => 'string',
        'cause_unit_id' => 'int'
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
        'correlation_coefficient' => 'correlationCoefficient',
        'cause' => 'cause',
        'original_cause' => 'originalCause',
        'effect' => 'effect',
        'original_effect' => 'originalEffect',
        'onset_delay' => 'onsetDelay',
        'duration_of_action' => 'durationOfAction',
        'number_of_pairs' => 'numberOfPairs',
        'effect_size' => 'effectSize',
        'statistical_significance' => 'statisticalSignificance',
        'timestamp' => 'timestamp',
        'reverse_correlation' => 'reverseCorrelation',
        'causality_factor' => 'causalityFactor',
        'cause_category' => 'causeCategory',
        'effect_category' => 'effectCategory',
        'value_predicting_high_outcome' => 'valuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'valuePredictingLowOutcome',
        'optimal_pearson_product' => 'optimalPearsonProduct',
        'average_vote' => 'averageVote',
        'user_vote' => 'userVote',
        'cause_unit' => 'causeUnit',
        'cause_unit_id' => 'causeUnitId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'correlation_coefficient' => 'setCorrelationCoefficient',
        'cause' => 'setCause',
        'original_cause' => 'setOriginalCause',
        'effect' => 'setEffect',
        'original_effect' => 'setOriginalEffect',
        'onset_delay' => 'setOnsetDelay',
        'duration_of_action' => 'setDurationOfAction',
        'number_of_pairs' => 'setNumberOfPairs',
        'effect_size' => 'setEffectSize',
        'statistical_significance' => 'setStatisticalSignificance',
        'timestamp' => 'setTimestamp',
        'reverse_correlation' => 'setReverseCorrelation',
        'causality_factor' => 'setCausalityFactor',
        'cause_category' => 'setCauseCategory',
        'effect_category' => 'setEffectCategory',
        'value_predicting_high_outcome' => 'setValuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'setValuePredictingLowOutcome',
        'optimal_pearson_product' => 'setOptimalPearsonProduct',
        'average_vote' => 'setAverageVote',
        'user_vote' => 'setUserVote',
        'cause_unit' => 'setCauseUnit',
        'cause_unit_id' => 'setCauseUnitId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'correlation_coefficient' => 'getCorrelationCoefficient',
        'cause' => 'getCause',
        'original_cause' => 'getOriginalCause',
        'effect' => 'getEffect',
        'original_effect' => 'getOriginalEffect',
        'onset_delay' => 'getOnsetDelay',
        'duration_of_action' => 'getDurationOfAction',
        'number_of_pairs' => 'getNumberOfPairs',
        'effect_size' => 'getEffectSize',
        'statistical_significance' => 'getStatisticalSignificance',
        'timestamp' => 'getTimestamp',
        'reverse_correlation' => 'getReverseCorrelation',
        'causality_factor' => 'getCausalityFactor',
        'cause_category' => 'getCauseCategory',
        'effect_category' => 'getEffectCategory',
        'value_predicting_high_outcome' => 'getValuePredictingHighOutcome',
        'value_predicting_low_outcome' => 'getValuePredictingLowOutcome',
        'optimal_pearson_product' => 'getOptimalPearsonProduct',
        'average_vote' => 'getAverageVote',
        'user_vote' => 'getUserVote',
        'cause_unit' => 'getCauseUnit',
        'cause_unit_id' => 'getCauseUnitId'
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
        $this->container['correlation_coefficient'] = isset($data['correlation_coefficient']) ? $data['correlation_coefficient'] : null;
        $this->container['cause'] = isset($data['cause']) ? $data['cause'] : null;
        $this->container['original_cause'] = isset($data['original_cause']) ? $data['original_cause'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['original_effect'] = isset($data['original_effect']) ? $data['original_effect'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['number_of_pairs'] = isset($data['number_of_pairs']) ? $data['number_of_pairs'] : null;
        $this->container['effect_size'] = isset($data['effect_size']) ? $data['effect_size'] : null;
        $this->container['statistical_significance'] = isset($data['statistical_significance']) ? $data['statistical_significance'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['reverse_correlation'] = isset($data['reverse_correlation']) ? $data['reverse_correlation'] : null;
        $this->container['causality_factor'] = isset($data['causality_factor']) ? $data['causality_factor'] : null;
        $this->container['cause_category'] = isset($data['cause_category']) ? $data['cause_category'] : null;
        $this->container['effect_category'] = isset($data['effect_category']) ? $data['effect_category'] : null;
        $this->container['value_predicting_high_outcome'] = isset($data['value_predicting_high_outcome']) ? $data['value_predicting_high_outcome'] : null;
        $this->container['value_predicting_low_outcome'] = isset($data['value_predicting_low_outcome']) ? $data['value_predicting_low_outcome'] : null;
        $this->container['optimal_pearson_product'] = isset($data['optimal_pearson_product']) ? $data['optimal_pearson_product'] : null;
        $this->container['average_vote'] = isset($data['average_vote']) ? $data['average_vote'] : null;
        $this->container['user_vote'] = isset($data['user_vote']) ? $data['user_vote'] : null;
        $this->container['cause_unit'] = isset($data['cause_unit']) ? $data['cause_unit'] : null;
        $this->container['cause_unit_id'] = isset($data['cause_unit_id']) ? $data['cause_unit_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['correlation_coefficient'] === null) {
            $invalid_properties[] = "'correlation_coefficient' can't be null";
        }
        if ($this->container['cause'] === null) {
            $invalid_properties[] = "'cause' can't be null";
        }
        if ($this->container['effect'] === null) {
            $invalid_properties[] = "'effect' can't be null";
        }
        if ($this->container['onset_delay'] === null) {
            $invalid_properties[] = "'onset_delay' can't be null";
        }
        if ($this->container['duration_of_action'] === null) {
            $invalid_properties[] = "'duration_of_action' can't be null";
        }
        if ($this->container['number_of_pairs'] === null) {
            $invalid_properties[] = "'number_of_pairs' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalid_properties[] = "'timestamp' can't be null";
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
        if ($this->container['correlation_coefficient'] === null) {
            return false;
        }
        if ($this->container['cause'] === null) {
            return false;
        }
        if ($this->container['effect'] === null) {
            return false;
        }
        if ($this->container['onset_delay'] === null) {
            return false;
        }
        if ($this->container['duration_of_action'] === null) {
            return false;
        }
        if ($this->container['number_of_pairs'] === null) {
            return false;
        }
        if ($this->container['timestamp'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets correlation_coefficient
     * @return float
     */
    public function getCorrelationCoefficient()
    {
        return $this->container['correlation_coefficient'];
    }

    /**
     * Sets correlation_coefficient
     * @param float $correlation_coefficient Pearson correlation coefficient between cause and effect measurements
     * @return $this
     */
    public function setCorrelationCoefficient($correlation_coefficient)
    {
        $this->container['correlation_coefficient'] = $correlation_coefficient;

        return $this;
    }

    /**
     * Gets cause
     * @return string
     */
    public function getCause()
    {
        return $this->container['cause'];
    }

    /**
     * Sets cause
     * @param string $cause ORIGINAL variable name of the cause variable for which the user desires correlations.
     * @return $this
     */
    public function setCause($cause)
    {
        $this->container['cause'] = $cause;

        return $this;
    }

    /**
     * Gets original_cause
     * @return string
     */
    public function getOriginalCause()
    {
        return $this->container['original_cause'];
    }

    /**
     * Sets original_cause
     * @param string $original_cause original name of the cause.
     * @return $this
     */
    public function setOriginalCause($original_cause)
    {
        $this->container['original_cause'] = $original_cause;

        return $this;
    }

    /**
     * Gets effect
     * @return string
     */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
     * Sets effect
     * @param string $effect ORIGINAL variable name of the effect variable for which the user desires correlations.
     * @return $this
     */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;

        return $this;
    }

    /**
     * Gets original_effect
     * @return string
     */
    public function getOriginalEffect()
    {
        return $this->container['original_effect'];
    }

    /**
     * Sets original_effect
     * @param string $original_effect effect variable original name.
     * @return $this
     */
    public function setOriginalEffect($original_effect)
    {
        $this->container['original_effect'] = $original_effect;

        return $this;
    }

    /**
     * Gets onset_delay
     * @return double
     */
    public function getOnsetDelay()
    {
        return $this->container['onset_delay'];
    }

    /**
     * Sets onset_delay
     * @param double $onset_delay The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the “onset delay”. For example, the “onset delay” between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes.
     * @return $this
     */
    public function setOnsetDelay($onset_delay)
    {
        $this->container['onset_delay'] = $onset_delay;

        return $this;
    }

    /**
     * Gets duration_of_action
     * @return float
     */
    public function getDurationOfAction()
    {
        return $this->container['duration_of_action'];
    }

    /**
     * Sets duration_of_action
     * @param float $duration_of_action The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable’s value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay.
     * @return $this
     */
    public function setDurationOfAction($duration_of_action)
    {
        $this->container['duration_of_action'] = $duration_of_action;

        return $this;
    }

    /**
     * Gets number_of_pairs
     * @return float
     */
    public function getNumberOfPairs()
    {
        return $this->container['number_of_pairs'];
    }

    /**
     * Sets number_of_pairs
     * @param float $number_of_pairs Number of points that went into the correlation calculation
     * @return $this
     */
    public function setNumberOfPairs($number_of_pairs)
    {
        $this->container['number_of_pairs'] = $number_of_pairs;

        return $this;
    }

    /**
     * Gets effect_size
     * @return string
     */
    public function getEffectSize()
    {
        return $this->container['effect_size'];
    }

    /**
     * Sets effect_size
     * @param string $effect_size Magnitude of the effects of a cause indicating whether it's practically meaningful.
     * @return $this
     */
    public function setEffectSize($effect_size)
    {
        $this->container['effect_size'] = $effect_size;

        return $this;
    }

    /**
     * Gets statistical_significance
     * @return string
     */
    public function getStatisticalSignificance()
    {
        return $this->container['statistical_significance'];
    }

    /**
     * Sets statistical_significance
     * @param string $statistical_significance A function of the effect size and sample size
     * @return $this
     */
    public function setStatisticalSignificance($statistical_significance)
    {
        $this->container['statistical_significance'] = $statistical_significance;

        return $this;
    }

    /**
     * Gets timestamp
     * @return float
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param float $timestamp Time at which correlation was calculated
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets reverse_correlation
     * @return float
     */
    public function getReverseCorrelation()
    {
        return $this->container['reverse_correlation'];
    }

    /**
     * Sets reverse_correlation
     * @param float $reverse_correlation Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation.
     * @return $this
     */
    public function setReverseCorrelation($reverse_correlation)
    {
        $this->container['reverse_correlation'] = $reverse_correlation;

        return $this;
    }

    /**
     * Gets causality_factor
     * @return float
     */
    public function getCausalityFactor()
    {
        return $this->container['causality_factor'];
    }

    /**
     * Sets causality_factor
     * @param float $causality_factor 
     * @return $this
     */
    public function setCausalityFactor($causality_factor)
    {
        $this->container['causality_factor'] = $causality_factor;

        return $this;
    }

    /**
     * Gets cause_category
     * @return string
     */
    public function getCauseCategory()
    {
        return $this->container['cause_category'];
    }

    /**
     * Sets cause_category
     * @param string $cause_category Variable category of the cause variable.
     * @return $this
     */
    public function setCauseCategory($cause_category)
    {
        $this->container['cause_category'] = $cause_category;

        return $this;
    }

    /**
     * Gets effect_category
     * @return string
     */
    public function getEffectCategory()
    {
        return $this->container['effect_category'];
    }

    /**
     * Sets effect_category
     * @param string $effect_category Variable category of the effect variable.
     * @return $this
     */
    public function setEffectCategory($effect_category)
    {
        $this->container['effect_category'] = $effect_category;

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
     * @param float $value_predicting_high_outcome cause value that predicts an above average effect value (in default unit for cause variable)
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
     * @param float $value_predicting_low_outcome cause value that predicts a below average effect value (in default unit for cause variable)
     * @return $this
     */
    public function setValuePredictingLowOutcome($value_predicting_low_outcome)
    {
        $this->container['value_predicting_low_outcome'] = $value_predicting_low_outcome;

        return $this;
    }

    /**
     * Gets optimal_pearson_product
     * @return float
     */
    public function getOptimalPearsonProduct()
    {
        return $this->container['optimal_pearson_product'];
    }

    /**
     * Sets optimal_pearson_product
     * @param float $optimal_pearson_product Optimal Pearson Product
     * @return $this
     */
    public function setOptimalPearsonProduct($optimal_pearson_product)
    {
        $this->container['optimal_pearson_product'] = $optimal_pearson_product;

        return $this;
    }

    /**
     * Gets average_vote
     * @return float
     */
    public function getAverageVote()
    {
        return $this->container['average_vote'];
    }

    /**
     * Sets average_vote
     * @param float $average_vote Average Vote
     * @return $this
     */
    public function setAverageVote($average_vote)
    {
        $this->container['average_vote'] = $average_vote;

        return $this;
    }

    /**
     * Gets user_vote
     * @return float
     */
    public function getUserVote()
    {
        return $this->container['user_vote'];
    }

    /**
     * Sets user_vote
     * @param float $user_vote User Vote
     * @return $this
     */
    public function setUserVote($user_vote)
    {
        $this->container['user_vote'] = $user_vote;

        return $this;
    }

    /**
     * Gets cause_unit
     * @return string
     */
    public function getCauseUnit()
    {
        return $this->container['cause_unit'];
    }

    /**
     * Sets cause_unit
     * @param string $cause_unit Unit of the predictor variable
     * @return $this
     */
    public function setCauseUnit($cause_unit)
    {
        $this->container['cause_unit'] = $cause_unit;

        return $this;
    }

    /**
     * Gets cause_unit_id
     * @return int
     */
    public function getCauseUnitId()
    {
        return $this->container['cause_unit_id'];
    }

    /**
     * Sets cause_unit_id
     * @param int $cause_unit_id Unit Id of the predictor variable
     * @return $this
     */
    public function setCauseUnitId($cause_unit_id)
    {
        $this->container['cause_unit_id'] = $cause_unit_id;

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
