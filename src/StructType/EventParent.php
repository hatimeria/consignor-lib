<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EventParent StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EventParent
 * @subpackage Structs
 */
class EventParent extends AbstractStructBase
{
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Barcode;
    /**
     * The Esid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Esid;
    /**
     * The IsShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShipment;
    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * Constructor method for EventParent
     * @uses EventParent::setBarcode()
     * @uses EventParent::setEsid()
     * @uses EventParent::setIsShipment()
     * @uses EventParent::setOrderNumber()
     * @param string $barcode
     * @param int $esid
     * @param bool $isShipment
     * @param string $orderNumber
     */
    public function __construct($barcode = null, $esid = null, $isShipment = null, $orderNumber = null)
    {
        $this
            ->setBarcode($barcode)
            ->setEsid($esid)
            ->setIsShipment($isShipment)
            ->setOrderNumber($orderNumber);
    }
    /**
     * Get Barcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode()
    {
        return isset($this->Barcode) ? $this->Barcode : null;
    }
    /**
     * Set Barcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode
     * @return \StructType\EventParent
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        if (is_null($barcode) || (is_array($barcode) && empty($barcode))) {
            unset($this->Barcode);
        } else {
            $this->Barcode = $barcode;
        }
        return $this;
    }
    /**
     * Get Esid value
     * @return int|null
     */
    public function getEsid()
    {
        return $this->Esid;
    }
    /**
     * Set Esid value
     * @param int $esid
     * @return \StructType\EventParent
     */
    public function setEsid($esid = null)
    {
        // validation for constraint: int
        if (!is_null($esid) && !is_numeric($esid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($esid)), __LINE__);
        }
        $this->Esid = $esid;
        return $this;
    }
    /**
     * Get IsShipment value
     * @return bool|null
     */
    public function getIsShipment()
    {
        return $this->IsShipment;
    }
    /**
     * Set IsShipment value
     * @param bool $isShipment
     * @return \StructType\EventParent
     */
    public function setIsShipment($isShipment = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShipment) && !is_bool($isShipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShipment)), __LINE__);
        }
        $this->IsShipment = $isShipment;
        return $this;
    }
    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderNumber()
    {
        return isset($this->OrderNumber) ? $this->OrderNumber : null;
    }
    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderNumber
     * @return \StructType\EventParent
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EventParent
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
