<?php
/**
 * HamstraAPIModelsGridListHamstraAPIModelsQuotationsViewQuotation
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
 * HamstraAPIModelsGridListHamstraAPIModelsQuotationsViewQuotation Class Doc Comment
 *
 * @category Class
 * @package  Horrentotaal\HamstraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HamstraAPIModelsGridListHamstraAPIModelsQuotationsViewQuotation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hamstra_API.Models.GridList[Hamstra_API.Models.Quotations.ViewQuotation]';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_page' => 'int',
        'total_page_count' => 'int',
        'total_item_count' => 'int',
        'page_size' => 'int',
        'items' => '\Horrentotaal\HamstraApi\Model\HamstraAPIModelsQuotationsViewQuotation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_page' => 'int32',
        'total_page_count' => 'int32',
        'total_item_count' => 'int32',
        'page_size' => 'int32',
        'items' => null
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
        'current_page' => 'currentPage',
        'total_page_count' => 'totalPageCount',
        'total_item_count' => 'totalItemCount',
        'page_size' => 'pageSize',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_page' => 'setCurrentPage',
        'total_page_count' => 'setTotalPageCount',
        'total_item_count' => 'setTotalItemCount',
        'page_size' => 'setPageSize',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_page' => 'getCurrentPage',
        'total_page_count' => 'getTotalPageCount',
        'total_item_count' => 'getTotalItemCount',
        'page_size' => 'getPageSize',
        'items' => 'getItems'
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
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['total_page_count'] = isset($data['total_page_count']) ? $data['total_page_count'] : null;
        $this->container['total_item_count'] = isset($data['total_item_count']) ? $data['total_item_count'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page current_page
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets total_page_count
     *
     * @return int
     */
    public function getTotalPageCount()
    {
        return $this->container['total_page_count'];
    }

    /**
     * Sets total_page_count
     *
     * @param int $total_page_count total_page_count
     *
     * @return $this
     */
    public function setTotalPageCount($total_page_count)
    {
        $this->container['total_page_count'] = $total_page_count;

        return $this;
    }

    /**
     * Gets total_item_count
     *
     * @return int
     */
    public function getTotalItemCount()
    {
        return $this->container['total_item_count'];
    }

    /**
     * Sets total_item_count
     *
     * @param int $total_item_count total_item_count
     *
     * @return $this
     */
    public function setTotalItemCount($total_item_count)
    {
        $this->container['total_item_count'] = $total_item_count;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size page_size
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Horrentotaal\HamstraApi\Model\HamstraAPIModelsQuotationsViewQuotation[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Horrentotaal\HamstraApi\Model\HamstraAPIModelsQuotationsViewQuotation[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


