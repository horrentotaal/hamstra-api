<?php
/**
 * SystemThreadingCancellationToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  Horrentotaal\HamstraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hamstra API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Horrentotaal\HamstraApi\Model;

use \ArrayAccess;
use \Horrentotaal\HamstraApi\ObjectSerializer;

/**
 * SystemThreadingCancellationToken Class Doc Comment
 *
 * @category Class
 * @package  Horrentotaal\HamstraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemThreadingCancellationToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'System.Threading.CancellationToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_cancellation_requested' => 'bool',
        'can_be_canceled' => 'bool',
        'wait_handle' => '\Horrentotaal\HamstraApi\Model\SystemThreadingWaitHandle'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_cancellation_requested' => null,
        'can_be_canceled' => null,
        'wait_handle' => null
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
        'is_cancellation_requested' => 'isCancellationRequested',
        'can_be_canceled' => 'canBeCanceled',
        'wait_handle' => 'waitHandle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_cancellation_requested' => 'setIsCancellationRequested',
        'can_be_canceled' => 'setCanBeCanceled',
        'wait_handle' => 'setWaitHandle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_cancellation_requested' => 'getIsCancellationRequested',
        'can_be_canceled' => 'getCanBeCanceled',
        'wait_handle' => 'getWaitHandle'
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
        $this->container['is_cancellation_requested'] = isset($data['is_cancellation_requested']) ? $data['is_cancellation_requested'] : null;
        $this->container['can_be_canceled'] = isset($data['can_be_canceled']) ? $data['can_be_canceled'] : null;
        $this->container['wait_handle'] = isset($data['wait_handle']) ? $data['wait_handle'] : null;
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
     * Gets is_cancellation_requested
     *
     * @return bool
     */
    public function getIsCancellationRequested()
    {
        return $this->container['is_cancellation_requested'];
    }

    /**
     * Sets is_cancellation_requested
     *
     * @param bool $is_cancellation_requested is_cancellation_requested
     *
     * @return $this
     */
    public function setIsCancellationRequested($is_cancellation_requested)
    {
        $this->container['is_cancellation_requested'] = $is_cancellation_requested;

        return $this;
    }

    /**
     * Gets can_be_canceled
     *
     * @return bool
     */
    public function getCanBeCanceled()
    {
        return $this->container['can_be_canceled'];
    }

    /**
     * Sets can_be_canceled
     *
     * @param bool $can_be_canceled can_be_canceled
     *
     * @return $this
     */
    public function setCanBeCanceled($can_be_canceled)
    {
        $this->container['can_be_canceled'] = $can_be_canceled;

        return $this;
    }

    /**
     * Gets wait_handle
     *
     * @return \Horrentotaal\HamstraApi\Model\SystemThreadingWaitHandle
     */
    public function getWaitHandle()
    {
        return $this->container['wait_handle'];
    }

    /**
     * Sets wait_handle
     *
     * @param \Horrentotaal\HamstraApi\Model\SystemThreadingWaitHandle $wait_handle wait_handle
     *
     * @return $this
     */
    public function setWaitHandle($wait_handle)
    {
        $this->container['wait_handle'] = $wait_handle;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


