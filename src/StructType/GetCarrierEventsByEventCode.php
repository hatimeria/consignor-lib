<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCarrierEventsByEventCode StructType
 * @subpackage Structs
 */
class GetCarrierEventsByEventCode extends AbstractStructBase
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
     * The eventDateTimeStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventDateTimeStart;
    /**
     * The eventDateTimeEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventDateTimeEnd;
    /**
     * The eventCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $eventCodes;
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
     * Constructor method for GetCarrierEventsByEventCode
     * @uses GetCarrierEventsByEventCode::setUserName()
     * @uses GetCarrierEventsByEventCode::setPassword()
     * @uses GetCarrierEventsByEventCode::setEventDateTimeStart()
     * @uses GetCarrierEventsByEventCode::setEventDateTimeEnd()
     * @uses GetCarrierEventsByEventCode::setEventCodes()
     * @uses GetCarrierEventsByEventCode::setInstallationValue()
     * @uses GetCarrierEventsByEventCode::setActors()
     * @param string $userName
     * @param string $password
     * @param string $eventDateTimeStart
     * @param string $eventDateTimeEnd
     * @param \ArrayType\ArrayOfstring $eventCodes
     * @param string $installationValue
     * @param \ArrayType\ArrayOfint $actors
     */
    public function __construct($userName = null, $password = null, $eventDateTimeStart = null, $eventDateTimeEnd = null, \ArrayType\ArrayOfstring $eventCodes = null, $installationValue = null, \ArrayType\ArrayOfint $actors = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setEventDateTimeStart($eventDateTimeStart)
            ->setEventDateTimeEnd($eventDateTimeEnd)
            ->setEventCodes($eventCodes)
            ->setInstallationValue($installationValue)
            ->setActors($actors);
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
     * @return \StructType\GetCarrierEventsByEventCode
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
     * @return \StructType\GetCarrierEventsByEventCode
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
     * Get eventDateTimeStart value
     * @return string|null
     */
    public function getEventDateTimeStart()
    {
        return $this->eventDateTimeStart;
    }
    /**
     * Set eventDateTimeStart value
     * @param string $eventDateTimeStart
     * @return \StructType\GetCarrierEventsByEventCode
     */
    public function setEventDateTimeStart($eventDateTimeStart = null)
    {
        // validation for constraint: string
        if (!is_null($eventDateTimeStart) && !is_string($eventDateTimeStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDateTimeStart)), __LINE__);
        }
        $this->eventDateTimeStart = $eventDateTimeStart;
        return $this;
    }
    /**
     * Get eventDateTimeEnd value
     * @return string|null
     */
    public function getEventDateTimeEnd()
    {
        return $this->eventDateTimeEnd;
    }
    /**
     * Set eventDateTimeEnd value
     * @param string $eventDateTimeEnd
     * @return \StructType\GetCarrierEventsByEventCode
     */
    public function setEventDateTimeEnd($eventDateTimeEnd = null)
    {
        // validation for constraint: string
        if (!is_null($eventDateTimeEnd) && !is_string($eventDateTimeEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDateTimeEnd)), __LINE__);
        }
        $this->eventDateTimeEnd = $eventDateTimeEnd;
        return $this;
    }
    /**
     * Get eventCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getEventCodes()
    {
        return isset($this->eventCodes) ? $this->eventCodes : null;
    }
    /**
     * Set eventCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $eventCodes
     * @return \StructType\GetCarrierEventsByEventCode
     */
    public function setEventCodes(\ArrayType\ArrayOfstring $eventCodes = null)
    {
        if (is_null($eventCodes) || (is_array($eventCodes) && empty($eventCodes))) {
            unset($this->eventCodes);
        } else {
            $this->eventCodes = $eventCodes;
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
     * @return \StructType\GetCarrierEventsByEventCode
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
     * @return \StructType\GetCarrierEventsByEventCode
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCarrierEventsByEventCode
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
