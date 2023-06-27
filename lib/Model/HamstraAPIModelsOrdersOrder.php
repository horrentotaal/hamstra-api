<?php
/**
 * HamstraAPIModelsOrdersOrder
 *
 * PHP version 5
 *
 * @category Class
 * @package  Horrentotaal\Hamstra
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

namespace Horrentotaal\Hamstra\Model;

use \ArrayAccess;
use \Horrentotaal\Hamstra\ObjectSerializer;

/**
 * HamstraAPIModelsOrdersOrder Class Doc Comment
 *
 * @category Class
 * @package  Horrentotaal\Hamstra
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HamstraAPIModelsOrdersOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hamstra_API.Models.Orders.Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'int',
        'customer_id' => 'int',
        'customer_number' => 'string',
        'order_by_customer' => 'string',
        'order_input_date' => '\DateTime',
        'sales_order_number' => 'string',
        'sales_reference1' => 'string',
        'sales_reference2' => 'string',
        'commission_name' => 'string',
        'purchase_order' => 'string',
        'delivery_at_default_address' => 'bool',
        'order_name' => 'string',
        'order_street' => 'string',
        'order_zip_code' => 'string',
        'order_city' => 'string',
        'order_country' => 'string',
        'delivery_name' => 'string',
        'delivery_street' => 'string',
        'delivery_zip_code' => 'string',
        'delivery_city' => 'string',
        'delivery_country' => 'string',
        'delivery_email' => 'string',
        'delivery_phone' => 'string',
        'mail_html' => 'string',
        'sent_to_ax' => 'bool',
        'ax_order_nr' => 'string',
        'buffer' => 'int',
        'is_spoedbestelling' => 'bool',
        'last_modified' => '\DateTime',
        'approved' => 'bool',
        'organisation' => 'int',
        'order_lines' => '\Horrentotaal\Hamstra\Model\HamstraAPIModelsOrdersOrderLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => 'int32',
        'customer_id' => 'int32',
        'customer_number' => null,
        'order_by_customer' => null,
        'order_input_date' => 'date-time',
        'sales_order_number' => null,
        'sales_reference1' => null,
        'sales_reference2' => null,
        'commission_name' => null,
        'purchase_order' => null,
        'delivery_at_default_address' => null,
        'order_name' => null,
        'order_street' => null,
        'order_zip_code' => null,
        'order_city' => null,
        'order_country' => null,
        'delivery_name' => null,
        'delivery_street' => null,
        'delivery_zip_code' => null,
        'delivery_city' => null,
        'delivery_country' => null,
        'delivery_email' => null,
        'delivery_phone' => null,
        'mail_html' => null,
        'sent_to_ax' => null,
        'ax_order_nr' => null,
        'buffer' => 'int32',
        'is_spoedbestelling' => null,
        'last_modified' => 'date-time',
        'approved' => null,
        'organisation' => 'int32',
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
        'customer_id' => 'customerId',
        'customer_number' => 'customerNumber',
        'order_by_customer' => 'orderByCustomer',
        'order_input_date' => 'orderInputDate',
        'sales_order_number' => 'salesOrderNumber',
        'sales_reference1' => 'salesReference1',
        'sales_reference2' => 'salesReference2',
        'commission_name' => 'commissionName',
        'purchase_order' => 'purchaseOrder',
        'delivery_at_default_address' => 'deliveryAtDefaultAddress',
        'order_name' => 'orderName',
        'order_street' => 'orderStreet',
        'order_zip_code' => 'orderZipCode',
        'order_city' => 'orderCity',
        'order_country' => 'orderCountry',
        'delivery_name' => 'deliveryName',
        'delivery_street' => 'deliveryStreet',
        'delivery_zip_code' => 'deliveryZipCode',
        'delivery_city' => 'deliveryCity',
        'delivery_country' => 'deliveryCountry',
        'delivery_email' => 'deliveryEmail',
        'delivery_phone' => 'deliveryPhone',
        'mail_html' => 'mailHtml',
        'sent_to_ax' => 'sentToAx',
        'ax_order_nr' => 'axOrderNr',
        'buffer' => 'buffer',
        'is_spoedbestelling' => 'isSpoedbestelling',
        'last_modified' => 'lastModified',
        'approved' => 'approved',
        'organisation' => 'organisation',
        'order_lines' => 'orderLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'customer_id' => 'setCustomerId',
        'customer_number' => 'setCustomerNumber',
        'order_by_customer' => 'setOrderByCustomer',
        'order_input_date' => 'setOrderInputDate',
        'sales_order_number' => 'setSalesOrderNumber',
        'sales_reference1' => 'setSalesReference1',
        'sales_reference2' => 'setSalesReference2',
        'commission_name' => 'setCommissionName',
        'purchase_order' => 'setPurchaseOrder',
        'delivery_at_default_address' => 'setDeliveryAtDefaultAddress',
        'order_name' => 'setOrderName',
        'order_street' => 'setOrderStreet',
        'order_zip_code' => 'setOrderZipCode',
        'order_city' => 'setOrderCity',
        'order_country' => 'setOrderCountry',
        'delivery_name' => 'setDeliveryName',
        'delivery_street' => 'setDeliveryStreet',
        'delivery_zip_code' => 'setDeliveryZipCode',
        'delivery_city' => 'setDeliveryCity',
        'delivery_country' => 'setDeliveryCountry',
        'delivery_email' => 'setDeliveryEmail',
        'delivery_phone' => 'setDeliveryPhone',
        'mail_html' => 'setMailHtml',
        'sent_to_ax' => 'setSentToAx',
        'ax_order_nr' => 'setAxOrderNr',
        'buffer' => 'setBuffer',
        'is_spoedbestelling' => 'setIsSpoedbestelling',
        'last_modified' => 'setLastModified',
        'approved' => 'setApproved',
        'organisation' => 'setOrganisation',
        'order_lines' => 'setOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'customer_id' => 'getCustomerId',
        'customer_number' => 'getCustomerNumber',
        'order_by_customer' => 'getOrderByCustomer',
        'order_input_date' => 'getOrderInputDate',
        'sales_order_number' => 'getSalesOrderNumber',
        'sales_reference1' => 'getSalesReference1',
        'sales_reference2' => 'getSalesReference2',
        'commission_name' => 'getCommissionName',
        'purchase_order' => 'getPurchaseOrder',
        'delivery_at_default_address' => 'getDeliveryAtDefaultAddress',
        'order_name' => 'getOrderName',
        'order_street' => 'getOrderStreet',
        'order_zip_code' => 'getOrderZipCode',
        'order_city' => 'getOrderCity',
        'order_country' => 'getOrderCountry',
        'delivery_name' => 'getDeliveryName',
        'delivery_street' => 'getDeliveryStreet',
        'delivery_zip_code' => 'getDeliveryZipCode',
        'delivery_city' => 'getDeliveryCity',
        'delivery_country' => 'getDeliveryCountry',
        'delivery_email' => 'getDeliveryEmail',
        'delivery_phone' => 'getDeliveryPhone',
        'mail_html' => 'getMailHtml',
        'sent_to_ax' => 'getSentToAx',
        'ax_order_nr' => 'getAxOrderNr',
        'buffer' => 'getBuffer',
        'is_spoedbestelling' => 'getIsSpoedbestelling',
        'last_modified' => 'getLastModified',
        'approved' => 'getApproved',
        'organisation' => 'getOrganisation',
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
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['order_by_customer'] = isset($data['order_by_customer']) ? $data['order_by_customer'] : null;
        $this->container['order_input_date'] = isset($data['order_input_date']) ? $data['order_input_date'] : null;
        $this->container['sales_order_number'] = isset($data['sales_order_number']) ? $data['sales_order_number'] : null;
        $this->container['sales_reference1'] = isset($data['sales_reference1']) ? $data['sales_reference1'] : null;
        $this->container['sales_reference2'] = isset($data['sales_reference2']) ? $data['sales_reference2'] : null;
        $this->container['commission_name'] = isset($data['commission_name']) ? $data['commission_name'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['delivery_at_default_address'] = isset($data['delivery_at_default_address']) ? $data['delivery_at_default_address'] : null;
        $this->container['order_name'] = isset($data['order_name']) ? $data['order_name'] : null;
        $this->container['order_street'] = isset($data['order_street']) ? $data['order_street'] : null;
        $this->container['order_zip_code'] = isset($data['order_zip_code']) ? $data['order_zip_code'] : null;
        $this->container['order_city'] = isset($data['order_city']) ? $data['order_city'] : null;
        $this->container['order_country'] = isset($data['order_country']) ? $data['order_country'] : null;
        $this->container['delivery_name'] = isset($data['delivery_name']) ? $data['delivery_name'] : null;
        $this->container['delivery_street'] = isset($data['delivery_street']) ? $data['delivery_street'] : null;
        $this->container['delivery_zip_code'] = isset($data['delivery_zip_code']) ? $data['delivery_zip_code'] : null;
        $this->container['delivery_city'] = isset($data['delivery_city']) ? $data['delivery_city'] : null;
        $this->container['delivery_country'] = isset($data['delivery_country']) ? $data['delivery_country'] : null;
        $this->container['delivery_email'] = isset($data['delivery_email']) ? $data['delivery_email'] : null;
        $this->container['delivery_phone'] = isset($data['delivery_phone']) ? $data['delivery_phone'] : null;
        $this->container['mail_html'] = isset($data['mail_html']) ? $data['mail_html'] : null;
        $this->container['sent_to_ax'] = isset($data['sent_to_ax']) ? $data['sent_to_ax'] : null;
        $this->container['ax_order_nr'] = isset($data['ax_order_nr']) ? $data['ax_order_nr'] : null;
        $this->container['buffer'] = isset($data['buffer']) ? $data['buffer'] : null;
        $this->container['is_spoedbestelling'] = isset($data['is_spoedbestelling']) ? $data['is_spoedbestelling'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['organisation'] = isset($data['organisation']) ? $data['organisation'] : null;
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
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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
     * Gets order_by_customer
     *
     * @return string
     */
    public function getOrderByCustomer()
    {
        return $this->container['order_by_customer'];
    }

    /**
     * Sets order_by_customer
     *
     * @param string $order_by_customer order_by_customer
     *
     * @return $this
     */
    public function setOrderByCustomer($order_by_customer)
    {
        $this->container['order_by_customer'] = $order_by_customer;

        return $this;
    }

    /**
     * Gets order_input_date
     *
     * @return \DateTime
     */
    public function getOrderInputDate()
    {
        return $this->container['order_input_date'];
    }

    /**
     * Sets order_input_date
     *
     * @param \DateTime $order_input_date order_input_date
     *
     * @return $this
     */
    public function setOrderInputDate($order_input_date)
    {
        $this->container['order_input_date'] = $order_input_date;

        return $this;
    }

    /**
     * Gets sales_order_number
     *
     * @return string
     */
    public function getSalesOrderNumber()
    {
        return $this->container['sales_order_number'];
    }

    /**
     * Sets sales_order_number
     *
     * @param string $sales_order_number sales_order_number
     *
     * @return $this
     */
    public function setSalesOrderNumber($sales_order_number)
    {
        $this->container['sales_order_number'] = $sales_order_number;

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
     * Gets delivery_at_default_address
     *
     * @return bool
     */
    public function getDeliveryAtDefaultAddress()
    {
        return $this->container['delivery_at_default_address'];
    }

    /**
     * Sets delivery_at_default_address
     *
     * @param bool $delivery_at_default_address delivery_at_default_address
     *
     * @return $this
     */
    public function setDeliveryAtDefaultAddress($delivery_at_default_address)
    {
        $this->container['delivery_at_default_address'] = $delivery_at_default_address;

        return $this;
    }

    /**
     * Gets order_name
     *
     * @return string
     */
    public function getOrderName()
    {
        return $this->container['order_name'];
    }

    /**
     * Sets order_name
     *
     * @param string $order_name order_name
     *
     * @return $this
     */
    public function setOrderName($order_name)
    {
        $this->container['order_name'] = $order_name;

        return $this;
    }

    /**
     * Gets order_street
     *
     * @return string
     */
    public function getOrderStreet()
    {
        return $this->container['order_street'];
    }

    /**
     * Sets order_street
     *
     * @param string $order_street order_street
     *
     * @return $this
     */
    public function setOrderStreet($order_street)
    {
        $this->container['order_street'] = $order_street;

        return $this;
    }

    /**
     * Gets order_zip_code
     *
     * @return string
     */
    public function getOrderZipCode()
    {
        return $this->container['order_zip_code'];
    }

    /**
     * Sets order_zip_code
     *
     * @param string $order_zip_code order_zip_code
     *
     * @return $this
     */
    public function setOrderZipCode($order_zip_code)
    {
        $this->container['order_zip_code'] = $order_zip_code;

        return $this;
    }

    /**
     * Gets order_city
     *
     * @return string
     */
    public function getOrderCity()
    {
        return $this->container['order_city'];
    }

    /**
     * Sets order_city
     *
     * @param string $order_city order_city
     *
     * @return $this
     */
    public function setOrderCity($order_city)
    {
        $this->container['order_city'] = $order_city;

        return $this;
    }

    /**
     * Gets order_country
     *
     * @return string
     */
    public function getOrderCountry()
    {
        return $this->container['order_country'];
    }

    /**
     * Sets order_country
     *
     * @param string $order_country order_country
     *
     * @return $this
     */
    public function setOrderCountry($order_country)
    {
        $this->container['order_country'] = $order_country;

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
     * Gets sent_to_ax
     *
     * @return bool
     */
    public function getSentToAx()
    {
        return $this->container['sent_to_ax'];
    }

    /**
     * Sets sent_to_ax
     *
     * @param bool $sent_to_ax sent_to_ax
     *
     * @return $this
     */
    public function setSentToAx($sent_to_ax)
    {
        $this->container['sent_to_ax'] = $sent_to_ax;

        return $this;
    }

    /**
     * Gets ax_order_nr
     *
     * @return string
     */
    public function getAxOrderNr()
    {
        return $this->container['ax_order_nr'];
    }

    /**
     * Sets ax_order_nr
     *
     * @param string $ax_order_nr ax_order_nr
     *
     * @return $this
     */
    public function setAxOrderNr($ax_order_nr)
    {
        $this->container['ax_order_nr'] = $ax_order_nr;

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
     * Gets is_spoedbestelling
     *
     * @return bool
     */
    public function getIsSpoedbestelling()
    {
        return $this->container['is_spoedbestelling'];
    }

    /**
     * Sets is_spoedbestelling
     *
     * @param bool $is_spoedbestelling is_spoedbestelling
     *
     * @return $this
     */
    public function setIsSpoedbestelling($is_spoedbestelling)
    {
        $this->container['is_spoedbestelling'] = $is_spoedbestelling;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param \DateTime $last_modified last_modified
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved approved
     *
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets organisation
     *
     * @return int
     */
    public function getOrganisation()
    {
        return $this->container['organisation'];
    }

    /**
     * Sets organisation
     *
     * @param int $organisation organisation
     *
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->container['organisation'] = $organisation;

        return $this;
    }

    /**
     * Gets order_lines
     *
     * @return \Horrentotaal\Hamstra\Model\HamstraAPIModelsOrdersOrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     *
     * @param \Horrentotaal\Hamstra\Model\HamstraAPIModelsOrdersOrderLine[] $order_lines order_lines
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


