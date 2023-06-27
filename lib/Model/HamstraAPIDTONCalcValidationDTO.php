<?php
/**
 * HamstraAPIDTONCalcValidationDTO
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
 * HamstraAPIDTONCalcValidationDTO Class Doc Comment
 *
 * @category Class
 * @package  Horrentotaal\HamstraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HamstraAPIDTONCalcValidationDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hamstra_API.DTO.NCalcValidationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'condition' => 'string',
        'validation' => 'string',
        'default_value' => 'string',
        'scripted_value' => 'string',
        'override_value' => 'string',
        'product_option_id' => 'int',
        'product_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'condition' => null,
        'validation' => null,
        'default_value' => null,
        'scripted_value' => null,
        'override_value' => null,
        'product_option_id' => 'int32',
        'product_id' => 'int32'
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
        'condition' => 'condition',
        'validation' => 'validation',
        'default_value' => 'defaultValue',
        'scripted_value' => 'scriptedValue',
        'override_value' => 'overrideValue',
        'product_option_id' => 'productOptionId',
        'product_id' => 'productId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'validation' => 'setValidation',
        'default_value' => 'setDefaultValue',
        'scripted_value' => 'setScriptedValue',
        'override_value' => 'setOverrideValue',
        'product_option_id' => 'setProductOptionId',
        'product_id' => 'setProductId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'validation' => 'getValidation',
        'default_value' => 'getDefaultValue',
        'scripted_value' => 'getScriptedValue',
        'override_value' => 'getOverrideValue',
        'product_option_id' => 'getProductOptionId',
        'product_id' => 'getProductId'
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['scripted_value'] = isset($data['scripted_value']) ? $data['scripted_value'] : null;
        $this->container['override_value'] = isset($data['override_value']) ? $data['override_value'] : null;
        $this->container['product_option_id'] = isset($data['product_option_id']) ? $data['product_option_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
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
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets validation
     *
     * @return string
     */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
     * Sets validation
     *
     * @param string $validation validation
     *
     * @return $this
     */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets scripted_value
     *
     * @return string
     */
    public function getScriptedValue()
    {
        return $this->container['scripted_value'];
    }

    /**
     * Sets scripted_value
     *
     * @param string $scripted_value scripted_value
     *
     * @return $this
     */
    public function setScriptedValue($scripted_value)
    {
        $this->container['scripted_value'] = $scripted_value;

        return $this;
    }

    /**
     * Gets override_value
     *
     * @return string
     */
    public function getOverrideValue()
    {
        return $this->container['override_value'];
    }

    /**
     * Sets override_value
     *
     * @param string $override_value override_value
     *
     * @return $this
     */
    public function setOverrideValue($override_value)
    {
        $this->container['override_value'] = $override_value;

        return $this;
    }

    /**
     * Gets product_option_id
     *
     * @return int
     */
    public function getProductOptionId()
    {
        return $this->container['product_option_id'];
    }

    /**
     * Sets product_option_id
     *
     * @param int $product_option_id product_option_id
     *
     * @return $this
     */
    public function setProductOptionId($product_option_id)
    {
        $this->container['product_option_id'] = $product_option_id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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


