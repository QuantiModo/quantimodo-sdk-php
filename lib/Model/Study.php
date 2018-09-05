<?php
/**
 * Study
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.112511
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;
use \QuantiModo\Client\ObjectSerializer;

/**
 * Study Class Doc Comment
 *
 * @category Class
 * @description A study analyzes the relationship between a predictor variable like gluten-intake and an outcome of interest such as overall mood.
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Study implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Study';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'user_id' => 'string',
        'study_id' => 'string',
        'cause_variable' => '\QuantiModo\Client\Model\Variable',
        'cause_variable_name' => 'string',
        'study_charts' => '\QuantiModo\Client\Model\StudyCharts',
        'effect_variable' => '\QuantiModo\Client\Model\Variable',
        'effect_variable_name' => 'string',
        'participant_instructions' => '\QuantiModo\Client\Model\ParticipantInstruction',
        'statistics' => '\QuantiModo\Client\Model\Correlation',
        'study_card' => '\QuantiModo\Client\Model\Card',
        'study_html' => '\QuantiModo\Client\Model\StudyHtml',
        'study_images' => '\QuantiModo\Client\Model\StudyImages',
        'study_links' => '\QuantiModo\Client\Model\StudyLinks',
        'study_sharing' => '\QuantiModo\Client\Model\StudySharing',
        'study_text' => '\QuantiModo\Client\Model\StudyText',
        'study_votes' => '\QuantiModo\Client\Model\StudyVotes',
        'joined' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'user_id' => null,
        'study_id' => null,
        'cause_variable' => null,
        'cause_variable_name' => null,
        'study_charts' => null,
        'effect_variable' => null,
        'effect_variable_name' => null,
        'participant_instructions' => null,
        'statistics' => null,
        'study_card' => null,
        'study_html' => null,
        'study_images' => null,
        'study_links' => null,
        'study_sharing' => null,
        'study_text' => null,
        'study_votes' => null,
        'joined' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'user_id' => 'userId',
        'study_id' => 'studyId',
        'cause_variable' => 'causeVariable',
        'cause_variable_name' => 'causeVariableName',
        'study_charts' => 'studyCharts',
        'effect_variable' => 'effectVariable',
        'effect_variable_name' => 'effectVariableName',
        'participant_instructions' => 'participantInstructions',
        'statistics' => 'statistics',
        'study_card' => 'studyCard',
        'study_html' => 'studyHtml',
        'study_images' => 'studyImages',
        'study_links' => 'studyLinks',
        'study_sharing' => 'studySharing',
        'study_text' => 'studyText',
        'study_votes' => 'studyVotes',
        'joined' => 'joined'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'user_id' => 'setUserId',
        'study_id' => 'setStudyId',
        'cause_variable' => 'setCauseVariable',
        'cause_variable_name' => 'setCauseVariableName',
        'study_charts' => 'setStudyCharts',
        'effect_variable' => 'setEffectVariable',
        'effect_variable_name' => 'setEffectVariableName',
        'participant_instructions' => 'setParticipantInstructions',
        'statistics' => 'setStatistics',
        'study_card' => 'setStudyCard',
        'study_html' => 'setStudyHtml',
        'study_images' => 'setStudyImages',
        'study_links' => 'setStudyLinks',
        'study_sharing' => 'setStudySharing',
        'study_text' => 'setStudyText',
        'study_votes' => 'setStudyVotes',
        'joined' => 'setJoined'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'user_id' => 'getUserId',
        'study_id' => 'getStudyId',
        'cause_variable' => 'getCauseVariable',
        'cause_variable_name' => 'getCauseVariableName',
        'study_charts' => 'getStudyCharts',
        'effect_variable' => 'getEffectVariable',
        'effect_variable_name' => 'getEffectVariableName',
        'participant_instructions' => 'getParticipantInstructions',
        'statistics' => 'getStatistics',
        'study_card' => 'getStudyCard',
        'study_html' => 'getStudyHtml',
        'study_images' => 'getStudyImages',
        'study_links' => 'getStudyLinks',
        'study_sharing' => 'getStudySharing',
        'study_text' => 'getStudyText',
        'study_votes' => 'getStudyVotes',
        'joined' => 'getJoined'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['study_id'] = isset($data['study_id']) ? $data['study_id'] : null;
        $this->container['cause_variable'] = isset($data['cause_variable']) ? $data['cause_variable'] : null;
        $this->container['cause_variable_name'] = isset($data['cause_variable_name']) ? $data['cause_variable_name'] : null;
        $this->container['study_charts'] = isset($data['study_charts']) ? $data['study_charts'] : null;
        $this->container['effect_variable'] = isset($data['effect_variable']) ? $data['effect_variable'] : null;
        $this->container['effect_variable_name'] = isset($data['effect_variable_name']) ? $data['effect_variable_name'] : null;
        $this->container['participant_instructions'] = isset($data['participant_instructions']) ? $data['participant_instructions'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['study_card'] = isset($data['study_card']) ? $data['study_card'] : null;
        $this->container['study_html'] = isset($data['study_html']) ? $data['study_html'] : null;
        $this->container['study_images'] = isset($data['study_images']) ? $data['study_images'] : null;
        $this->container['study_links'] = isset($data['study_links']) ? $data['study_links'] : null;
        $this->container['study_sharing'] = isset($data['study_sharing']) ? $data['study_sharing'] : null;
        $this->container['study_text'] = isset($data['study_text']) ? $data['study_text'] : null;
        $this->container['study_votes'] = isset($data['study_votes']) ? $data['study_votes'] : null;
        $this->container['joined'] = isset($data['joined']) ? $data['joined'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Ex: population, cohort, or individual
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id The user id of the principal investigator or subject if an individual studies
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets study_id
     *
     * @return string
     */
    public function getStudyId()
    {
        return $this->container['study_id'];
    }

    /**
     * Sets study_id
     *
     * @param string $study_id ID of the cohort study which is necessary to allow participants to join
     *
     * @return $this
     */
    public function setStudyId($study_id)
    {
        $this->container['study_id'] = $study_id;

        return $this;
    }

    /**
     * Gets cause_variable
     *
     * @return \QuantiModo\Client\Model\Variable
     */
    public function getCauseVariable()
    {
        return $this->container['cause_variable'];
    }

    /**
     * Sets cause_variable
     *
     * @param \QuantiModo\Client\Model\Variable $cause_variable cause_variable
     *
     * @return $this
     */
    public function setCauseVariable($cause_variable)
    {
        $this->container['cause_variable'] = $cause_variable;

        return $this;
    }

    /**
     * Gets cause_variable_name
     *
     * @return string
     */
    public function getCauseVariableName()
    {
        return $this->container['cause_variable_name'];
    }

    /**
     * Sets cause_variable_name
     *
     * @param string $cause_variable_name Ex: Sleep Quality
     *
     * @return $this
     */
    public function setCauseVariableName($cause_variable_name)
    {
        $this->container['cause_variable_name'] = $cause_variable_name;

        return $this;
    }

    /**
     * Gets study_charts
     *
     * @return \QuantiModo\Client\Model\StudyCharts
     */
    public function getStudyCharts()
    {
        return $this->container['study_charts'];
    }

    /**
     * Sets study_charts
     *
     * @param \QuantiModo\Client\Model\StudyCharts $study_charts study_charts
     *
     * @return $this
     */
    public function setStudyCharts($study_charts)
    {
        $this->container['study_charts'] = $study_charts;

        return $this;
    }

    /**
     * Gets effect_variable
     *
     * @return \QuantiModo\Client\Model\Variable
     */
    public function getEffectVariable()
    {
        return $this->container['effect_variable'];
    }

    /**
     * Sets effect_variable
     *
     * @param \QuantiModo\Client\Model\Variable $effect_variable effect_variable
     *
     * @return $this
     */
    public function setEffectVariable($effect_variable)
    {
        $this->container['effect_variable'] = $effect_variable;

        return $this;
    }

    /**
     * Gets effect_variable_name
     *
     * @return string
     */
    public function getEffectVariableName()
    {
        return $this->container['effect_variable_name'];
    }

    /**
     * Sets effect_variable_name
     *
     * @param string $effect_variable_name Ex: Overall Mood
     *
     * @return $this
     */
    public function setEffectVariableName($effect_variable_name)
    {
        $this->container['effect_variable_name'] = $effect_variable_name;

        return $this;
    }

    /**
     * Gets participant_instructions
     *
     * @return \QuantiModo\Client\Model\ParticipantInstruction
     */
    public function getParticipantInstructions()
    {
        return $this->container['participant_instructions'];
    }

    /**
     * Sets participant_instructions
     *
     * @param \QuantiModo\Client\Model\ParticipantInstruction $participant_instructions participant_instructions
     *
     * @return $this
     */
    public function setParticipantInstructions($participant_instructions)
    {
        $this->container['participant_instructions'] = $participant_instructions;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \QuantiModo\Client\Model\Correlation
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \QuantiModo\Client\Model\Correlation $statistics statistics
     *
     * @return $this
     */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;

        return $this;
    }

    /**
     * Gets study_card
     *
     * @return \QuantiModo\Client\Model\Card
     */
    public function getStudyCard()
    {
        return $this->container['study_card'];
    }

    /**
     * Sets study_card
     *
     * @param \QuantiModo\Client\Model\Card $study_card Contains a summary, images, sharing buttons, and links
     *
     * @return $this
     */
    public function setStudyCard($study_card)
    {
        $this->container['study_card'] = $study_card;

        return $this;
    }

    /**
     * Gets study_html
     *
     * @return \QuantiModo\Client\Model\StudyHtml
     */
    public function getStudyHtml()
    {
        return $this->container['study_html'];
    }

    /**
     * Sets study_html
     *
     * @param \QuantiModo\Client\Model\StudyHtml $study_html study_html
     *
     * @return $this
     */
    public function setStudyHtml($study_html)
    {
        $this->container['study_html'] = $study_html;

        return $this;
    }

    /**
     * Gets study_images
     *
     * @return \QuantiModo\Client\Model\StudyImages
     */
    public function getStudyImages()
    {
        return $this->container['study_images'];
    }

    /**
     * Sets study_images
     *
     * @param \QuantiModo\Client\Model\StudyImages $study_images study_images
     *
     * @return $this
     */
    public function setStudyImages($study_images)
    {
        $this->container['study_images'] = $study_images;

        return $this;
    }

    /**
     * Gets study_links
     *
     * @return \QuantiModo\Client\Model\StudyLinks
     */
    public function getStudyLinks()
    {
        return $this->container['study_links'];
    }

    /**
     * Sets study_links
     *
     * @param \QuantiModo\Client\Model\StudyLinks $study_links study_links
     *
     * @return $this
     */
    public function setStudyLinks($study_links)
    {
        $this->container['study_links'] = $study_links;

        return $this;
    }

    /**
     * Gets study_sharing
     *
     * @return \QuantiModo\Client\Model\StudySharing
     */
    public function getStudySharing()
    {
        return $this->container['study_sharing'];
    }

    /**
     * Sets study_sharing
     *
     * @param \QuantiModo\Client\Model\StudySharing $study_sharing study_sharing
     *
     * @return $this
     */
    public function setStudySharing($study_sharing)
    {
        $this->container['study_sharing'] = $study_sharing;

        return $this;
    }

    /**
     * Gets study_text
     *
     * @return \QuantiModo\Client\Model\StudyText
     */
    public function getStudyText()
    {
        return $this->container['study_text'];
    }

    /**
     * Sets study_text
     *
     * @param \QuantiModo\Client\Model\StudyText $study_text study_text
     *
     * @return $this
     */
    public function setStudyText($study_text)
    {
        $this->container['study_text'] = $study_text;

        return $this;
    }

    /**
     * Gets study_votes
     *
     * @return \QuantiModo\Client\Model\StudyVotes
     */
    public function getStudyVotes()
    {
        return $this->container['study_votes'];
    }

    /**
     * Sets study_votes
     *
     * @param \QuantiModo\Client\Model\StudyVotes $study_votes study_votes
     *
     * @return $this
     */
    public function setStudyVotes($study_votes)
    {
        $this->container['study_votes'] = $study_votes;

        return $this;
    }

    /**
     * Gets joined
     *
     * @return bool
     */
    public function getJoined()
    {
        return $this->container['joined'];
    }

    /**
     * Sets joined
     *
     * @param bool $joined True if you are sharing your data with this study
     *
     * @return $this
     */
    public function setJoined($joined)
    {
        $this->container['joined'] = $joined;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


