<?php
/**
 * CheckoutFormDeliveryReference
 *
 * PHP version 5
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Allegro REST API
 *
 * https://developer.allegro.pl/about
 *
 * The version of the OpenAPI document: latest
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AllegroApi\Model;

use \ArrayAccess;
use \AllegroApi\ObjectSerializer;

/**
 * CheckoutFormDeliveryReference Class Doc Comment
 *
 * @category Class
 * @package  AllegroApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutFormDeliveryReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutFormDeliveryReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => '\AllegroApi\Model\CheckoutFormDeliveryAddress',
        'method' => '\AllegroApi\Model\CheckoutFormDeliveryMethod',
        'pickup_point' => '\AllegroApi\Model\CheckoutFormDeliveryPickupPoint',
        'cost' => '\AllegroApi\Model\Price',
        'time' => '\AllegroApi\Model\CheckoutFormDeliveryTime',
        'smart' => 'bool',
        'calculated_number_of_packages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'address' => null,
        'method' => null,
        'pickup_point' => null,
        'cost' => null,
        'time' => null,
        'smart' => null,
        'calculated_number_of_packages' => 'int32'
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
        'address' => 'address',
        'method' => 'method',
        'pickup_point' => 'pickupPoint',
        'cost' => 'cost',
        'time' => 'time',
        'smart' => 'smart',
        'calculated_number_of_packages' => 'calculatedNumberOfPackages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'method' => 'setMethod',
        'pickup_point' => 'setPickupPoint',
        'cost' => 'setCost',
        'time' => 'setTime',
        'smart' => 'setSmart',
        'calculated_number_of_packages' => 'setCalculatedNumberOfPackages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'method' => 'getMethod',
        'pickup_point' => 'getPickupPoint',
        'cost' => 'getCost',
        'time' => 'getTime',
        'smart' => 'getSmart',
        'calculated_number_of_packages' => 'getCalculatedNumberOfPackages'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['pickup_point'] = isset($data['pickup_point']) ? $data['pickup_point'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['smart'] = isset($data['smart']) ? $data['smart'] : null;
        $this->container['calculated_number_of_packages'] = isset($data['calculated_number_of_packages']) ? $data['calculated_number_of_packages'] : null;
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
     * Gets address
     *
     * @return \AllegroApi\Model\CheckoutFormDeliveryAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \AllegroApi\Model\CheckoutFormDeliveryAddress|null $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \AllegroApi\Model\CheckoutFormDeliveryMethod|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \AllegroApi\Model\CheckoutFormDeliveryMethod|null $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets pickup_point
     *
     * @return \AllegroApi\Model\CheckoutFormDeliveryPickupPoint|null
     */
    public function getPickupPoint()
    {
        return $this->container['pickup_point'];
    }

    /**
     * Sets pickup_point
     *
     * @param \AllegroApi\Model\CheckoutFormDeliveryPickupPoint|null $pickup_point pickup_point
     *
     * @return $this
     */
    public function setPickupPoint($pickup_point)
    {
        $this->container['pickup_point'] = $pickup_point;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return \AllegroApi\Model\Price|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \AllegroApi\Model\Price|null $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \AllegroApi\Model\CheckoutFormDeliveryTime|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \AllegroApi\Model\CheckoutFormDeliveryTime|null $time time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets smart
     *
     * @return bool|null
     */
    public function getSmart()
    {
        return $this->container['smart'];
    }

    /**
     * Sets smart
     *
     * @param bool|null $smart Buyer used a SMART option
     *
     * @return $this
     */
    public function setSmart($smart)
    {
        $this->container['smart'] = $smart;

        return $this;
    }

    /**
     * Gets calculated_number_of_packages
     *
     * @return int|null
     */
    public function getCalculatedNumberOfPackages()
    {
        return $this->container['calculated_number_of_packages'];
    }

    /**
     * Sets calculated_number_of_packages
     *
     * @param int|null $calculated_number_of_packages Calculated number of packages.
     *
     * @return $this
     */
    public function setCalculatedNumberOfPackages($calculated_number_of_packages)
    {
        $this->container['calculated_number_of_packages'] = $calculated_number_of_packages;

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

