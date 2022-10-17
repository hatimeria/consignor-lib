<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetShipmentStatus StructType
 * @subpackage Structs
 */
class GetShipmentStatus extends AbstractStructBase
{
    /**
     * The userName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $userName;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The shipmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $shipmentNumber;
    /**
     * The startDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $startDateTime;
    /**
     * The endDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $endDateTime;
    /**
     * Constructor method for GetShipmentStatus
     * @uses GetShipmentStatus::setUserName()
     * @uses GetShipmentStatus::setPassword()
     * @uses GetShipmentStatus::setShipmentNumber()
     * @uses GetShipmentStatus::setStartDateTime()
     * @uses GetShipmentStatus::setEndDateTime()
     * @param string $userName
     * @param string $password
     * @param string $shipmentNumber
     * @param string $startDateTime
     * @param string $endDateTime
     */
    public function __construct($userName = null, $password = null, $shipmentNumber = null, $startDateTime = null, $endDateTime = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setShipmentNumber($shipmentNumber)
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime);
    }
    /**
     * Get userName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName()
    {
        return isset($this->userName) ? $this->userName : null;
    }
    /**
     * Set userName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \StructType\GetShipmentStatus
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->userName);
        } else {
            $this->userName = $userName;
        }
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \StructType\GetShipmentStatus
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get shipmentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return isset($this->shipmentNumber) ? $this->shipmentNumber : null;
    }
    /**
     * Set shipmentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentNumber
     * @return \StructType\GetShipmentStatus
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentNumber)), __LINE__);
        }
        if (is_null($shipmentNumber) || (is_array($shipmentNumber) && empty($shipmentNumber))) {
            unset($this->shipmentNumber);
        } else {
            $this->shipmentNumber = $shipmentNumber;
        }
        return $this;
    }
    /**
     * Get startDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateTime()
    {
        return isset($this->startDateTime) ? $this->startDateTime : null;
    }
    /**
     * Set startDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateTime
     * @return \StructType\GetShipmentStatus
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        if (is_null($startDateTime) || (is_array($startDateTime) && empty($startDateTime))) {
            unset($this->startDateTime);
        } else {
            $this->startDateTime = $startDateTime;
        }
        return $this;
    }
    /**
     * Get endDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDateTime()
    {
        return isset($this->endDateTime) ? $this->endDateTime : null;
    }
    /**
     * Set endDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDateTime
     * @return \StructType\GetShipmentStatus
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTime)), __LINE__);
        }
        if (is_null($endDateTime) || (is_array($endDateTime) && empty($endDateTime))) {
            unset($this->endDateTime);
        } else {
            $this->endDateTime = $endDateTime;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentStatus
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
