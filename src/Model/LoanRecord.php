<?php
/**
 * LoanRecord
 *
 * PHP version 5
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * OpenAPI spec version: 4.5.2
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * LoanRecord Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoanRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoanRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'loan_id' => 'string',
        'create_time' => 'string',
        'expire_time' => 'string',
        'status' => 'string',
        'borrow_user_id' => 'string',
        'currency' => 'string',
        'rate' => 'string',
        'amount' => 'string',
        'days' => 'int',
        'auto_renew' => 'bool',
        'repaid' => 'string',
        'paid_interest' => 'string',
        'unpaid_interest' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'loan_id' => null,
        'create_time' => null,
        'expire_time' => null,
        'status' => null,
        'borrow_user_id' => null,
        'currency' => null,
        'rate' => null,
        'amount' => null,
        'days' => null,
        'auto_renew' => null,
        'repaid' => null,
        'paid_interest' => null,
        'unpaid_interest' => null
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
        'loan_id' => 'loan_id',
        'create_time' => 'create_time',
        'expire_time' => 'expire_time',
        'status' => 'status',
        'borrow_user_id' => 'borrow_user_id',
        'currency' => 'currency',
        'rate' => 'rate',
        'amount' => 'amount',
        'days' => 'days',
        'auto_renew' => 'auto_renew',
        'repaid' => 'repaid',
        'paid_interest' => 'paid_interest',
        'unpaid_interest' => 'unpaid_interest'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'loan_id' => 'setLoanId',
        'create_time' => 'setCreateTime',
        'expire_time' => 'setExpireTime',
        'status' => 'setStatus',
        'borrow_user_id' => 'setBorrowUserId',
        'currency' => 'setCurrency',
        'rate' => 'setRate',
        'amount' => 'setAmount',
        'days' => 'setDays',
        'auto_renew' => 'setAutoRenew',
        'repaid' => 'setRepaid',
        'paid_interest' => 'setPaidInterest',
        'unpaid_interest' => 'setUnpaidInterest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'loan_id' => 'getLoanId',
        'create_time' => 'getCreateTime',
        'expire_time' => 'getExpireTime',
        'status' => 'getStatus',
        'borrow_user_id' => 'getBorrowUserId',
        'currency' => 'getCurrency',
        'rate' => 'getRate',
        'amount' => 'getAmount',
        'days' => 'getDays',
        'auto_renew' => 'getAutoRenew',
        'repaid' => 'getRepaid',
        'paid_interest' => 'getPaidInterest',
        'unpaid_interest' => 'getUnpaidInterest'
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

    const STATUS_LOANED = 'loaned';
    const STATUS_FINISHED = 'finished';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LOANED,
            self::STATUS_FINISHED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['loan_id'] = isset($data['loan_id']) ? $data['loan_id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['expire_time'] = isset($data['expire_time']) ? $data['expire_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['borrow_user_id'] = isset($data['borrow_user_id']) ? $data['borrow_user_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['auto_renew'] = isset($data['auto_renew']) ? $data['auto_renew'] : false;
        $this->container['repaid'] = isset($data['repaid']) ? $data['repaid'] : null;
        $this->container['paid_interest'] = isset($data['paid_interest']) ? $data['paid_interest'] : null;
        $this->container['unpaid_interest'] = isset($data['unpaid_interest']) ? $data['unpaid_interest'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string|null $id Loan record ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets loan_id
     *
     * @return string|null
     */
    public function getLoanId()
    {
        return $this->container['loan_id'];
    }

    /**
     * Sets loan_id
     *
     * @param string|null $loan_id Loan ID the record belongs to
     *
     * @return $this
     */
    public function setLoanId($loan_id)
    {
        $this->container['loan_id'] = $loan_id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time Loan time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets expire_time
     *
     * @return string|null
     */
    public function getExpireTime()
    {
        return $this->container['expire_time'];
    }

    /**
     * Sets expire_time
     *
     * @param string|null $expire_time Expiration time
     *
     * @return $this
     */
    public function setExpireTime($expire_time)
    {
        $this->container['expire_time'] = $expire_time;

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
     * @param string|null $status Loan record status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets borrow_user_id
     *
     * @return string|null
     */
    public function getBorrowUserId()
    {
        return $this->container['borrow_user_id'];
    }

    /**
     * Sets borrow_user_id
     *
     * @param string|null $borrow_user_id Garbled user ID
     *
     * @return $this
     */
    public function setBorrowUserId($borrow_user_id)
    {
        $this->container['borrow_user_id'] = $borrow_user_id;

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
     * @param string|null $currency Loan currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return string|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param string|null $rate Loan rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount Loan amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets days
     *
     * @return int|null
     */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
     * Sets days
     *
     * @param int|null $days Loan days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->container['days'] = $days;

        return $this;
    }

    /**
     * Gets auto_renew
     *
     * @return bool|null
     */
    public function getAutoRenew()
    {
        return $this->container['auto_renew'];
    }

    /**
     * Sets auto_renew
     *
     * @param bool|null $auto_renew Whether the record will auto renew on expiration
     *
     * @return $this
     */
    public function setAutoRenew($auto_renew)
    {
        $this->container['auto_renew'] = $auto_renew;

        return $this;
    }

    /**
     * Gets repaid
     *
     * @return string|null
     */
    public function getRepaid()
    {
        return $this->container['repaid'];
    }

    /**
     * Sets repaid
     *
     * @param string|null $repaid Repaid amount
     *
     * @return $this
     */
    public function setRepaid($repaid)
    {
        $this->container['repaid'] = $repaid;

        return $this;
    }

    /**
     * Gets paid_interest
     *
     * @return string|null
     */
    public function getPaidInterest()
    {
        return $this->container['paid_interest'];
    }

    /**
     * Sets paid_interest
     *
     * @param string|null $paid_interest Repaid interest
     *
     * @return $this
     */
    public function setPaidInterest($paid_interest)
    {
        $this->container['paid_interest'] = $paid_interest;

        return $this;
    }

    /**
     * Gets unpaid_interest
     *
     * @return string|null
     */
    public function getUnpaidInterest()
    {
        return $this->container['unpaid_interest'];
    }

    /**
     * Sets unpaid_interest
     *
     * @param string|null $unpaid_interest Interest not repaid
     *
     * @return $this
     */
    public function setUnpaidInterest($unpaid_interest)
    {
        $this->container['unpaid_interest'] = $unpaid_interest;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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
}


