<?php
/**
 * OrderRequest
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
 * OrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'int',
        'customer_number' => 'string',
        'sales_reference1' => 'string',
        'sales_reference2' => 'string',
        'commission_name' => 'string',
        'purchase_order' => 'string',
        'delivery_name' => 'string',
        'delivery_street' => 'string',
        'delivery_zip_code' => 'string',
        'delivery_city' => 'string',
        'delivery_country' => 'string',
        'delivery_email' => 'string',
        'delivery_phone' => 'string',
        'mail_html' => 'string',
        'buffer' => 'int',
        'order_lines' => '\Swagger\Client\Model\OrderLineRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => 'int32',
        'customer_number' => null,
        'sales_reference1' => null,
        'sales_reference2' => null,
        'commission_name' => null,
        'purchase_order' => null,
        'delivery_name' => null,
        'delivery_street' => null,
        'delivery_zip_code' => null,
        'delivery_city' => null,
        'delivery_country' => null,
        'delivery_email' => null,
        'delivery_phone' => null,
        'mail_html' => null,
        'buffer' => 'int32',
        'order_lines' => null
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
        'order_id' => 'orderId',
        'customer_number' => 'customerNumber',
        'sales_reference1' => 'salesReference1',
        'sales_reference2' => 'salesReference2',
        'commission_name' => 'commissionName',
        'purchase_order' => 'purchaseOrder',
        'delivery_name' => 'deliveryName',
        'delivery_street' => 'deliveryStreet',
        'delivery_zip_code' => 'deliveryZipCode',
        'delivery_city' => 'deliveryCity',
        'delivery_country' => 'deliveryCountry',
        'delivery_email' => 'deliveryEmail',
        'delivery_phone' => 'deliveryPhone',
        'mail_html' => 'mailHtml',
        'buffer' => 'buffer',
        'order_lines' => 'orderLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'customer_number' => 'setCustomerNumber',
        'sales_reference1' => 'setSalesReference1',
        'sales_reference2' => 'setSalesReference2',
        'commission_name' => 'setCommissionName',
        'purchase_order' => 'setPurchaseOrder',
        'delivery_name' => 'setDeliveryName',
        'delivery_street' => 'setDeliveryStreet',
        'delivery_zip_code' => 'setDeliveryZipCode',
        'delivery_city' => 'setDeliveryCity',
        'delivery_country' => 'setDeliveryCountry',
        'delivery_email' => 'setDeliveryEmail',
        'delivery_phone' => 'setDeliveryPhone',
        'mail_html' => 'setMailHtml',
        'buffer' => 'setBuffer',
        'order_lines' => 'setOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'customer_number' => 'getCustomerNumber',
        'sales_reference1' => 'getSalesReference1',
        'sales_reference2' => 'getSalesReference2',
        'commission_name' => 'getCommissionName',
        'purchase_order' => 'getPurchaseOrder',
        'delivery_name' => 'getDeliveryName',
        'delivery_street' => 'getDeliveryStreet',
        'delivery_zip_code' => 'getDeliveryZipCode',
        'delivery_city' => 'getDeliveryCity',
        'delivery_country' => 'getDeliveryCountry',
        'delivery_email' => 'getDeliveryEmail',
        'delivery_phone' => 'getDeliveryPhone',
        'mail_html' => 'getMailHtml',
        'buffer' => 'getBuffer',
        'order_lines' => 'getOrderLines'
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['sales_reference1'] = isset($data['sales_reference1']) ? $data['sales_reference1'] : null;
        $this->container['sales_reference2'] = isset($data['sales_reference2']) ? $data['sales_reference2'] : null;
        $this->container['commission_name'] = isset($data['commission_name']) ? $data['commission_name'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['delivery_name'] = isset($data['delivery_name']) ? $data['delivery_name'] : null;
        $this->container['delivery_street'] = isset($data['delivery_street']) ? $data['delivery_street'] : null;
        $this->container['delivery_zip_code'] = isset($data['delivery_zip_code']) ? $data['delivery_zip_code'] : null;
        $this->container['delivery_city'] = isset($data['delivery_city']) ? $data['delivery_city'] : null;
        $this->container['delivery_country'] = isset($data['delivery_country']) ? $data['delivery_country'] : null;
        $this->container['delivery_email'] = isset($data['delivery_email']) ? $data['delivery_email'] : null;
        $this->container['delivery_phone'] = isset($data['delivery_phone']) ? $data['delivery_phone'] : null;
        $this->container['mail_html'] = isset($data['mail_html']) ? $data['mail_html'] : null;
        $this->container['buffer'] = isset($data['buffer']) ? $data['buffer'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
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
     * Gets sales_reference1
     *
     * @return string
     */
    public function getSalesReference1()
    {
        return $this->container['sales_reference1'];
    }

    /**
     * Sets sales_reference1
     *
     * @param string $sales_reference1 sales_reference1
     *
     * @return $this
     */
    public function setSalesReference1($sales_reference1)
    {
        $this->container['sales_reference1'] = $sales_reference1;

        return $this;
    }

    /**
     * Gets sales_reference2
     *
     * @return string
     */
    public function getSalesReference2()
    {
        return $this->container['sales_reference2'];
    }

    /**
     * Sets sales_reference2
     *
     * @param string $sales_reference2 sales_reference2
     *
     * @return $this
     */
    public function setSalesReference2($sales_reference2)
    {
        $this->container['sales_reference2'] = $sales_reference2;

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
     * Gets delivery_zip_code
     *
     * @return string
     */
    public function getDeliveryZipCode()
    {
        return $this->container['delivery_zip_code'];
    }

    /**
     * Sets delivery_zip_code
     *
     * @param string $delivery_zip_code delivery_zip_code
     *
     * @return $this
     */
    public function setDeliveryZipCode($delivery_zip_code)
    {
        $this->container['delivery_zip_code'] = $delivery_zip_code;

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
     * Gets delivery_email
     *
     * @return string
     */
    public function getDeliveryEmail()
    {
        return $this->container['delivery_email'];
    }

    /**
     * Sets delivery_email
     *
     * @param string $delivery_email delivery_email
     *
     * @return $this
     */
    public function setDeliveryEmail($delivery_email)
    {
        $this->container['delivery_email'] = $delivery_email;

        return $this;
    }

    /**
     * Gets delivery_phone
     *
     * @return string
     */
    public function getDeliveryPhone()
    {
        return $this->container['delivery_phone'];
    }

    /**
     * Sets delivery_phone
     *
     * @param string $delivery_phone delivery_phone
     *
     * @return $this
     */
    public function setDeliveryPhone($delivery_phone)
    {
        $this->container['delivery_phone'] = $delivery_phone;

        return $this;
    }

    /**
     * Gets mail_html
     *
     * @return string
     */
    public function getMailHtml()
    {
        return $this->container['mail_html'];
    }

    /**
     * Sets mail_html
     *
     * @param string $mail_html mail_html
     *
     * @return $this
     */
    public function setMailHtml($mail_html)
    {
        $this->container['mail_html'] = $mail_html;

        return $this;
    }

    /**
     * Gets buffer
     *
     * @return int
     */
    public function getBuffer()
    {
        return $this->container['buffer'];
    }

    /**
     * Sets buffer
     *
     * @param int $buffer buffer
     *
     * @return $this
     */
    public function setBuffer($buffer)
    {
        $this->container['buffer'] = $buffer;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Swagger\Client\Model\OrderLineRequest[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Swagger\Client\Model\OrderLineRequest[] $order_lines order_lines
     *
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

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


