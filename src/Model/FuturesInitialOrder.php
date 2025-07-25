<?php
/**
 * FuturesInitialOrder
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
 * FuturesInitialOrder Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class FuturesInitialOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesInitialOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contract' => 'string',
        'size' => 'int',
        'price' => 'string',
        'close' => 'bool',
        'tif' => 'string',
        'text' => 'string',
        'reduce_only' => 'bool',
        'auto_size' => 'string',
        'is_reduce_only' => 'bool',
        'is_close' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contract' => null,
        'size' => 'int64',
        'price' => null,
        'close' => null,
        'tif' => null,
        'text' => null,
        'reduce_only' => null,
        'auto_size' => null,
        'is_reduce_only' => null,
        'is_close' => null
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
        'contract' => 'contract',
        'size' => 'size',
        'price' => 'price',
        'close' => 'close',
        'tif' => 'tif',
        'text' => 'text',
        'reduce_only' => 'reduce_only',
        'auto_size' => 'auto_size',
        'is_reduce_only' => 'is_reduce_only',
        'is_close' => 'is_close'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'size' => 'setSize',
        'price' => 'setPrice',
        'close' => 'setClose',
        'tif' => 'setTif',
        'text' => 'setText',
        'reduce_only' => 'setReduceOnly',
        'auto_size' => 'setAutoSize',
        'is_reduce_only' => 'setIsReduceOnly',
        'is_close' => 'setIsClose'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'size' => 'getSize',
        'price' => 'getPrice',
        'close' => 'getClose',
        'tif' => 'getTif',
        'text' => 'getText',
        'reduce_only' => 'getReduceOnly',
        'auto_size' => 'getAutoSize',
        'is_reduce_only' => 'getIsReduceOnly',
        'is_close' => 'getIsClose'
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

    const TIF_GTC = 'gtc';
    const TIF_IOC = 'ioc';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTifAllowableValues()
    {
        return [
            self::TIF_GTC,
            self::TIF_IOC,
        ];
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
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['close'] = isset($data['close']) ? $data['close'] : false;
        $this->container['tif'] = isset($data['tif']) ? $data['tif'] : 'gtc';
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['reduce_only'] = isset($data['reduce_only']) ? $data['reduce_only'] : false;
        $this->container['auto_size'] = isset($data['auto_size']) ? $data['auto_size'] : null;
        $this->container['is_reduce_only'] = isset($data['is_reduce_only']) ? $data['is_reduce_only'] : null;
        $this->container['is_close'] = isset($data['is_close']) ? $data['is_close'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contract'] === null) {
            $invalidProperties[] = "'contract' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        $allowedValues = $this->getTifAllowableValues();
        if (!is_null($this->container['tif']) && !in_array($this->container['tif'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tif', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets contract
     *
     * @return string
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string $contract Futures contract.
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Represents the number of contracts that need to be closed, full closing: size=0 Partial closing: plan-close-short-position size>0  Partial closing: plan-close-long-position size<0
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price Order price. Set to 0 to use market price.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets close
     *
     * @return bool|null
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close
     *
     * @param bool|null $close When all positions are closed in a single position mode, it must be set to true to perform the closing operation When partially closed positions in single-store mode/double-store mode, you can not set close, or close=false
     *
     * @return $this
     */
    public function setClose($close)
    {
        $this->container['close'] = $close;

        return $this;
    }

    /**
     * Gets tif
     *
     * @return string|null
     */
    public function getTif()
    {
        return $this->container['tif'];
    }

    /**
     * Sets tif
     *
     * @param string|null $tif Time in force strategy, default is gtc, market order currently only supports ioc mode mode  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled
     *
     * @return $this
     */
    public function setTif($tif)
    {
        $allowedValues = $this->getTifAllowableValues();
        if (!is_null($tif) && !in_array($tif, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tif', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tif'] = $tif;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The source of the order, including: - web: web - api: api - app: app
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets reduce_only
     *
     * @return bool|null
     */
    public function getReduceOnly()
    {
        return $this->container['reduce_only'];
    }

    /**
     * Sets reduce_only
     *
     * @param bool|null $reduce_only When set to true, perform automatic position reduction operation. Set to true to ensure that the order will not open a new position, and is only used to close or reduce positions
     *
     * @return $this
     */
    public function setReduceOnly($reduce_only)
    {
        $this->container['reduce_only'] = $reduce_only;

        return $this;
    }

    /**
     * Gets auto_size
     *
     * @return string|null
     */
    public function getAutoSize()
    {
        return $this->container['auto_size'];
    }

    /**
     * Sets auto_size
     *
     * @param string|null $auto_size Do not set auto_size When the dual-position mode is closed all positions (size=0), auto_size, close_long, close_short, short When the double-storey mode partially closes the position (size ≠ 0), there is no need to set auto_size
     *
     * @return $this
     */
    public function setAutoSize($auto_size)
    {
        $this->container['auto_size'] = $auto_size;

        return $this;
    }

    /**
     * Gets is_reduce_only
     *
     * @return bool|null
     */
    public function getIsReduceOnly()
    {
        return $this->container['is_reduce_only'];
    }

    /**
     * Sets is_reduce_only
     *
     * @param bool|null $is_reduce_only Is the order reduce-only.
     *
     * @return $this
     */
    public function setIsReduceOnly($is_reduce_only)
    {
        $this->container['is_reduce_only'] = $is_reduce_only;

        return $this;
    }

    /**
     * Gets is_close
     *
     * @return bool|null
     */
    public function getIsClose()
    {
        return $this->container['is_close'];
    }

    /**
     * Sets is_close
     *
     * @param bool|null $is_close Is the order to close position.
     *
     * @return $this
     */
    public function setIsClose($is_close)
    {
        $this->container['is_close'] = $is_close;

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


