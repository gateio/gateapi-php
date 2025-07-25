<?php
/**
 * SpotPricePutOrder
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
 * SpotPricePutOrder Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class SpotPricePutOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpotPricePutOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'side' => 'string',
        'price' => 'string',
        'amount' => 'string',
        'account' => 'string',
        'time_in_force' => 'string',
        'auto_borrow' => 'bool',
        'auto_repay' => 'bool',
        'text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'side' => null,
        'price' => null,
        'amount' => null,
        'account' => null,
        'time_in_force' => null,
        'auto_borrow' => null,
        'auto_repay' => null,
        'text' => null
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
        'type' => 'type',
        'side' => 'side',
        'price' => 'price',
        'amount' => 'amount',
        'account' => 'account',
        'time_in_force' => 'time_in_force',
        'auto_borrow' => 'auto_borrow',
        'auto_repay' => 'auto_repay',
        'text' => 'text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'side' => 'setSide',
        'price' => 'setPrice',
        'amount' => 'setAmount',
        'account' => 'setAccount',
        'time_in_force' => 'setTimeInForce',
        'auto_borrow' => 'setAutoBorrow',
        'auto_repay' => 'setAutoRepay',
        'text' => 'setText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'side' => 'getSide',
        'price' => 'getPrice',
        'amount' => 'getAmount',
        'account' => 'getAccount',
        'time_in_force' => 'getTimeInForce',
        'auto_borrow' => 'getAutoBorrow',
        'auto_repay' => 'getAutoRepay',
        'text' => 'getText'
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

    const TYPE_LIMIT = 'limit';
    const TYPE_MARKET = 'market';
    const SIDE_BUY = 'buy';
    const SIDE_SELL = 'sell';
    const ACCOUNT_NORMAL = 'normal';
    const ACCOUNT_MARGIN = 'margin';
    const ACCOUNT_UNIFIED = 'unified';
    const TIME_IN_FORCE_GTC = 'gtc';
    const TIME_IN_FORCE_IOC = 'ioc';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_LIMIT,
            self::TYPE_MARKET,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_BUY,
            self::SIDE_SELL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountAllowableValues()
    {
        return [
            self::ACCOUNT_NORMAL,
            self::ACCOUNT_MARGIN,
            self::ACCOUNT_UNIFIED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTimeInForceAllowableValues()
    {
        return [
            self::TIME_IN_FORCE_GTC,
            self::TIME_IN_FORCE_IOC,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'limit';
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : 'normal';
        $this->container['time_in_force'] = isset($data['time_in_force']) ? $data['time_in_force'] : 'gtc';
        $this->container['auto_borrow'] = isset($data['auto_borrow']) ? $data['auto_borrow'] : false;
        $this->container['auto_repay'] = isset($data['auto_repay']) ? $data['auto_repay'] : false;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['side'] === null) {
            $invalidProperties[] = "'side' can't be null";
        }
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        $allowedValues = $this->getAccountAllowableValues();
        if (!is_null($this->container['account']) && !in_array($this->container['account'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTimeInForceAllowableValues();
        if (!is_null($this->container['time_in_force']) && !in_array($this->container['time_in_force'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'time_in_force', must be one of '%s'",
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Order type，default to `limit`  - limit : Limit Order - market : Market Order
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side Order side  - buy: buy side - sell: sell side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

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
     * @param string $price Order price.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount When `type` is limit, it refers to base currency. For instance, `BTC_USDT` means `BTC`  When different currency according to `side`  - `side` : `buy` means quote currency, `BTC_USDT` means `USDT` - `side` : `sell` means base currency，`BTC_USDT` means `BTC`
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string $account Trading account type. Portfolio margin account must set to `unified`  -normal: spot trading - margin: margin trading - unified: unified trading
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $allowedValues = $this->getAccountAllowableValues();
        if (!in_array($account, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return string|null
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param string|null $time_in_force time_in_force  - gtc: GoodTillCancelled - ioc: ImmediateOrCancelled, taker only
     *
     * @return $this
     */
    public function setTimeInForce($time_in_force)
    {
        $allowedValues = $this->getTimeInForceAllowableValues();
        if (!is_null($time_in_force) && !in_array($time_in_force, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'time_in_force', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets auto_borrow
     *
     * @return bool|null
     */
    public function getAutoBorrow()
    {
        return $this->container['auto_borrow'];
    }

    /**
     * Sets auto_borrow
     *
     * @param bool|null $auto_borrow Whether to borrow coins automatically.
     *
     * @return $this
     */
    public function setAutoBorrow($auto_borrow)
    {
        $this->container['auto_borrow'] = $auto_borrow;

        return $this;
    }

    /**
     * Gets auto_repay
     *
     * @return bool|null
     */
    public function getAutoRepay()
    {
        return $this->container['auto_repay'];
    }

    /**
     * Sets auto_repay
     *
     * @param bool|null $auto_repay Whether to repay the loan automatically.
     *
     * @return $this
     */
    public function setAutoRepay($auto_repay)
    {
        $this->container['auto_repay'] = $auto_repay;

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


