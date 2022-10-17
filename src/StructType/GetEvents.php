<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetEvents StructType
 * @subpackage Structs
 */
class GetEvents extends AbstractStructBase
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
     * Constructor method for GetEvents
     * @uses GetEvents::setUserName()
     * @uses GetEvents::setPassword()
     * @uses GetEvents::setEventDateTimeStart()
     * @uses GetEvents::setEventDateTimeEnd()
     * @param string $userName
     * @param string $password
     * @param string $eventDateTimeStart
     * @param string $eventDateTimeEnd
     */
    public function __construct($userName = null, $password = null, $eventDateTimeStart = null, $eventDateTimeEnd = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setEventDateTimeStart($eventDateTimeStart)
            ->setEventDateTimeEnd($eventDateTimeEnd);
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
     * @return \StructType\GetEvents
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
     * @return \StructType\GetEvents
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
     * @return \StructType\GetEvents
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
     * @return \StructType\GetEvents
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetEvents
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
