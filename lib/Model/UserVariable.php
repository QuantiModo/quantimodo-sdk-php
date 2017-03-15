<?php
/**
 * UserVariable
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

namespace QuantiModo\Client\Model;

use \ArrayAccess;

/**
 * UserVariable Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserVariable implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserVariable';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent_id' => 'int',
        'user_id' => 'int',
        'client_id' => 'string',
        'variable_id' => 'int',
        'default_unit_id' => 'int',
        'minimum_allowed_value' => 'float',
        'maximum_allowed_value' => 'float',
        'filling_value' => 'float',
        'join_with' => 'int',
        'onset_delay' => 'int',
        'duration_of_action' => 'int',
        'variable_category_id' => 'int',
        'updated' => 'int',
        'public' => 'int',
        'cause_only' => 'bool',
        'filling_type' => 'string',
        'number_of_measurements' => 'int',
        'number_of_processed_measurements' => 'int',
        'measurements_at_last_analysis' => 'int',
        'last_unit_id' => 'int',
        'last_original_unit_id' => 'int',
        'last_value' => 'float',
        'last_original_value' => 'int',
        'number_of_correlations' => 'int',
        'status' => 'string',
        'error_message' => 'string',
        'last_successful_update_time' => '\DateTime',
        'standard_deviation' => 'float',
        'variance' => 'float',
        'minimum_recorded_value' => 'float',
        'maximum_recorded_daily_value' => 'float',
        'mean' => 'float',
        'median' => 'float',
        'most_common_unit_id' => 'int',
        'most_common_value' => 'float',
        'number_of_unique_daily_values' => 'float',
        'number_of_changes' => 'int',
        'skewness' => 'float',
        'kurtosis' => 'float',
        'latitude' => 'float',
        'longitude' => 'float',
        'location' => 'string',
        'experiment_start_time' => '\DateTime',
        'experiment_end_time' => '\DateTime',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'outcome' => 'bool',
        'sources' => 'string',
        'earliest_source_time' => 'int',
        'latest_source_time' => 'int',
        'earliest_measurement_time' => 'int',
        'latest_measurement_time' => 'int',
        'earliest_filling_time' => 'int',
        'latest_filling_time' => 'int',
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
        'parent_id' => 'parentId',
        'user_id' => 'userId',
        'client_id' => 'clientId',
        'variable_id' => 'variableId',
        'default_unit_id' => 'defaultUnitId',
        'minimum_allowed_value' => 'minimumAllowedValue',
        'maximum_allowed_value' => 'maximumAllowedValue',
        'filling_value' => 'fillingValue',
        'join_with' => 'joinWith',
        'onset_delay' => 'onsetDelay',
        'duration_of_action' => 'durationOfAction',
        'variable_category_id' => 'variableCategoryId',
        'updated' => 'updated',
        'public' => 'public',
        'cause_only' => 'causeOnly',
        'filling_type' => 'fillingType',
        'number_of_measurements' => 'numberOfMeasurements',
        'number_of_processed_measurements' => 'numberOfProcessedMeasurements',
        'measurements_at_last_analysis' => 'measurementsAtLastAnalysis',
        'last_unit_id' => 'lastUnitId',
        'last_original_unit_id' => 'lastOriginalUnitId',
        'last_value' => 'lastValue',
        'last_original_value' => 'lastOriginalValue',
        'number_of_correlations' => 'numberOfCorrelations',
        'status' => 'status',
        'error_message' => 'errorMessage',
        'last_successful_update_time' => 'lastSuccessfulUpdateTime',
        'standard_deviation' => 'standard_deviation',
        'variance' => 'variance',
        'minimum_recorded_value' => 'minimumRecordedValue',
        'maximum_recorded_daily_value' => 'maximumRecordedDailyValue',
        'mean' => 'mean',
        'median' => 'median',
        'most_common_unit_id' => 'mostCommonUnitId',
        'most_common_value' => 'mostCommonValue',
        'number_of_unique_daily_values' => 'numberOfUniqueDailyValues',
        'number_of_changes' => 'numberOfChanges',
        'skewness' => 'skewness',
        'kurtosis' => 'kurtosis',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'location' => 'location',
        'experiment_start_time' => 'experimentStartTime',
        'experiment_end_time' => 'experimentEndTime',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'outcome' => 'outcome',
        'sources' => 'sources',
        'earliest_source_time' => 'earliestSourceTime',
        'latest_source_time' => 'latestSourceTime',
        'earliest_measurement_time' => 'earliestMeasurementTime',
        'latest_measurement_time' => 'latestMeasurementTime',
        'earliest_filling_time' => 'earliestFillingTime',
        'latest_filling_time' => 'latestFillingTime',
        'image_url' => 'imageUrl',
        'ion_icon' => 'ionIcon'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'parent_id' => 'setParentId',
        'user_id' => 'setUserId',
        'client_id' => 'setClientId',
        'variable_id' => 'setVariableId',
        'default_unit_id' => 'setDefaultUnitId',
        'minimum_allowed_value' => 'setMinimumAllowedValue',
        'maximum_allowed_value' => 'setMaximumAllowedValue',
        'filling_value' => 'setFillingValue',
        'join_with' => 'setJoinWith',
        'onset_delay' => 'setOnsetDelay',
        'duration_of_action' => 'setDurationOfAction',
        'variable_category_id' => 'setVariableCategoryId',
        'updated' => 'setUpdated',
        'public' => 'setPublic',
        'cause_only' => 'setCauseOnly',
        'filling_type' => 'setFillingType',
        'number_of_measurements' => 'setNumberOfMeasurements',
        'number_of_processed_measurements' => 'setNumberOfProcessedMeasurements',
        'measurements_at_last_analysis' => 'setMeasurementsAtLastAnalysis',
        'last_unit_id' => 'setLastUnitId',
        'last_original_unit_id' => 'setLastOriginalUnitId',
        'last_value' => 'setLastValue',
        'last_original_value' => 'setLastOriginalValue',
        'number_of_correlations' => 'setNumberOfCorrelations',
        'status' => 'setStatus',
        'error_message' => 'setErrorMessage',
        'last_successful_update_time' => 'setLastSuccessfulUpdateTime',
        'standard_deviation' => 'setStandardDeviation',
        'variance' => 'setVariance',
        'minimum_recorded_value' => 'setMinimumRecordedValue',
        'maximum_recorded_daily_value' => 'setMaximumRecordedDailyValue',
        'mean' => 'setMean',
        'median' => 'setMedian',
        'most_common_unit_id' => 'setMostCommonUnitId',
        'most_common_value' => 'setMostCommonValue',
        'number_of_unique_daily_values' => 'setNumberOfUniqueDailyValues',
        'number_of_changes' => 'setNumberOfChanges',
        'skewness' => 'setSkewness',
        'kurtosis' => 'setKurtosis',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'location' => 'setLocation',
        'experiment_start_time' => 'setExperimentStartTime',
        'experiment_end_time' => 'setExperimentEndTime',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'outcome' => 'setOutcome',
        'sources' => 'setSources',
        'earliest_source_time' => 'setEarliestSourceTime',
        'latest_source_time' => 'setLatestSourceTime',
        'earliest_measurement_time' => 'setEarliestMeasurementTime',
        'latest_measurement_time' => 'setLatestMeasurementTime',
        'earliest_filling_time' => 'setEarliestFillingTime',
        'latest_filling_time' => 'setLatestFillingTime',
        'image_url' => 'setImageUrl',
        'ion_icon' => 'setIonIcon'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'parent_id' => 'getParentId',
        'user_id' => 'getUserId',
        'client_id' => 'getClientId',
        'variable_id' => 'getVariableId',
        'default_unit_id' => 'getDefaultUnitId',
        'minimum_allowed_value' => 'getMinimumAllowedValue',
        'maximum_allowed_value' => 'getMaximumAllowedValue',
        'filling_value' => 'getFillingValue',
        'join_with' => 'getJoinWith',
        'onset_delay' => 'getOnsetDelay',
        'duration_of_action' => 'getDurationOfAction',
        'variable_category_id' => 'getVariableCategoryId',
        'updated' => 'getUpdated',
        'public' => 'getPublic',
        'cause_only' => 'getCauseOnly',
        'filling_type' => 'getFillingType',
        'number_of_measurements' => 'getNumberOfMeasurements',
        'number_of_processed_measurements' => 'getNumberOfProcessedMeasurements',
        'measurements_at_last_analysis' => 'getMeasurementsAtLastAnalysis',
        'last_unit_id' => 'getLastUnitId',
        'last_original_unit_id' => 'getLastOriginalUnitId',
        'last_value' => 'getLastValue',
        'last_original_value' => 'getLastOriginalValue',
        'number_of_correlations' => 'getNumberOfCorrelations',
        'status' => 'getStatus',
        'error_message' => 'getErrorMessage',
        'last_successful_update_time' => 'getLastSuccessfulUpdateTime',
        'standard_deviation' => 'getStandardDeviation',
        'variance' => 'getVariance',
        'minimum_recorded_value' => 'getMinimumRecordedValue',
        'maximum_recorded_daily_value' => 'getMaximumRecordedDailyValue',
        'mean' => 'getMean',
        'median' => 'getMedian',
        'most_common_unit_id' => 'getMostCommonUnitId',
        'most_common_value' => 'getMostCommonValue',
        'number_of_unique_daily_values' => 'getNumberOfUniqueDailyValues',
        'number_of_changes' => 'getNumberOfChanges',
        'skewness' => 'getSkewness',
        'kurtosis' => 'getKurtosis',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'location' => 'getLocation',
        'experiment_start_time' => 'getExperimentStartTime',
        'experiment_end_time' => 'getExperimentEndTime',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'outcome' => 'getOutcome',
        'sources' => 'getSources',
        'earliest_source_time' => 'getEarliestSourceTime',
        'latest_source_time' => 'getLatestSourceTime',
        'earliest_measurement_time' => 'getEarliestMeasurementTime',
        'latest_measurement_time' => 'getLatestMeasurementTime',
        'earliest_filling_time' => 'getEarliestFillingTime',
        'latest_filling_time' => 'getLatestFillingTime',
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['variable_id'] = isset($data['variable_id']) ? $data['variable_id'] : null;
        $this->container['default_unit_id'] = isset($data['default_unit_id']) ? $data['default_unit_id'] : null;
        $this->container['minimum_allowed_value'] = isset($data['minimum_allowed_value']) ? $data['minimum_allowed_value'] : null;
        $this->container['maximum_allowed_value'] = isset($data['maximum_allowed_value']) ? $data['maximum_allowed_value'] : null;
        $this->container['filling_value'] = isset($data['filling_value']) ? $data['filling_value'] : null;
        $this->container['join_with'] = isset($data['join_with']) ? $data['join_with'] : null;
        $this->container['onset_delay'] = isset($data['onset_delay']) ? $data['onset_delay'] : null;
        $this->container['duration_of_action'] = isset($data['duration_of_action']) ? $data['duration_of_action'] : null;
        $this->container['variable_category_id'] = isset($data['variable_category_id']) ? $data['variable_category_id'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['cause_only'] = isset($data['cause_only']) ? $data['cause_only'] : null;
        $this->container['filling_type'] = isset($data['filling_type']) ? $data['filling_type'] : null;
        $this->container['number_of_measurements'] = isset($data['number_of_measurements']) ? $data['number_of_measurements'] : null;
        $this->container['number_of_processed_measurements'] = isset($data['number_of_processed_measurements']) ? $data['number_of_processed_measurements'] : null;
        $this->container['measurements_at_last_analysis'] = isset($data['measurements_at_last_analysis']) ? $data['measurements_at_last_analysis'] : null;
        $this->container['last_unit_id'] = isset($data['last_unit_id']) ? $data['last_unit_id'] : null;
        $this->container['last_original_unit_id'] = isset($data['last_original_unit_id']) ? $data['last_original_unit_id'] : null;
        $this->container['last_value'] = isset($data['last_value']) ? $data['last_value'] : null;
        $this->container['last_original_value'] = isset($data['last_original_value']) ? $data['last_original_value'] : null;
        $this->container['number_of_correlations'] = isset($data['number_of_correlations']) ? $data['number_of_correlations'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['last_successful_update_time'] = isset($data['last_successful_update_time']) ? $data['last_successful_update_time'] : null;
        $this->container['standard_deviation'] = isset($data['standard_deviation']) ? $data['standard_deviation'] : null;
        $this->container['variance'] = isset($data['variance']) ? $data['variance'] : null;
        $this->container['minimum_recorded_value'] = isset($data['minimum_recorded_value']) ? $data['minimum_recorded_value'] : null;
        $this->container['maximum_recorded_daily_value'] = isset($data['maximum_recorded_daily_value']) ? $data['maximum_recorded_daily_value'] : null;
        $this->container['mean'] = isset($data['mean']) ? $data['mean'] : null;
        $this->container['median'] = isset($data['median']) ? $data['median'] : null;
        $this->container['most_common_unit_id'] = isset($data['most_common_unit_id']) ? $data['most_common_unit_id'] : null;
        $this->container['most_common_value'] = isset($data['most_common_value']) ? $data['most_common_value'] : null;
        $this->container['number_of_unique_daily_values'] = isset($data['number_of_unique_daily_values']) ? $data['number_of_unique_daily_values'] : null;
        $this->container['number_of_changes'] = isset($data['number_of_changes']) ? $data['number_of_changes'] : null;
        $this->container['skewness'] = isset($data['skewness']) ? $data['skewness'] : null;
        $this->container['kurtosis'] = isset($data['kurtosis']) ? $data['kurtosis'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['experiment_start_time'] = isset($data['experiment_start_time']) ? $data['experiment_start_time'] : null;
        $this->container['experiment_end_time'] = isset($data['experiment_end_time']) ? $data['experiment_end_time'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['outcome'] = isset($data['outcome']) ? $data['outcome'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['earliest_source_time'] = isset($data['earliest_source_time']) ? $data['earliest_source_time'] : null;
        $this->container['latest_source_time'] = isset($data['latest_source_time']) ? $data['latest_source_time'] : null;
        $this->container['earliest_measurement_time'] = isset($data['earliest_measurement_time']) ? $data['earliest_measurement_time'] : null;
        $this->container['latest_measurement_time'] = isset($data['latest_measurement_time']) ? $data['latest_measurement_time'] : null;
        $this->container['earliest_filling_time'] = isset($data['earliest_filling_time']) ? $data['earliest_filling_time'] : null;
        $this->container['latest_filling_time'] = isset($data['latest_filling_time']) ? $data['latest_filling_time'] : null;
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

        return true;
    }


    /**
     * Gets parent_id
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param int $parent_id ID of the parent variable if this variable has any parent
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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
     * @param int $user_id User ID
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets variable_id
     * @return int
     */
    public function getVariableId()
    {
        return $this->container['variable_id'];
    }

    /**
     * Sets variable_id
     * @param int $variable_id ID of variable
     * @return $this
     */
    public function setVariableId($variable_id)
    {
        $this->container['variable_id'] = $variable_id;

        return $this;
    }

    /**
     * Gets default_unit_id
     * @return int
     */
    public function getDefaultUnitId()
    {
        return $this->container['default_unit_id'];
    }

    /**
     * Sets default_unit_id
     * @param int $default_unit_id ID of unit to use for this variable
     * @return $this
     */
    public function setDefaultUnitId($default_unit_id)
    {
        $this->container['default_unit_id'] = $default_unit_id;

        return $this;
    }

    /**
     * Gets minimum_allowed_value
     * @return float
     */
    public function getMinimumAllowedValue()
    {
        return $this->container['minimum_allowed_value'];
    }

    /**
     * Sets minimum_allowed_value
     * @param float $minimum_allowed_value The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis.
     * @return $this
     */
    public function setMinimumAllowedValue($minimum_allowed_value)
    {
        $this->container['minimum_allowed_value'] = $minimum_allowed_value;

        return $this;
    }

    /**
     * Gets maximum_allowed_value
     * @return float
     */
    public function getMaximumAllowedValue()
    {
        return $this->container['maximum_allowed_value'];
    }

    /**
     * Sets maximum_allowed_value
     * @param float $maximum_allowed_value The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis.
     * @return $this
     */
    public function setMaximumAllowedValue($maximum_allowed_value)
    {
        $this->container['maximum_allowed_value'] = $maximum_allowed_value;

        return $this;
    }

    /**
     * Gets filling_value
     * @return float
     */
    public function getFillingValue()
    {
        return $this->container['filling_value'];
    }

    /**
     * Sets filling_value
     * @param float $filling_value When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven't taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing.
     * @return $this
     */
    public function setFillingValue($filling_value)
    {
        $this->container['filling_value'] = $filling_value;

        return $this;
    }

    /**
     * Gets join_with
     * @return int
     */
    public function getJoinWith()
    {
        return $this->container['join_with'];
    }

    /**
     * Sets join_with
     * @param int $join_with The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables
     * @return $this
     */
    public function setJoinWith($join_with)
    {
        $this->container['join_with'] = $join_with;

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
     * Gets variable_category_id
     * @return int
     */
    public function getVariableCategoryId()
    {
        return $this->container['variable_category_id'];
    }

    /**
     * Sets variable_category_id
     * @param int $variable_category_id ID of variable category
     * @return $this
     */
    public function setVariableCategoryId($variable_category_id)
    {
        $this->container['variable_category_id'] = $variable_category_id;

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
     * @param int $updated updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets public
     * @return int
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     * @param int $public Is variable public
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets cause_only
     * @return bool
     */
    public function getCauseOnly()
    {
        return $this->container['cause_only'];
    }

    /**
     * Sets cause_only
     * @param bool $cause_only A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user
     * @return $this
     */
    public function setCauseOnly($cause_only)
    {
        $this->container['cause_only'] = $cause_only;

        return $this;
    }

    /**
     * Gets filling_type
     * @return string
     */
    public function getFillingType()
    {
        return $this->container['filling_type'];
    }

    /**
     * Sets filling_type
     * @param string $filling_type 0 -> No filling, 1 -> Use filling-value
     * @return $this
     */
    public function setFillingType($filling_type)
    {
        $this->container['filling_type'] = $filling_type;

        return $this;
    }

    /**
     * Gets number_of_measurements
     * @return int
     */
    public function getNumberOfMeasurements()
    {
        return $this->container['number_of_measurements'];
    }

    /**
     * Sets number_of_measurements
     * @param int $number_of_measurements Number of measurements
     * @return $this
     */
    public function setNumberOfMeasurements($number_of_measurements)
    {
        $this->container['number_of_measurements'] = $number_of_measurements;

        return $this;
    }

    /**
     * Gets number_of_processed_measurements
     * @return int
     */
    public function getNumberOfProcessedMeasurements()
    {
        return $this->container['number_of_processed_measurements'];
    }

    /**
     * Sets number_of_processed_measurements
     * @param int $number_of_processed_measurements Number of processed measurements
     * @return $this
     */
    public function setNumberOfProcessedMeasurements($number_of_processed_measurements)
    {
        $this->container['number_of_processed_measurements'] = $number_of_processed_measurements;

        return $this;
    }

    /**
     * Gets measurements_at_last_analysis
     * @return int
     */
    public function getMeasurementsAtLastAnalysis()
    {
        return $this->container['measurements_at_last_analysis'];
    }

    /**
     * Sets measurements_at_last_analysis
     * @param int $measurements_at_last_analysis Number of measurements at last analysis
     * @return $this
     */
    public function setMeasurementsAtLastAnalysis($measurements_at_last_analysis)
    {
        $this->container['measurements_at_last_analysis'] = $measurements_at_last_analysis;

        return $this;
    }

    /**
     * Gets last_unit_id
     * @return int
     */
    public function getLastUnitId()
    {
        return $this->container['last_unit_id'];
    }

    /**
     * Sets last_unit_id
     * @param int $last_unit_id ID of last Unit
     * @return $this
     */
    public function setLastUnitId($last_unit_id)
    {
        $this->container['last_unit_id'] = $last_unit_id;

        return $this;
    }

    /**
     * Gets last_original_unit_id
     * @return int
     */
    public function getLastOriginalUnitId()
    {
        return $this->container['last_original_unit_id'];
    }

    /**
     * Sets last_original_unit_id
     * @param int $last_original_unit_id ID of last original Unit
     * @return $this
     */
    public function setLastOriginalUnitId($last_original_unit_id)
    {
        $this->container['last_original_unit_id'] = $last_original_unit_id;

        return $this;
    }

    /**
     * Gets last_value
     * @return float
     */
    public function getLastValue()
    {
        return $this->container['last_value'];
    }

    /**
     * Sets last_value
     * @param float $last_value Last Value
     * @return $this
     */
    public function setLastValue($last_value)
    {
        $this->container['last_value'] = $last_value;

        return $this;
    }

    /**
     * Gets last_original_value
     * @return int
     */
    public function getLastOriginalValue()
    {
        return $this->container['last_original_value'];
    }

    /**
     * Sets last_original_value
     * @param int $last_original_value Last original value which is stored
     * @return $this
     */
    public function setLastOriginalValue($last_original_value)
    {
        $this->container['last_original_value'] = $last_original_value;

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
     * @param int $number_of_correlations Number of correlations for this variable
     * @return $this
     */
    public function setNumberOfCorrelations($number_of_correlations)
    {
        $this->container['number_of_correlations'] = $number_of_correlations;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * Gets last_successful_update_time
     * @return \DateTime
     */
    public function getLastSuccessfulUpdateTime()
    {
        return $this->container['last_successful_update_time'];
    }

    /**
     * Sets last_successful_update_time
     * @param \DateTime $last_successful_update_time When this variable or its settings were last updated
     * @return $this
     */
    public function setLastSuccessfulUpdateTime($last_successful_update_time)
    {
        $this->container['last_successful_update_time'] = $last_successful_update_time;

        return $this;
    }

    /**
     * Gets standard_deviation
     * @return float
     */
    public function getStandardDeviation()
    {
        return $this->container['standard_deviation'];
    }

    /**
     * Sets standard_deviation
     * @param float $standard_deviation Standard deviation
     * @return $this
     */
    public function setStandardDeviation($standard_deviation)
    {
        $this->container['standard_deviation'] = $standard_deviation;

        return $this;
    }

    /**
     * Gets variance
     * @return float
     */
    public function getVariance()
    {
        return $this->container['variance'];
    }

    /**
     * Sets variance
     * @param float $variance Variance
     * @return $this
     */
    public function setVariance($variance)
    {
        $this->container['variance'] = $variance;

        return $this;
    }

    /**
     * Gets minimum_recorded_value
     * @return float
     */
    public function getMinimumRecordedValue()
    {
        return $this->container['minimum_recorded_value'];
    }

    /**
     * Sets minimum_recorded_value
     * @param float $minimum_recorded_value Minimum recorded value of this variable
     * @return $this
     */
    public function setMinimumRecordedValue($minimum_recorded_value)
    {
        $this->container['minimum_recorded_value'] = $minimum_recorded_value;

        return $this;
    }

    /**
     * Gets maximum_recorded_daily_value
     * @return float
     */
    public function getMaximumRecordedDailyValue()
    {
        return $this->container['maximum_recorded_daily_value'];
    }

    /**
     * Sets maximum_recorded_daily_value
     * @param float $maximum_recorded_daily_value Maximum recorded daily value of this variable
     * @return $this
     */
    public function setMaximumRecordedDailyValue($maximum_recorded_daily_value)
    {
        $this->container['maximum_recorded_daily_value'] = $maximum_recorded_daily_value;

        return $this;
    }

    /**
     * Gets mean
     * @return float
     */
    public function getMean()
    {
        return $this->container['mean'];
    }

    /**
     * Sets mean
     * @param float $mean Mean
     * @return $this
     */
    public function setMean($mean)
    {
        $this->container['mean'] = $mean;

        return $this;
    }

    /**
     * Gets median
     * @return float
     */
    public function getMedian()
    {
        return $this->container['median'];
    }

    /**
     * Sets median
     * @param float $median Median
     * @return $this
     */
    public function setMedian($median)
    {
        $this->container['median'] = $median;

        return $this;
    }

    /**
     * Gets most_common_unit_id
     * @return int
     */
    public function getMostCommonUnitId()
    {
        return $this->container['most_common_unit_id'];
    }

    /**
     * Sets most_common_unit_id
     * @param int $most_common_unit_id Most common Unit ID
     * @return $this
     */
    public function setMostCommonUnitId($most_common_unit_id)
    {
        $this->container['most_common_unit_id'] = $most_common_unit_id;

        return $this;
    }

    /**
     * Gets most_common_value
     * @return float
     */
    public function getMostCommonValue()
    {
        return $this->container['most_common_value'];
    }

    /**
     * Sets most_common_value
     * @param float $most_common_value Most common value
     * @return $this
     */
    public function setMostCommonValue($most_common_value)
    {
        $this->container['most_common_value'] = $most_common_value;

        return $this;
    }

    /**
     * Gets number_of_unique_daily_values
     * @return float
     */
    public function getNumberOfUniqueDailyValues()
    {
        return $this->container['number_of_unique_daily_values'];
    }

    /**
     * Sets number_of_unique_daily_values
     * @param float $number_of_unique_daily_values Number of unique daily values
     * @return $this
     */
    public function setNumberOfUniqueDailyValues($number_of_unique_daily_values)
    {
        $this->container['number_of_unique_daily_values'] = $number_of_unique_daily_values;

        return $this;
    }

    /**
     * Gets number_of_changes
     * @return int
     */
    public function getNumberOfChanges()
    {
        return $this->container['number_of_changes'];
    }

    /**
     * Sets number_of_changes
     * @param int $number_of_changes Number of changes
     * @return $this
     */
    public function setNumberOfChanges($number_of_changes)
    {
        $this->container['number_of_changes'] = $number_of_changes;

        return $this;
    }

    /**
     * Gets skewness
     * @return float
     */
    public function getSkewness()
    {
        return $this->container['skewness'];
    }

    /**
     * Sets skewness
     * @param float $skewness Skewness
     * @return $this
     */
    public function setSkewness($skewness)
    {
        $this->container['skewness'] = $skewness;

        return $this;
    }

    /**
     * Gets kurtosis
     * @return float
     */
    public function getKurtosis()
    {
        return $this->container['kurtosis'];
    }

    /**
     * Sets kurtosis
     * @param float $kurtosis Kurtosis
     * @return $this
     */
    public function setKurtosis($kurtosis)
    {
        $this->container['kurtosis'] = $kurtosis;

        return $this;
    }

    /**
     * Gets latitude
     * @return float
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param float $latitude Latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return float
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param float $longitude Longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location Location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets experiment_start_time
     * @return \DateTime
     */
    public function getExperimentStartTime()
    {
        return $this->container['experiment_start_time'];
    }

    /**
     * Sets experiment_start_time
     * @param \DateTime $experiment_start_time Earliest measurement start_time to be used in analysis. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format
     * @return $this
     */
    public function setExperimentStartTime($experiment_start_time)
    {
        $this->container['experiment_start_time'] = $experiment_start_time;

        return $this;
    }

    /**
     * Gets experiment_end_time
     * @return \DateTime
     */
    public function getExperimentEndTime()
    {
        return $this->container['experiment_end_time'];
    }

    /**
     * Sets experiment_end_time
     * @param \DateTime $experiment_end_time Latest measurement start_time to be used in analysis. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format
     * @return $this
     */
    public function setExperimentEndTime($experiment_end_time)
    {
        $this->container['experiment_end_time'] = $experiment_end_time;

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
     * @param \DateTime $created_at When the record was first created. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format
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
     * @param \DateTime $updated_at When the record in the database was last updated. Use UTC ISO 8601 \"YYYY-MM-DDThh:mm:ss\"  datetime format
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets outcome
     * @return bool
     */
    public function getOutcome()
    {
        return $this->container['outcome'];
    }

    /**
     * Sets outcome
     * @param bool $outcome Outcome variables (those with `outcome` == 1) are variables for which a human would generally want to identify the influencing factors.  These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables
     * @return $this
     */
    public function setOutcome($outcome)
    {
        $this->container['outcome'] = $outcome;

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
     * Gets earliest_source_time
     * @return int
     */
    public function getEarliestSourceTime()
    {
        return $this->container['earliest_source_time'];
    }

    /**
     * Sets earliest_source_time
     * @param int $earliest_source_time Earliest source time
     * @return $this
     */
    public function setEarliestSourceTime($earliest_source_time)
    {
        $this->container['earliest_source_time'] = $earliest_source_time;

        return $this;
    }

    /**
     * Gets latest_source_time
     * @return int
     */
    public function getLatestSourceTime()
    {
        return $this->container['latest_source_time'];
    }

    /**
     * Sets latest_source_time
     * @param int $latest_source_time Latest source time
     * @return $this
     */
    public function setLatestSourceTime($latest_source_time)
    {
        $this->container['latest_source_time'] = $latest_source_time;

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
     * Gets earliest_filling_time
     * @return int
     */
    public function getEarliestFillingTime()
    {
        return $this->container['earliest_filling_time'];
    }

    /**
     * Sets earliest_filling_time
     * @param int $earliest_filling_time Earliest filling time
     * @return $this
     */
    public function setEarliestFillingTime($earliest_filling_time)
    {
        $this->container['earliest_filling_time'] = $earliest_filling_time;

        return $this;
    }

    /**
     * Gets latest_filling_time
     * @return int
     */
    public function getLatestFillingTime()
    {
        return $this->container['latest_filling_time'];
    }

    /**
     * Sets latest_filling_time
     * @param int $latest_filling_time Latest filling time
     * @return $this
     */
    public function setLatestFillingTime($latest_filling_time)
    {
        $this->container['latest_filling_time'] = $latest_filling_time;

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


