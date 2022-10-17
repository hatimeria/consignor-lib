<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for Amount StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Amount
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The CurrencyClientId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CurrencyClientId;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Kind;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * Constructor method for Amount
     * @uses Amount::setCurrencyClientId()
     * @uses Amount::setCurrencyCode()
     * @uses Amount::setKind()
     * @uses Amount::setValue()
     * @param int $currencyClientId
     * @param string $currencyCode
     * @param string $kind
     * @param float $value
     */
    public function __construct($currencyClientId = null, $currencyCode = null, $kind = null, $value = null)
    {
        $this
            ->setCurrencyClientId($currencyClientId)
            ->setCurrencyCode($currencyCode)
            ->setKind($kind)
            ->setValue($value);
    }
    /**
     * Get CurrencyClientId value
     * @return int|null
     */
    public function getCurrencyClientId()
    {
        return $this->CurrencyClientId;
    }
    /**
     * Set CurrencyClientId value
     * @param int $currencyClientId
     * @return \StructType\Amount
     */
    public function setCurrencyClientId($currencyClientId = null)
    {
        // validation for constraint: int
        if (!is_null($currencyClientId) && !is_numeric($currencyClientId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($currencyClientId)), __LINE__);
        }
        $this->CurrencyClientId = $currencyClientId;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return isset($this->CurrencyCode) ? $this->CurrencyCode : null;
    }
    /**
     * Set CurrencyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyCode
     * @return \StructType\Amount
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        if (is_null($currencyCode) || (is_array($currencyCode) && empty($currencyCode))) {
            unset($this->CurrencyCode);
        } else {
            $this->CurrencyCode = $currencyCode;
        }
        return $this;
    }
    /**
     * Get Kind value
     * @return string|null
     */
    public function getKind()
    {
        return $this->Kind;
    }
    /**
     * Set Kind value
     * @uses \EnumType\AmountKind::valueIsValid()
     * @uses \EnumType\AmountKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $kind
     * @return \StructType\Amount
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AmountKind::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $kind, implode(', ', \EnumType\AmountKind::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \StructType\Amount
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Amount
     */
    public static function __set_state(array $array): StructInterface
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString(): string
    {
        return __CLASS__;
    }
}
