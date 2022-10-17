<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for Service StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Service
 * @subpackage Structs
 */
class Service extends AbstractStructBase
{
    /**
     * The ServiceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ServiceId;
    /**
     * The ServiceName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ServiceName;
    /**
     * Constructor method for Service
     * @uses Service::setServiceId()
     * @uses Service::setServiceName()
     * @param int $serviceId
     * @param string $serviceName
     */
    public function __construct($serviceId = null, $serviceName = null)
    {
        $this
            ->setServiceId($serviceId)
            ->setServiceName($serviceName);
    }
    /**
     * Get ServiceId value
     * @return int|null
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param int $serviceId
     * @return \StructType\Service
     */
    public function setServiceId($serviceId = null)
    {
        // validation for constraint: int
        if (!is_null($serviceId) && !is_numeric($serviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serviceId)), __LINE__);
        }
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get ServiceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServiceName()
    {
        return isset($this->ServiceName) ? $this->ServiceName : null;
    }
    /**
     * Set ServiceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serviceName
     * @return \StructType\Service
     */
    public function setServiceName($serviceName = null)
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceName)), __LINE__);
        }
        if (is_null($serviceName) || (is_array($serviceName) && empty($serviceName))) {
            unset($this->ServiceName);
        } else {
            $this->ServiceName = $serviceName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Service
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
