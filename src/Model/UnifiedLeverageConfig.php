<?php
/**
 * UnifiedLeverageConfig
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
 * UnifiedLeverageConfig Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class UnifiedLeverageConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnifiedLeverageConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_leverage' => 'string',
        'min_leverage' => 'string',
        'max_leverage' => 'string',
        'debit' => 'string',
        'available_margin' => 'string',
        'borrowable' => 'string',
        'except_leverage_borrowable' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'current_leverage' => null,
        'min_leverage' => null,
        'max_leverage' => null,
        'debit' => null,
        'available_margin' => null,
        'borrowable' => null,
        'except_leverage_borrowable' => null
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
        'current_leverage' => 'current_leverage',
        'min_leverage' => 'min_leverage',
        'max_leverage' => 'max_leverage',
        'debit' => 'debit',
        'available_margin' => 'available_margin',
        'borrowable' => 'borrowable',
        'except_leverage_borrowable' => 'except_leverage_borrowable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_leverage' => 'setCurrentLeverage',
        'min_leverage' => 'setMinLeverage',
        'max_leverage' => 'setMaxLeverage',
        'debit' => 'setDebit',
        'available_margin' => 'setAvailableMargin',
        'borrowable' => 'setBorrowable',
        'except_leverage_borrowable' => 'setExceptLeverageBorrowable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_leverage' => 'getCurrentLeverage',
        'min_leverage' => 'getMinLeverage',
        'max_leverage' => 'getMaxLeverage',
        'debit' => 'getDebit',
        'available_margin' => 'getAvailableMargin',
        'borrowable' => 'getBorrowable',
        'except_leverage_borrowable' => 'getExceptLeverageBorrowable'
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
        $this->container['current_leverage'] = isset($data['current_leverage']) ? $data['current_leverage'] : null;
        $this->container['min_leverage'] = isset($data['min_leverage']) ? $data['min_leverage'] : null;
        $this->container['max_leverage'] = isset($data['max_leverage']) ? $data['max_leverage'] : null;
        $this->container['debit'] = isset($data['debit']) ? $data['debit'] : null;
        $this->container['available_margin'] = isset($data['available_margin']) ? $data['available_margin'] : null;
        $this->container['borrowable'] = isset($data['borrowable']) ? $data['borrowable'] : null;
        $this->container['except_leverage_borrowable'] = isset($data['except_leverage_borrowable']) ? $data['except_leverage_borrowable'] : null;
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
     * Gets current_leverage
     *
     * @return string|null
     */
    public function getCurrentLeverage()
    {
        return $this->container['current_leverage'];
    }

    /**
     * Sets current_leverage
     *
     * @param string|null $current_leverage Current leverage ratio.
     *
     * @return $this
     */
    public function setCurrentLeverage($current_leverage)
    {
        $this->container['current_leverage'] = $current_leverage;

        return $this;
    }

    /**
     * Gets min_leverage
     *
     * @return string|null
     */
    public function getMinLeverage()
    {
        return $this->container['min_leverage'];
    }

    /**
     * Sets min_leverage
     *
     * @param string|null $min_leverage Minimum adjustable leverage ratio.
     *
     * @return $this
     */
    public function setMinLeverage($min_leverage)
    {
        $this->container['min_leverage'] = $min_leverage;

        return $this;
    }

    /**
     * Gets max_leverage
     *
     * @return string|null
     */
    public function getMaxLeverage()
    {
        return $this->container['max_leverage'];
    }

    /**
     * Sets max_leverage
     *
     * @param string|null $max_leverage Maximum adjustable leverage ratio.
     *
     * @return $this
     */
    public function setMaxLeverage($max_leverage)
    {
        $this->container['max_leverage'] = $max_leverage;

        return $this;
    }

    /**
     * Gets debit
     *
     * @return string|null
     */
    public function getDebit()
    {
        return $this->container['debit'];
    }

    /**
     * Sets debit
     *
     * @param string|null $debit Current liabilities.
     *
     * @return $this
     */
    public function setDebit($debit)
    {
        $this->container['debit'] = $debit;

        return $this;
    }

    /**
     * Gets available_margin
     *
     * @return string|null
     */
    public function getAvailableMargin()
    {
        return $this->container['available_margin'];
    }

    /**
     * Sets available_margin
     *
     * @param string|null $available_margin Available Margin.
     *
     * @return $this
     */
    public function setAvailableMargin($available_margin)
    {
        $this->container['available_margin'] = $available_margin;

        return $this;
    }

    /**
     * Gets borrowable
     *
     * @return string|null
     */
    public function getBorrowable()
    {
        return $this->container['borrowable'];
    }

    /**
     * Sets borrowable
     *
     * @param string|null $borrowable The current leverage you can choose is.
     *
     * @return $this
     */
    public function setBorrowable($borrowable)
    {
        $this->container['borrowable'] = $borrowable;

        return $this;
    }

    /**
     * Gets except_leverage_borrowable
     *
     * @return string|null
     */
    public function getExceptLeverageBorrowable()
    {
        return $this->container['except_leverage_borrowable'];
    }

    /**
     * Sets except_leverage_borrowable
     *
     * @param string|null $except_leverage_borrowable The maximum amount of margin that can be borrowed and the be borrowed, whichever is smaller
     *
     * @return $this
     */
    public function setExceptLeverageBorrowable($except_leverage_borrowable)
    {
        $this->container['except_leverage_borrowable'] = $except_leverage_borrowable;

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


