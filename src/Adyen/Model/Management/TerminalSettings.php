<?php

/**
 * Management API
 *
 * The version of the OpenAPI document: 3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\Management;

use \ArrayAccess;
use Adyen\Model\Management\ObjectSerializer;

/**
 * TerminalSettings Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TerminalSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TerminalSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cardholderReceipt' => '\Adyen\Model\Management\CardholderReceipt',
        'connectivity' => '\Adyen\Model\Management\Connectivity',
        'gratuities' => '\Adyen\Model\Management\Gratuity[]',
        'hardware' => '\Adyen\Model\Management\Hardware',
        'localization' => '\Adyen\Model\Management\Localization',
        'nexo' => '\Adyen\Model\Management\Nexo',
        'offlineProcessing' => '\Adyen\Model\Management\OfflineProcessing',
        'opi' => '\Adyen\Model\Management\Opi',
        'passcodes' => '\Adyen\Model\Management\Passcodes',
        'payAtTable' => '\Adyen\Model\Management\PayAtTable',
        'payment' => '\Adyen\Model\Management\Payment',
        'receiptOptions' => '\Adyen\Model\Management\ReceiptOptions',
        'receiptPrinting' => '\Adyen\Model\Management\ReceiptPrinting',
        'refunds' => '\Adyen\Model\Management\Refunds',
        'signature' => '\Adyen\Model\Management\Signature',
        'standalone' => '\Adyen\Model\Management\Standalone',
        'surcharge' => '\Adyen\Model\Management\Surcharge',
        'tapToPay' => '\Adyen\Model\Management\TapToPay',
        'timeouts' => '\Adyen\Model\Management\Timeouts',
        'wifiProfiles' => '\Adyen\Model\Management\WifiProfiles'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cardholderReceipt' => null,
        'connectivity' => null,
        'gratuities' => null,
        'hardware' => null,
        'localization' => null,
        'nexo' => null,
        'offlineProcessing' => null,
        'opi' => null,
        'passcodes' => null,
        'payAtTable' => null,
        'payment' => null,
        'receiptOptions' => null,
        'receiptPrinting' => null,
        'refunds' => null,
        'signature' => null,
        'standalone' => null,
        'surcharge' => null,
        'tapToPay' => null,
        'timeouts' => null,
        'wifiProfiles' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'cardholderReceipt' => false,
        'connectivity' => false,
        'gratuities' => false,
        'hardware' => false,
        'localization' => false,
        'nexo' => false,
        'offlineProcessing' => false,
        'opi' => false,
        'passcodes' => false,
        'payAtTable' => false,
        'payment' => false,
        'receiptOptions' => false,
        'receiptPrinting' => false,
        'refunds' => false,
        'signature' => false,
        'standalone' => false,
        'surcharge' => false,
        'tapToPay' => false,
        'timeouts' => false,
        'wifiProfiles' => false
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
        'cardholderReceipt' => 'cardholderReceipt',
        'connectivity' => 'connectivity',
        'gratuities' => 'gratuities',
        'hardware' => 'hardware',
        'localization' => 'localization',
        'nexo' => 'nexo',
        'offlineProcessing' => 'offlineProcessing',
        'opi' => 'opi',
        'passcodes' => 'passcodes',
        'payAtTable' => 'payAtTable',
        'payment' => 'payment',
        'receiptOptions' => 'receiptOptions',
        'receiptPrinting' => 'receiptPrinting',
        'refunds' => 'refunds',
        'signature' => 'signature',
        'standalone' => 'standalone',
        'surcharge' => 'surcharge',
        'tapToPay' => 'tapToPay',
        'timeouts' => 'timeouts',
        'wifiProfiles' => 'wifiProfiles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cardholderReceipt' => 'setCardholderReceipt',
        'connectivity' => 'setConnectivity',
        'gratuities' => 'setGratuities',
        'hardware' => 'setHardware',
        'localization' => 'setLocalization',
        'nexo' => 'setNexo',
        'offlineProcessing' => 'setOfflineProcessing',
        'opi' => 'setOpi',
        'passcodes' => 'setPasscodes',
        'payAtTable' => 'setPayAtTable',
        'payment' => 'setPayment',
        'receiptOptions' => 'setReceiptOptions',
        'receiptPrinting' => 'setReceiptPrinting',
        'refunds' => 'setRefunds',
        'signature' => 'setSignature',
        'standalone' => 'setStandalone',
        'surcharge' => 'setSurcharge',
        'tapToPay' => 'setTapToPay',
        'timeouts' => 'setTimeouts',
        'wifiProfiles' => 'setWifiProfiles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cardholderReceipt' => 'getCardholderReceipt',
        'connectivity' => 'getConnectivity',
        'gratuities' => 'getGratuities',
        'hardware' => 'getHardware',
        'localization' => 'getLocalization',
        'nexo' => 'getNexo',
        'offlineProcessing' => 'getOfflineProcessing',
        'opi' => 'getOpi',
        'passcodes' => 'getPasscodes',
        'payAtTable' => 'getPayAtTable',
        'payment' => 'getPayment',
        'receiptOptions' => 'getReceiptOptions',
        'receiptPrinting' => 'getReceiptPrinting',
        'refunds' => 'getRefunds',
        'signature' => 'getSignature',
        'standalone' => 'getStandalone',
        'surcharge' => 'getSurcharge',
        'tapToPay' => 'getTapToPay',
        'timeouts' => 'getTimeouts',
        'wifiProfiles' => 'getWifiProfiles'
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
        $this->setIfExists('cardholderReceipt', $data ?? [], null);
        $this->setIfExists('connectivity', $data ?? [], null);
        $this->setIfExists('gratuities', $data ?? [], null);
        $this->setIfExists('hardware', $data ?? [], null);
        $this->setIfExists('localization', $data ?? [], null);
        $this->setIfExists('nexo', $data ?? [], null);
        $this->setIfExists('offlineProcessing', $data ?? [], null);
        $this->setIfExists('opi', $data ?? [], null);
        $this->setIfExists('passcodes', $data ?? [], null);
        $this->setIfExists('payAtTable', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('receiptOptions', $data ?? [], null);
        $this->setIfExists('receiptPrinting', $data ?? [], null);
        $this->setIfExists('refunds', $data ?? [], null);
        $this->setIfExists('signature', $data ?? [], null);
        $this->setIfExists('standalone', $data ?? [], null);
        $this->setIfExists('surcharge', $data ?? [], null);
        $this->setIfExists('tapToPay', $data ?? [], null);
        $this->setIfExists('timeouts', $data ?? [], null);
        $this->setIfExists('wifiProfiles', $data ?? [], null);
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
     * Gets cardholderReceipt
     *
     * @return \Adyen\Model\Management\CardholderReceipt|null
     */
    public function getCardholderReceipt()
    {
        return $this->container['cardholderReceipt'];
    }

    /**
     * Sets cardholderReceipt
     *
     * @param \Adyen\Model\Management\CardholderReceipt|null $cardholderReceipt cardholderReceipt
     *
     * @return self
     */
    public function setCardholderReceipt($cardholderReceipt)
    {
        if (is_null($cardholderReceipt)) {
            throw new \InvalidArgumentException('non-nullable cardholderReceipt cannot be null');
        }
        $this->container['cardholderReceipt'] = $cardholderReceipt;

        return $this;
    }

    /**
     * Gets connectivity
     *
     * @return \Adyen\Model\Management\Connectivity|null
     */
    public function getConnectivity()
    {
        return $this->container['connectivity'];
    }

    /**
     * Sets connectivity
     *
     * @param \Adyen\Model\Management\Connectivity|null $connectivity connectivity
     *
     * @return self
     */
    public function setConnectivity($connectivity)
    {
        if (is_null($connectivity)) {
            throw new \InvalidArgumentException('non-nullable connectivity cannot be null');
        }
        $this->container['connectivity'] = $connectivity;

        return $this;
    }

    /**
     * Gets gratuities
     *
     * @return \Adyen\Model\Management\Gratuity[]|null
     */
    public function getGratuities()
    {
        return $this->container['gratuities'];
    }

    /**
     * Sets gratuities
     *
     * @param \Adyen\Model\Management\Gratuity[]|null $gratuities Settings for tipping with or without predefined options to choose from. The maximum number of predefined options is four, or three plus the option to enter a custom tip.
     *
     * @return self
     */
    public function setGratuities($gratuities)
    {
        if (is_null($gratuities)) {
            throw new \InvalidArgumentException('non-nullable gratuities cannot be null');
        }
        $this->container['gratuities'] = $gratuities;

        return $this;
    }

    /**
     * Gets hardware
     *
     * @return \Adyen\Model\Management\Hardware|null
     */
    public function getHardware()
    {
        return $this->container['hardware'];
    }

    /**
     * Sets hardware
     *
     * @param \Adyen\Model\Management\Hardware|null $hardware hardware
     *
     * @return self
     */
    public function setHardware($hardware)
    {
        if (is_null($hardware)) {
            throw new \InvalidArgumentException('non-nullable hardware cannot be null');
        }
        $this->container['hardware'] = $hardware;

        return $this;
    }

    /**
     * Gets localization
     *
     * @return \Adyen\Model\Management\Localization|null
     */
    public function getLocalization()
    {
        return $this->container['localization'];
    }

    /**
     * Sets localization
     *
     * @param \Adyen\Model\Management\Localization|null $localization localization
     *
     * @return self
     */
    public function setLocalization($localization)
    {
        if (is_null($localization)) {
            throw new \InvalidArgumentException('non-nullable localization cannot be null');
        }
        $this->container['localization'] = $localization;

        return $this;
    }

    /**
     * Gets nexo
     *
     * @return \Adyen\Model\Management\Nexo|null
     */
    public function getNexo()
    {
        return $this->container['nexo'];
    }

    /**
     * Sets nexo
     *
     * @param \Adyen\Model\Management\Nexo|null $nexo nexo
     *
     * @return self
     */
    public function setNexo($nexo)
    {
        if (is_null($nexo)) {
            throw new \InvalidArgumentException('non-nullable nexo cannot be null');
        }
        $this->container['nexo'] = $nexo;

        return $this;
    }

    /**
     * Gets offlineProcessing
     *
     * @return \Adyen\Model\Management\OfflineProcessing|null
     */
    public function getOfflineProcessing()
    {
        return $this->container['offlineProcessing'];
    }

    /**
     * Sets offlineProcessing
     *
     * @param \Adyen\Model\Management\OfflineProcessing|null $offlineProcessing offlineProcessing
     *
     * @return self
     */
    public function setOfflineProcessing($offlineProcessing)
    {
        if (is_null($offlineProcessing)) {
            throw new \InvalidArgumentException('non-nullable offlineProcessing cannot be null');
        }
        $this->container['offlineProcessing'] = $offlineProcessing;

        return $this;
    }

    /**
     * Gets opi
     *
     * @return \Adyen\Model\Management\Opi|null
     */
    public function getOpi()
    {
        return $this->container['opi'];
    }

    /**
     * Sets opi
     *
     * @param \Adyen\Model\Management\Opi|null $opi opi
     *
     * @return self
     */
    public function setOpi($opi)
    {
        if (is_null($opi)) {
            throw new \InvalidArgumentException('non-nullable opi cannot be null');
        }
        $this->container['opi'] = $opi;

        return $this;
    }

    /**
     * Gets passcodes
     *
     * @return \Adyen\Model\Management\Passcodes|null
     */
    public function getPasscodes()
    {
        return $this->container['passcodes'];
    }

    /**
     * Sets passcodes
     *
     * @param \Adyen\Model\Management\Passcodes|null $passcodes passcodes
     *
     * @return self
     */
    public function setPasscodes($passcodes)
    {
        if (is_null($passcodes)) {
            throw new \InvalidArgumentException('non-nullable passcodes cannot be null');
        }
        $this->container['passcodes'] = $passcodes;

        return $this;
    }

    /**
     * Gets payAtTable
     *
     * @return \Adyen\Model\Management\PayAtTable|null
     */
    public function getPayAtTable()
    {
        return $this->container['payAtTable'];
    }

    /**
     * Sets payAtTable
     *
     * @param \Adyen\Model\Management\PayAtTable|null $payAtTable payAtTable
     *
     * @return self
     */
    public function setPayAtTable($payAtTable)
    {
        if (is_null($payAtTable)) {
            throw new \InvalidArgumentException('non-nullable payAtTable cannot be null');
        }
        $this->container['payAtTable'] = $payAtTable;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Adyen\Model\Management\Payment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Adyen\Model\Management\Payment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            throw new \InvalidArgumentException('non-nullable payment cannot be null');
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets receiptOptions
     *
     * @return \Adyen\Model\Management\ReceiptOptions|null
     */
    public function getReceiptOptions()
    {
        return $this->container['receiptOptions'];
    }

    /**
     * Sets receiptOptions
     *
     * @param \Adyen\Model\Management\ReceiptOptions|null $receiptOptions receiptOptions
     *
     * @return self
     */
    public function setReceiptOptions($receiptOptions)
    {
        if (is_null($receiptOptions)) {
            throw new \InvalidArgumentException('non-nullable receiptOptions cannot be null');
        }
        $this->container['receiptOptions'] = $receiptOptions;

        return $this;
    }

    /**
     * Gets receiptPrinting
     *
     * @return \Adyen\Model\Management\ReceiptPrinting|null
     */
    public function getReceiptPrinting()
    {
        return $this->container['receiptPrinting'];
    }

    /**
     * Sets receiptPrinting
     *
     * @param \Adyen\Model\Management\ReceiptPrinting|null $receiptPrinting receiptPrinting
     *
     * @return self
     */
    public function setReceiptPrinting($receiptPrinting)
    {
        if (is_null($receiptPrinting)) {
            throw new \InvalidArgumentException('non-nullable receiptPrinting cannot be null');
        }
        $this->container['receiptPrinting'] = $receiptPrinting;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \Adyen\Model\Management\Refunds|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \Adyen\Model\Management\Refunds|null $refunds refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        if (is_null($refunds)) {
            throw new \InvalidArgumentException('non-nullable refunds cannot be null');
        }
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return \Adyen\Model\Management\Signature|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param \Adyen\Model\Management\Signature|null $signature signature
     *
     * @return self
     */
    public function setSignature($signature)
    {
        if (is_null($signature)) {
            throw new \InvalidArgumentException('non-nullable signature cannot be null');
        }
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets standalone
     *
     * @return \Adyen\Model\Management\Standalone|null
     */
    public function getStandalone()
    {
        return $this->container['standalone'];
    }

    /**
     * Sets standalone
     *
     * @param \Adyen\Model\Management\Standalone|null $standalone standalone
     *
     * @return self
     */
    public function setStandalone($standalone)
    {
        if (is_null($standalone)) {
            throw new \InvalidArgumentException('non-nullable standalone cannot be null');
        }
        $this->container['standalone'] = $standalone;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return \Adyen\Model\Management\Surcharge|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param \Adyen\Model\Management\Surcharge|null $surcharge surcharge
     *
     * @return self
     */
    public function setSurcharge($surcharge)
    {
        if (is_null($surcharge)) {
            throw new \InvalidArgumentException('non-nullable surcharge cannot be null');
        }
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets tapToPay
     *
     * @return \Adyen\Model\Management\TapToPay|null
     */
    public function getTapToPay()
    {
        return $this->container['tapToPay'];
    }

    /**
     * Sets tapToPay
     *
     * @param \Adyen\Model\Management\TapToPay|null $tapToPay tapToPay
     *
     * @return self
     */
    public function setTapToPay($tapToPay)
    {
        if (is_null($tapToPay)) {
            throw new \InvalidArgumentException('non-nullable tapToPay cannot be null');
        }
        $this->container['tapToPay'] = $tapToPay;

        return $this;
    }

    /**
     * Gets timeouts
     *
     * @return \Adyen\Model\Management\Timeouts|null
     */
    public function getTimeouts()
    {
        return $this->container['timeouts'];
    }

    /**
     * Sets timeouts
     *
     * @param \Adyen\Model\Management\Timeouts|null $timeouts timeouts
     *
     * @return self
     */
    public function setTimeouts($timeouts)
    {
        if (is_null($timeouts)) {
            throw new \InvalidArgumentException('non-nullable timeouts cannot be null');
        }
        $this->container['timeouts'] = $timeouts;

        return $this;
    }

    /**
     * Gets wifiProfiles
     *
     * @return \Adyen\Model\Management\WifiProfiles|null
     */
    public function getWifiProfiles()
    {
        return $this->container['wifiProfiles'];
    }

    /**
     * Sets wifiProfiles
     *
     * @param \Adyen\Model\Management\WifiProfiles|null $wifiProfiles wifiProfiles
     *
     * @return self
     */
    public function setWifiProfiles($wifiProfiles)
    {
        if (is_null($wifiProfiles)) {
            throw new \InvalidArgumentException('non-nullable wifiProfiles cannot be null');
        }
        $this->container['wifiProfiles'] = $wifiProfiles;

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
