<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentsByOrderNumberResponse StructType
 * @subpackage Structs
 */
class GetShipmentsByOrderNumberResponse extends AbstractStructBase
{
    /**
     * The GetShipmentsByOrderNumberResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipment
     */
    public $GetShipmentsByOrderNumberResult;
    /**
     * Constructor method for GetShipmentsByOrderNumberResponse
     * @uses GetShipmentsByOrderNumberResponse::setGetShipmentsByOrderNumberResult()
     * @param \ArrayType\ArrayOfShipment $getShipmentsByOrderNumberResult
     */
    public function __construct(\ArrayType\ArrayOfShipment $getShipmentsByOrderNumberResult = null)
    {
        $this
            ->setGetShipmentsByOrderNumberResult($getShipmentsByOrderNumberResult);
    }
    /**
     * Get GetShipmentsByOrderNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getGetShipmentsByOrderNumberResult()
    {
        return isset($this->GetShipmentsByOrderNumberResult) ? $this->GetShipmentsByOrderNumberResult : null;
    }
    /**
     * Set GetShipmentsByOrderNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipment $getShipmentsByOrderNumberResult
     * @return \StructType\GetShipmentsByOrderNumberResponse
     */
    public function setGetShipmentsByOrderNumberResult(\ArrayType\ArrayOfShipment $getShipmentsByOrderNumberResult = null)
    {
        if (is_null($getShipmentsByOrderNumberResult) || (is_array($getShipmentsByOrderNumberResult) && empty($getShipmentsByOrderNumberResult))) {
            unset($this->GetShipmentsByOrderNumberResult);
        } else {
            $this->GetShipmentsByOrderNumberResult = $getShipmentsByOrderNumberResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentsByOrderNumberResponse
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
