<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for HealthResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:HealthResponse
 * @subpackage Structs
 */
class HealthResponse extends AbstractStructBase
{
    /**
     * The HealthStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HealthStatus;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * Constructor method for HealthResponse
     * @uses HealthResponse::setHealthStatus()
     * @uses HealthResponse::setMessage()
     * @param bool $healthStatus
     * @param string $message
     */
    public function __construct($healthStatus = null, $message = null)
    {
        $this
            ->setHealthStatus($healthStatus)
            ->setMessage($message);
    }
    /**
     * Get HealthStatus value
     * @return bool|null
     */
    public function getHealthStatus()
    {
        return $this->HealthStatus;
    }
    /**
     * Set HealthStatus value
     * @param bool $healthStatus
     * @return \StructType\HealthResponse
     */
    public function setHealthStatus($healthStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($healthStatus) && !is_bool($healthStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($healthStatus)), __LINE__);
        }
        $this->HealthStatus = $healthStatus;
        return $this;
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\HealthResponse
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\HealthResponse
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
