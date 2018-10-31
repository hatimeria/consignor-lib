<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Package StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Package
 * @subpackage Structs
 */
class Package extends AbstractStructBase
{
    /**
     * The Barcode1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Barcode1;
    /**
     * The Barcode2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Barcode2;
    /**
     * The Deleted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $Deleted;
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDetail
     */
    public $Details;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEvent
     */
    public $Events;
    /**
     * The ItemNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ItemNumber;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Number;
    /**
     * The References
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReference
     */
    public $References;
    /**
     * Constructor method for Package
     * @uses Package::setBarcode1()
     * @uses Package::setBarcode2()
     * @uses Package::setDeleted()
     * @uses Package::setDetails()
     * @uses Package::setEvents()
     * @uses Package::setItemNumber()
     * @uses Package::setNumber()
     * @uses Package::setReferences()
     * @param string $barcode1
     * @param string $barcode2
     * @param bool $deleted
     * @param \ArrayType\ArrayOfDetail $details
     * @param \ArrayType\ArrayOfEvent $events
     * @param int $itemNumber
     * @param string $number
     * @param \ArrayType\ArrayOfReference $references
     */
    public function __construct($barcode1 = null, $barcode2 = null, $deleted = null, \ArrayType\ArrayOfDetail $details = null, \ArrayType\ArrayOfEvent $events = null, $itemNumber = null, $number = null, \ArrayType\ArrayOfReference $references = null)
    {
        $this
            ->setBarcode1($barcode1)
            ->setBarcode2($barcode2)
            ->setDeleted($deleted)
            ->setDetails($details)
            ->setEvents($events)
            ->setItemNumber($itemNumber)
            ->setNumber($number)
            ->setReferences($references);
    }
    /**
     * Get Barcode1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode1()
    {
        return isset($this->Barcode1) ? $this->Barcode1 : null;
    }
    /**
     * Set Barcode1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode1
     * @return \StructType\Package
     */
    public function setBarcode1($barcode1 = null)
    {
        // validation for constraint: string
        if (!is_null($barcode1) && !is_string($barcode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode1)), __LINE__);
        }
        if (is_null($barcode1) || (is_array($barcode1) && empty($barcode1))) {
            unset($this->Barcode1);
        } else {
            $this->Barcode1 = $barcode1;
        }
        return $this;
    }
    /**
     * Get Barcode2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode2()
    {
        return isset($this->Barcode2) ? $this->Barcode2 : null;
    }
    /**
     * Set Barcode2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode2
     * @return \StructType\Package
     */
    public function setBarcode2($barcode2 = null)
    {
        // validation for constraint: string
        if (!is_null($barcode2) && !is_string($barcode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode2)), __LINE__);
        }
        if (is_null($barcode2) || (is_array($barcode2) && empty($barcode2))) {
            unset($this->Barcode2);
        } else {
            $this->Barcode2 = $barcode2;
        }
        return $this;
    }
    /**
     * Get Deleted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDeleted()
    {
        return isset($this->Deleted) ? $this->Deleted : null;
    }
    /**
     * Set Deleted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $deleted
     * @return \StructType\Package
     */
    public function setDeleted($deleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleted) && !is_bool($deleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleted)), __LINE__);
        }
        if (is_null($deleted) || (is_array($deleted) && empty($deleted))) {
            unset($this->Deleted);
        } else {
            $this->Deleted = $deleted;
        }
        return $this;
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDetail|null
     */
    public function getDetails()
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDetail $details
     * @return \StructType\Package
     */
    public function setDetails(\ArrayType\ArrayOfDetail $details = null)
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        return $this;
    }
    /**
     * Get Events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEvent|null
     */
    public function getEvents()
    {
        return isset($this->Events) ? $this->Events : null;
    }
    /**
     * Set Events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEvent $events
     * @return \StructType\Package
     */
    public function setEvents(\ArrayType\ArrayOfEvent $events = null)
    {
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->Events);
        } else {
            $this->Events = $events;
        }
        return $this;
    }
    /**
     * Get ItemNumber value
     * @return int|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param int $itemNumber
     * @return \StructType\Package
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: int
        if (!is_null($itemNumber) && !is_numeric($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber()
    {
        return isset($this->Number) ? $this->Number : null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \StructType\Package
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        return $this;
    }
    /**
     * Get References value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReference|null
     */
    public function getReferences()
    {
        return isset($this->References) ? $this->References : null;
    }
    /**
     * Set References value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReference $references
     * @return \StructType\Package
     */
    public function setReferences(\ArrayType\ArrayOfReference $references = null)
    {
        if (is_null($references) || (is_array($references) && empty($references))) {
            unset($this->References);
        } else {
            $this->References = $references;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Package
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
