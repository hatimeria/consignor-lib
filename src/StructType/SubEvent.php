<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for SubEvent StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SubEvent
 * @subpackage Structs
 */
class SubEvent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The HasSpecialValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HasSpecialValue;
    /**
     * The SubEventType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SubEventType;
    /**
     * The SubEvents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfSubEvent
     */
    public $SubEvents;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * Constructor method for SubEvent
     * @uses SubEvent::setDescription()
     * @uses SubEvent::setHasSpecialValue()
     * @uses SubEvent::setSubEventType()
     * @uses SubEvent::setSubEvents()
     * @uses SubEvent::setValue()
     * @param string $description
     * @param int $hasSpecialValue
     * @param string $subEventType
     * @param \ArrayType\ArrayOfSubEvent $subEvents
     * @param string $value
     */
    public function __construct($description = null, $hasSpecialValue = null, $subEventType = null, \ArrayType\ArrayOfSubEvent $subEvents = null, $value = null)
    {
        $this
            ->setDescription($description)
            ->setHasSpecialValue($hasSpecialValue)
            ->setSubEventType($subEventType)
            ->setSubEvents($subEvents)
            ->setValue($value);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\SubEvent
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get HasSpecialValue value
     * @return int|null
     */
    public function getHasSpecialValue()
    {
        return $this->HasSpecialValue;
    }
    /**
     * Set HasSpecialValue value
     * @param int $hasSpecialValue
     * @return \StructType\SubEvent
     */
    public function setHasSpecialValue($hasSpecialValue = null)
    {
        // validation for constraint: int
        if (!is_null($hasSpecialValue) && !is_numeric($hasSpecialValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hasSpecialValue)), __LINE__);
        }
        $this->HasSpecialValue = $hasSpecialValue;
        return $this;
    }
    /**
     * Get SubEventType value
     * @return string|null
     */
    public function getSubEventType()
    {
        return $this->SubEventType;
    }
    /**
     * Set SubEventType value
     * @uses \EnumType\SubEventTypes::valueIsValid()
     * @uses \EnumType\SubEventTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subEventType
     * @return \StructType\SubEvent
     */
    public function setSubEventType($subEventType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SubEventTypes::valueIsValid($subEventType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subEventType, implode(', ', \EnumType\SubEventTypes::getValidValues())), __LINE__);
        }
        $this->SubEventType = $subEventType;
        return $this;
    }
    /**
     * Get SubEvents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfSubEvent|null
     */
    public function getSubEvents()
    {
        return isset($this->SubEvents) ? $this->SubEvents : null;
    }
    /**
     * Set SubEvents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfSubEvent $subEvents
     * @return \StructType\SubEvent
     */
    public function setSubEvents(\ArrayType\ArrayOfSubEvent $subEvents = null)
    {
        if (is_null($subEvents) || (is_array($subEvents) && empty($subEvents))) {
            unset($this->SubEvents);
        } else {
            $this->SubEvents = $subEvents;
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
     * @return \StructType\SubEvent
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
     * @return \StructType\SubEvent
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
