<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetShipmentsByShipmentNumber StructType
 * @subpackage Structs
 */
class GetShipmentsByShipmentNumber extends AbstractStructBase
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
     * The installationValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $installationValue;
    /**
     * The actors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint
     */
    public $actors;
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
     * The requestConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $requestConfig;
    /**
     * Constructor method for GetShipmentsByShipmentNumber
     * @uses GetShipmentsByShipmentNumber::setUserName()
     * @uses GetShipmentsByShipmentNumber::setPassword()
     * @uses GetShipmentsByShipmentNumber::setInstallationValue()
     * @uses GetShipmentsByShipmentNumber::setActors()
     * @uses GetShipmentsByShipmentNumber::setShipmentNumber()
     * @uses GetShipmentsByShipmentNumber::setStartDateTime()
     * @uses GetShipmentsByShipmentNumber::setEndDateTime()
     * @uses GetShipmentsByShipmentNumber::setRequestConfig()
     * @param string $userName
     * @param string $password
     * @param string $installationValue
     * @param \ArrayType\ArrayOfint $actors
     * @param string $shipmentNumber
     * @param string $startDateTime
     * @param string $endDateTime
     * @param string $requestConfig
     */
    public function __construct($userName = null, $password = null, $installationValue = null, \ArrayType\ArrayOfint $actors = null, $shipmentNumber = null, $startDateTime = null, $endDateTime = null, $requestConfig = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setInstallationValue($installationValue)
            ->setActors($actors)
            ->setShipmentNumber($shipmentNumber)
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime)
            ->setRequestConfig($requestConfig);
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
     * @return \StructType\GetShipmentsByShipmentNumber
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
     * @return \StructType\GetShipmentsByShipmentNumber
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
     * Get installationValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstallationValue()
    {
        return isset($this->installationValue) ? $this->installationValue : null;
    }
    /**
     * Set installationValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $installationValue
     * @return \StructType\GetShipmentsByShipmentNumber
     */
    public function setInstallationValue($installationValue = null)
    {
        // validation for constraint: string
        if (!is_null($installationValue) && !is_string($installationValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($installationValue)), __LINE__);
        }
        if (is_null($installationValue) || (is_array($installationValue) && empty($installationValue))) {
            unset($this->installationValue);
        } else {
            $this->installationValue = $installationValue;
        }
        return $this;
    }
    /**
     * Get actors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getActors()
    {
        return isset($this->actors) ? $this->actors : null;
    }
    /**
     * Set actors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $actors
     * @return \StructType\GetShipmentsByShipmentNumber
     */
    public function setActors(\ArrayType\ArrayOfint $actors = null)
    {
        if (is_null($actors) || (is_array($actors) && empty($actors))) {
            unset($this->actors);
        } else {
            $this->actors = $actors;
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
     * @return \StructType\GetShipmentsByShipmentNumber
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
     * @return \StructType\GetShipmentsByShipmentNumber
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
     * @return \StructType\GetShipmentsByShipmentNumber
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
     * Get requestConfig value
     * @return string|null
     */
    public function getRequestConfig()
    {
        return $this->requestConfig;
    }
    /**
     * Set requestConfig value
     * @uses \EnumType\RequestConfiguration::valueIsValid()
     * @uses \EnumType\RequestConfiguration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestConfig
     * @return \StructType\GetShipmentsByShipmentNumber
     */
    public function setRequestConfig($requestConfig = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RequestConfiguration::valueIsValid($requestConfig)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestConfig, implode(', ', \EnumType\RequestConfiguration::getValidValues())), __LINE__);
        }
        $this->requestConfig = $requestConfig;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentsByShipmentNumber
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
