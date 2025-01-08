<?php
/**
 * AccountDetail
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
 * AccountDetail Class Doc Comment
 *
 * @category Class
 * @description Account detail
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class AccountDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ip_whitelist' => 'string[]',
        'currency_pairs' => 'string[]',
        'user_id' => 'int',
        'tier' => 'int',
        'key' => '\GateApi\Model\AccountDetailKey',
        'copy_trading_role' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ip_whitelist' => null,
        'currency_pairs' => null,
        'user_id' => 'int64',
        'tier' => 'int64',
        'key' => null,
        'copy_trading_role' => 'int32'
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
        'ip_whitelist' => 'ip_whitelist',
        'currency_pairs' => 'currency_pairs',
        'user_id' => 'user_id',
        'tier' => 'tier',
        'key' => 'key',
        'copy_trading_role' => 'copy_trading_role'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ip_whitelist' => 'setIpWhitelist',
        'currency_pairs' => 'setCurrencyPairs',
        'user_id' => 'setUserId',
        'tier' => 'setTier',
        'key' => 'setKey',
        'copy_trading_role' => 'setCopyTradingRole'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ip_whitelist' => 'getIpWhitelist',
        'currency_pairs' => 'getCurrencyPairs',
        'user_id' => 'getUserId',
        'tier' => 'getTier',
        'key' => 'getKey',
        'copy_trading_role' => 'getCopyTradingRole'
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
        $this->container['ip_whitelist'] = isset($data['ip_whitelist']) ? $data['ip_whitelist'] : null;
        $this->container['currency_pairs'] = isset($data['currency_pairs']) ? $data['currency_pairs'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['copy_trading_role'] = isset($data['copy_trading_role']) ? $data['copy_trading_role'] : null;
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
     * Gets ip_whitelist
     *
     * @return string[]|null
     */
    public function getIpWhitelist()
    {
        return $this->container['ip_whitelist'];
    }

    /**
     * Sets ip_whitelist
     *
     * @param string[]|null $ip_whitelist IP whitelist
     *
     * @return $this
     */
    public function setIpWhitelist($ip_whitelist)
    {
        $this->container['ip_whitelist'] = $ip_whitelist;

        return $this;
    }

    /**
     * Gets currency_pairs
     *
     * @return string[]|null
     */
    public function getCurrencyPairs()
    {
        return $this->container['currency_pairs'];
    }

    /**
     * Sets currency_pairs
     *
     * @param string[]|null $currency_pairs CurrencyPair whitelisting
     *
     * @return $this
     */
    public function setCurrencyPairs($currency_pairs)
    {
        $this->container['currency_pairs'] = $currency_pairs;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id User ID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return int|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param int|null $tier User VIP level
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets key
     *
     * @return \GateApi\Model\AccountDetailKey|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param \GateApi\Model\AccountDetailKey|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets copy_trading_role
     *
     * @return int|null
     */
    public function getCopyTradingRole()
    {
        return $this->container['copy_trading_role'];
    }

    /**
     * Sets copy_trading_role
     *
     * @param int|null $copy_trading_role User role: 0 - Ordinary user 1 - Order leader 2 - Follower 3 - Order leader and follower
     *
     * @return $this
     */
    public function setCopyTradingRole($copy_trading_role)
    {
        $this->container['copy_trading_role'] = $copy_trading_role;

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

