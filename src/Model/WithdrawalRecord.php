<?php
/**
 * WithdrawalRecord
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
 * WithdrawalRecord Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   Gate
 * @link     https://www.gate.com
 */
class WithdrawalRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WithdrawalRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'txid' => 'string',
        'block_number' => 'string',
        'withdraw_order_id' => 'string',
        'timestamp' => 'string',
        'amount' => 'string',
        'fee' => 'string',
        'currency' => 'string',
        'address' => 'string',
        'fail_reason' => 'string',
        'timestamp2' => 'string',
        'memo' => 'string',
        'status' => 'string',
        'chain' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'txid' => null,
        'block_number' => null,
        'withdraw_order_id' => null,
        'timestamp' => null,
        'amount' => null,
        'fee' => null,
        'currency' => null,
        'address' => null,
        'fail_reason' => null,
        'timestamp2' => null,
        'memo' => null,
        'status' => null,
        'chain' => null
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
        'id' => 'id',
        'txid' => 'txid',
        'block_number' => 'block_number',
        'withdraw_order_id' => 'withdraw_order_id',
        'timestamp' => 'timestamp',
        'amount' => 'amount',
        'fee' => 'fee',
        'currency' => 'currency',
        'address' => 'address',
        'fail_reason' => 'fail_reason',
        'timestamp2' => 'timestamp2',
        'memo' => 'memo',
        'status' => 'status',
        'chain' => 'chain'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'txid' => 'setTxid',
        'block_number' => 'setBlockNumber',
        'withdraw_order_id' => 'setWithdrawOrderId',
        'timestamp' => 'setTimestamp',
        'amount' => 'setAmount',
        'fee' => 'setFee',
        'currency' => 'setCurrency',
        'address' => 'setAddress',
        'fail_reason' => 'setFailReason',
        'timestamp2' => 'setTimestamp2',
        'memo' => 'setMemo',
        'status' => 'setStatus',
        'chain' => 'setChain'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'txid' => 'getTxid',
        'block_number' => 'getBlockNumber',
        'withdraw_order_id' => 'getWithdrawOrderId',
        'timestamp' => 'getTimestamp',
        'amount' => 'getAmount',
        'fee' => 'getFee',
        'currency' => 'getCurrency',
        'address' => 'getAddress',
        'fail_reason' => 'getFailReason',
        'timestamp2' => 'getTimestamp2',
        'memo' => 'getMemo',
        'status' => 'getStatus',
        'chain' => 'getChain'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['txid'] = isset($data['txid']) ? $data['txid'] : null;
        $this->container['block_number'] = isset($data['block_number']) ? $data['block_number'] : null;
        $this->container['withdraw_order_id'] = isset($data['withdraw_order_id']) ? $data['withdraw_order_id'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['fail_reason'] = isset($data['fail_reason']) ? $data['fail_reason'] : null;
        $this->container['timestamp2'] = isset($data['timestamp2']) ? $data['timestamp2'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['chain'] = isset($data['chain']) ? $data['chain'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['chain'] === null) {
            $invalidProperties[] = "'chain' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Record ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets txid
     *
     * @return string|null
     */
    public function getTxid()
    {
        return $this->container['txid'];
    }

    /**
     * Sets txid
     *
     * @param string|null $txid Hash record of the withdrawal.
     *
     * @return $this
     */
    public function setTxid($txid)
    {
        $this->container['txid'] = $txid;

        return $this;
    }

    /**
     * Gets block_number
     *
     * @return string|null
     */
    public function getBlockNumber()
    {
        return $this->container['block_number'];
    }

    /**
     * Sets block_number
     *
     * @param string|null $block_number Block Number.
     *
     * @return $this
     */
    public function setBlockNumber($block_number)
    {
        $this->container['block_number'] = $block_number;

        return $this;
    }

    /**
     * Gets withdraw_order_id
     *
     * @return string|null
     */
    public function getWithdrawOrderId()
    {
        return $this->container['withdraw_order_id'];
    }

    /**
     * Sets withdraw_order_id
     *
     * @param string|null $withdraw_order_id Client order id, up to 32 length and can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.)
     *
     * @return $this
     */
    public function setWithdrawOrderId($withdraw_order_id)
    {
        $this->container['withdraw_order_id'] = $withdraw_order_id;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp Operation time.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * @param string $amount Currency amount.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee fee.
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency name.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address Withdrawal address.
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets fail_reason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['fail_reason'];
    }

    /**
     * Sets fail_reason
     *
     * @param string|null $fail_reason The reason for withdrawal failure is that there is a value when status = CANCEL, and the rest of the state is empty
     *
     * @return $this
     */
    public function setFailReason($fail_reason)
    {
        $this->container['fail_reason'] = $fail_reason;

        return $this;
    }

    /**
     * Gets timestamp2
     *
     * @return string|null
     */
    public function getTimestamp2()
    {
        return $this->container['timestamp2'];
    }

    /**
     * Sets timestamp2
     *
     * @param string|null $timestamp2 The withdrawal end time, i.e.: withdrawal cancel time or withdrawal success time When status = CANCEL, the corresponding cancel time When status = DONE and block_number > 0, it is the
     *
     * @return $this
     */
    public function setTimestamp2($timestamp2)
    {
        $this->container['timestamp2'] = $timestamp2;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo Additional remarks with regards to the withdrawal.
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Transaction status  - DONE: Completed (block_number > 0 is considered to be truly completed) - CANCEL: Canceled - REQUEST: Requesting - MANUAL: Pending manual review - BCODE: Recharge code operation - EXTPEND: Sent awaiting confirmation - FAIL: Failure on the chain awaiting confirmation - INVALID: Invalid order - VERIFY: Verifying - PROCES: Processing - PEND: Processing - DMOVE: pending manual review - REVIEW: Under review
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets chain
     *
     * @return string
     */
    public function getChain()
    {
        return $this->container['chain'];
    }

    /**
     * Sets chain
     *
     * @param string $chain Name of the chain used in withdrawals.
     *
     * @return $this
     */
    public function setChain($chain)
    {
        $this->container['chain'] = $chain;

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


