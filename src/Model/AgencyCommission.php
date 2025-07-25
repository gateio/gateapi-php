<?php
/**
 * AgencyCommission
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
 * AgencyCommission Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class AgencyCommission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AgencyCommission';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commission_time' => 'int',
        'user_id' => 'int',
        'group_name' => 'string',
        'commission_amount' => 'string',
        'commission_asset' => 'string',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'commission_time' => 'int64',
        'user_id' => 'int64',
        'group_name' => null,
        'commission_amount' => null,
        'commission_asset' => null,
        'source' => null
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
        'commission_time' => 'commission_time',
        'user_id' => 'user_id',
        'group_name' => 'group_name',
        'commission_amount' => 'commission_amount',
        'commission_asset' => 'commission_asset',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commission_time' => 'setCommissionTime',
        'user_id' => 'setUserId',
        'group_name' => 'setGroupName',
        'commission_amount' => 'setCommissionAmount',
        'commission_asset' => 'setCommissionAsset',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commission_time' => 'getCommissionTime',
        'user_id' => 'getUserId',
        'group_name' => 'getGroupName',
        'commission_amount' => 'getCommissionAmount',
        'commission_asset' => 'getCommissionAsset',
        'source' => 'getSource'
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
        $this->container['commission_time'] = isset($data['commission_time']) ? $data['commission_time'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['commission_amount'] = isset($data['commission_amount']) ? $data['commission_amount'] : null;
        $this->container['commission_asset'] = isset($data['commission_asset']) ? $data['commission_asset'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
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
     * Gets commission_time
     *
     * @return int|null
     */
    public function getCommissionTime()
    {
        return $this->container['commission_time'];
    }

    /**
     * Sets commission_time
     *
     * @param int|null $commission_time Commission Time. (unix timestamp).
     *
     * @return $this
     */
    public function setCommissionTime($commission_time)
    {
        $this->container['commission_time'] = $commission_time;

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
     * @param int|null $user_id User ID.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name Group name.
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets commission_amount
     *
     * @return string|null
     */
    public function getCommissionAmount()
    {
        return $this->container['commission_amount'];
    }

    /**
     * Sets commission_amount
     *
     * @param string|null $commission_amount Commission Amount.
     *
     * @return $this
     */
    public function setCommissionAmount($commission_amount)
    {
        $this->container['commission_amount'] = $commission_amount;

        return $this;
    }

    /**
     * Gets commission_asset
     *
     * @return string|null
     */
    public function getCommissionAsset()
    {
        return $this->container['commission_asset'];
    }

    /**
     * Sets commission_asset
     *
     * @param string|null $commission_asset Commission Asset.
     *
     * @return $this
     */
    public function setCommissionAsset($commission_asset)
    {
        $this->container['commission_asset'] = $commission_asset;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Source. SPOT - SPOT Rebate, FUTURES - Futures Rebate.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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


