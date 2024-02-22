<?php

/**
 * Adyen Checkout API
 *
 * The version of the OpenAPI document: 71
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Checkout;

use \ArrayAccess;
use Adyen\Model\Checkout\ObjectSerializer;

/**
 * PaymentDetailsResponse Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentDetailsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionalData' => 'array<string,string>',
        'amount' => '\Adyen\Model\Checkout\Amount',
        'donationToken' => 'string',
        'fraudResult' => '\Adyen\Model\Checkout\FraudResult',
        'merchantReference' => 'string',
        'order' => '\Adyen\Model\Checkout\CheckoutOrderResponse',
        'paymentMethod' => '\Adyen\Model\Checkout\ResponsePaymentMethod',
        'pspReference' => 'string',
        'refusalReason' => 'string',
        'refusalReasonCode' => 'string',
        'resultCode' => 'string',
        'shopperLocale' => 'string',
        'threeDS2ResponseData' => '\Adyen\Model\Checkout\ThreeDS2ResponseData',
        'threeDS2Result' => '\Adyen\Model\Checkout\ThreeDS2Result',
        'threeDSPaymentData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionalData' => null,
        'amount' => null,
        'donationToken' => null,
        'fraudResult' => null,
        'merchantReference' => null,
        'order' => null,
        'paymentMethod' => null,
        'pspReference' => null,
        'refusalReason' => null,
        'refusalReasonCode' => null,
        'resultCode' => null,
        'shopperLocale' => null,
        'threeDS2ResponseData' => null,
        'threeDS2Result' => null,
        'threeDSPaymentData' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'additionalData' => false,
        'amount' => false,
        'donationToken' => false,
        'fraudResult' => false,
        'merchantReference' => false,
        'order' => false,
        'paymentMethod' => false,
        'pspReference' => false,
        'refusalReason' => false,
        'refusalReasonCode' => false,
        'resultCode' => false,
        'shopperLocale' => false,
        'threeDS2ResponseData' => false,
        'threeDS2Result' => false,
        'threeDSPaymentData' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additionalData' => 'additionalData',
        'amount' => 'amount',
        'donationToken' => 'donationToken',
        'fraudResult' => 'fraudResult',
        'merchantReference' => 'merchantReference',
        'order' => 'order',
        'paymentMethod' => 'paymentMethod',
        'pspReference' => 'pspReference',
        'refusalReason' => 'refusalReason',
        'refusalReasonCode' => 'refusalReasonCode',
        'resultCode' => 'resultCode',
        'shopperLocale' => 'shopperLocale',
        'threeDS2ResponseData' => 'threeDS2ResponseData',
        'threeDS2Result' => 'threeDS2Result',
        'threeDSPaymentData' => 'threeDSPaymentData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionalData' => 'setAdditionalData',
        'amount' => 'setAmount',
        'donationToken' => 'setDonationToken',
        'fraudResult' => 'setFraudResult',
        'merchantReference' => 'setMerchantReference',
        'order' => 'setOrder',
        'paymentMethod' => 'setPaymentMethod',
        'pspReference' => 'setPspReference',
        'refusalReason' => 'setRefusalReason',
        'refusalReasonCode' => 'setRefusalReasonCode',
        'resultCode' => 'setResultCode',
        'shopperLocale' => 'setShopperLocale',
        'threeDS2ResponseData' => 'setThreeDS2ResponseData',
        'threeDS2Result' => 'setThreeDS2Result',
        'threeDSPaymentData' => 'setThreeDSPaymentData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionalData' => 'getAdditionalData',
        'amount' => 'getAmount',
        'donationToken' => 'getDonationToken',
        'fraudResult' => 'getFraudResult',
        'merchantReference' => 'getMerchantReference',
        'order' => 'getOrder',
        'paymentMethod' => 'getPaymentMethod',
        'pspReference' => 'getPspReference',
        'refusalReason' => 'getRefusalReason',
        'refusalReasonCode' => 'getRefusalReasonCode',
        'resultCode' => 'getResultCode',
        'shopperLocale' => 'getShopperLocale',
        'threeDS2ResponseData' => 'getThreeDS2ResponseData',
        'threeDS2Result' => 'getThreeDS2Result',
        'threeDSPaymentData' => 'getThreeDSPaymentData'
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

    public const RESULT_CODE_AUTHENTICATION_FINISHED = 'AuthenticationFinished';
    public const RESULT_CODE_AUTHENTICATION_NOT_REQUIRED = 'AuthenticationNotRequired';
    public const RESULT_CODE_AUTHORISED = 'Authorised';
    public const RESULT_CODE_CANCELLED = 'Cancelled';
    public const RESULT_CODE_CHALLENGE_SHOPPER = 'ChallengeShopper';
    public const RESULT_CODE_ERROR = 'Error';
    public const RESULT_CODE_IDENTIFY_SHOPPER = 'IdentifyShopper';
    public const RESULT_CODE_PARTIALLY_AUTHORISED = 'PartiallyAuthorised';
    public const RESULT_CODE_PENDING = 'Pending';
    public const RESULT_CODE_PRESENT_TO_SHOPPER = 'PresentToShopper';
    public const RESULT_CODE_RECEIVED = 'Received';
    public const RESULT_CODE_REDIRECT_SHOPPER = 'RedirectShopper';
    public const RESULT_CODE_REFUSED = 'Refused';
    public const RESULT_CODE_SUCCESS = 'Success';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultCodeAllowableValues()
    {
        return [
            self::RESULT_CODE_AUTHENTICATION_FINISHED,
            self::RESULT_CODE_AUTHENTICATION_NOT_REQUIRED,
            self::RESULT_CODE_AUTHORISED,
            self::RESULT_CODE_CANCELLED,
            self::RESULT_CODE_CHALLENGE_SHOPPER,
            self::RESULT_CODE_ERROR,
            self::RESULT_CODE_IDENTIFY_SHOPPER,
            self::RESULT_CODE_PARTIALLY_AUTHORISED,
            self::RESULT_CODE_PENDING,
            self::RESULT_CODE_PRESENT_TO_SHOPPER,
            self::RESULT_CODE_RECEIVED,
            self::RESULT_CODE_REDIRECT_SHOPPER,
            self::RESULT_CODE_REFUSED,
            self::RESULT_CODE_SUCCESS,
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
        $this->setIfExists('additionalData', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('donationToken', $data ?? [], null);
        $this->setIfExists('fraudResult', $data ?? [], null);
        $this->setIfExists('merchantReference', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('pspReference', $data ?? [], null);
        $this->setIfExists('refusalReason', $data ?? [], null);
        $this->setIfExists('refusalReasonCode', $data ?? [], null);
        $this->setIfExists('resultCode', $data ?? [], null);
        $this->setIfExists('shopperLocale', $data ?? [], null);
        $this->setIfExists('threeDS2ResponseData', $data ?? [], null);
        $this->setIfExists('threeDS2Result', $data ?? [], null);
        $this->setIfExists('threeDSPaymentData', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResultCodeAllowableValues();
        if (!is_null($this->container['resultCode']) && !in_array($this->container['resultCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resultCode', must be one of '%s'",
                $this->container['resultCode'],
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
     * Gets additionalData
     *
     * @return array<string,string>|null
     */
    public function getAdditionalData()
    {
        return $this->container['additionalData'];
    }

    /**
     * Sets additionalData
     *
     * @param array<string,string>|null $additionalData Contains additional information about the payment. Some data fields are included only if you select them first: Go to **Customer Area** > **Developers** > **Additional data**.
     *
     * @return self
     */
    public function setAdditionalData($additionalData)
    {
        if (is_null($additionalData)) {
            throw new \InvalidArgumentException('non-nullable additionalData cannot be null');
        }
        $this->container['additionalData'] = $additionalData;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Adyen\Model\Checkout\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Adyen\Model\Checkout\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets donationToken
     *
     * @return string|null
     */
    public function getDonationToken()
    {
        return $this->container['donationToken'];
    }

    /**
     * Sets donationToken
     *
     * @param string|null $donationToken Donation Token containing payment details for Adyen Giving.
     *
     * @return self
     */
    public function setDonationToken($donationToken)
    {
        if (is_null($donationToken)) {
            throw new \InvalidArgumentException('non-nullable donationToken cannot be null');
        }
        $this->container['donationToken'] = $donationToken;

        return $this;
    }

    /**
     * Gets fraudResult
     *
     * @return \Adyen\Model\Checkout\FraudResult|null
     */
    public function getFraudResult()
    {
        return $this->container['fraudResult'];
    }

    /**
     * Sets fraudResult
     *
     * @param \Adyen\Model\Checkout\FraudResult|null $fraudResult fraudResult
     *
     * @return self
     */
    public function setFraudResult($fraudResult)
    {
        if (is_null($fraudResult)) {
            throw new \InvalidArgumentException('non-nullable fraudResult cannot be null');
        }
        $this->container['fraudResult'] = $fraudResult;

        return $this;
    }

    /**
     * Gets merchantReference
     *
     * @return string|null
     */
    public function getMerchantReference()
    {
        return $this->container['merchantReference'];
    }

    /**
     * Sets merchantReference
     *
     * @param string|null $merchantReference The reference used during the /payments request.
     *
     * @return self
     */
    public function setMerchantReference($merchantReference)
    {
        if (is_null($merchantReference)) {
            throw new \InvalidArgumentException('non-nullable merchantReference cannot be null');
        }
        $this->container['merchantReference'] = $merchantReference;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Adyen\Model\Checkout\CheckoutOrderResponse|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Adyen\Model\Checkout\CheckoutOrderResponse|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Adyen\Model\Checkout\ResponsePaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Adyen\Model\Checkout\ResponsePaymentMethod|null $paymentMethod paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        if (is_null($paymentMethod)) {
            throw new \InvalidArgumentException('non-nullable paymentMethod cannot be null');
        }
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets pspReference
     *
     * @return string|null
     */
    public function getPspReference()
    {
        return $this->container['pspReference'];
    }

    /**
     * Sets pspReference
     *
     * @param string|null $pspReference Adyen's 16-character string reference associated with the transaction/request. This value is globally unique; quote it when communicating with us about this request.
     *
     * @return self
     */
    public function setPspReference($pspReference)
    {
        if (is_null($pspReference)) {
            throw new \InvalidArgumentException('non-nullable pspReference cannot be null');
        }
        $this->container['pspReference'] = $pspReference;

        return $this;
    }

    /**
     * Gets refusalReason
     *
     * @return string|null
     */
    public function getRefusalReason()
    {
        return $this->container['refusalReason'];
    }

    /**
     * Sets refusalReason
     *
     * @param string|null $refusalReason If the payment's authorisation is refused or an error occurs during authorisation, this field holds Adyen's mapped reason for the refusal or a description of the error. When a transaction fails, the authorisation response includes `resultCode` and `refusalReason` values.  For more information, see [Refusal reasons](https://docs.adyen.com/development-resources/refusal-reasons).
     *
     * @return self
     */
    public function setRefusalReason($refusalReason)
    {
        if (is_null($refusalReason)) {
            throw new \InvalidArgumentException('non-nullable refusalReason cannot be null');
        }
        $this->container['refusalReason'] = $refusalReason;

        return $this;
    }

    /**
     * Gets refusalReasonCode
     *
     * @return string|null
     */
    public function getRefusalReasonCode()
    {
        return $this->container['refusalReasonCode'];
    }

    /**
     * Sets refusalReasonCode
     *
     * @param string|null $refusalReasonCode Code that specifies the refusal reason. For more information, see [Authorisation refusal reasons](https://docs.adyen.com/development-resources/refusal-reasons).
     *
     * @return self
     */
    public function setRefusalReasonCode($refusalReasonCode)
    {
        if (is_null($refusalReasonCode)) {
            throw new \InvalidArgumentException('non-nullable refusalReasonCode cannot be null');
        }
        $this->container['refusalReasonCode'] = $refusalReasonCode;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode The result of the payment. For more information, see [Result codes](https://docs.adyen.com/online-payments/payment-result-codes).  Possible values:  * **AuthenticationFinished** – The payment has been successfully authenticated with 3D Secure 2. Returned for 3D Secure 2 authentication-only transactions. * **AuthenticationNotRequired** – The transaction does not require 3D Secure authentication. Returned for [standalone authentication-only integrations](https://docs.adyen.com/online-payments/3d-secure/other-3ds-flows/authentication-only). * **Authorised** – The payment was successfully authorised. This state serves as an indicator to proceed with the delivery of goods and services. This is a final state. * **Cancelled** – Indicates the payment has been cancelled (either by the shopper or the merchant) before processing was completed. This is a final state. * **ChallengeShopper** – The issuer requires further shopper interaction before the payment can be authenticated. Returned for 3D Secure 2 transactions. * **Error** – There was an error when the payment was being processed. The reason is given in the `refusalReason` field. This is a final state. * **IdentifyShopper** – The issuer requires the shopper's device fingerprint before the payment can be authenticated. Returned for 3D Secure 2 transactions. * **PartiallyAuthorised** – The payment has been authorised for a partial amount. This happens for card payments when the merchant supports Partial Authorisations and the cardholder has insufficient funds. * **Pending** – Indicates that it is not possible to obtain the final status of the payment. This can happen if the systems providing final status information for the payment are unavailable, or if the shopper needs to take further action to complete the payment. * **PresentToShopper** – Indicates that the response contains additional information that you need to present to a shopper, so that they can use it to complete a payment. * **Received** – Indicates the payment has successfully been received by Adyen, and will be processed. This is the initial state for all payments. * **RedirectShopper** – Indicates the shopper should be redirected to an external web page or app to complete the authorisation. * **Refused** – Indicates the payment was refused. The reason is given in the `refusalReason` field. This is a final state.
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        if (is_null($resultCode)) {
            throw new \InvalidArgumentException('non-nullable resultCode cannot be null');
        }
        $allowedValues = $this->getResultCodeAllowableValues();
        if (!in_array($resultCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resultCode', must be one of '%s'",
                    $resultCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets shopperLocale
     *
     * @return string|null
     */
    public function getShopperLocale()
    {
        return $this->container['shopperLocale'];
    }

    /**
     * Sets shopperLocale
     *
     * @param string|null $shopperLocale The shopperLocale.
     *
     * @return self
     */
    public function setShopperLocale($shopperLocale)
    {
        if (is_null($shopperLocale)) {
            throw new \InvalidArgumentException('non-nullable shopperLocale cannot be null');
        }
        $this->container['shopperLocale'] = $shopperLocale;

        return $this;
    }

    /**
     * Gets threeDS2ResponseData
     *
     * @return \Adyen\Model\Checkout\ThreeDS2ResponseData|null
     */
    public function getThreeDS2ResponseData()
    {
        return $this->container['threeDS2ResponseData'];
    }

    /**
     * Sets threeDS2ResponseData
     *
     * @param \Adyen\Model\Checkout\ThreeDS2ResponseData|null $threeDS2ResponseData threeDS2ResponseData
     *
     * @return self
     */
    public function setThreeDS2ResponseData($threeDS2ResponseData)
    {
        if (is_null($threeDS2ResponseData)) {
            throw new \InvalidArgumentException('non-nullable threeDS2ResponseData cannot be null');
        }
        $this->container['threeDS2ResponseData'] = $threeDS2ResponseData;

        return $this;
    }

    /**
     * Gets threeDS2Result
     *
     * @return \Adyen\Model\Checkout\ThreeDS2Result|null
     */
    public function getThreeDS2Result()
    {
        return $this->container['threeDS2Result'];
    }

    /**
     * Sets threeDS2Result
     *
     * @param \Adyen\Model\Checkout\ThreeDS2Result|null $threeDS2Result threeDS2Result
     *
     * @return self
     */
    public function setThreeDS2Result($threeDS2Result)
    {
        if (is_null($threeDS2Result)) {
            throw new \InvalidArgumentException('non-nullable threeDS2Result cannot be null');
        }
        $this->container['threeDS2Result'] = $threeDS2Result;

        return $this;
    }

    /**
     * Gets threeDSPaymentData
     *
     * @return string|null
     */
    public function getThreeDSPaymentData()
    {
        return $this->container['threeDSPaymentData'];
    }

    /**
     * Sets threeDSPaymentData
     *
     * @param string|null $threeDSPaymentData When non-empty, contains a value that you must submit to the `/payments/details` endpoint as `paymentData`.
     *
     * @return self
     */
    public function setThreeDSPaymentData($threeDSPaymentData)
    {
        if (is_null($threeDSPaymentData)) {
            throw new \InvalidArgumentException('non-nullable threeDSPaymentData cannot be null');
        }
        $this->container['threeDSPaymentData'] = $threeDSPaymentData;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    public function toArray(): array
    {
        $array = [];
        foreach (self::$openAPITypes as $propertyName => $propertyType) {
            $propertyValue = $this[$propertyName];
            if ($propertyValue !== null) {
                // Check if the property value is an object and has a toArray() method
                if (is_object($propertyValue) && method_exists($propertyValue, 'toArray')) {
                    $array[$propertyName] = $propertyValue->toArray();
                // Check if it's type datetime
                } elseif ($propertyValue instanceof \DateTime) {
                    $array[$propertyName] = $propertyValue->format(DATE_ATOM);
                // If it's an array type we should check whether it contains objects and if so call toArray method
                } elseif (is_array($propertyValue)) {
                    $array[$propertyName] = array_map(function ($item) {
                        return $item instanceof ModelInterface ? $item->toArray() : $item;
                    }, $propertyValue);
                } else {
                    // Otherwise, directly assign the property value to the array
                    $array[$propertyName] = $propertyValue;
                }
            }
        }
        return $array;
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
