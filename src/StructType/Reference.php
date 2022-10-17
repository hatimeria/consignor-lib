<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for Reference StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Reference
 * @subpackage Structs
 */
class Reference extends AbstractStructBase
{
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Details
     */
    public $Details;
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Kind;
    /**
     * The KindText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $KindText;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for Reference
     * @uses Reference::setDetails()
     * @uses Reference::setKind()
     * @uses Reference::setKindText()
     * @uses Reference::setValue()
     * @param \StructType\Details $details
     * @param int $kind
     * @param string $kindText
     * @param string $value
     */
    public function __construct(\StructType\Details $details = null, $kind = null, $kindText = null, $value = null)
    {
        $this
            ->setDetails($details)
            ->setKind($kind)
            ->setKindText($kindText)
            ->setValue($value);
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Details|null
     */
    public function getDetails()
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Details $details
     * @return \StructType\Reference
     */
    public function setDetails(\StructType\Details $details = null)
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        return $this;
    }
    /**
     * Get Kind value
     * @return int|null
     */
    public function getKind()
    {
        return $this->Kind;
    }
    /**
     * Set Kind value
     * @param int $kind
     * @return \StructType\Reference
     */
    public function setKind($kind = null)
    {
        // validation for constraint: int
        if (!is_null($kind) && !is_numeric($kind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kind)), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Get KindText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKindText()
    {
        return isset($this->KindText) ? $this->KindText : null;
    }
    /**
     * Set KindText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $kindText
     * @return \StructType\Reference
     */
    public function setKindText($kindText = null)
    {
        // validation for constraint: string
        if (!is_null($kindText) && !is_string($kindText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kindText)), __LINE__);
        }
        if (is_null($kindText) || (is_array($kindText) && empty($kindText))) {
            unset($this->KindText);
        } else {
            $this->KindText = $kindText;
        }
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \StructType\Reference
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Reference
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
