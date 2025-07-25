<?php
/**
 * FlashSwapOrderRequest
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
 * FlashSwapOrderRequest Class Doc Comment
 *
 * @category Class
 * @description Parameters of flash swap order creation.
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class FlashSwapOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FlashSwapOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'preview_id' => 'string',
        'sell_currency' => 'string',
        'sell_amount' => 'string',
        'buy_currency' => 'string',
        'buy_amount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'preview_id' => null,
        'sell_currency' => null,
        'sell_amount' => null,
        'buy_currency' => null,
        'buy_amount' => null
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
        'preview_id' => 'preview_id',
        'sell_currency' => 'sell_currency',
        'sell_amount' => 'sell_amount',
        'buy_currency' => 'buy_currency',
        'buy_amount' => 'buy_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preview_id' => 'setPreviewId',
        'sell_currency' => 'setSellCurrency',
        'sell_amount' => 'setSellAmount',
        'buy_currency' => 'setBuyCurrency',
        'buy_amount' => 'setBuyAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preview_id' => 'getPreviewId',
        'sell_currency' => 'getSellCurrency',
        'sell_amount' => 'getSellAmount',
        'buy_currency' => 'getBuyCurrency',
        'buy_amount' => 'getBuyAmount'
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
        $this->container['preview_id'] = isset($data['preview_id']) ? $data['preview_id'] : null;
        $this->container['sell_currency'] = isset($data['sell_currency']) ? $data['sell_currency'] : null;
        $this->container['sell_amount'] = isset($data['sell_amount']) ? $data['sell_amount'] : null;
        $this->container['buy_currency'] = isset($data['buy_currency']) ? $data['buy_currency'] : null;
        $this->container['buy_amount'] = isset($data['buy_amount']) ? $data['buy_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['preview_id'] === null) {
            $invalidProperties[] = "'preview_id' can't be null";
        }
        if ($this->container['sell_currency'] === null) {
            $invalidProperties[] = "'sell_currency' can't be null";
        }
        if ($this->container['sell_amount'] === null) {
            $invalidProperties[] = "'sell_amount' can't be null";
        }
        if ($this->container['buy_currency'] === null) {
            $invalidProperties[] = "'buy_currency' can't be null";
        }
        if ($this->container['buy_amount'] === null) {
            $invalidProperties[] = "'buy_amount' can't be null";
        }
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
     * Gets preview_id
     *
     * @return string
     */
    public function getPreviewId()
    {
        return $this->container['preview_id'];
    }

    /**
     * Sets preview_id
     *
     * @param string $preview_id Preview result ID.
     *
     * @return $this
     */
    public function setPreviewId($preview_id)
    {
        $this->container['preview_id'] = $preview_id;

        return $this;
    }

    /**
     * Gets sell_currency
     *
     * @return string
     */
    public function getSellCurrency()
    {
        return $this->container['sell_currency'];
    }

    /**
     * Sets sell_currency
     *
     * @param string $sell_currency Name of the asset to be sold, obtained from the interface GET /flash_swap/currency_pairs: Query the list of all trading pairs supporting flash swap
     *
     * @return $this
     */
    public function setSellCurrency($sell_currency)
    {
        $this->container['sell_currency'] = $sell_currency;

        return $this;
    }

    /**
     * Gets sell_amount
     *
     * @return string
     */
    public function getSellAmount()
    {
        return $this->container['sell_amount'];
    }

    /**
     * Sets sell_amount
     *
     * @param string $sell_amount Amount to sell (based on the preview result).
     *
     * @return $this
     */
    public function setSellAmount($sell_amount)
    {
        $this->container['sell_amount'] = $sell_amount;

        return $this;
    }

    /**
     * Gets buy_currency
     *
     * @return string
     */
    public function getBuyCurrency()
    {
        return $this->container['buy_currency'];
    }

    /**
     * Sets buy_currency
     *
     * @param string $buy_currency Name of the asset to be bought, obtained from the interface GET /flash_swap/currency_pairs: Query the list of all trading pairs supporting flash swap
     *
     * @return $this
     */
    public function setBuyCurrency($buy_currency)
    {
        $this->container['buy_currency'] = $buy_currency;

        return $this;
    }

    /**
     * Gets buy_amount
     *
     * @return string
     */
    public function getBuyAmount()
    {
        return $this->container['buy_amount'];
    }

    /**
     * Sets buy_amount
     *
     * @param string $buy_amount Amount to buy (based on the preview result).
     *
     * @return $this
     */
    public function setBuyAmount($buy_amount)
    {
        $this->container['buy_amount'] = $buy_amount;

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


