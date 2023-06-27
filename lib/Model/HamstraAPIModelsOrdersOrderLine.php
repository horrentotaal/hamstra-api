<?php
/**
 * HamstraAPIModelsOrdersOrderLine
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
 * HamstraAPIModelsOrdersOrderLine Class Doc Comment
 *
 * @category Class
 * @package  Horrentotaal\HamstraApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HamstraAPIModelsOrdersOrderLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Hamstra_API.Models.Orders.OrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_line_id' => 'int',
        'order_id' => 'int',
        'sales_line_id' => 'int',
        'order_line_ref_nr' => 'string',
        'quantity_ordered' => 'double',
        'sales_item_id' => 'string',
        'product_id' => 'int',
        'description' => 'string',
        'line_summary' => 'string',
        'line_summary_localized' => 'string',
        'consumer_price' => 'double',
        'purchase_price' => 'double',
        'sales_price' => 'double',
        'discount_pct' => 'double',
        'line_amount' => 'double',
        'huss_order_line_nr' => 'int',
        'purchase_order_line_nr' => 'double',
        'conversion_interface_nr' => 'int',
        'height' => 'int',
        'width' => 'int',
        'color' => 'string',
        'original_sales_price' => 'double',
        'discount_hos' => 'double',
        'order_id_spec' => 'string',
        'ax_order_nr_per_line' => 'string',
        'delivery_week' => 'int',
        'extra_delivery_days' => 'int',
        'customer_description' => 'string',
        'customer_reference' => 'string',
        'fixed_price' => 'double',
        'ext_bruto_price' => 'double',
        'order_line_options' => '\Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderLineOption[]',
        'calculated_price' => 'double',
        'product_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_line_id' => 'int32',
        'order_id' => 'int32',
        'sales_line_id' => 'int32',
        'order_line_ref_nr' => null,
        'quantity_ordered' => 'double',
        'sales_item_id' => null,
        'product_id' => 'int32',
        'description' => null,
        'line_summary' => null,
        'line_summary_localized' => null,
        'consumer_price' => 'double',
        'purchase_price' => 'double',
        'sales_price' => 'double',
        'discount_pct' => 'double',
        'line_amount' => 'double',
        'huss_order_line_nr' => 'int32',
        'purchase_order_line_nr' => 'double',
        'conversion_interface_nr' => 'int32',
        'height' => 'int32',
        'width' => 'int32',
        'color' => null,
        'original_sales_price' => 'double',
        'discount_hos' => 'double',
        'order_id_spec' => null,
        'ax_order_nr_per_line' => null,
        'delivery_week' => 'int32',
        'extra_delivery_days' => 'int32',
        'customer_description' => null,
        'customer_reference' => null,
        'fixed_price' => 'double',
        'ext_bruto_price' => 'double',
        'order_line_options' => null,
        'calculated_price' => 'double',
        'product_name' => null
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
        'order_line_id' => 'orderLineID',
        'order_id' => 'orderID',
        'sales_line_id' => 'salesLineID',
        'order_line_ref_nr' => 'orderLineRefNr',
        'quantity_ordered' => 'quantityOrdered',
        'sales_item_id' => 'salesItemId',
        'product_id' => 'productID',
        'description' => 'description',
        'line_summary' => 'lineSummary',
        'line_summary_localized' => 'lineSummaryLocalized',
        'consumer_price' => 'consumerPrice',
        'purchase_price' => 'purchasePrice',
        'sales_price' => 'salesPrice',
        'discount_pct' => 'discountPct',
        'line_amount' => 'lineAmount',
        'huss_order_line_nr' => 'hussOrderLineNr',
        'purchase_order_line_nr' => 'purchaseOrderLineNr',
        'conversion_interface_nr' => 'conversionInterfaceNr',
        'height' => 'height',
        'width' => 'width',
        'color' => 'color',
        'original_sales_price' => 'originalSalesPrice',
        'discount_hos' => 'discountHos',
        'order_id_spec' => 'orderIdSpec',
        'ax_order_nr_per_line' => 'axOrderNrPerLine',
        'delivery_week' => 'deliveryWeek',
        'extra_delivery_days' => 'extraDeliveryDays',
        'customer_description' => 'customerDescription',
        'customer_reference' => 'customerReference',
        'fixed_price' => 'fixedPrice',
        'ext_bruto_price' => 'extBrutoPrice',
        'order_line_options' => 'orderLineOptions',
        'calculated_price' => 'calculatedPrice',
        'product_name' => 'productName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_line_id' => 'setOrderLineId',
        'order_id' => 'setOrderId',
        'sales_line_id' => 'setSalesLineId',
        'order_line_ref_nr' => 'setOrderLineRefNr',
        'quantity_ordered' => 'setQuantityOrdered',
        'sales_item_id' => 'setSalesItemId',
        'product_id' => 'setProductId',
        'description' => 'setDescription',
        'line_summary' => 'setLineSummary',
        'line_summary_localized' => 'setLineSummaryLocalized',
        'consumer_price' => 'setConsumerPrice',
        'purchase_price' => 'setPurchasePrice',
        'sales_price' => 'setSalesPrice',
        'discount_pct' => 'setDiscountPct',
        'line_amount' => 'setLineAmount',
        'huss_order_line_nr' => 'setHussOrderLineNr',
        'purchase_order_line_nr' => 'setPurchaseOrderLineNr',
        'conversion_interface_nr' => 'setConversionInterfaceNr',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'color' => 'setColor',
        'original_sales_price' => 'setOriginalSalesPrice',
        'discount_hos' => 'setDiscountHos',
        'order_id_spec' => 'setOrderIdSpec',
        'ax_order_nr_per_line' => 'setAxOrderNrPerLine',
        'delivery_week' => 'setDeliveryWeek',
        'extra_delivery_days' => 'setExtraDeliveryDays',
        'customer_description' => 'setCustomerDescription',
        'customer_reference' => 'setCustomerReference',
        'fixed_price' => 'setFixedPrice',
        'ext_bruto_price' => 'setExtBrutoPrice',
        'order_line_options' => 'setOrderLineOptions',
        'calculated_price' => 'setCalculatedPrice',
        'product_name' => 'setProductName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_line_id' => 'getOrderLineId',
        'order_id' => 'getOrderId',
        'sales_line_id' => 'getSalesLineId',
        'order_line_ref_nr' => 'getOrderLineRefNr',
        'quantity_ordered' => 'getQuantityOrdered',
        'sales_item_id' => 'getSalesItemId',
        'product_id' => 'getProductId',
        'description' => 'getDescription',
        'line_summary' => 'getLineSummary',
        'line_summary_localized' => 'getLineSummaryLocalized',
        'consumer_price' => 'getConsumerPrice',
        'purchase_price' => 'getPurchasePrice',
        'sales_price' => 'getSalesPrice',
        'discount_pct' => 'getDiscountPct',
        'line_amount' => 'getLineAmount',
        'huss_order_line_nr' => 'getHussOrderLineNr',
        'purchase_order_line_nr' => 'getPurchaseOrderLineNr',
        'conversion_interface_nr' => 'getConversionInterfaceNr',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'color' => 'getColor',
        'original_sales_price' => 'getOriginalSalesPrice',
        'discount_hos' => 'getDiscountHos',
        'order_id_spec' => 'getOrderIdSpec',
        'ax_order_nr_per_line' => 'getAxOrderNrPerLine',
        'delivery_week' => 'getDeliveryWeek',
        'extra_delivery_days' => 'getExtraDeliveryDays',
        'customer_description' => 'getCustomerDescription',
        'customer_reference' => 'getCustomerReference',
        'fixed_price' => 'getFixedPrice',
        'ext_bruto_price' => 'getExtBrutoPrice',
        'order_line_options' => 'getOrderLineOptions',
        'calculated_price' => 'getCalculatedPrice',
        'product_name' => 'getProductName'
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
        $this->container['order_line_id'] = isset($data['order_line_id']) ? $data['order_line_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['sales_line_id'] = isset($data['sales_line_id']) ? $data['sales_line_id'] : null;
        $this->container['order_line_ref_nr'] = isset($data['order_line_ref_nr']) ? $data['order_line_ref_nr'] : null;
        $this->container['quantity_ordered'] = isset($data['quantity_ordered']) ? $data['quantity_ordered'] : null;
        $this->container['sales_item_id'] = isset($data['sales_item_id']) ? $data['sales_item_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['line_summary'] = isset($data['line_summary']) ? $data['line_summary'] : null;
        $this->container['line_summary_localized'] = isset($data['line_summary_localized']) ? $data['line_summary_localized'] : null;
        $this->container['consumer_price'] = isset($data['consumer_price']) ? $data['consumer_price'] : null;
        $this->container['purchase_price'] = isset($data['purchase_price']) ? $data['purchase_price'] : null;
        $this->container['sales_price'] = isset($data['sales_price']) ? $data['sales_price'] : null;
        $this->container['discount_pct'] = isset($data['discount_pct']) ? $data['discount_pct'] : null;
        $this->container['line_amount'] = isset($data['line_amount']) ? $data['line_amount'] : null;
        $this->container['huss_order_line_nr'] = isset($data['huss_order_line_nr']) ? $data['huss_order_line_nr'] : null;
        $this->container['purchase_order_line_nr'] = isset($data['purchase_order_line_nr']) ? $data['purchase_order_line_nr'] : null;
        $this->container['conversion_interface_nr'] = isset($data['conversion_interface_nr']) ? $data['conversion_interface_nr'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['original_sales_price'] = isset($data['original_sales_price']) ? $data['original_sales_price'] : null;
        $this->container['discount_hos'] = isset($data['discount_hos']) ? $data['discount_hos'] : null;
        $this->container['order_id_spec'] = isset($data['order_id_spec']) ? $data['order_id_spec'] : null;
        $this->container['ax_order_nr_per_line'] = isset($data['ax_order_nr_per_line']) ? $data['ax_order_nr_per_line'] : null;
        $this->container['delivery_week'] = isset($data['delivery_week']) ? $data['delivery_week'] : null;
        $this->container['extra_delivery_days'] = isset($data['extra_delivery_days']) ? $data['extra_delivery_days'] : null;
        $this->container['customer_description'] = isset($data['customer_description']) ? $data['customer_description'] : null;
        $this->container['customer_reference'] = isset($data['customer_reference']) ? $data['customer_reference'] : null;
        $this->container['fixed_price'] = isset($data['fixed_price']) ? $data['fixed_price'] : null;
        $this->container['ext_bruto_price'] = isset($data['ext_bruto_price']) ? $data['ext_bruto_price'] : null;
        $this->container['order_line_options'] = isset($data['order_line_options']) ? $data['order_line_options'] : null;
        $this->container['calculated_price'] = isset($data['calculated_price']) ? $data['calculated_price'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
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
     * Gets order_line_id
     *
     * @return int
     */
    public function getOrderLineId()
    {
        return $this->container['order_line_id'];
    }

    /**
     * Sets order_line_id
     *
     * @param int $order_line_id order_line_id
     *
     * @return $this
     */
    public function setOrderLineId($order_line_id)
    {
        $this->container['order_line_id'] = $order_line_id;

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
     * Gets sales_line_id
     *
     * @return int
     */
    public function getSalesLineId()
    {
        return $this->container['sales_line_id'];
    }

    /**
     * Sets sales_line_id
     *
     * @param int $sales_line_id sales_line_id
     *
     * @return $this
     */
    public function setSalesLineId($sales_line_id)
    {
        $this->container['sales_line_id'] = $sales_line_id;

        return $this;
    }

    /**
     * Gets order_line_ref_nr
     *
     * @return string
     */
    public function getOrderLineRefNr()
    {
        return $this->container['order_line_ref_nr'];
    }

    /**
     * Sets order_line_ref_nr
     *
     * @param string $order_line_ref_nr order_line_ref_nr
     *
     * @return $this
     */
    public function setOrderLineRefNr($order_line_ref_nr)
    {
        $this->container['order_line_ref_nr'] = $order_line_ref_nr;

        return $this;
    }

    /**
     * Gets quantity_ordered
     *
     * @return double
     */
    public function getQuantityOrdered()
    {
        return $this->container['quantity_ordered'];
    }

    /**
     * Sets quantity_ordered
     *
     * @param double $quantity_ordered quantity_ordered
     *
     * @return $this
     */
    public function setQuantityOrdered($quantity_ordered)
    {
        $this->container['quantity_ordered'] = $quantity_ordered;

        return $this;
    }

    /**
     * Gets sales_item_id
     *
     * @return string
     */
    public function getSalesItemId()
    {
        return $this->container['sales_item_id'];
    }

    /**
     * Sets sales_item_id
     *
     * @param string $sales_item_id sales_item_id
     *
     * @return $this
     */
    public function setSalesItemId($sales_item_id)
    {
        $this->container['sales_item_id'] = $sales_item_id;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets line_summary
     *
     * @return string
     */
    public function getLineSummary()
    {
        return $this->container['line_summary'];
    }

    /**
     * Sets line_summary
     *
     * @param string $line_summary line_summary
     *
     * @return $this
     */
    public function setLineSummary($line_summary)
    {
        $this->container['line_summary'] = $line_summary;

        return $this;
    }

    /**
     * Gets line_summary_localized
     *
     * @return string
     */
    public function getLineSummaryLocalized()
    {
        return $this->container['line_summary_localized'];
    }

    /**
     * Sets line_summary_localized
     *
     * @param string $line_summary_localized line_summary_localized
     *
     * @return $this
     */
    public function setLineSummaryLocalized($line_summary_localized)
    {
        $this->container['line_summary_localized'] = $line_summary_localized;

        return $this;
    }

    /**
     * Gets consumer_price
     *
     * @return double
     */
    public function getConsumerPrice()
    {
        return $this->container['consumer_price'];
    }

    /**
     * Sets consumer_price
     *
     * @param double $consumer_price consumer_price
     *
     * @return $this
     */
    public function setConsumerPrice($consumer_price)
    {
        $this->container['consumer_price'] = $consumer_price;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return double
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param double $purchase_price purchase_price
     *
     * @return $this
     */
    public function setPurchasePrice($purchase_price)
    {
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets sales_price
     *
     * @return double
     */
    public function getSalesPrice()
    {
        return $this->container['sales_price'];
    }

    /**
     * Sets sales_price
     *
     * @param double $sales_price sales_price
     *
     * @return $this
     */
    public function setSalesPrice($sales_price)
    {
        $this->container['sales_price'] = $sales_price;

        return $this;
    }

    /**
     * Gets discount_pct
     *
     * @return double
     */
    public function getDiscountPct()
    {
        return $this->container['discount_pct'];
    }

    /**
     * Sets discount_pct
     *
     * @param double $discount_pct discount_pct
     *
     * @return $this
     */
    public function setDiscountPct($discount_pct)
    {
        $this->container['discount_pct'] = $discount_pct;

        return $this;
    }

    /**
     * Gets line_amount
     *
     * @return double
     */
    public function getLineAmount()
    {
        return $this->container['line_amount'];
    }

    /**
     * Sets line_amount
     *
     * @param double $line_amount line_amount
     *
     * @return $this
     */
    public function setLineAmount($line_amount)
    {
        $this->container['line_amount'] = $line_amount;

        return $this;
    }

    /**
     * Gets huss_order_line_nr
     *
     * @return int
     */
    public function getHussOrderLineNr()
    {
        return $this->container['huss_order_line_nr'];
    }

    /**
     * Sets huss_order_line_nr
     *
     * @param int $huss_order_line_nr huss_order_line_nr
     *
     * @return $this
     */
    public function setHussOrderLineNr($huss_order_line_nr)
    {
        $this->container['huss_order_line_nr'] = $huss_order_line_nr;

        return $this;
    }

    /**
     * Gets purchase_order_line_nr
     *
     * @return double
     */
    public function getPurchaseOrderLineNr()
    {
        return $this->container['purchase_order_line_nr'];
    }

    /**
     * Sets purchase_order_line_nr
     *
     * @param double $purchase_order_line_nr purchase_order_line_nr
     *
     * @return $this
     */
    public function setPurchaseOrderLineNr($purchase_order_line_nr)
    {
        $this->container['purchase_order_line_nr'] = $purchase_order_line_nr;

        return $this;
    }

    /**
     * Gets conversion_interface_nr
     *
     * @return int
     */
    public function getConversionInterfaceNr()
    {
        return $this->container['conversion_interface_nr'];
    }

    /**
     * Sets conversion_interface_nr
     *
     * @param int $conversion_interface_nr conversion_interface_nr
     *
     * @return $this
     */
    public function setConversionInterfaceNr($conversion_interface_nr)
    {
        $this->container['conversion_interface_nr'] = $conversion_interface_nr;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets original_sales_price
     *
     * @return double
     */
    public function getOriginalSalesPrice()
    {
        return $this->container['original_sales_price'];
    }

    /**
     * Sets original_sales_price
     *
     * @param double $original_sales_price original_sales_price
     *
     * @return $this
     */
    public function setOriginalSalesPrice($original_sales_price)
    {
        $this->container['original_sales_price'] = $original_sales_price;

        return $this;
    }

    /**
     * Gets discount_hos
     *
     * @return double
     */
    public function getDiscountHos()
    {
        return $this->container['discount_hos'];
    }

    /**
     * Sets discount_hos
     *
     * @param double $discount_hos discount_hos
     *
     * @return $this
     */
    public function setDiscountHos($discount_hos)
    {
        $this->container['discount_hos'] = $discount_hos;

        return $this;
    }

    /**
     * Gets order_id_spec
     *
     * @return string
     */
    public function getOrderIdSpec()
    {
        return $this->container['order_id_spec'];
    }

    /**
     * Sets order_id_spec
     *
     * @param string $order_id_spec order_id_spec
     *
     * @return $this
     */
    public function setOrderIdSpec($order_id_spec)
    {
        $this->container['order_id_spec'] = $order_id_spec;

        return $this;
    }

    /**
     * Gets ax_order_nr_per_line
     *
     * @return string
     */
    public function getAxOrderNrPerLine()
    {
        return $this->container['ax_order_nr_per_line'];
    }

    /**
     * Sets ax_order_nr_per_line
     *
     * @param string $ax_order_nr_per_line ax_order_nr_per_line
     *
     * @return $this
     */
    public function setAxOrderNrPerLine($ax_order_nr_per_line)
    {
        $this->container['ax_order_nr_per_line'] = $ax_order_nr_per_line;

        return $this;
    }

    /**
     * Gets delivery_week
     *
     * @return int
     */
    public function getDeliveryWeek()
    {
        return $this->container['delivery_week'];
    }

    /**
     * Sets delivery_week
     *
     * @param int $delivery_week delivery_week
     *
     * @return $this
     */
    public function setDeliveryWeek($delivery_week)
    {
        $this->container['delivery_week'] = $delivery_week;

        return $this;
    }

    /**
     * Gets extra_delivery_days
     *
     * @return int
     */
    public function getExtraDeliveryDays()
    {
        return $this->container['extra_delivery_days'];
    }

    /**
     * Sets extra_delivery_days
     *
     * @param int $extra_delivery_days extra_delivery_days
     *
     * @return $this
     */
    public function setExtraDeliveryDays($extra_delivery_days)
    {
        $this->container['extra_delivery_days'] = $extra_delivery_days;

        return $this;
    }

    /**
     * Gets customer_description
     *
     * @return string
     */
    public function getCustomerDescription()
    {
        return $this->container['customer_description'];
    }

    /**
     * Sets customer_description
     *
     * @param string $customer_description customer_description
     *
     * @return $this
     */
    public function setCustomerDescription($customer_description)
    {
        $this->container['customer_description'] = $customer_description;

        return $this;
    }

    /**
     * Gets customer_reference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     *
     * @param string $customer_reference customer_reference
     *
     * @return $this
     */
    public function setCustomerReference($customer_reference)
    {
        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets fixed_price
     *
     * @return double
     */
    public function getFixedPrice()
    {
        return $this->container['fixed_price'];
    }

    /**
     * Sets fixed_price
     *
     * @param double $fixed_price fixed_price
     *
     * @return $this
     */
    public function setFixedPrice($fixed_price)
    {
        $this->container['fixed_price'] = $fixed_price;

        return $this;
    }

    /**
     * Gets ext_bruto_price
     *
     * @return double
     */
    public function getExtBrutoPrice()
    {
        return $this->container['ext_bruto_price'];
    }

    /**
     * Sets ext_bruto_price
     *
     * @param double $ext_bruto_price ext_bruto_price
     *
     * @return $this
     */
    public function setExtBrutoPrice($ext_bruto_price)
    {
        $this->container['ext_bruto_price'] = $ext_bruto_price;

        return $this;
    }

    /**
     * Gets order_line_options
     *
     * @return \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderLineOption[]
     */
    public function getOrderLineOptions()
    {
        return $this->container['order_line_options'];
    }

    /**
     * Sets order_line_options
     *
     * @param \Horrentotaal\HamstraApi\Model\HamstraAPIModelsOrdersOrderLineOption[] $order_line_options order_line_options
     *
     * @return $this
     */
    public function setOrderLineOptions($order_line_options)
    {
        $this->container['order_line_options'] = $order_line_options;

        return $this;
    }

    /**
     * Gets calculated_price
     *
     * @return double
     */
    public function getCalculatedPrice()
    {
        return $this->container['calculated_price'];
    }

    /**
     * Sets calculated_price
     *
     * @param double $calculated_price calculated_price
     *
     * @return $this
     */
    public function setCalculatedPrice($calculated_price)
    {
        $this->container['calculated_price'] = $calculated_price;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

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


