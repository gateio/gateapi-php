<?php
/**
 * FuturesAccount
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
 * FuturesAccount Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class FuturesAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FuturesAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total' => 'string',
        'unrealised_pnl' => 'string',
        'position_margin' => 'string',
        'order_margin' => 'string',
        'available' => 'string',
        'point' => 'string',
        'currency' => 'string',
        'in_dual_mode' => 'bool',
        'enable_credit' => 'bool',
        'position_initial_margin' => 'string',
        'maintenance_margin' => 'string',
        'bonus' => 'string',
        'enable_evolved_classic' => 'bool',
        'cross_order_margin' => 'string',
        'cross_initial_margin' => 'string',
        'cross_maintenance_margin' => 'string',
        'cross_unrealised_pnl' => 'string',
        'cross_available' => 'string',
        'cross_margin_balance' => 'string',
        'cross_mmr' => 'string',
        'cross_imr' => 'string',
        'isolated_position_margin' => 'string',
        'enable_new_dual_mode' => 'bool',
        'margin_mode' => 'int',
        'enable_tiered_mm' => 'bool',
        'history' => '\GateApi\Model\FuturesAccountHistory'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'total' => null,
        'unrealised_pnl' => null,
        'position_margin' => null,
        'order_margin' => null,
        'available' => null,
        'point' => null,
        'currency' => null,
        'in_dual_mode' => null,
        'enable_credit' => null,
        'position_initial_margin' => null,
        'maintenance_margin' => null,
        'bonus' => null,
        'enable_evolved_classic' => null,
        'cross_order_margin' => null,
        'cross_initial_margin' => null,
        'cross_maintenance_margin' => null,
        'cross_unrealised_pnl' => null,
        'cross_available' => null,
        'cross_margin_balance' => null,
        'cross_mmr' => null,
        'cross_imr' => null,
        'isolated_position_margin' => null,
        'enable_new_dual_mode' => null,
        'margin_mode' => null,
        'enable_tiered_mm' => null,
        'history' => null
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
        'total' => 'total',
        'unrealised_pnl' => 'unrealised_pnl',
        'position_margin' => 'position_margin',
        'order_margin' => 'order_margin',
        'available' => 'available',
        'point' => 'point',
        'currency' => 'currency',
        'in_dual_mode' => 'in_dual_mode',
        'enable_credit' => 'enable_credit',
        'position_initial_margin' => 'position_initial_margin',
        'maintenance_margin' => 'maintenance_margin',
        'bonus' => 'bonus',
        'enable_evolved_classic' => 'enable_evolved_classic',
        'cross_order_margin' => 'cross_order_margin',
        'cross_initial_margin' => 'cross_initial_margin',
        'cross_maintenance_margin' => 'cross_maintenance_margin',
        'cross_unrealised_pnl' => 'cross_unrealised_pnl',
        'cross_available' => 'cross_available',
        'cross_margin_balance' => 'cross_margin_balance',
        'cross_mmr' => 'cross_mmr',
        'cross_imr' => 'cross_imr',
        'isolated_position_margin' => 'isolated_position_margin',
        'enable_new_dual_mode' => 'enable_new_dual_mode',
        'margin_mode' => 'margin_mode',
        'enable_tiered_mm' => 'enable_tiered_mm',
        'history' => 'history'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'position_margin' => 'setPositionMargin',
        'order_margin' => 'setOrderMargin',
        'available' => 'setAvailable',
        'point' => 'setPoint',
        'currency' => 'setCurrency',
        'in_dual_mode' => 'setInDualMode',
        'enable_credit' => 'setEnableCredit',
        'position_initial_margin' => 'setPositionInitialMargin',
        'maintenance_margin' => 'setMaintenanceMargin',
        'bonus' => 'setBonus',
        'enable_evolved_classic' => 'setEnableEvolvedClassic',
        'cross_order_margin' => 'setCrossOrderMargin',
        'cross_initial_margin' => 'setCrossInitialMargin',
        'cross_maintenance_margin' => 'setCrossMaintenanceMargin',
        'cross_unrealised_pnl' => 'setCrossUnrealisedPnl',
        'cross_available' => 'setCrossAvailable',
        'cross_margin_balance' => 'setCrossMarginBalance',
        'cross_mmr' => 'setCrossMmr',
        'cross_imr' => 'setCrossImr',
        'isolated_position_margin' => 'setIsolatedPositionMargin',
        'enable_new_dual_mode' => 'setEnableNewDualMode',
        'margin_mode' => 'setMarginMode',
        'enable_tiered_mm' => 'setEnableTieredMm',
        'history' => 'setHistory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'position_margin' => 'getPositionMargin',
        'order_margin' => 'getOrderMargin',
        'available' => 'getAvailable',
        'point' => 'getPoint',
        'currency' => 'getCurrency',
        'in_dual_mode' => 'getInDualMode',
        'enable_credit' => 'getEnableCredit',
        'position_initial_margin' => 'getPositionInitialMargin',
        'maintenance_margin' => 'getMaintenanceMargin',
        'bonus' => 'getBonus',
        'enable_evolved_classic' => 'getEnableEvolvedClassic',
        'cross_order_margin' => 'getCrossOrderMargin',
        'cross_initial_margin' => 'getCrossInitialMargin',
        'cross_maintenance_margin' => 'getCrossMaintenanceMargin',
        'cross_unrealised_pnl' => 'getCrossUnrealisedPnl',
        'cross_available' => 'getCrossAvailable',
        'cross_margin_balance' => 'getCrossMarginBalance',
        'cross_mmr' => 'getCrossMmr',
        'cross_imr' => 'getCrossImr',
        'isolated_position_margin' => 'getIsolatedPositionMargin',
        'enable_new_dual_mode' => 'getEnableNewDualMode',
        'margin_mode' => 'getMarginMode',
        'enable_tiered_mm' => 'getEnableTieredMm',
        'history' => 'getHistory'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['position_margin'] = isset($data['position_margin']) ? $data['position_margin'] : null;
        $this->container['order_margin'] = isset($data['order_margin']) ? $data['order_margin'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['in_dual_mode'] = isset($data['in_dual_mode']) ? $data['in_dual_mode'] : null;
        $this->container['enable_credit'] = isset($data['enable_credit']) ? $data['enable_credit'] : null;
        $this->container['position_initial_margin'] = isset($data['position_initial_margin']) ? $data['position_initial_margin'] : null;
        $this->container['maintenance_margin'] = isset($data['maintenance_margin']) ? $data['maintenance_margin'] : null;
        $this->container['bonus'] = isset($data['bonus']) ? $data['bonus'] : null;
        $this->container['enable_evolved_classic'] = isset($data['enable_evolved_classic']) ? $data['enable_evolved_classic'] : null;
        $this->container['cross_order_margin'] = isset($data['cross_order_margin']) ? $data['cross_order_margin'] : null;
        $this->container['cross_initial_margin'] = isset($data['cross_initial_margin']) ? $data['cross_initial_margin'] : null;
        $this->container['cross_maintenance_margin'] = isset($data['cross_maintenance_margin']) ? $data['cross_maintenance_margin'] : null;
        $this->container['cross_unrealised_pnl'] = isset($data['cross_unrealised_pnl']) ? $data['cross_unrealised_pnl'] : null;
        $this->container['cross_available'] = isset($data['cross_available']) ? $data['cross_available'] : null;
        $this->container['cross_margin_balance'] = isset($data['cross_margin_balance']) ? $data['cross_margin_balance'] : null;
        $this->container['cross_mmr'] = isset($data['cross_mmr']) ? $data['cross_mmr'] : null;
        $this->container['cross_imr'] = isset($data['cross_imr']) ? $data['cross_imr'] : null;
        $this->container['isolated_position_margin'] = isset($data['isolated_position_margin']) ? $data['isolated_position_margin'] : null;
        $this->container['enable_new_dual_mode'] = isset($data['enable_new_dual_mode']) ? $data['enable_new_dual_mode'] : null;
        $this->container['margin_mode'] = isset($data['margin_mode']) ? $data['margin_mode'] : null;
        $this->container['enable_tiered_mm'] = isset($data['enable_tiered_mm']) ? $data['enable_tiered_mm'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
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
     * @param string|null $total total is the balance after the user's accumulated deposit, withdraw, profit and loss (including realized profit and loss, fund, fee and referral rebate), excluding unrealized profit and loss.  total = SUM(history_dnw, history_pnl, history_fee, history_refr, history_fund)
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return string|null
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param string|null $unrealised_pnl Unrealized PNL.
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets position_margin
     *
     * @return string|null
     */
    public function getPositionMargin()
    {
        return $this->container['position_margin'];
    }

    /**
     * Sets position_margin
     *
     * @param string|null $position_margin Position margin.
     *
     * @return $this
     */
    public function setPositionMargin($position_margin)
    {
        $this->container['position_margin'] = $position_margin;

        return $this;
    }

    /**
     * Gets order_margin
     *
     * @return string|null
     */
    public function getOrderMargin()
    {
        return $this->container['order_margin'];
    }

    /**
     * Sets order_margin
     *
     * @param string|null $order_margin Order margin of unfinished orders.
     *
     * @return $this
     */
    public function setOrderMargin($order_margin)
    {
        $this->container['order_margin'] = $order_margin;

        return $this;
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
     * @param string|null $available The available balance for transferring or trading(including bonus. Bonus can't be withdrawn. The transfer amount needs to deduct the bonus)
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets point
     *
     * @return string|null
     */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
     * Sets point
     *
     * @param string|null $point POINT amount.
     *
     * @return $this
     */
    public function setPoint($point)
    {
        $this->container['point'] = $point;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Settle currency.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets in_dual_mode
     *
     * @return bool|null
     */
    public function getInDualMode()
    {
        return $this->container['in_dual_mode'];
    }

    /**
     * Sets in_dual_mode
     *
     * @param bool|null $in_dual_mode Whether dual mode is enabled.
     *
     * @return $this
     */
    public function setInDualMode($in_dual_mode)
    {
        $this->container['in_dual_mode'] = $in_dual_mode;

        return $this;
    }

    /**
     * Gets enable_credit
     *
     * @return bool|null
     */
    public function getEnableCredit()
    {
        return $this->container['enable_credit'];
    }

    /**
     * Sets enable_credit
     *
     * @param bool|null $enable_credit Whether portfolio margin account mode is enabled.
     *
     * @return $this
     */
    public function setEnableCredit($enable_credit)
    {
        $this->container['enable_credit'] = $enable_credit;

        return $this;
    }

    /**
     * Gets position_initial_margin
     *
     * @return string|null
     */
    public function getPositionInitialMargin()
    {
        return $this->container['position_initial_margin'];
    }

    /**
     * Sets position_initial_margin
     *
     * @param string|null $position_initial_margin Initial margin position, applicable to the portfolio margin account model.
     *
     * @return $this
     */
    public function setPositionInitialMargin($position_initial_margin)
    {
        $this->container['position_initial_margin'] = $position_initial_margin;

        return $this;
    }

    /**
     * Gets maintenance_margin
     *
     * @return string|null
     */
    public function getMaintenanceMargin()
    {
        return $this->container['maintenance_margin'];
    }

    /**
     * Sets maintenance_margin
     *
     * @param string|null $maintenance_margin The maintenance deposit occupied by the position is suitable for the new classic account margin model and unified account model
     *
     * @return $this
     */
    public function setMaintenanceMargin($maintenance_margin)
    {
        $this->container['maintenance_margin'] = $maintenance_margin;

        return $this;
    }

    /**
     * Gets bonus
     *
     * @return string|null
     */
    public function getBonus()
    {
        return $this->container['bonus'];
    }

    /**
     * Sets bonus
     *
     * @param string|null $bonus Perpetual Contract Bonus.
     *
     * @return $this
     */
    public function setBonus($bonus)
    {
        $this->container['bonus'] = $bonus;

        return $this;
    }

    /**
     * Gets enable_evolved_classic
     *
     * @return bool|null
     */
    public function getEnableEvolvedClassic()
    {
        return $this->container['enable_evolved_classic'];
    }

    /**
     * Sets enable_evolved_classic
     *
     * @param bool|null $enable_evolved_classic Classic account margin mode, true-new mode, false-old mode.
     *
     * @return $this
     */
    public function setEnableEvolvedClassic($enable_evolved_classic)
    {
        $this->container['enable_evolved_classic'] = $enable_evolved_classic;

        return $this;
    }

    /**
     * Gets cross_order_margin
     *
     * @return string|null
     */
    public function getCrossOrderMargin()
    {
        return $this->container['cross_order_margin'];
    }

    /**
     * Sets cross_order_margin
     *
     * @param string|null $cross_order_margin Full -warehouse hanging order deposit, suitable for the new classic account margin model
     *
     * @return $this
     */
    public function setCrossOrderMargin($cross_order_margin)
    {
        $this->container['cross_order_margin'] = $cross_order_margin;

        return $this;
    }

    /**
     * Gets cross_initial_margin
     *
     * @return string|null
     */
    public function getCrossInitialMargin()
    {
        return $this->container['cross_initial_margin'];
    }

    /**
     * Sets cross_initial_margin
     *
     * @param string|null $cross_initial_margin The initial security deposit of the full warehouse is suitable for the new classic account margin model
     *
     * @return $this
     */
    public function setCrossInitialMargin($cross_initial_margin)
    {
        $this->container['cross_initial_margin'] = $cross_initial_margin;

        return $this;
    }

    /**
     * Gets cross_maintenance_margin
     *
     * @return string|null
     */
    public function getCrossMaintenanceMargin()
    {
        return $this->container['cross_maintenance_margin'];
    }

    /**
     * Sets cross_maintenance_margin
     *
     * @param string|null $cross_maintenance_margin Maintain deposit in full warehouse, suitable for new classic account margin models
     *
     * @return $this
     */
    public function setCrossMaintenanceMargin($cross_maintenance_margin)
    {
        $this->container['cross_maintenance_margin'] = $cross_maintenance_margin;

        return $this;
    }

    /**
     * Gets cross_unrealised_pnl
     *
     * @return string|null
     */
    public function getCrossUnrealisedPnl()
    {
        return $this->container['cross_unrealised_pnl'];
    }

    /**
     * Sets cross_unrealised_pnl
     *
     * @param string|null $cross_unrealised_pnl The full warehouse does not achieve profit and loss, suitable for the new classic account margin model
     *
     * @return $this
     */
    public function setCrossUnrealisedPnl($cross_unrealised_pnl)
    {
        $this->container['cross_unrealised_pnl'] = $cross_unrealised_pnl;

        return $this;
    }

    /**
     * Gets cross_available
     *
     * @return string|null
     */
    public function getCrossAvailable()
    {
        return $this->container['cross_available'];
    }

    /**
     * Sets cross_available
     *
     * @param string|null $cross_available Full warehouse available amount, suitable for the new classic account margin model
     *
     * @return $this
     */
    public function setCrossAvailable($cross_available)
    {
        $this->container['cross_available'] = $cross_available;

        return $this;
    }

    /**
     * Gets cross_margin_balance
     *
     * @return string|null
     */
    public function getCrossMarginBalance()
    {
        return $this->container['cross_margin_balance'];
    }

    /**
     * Sets cross_margin_balance
     *
     * @param string|null $cross_margin_balance Full margin balance, suitable for the new classic account margin model.
     *
     * @return $this
     */
    public function setCrossMarginBalance($cross_margin_balance)
    {
        $this->container['cross_margin_balance'] = $cross_margin_balance;

        return $this;
    }

    /**
     * Gets cross_mmr
     *
     * @return string|null
     */
    public function getCrossMmr()
    {
        return $this->container['cross_mmr'];
    }

    /**
     * Sets cross_mmr
     *
     * @param string|null $cross_mmr Maintain margin ratio for the full position, suitable for the new classic account margin model
     *
     * @return $this
     */
    public function setCrossMmr($cross_mmr)
    {
        $this->container['cross_mmr'] = $cross_mmr;

        return $this;
    }

    /**
     * Gets cross_imr
     *
     * @return string|null
     */
    public function getCrossImr()
    {
        return $this->container['cross_imr'];
    }

    /**
     * Sets cross_imr
     *
     * @param string|null $cross_imr The initial margin rate of the full position is suitable for the new classic account margin model
     *
     * @return $this
     */
    public function setCrossImr($cross_imr)
    {
        $this->container['cross_imr'] = $cross_imr;

        return $this;
    }

    /**
     * Gets isolated_position_margin
     *
     * @return string|null
     */
    public function getIsolatedPositionMargin()
    {
        return $this->container['isolated_position_margin'];
    }

    /**
     * Sets isolated_position_margin
     *
     * @param string|null $isolated_position_margin Ware -position margin, suitable for the new classic account margin model.
     *
     * @return $this
     */
    public function setIsolatedPositionMargin($isolated_position_margin)
    {
        $this->container['isolated_position_margin'] = $isolated_position_margin;

        return $this;
    }

    /**
     * Gets enable_new_dual_mode
     *
     * @return bool|null
     */
    public function getEnableNewDualMode()
    {
        return $this->container['enable_new_dual_mode'];
    }

    /**
     * Sets enable_new_dual_mode
     *
     * @param bool|null $enable_new_dual_mode Whether to open a new two-way position mode.
     *
     * @return $this
     */
    public function setEnableNewDualMode($enable_new_dual_mode)
    {
        $this->container['enable_new_dual_mode'] = $enable_new_dual_mode;

        return $this;
    }

    /**
     * Gets margin_mode
     *
     * @return int|null
     */
    public function getMarginMode()
    {
        return $this->container['margin_mode'];
    }

    /**
     * Sets margin_mode
     *
     * @param int|null $margin_mode Margin mode, 0-classic margin mode, 1-cross-currency margin mode, 2-combined margin mode
     *
     * @return $this
     */
    public function setMarginMode($margin_mode)
    {
        $this->container['margin_mode'] = $margin_mode;

        return $this;
    }

    /**
     * Gets enable_tiered_mm
     *
     * @return bool|null
     */
    public function getEnableTieredMm()
    {
        return $this->container['enable_tiered_mm'];
    }

    /**
     * Sets enable_tiered_mm
     *
     * @param bool|null $enable_tiered_mm Whether to enable tiered maintenance margin calculation.
     *
     * @return $this
     */
    public function setEnableTieredMm($enable_tiered_mm)
    {
        $this->container['enable_tiered_mm'] = $enable_tiered_mm;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \GateApi\Model\FuturesAccountHistory|null
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \GateApi\Model\FuturesAccountHistory|null $history history
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

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


