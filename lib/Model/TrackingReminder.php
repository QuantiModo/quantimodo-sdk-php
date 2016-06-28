<?php
/**
 * TrackingReminder
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
 * TrackingReminder Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TrackingReminder implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TrackingReminder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'client_id' => 'string',
        'user_id' => 'int',
        'variable_id' => 'int',
        'default_value' => 'float',
        'reminder_start_time' => 'string',
        'reminder_end_time' => 'string',
        'reminder_sound' => 'string',
        'reminder_frequency' => 'int',
        'pop_up' => 'bool',
        'sms' => 'bool',
        'email' => 'bool',
        'notification_bar' => 'bool',
        'last_reminded' => '\DateTime',
        'last_tracked' => '\DateTime',
        'first_daily_reminder_time' => 'string',
        'second_daily_reminder_time' => 'string',
        'third_daily_reminder_time' => 'string',
        'start_tracking_date' => 'string',
        'stop_tracking_date' => 'string',
        'updated_at' => '\DateTime',
        'variable_name' => 'string',
        'variable_category_name' => 'string',
        'abbreviated_unit_name' => 'string',
        'combination_operation' => 'string'
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
        'client_id' => 'clientId',
        'user_id' => 'userId',
        'variable_id' => 'variableId',
        'default_value' => 'defaultValue',
        'reminder_start_time' => 'reminderStartTime',
        'reminder_end_time' => 'reminderEndTime',
        'reminder_sound' => 'reminderSound',
        'reminder_frequency' => 'reminderFrequency',
        'pop_up' => 'popUp',
        'sms' => 'sms',
        'email' => 'email',
        'notification_bar' => 'notificationBar',
        'last_reminded' => 'lastReminded',
        'last_tracked' => 'lastTracked',
        'first_daily_reminder_time' => 'firstDailyReminderTime',
        'second_daily_reminder_time' => 'secondDailyReminderTime',
        'third_daily_reminder_time' => 'thirdDailyReminderTime',
        'start_tracking_date' => 'startTrackingDate',
        'stop_tracking_date' => 'stopTrackingDate',
        'updated_at' => 'updatedAt',
        'variable_name' => 'variableName',
        'variable_category_name' => 'variableCategoryName',
        'abbreviated_unit_name' => 'abbreviatedUnitName',
        'combination_operation' => 'combinationOperation'
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
        'client_id' => 'setClientId',
        'user_id' => 'setUserId',
        'variable_id' => 'setVariableId',
        'default_value' => 'setDefaultValue',
        'reminder_start_time' => 'setReminderStartTime',
        'reminder_end_time' => 'setReminderEndTime',
        'reminder_sound' => 'setReminderSound',
        'reminder_frequency' => 'setReminderFrequency',
        'pop_up' => 'setPopUp',
        'sms' => 'setSms',
        'email' => 'setEmail',
        'notification_bar' => 'setNotificationBar',
        'last_reminded' => 'setLastReminded',
        'last_tracked' => 'setLastTracked',
        'first_daily_reminder_time' => 'setFirstDailyReminderTime',
        'second_daily_reminder_time' => 'setSecondDailyReminderTime',
        'third_daily_reminder_time' => 'setThirdDailyReminderTime',
        'start_tracking_date' => 'setStartTrackingDate',
        'stop_tracking_date' => 'setStopTrackingDate',
        'updated_at' => 'setUpdatedAt',
        'variable_name' => 'setVariableName',
        'variable_category_name' => 'setVariableCategoryName',
        'abbreviated_unit_name' => 'setAbbreviatedUnitName',
        'combination_operation' => 'setCombinationOperation'
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
        'client_id' => 'getClientId',
        'user_id' => 'getUserId',
        'variable_id' => 'getVariableId',
        'default_value' => 'getDefaultValue',
        'reminder_start_time' => 'getReminderStartTime',
        'reminder_end_time' => 'getReminderEndTime',
        'reminder_sound' => 'getReminderSound',
        'reminder_frequency' => 'getReminderFrequency',
        'pop_up' => 'getPopUp',
        'sms' => 'getSms',
        'email' => 'getEmail',
        'notification_bar' => 'getNotificationBar',
        'last_reminded' => 'getLastReminded',
        'last_tracked' => 'getLastTracked',
        'first_daily_reminder_time' => 'getFirstDailyReminderTime',
        'second_daily_reminder_time' => 'getSecondDailyReminderTime',
        'third_daily_reminder_time' => 'getThirdDailyReminderTime',
        'start_tracking_date' => 'getStartTrackingDate',
        'stop_tracking_date' => 'getStopTrackingDate',
        'updated_at' => 'getUpdatedAt',
        'variable_name' => 'getVariableName',
        'variable_category_name' => 'getVariableCategoryName',
        'abbreviated_unit_name' => 'getAbbreviatedUnitName',
        'combination_operation' => 'getCombinationOperation'
    );

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
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['variable_id'] = isset($data['variable_id']) ? $data['variable_id'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['reminder_start_time'] = isset($data['reminder_start_time']) ? $data['reminder_start_time'] : null;
        $this->container['reminder_end_time'] = isset($data['reminder_end_time']) ? $data['reminder_end_time'] : null;
        $this->container['reminder_sound'] = isset($data['reminder_sound']) ? $data['reminder_sound'] : null;
        $this->container['reminder_frequency'] = isset($data['reminder_frequency']) ? $data['reminder_frequency'] : null;
        $this->container['pop_up'] = isset($data['pop_up']) ? $data['pop_up'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['notification_bar'] = isset($data['notification_bar']) ? $data['notification_bar'] : null;
        $this->container['last_reminded'] = isset($data['last_reminded']) ? $data['last_reminded'] : null;
        $this->container['last_tracked'] = isset($data['last_tracked']) ? $data['last_tracked'] : null;
        $this->container['first_daily_reminder_time'] = isset($data['first_daily_reminder_time']) ? $data['first_daily_reminder_time'] : null;
        $this->container['second_daily_reminder_time'] = isset($data['second_daily_reminder_time']) ? $data['second_daily_reminder_time'] : null;
        $this->container['third_daily_reminder_time'] = isset($data['third_daily_reminder_time']) ? $data['third_daily_reminder_time'] : null;
        $this->container['start_tracking_date'] = isset($data['start_tracking_date']) ? $data['start_tracking_date'] : null;
        $this->container['stop_tracking_date'] = isset($data['stop_tracking_date']) ? $data['stop_tracking_date'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['variable_category_name'] = isset($data['variable_category_name']) ? $data['variable_category_name'] : null;
        $this->container['abbreviated_unit_name'] = isset($data['abbreviated_unit_name']) ? $data['abbreviated_unit_name'] : null;
        $this->container['combination_operation'] = isset($data['combination_operation']) ? $data['combination_operation'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['variable_id'] === null) {
            $invalid_properties[] = "'variable_id' can't be null";
        }
        $allowed_values = array("MEAN", "SUM");
        if (!in_array($this->container['combination_operation'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'combination_operation', must be one of #{allowed_values}.";
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
        if ($this->container['variable_id'] === null) {
            return false;
        }
        $allowed_values = array("MEAN", "SUM");
        if (!in_array($this->container['combination_operation'], $allowed_values)) {
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
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id clientId
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

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
     * @param int $user_id ID of User
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param int $variable_id Id for the variable to be tracked
     * @return $this
     */
    public function setVariableId($variable_id)
    {
        $this->container['variable_id'] = $variable_id;

        return $this;
    }

    /**
     * Gets default_value
     * @return float
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     * @param float $default_value Default value to use for the measurement when tracking
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets reminder_start_time
     * @return string
     */
    public function getReminderStartTime()
    {
        return $this->container['reminder_start_time'];
    }

    /**
     * Sets reminder_start_time
     * @param string $reminder_start_time Earliest time of day at which reminders should appear in UTC HH:MM:SS format
     * @return $this
     */
    public function setReminderStartTime($reminder_start_time)
    {
        $this->container['reminder_start_time'] = $reminder_start_time;

        return $this;
    }

    /**
     * Gets reminder_end_time
     * @return string
     */
    public function getReminderEndTime()
    {
        return $this->container['reminder_end_time'];
    }

    /**
     * Sets reminder_end_time
     * @param string $reminder_end_time Latest time of day at which reminders should appear in UTC HH:MM:SS format
     * @return $this
     */
    public function setReminderEndTime($reminder_end_time)
    {
        $this->container['reminder_end_time'] = $reminder_end_time;

        return $this;
    }

    /**
     * Gets reminder_sound
     * @return string
     */
    public function getReminderSound()
    {
        return $this->container['reminder_sound'];
    }

    /**
     * Sets reminder_sound
     * @param string $reminder_sound String identifier for the sound to accompany the reminder
     * @return $this
     */
    public function setReminderSound($reminder_sound)
    {
        $this->container['reminder_sound'] = $reminder_sound;

        return $this;
    }

    /**
     * Gets reminder_frequency
     * @return int
     */
    public function getReminderFrequency()
    {
        return $this->container['reminder_frequency'];
    }

    /**
     * Sets reminder_frequency
     * @param int $reminder_frequency Number of seconds between one reminder and the next
     * @return $this
     */
    public function setReminderFrequency($reminder_frequency)
    {
        $this->container['reminder_frequency'] = $reminder_frequency;

        return $this;
    }

    /**
     * Gets pop_up
     * @return bool
     */
    public function getPopUp()
    {
        return $this->container['pop_up'];
    }

    /**
     * Sets pop_up
     * @param bool $pop_up True if the reminders should appear as a popup notification
     * @return $this
     */
    public function setPopUp($pop_up)
    {
        $this->container['pop_up'] = $pop_up;

        return $this;
    }

    /**
     * Gets sms
     * @return bool
     */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
     * Sets sms
     * @param bool $sms True if the reminders should be delivered via SMS
     * @return $this
     */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;

        return $this;
    }

    /**
     * Gets email
     * @return bool
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param bool $email True if the reminders should be delivered via email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets notification_bar
     * @return bool
     */
    public function getNotificationBar()
    {
        return $this->container['notification_bar'];
    }

    /**
     * Sets notification_bar
     * @param bool $notification_bar True if the reminders should appear in the notification bar
     * @return $this
     */
    public function setNotificationBar($notification_bar)
    {
        $this->container['notification_bar'] = $notification_bar;

        return $this;
    }

    /**
     * Gets last_reminded
     * @return \DateTime
     */
    public function getLastReminded()
    {
        return $this->container['last_reminded'];
    }

    /**
     * Sets last_reminded
     * @param \DateTime $last_reminded ISO 8601 timestamp for the last time a reminder was sent
     * @return $this
     */
    public function setLastReminded($last_reminded)
    {
        $this->container['last_reminded'] = $last_reminded;

        return $this;
    }

    /**
     * Gets last_tracked
     * @return \DateTime
     */
    public function getLastTracked()
    {
        return $this->container['last_tracked'];
    }

    /**
     * Sets last_tracked
     * @param \DateTime $last_tracked ISO 8601 timestamp for the last time a measurement was received for this user and variable
     * @return $this
     */
    public function setLastTracked($last_tracked)
    {
        $this->container['last_tracked'] = $last_tracked;

        return $this;
    }

    /**
     * Gets first_daily_reminder_time
     * @return string
     */
    public function getFirstDailyReminderTime()
    {
        return $this->container['first_daily_reminder_time'];
    }

    /**
     * Sets first_daily_reminder_time
     * @param string $first_daily_reminder_time Specific first time of day that the user should be reminded to track in UTC HH:MM:SS format
     * @return $this
     */
    public function setFirstDailyReminderTime($first_daily_reminder_time)
    {
        $this->container['first_daily_reminder_time'] = $first_daily_reminder_time;

        return $this;
    }

    /**
     * Gets second_daily_reminder_time
     * @return string
     */
    public function getSecondDailyReminderTime()
    {
        return $this->container['second_daily_reminder_time'];
    }

    /**
     * Sets second_daily_reminder_time
     * @param string $second_daily_reminder_time Specific second time of day that the user should be reminded to track in UTC HH:MM:SS format
     * @return $this
     */
    public function setSecondDailyReminderTime($second_daily_reminder_time)
    {
        $this->container['second_daily_reminder_time'] = $second_daily_reminder_time;

        return $this;
    }

    /**
     * Gets third_daily_reminder_time
     * @return string
     */
    public function getThirdDailyReminderTime()
    {
        return $this->container['third_daily_reminder_time'];
    }

    /**
     * Sets third_daily_reminder_time
     * @param string $third_daily_reminder_time Specific third time of day that the user should be reminded to track in UTC HH:MM:SS format
     * @return $this
     */
    public function setThirdDailyReminderTime($third_daily_reminder_time)
    {
        $this->container['third_daily_reminder_time'] = $third_daily_reminder_time;

        return $this;
    }

    /**
     * Gets start_tracking_date
     * @return string
     */
    public function getStartTrackingDate()
    {
        return $this->container['start_tracking_date'];
    }

    /**
     * Sets start_tracking_date
     * @param string $start_tracking_date Earliest date on which the user should be reminded to track in YYYY-MM-DD format
     * @return $this
     */
    public function setStartTrackingDate($start_tracking_date)
    {
        $this->container['start_tracking_date'] = $start_tracking_date;

        return $this;
    }

    /**
     * Gets stop_tracking_date
     * @return string
     */
    public function getStopTrackingDate()
    {
        return $this->container['stop_tracking_date'];
    }

    /**
     * Sets stop_tracking_date
     * @param string $stop_tracking_date Latest date on which the user should be reminded to track in YYYY-MM-DD format
     * @return $this
     */
    public function setStopTrackingDate($stop_tracking_date)
    {
        $this->container['stop_tracking_date'] = $stop_tracking_date;

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
     * @param \DateTime $updated_at When the record in the database was last updated. Use ISO 8601 datetime format. Time zone should be UTC and not local.
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string $variable_name Name of the variable to be used when sending measurements
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

        return $this;
    }

    /**
     * Gets variable_category_name
     * @return string
     */
    public function getVariableCategoryName()
    {
        return $this->container['variable_category_name'];
    }

    /**
     * Sets variable_category_name
     * @param string $variable_category_name Name of the variable category to be used when sending measurements
     * @return $this
     */
    public function setVariableCategoryName($variable_category_name)
    {
        $this->container['variable_category_name'] = $variable_category_name;

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
     * @param string $abbreviated_unit_name Abbreviated name of the unit to be used when sending measurements
     * @return $this
     */
    public function setAbbreviatedUnitName($abbreviated_unit_name)
    {
        $this->container['abbreviated_unit_name'] = $abbreviated_unit_name;

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
     * @param string $combination_operation The way multiple measurements are aggregated over time
     * @return $this
     */
    public function setCombinationOperation($combination_operation)
    {
        $allowed_values = array('MEAN', 'SUM');
        if (!in_array($combination_operation, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'combination_operation', must be one of 'MEAN', 'SUM'");
        }
        $this->container['combination_operation'] = $combination_operation;

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
