<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetShipmentsByShipmentNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetShipmentsByShipmentNumber $parameters
     * @return \StructType\GetShipmentsByShipmentNumberResponse|bool
     */
    public function GetShipmentsByShipmentNumber(\StructType\GetShipmentsByShipmentNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentsByShipmentNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentsByOrderNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetShipmentsByOrderNumber $parameters
     * @return \StructType\GetShipmentsByOrderNumberResponse|bool
     */
    public function GetShipmentsByOrderNumber(\StructType\GetShipmentsByOrderNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentsByOrderNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentsByPackageNumber
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetShipmentsByPackageNumber $parameters
     * @return \StructType\GetShipmentsByPackageNumberResponse|bool
     */
    public function GetShipmentsByPackageNumber(\StructType\GetShipmentsByPackageNumber $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentsByPackageNumber($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentsByDateRange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetShipmentsByDateRange $parameters
     * @return \StructType\GetShipmentsByDateRangeResponse|bool
     */
    public function GetShipmentsByDateRange(\StructType\GetShipmentsByDateRange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentsByDateRange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEvents
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEvents $parameters
     * @return \StructType\GetEventsResponse|bool
     */
    public function GetEvents(\StructType\GetEvents $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetEvents($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCarrierEventsByEventCode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCarrierEventsByEventCode $parameters
     * @return \StructType\GetCarrierEventsByEventCodeResponse|bool
     */
    public function GetCarrierEventsByEventCode(\StructType\GetCarrierEventsByEventCode $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCarrierEventsByEventCode($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShipmentStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetShipmentStatus $parameters
     * @return \StructType\GetShipmentStatusResponse|bool
     */
    public function GetShipmentStatus(\StructType\GetShipmentStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShipmentStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetCarrierEventsByEventCodeResponse|\StructType\GetEventsResponse|\StructType\GetShipmentsByDateRangeResponse|\StructType\GetShipmentsByOrderNumberResponse|\StructType\GetShipmentsByPackageNumberResponse|\StructType\GetShipmentsByShipmentNumberResponse|\StructType\GetShipmentStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
