<?php
/**
 * HamstraAPIModelsProductsProductConfigOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * HamstraAPIModelsProductsProductConfigOption Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HamstraAPIModelsProductsProductConfigOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hamstra_API.Models.Products.ProductConfigOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'option' => 'string',
        'display_name' => 'string',
        'type_id' => 'int',
        'is_required' => 'bool',
        'is_valid' => 'bool',
        'validation_message' => 'string',
        'is_enabled' => 'bool',
        'read_only_text' => 'string',
        'product_option_group_id' => 'int',
        'measurement_instructions' => 'string',
        'measurement_image_reference' => 'string',
        'value' => 'object',
        'values' => '\Swagger\Client\Model\HamstraAPIModelsProductsProductConfigOptionValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'option' => null,
        'display_name' => null,
        'type_id' => 'int32',
        'is_required' => null,
        'is_valid' => null,
        'validation_message' => null,
        'is_enabled' => null,
        'read_only_text' => null,
        'product_option_group_id' => 'int32',
        'measurement_instructions' => null,
        'measurement_image_reference' => null,
        'value' => null,
        'values' => null
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
        'id' => 'id',
        'option' => 'option',
        'display_name' => 'displayName',
        'type_id' => 'typeId',
        'is_required' => 'isRequired',
        'is_valid' => 'isValid',
        'validation_message' => 'validationMessage',
        'is_enabled' => 'isEnabled',
        'read_only_text' => 'readOnlyText',
        'product_option_group_id' => 'productOptionGroupId',
        'measurement_instructions' => 'measurementInstructions',
        'measurement_image_reference' => 'measurementImageReference',
        'value' => 'value',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'option' => 'setOption',
        'display_name' => 'setDisplayName',
        'type_id' => 'setTypeId',
        'is_required' => 'setIsRequired',
        'is_valid' => 'setIsValid',
        'validation_message' => 'setValidationMessage',
        'is_enabled' => 'setIsEnabled',
        'read_only_text' => 'setReadOnlyText',
        'product_option_group_id' => 'setProductOptionGroupId',
        'measurement_instructions' => 'setMeasurementInstructions',
        'measurement_image_reference' => 'setMeasurementImageReference',
        'value' => 'setValue',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'option' => 'getOption',
        'display_name' => 'getDisplayName',
        'type_id' => 'getTypeId',
        'is_required' => 'getIsRequired',
        'is_valid' => 'getIsValid',
        'validation_message' => 'getValidationMessage',
        'is_enabled' => 'getIsEnabled',
        'read_only_text' => 'getReadOnlyText',
        'product_option_group_id' => 'getProductOptionGroupId',
        'measurement_instructions' => 'getMeasurementInstructions',
        'measurement_image_reference' => 'getMeasurementImageReference',
        'value' => 'getValue',
        'values' => 'getValues'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['is_valid'] = isset($data['is_valid']) ? $data['is_valid'] : null;
        $this->container['validation_message'] = isset($data['validation_message']) ? $data['validation_message'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['read_only_text'] = isset($data['read_only_text']) ? $data['read_only_text'] : null;
        $this->container['product_option_group_id'] = isset($data['product_option_group_id']) ? $data['product_option_group_id'] : null;
        $this->container['measurement_instructions'] = isset($data['measurement_instructions']) ? $data['measurement_instructions'] : null;
        $this->container['measurement_image_reference'] = isset($data['measurement_image_reference']) ? $data['measurement_image_reference'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param string $option option
     *
     * @return $this
     */
    public function setOption($option)
    {
        $this->container['option'] = $option;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id type_id
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool $is_required is_required
     *
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_valid
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool $is_valid is_valid
     *
     * @return $this
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets validation_message
     *
     * @return string
     */
    public function getValidationMessage()
    {
        return $this->container['validation_message'];
    }

    /**
     * Sets validation_message
     *
     * @param string $validation_message validation_message
     *
     * @return $this
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled is_enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets read_only_text
     *
     * @return string
     */
    public function getReadOnlyText()
    {
        return $this->container['read_only_text'];
    }

    /**
     * Sets read_only_text
     *
     * @param string $read_only_text read_only_text
     *
     * @return $this
     */
    public function setReadOnlyText($read_only_text)
    {
        $this->container['read_only_text'] = $read_only_text;

        return $this;
    }

    /**
     * Gets product_option_group_id
     *
     * @return int
     */
    public function getProductOptionGroupId()
    {
        return $this->container['product_option_group_id'];
    }

    /**
     * Sets product_option_group_id
     *
     * @param int $product_option_group_id product_option_group_id
     *
     * @return $this
     */
    public function setProductOptionGroupId($product_option_group_id)
    {
        $this->container['product_option_group_id'] = $product_option_group_id;

        return $this;
    }

    /**
     * Gets measurement_instructions
     *
     * @return string
     */
    public function getMeasurementInstructions()
    {
        return $this->container['measurement_instructions'];
    }

    /**
     * Sets measurement_instructions
     *
     * @param string $measurement_instructions measurement_instructions
     *
     * @return $this
     */
    public function setMeasurementInstructions($measurement_instructions)
    {
        $this->container['measurement_instructions'] = $measurement_instructions;

        return $this;
    }

    /**
     * Gets measurement_image_reference
     *
     * @return string
     */
    public function getMeasurementImageReference()
    {
        return $this->container['measurement_image_reference'];
    }

    /**
     * Sets measurement_image_reference
     *
     * @param string $measurement_image_reference measurement_image_reference
     *
     * @return $this
     */
    public function setMeasurementImageReference($measurement_image_reference)
    {
        $this->container['measurement_image_reference'] = $measurement_image_reference;

        return $this;
    }

    /**
     * Gets value
     *
     * @return object
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param object $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Swagger\Client\Model\HamstraAPIModelsProductsProductConfigOptionValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Swagger\Client\Model\HamstraAPIModelsProductsProductConfigOptionValue[] $values values
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


