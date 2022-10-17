<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for SendEvent StructType
 * @subpackage Structs
 */
class SendEvent extends AbstractStructBase
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
     * The submitEvent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ImportEvent
     */
    public $submitEvent;
    /**
     * Constructor method for SendEvent
     * @uses SendEvent::setUserName()
     * @uses SendEvent::setPassword()
     * @uses SendEvent::setSubmitEvent()
     * @param string $userName
     * @param string $password
     * @param \StructType\ImportEvent $submitEvent
     */
    public function __construct($userName = null, $password = null, \StructType\ImportEvent $submitEvent = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
            ->setSubmitEvent($submitEvent);
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
     * @return \StructType\SendEvent
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
     * @return \StructType\SendEvent
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
     * Get submitEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ImportEvent|null
     */
    public function getSubmitEvent()
    {
        return isset($this->submitEvent) ? $this->submitEvent : null;
    }
    /**
     * Set submitEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ImportEvent $submitEvent
     * @return \StructType\SendEvent
     */
    public function setSubmitEvent(\StructType\ImportEvent $submitEvent = null)
    {
        if (is_null($submitEvent) || (is_array($submitEvent) && empty($submitEvent))) {
            unset($this->submitEvent);
        } else {
            $this->submitEvent = $submitEvent;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendEvent
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
