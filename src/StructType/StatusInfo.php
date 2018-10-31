<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StatusInfo
 * @subpackage Structs
 */
class StatusInfo extends AbstractStructBase
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
     * The IsClosed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsClosed;
    /**
     * The ShipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipmentNumber;
    /**
     * Constructor method for StatusInfo
     * @uses StatusInfo::setBarcode()
     * @uses StatusInfo::setIsClosed()
     * @uses StatusInfo::setShipmentNumber()
     * @param string $barcode
     * @param bool $isClosed
     * @param string $shipmentNumber
     */
    public function __construct($barcode = null, $isClosed = null, $shipmentNumber = null)
    {
        $this
            ->setBarcode($barcode)
            ->setIsClosed($isClosed)
            ->setShipmentNumber($shipmentNumber);
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
     * @return \StructType\StatusInfo
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
     * Get IsClosed value
     * @return bool|null
     */
    public function getIsClosed()
    {
        return $this->IsClosed;
    }
    /**
     * Set IsClosed value
     * @param bool $isClosed
     * @return \StructType\StatusInfo
     */
    public function setIsClosed($isClosed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isClosed) && !is_bool($isClosed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isClosed)), __LINE__);
        }
        $this->IsClosed = $isClosed;
        return $this;
    }
    /**
     * Get ShipmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return isset($this->ShipmentNumber) ? $this->ShipmentNumber : null;
    }
    /**
     * Set ShipmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentNumber
     * @return \StructType\StatusInfo
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentNumber)), __LINE__);
        }
        if (is_null($shipmentNumber) || (is_array($shipmentNumber) && empty($shipmentNumber))) {
            unset($this->ShipmentNumber);
        } else {
            $this->ShipmentNumber = $shipmentNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StatusInfo
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
