<?php
/**
 * CreateLiquidationAddressDto
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
 * CreateLiquidationAddressDto Class Doc Comment
 *
 * @category Class
 * @package  DevDraftAISDK
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateLiquidationAddressDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateLiquidationAddressDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chain' => 'string',
        'currency' => 'string',
        'address' => 'string',
        'external_account_id' => 'string',
        'prefunded_account_id' => 'string',
        'bridge_wallet_id' => 'string',
        'destination_payment_rail' => 'AllOfCreateLiquidationAddressDtoDestinationPaymentRail',
        'destination_currency' => 'AllOfCreateLiquidationAddressDtoDestinationCurrency',
        'destination_wire_message' => 'string',
        'destination_sepa_reference' => 'string',
        'destination_ach_reference' => 'string',
        'destination_address' => 'string',
        'destination_blockchain_memo' => 'string',
        'return_address' => 'string',
        'custom_developer_fee_percent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chain' => null,
        'currency' => null,
        'address' => null,
        'external_account_id' => null,
        'prefunded_account_id' => null,
        'bridge_wallet_id' => null,
        'destination_payment_rail' => null,
        'destination_currency' => null,
        'destination_wire_message' => null,
        'destination_sepa_reference' => null,
        'destination_ach_reference' => null,
        'destination_address' => null,
        'destination_blockchain_memo' => null,
        'return_address' => null,
        'custom_developer_fee_percent' => null
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
        'chain' => 'chain',
        'currency' => 'currency',
        'address' => 'address',
        'external_account_id' => 'external_account_id',
        'prefunded_account_id' => 'prefunded_account_id',
        'bridge_wallet_id' => 'bridge_wallet_id',
        'destination_payment_rail' => 'destination_payment_rail',
        'destination_currency' => 'destination_currency',
        'destination_wire_message' => 'destination_wire_message',
        'destination_sepa_reference' => 'destination_sepa_reference',
        'destination_ach_reference' => 'destination_ach_reference',
        'destination_address' => 'destination_address',
        'destination_blockchain_memo' => 'destination_blockchain_memo',
        'return_address' => 'return_address',
        'custom_developer_fee_percent' => 'custom_developer_fee_percent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chain' => 'setChain',
        'currency' => 'setCurrency',
        'address' => 'setAddress',
        'external_account_id' => 'setExternalAccountId',
        'prefunded_account_id' => 'setPrefundedAccountId',
        'bridge_wallet_id' => 'setBridgeWalletId',
        'destination_payment_rail' => 'setDestinationPaymentRail',
        'destination_currency' => 'setDestinationCurrency',
        'destination_wire_message' => 'setDestinationWireMessage',
        'destination_sepa_reference' => 'setDestinationSepaReference',
        'destination_ach_reference' => 'setDestinationAchReference',
        'destination_address' => 'setDestinationAddress',
        'destination_blockchain_memo' => 'setDestinationBlockchainMemo',
        'return_address' => 'setReturnAddress',
        'custom_developer_fee_percent' => 'setCustomDeveloperFeePercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chain' => 'getChain',
        'currency' => 'getCurrency',
        'address' => 'getAddress',
        'external_account_id' => 'getExternalAccountId',
        'prefunded_account_id' => 'getPrefundedAccountId',
        'bridge_wallet_id' => 'getBridgeWalletId',
        'destination_payment_rail' => 'getDestinationPaymentRail',
        'destination_currency' => 'getDestinationCurrency',
        'destination_wire_message' => 'getDestinationWireMessage',
        'destination_sepa_reference' => 'getDestinationSepaReference',
        'destination_ach_reference' => 'getDestinationAchReference',
        'destination_address' => 'getDestinationAddress',
        'destination_blockchain_memo' => 'getDestinationBlockchainMemo',
        'return_address' => 'getReturnAddress',
        'custom_developer_fee_percent' => 'getCustomDeveloperFeePercent'
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

    const CHAIN_ETHEREUM = 'ethereum';
    const CHAIN_SOLANA = 'solana';
    const CHAIN_POLYGON = 'polygon';
    const CHAIN_AVALANCHE_C_CHAIN = 'avalanche_c_chain';
    const CHAIN_BASE = 'base';
    const CHAIN_ARBITRUM = 'arbitrum';
    const CHAIN_OPTIMISM = 'optimism';
    const CHAIN_STELLAR = 'stellar';
    const CHAIN_TRON = 'tron';
    const CURRENCY_USDC = 'usdc';
    const CURRENCY_EURC = 'eurc';
    const CURRENCY_DAI = 'dai';
    const CURRENCY_PYUSD = 'pyusd';
    const CURRENCY_USDT = 'usdt';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChainAllowableValues()
    {
        return [
            self::CHAIN_ETHEREUM,
            self::CHAIN_SOLANA,
            self::CHAIN_POLYGON,
            self::CHAIN_AVALANCHE_C_CHAIN,
            self::CHAIN_BASE,
            self::CHAIN_ARBITRUM,
            self::CHAIN_OPTIMISM,
            self::CHAIN_STELLAR,
            self::CHAIN_TRON,
        ];
    }
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
            self::CURRENCY_DAI,
            self::CURRENCY_PYUSD,
            self::CURRENCY_USDT,
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
        $this->container['chain'] = isset($data['chain']) ? $data['chain'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['external_account_id'] = isset($data['external_account_id']) ? $data['external_account_id'] : null;
        $this->container['prefunded_account_id'] = isset($data['prefunded_account_id']) ? $data['prefunded_account_id'] : null;
        $this->container['bridge_wallet_id'] = isset($data['bridge_wallet_id']) ? $data['bridge_wallet_id'] : null;
        $this->container['destination_payment_rail'] = isset($data['destination_payment_rail']) ? $data['destination_payment_rail'] : null;
        $this->container['destination_currency'] = isset($data['destination_currency']) ? $data['destination_currency'] : null;
        $this->container['destination_wire_message'] = isset($data['destination_wire_message']) ? $data['destination_wire_message'] : null;
        $this->container['destination_sepa_reference'] = isset($data['destination_sepa_reference']) ? $data['destination_sepa_reference'] : null;
        $this->container['destination_ach_reference'] = isset($data['destination_ach_reference']) ? $data['destination_ach_reference'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['destination_blockchain_memo'] = isset($data['destination_blockchain_memo']) ? $data['destination_blockchain_memo'] : null;
        $this->container['return_address'] = isset($data['return_address']) ? $data['return_address'] : null;
        $this->container['custom_developer_fee_percent'] = isset($data['custom_developer_fee_percent']) ? $data['custom_developer_fee_percent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['chain'] === null) {
            $invalidProperties[] = "'chain' can't be null";
        }
        $allowedValues = $this->getChainAllowableValues();
        if (!is_null($this->container['chain']) && !in_array($this->container['chain'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'chain', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
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
     * @param string $chain The blockchain chain for the liquidation address
     *
     * @return $this
     */
    public function setChain($chain)
    {
        $allowedValues = $this->getChainAllowableValues();
        if (!in_array($chain, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'chain', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['chain'] = $chain;

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
     * @param string $currency The currency for the liquidation address
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
     * @param string $address The liquidation address on the blockchain
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets external_account_id
     *
     * @return string
     */
    public function getExternalAccountId()
    {
        return $this->container['external_account_id'];
    }

    /**
     * Sets external_account_id
     *
     * @param string $external_account_id External bank account to send funds to
     *
     * @return $this
     */
    public function setExternalAccountId($external_account_id)
    {
        $this->container['external_account_id'] = $external_account_id;

        return $this;
    }

    /**
     * Gets prefunded_account_id
     *
     * @return string
     */
    public function getPrefundedAccountId()
    {
        return $this->container['prefunded_account_id'];
    }

    /**
     * Sets prefunded_account_id
     *
     * @param string $prefunded_account_id Developer's prefunded account id
     *
     * @return $this
     */
    public function setPrefundedAccountId($prefunded_account_id)
    {
        $this->container['prefunded_account_id'] = $prefunded_account_id;

        return $this;
    }

    /**
     * Gets bridge_wallet_id
     *
     * @return string
     */
    public function getBridgeWalletId()
    {
        return $this->container['bridge_wallet_id'];
    }

    /**
     * Sets bridge_wallet_id
     *
     * @param string $bridge_wallet_id Bridge Wallet to send funds to
     *
     * @return $this
     */
    public function setBridgeWalletId($bridge_wallet_id)
    {
        $this->container['bridge_wallet_id'] = $bridge_wallet_id;

        return $this;
    }

    /**
     * Gets destination_payment_rail
     *
     * @return AllOfCreateLiquidationAddressDtoDestinationPaymentRail
     */
    public function getDestinationPaymentRail()
    {
        return $this->container['destination_payment_rail'];
    }

    /**
     * Sets destination_payment_rail
     *
     * @param AllOfCreateLiquidationAddressDtoDestinationPaymentRail $destination_payment_rail Payment rail for sending funds
     *
     * @return $this
     */
    public function setDestinationPaymentRail($destination_payment_rail)
    {
        $this->container['destination_payment_rail'] = $destination_payment_rail;

        return $this;
    }

    /**
     * Gets destination_currency
     *
     * @return AllOfCreateLiquidationAddressDtoDestinationCurrency
     */
    public function getDestinationCurrency()
    {
        return $this->container['destination_currency'];
    }

    /**
     * Sets destination_currency
     *
     * @param AllOfCreateLiquidationAddressDtoDestinationCurrency $destination_currency Currency for sending funds
     *
     * @return $this
     */
    public function setDestinationCurrency($destination_currency)
    {
        $this->container['destination_currency'] = $destination_currency;

        return $this;
    }

    /**
     * Gets destination_wire_message
     *
     * @return string
     */
    public function getDestinationWireMessage()
    {
        return $this->container['destination_wire_message'];
    }

    /**
     * Sets destination_wire_message
     *
     * @param string $destination_wire_message Message for wire transfers
     *
     * @return $this
     */
    public function setDestinationWireMessage($destination_wire_message)
    {
        $this->container['destination_wire_message'] = $destination_wire_message;

        return $this;
    }

    /**
     * Gets destination_sepa_reference
     *
     * @return string
     */
    public function getDestinationSepaReference()
    {
        return $this->container['destination_sepa_reference'];
    }

    /**
     * Sets destination_sepa_reference
     *
     * @param string $destination_sepa_reference Reference for SEPA transactions
     *
     * @return $this
     */
    public function setDestinationSepaReference($destination_sepa_reference)
    {
        $this->container['destination_sepa_reference'] = $destination_sepa_reference;

        return $this;
    }

    /**
     * Gets destination_ach_reference
     *
     * @return string
     */
    public function getDestinationAchReference()
    {
        return $this->container['destination_ach_reference'];
    }

    /**
     * Sets destination_ach_reference
     *
     * @param string $destination_ach_reference Reference for ACH transactions
     *
     * @return $this
     */
    public function setDestinationAchReference($destination_ach_reference)
    {
        $this->container['destination_ach_reference'] = $destination_ach_reference;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return string
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param string $destination_address Crypto wallet address for crypto transfers
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets destination_blockchain_memo
     *
     * @return string
     */
    public function getDestinationBlockchainMemo()
    {
        return $this->container['destination_blockchain_memo'];
    }

    /**
     * Sets destination_blockchain_memo
     *
     * @param string $destination_blockchain_memo Memo for blockchain transactions
     *
     * @return $this
     */
    public function setDestinationBlockchainMemo($destination_blockchain_memo)
    {
        $this->container['destination_blockchain_memo'] = $destination_blockchain_memo;

        return $this;
    }

    /**
     * Gets return_address
     *
     * @return string
     */
    public function getReturnAddress()
    {
        return $this->container['return_address'];
    }

    /**
     * Sets return_address
     *
     * @param string $return_address Address to return funds on failed transactions (Not supported on Stellar)
     *
     * @return $this
     */
    public function setReturnAddress($return_address)
    {
        $this->container['return_address'] = $return_address;

        return $this;
    }

    /**
     * Gets custom_developer_fee_percent
     *
     * @return string
     */
    public function getCustomDeveloperFeePercent()
    {
        return $this->container['custom_developer_fee_percent'];
    }

    /**
     * Sets custom_developer_fee_percent
     *
     * @param string $custom_developer_fee_percent Custom developer fee percentage (Base 100 percentage: 10.2% = \"10.2\")
     *
     * @return $this
     */
    public function setCustomDeveloperFeePercent($custom_developer_fee_percent)
    {
        $this->container['custom_developer_fee_percent'] = $custom_developer_fee_percent;

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
