<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentsByShipmentNumberResponse StructType
 * @subpackage Structs
 */
class GetShipmentsByShipmentNumberResponse extends AbstractStructBase
{
    /**
     * The GetShipmentsByShipmentNumberResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipment
     */
    public $GetShipmentsByShipmentNumberResult;
    /**
     * Constructor method for GetShipmentsByShipmentNumberResponse
     * @uses GetShipmentsByShipmentNumberResponse::setGetShipmentsByShipmentNumberResult()
     * @param \ArrayType\ArrayOfShipment $getShipmentsByShipmentNumberResult
     */
    public function __construct(\ArrayType\ArrayOfShipment $getShipmentsByShipmentNumberResult = null)
    {
        $this
            ->setGetShipmentsByShipmentNumberResult($getShipmentsByShipmentNumberResult);
    }
    /**
     * Get GetShipmentsByShipmentNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getGetShipmentsByShipmentNumberResult()
    {
        return isset($this->GetShipmentsByShipmentNumberResult) ? $this->GetShipmentsByShipmentNumberResult : null;
    }
    /**
     * Set GetShipmentsByShipmentNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipment $getShipmentsByShipmentNumberResult
     * @return \StructType\GetShipmentsByShipmentNumberResponse
     */
    public function setGetShipmentsByShipmentNumberResult(\ArrayType\ArrayOfShipment $getShipmentsByShipmentNumberResult = null)
    {
        if (is_null($getShipmentsByShipmentNumberResult) || (is_array($getShipmentsByShipmentNumberResult) && empty($getShipmentsByShipmentNumberResult))) {
            unset($this->GetShipmentsByShipmentNumberResult);
        } else {
            $this->GetShipmentsByShipmentNumberResult = $getShipmentsByShipmentNumberResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentsByShipmentNumberResponse
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
