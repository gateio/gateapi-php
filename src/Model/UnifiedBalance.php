<?php
/**
 * UnifiedBalance
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
 * UnifiedBalance Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class UnifiedBalance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnifiedBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available' => 'string',
        'freeze' => 'string',
        'borrowed' => 'string',
        'negative_liab' => 'string',
        'futures_pos_liab' => 'string',
        'equity' => 'string',
        'total_freeze' => 'string',
        'total_liab' => 'string',
        'spot_in_use' => 'string',
        'funding' => 'string',
        'funding_version' => 'string',
        'cross_balance' => 'string',
        'iso_balance' => 'string',
        'im' => 'string',
        'mm' => 'string',
        'imr' => 'string',
        'mmr' => 'string',
        'margin_balance' => 'string',
        'available_margin' => 'string',
        'enabled_collateral' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'available' => null,
        'freeze' => null,
        'borrowed' => null,
        'negative_liab' => null,
        'futures_pos_liab' => null,
        'equity' => null,
        'total_freeze' => null,
        'total_liab' => null,
        'spot_in_use' => null,
        'funding' => null,
        'funding_version' => null,
        'cross_balance' => null,
        'iso_balance' => null,
        'im' => null,
        'mm' => null,
        'imr' => null,
        'mmr' => null,
        'margin_balance' => null,
        'available_margin' => null,
        'enabled_collateral' => null
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
        'available' => 'available',
        'freeze' => 'freeze',
        'borrowed' => 'borrowed',
        'negative_liab' => 'negative_liab',
        'futures_pos_liab' => 'futures_pos_liab',
        'equity' => 'equity',
        'total_freeze' => 'total_freeze',
        'total_liab' => 'total_liab',
        'spot_in_use' => 'spot_in_use',
        'funding' => 'funding',
        'funding_version' => 'funding_version',
        'cross_balance' => 'cross_balance',
        'iso_balance' => 'iso_balance',
        'im' => 'im',
        'mm' => 'mm',
        'imr' => 'imr',
        'mmr' => 'mmr',
        'margin_balance' => 'margin_balance',
        'available_margin' => 'available_margin',
        'enabled_collateral' => 'enabled_collateral'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable',
        'freeze' => 'setFreeze',
        'borrowed' => 'setBorrowed',
        'negative_liab' => 'setNegativeLiab',
        'futures_pos_liab' => 'setFuturesPosLiab',
        'equity' => 'setEquity',
        'total_freeze' => 'setTotalFreeze',
        'total_liab' => 'setTotalLiab',
        'spot_in_use' => 'setSpotInUse',
        'funding' => 'setFunding',
        'funding_version' => 'setFundingVersion',
        'cross_balance' => 'setCrossBalance',
        'iso_balance' => 'setIsoBalance',
        'im' => 'setIm',
        'mm' => 'setMm',
        'imr' => 'setImr',
        'mmr' => 'setMmr',
        'margin_balance' => 'setMarginBalance',
        'available_margin' => 'setAvailableMargin',
        'enabled_collateral' => 'setEnabledCollateral'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable',
        'freeze' => 'getFreeze',
        'borrowed' => 'getBorrowed',
        'negative_liab' => 'getNegativeLiab',
        'futures_pos_liab' => 'getFuturesPosLiab',
        'equity' => 'getEquity',
        'total_freeze' => 'getTotalFreeze',
        'total_liab' => 'getTotalLiab',
        'spot_in_use' => 'getSpotInUse',
        'funding' => 'getFunding',
        'funding_version' => 'getFundingVersion',
        'cross_balance' => 'getCrossBalance',
        'iso_balance' => 'getIsoBalance',
        'im' => 'getIm',
        'mm' => 'getMm',
        'imr' => 'getImr',
        'mmr' => 'getMmr',
        'margin_balance' => 'getMarginBalance',
        'available_margin' => 'getAvailableMargin',
        'enabled_collateral' => 'getEnabledCollateral'
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
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['freeze'] = isset($data['freeze']) ? $data['freeze'] : null;
        $this->container['borrowed'] = isset($data['borrowed']) ? $data['borrowed'] : null;
        $this->container['negative_liab'] = isset($data['negative_liab']) ? $data['negative_liab'] : null;
        $this->container['futures_pos_liab'] = isset($data['futures_pos_liab']) ? $data['futures_pos_liab'] : null;
        $this->container['equity'] = isset($data['equity']) ? $data['equity'] : null;
        $this->container['total_freeze'] = isset($data['total_freeze']) ? $data['total_freeze'] : null;
        $this->container['total_liab'] = isset($data['total_liab']) ? $data['total_liab'] : null;
        $this->container['spot_in_use'] = isset($data['spot_in_use']) ? $data['spot_in_use'] : null;
        $this->container['funding'] = isset($data['funding']) ? $data['funding'] : null;
        $this->container['funding_version'] = isset($data['funding_version']) ? $data['funding_version'] : null;
        $this->container['cross_balance'] = isset($data['cross_balance']) ? $data['cross_balance'] : null;
        $this->container['iso_balance'] = isset($data['iso_balance']) ? $data['iso_balance'] : null;
        $this->container['im'] = isset($data['im']) ? $data['im'] : null;
        $this->container['mm'] = isset($data['mm']) ? $data['mm'] : null;
        $this->container['imr'] = isset($data['imr']) ? $data['imr'] : null;
        $this->container['mmr'] = isset($data['mmr']) ? $data['mmr'] : null;
        $this->container['margin_balance'] = isset($data['margin_balance']) ? $data['margin_balance'] : null;
        $this->container['available_margin'] = isset($data['available_margin']) ? $data['available_margin'] : null;
        $this->container['enabled_collateral'] = isset($data['enabled_collateral']) ? $data['enabled_collateral'] : null;
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
     * Gets available
     *
     * @return string|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param string|null $available Available amount is valid in single currency margin/cross-currency margin/combined margin mode, and the calculation is different in different modes
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets freeze
     *
     * @return string|null
     */
    public function getFreeze()
    {
        return $this->container['freeze'];
    }

    /**
     * Sets freeze
     *
     * @param string|null $freeze The locked amount is valid in single currency margin/cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setFreeze($freeze)
    {
        $this->container['freeze'] = $freeze;

        return $this;
    }

    /**
     * Gets borrowed
     *
     * @return string|null
     */
    public function getBorrowed()
    {
        return $this->container['borrowed'];
    }

    /**
     * Sets borrowed
     *
     * @param string|null $borrowed Borrow limit, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setBorrowed($borrowed)
    {
        $this->container['borrowed'] = $borrowed;

        return $this;
    }

    /**
     * Gets negative_liab
     *
     * @return string|null
     */
    public function getNegativeLiab()
    {
        return $this->container['negative_liab'];
    }

    /**
     * Sets negative_liab
     *
     * @param string|null $negative_liab Negative balance loan is valid in cross-currency margin/combined margin mode, and is 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setNegativeLiab($negative_liab)
    {
        $this->container['negative_liab'] = $negative_liab;

        return $this;
    }

    /**
     * Gets futures_pos_liab
     *
     * @return string|null
     */
    public function getFuturesPosLiab()
    {
        return $this->container['futures_pos_liab'];
    }

    /**
     * Sets futures_pos_liab
     *
     * @param string|null $futures_pos_liab Contract opening position borrowing currency (abandoned, to be offline field)
     *
     * @return $this
     */
    public function setFuturesPosLiab($futures_pos_liab)
    {
        $this->container['futures_pos_liab'] = $futures_pos_liab;

        return $this;
    }

    /**
     * Gets equity
     *
     * @return string|null
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param string|null $equity Equity, valid in single currency margin/cross currency margin/combined margin mode
     *
     * @return $this
     */
    public function setEquity($equity)
    {
        $this->container['equity'] = $equity;

        return $this;
    }

    /**
     * Gets total_freeze
     *
     * @return string|null
     */
    public function getTotalFreeze()
    {
        return $this->container['total_freeze'];
    }

    /**
     * Sets total_freeze
     *
     * @param string|null $total_freeze Total occupancy (discarded, to be offline field).
     *
     * @return $this
     */
    public function setTotalFreeze($total_freeze)
    {
        $this->container['total_freeze'] = $total_freeze;

        return $this;
    }

    /**
     * Gets total_liab
     *
     * @return string|null
     */
    public function getTotalLiab()
    {
        return $this->container['total_liab'];
    }

    /**
     * Sets total_liab
     *
     * @param string|null $total_liab Total borrowing, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalLiab($total_liab)
    {
        $this->container['total_liab'] = $total_liab;

        return $this;
    }

    /**
     * Gets spot_in_use
     *
     * @return string|null
     */
    public function getSpotInUse()
    {
        return $this->container['spot_in_use'];
    }

    /**
     * Sets spot_in_use
     *
     * @param string|null $spot_in_use The amount of spot hedging is valid in the combined margin mode, and is 0 in other margin modes such as single currency and cross-currency margin modes
     *
     * @return $this
     */
    public function setSpotInUse($spot_in_use)
    {
        $this->container['spot_in_use'] = $spot_in_use;

        return $this;
    }

    /**
     * Gets funding
     *
     * @return string|null
     */
    public function getFunding()
    {
        return $this->container['funding'];
    }

    /**
     * Sets funding
     *
     * @param string|null $funding Uniloan financial management amount, effective when turned on as a unified account margin switch
     *
     * @return $this
     */
    public function setFunding($funding)
    {
        $this->container['funding'] = $funding;

        return $this;
    }

    /**
     * Gets funding_version
     *
     * @return string|null
     */
    public function getFundingVersion()
    {
        return $this->container['funding_version'];
    }

    /**
     * Sets funding_version
     *
     * @param string|null $funding_version Funding version.
     *
     * @return $this
     */
    public function setFundingVersion($funding_version)
    {
        $this->container['funding_version'] = $funding_version;

        return $this;
    }

    /**
     * Gets cross_balance
     *
     * @return string|null
     */
    public function getCrossBalance()
    {
        return $this->container['cross_balance'];
    }

    /**
     * Sets cross_balance
     *
     * @param string|null $cross_balance Full margin balance is valid in single currency margin mode, and is 0 in other modes such as cross currency margin/combined margin mode
     *
     * @return $this
     */
    public function setCrossBalance($cross_balance)
    {
        $this->container['cross_balance'] = $cross_balance;

        return $this;
    }

    /**
     * Gets iso_balance
     *
     * @return string|null
     */
    public function getIsoBalance()
    {
        return $this->container['iso_balance'];
    }

    /**
     * Sets iso_balance
     *
     * @param string|null $iso_balance Isolated margin balance is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setIsoBalance($iso_balance)
    {
        $this->container['iso_balance'] = $iso_balance;

        return $this;
    }

    /**
     * Gets im
     *
     * @return string|null
     */
    public function getIm()
    {
        return $this->container['im'];
    }

    /**
     * Sets im
     *
     * @param string|null $im Full-position initial margin is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setIm($im)
    {
        $this->container['im'] = $im;

        return $this;
    }

    /**
     * Gets mm
     *
     * @return string|null
     */
    public function getMm()
    {
        return $this->container['mm'];
    }

    /**
     * Sets mm
     *
     * @param string|null $mm The full position maintains margin, which is valid in the single currency margin mode, and other cross-currency margin combination margin mode is 0.
     *
     * @return $this
     */
    public function setMm($mm)
    {
        $this->container['mm'] = $mm;

        return $this;
    }

    /**
     * Gets imr
     *
     * @return string|null
     */
    public function getImr()
    {
        return $this->container['imr'];
    }

    /**
     * Sets imr
     *
     * @param string|null $imr Full-position initial margin rate is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setImr($imr)
    {
        $this->container['imr'] = $imr;

        return $this;
    }

    /**
     * Gets mmr
     *
     * @return string|null
     */
    public function getMmr()
    {
        return $this->container['mmr'];
    }

    /**
     * Sets mmr
     *
     * @param string|null $mmr Full-position maintenance margin rate is valid in single-currency margin mode and is 0 in other modes such as cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setMmr($mmr)
    {
        $this->container['mmr'] = $mmr;

        return $this;
    }

    /**
     * Gets margin_balance
     *
     * @return string|null
     */
    public function getMarginBalance()
    {
        return $this->container['margin_balance'];
    }

    /**
     * Sets margin_balance
     *
     * @param string|null $margin_balance Full margin balance is valid in single currency margin mode and is 0 in other modes such as cross currency margin/combined margin mode
     *
     * @return $this
     */
    public function setMarginBalance($margin_balance)
    {
        $this->container['margin_balance'] = $margin_balance;

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
     * @param string|null $available_margin Full margin available for full position is valid in single currency margin mode, and is 0 in other modes such as cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setAvailableMargin($available_margin)
    {
        $this->container['available_margin'] = $available_margin;

        return $this;
    }

    /**
     * Gets enabled_collateral
     *
     * @return bool|null
     */
    public function getEnabledCollateral()
    {
        return $this->container['enabled_collateral'];
    }

    /**
     * Sets enabled_collateral
     *
     * @param bool|null $enabled_collateral Currency enabled as margin: true - Enabled, false - Disabled.
     *
     * @return $this
     */
    public function setEnabledCollateral($enabled_collateral)
    {
        $this->container['enabled_collateral'] = $enabled_collateral;

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


