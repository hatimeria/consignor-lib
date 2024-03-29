<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Health ServiceType
 * @subpackage Services
 */
class Health extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named HealthCheck
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\HealthCheck $parameters
     * @return \StructType\HealthCheckResponse|bool
     */
    public function HealthCheck(\StructType\HealthCheck $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->HealthCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\HealthCheckResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
