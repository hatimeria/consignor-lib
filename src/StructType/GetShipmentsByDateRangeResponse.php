<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetShipmentsByDateRangeResponse StructType
 * @subpackage Structs
 */
class GetShipmentsByDateRangeResponse extends AbstractStructBase
{
    /**
     * The GetShipmentsByDateRangeResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipment
     */
    public $GetShipmentsByDateRangeResult;
    /**
     * Constructor method for GetShipmentsByDateRangeResponse
     * @uses GetShipmentsByDateRangeResponse::setGetShipmentsByDateRangeResult()
     * @param \ArrayType\ArrayOfShipment $getShipmentsByDateRangeResult
     */
    public function __construct(\ArrayType\ArrayOfShipment $getShipmentsByDateRangeResult = null)
    {
        $this
            ->setGetShipmentsByDateRangeResult($getShipmentsByDateRangeResult);
    }
    /**
     * Get GetShipmentsByDateRangeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getGetShipmentsByDateRangeResult()
    {
        return isset($this->GetShipmentsByDateRangeResult) ? $this->GetShipmentsByDateRangeResult : null;
    }
    /**
     * Set GetShipmentsByDateRangeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipment $getShipmentsByDateRangeResult
     * @return \StructType\GetShipmentsByDateRangeResponse
     */
    public function setGetShipmentsByDateRangeResult(\ArrayType\ArrayOfShipment $getShipmentsByDateRangeResult = null)
    {
        if (is_null($getShipmentsByDateRangeResult) || (is_array($getShipmentsByDateRangeResult) && empty($getShipmentsByDateRangeResult))) {
            unset($this->GetShipmentsByDateRangeResult);
        } else {
            $this->GetShipmentsByDateRangeResult = $getShipmentsByDateRangeResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentsByDateRangeResponse
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
