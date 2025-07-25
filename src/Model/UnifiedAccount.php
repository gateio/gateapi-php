<?php
/**
 * UnifiedAccount
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
 * UnifiedAccount Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class UnifiedAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UnifiedAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'int',
        'refresh_time' => 'int',
        'locked' => 'bool',
        'balances' => 'map[string,\GateApi\Model\UnifiedBalance]',
        'total' => 'string',
        'borrowed' => 'string',
        'total_initial_margin' => 'string',
        'total_margin_balance' => 'string',
        'total_maintenance_margin' => 'string',
        'total_initial_margin_rate' => 'string',
        'total_maintenance_margin_rate' => 'string',
        'total_available_margin' => 'string',
        'unified_account_total' => 'string',
        'unified_account_total_liab' => 'string',
        'unified_account_total_equity' => 'string',
        'leverage' => 'string',
        'spot_order_loss' => 'string',
        'spot_hedge' => 'bool',
        'use_funding' => 'bool',
        'is_all_collateral' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => 'int64',
        'refresh_time' => 'int64',
        'locked' => null,
        'balances' => null,
        'total' => null,
        'borrowed' => null,
        'total_initial_margin' => null,
        'total_margin_balance' => null,
        'total_maintenance_margin' => null,
        'total_initial_margin_rate' => null,
        'total_maintenance_margin_rate' => null,
        'total_available_margin' => null,
        'unified_account_total' => null,
        'unified_account_total_liab' => null,
        'unified_account_total_equity' => null,
        'leverage' => null,
        'spot_order_loss' => null,
        'spot_hedge' => null,
        'use_funding' => null,
        'is_all_collateral' => null
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
        'user_id' => 'user_id',
        'refresh_time' => 'refresh_time',
        'locked' => 'locked',
        'balances' => 'balances',
        'total' => 'total',
        'borrowed' => 'borrowed',
        'total_initial_margin' => 'total_initial_margin',
        'total_margin_balance' => 'total_margin_balance',
        'total_maintenance_margin' => 'total_maintenance_margin',
        'total_initial_margin_rate' => 'total_initial_margin_rate',
        'total_maintenance_margin_rate' => 'total_maintenance_margin_rate',
        'total_available_margin' => 'total_available_margin',
        'unified_account_total' => 'unified_account_total',
        'unified_account_total_liab' => 'unified_account_total_liab',
        'unified_account_total_equity' => 'unified_account_total_equity',
        'leverage' => 'leverage',
        'spot_order_loss' => 'spot_order_loss',
        'spot_hedge' => 'spot_hedge',
        'use_funding' => 'use_funding',
        'is_all_collateral' => 'is_all_collateral'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'refresh_time' => 'setRefreshTime',
        'locked' => 'setLocked',
        'balances' => 'setBalances',
        'total' => 'setTotal',
        'borrowed' => 'setBorrowed',
        'total_initial_margin' => 'setTotalInitialMargin',
        'total_margin_balance' => 'setTotalMarginBalance',
        'total_maintenance_margin' => 'setTotalMaintenanceMargin',
        'total_initial_margin_rate' => 'setTotalInitialMarginRate',
        'total_maintenance_margin_rate' => 'setTotalMaintenanceMarginRate',
        'total_available_margin' => 'setTotalAvailableMargin',
        'unified_account_total' => 'setUnifiedAccountTotal',
        'unified_account_total_liab' => 'setUnifiedAccountTotalLiab',
        'unified_account_total_equity' => 'setUnifiedAccountTotalEquity',
        'leverage' => 'setLeverage',
        'spot_order_loss' => 'setSpotOrderLoss',
        'spot_hedge' => 'setSpotHedge',
        'use_funding' => 'setUseFunding',
        'is_all_collateral' => 'setIsAllCollateral'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'refresh_time' => 'getRefreshTime',
        'locked' => 'getLocked',
        'balances' => 'getBalances',
        'total' => 'getTotal',
        'borrowed' => 'getBorrowed',
        'total_initial_margin' => 'getTotalInitialMargin',
        'total_margin_balance' => 'getTotalMarginBalance',
        'total_maintenance_margin' => 'getTotalMaintenanceMargin',
        'total_initial_margin_rate' => 'getTotalInitialMarginRate',
        'total_maintenance_margin_rate' => 'getTotalMaintenanceMarginRate',
        'total_available_margin' => 'getTotalAvailableMargin',
        'unified_account_total' => 'getUnifiedAccountTotal',
        'unified_account_total_liab' => 'getUnifiedAccountTotalLiab',
        'unified_account_total_equity' => 'getUnifiedAccountTotalEquity',
        'leverage' => 'getLeverage',
        'spot_order_loss' => 'getSpotOrderLoss',
        'spot_hedge' => 'getSpotHedge',
        'use_funding' => 'getUseFunding',
        'is_all_collateral' => 'getIsAllCollateral'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['refresh_time'] = isset($data['refresh_time']) ? $data['refresh_time'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['balances'] = isset($data['balances']) ? $data['balances'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['borrowed'] = isset($data['borrowed']) ? $data['borrowed'] : null;
        $this->container['total_initial_margin'] = isset($data['total_initial_margin']) ? $data['total_initial_margin'] : null;
        $this->container['total_margin_balance'] = isset($data['total_margin_balance']) ? $data['total_margin_balance'] : null;
        $this->container['total_maintenance_margin'] = isset($data['total_maintenance_margin']) ? $data['total_maintenance_margin'] : null;
        $this->container['total_initial_margin_rate'] = isset($data['total_initial_margin_rate']) ? $data['total_initial_margin_rate'] : null;
        $this->container['total_maintenance_margin_rate'] = isset($data['total_maintenance_margin_rate']) ? $data['total_maintenance_margin_rate'] : null;
        $this->container['total_available_margin'] = isset($data['total_available_margin']) ? $data['total_available_margin'] : null;
        $this->container['unified_account_total'] = isset($data['unified_account_total']) ? $data['unified_account_total'] : null;
        $this->container['unified_account_total_liab'] = isset($data['unified_account_total_liab']) ? $data['unified_account_total_liab'] : null;
        $this->container['unified_account_total_equity'] = isset($data['unified_account_total_equity']) ? $data['unified_account_total_equity'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['spot_order_loss'] = isset($data['spot_order_loss']) ? $data['spot_order_loss'] : null;
        $this->container['spot_hedge'] = isset($data['spot_hedge']) ? $data['spot_hedge'] : null;
        $this->container['use_funding'] = isset($data['use_funding']) ? $data['use_funding'] : null;
        $this->container['is_all_collateral'] = isset($data['is_all_collateral']) ? $data['is_all_collateral'] : null;
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
     * Gets refresh_time
     *
     * @return int|null
     */
    public function getRefreshTime()
    {
        return $this->container['refresh_time'];
    }

    /**
     * Sets refresh_time
     *
     * @param int|null $refresh_time Time of the most recent refresh.
     *
     * @return $this
     */
    public function setRefreshTime($refresh_time)
    {
        $this->container['refresh_time'] = $refresh_time;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked Whether the account is locked, valid in cross-currency margin/combined margin mode, false in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets balances
     *
     * @return map[string,\GateApi\Model\UnifiedBalance]|null
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param map[string,\GateApi\Model\UnifiedBalance]|null $balances balances
     *
     * @return $this
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total Total account assets converted to USD, i.e. the sum of `(available + freeze) * price` in all currencies (deprecated, to be deprecated, replaced by unified_account_total)
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * @param string|null $borrowed The total borrowed amount of the account converted into USD, i.e. the sum of `borrowed * price` of all currencies (excluding Point Cards). It is valid in cross-currency margin/combined margin mode, and is 0 in other modes such as single-currency margin mode.
     *
     * @return $this
     */
    public function setBorrowed($borrowed)
    {
        $this->container['borrowed'] = $borrowed;

        return $this;
    }

    /**
     * Gets total_initial_margin
     *
     * @return string|null
     */
    public function getTotalInitialMargin()
    {
        return $this->container['total_initial_margin'];
    }

    /**
     * Sets total_initial_margin
     *
     * @param string|null $total_initial_margin Total initial margin, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalInitialMargin($total_initial_margin)
    {
        $this->container['total_initial_margin'] = $total_initial_margin;

        return $this;
    }

    /**
     * Gets total_margin_balance
     *
     * @return string|null
     */
    public function getTotalMarginBalance()
    {
        return $this->container['total_margin_balance'];
    }

    /**
     * Sets total_margin_balance
     *
     * @param string|null $total_margin_balance Total margin balance, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalMarginBalance($total_margin_balance)
    {
        $this->container['total_margin_balance'] = $total_margin_balance;

        return $this;
    }

    /**
     * Gets total_maintenance_margin
     *
     * @return string|null
     */
    public function getTotalMaintenanceMargin()
    {
        return $this->container['total_maintenance_margin'];
    }

    /**
     * Sets total_maintenance_margin
     *
     * @param string|null $total_maintenance_margin Total maintenance margin is valid in cross-currency margin/combined margin mode, and is 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalMaintenanceMargin($total_maintenance_margin)
    {
        $this->container['total_maintenance_margin'] = $total_maintenance_margin;

        return $this;
    }

    /**
     * Gets total_initial_margin_rate
     *
     * @return string|null
     */
    public function getTotalInitialMarginRate()
    {
        return $this->container['total_initial_margin_rate'];
    }

    /**
     * Sets total_initial_margin_rate
     *
     * @param string|null $total_initial_margin_rate Total initial margin rate, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalInitialMarginRate($total_initial_margin_rate)
    {
        $this->container['total_initial_margin_rate'] = $total_initial_margin_rate;

        return $this;
    }

    /**
     * Gets total_maintenance_margin_rate
     *
     * @return string|null
     */
    public function getTotalMaintenanceMarginRate()
    {
        return $this->container['total_maintenance_margin_rate'];
    }

    /**
     * Sets total_maintenance_margin_rate
     *
     * @param string|null $total_maintenance_margin_rate Total maintenance margin rate, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalMaintenanceMarginRate($total_maintenance_margin_rate)
    {
        $this->container['total_maintenance_margin_rate'] = $total_maintenance_margin_rate;

        return $this;
    }

    /**
     * Gets total_available_margin
     *
     * @return string|null
     */
    public function getTotalAvailableMargin()
    {
        return $this->container['total_available_margin'];
    }

    /**
     * Sets total_available_margin
     *
     * @param string|null $total_available_margin Available margin amount, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setTotalAvailableMargin($total_available_margin)
    {
        $this->container['total_available_margin'] = $total_available_margin;

        return $this;
    }

    /**
     * Gets unified_account_total
     *
     * @return string|null
     */
    public function getUnifiedAccountTotal()
    {
        return $this->container['unified_account_total'];
    }

    /**
     * Sets unified_account_total
     *
     * @param string|null $unified_account_total Unify the total account assets, valid in single currency margin/cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setUnifiedAccountTotal($unified_account_total)
    {
        $this->container['unified_account_total'] = $unified_account_total;

        return $this;
    }

    /**
     * Gets unified_account_total_liab
     *
     * @return string|null
     */
    public function getUnifiedAccountTotalLiab()
    {
        return $this->container['unified_account_total_liab'];
    }

    /**
     * Sets unified_account_total_liab
     *
     * @param string|null $unified_account_total_liab Unify the total loan of the account, valid in the cross-currency margin/combined margin mode, and 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setUnifiedAccountTotalLiab($unified_account_total_liab)
    {
        $this->container['unified_account_total_liab'] = $unified_account_total_liab;

        return $this;
    }

    /**
     * Gets unified_account_total_equity
     *
     * @return string|null
     */
    public function getUnifiedAccountTotalEquity()
    {
        return $this->container['unified_account_total_equity'];
    }

    /**
     * Sets unified_account_total_equity
     *
     * @param string|null $unified_account_total_equity Unify the total account equity, valid in single currency margin/cross-currency margin/combined margin mode
     *
     * @return $this
     */
    public function setUnifiedAccountTotalEquity($unified_account_total_equity)
    {
        $this->container['unified_account_total_equity'] = $unified_account_total_equity;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return string|null
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param string|null $leverage Actual leverage, valid in cross-currency margin/combined margin mode.
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets spot_order_loss
     *
     * @return string|null
     */
    public function getSpotOrderLoss()
    {
        return $this->container['spot_order_loss'];
    }

    /**
     * Sets spot_order_loss
     *
     * @param string|null $spot_order_loss Total pending order loss, in USDT, valid in cross-currency margin/combined margin mode, 0 in other modes such as single-currency margin mode
     *
     * @return $this
     */
    public function setSpotOrderLoss($spot_order_loss)
    {
        $this->container['spot_order_loss'] = $spot_order_loss;

        return $this;
    }

    /**
     * Gets spot_hedge
     *
     * @return bool|null
     */
    public function getSpotHedge()
    {
        return $this->container['spot_hedge'];
    }

    /**
     * Sets spot_hedge
     *
     * @param bool|null $spot_hedge Spot hedging status, true - enabled, false - not enabled.
     *
     * @return $this
     */
    public function setSpotHedge($spot_hedge)
    {
        $this->container['spot_hedge'] = $spot_hedge;

        return $this;
    }

    /**
     * Gets use_funding
     *
     * @return bool|null
     */
    public function getUseFunding()
    {
        return $this->container['use_funding'];
    }

    /**
     * Sets use_funding
     *
     * @param bool|null $use_funding Whether to use funds as margin.
     *
     * @return $this
     */
    public function setUseFunding($use_funding)
    {
        $this->container['use_funding'] = $use_funding;

        return $this;
    }

    /**
     * Gets is_all_collateral
     *
     * @return bool|null
     */
    public function getIsAllCollateral()
    {
        return $this->container['is_all_collateral'];
    }

    /**
     * Sets is_all_collateral
     *
     * @param bool|null $is_all_collateral Whether all currencies are used as margin, true - false - No
     *
     * @return $this
     */
    public function setIsAllCollateral($is_all_collateral)
    {
        $this->container['is_all_collateral'] = $is_all_collateral;

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


