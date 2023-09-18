<?php

/**
 * Configuration API
 *
 * The version of the OpenAPI document: 2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Adyen\Model\BalancePlatform;

use \ArrayAccess;
use Adyen\Model\BalancePlatform\ObjectSerializer;

/**
 * BankAccountIdentificationTypeRequirement Class Doc Comment
 *
 * @category Class
 * @package  Adyen
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BankAccountIdentificationTypeRequirement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankAccountIdentificationTypeRequirement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bankAccountIdentificationTypes' => 'string[]',
        'description' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bankAccountIdentificationTypes' => null,
        'description' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'bankAccountIdentificationTypes' => false,
        'description' => false,
        'type' => false
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
        'bankAccountIdentificationTypes' => 'bankAccountIdentificationTypes',
        'description' => 'description',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bankAccountIdentificationTypes' => 'setBankAccountIdentificationTypes',
        'description' => 'setDescription',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bankAccountIdentificationTypes' => 'getBankAccountIdentificationTypes',
        'description' => 'getDescription',
        'type' => 'getType'
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

    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_AU_LOCAL = 'auLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_BR_LOCAL = 'brLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_CA_LOCAL = 'caLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_CZ_LOCAL = 'czLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_DK_LOCAL = 'dkLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_HK_LOCAL = 'hkLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_HU_LOCAL = 'huLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_IBAN = 'iban';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_LEGACY = 'legacy';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_NO_LOCAL = 'noLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_NUMBER_AND_BIC = 'numberAndBic';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_NZ_LOCAL = 'nzLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_PL_LOCAL = 'plLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_SE_LOCAL = 'seLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_SG_LOCAL = 'sgLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_UK_LOCAL = 'ukLocal';
    public const BANK_ACCOUNT_IDENTIFICATION_TYPES_US_LOCAL = 'usLocal';
    public const TYPE_BANK_ACCOUNT_IDENTIFICATION_TYPE_REQUIREMENT = 'bankAccountIdentificationTypeRequirement';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankAccountIdentificationTypesAllowableValues()
    {
        return [
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_AU_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_BR_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_CA_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_CZ_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_DK_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_HK_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_HU_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_IBAN,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_LEGACY,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_NO_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_NUMBER_AND_BIC,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_NZ_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_PL_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_SE_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_SG_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_UK_LOCAL,
            self::BANK_ACCOUNT_IDENTIFICATION_TYPES_US_LOCAL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BANK_ACCOUNT_IDENTIFICATION_TYPE_REQUIREMENT,
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
        $this->setIfExists('bankAccountIdentificationTypes', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'bankAccountIdentificationTypeRequirement');
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets bankAccountIdentificationTypes
     *
     * @return string[]|null
     */
    public function getBankAccountIdentificationTypes()
    {
        return $this->container['bankAccountIdentificationTypes'];
    }

    /**
     * Sets bankAccountIdentificationTypes
     *
     * @param string[]|null $bankAccountIdentificationTypes List of bank account identification types: eg.; [iban , numberAndBic]
     *
     * @return self
     */
    public function setBankAccountIdentificationTypes($bankAccountIdentificationTypes)
    {
        if (is_null($bankAccountIdentificationTypes)) {
            throw new \InvalidArgumentException('non-nullable bankAccountIdentificationTypes cannot be null');
        }
        $allowedValues = $this->getBankAccountIdentificationTypesAllowableValues();
        if (array_diff($bankAccountIdentificationTypes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bankAccountIdentificationTypes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bankAccountIdentificationTypes'] = $bankAccountIdentificationTypes;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Specifies the bank account details for a particular route per required field in this object depending on the country of the bank account and the currency of the transfer.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type **bankAccountIdentificationTypeRequirement**
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
