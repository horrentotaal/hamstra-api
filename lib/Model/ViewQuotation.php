<?php
/**
 * ViewQuotation
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
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.31
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
 * ViewQuotation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ViewQuotation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ViewQuotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quotation_id' => 'int',
        'order_id' => 'int',
        'customer_number' => 'string',
        'quotation_date' => '\DateTime',
        'commission_name' => 'string',
        'purchase_order' => 'string',
        'delivery_name' => 'string',
        'delivery_street' => 'string',
        'delivery_zipcode' => 'string',
        'delivery_city' => 'string',
        'delivery_country' => 'string',
        'status' => 'int',
        'quotation_lines' => '\Swagger\Client\Model\ViewQuotationLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quotation_id' => 'int32',
        'order_id' => 'int32',
        'customer_number' => null,
        'quotation_date' => 'date-time',
        'commission_name' => null,
        'purchase_order' => null,
        'delivery_name' => null,
        'delivery_street' => null,
        'delivery_zipcode' => null,
        'delivery_city' => null,
        'delivery_country' => null,
        'status' => 'int32',
        'quotation_lines' => null
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
        'quotation_id' => 'quotationId',
        'order_id' => 'orderId',
        'customer_number' => 'customerNumber',
        'quotation_date' => 'quotationDate',
        'commission_name' => 'commissionName',
        'purchase_order' => 'purchaseOrder',
        'delivery_name' => 'deliveryName',
        'delivery_street' => 'deliveryStreet',
        'delivery_zipcode' => 'deliveryZipcode',
        'delivery_city' => 'deliveryCity',
        'delivery_country' => 'deliveryCountry',
        'status' => 'status',
        'quotation_lines' => 'quotationLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quotation_id' => 'setQuotationId',
        'order_id' => 'setOrderId',
        'customer_number' => 'setCustomerNumber',
        'quotation_date' => 'setQuotationDate',
        'commission_name' => 'setCommissionName',
        'purchase_order' => 'setPurchaseOrder',
        'delivery_name' => 'setDeliveryName',
        'delivery_street' => 'setDeliveryStreet',
        'delivery_zipcode' => 'setDeliveryZipcode',
        'delivery_city' => 'setDeliveryCity',
        'delivery_country' => 'setDeliveryCountry',
        'status' => 'setStatus',
        'quotation_lines' => 'setQuotationLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quotation_id' => 'getQuotationId',
        'order_id' => 'getOrderId',
        'customer_number' => 'getCustomerNumber',
        'quotation_date' => 'getQuotationDate',
        'commission_name' => 'getCommissionName',
        'purchase_order' => 'getPurchaseOrder',
        'delivery_name' => 'getDeliveryName',
        'delivery_street' => 'getDeliveryStreet',
        'delivery_zipcode' => 'getDeliveryZipcode',
        'delivery_city' => 'getDeliveryCity',
        'delivery_country' => 'getDeliveryCountry',
        'status' => 'getStatus',
        'quotation_lines' => 'getQuotationLines'
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
        $this->container['quotation_id'] = isset($data['quotation_id']) ? $data['quotation_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['quotation_date'] = isset($data['quotation_date']) ? $data['quotation_date'] : null;
        $this->container['commission_name'] = isset($data['commission_name']) ? $data['commission_name'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['delivery_name'] = isset($data['delivery_name']) ? $data['delivery_name'] : null;
        $this->container['delivery_street'] = isset($data['delivery_street']) ? $data['delivery_street'] : null;
        $this->container['delivery_zipcode'] = isset($data['delivery_zipcode']) ? $data['delivery_zipcode'] : null;
        $this->container['delivery_city'] = isset($data['delivery_city']) ? $data['delivery_city'] : null;
        $this->container['delivery_country'] = isset($data['delivery_country']) ? $data['delivery_country'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['quotation_lines'] = isset($data['quotation_lines']) ? $data['quotation_lines'] : null;
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
     * Gets quotation_id
     *
     * @return int
     */
    public function getQuotationId()
    {
        return $this->container['quotation_id'];
    }

    /**
     * Sets quotation_id
     *
     * @param int $quotation_id quotation_id
     *
     * @return $this
     */
    public function setQuotationId($quotation_id)
    {
        $this->container['quotation_id'] = $quotation_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets quotation_date
     *
     * @return \DateTime
     */
    public function getQuotationDate()
    {
        return $this->container['quotation_date'];
    }

    /**
     * Sets quotation_date
     *
     * @param \DateTime $quotation_date quotation_date
     *
     * @return $this
     */
    public function setQuotationDate($quotation_date)
    {
        $this->container['quotation_date'] = $quotation_date;

        return $this;
    }

    /**
     * Gets commission_name
     *
     * @return string
     */
    public function getCommissionName()
    {
        return $this->container['commission_name'];
    }

    /**
     * Sets commission_name
     *
     * @param string $commission_name commission_name
     *
     * @return $this
     */
    public function setCommissionName($commission_name)
    {
        $this->container['commission_name'] = $commission_name;

        return $this;
    }

    /**
     * Gets purchase_order
     *
     * @return string
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     *
     * @param string $purchase_order purchase_order
     *
     * @return $this
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

        return $this;
    }

    /**
     * Gets delivery_name
     *
     * @return string
     */
    public function getDeliveryName()
    {
        return $this->container['delivery_name'];
    }

    /**
     * Sets delivery_name
     *
     * @param string $delivery_name delivery_name
     *
     * @return $this
     */
    public function setDeliveryName($delivery_name)
    {
        $this->container['delivery_name'] = $delivery_name;

        return $this;
    }

    /**
     * Gets delivery_street
     *
     * @return string
     */
    public function getDeliveryStreet()
    {
        return $this->container['delivery_street'];
    }

    /**
     * Sets delivery_street
     *
     * @param string $delivery_street delivery_street
     *
     * @return $this
     */
    public function setDeliveryStreet($delivery_street)
    {
        $this->container['delivery_street'] = $delivery_street;

        return $this;
    }

    /**
     * Gets delivery_zipcode
     *
     * @return string
     */
    public function getDeliveryZipcode()
    {
        return $this->container['delivery_zipcode'];
    }

    /**
     * Sets delivery_zipcode
     *
     * @param string $delivery_zipcode delivery_zipcode
     *
     * @return $this
     */
    public function setDeliveryZipcode($delivery_zipcode)
    {
        $this->container['delivery_zipcode'] = $delivery_zipcode;

        return $this;
    }

    /**
     * Gets delivery_city
     *
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->container['delivery_city'];
    }

    /**
     * Sets delivery_city
     *
     * @param string $delivery_city delivery_city
     *
     * @return $this
     */
    public function setDeliveryCity($delivery_city)
    {
        $this->container['delivery_city'] = $delivery_city;

        return $this;
    }

    /**
     * Gets delivery_country
     *
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->container['delivery_country'];
    }

    /**
     * Sets delivery_country
     *
     * @param string $delivery_country delivery_country
     *
     * @return $this
     */
    public function setDeliveryCountry($delivery_country)
    {
        $this->container['delivery_country'] = $delivery_country;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets quotation_lines
     *
     * @return \Swagger\Client\Model\ViewQuotationLine[]
     */
    public function getQuotationLines()
    {
        return $this->container['quotation_lines'];
    }

    /**
     * Sets quotation_lines
     *
     * @param \Swagger\Client\Model\ViewQuotationLine[] $quotation_lines quotation_lines
     *
     * @return $this
     */
    public function setQuotationLines($quotation_lines)
    {
        $this->container['quotation_lines'] = $quotation_lines;

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


