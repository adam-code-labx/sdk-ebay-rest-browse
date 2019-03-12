<?php
/**
 * ShippingOptionSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Browse API
 *
 * <p>The Browse API has the following resources:</p>   <ul> <li><b>item_summary: </b> Lets shoppers search for specific items by keyword, GTIN, category, charity, product, or item aspects and refine the results by using filters.</li>  <li> <a href=\"https://developer.ebay.com/api-docs/static/versioning.html#API\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <b>search_by_image: </b> Lets shoppers search for specific items by image. You can refine the results by using URI parameters and filters.</li>   <li><b>item: </b> Lets you retrieve the details of a specific item or all the items in an item group, which is an item with variations such as color and size. This resource also provides a bridge between the eBay legacy APIs, such as <b>Trading</b> and <b>Finding</b>, and the RESTful APIs, such as <b>Browse</b>, which use different formats for the item IDs. You can use the <b>Browse</b> API to retrieve the basic details of the item and the RESTful item ID using a legacy item ID.</li>    <li><a href=\"https://developer.ebay.com/api-docs/static/versioning.html#API\" target=\"_blank\"><img src=\"/cms/img/docs/experimental-icon.svg\" class=\"legend-icon experimental-icon\" alt=\"Experimental Release\" title=\"Experimental Release\" />&nbsp;(Experimental)</a> <b>shopping_cart: </b> Provides the ability for eBay members to see the contents of their eBay cart, and add, remove, and change the quantity of items in their eBay cart.&nbsp;&nbsp;<b>*Note:* </b> This resource is not available in the eBay API Explorer.</li></ul>       <p>The <b>item_summary</b>, <b>search_by_image</b>, and <b>item</b> resource calls require an <a href=\"/api-docs/static/oauth-client-credentials-grant.html\">Application access token</a>. The <b>shopping_cart</b> resource calls require a <a href=\"/api-docs/static/oauth-authorization-code-grant.html\">User access token</a>.</p>
 *
 * OpenAPI spec version: v1_beta.19.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\browse\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\browse\ObjectSerializer;

/**
 * ShippingOptionSummary Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the shipping information.
 * @package  macropage\SDKs\ebay\rest\browse
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingOptionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingOptionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'maxEstimatedDeliveryDate' => 'string',
        'minEstimatedDeliveryDate' => 'string',
        'shippingCost' => '\macropage\SDKs\ebay\rest\browse\Model\ConvertedAmount',
        'shippingCostType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'maxEstimatedDeliveryDate' => null,
        'minEstimatedDeliveryDate' => null,
        'shippingCost' => null,
        'shippingCostType' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'maxEstimatedDeliveryDate' => 'maxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'minEstimatedDeliveryDate',
        'shippingCost' => 'shippingCost',
        'shippingCostType' => 'shippingCostType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'maxEstimatedDeliveryDate' => 'setMaxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'setMinEstimatedDeliveryDate',
        'shippingCost' => 'setShippingCost',
        'shippingCostType' => 'setShippingCostType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'maxEstimatedDeliveryDate' => 'getMaxEstimatedDeliveryDate',
        'minEstimatedDeliveryDate' => 'getMinEstimatedDeliveryDate',
        'shippingCost' => 'getShippingCost',
        'shippingCostType' => 'getShippingCostType'
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
        $this->container['maxEstimatedDeliveryDate'] = isset($data['maxEstimatedDeliveryDate']) ? $data['maxEstimatedDeliveryDate'] : null;
        $this->container['minEstimatedDeliveryDate'] = isset($data['minEstimatedDeliveryDate']) ? $data['minEstimatedDeliveryDate'] : null;
        $this->container['shippingCost'] = isset($data['shippingCost']) ? $data['shippingCost'] : null;
        $this->container['shippingCostType'] = isset($data['shippingCostType']) ? $data['shippingCostType'] : null;
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
     * Gets maxEstimatedDeliveryDate
     *
     * @return string|null
     */
    public function getMaxEstimatedDeliveryDate()
    {
        return $this->container['maxEstimatedDeliveryDate'];
    }

    /**
     * Sets maxEstimatedDeliveryDate
     *
     * @param string|null $maxEstimatedDeliveryDate The end date of the delivery window (latest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. Note: For the best accuracy, always include the contextualLocation values in the X-EBAY-C-ENDUSERCTX request header.
     *
     * @return $this
     */
    public function setMaxEstimatedDeliveryDate($maxEstimatedDeliveryDate)
    {
        $this->container['maxEstimatedDeliveryDate'] = $maxEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets minEstimatedDeliveryDate
     *
     * @return string|null
     */
    public function getMinEstimatedDeliveryDate()
    {
        return $this->container['minEstimatedDeliveryDate'];
    }

    /**
     * Sets minEstimatedDeliveryDate
     *
     * @param string|null $minEstimatedDeliveryDate The start date of the delivery window (earliest projected delivery date). This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time of the buyer. Note: For the best accuracy, always include the contextualLocation values in the X-EBAY-C-ENDUSERCTX request header.
     *
     * @return $this
     */
    public function setMinEstimatedDeliveryDate($minEstimatedDeliveryDate)
    {
        $this->container['minEstimatedDeliveryDate'] = $minEstimatedDeliveryDate;

        return $this;
    }

    /**
     * Gets shippingCost
     *
     * @return \macropage\SDKs\ebay\rest\browse\Model\ConvertedAmount|null
     */
    public function getShippingCost()
    {
        return $this->container['shippingCost'];
    }

    /**
     * Sets shippingCost
     *
     * @param \macropage\SDKs\ebay\rest\browse\Model\ConvertedAmount|null $shippingCost shippingCost
     *
     * @return $this
     */
    public function setShippingCost($shippingCost)
    {
        $this->container['shippingCost'] = $shippingCost;

        return $this;
    }

    /**
     * Gets shippingCostType
     *
     * @return string|null
     */
    public function getShippingCostType()
    {
        return $this->container['shippingCostType'];
    }

    /**
     * Sets shippingCostType
     *
     * @param string|null $shippingCostType This field indicates the type of shipping used to ship the item. Possible values are FIXED (flat-rate shipping) and CALCULATED (shipping cost calculated based on item and buyer location).
     *
     * @return $this
     */
    public function setShippingCostType($shippingCostType)
    {
        $this->container['shippingCostType'] = $shippingCostType;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

