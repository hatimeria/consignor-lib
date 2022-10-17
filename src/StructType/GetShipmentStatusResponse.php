<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetShipmentStatusResponse StructType
 * @subpackage Structs
 */
class GetShipmentStatusResponse extends AbstractStructBase
{
    /**
     * The GetShipmentStatusResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEvent
     */
    public $GetShipmentStatusResult;
    /**
     * Constructor method for GetShipmentStatusResponse
     * @uses GetShipmentStatusResponse::setGetShipmentStatusResult()
     * @param \ArrayType\ArrayOfEvent $getShipmentStatusResult
     */
    public function __construct(\ArrayType\ArrayOfEvent $getShipmentStatusResult = null)
    {
        $this
            ->setGetShipmentStatusResult($getShipmentStatusResult);
    }
    /**
     * Get GetShipmentStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEvent|null
     */
    public function getGetShipmentStatusResult()
    {
        return isset($this->GetShipmentStatusResult) ? $this->GetShipmentStatusResult : null;
    }
    /**
     * Set GetShipmentStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEvent $getShipmentStatusResult
     * @return \StructType\GetShipmentStatusResponse
     */
    public function setGetShipmentStatusResult(\ArrayType\ArrayOfEvent $getShipmentStatusResult = null)
    {
        if (is_null($getShipmentStatusResult) || (is_array($getShipmentStatusResult) && empty($getShipmentStatusResult))) {
            unset($this->GetShipmentStatusResult);
        } else {
            $this->GetShipmentStatusResult = $getShipmentStatusResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentStatusResponse
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
