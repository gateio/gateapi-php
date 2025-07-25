<?php
/**
 * FuturesAccountHistory
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */

/**
 * Gate API
 *
 * Welcome to Gate API  APIv4 provides operations related to spot, margin, and contract trading, including public interfaces for querying market data and authenticated private interfaces for implementing API-based automated trading.
 *
 * Contact: support@mail.gate.com
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
 * FuturesAccountHistory Class Doc Comment
 *
 * @category Class
 * @description Statistical data.
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class FuturesAccountHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesAccount_history';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dnw' => 'string',
        'pnl' => 'string',
        'fee' => 'string',
        'refr' => 'string',
        'fund' => 'string',
        'point_dnw' => 'string',
        'point_fee' => 'string',
        'point_refr' => 'string',
        'bonus_dnw' => 'string',
        'bonus_offset' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dnw' => null,
        'pnl' => null,
        'fee' => null,
        'refr' => null,
        'fund' => null,
        'point_dnw' => null,
        'point_fee' => null,
        'point_refr' => null,
        'bonus_dnw' => null,
        'bonus_offset' => null
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
        'dnw' => 'dnw',
        'pnl' => 'pnl',
        'fee' => 'fee',
        'refr' => 'refr',
        'fund' => 'fund',
        'point_dnw' => 'point_dnw',
        'point_fee' => 'point_fee',
        'point_refr' => 'point_refr',
        'bonus_dnw' => 'bonus_dnw',
        'bonus_offset' => 'bonus_offset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dnw' => 'setDnw',
        'pnl' => 'setPnl',
        'fee' => 'setFee',
        'refr' => 'setRefr',
        'fund' => 'setFund',
        'point_dnw' => 'setPointDnw',
        'point_fee' => 'setPointFee',
        'point_refr' => 'setPointRefr',
        'bonus_dnw' => 'setBonusDnw',
        'bonus_offset' => 'setBonusOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dnw' => 'getDnw',
        'pnl' => 'getPnl',
        'fee' => 'getFee',
        'refr' => 'getRefr',
        'fund' => 'getFund',
        'point_dnw' => 'getPointDnw',
        'point_fee' => 'getPointFee',
        'point_refr' => 'getPointRefr',
        'bonus_dnw' => 'getBonusDnw',
        'bonus_offset' => 'getBonusOffset'
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
        $this->container['dnw'] = isset($data['dnw']) ? $data['dnw'] : null;
        $this->container['pnl'] = isset($data['pnl']) ? $data['pnl'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['refr'] = isset($data['refr']) ? $data['refr'] : null;
        $this->container['fund'] = isset($data['fund']) ? $data['fund'] : null;
        $this->container['point_dnw'] = isset($data['point_dnw']) ? $data['point_dnw'] : null;
        $this->container['point_fee'] = isset($data['point_fee']) ? $data['point_fee'] : null;
        $this->container['point_refr'] = isset($data['point_refr']) ? $data['point_refr'] : null;
        $this->container['bonus_dnw'] = isset($data['bonus_dnw']) ? $data['bonus_dnw'] : null;
        $this->container['bonus_offset'] = isset($data['bonus_offset']) ? $data['bonus_offset'] : null;
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
     * Gets dnw
     *
     * @return string|null
     */
    public function getDnw()
    {
        return $this->container['dnw'];
    }

    /**
     * Sets dnw
     *
     * @param string|null $dnw total amount of deposit and withdraw.
     *
     * @return $this
     */
    public function setDnw($dnw)
    {
        $this->container['dnw'] = $dnw;

        return $this;
    }

    /**
     * Gets pnl
     *
     * @return string|null
     */
    public function getPnl()
    {
        return $this->container['pnl'];
    }

    /**
     * Sets pnl
     *
     * @param string|null $pnl total amount of trading profit and loss.
     *
     * @return $this
     */
    public function setPnl($pnl)
    {
        $this->container['pnl'] = $pnl;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee total amount of fee.
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets refr
     *
     * @return string|null
     */
    public function getRefr()
    {
        return $this->container['refr'];
    }

    /**
     * Sets refr
     *
     * @param string|null $refr total amount of referrer rebates.
     *
     * @return $this
     */
    public function setRefr($refr)
    {
        $this->container['refr'] = $refr;

        return $this;
    }

    /**
     * Gets fund
     *
     * @return string|null
     */
    public function getFund()
    {
        return $this->container['fund'];
    }

    /**
     * Sets fund
     *
     * @param string|null $fund total amount of funding costs.
     *
     * @return $this
     */
    public function setFund($fund)
    {
        $this->container['fund'] = $fund;

        return $this;
    }

    /**
     * Gets point_dnw
     *
     * @return string|null
     */
    public function getPointDnw()
    {
        return $this->container['point_dnw'];
    }

    /**
     * Sets point_dnw
     *
     * @param string|null $point_dnw total amount of point deposit and withdraw.
     *
     * @return $this
     */
    public function setPointDnw($point_dnw)
    {
        $this->container['point_dnw'] = $point_dnw;

        return $this;
    }

    /**
     * Gets point_fee
     *
     * @return string|null
     */
    public function getPointFee()
    {
        return $this->container['point_fee'];
    }

    /**
     * Sets point_fee
     *
     * @param string|null $point_fee total amount of point fee.
     *
     * @return $this
     */
    public function setPointFee($point_fee)
    {
        $this->container['point_fee'] = $point_fee;

        return $this;
    }

    /**
     * Gets point_refr
     *
     * @return string|null
     */
    public function getPointRefr()
    {
        return $this->container['point_refr'];
    }

    /**
     * Sets point_refr
     *
     * @param string|null $point_refr total amount of referrer rebates of point fee.
     *
     * @return $this
     */
    public function setPointRefr($point_refr)
    {
        $this->container['point_refr'] = $point_refr;

        return $this;
    }

    /**
     * Gets bonus_dnw
     *
     * @return string|null
     */
    public function getBonusDnw()
    {
        return $this->container['bonus_dnw'];
    }

    /**
     * Sets bonus_dnw
     *
     * @param string|null $bonus_dnw total amount of perpetual contract bonus transfer.
     *
     * @return $this
     */
    public function setBonusDnw($bonus_dnw)
    {
        $this->container['bonus_dnw'] = $bonus_dnw;

        return $this;
    }

    /**
     * Gets bonus_offset
     *
     * @return string|null
     */
    public function getBonusOffset()
    {
        return $this->container['bonus_offset'];
    }

    /**
     * Sets bonus_offset
     *
     * @param string|null $bonus_offset total amount of perpetual contract bonus deduction.
     *
     * @return $this
     */
    public function setBonusOffset($bonus_offset)
    {
        $this->container['bonus_offset'] = $bonus_offset;

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


