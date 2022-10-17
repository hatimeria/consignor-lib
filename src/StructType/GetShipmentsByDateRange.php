<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetShipmentsByDateRange StructType
 * @subpackage Structs
 */
class GetShipmentsByDateRange extends AbstractStructBase
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
     * The startDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $startDateTime;
    /**
     * The endDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $endDateTime;
    /**
     * The pageIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $pageIndex;
    /**
     * The requestConfig
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $requestConfig;
    /**
     * Constructor method for GetShipmentsByDateRange
     * @uses GetShipmentsByDateRange::setUserName()
     * @uses GetShipmentsByDateRange::setPassword()
     * @uses GetShipmentsByDateRange::setInstallationValue()
     * @uses GetShipmentsByDateRange::setActors()
     * @uses GetShipmentsByDateRange::setStartDateTime()
     * @uses GetShipmentsByDateRange::setEndDateTime()
     * @uses GetShipmentsByDateRange::setPageIndex()
     * @uses GetShipmentsByDateRange::setRequestConfig()
     * @param string $userName
     * @param string $password
     * @param string $installationValue
     * @param \ArrayType\ArrayOfint $actors
     * @param string $startDateTime
     * @param string $endDateTime
     * @param int $pageIndex
     * @param string $requestConfig
     */
    public function __construct($userName = null, $password = null, $installationValue = null, \ArrayType\ArrayOfint $actors = null, $startDateTime = null, $endDateTime = null, $pageIndex = null, $requestConfig = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setInstallationValue($installationValue)
            ->setActors($actors)
            ->setStartDateTime($startDateTime)
            ->setEndDateTime($endDateTime)
            ->setPageIndex($pageIndex)
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
     * @return \StructType\GetShipmentsByDateRange
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
     * @return \StructType\GetShipmentsByDateRange
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
     * @return \StructType\GetShipmentsByDateRange
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
     * @return \StructType\GetShipmentsByDateRange
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
     * Get startDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }
    /**
     * Set startDateTime value
     * @param string $startDateTime
     * @return \StructType\GetShipmentsByDateRange
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get endDateTime value
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }
    /**
     * Set endDateTime value
     * @param string $endDateTime
     * @return \StructType\GetShipmentsByDateRange
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTime)), __LINE__);
        }
        $this->endDateTime = $endDateTime;
        return $this;
    }
    /**
     * Get pageIndex value
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }
    /**
     * Set pageIndex value
     * @param int $pageIndex
     * @return \StructType\GetShipmentsByDateRange
     */
    public function setPageIndex($pageIndex = null)
    {
        // validation for constraint: int
        if (!is_null($pageIndex) && !is_numeric($pageIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pageIndex)), __LINE__);
        }
        $this->pageIndex = $pageIndex;
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
     * @return \StructType\GetShipmentsByDateRange
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
     * @return \StructType\GetShipmentsByDateRange
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
