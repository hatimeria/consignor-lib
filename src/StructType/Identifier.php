<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for Identifier StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Identifier
 * @subpackage Structs
 */
class Identifier extends AbstractStructBase
{
    /**
     * The IdentifierType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IdentifierType;
    /**
     * The IdentifierValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IdentifierValue;
    /**
     * Constructor method for Identifier
     * @uses Identifier::setIdentifierType()
     * @uses Identifier::setIdentifierValue()
     * @param string $identifierType
     * @param string $identifierValue
     */
    public function __construct($identifierType = null, $identifierValue = null)
    {
        $this
            ->setIdentifierType($identifierType)
            ->setIdentifierValue($identifierValue);
    }
    /**
     * Get IdentifierType value
     * @return string|null
     */
    public function getIdentifierType()
    {
        return $this->IdentifierType;
    }
    /**
     * Set IdentifierType value
     * @uses \EnumType\IdentifierType::valueIsValid()
     * @uses \EnumType\IdentifierType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $identifierType
     * @return \StructType\Identifier
     */
    public function setIdentifierType($identifierType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\IdentifierType::valueIsValid($identifierType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $identifierType, implode(', ', \EnumType\IdentifierType::getValidValues())), __LINE__);
        }
        $this->IdentifierType = $identifierType;
        return $this;
    }
    /**
     * Get IdentifierValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentifierValue()
    {
        return isset($this->IdentifierValue) ? $this->IdentifierValue : null;
    }
    /**
     * Set IdentifierValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identifierValue
     * @return \StructType\Identifier
     */
    public function setIdentifierValue($identifierValue = null)
    {
        // validation for constraint: string
        if (!is_null($identifierValue) && !is_string($identifierValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifierValue)), __LINE__);
        }
        if (is_null($identifierValue) || (is_array($identifierValue) && empty($identifierValue))) {
            unset($this->IdentifierValue);
        } else {
            $this->IdentifierValue = $identifierValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Identifier
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
