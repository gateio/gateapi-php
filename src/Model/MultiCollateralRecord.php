<?php
/**
 * MultiCollateralRecord
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
 * MultiCollateralRecord Class Doc Comment
 *
 * @category Class
 * @description Multi-Collateral adjustment record.
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class MultiCollateralRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MultiCollateralRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_id' => 'int',
        'record_id' => 'int',
        'before_ltv' => 'string',
        'after_ltv' => 'string',
        'operate_time' => 'int',
        'borrow_currencies' => '\GateApi\Model\MultiCollateralRecordCurrency[]',
        'collateral_currencies' => '\GateApi\Model\MultiCollateralRecordCurrency[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'order_id' => 'int64',
        'record_id' => 'int64',
        'before_ltv' => null,
        'after_ltv' => null,
        'operate_time' => 'int64',
        'borrow_currencies' => null,
        'collateral_currencies' => null
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
        'order_id' => 'order_id',
        'record_id' => 'record_id',
        'before_ltv' => 'before_ltv',
        'after_ltv' => 'after_ltv',
        'operate_time' => 'operate_time',
        'borrow_currencies' => 'borrow_currencies',
        'collateral_currencies' => 'collateral_currencies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
        'record_id' => 'setRecordId',
        'before_ltv' => 'setBeforeLtv',
        'after_ltv' => 'setAfterLtv',
        'operate_time' => 'setOperateTime',
        'borrow_currencies' => 'setBorrowCurrencies',
        'collateral_currencies' => 'setCollateralCurrencies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
        'record_id' => 'getRecordId',
        'before_ltv' => 'getBeforeLtv',
        'after_ltv' => 'getAfterLtv',
        'operate_time' => 'getOperateTime',
        'borrow_currencies' => 'getBorrowCurrencies',
        'collateral_currencies' => 'getCollateralCurrencies'
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['record_id'] = isset($data['record_id']) ? $data['record_id'] : null;
        $this->container['before_ltv'] = isset($data['before_ltv']) ? $data['before_ltv'] : null;
        $this->container['after_ltv'] = isset($data['after_ltv']) ? $data['after_ltv'] : null;
        $this->container['operate_time'] = isset($data['operate_time']) ? $data['operate_time'] : null;
        $this->container['borrow_currencies'] = isset($data['borrow_currencies']) ? $data['borrow_currencies'] : null;
        $this->container['collateral_currencies'] = isset($data['collateral_currencies']) ? $data['collateral_currencies'] : null;
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
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id Order ID.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets record_id
     *
     * @return int|null
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     *
     * @param int|null $record_id Collateral record ID.
     *
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets before_ltv
     *
     * @return string|null
     */
    public function getBeforeLtv()
    {
        return $this->container['before_ltv'];
    }

    /**
     * Sets before_ltv
     *
     * @param string|null $before_ltv The collateral ratio before adjustment.
     *
     * @return $this
     */
    public function setBeforeLtv($before_ltv)
    {
        $this->container['before_ltv'] = $before_ltv;

        return $this;
    }

    /**
     * Gets after_ltv
     *
     * @return string|null
     */
    public function getAfterLtv()
    {
        return $this->container['after_ltv'];
    }

    /**
     * Sets after_ltv
     *
     * @param string|null $after_ltv The collateral ratio before adjustment.
     *
     * @return $this
     */
    public function setAfterLtv($after_ltv)
    {
        $this->container['after_ltv'] = $after_ltv;

        return $this;
    }

    /**
     * Gets operate_time
     *
     * @return int|null
     */
    public function getOperateTime()
    {
        return $this->container['operate_time'];
    }

    /**
     * Sets operate_time
     *
     * @param int|null $operate_time Operation time, timestamp in seconds.
     *
     * @return $this
     */
    public function setOperateTime($operate_time)
    {
        $this->container['operate_time'] = $operate_time;

        return $this;
    }

    /**
     * Gets borrow_currencies
     *
     * @return \GateApi\Model\MultiCollateralRecordCurrency[]|null
     */
    public function getBorrowCurrencies()
    {
        return $this->container['borrow_currencies'];
    }

    /**
     * Sets borrow_currencies
     *
     * @param \GateApi\Model\MultiCollateralRecordCurrency[]|null $borrow_currencies Borrowing Currency List.
     *
     * @return $this
     */
    public function setBorrowCurrencies($borrow_currencies)
    {
        $this->container['borrow_currencies'] = $borrow_currencies;

        return $this;
    }

    /**
     * Gets collateral_currencies
     *
     * @return \GateApi\Model\MultiCollateralRecordCurrency[]|null
     */
    public function getCollateralCurrencies()
    {
        return $this->container['collateral_currencies'];
    }

    /**
     * Sets collateral_currencies
     *
     * @param \GateApi\Model\MultiCollateralRecordCurrency[]|null $collateral_currencies Collateral Currency List.
     *
     * @return $this
     */
    public function setCollateralCurrencies($collateral_currencies)
    {
        $this->container['collateral_currencies'] = $collateral_currencies;

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


