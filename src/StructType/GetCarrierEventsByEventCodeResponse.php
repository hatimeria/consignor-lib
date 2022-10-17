<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetCarrierEventsByEventCodeResponse StructType
 * @subpackage Structs
 */
class GetCarrierEventsByEventCodeResponse extends AbstractStructBase
{
    /**
     * The GetCarrierEventsByEventCodeResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEvent
     */
    public $GetCarrierEventsByEventCodeResult;
    /**
     * Constructor method for GetCarrierEventsByEventCodeResponse
     * @uses GetCarrierEventsByEventCodeResponse::setGetCarrierEventsByEventCodeResult()
     * @param \ArrayType\ArrayOfEvent $getCarrierEventsByEventCodeResult
     */
    public function __construct(\ArrayType\ArrayOfEvent $getCarrierEventsByEventCodeResult = null)
    {
        $this
            ->setGetCarrierEventsByEventCodeResult($getCarrierEventsByEventCodeResult);
    }
    /**
     * Get GetCarrierEventsByEventCodeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEvent|null
     */
    public function getGetCarrierEventsByEventCodeResult()
    {
        return isset($this->GetCarrierEventsByEventCodeResult) ? $this->GetCarrierEventsByEventCodeResult : null;
    }
    /**
     * Set GetCarrierEventsByEventCodeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEvent $getCarrierEventsByEventCodeResult
     * @return \StructType\GetCarrierEventsByEventCodeResponse
     */
    public function setGetCarrierEventsByEventCodeResult(\ArrayType\ArrayOfEvent $getCarrierEventsByEventCodeResult = null)
    {
        if (is_null($getCarrierEventsByEventCodeResult) || (is_array($getCarrierEventsByEventCodeResult) && empty($getCarrierEventsByEventCodeResult))) {
            unset($this->GetCarrierEventsByEventCodeResult);
        } else {
            $this->GetCarrierEventsByEventCodeResult = $getCarrierEventsByEventCodeResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetCarrierEventsByEventCodeResponse
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
