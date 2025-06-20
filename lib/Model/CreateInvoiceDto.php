<?php
/**
 * CreateInvoiceDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  DevDraftAISDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Devdraft AI Payment & Business Management API
 *
 * A comprehensive payment processing and business management API that enables seamless integration of cryptocurrency and traditional payment methods.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.65
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DevDraftAISDK\Model;

use \ArrayAccess;
use \DevDraftAISDK\ObjectSerializer;

/**
 * CreateInvoiceDto Class Doc Comment
 *
 * @category Class
 * @package  DevDraftAISDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateInvoiceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateInvoiceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'email' => 'string',
        'customer_id' => 'string',
        'currency' => 'string',
        'items' => '\DevDraftAISDK\Model\InvoiceProductDto[]',
        'due_date' => '\DateTime',
        'delivery' => 'string',
        'payment_link' => 'bool',
        'payment_methods' => 'string[]',
        'status' => 'string',
        'address' => 'string',
        'phone_number' => 'string',
        'send_date' => '\DateTime',
        'logo' => 'string',
        'partial_payment' => 'bool',
        'tax_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'email' => null,
        'customer_id' => null,
        'currency' => null,
        'items' => null,
        'due_date' => 'date-time',
        'delivery' => null,
        'payment_link' => null,
        'payment_methods' => null,
        'status' => null,
        'address' => null,
        'phone_number' => null,
        'send_date' => 'date-time',
        'logo' => null,
        'partial_payment' => null,
        'tax_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'email' => 'email',
        'customer_id' => 'customer_id',
        'currency' => 'currency',
        'items' => 'items',
        'due_date' => 'due_date',
        'delivery' => 'delivery',
        'payment_link' => 'payment_link',
        'payment_methods' => 'payment_methods',
        'status' => 'status',
        'address' => 'address',
        'phone_number' => 'phone_number',
        'send_date' => 'send_date',
        'logo' => 'logo',
        'partial_payment' => 'partial_payment',
        'tax_id' => 'taxId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'email' => 'setEmail',
        'customer_id' => 'setCustomerId',
        'currency' => 'setCurrency',
        'items' => 'setItems',
        'due_date' => 'setDueDate',
        'delivery' => 'setDelivery',
        'payment_link' => 'setPaymentLink',
        'payment_methods' => 'setPaymentMethods',
        'status' => 'setStatus',
        'address' => 'setAddress',
        'phone_number' => 'setPhoneNumber',
        'send_date' => 'setSendDate',
        'logo' => 'setLogo',
        'partial_payment' => 'setPartialPayment',
        'tax_id' => 'setTaxId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'email' => 'getEmail',
        'customer_id' => 'getCustomerId',
        'currency' => 'getCurrency',
        'items' => 'getItems',
        'due_date' => 'getDueDate',
        'delivery' => 'getDelivery',
        'payment_link' => 'getPaymentLink',
        'payment_methods' => 'getPaymentMethods',
        'status' => 'getStatus',
        'address' => 'getAddress',
        'phone_number' => 'getPhoneNumber',
        'send_date' => 'getSendDate',
        'logo' => 'getLogo',
        'partial_payment' => 'getPartialPayment',
        'tax_id' => 'getTaxId'
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
        return self::$swaggerModelName;
    }

    const CURRENCY_USDC = 'usdc';
    const CURRENCY_EURC = 'eurc';
    const DELIVERY_EMAIL = 'EMAIL';
    const DELIVERY_MANUALLY = 'MANUALLY';
    const PAYMENT_METHODS_ACH = 'ACH';
    const PAYMENT_METHODS_BANK_TRANSFER = 'BANK_TRANSFER';
    const PAYMENT_METHODS_CREDIT_CARD = 'CREDIT_CARD';
    const PAYMENT_METHODS_CASH = 'CASH';
    const PAYMENT_METHODS_MOBILE_MONEY = 'MOBILE_MONEY';
    const PAYMENT_METHODS_CRYPTO = 'CRYPTO';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_OPEN = 'OPEN';
    const STATUS_PASTDUE = 'PASTDUE';
    const STATUS_PAID = 'PAID';
    const STATUS_PARTIALLYPAID = 'PARTIALLYPAID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_USDC,
            self::CURRENCY_EURC,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryAllowableValues()
    {
        return [
            self::DELIVERY_EMAIL,
            self::DELIVERY_MANUALLY,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodsAllowableValues()
    {
        return [
            self::PAYMENT_METHODS_ACH,
            self::PAYMENT_METHODS_BANK_TRANSFER,
            self::PAYMENT_METHODS_CREDIT_CARD,
            self::PAYMENT_METHODS_CASH,
            self::PAYMENT_METHODS_MOBILE_MONEY,
            self::PAYMENT_METHODS_CRYPTO,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_OPEN,
            self::STATUS_PASTDUE,
            self::STATUS_PAID,
            self::STATUS_PARTIALLYPAID,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['delivery'] = isset($data['delivery']) ? $data['delivery'] : null;
        $this->container['payment_link'] = isset($data['payment_link']) ? $data['payment_link'] : null;
        $this->container['payment_methods'] = isset($data['payment_methods']) ? $data['payment_methods'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['send_date'] = isset($data['send_date']) ? $data['send_date'] : null;
        $this->container['logo'] = isset($data['logo']) ? $data['logo'] : null;
        $this->container['partial_payment'] = isset($data['partial_payment']) ? $data['partial_payment'] : null;
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'currency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['delivery'] === null) {
            $invalidProperties[] = "'delivery' can't be null";
        }
        $allowedValues = $this->getDeliveryAllowableValues();
        if (!is_null($this->container['delivery']) && !in_array($this->container['delivery'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['payment_link'] === null) {
            $invalidProperties[] = "'payment_link' can't be null";
        }
        if ($this->container['payment_methods'] === null) {
            $invalidProperties[] = "'payment_methods' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['partial_payment'] === null) {
            $invalidProperties[] = "'partial_payment' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the invoice
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id Customer ID
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

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
     * @param string $currency Currency for the invoice
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'currency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \DevDraftAISDK\Model\InvoiceProductDto[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \DevDraftAISDK\Model\InvoiceProductDto[] $items Array of products in the invoice
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date Due date of the invoice
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets delivery
     *
     * @return string
     */
    public function getDelivery()
    {
        return $this->container['delivery'];
    }

    /**
     * Sets delivery
     *
     * @param string $delivery Delivery method
     *
     * @return $this
     */
    public function setDelivery($delivery)
    {
        $allowedValues = $this->getDeliveryAllowableValues();
        if (!in_array($delivery, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery'] = $delivery;

        return $this;
    }

    /**
     * Gets payment_link
     *
     * @return bool
     */
    public function getPaymentLink()
    {
        return $this->container['payment_link'];
    }

    /**
     * Sets payment_link
     *
     * @param bool $payment_link Whether to generate a payment link
     *
     * @return $this
     */
    public function setPaymentLink($payment_link)
    {
        $this->container['payment_link'] = $payment_link;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return string[]
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param string[] $payment_methods Array of accepted payment methods
     *
     * @return $this
     */
    public function setPaymentMethods($payment_methods)
    {
        $allowedValues = $this->getPaymentMethodsAllowableValues();
        if (array_diff($payment_methods, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_methods', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Invoice status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
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
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Phone number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets send_date
     *
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->container['send_date'];
    }

    /**
     * Sets send_date
     *
     * @param \DateTime $send_date Send date
     *
     * @return $this
     */
    public function setSendDate($send_date)
    {
        $this->container['send_date'] = $send_date;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string $logo Logo URL
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets partial_payment
     *
     * @return bool
     */
    public function getPartialPayment()
    {
        return $this->container['partial_payment'];
    }

    /**
     * Sets partial_payment
     *
     * @param bool $partial_payment Allow partial payments
     *
     * @return $this
     */
    public function setPartialPayment($partial_payment)
    {
        $this->container['partial_payment'] = $partial_payment;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string $tax_id Tax ID
     *
     * @return $this
     */
    public function setTaxId($tax_id)
    {
        $this->container['tax_id'] = $tax_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
