<?php
/**
 * Summary
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Irisnet API
 *
 * Artificial Intelligence (AI) for image- and video-processing in real-time. This is an interactive documentation where you can quickly look up the endpoints and their schemas, while having the opportunity to try things out for yourself.  In the list below, you can see the available endpoints of the API, which can be expanded by clicking on them. Each expanded endpoint lists the request parameters (if available) and the request body (if available). The request body can list some example bodies and the schema, explaining each model in detail.  Additionally you'll find a 'Try it out' button that allows you to enter your custom parameters and custom body and execute that against the API. <b>Be sure to enter your license key to authorize the requests before using this documentation interactively.</b>  The responses section in the expanded endpoint lists the possible responses with their corresponding status codes. If you've executed an API call it will also show you the response from the server.  Underneath the endpoints you'll find the model schemas. These are the models used for the requests and responses. If you click on the right arrow, you can expand the model and get a description of the model and the model parameters. For nested models, you can keep clicking the right arrow for further details.  Clicking the link below the title at the top of this page opens the [OpenAPI specification](https://swagger.io/specification/) (OAS3) in JSON format. The OAS3 Spec allows the generation of clients in many programming languages. There are several free client generators available that can be used to get started easily.
 *
 * The version of the OpenAPI document: v2
 * Contact: info@irisnet.de
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Irisnet\API\Client\Model;

use \ArrayAccess;
use \Irisnet\API\Client\ObjectSerializer;

/**
 * Summary Class Doc Comment
 *
 * @category Class
 * @description Summarizing the result of the AI.
 * @package  Irisnet\API\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Summary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'brokenRulesCount' => 'int',
        'helpSuggested' => 'int',
        'severity' => 'int',
        'creditsConsumed' => 'int',
        'tags' => 'string[]',
        'rejectTags' => 'string[]',
        'rejectReasons' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'brokenRulesCount' => 'int32',
        'helpSuggested' => 'int32',
        'severity' => 'int32',
        'creditsConsumed' => 'int32',
        'tags' => null,
        'rejectTags' => null,
        'rejectReasons' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
		'brokenRulesCount' => false,
		'helpSuggested' => false,
		'severity' => false,
		'creditsConsumed' => false,
		'tags' => false,
		'rejectTags' => false,
		'rejectReasons' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'brokenRulesCount' => 'brokenRulesCount',
        'helpSuggested' => 'helpSuggested',
        'severity' => 'severity',
        'creditsConsumed' => 'creditsConsumed',
        'tags' => 'tags',
        'rejectTags' => 'rejectTags',
        'rejectReasons' => 'rejectReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'brokenRulesCount' => 'setBrokenRulesCount',
        'helpSuggested' => 'setHelpSuggested',
        'severity' => 'setSeverity',
        'creditsConsumed' => 'setCreditsConsumed',
        'tags' => 'setTags',
        'rejectTags' => 'setRejectTags',
        'rejectReasons' => 'setRejectReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'brokenRulesCount' => 'getBrokenRulesCount',
        'helpSuggested' => 'getHelpSuggested',
        'severity' => 'getSeverity',
        'creditsConsumed' => 'getCreditsConsumed',
        'tags' => 'getTags',
        'rejectTags' => 'getRejectTags',
        'rejectReasons' => 'getRejectReasons'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('brokenRulesCount', $data ?? [], null);
        $this->setIfExists('helpSuggested', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('creditsConsumed', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('rejectTags', $data ?? [], null);
        $this->setIfExists('rejectReasons', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status A simple status string that can be either _accept_ or _reject_.
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets brokenRulesCount
     *
     * @return int|null
     */
    public function getBrokenRulesCount()
    {
        return $this->container['brokenRulesCount'];
    }

    /**
     * Sets brokenRulesCount
     *
     * @param int|null $brokenRulesCount The amount of broken rules that are contained in the source media.
     *
     * @return self
     */
    public function setBrokenRulesCount($brokenRulesCount)
    {

        if (is_null($brokenRulesCount)) {
            throw new \InvalidArgumentException('non-nullable brokenRulesCount cannot be null');
        }

        $this->container['brokenRulesCount'] = $brokenRulesCount;

        return $this;
    }

    /**
     * Gets helpSuggested
     *
     * @return int|null
     */
    public function getHelpSuggested()
    {
        return $this->container['helpSuggested'];
    }

    /**
     * Sets helpSuggested
     *
     * @param int|null $helpSuggested In cases where the AI is uncertain, this attribute is set (1), indication that it could be useful to double check the source media by a human.
     *
     * @return self
     */
    public function setHelpSuggested($helpSuggested)
    {

        if (is_null($helpSuggested)) {
            throw new \InvalidArgumentException('non-nullable helpSuggested cannot be null');
        }

        $this->container['helpSuggested'] = $helpSuggested;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return int|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param int|null $severity The highest severity value found amongst the broken rules.
     *
     * @return self
     */
    public function setSeverity($severity)
    {

        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }

        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets creditsConsumed
     *
     * @return int|null
     */
    public function getCreditsConsumed()
    {
        return $this->container['creditsConsumed'];
    }

    /**
     * Sets creditsConsumed
     *
     * @param int|null $creditsConsumed The amount of credits that was consumed for the check.
     *
     * @return self
     */
    public function setCreditsConsumed($creditsConsumed)
    {

        if (is_null($creditsConsumed)) {
            throw new \InvalidArgumentException('non-nullable creditsConsumed cannot be null');
        }

        $this->container['creditsConsumed'] = $creditsConsumed;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags A list of classification names that were found.
     *
     * @return self
     */
    public function setTags($tags)
    {



        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }

        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets rejectTags
     *
     * @return string[]|null
     */
    public function getRejectTags()
    {
        return $this->container['rejectTags'];
    }

    /**
     * Sets rejectTags
     *
     * @param string[]|null $rejectTags A list of classification names that caused a rule to be broken.
     *
     * @return self
     */
    public function setRejectTags($rejectTags)
    {



        if (is_null($rejectTags)) {
            throw new \InvalidArgumentException('non-nullable rejectTags cannot be null');
        }

        $this->container['rejectTags'] = $rejectTags;

        return $this;
    }

    /**
     * Gets rejectReasons
     *
     * @return string[]|null
     */
    public function getRejectReasons()
    {
        return $this->container['rejectReasons'];
    }

    /**
     * Sets rejectReasons
     *
     * @param string[]|null $rejectReasons The names of the classification groups that caused a rule to be broken.
     *
     * @return self
     */
    public function setRejectReasons($rejectReasons)
    {



        if (is_null($rejectReasons)) {
            throw new \InvalidArgumentException('non-nullable rejectReasons cannot be null');
        }

        $this->container['rejectReasons'] = $rejectReasons;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

