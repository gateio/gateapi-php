<?php
/**
 * CollateralLtv
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * CollateralLtv Class Doc Comment
 *
 * @category Class
 * @description Collateral Ratio
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class CollateralLtv implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CollateralLtv';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'init_ltv' => 'string',
        'alert_ltv' => 'string',
        'liquidate_ltv' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'init_ltv' => null,
        'alert_ltv' => null,
        'liquidate_ltv' => null
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
        'init_ltv' => 'init_ltv',
        'alert_ltv' => 'alert_ltv',
        'liquidate_ltv' => 'liquidate_ltv'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'init_ltv' => 'setInitLtv',
        'alert_ltv' => 'setAlertLtv',
        'liquidate_ltv' => 'setLiquidateLtv'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'init_ltv' => 'getInitLtv',
        'alert_ltv' => 'getAlertLtv',
        'liquidate_ltv' => 'getLiquidateLtv'
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
        $this->container['init_ltv'] = isset($data['init_ltv']) ? $data['init_ltv'] : null;
        $this->container['alert_ltv'] = isset($data['alert_ltv']) ? $data['alert_ltv'] : null;
        $this->container['liquidate_ltv'] = isset($data['liquidate_ltv']) ? $data['liquidate_ltv'] : null;
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
     * Gets init_ltv
     *
     * @return string|null
     */
    public function getInitLtv()
    {
        return $this->container['init_ltv'];
    }

    /**
     * Sets init_ltv
     *
     * @param string|null $init_ltv The initial collateralization rate
     *
     * @return $this
     */
    public function setInitLtv($init_ltv)
    {
        $this->container['init_ltv'] = $init_ltv;

        return $this;
    }

    /**
     * Gets alert_ltv
     *
     * @return string|null
     */
    public function getAlertLtv()
    {
        return $this->container['alert_ltv'];
    }

    /**
     * Sets alert_ltv
     *
     * @param string|null $alert_ltv Warning collateralization ratio
     *
     * @return $this
     */
    public function setAlertLtv($alert_ltv)
    {
        $this->container['alert_ltv'] = $alert_ltv;

        return $this;
    }

    /**
     * Gets liquidate_ltv
     *
     * @return string|null
     */
    public function getLiquidateLtv()
    {
        return $this->container['liquidate_ltv'];
    }

    /**
     * Sets liquidate_ltv
     *
     * @param string|null $liquidate_ltv The liquidation collateralization rate
     *
     * @return $this
     */
    public function setLiquidateLtv($liquidate_ltv)
    {
        $this->container['liquidate_ltv'] = $liquidate_ltv;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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

