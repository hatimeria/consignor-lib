<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetShipmentsByPackageNumberResponse StructType
 * @subpackage Structs
 */
class GetShipmentsByPackageNumberResponse extends AbstractStructBase
{
    /**
     * The GetShipmentsByPackageNumberResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipment
     */
    public $GetShipmentsByPackageNumberResult;
    /**
     * Constructor method for GetShipmentsByPackageNumberResponse
     * @uses GetShipmentsByPackageNumberResponse::setGetShipmentsByPackageNumberResult()
     * @param \ArrayType\ArrayOfShipment $getShipmentsByPackageNumberResult
     */
    public function __construct(\ArrayType\ArrayOfShipment $getShipmentsByPackageNumberResult = null)
    {
        $this
            ->setGetShipmentsByPackageNumberResult($getShipmentsByPackageNumberResult);
    }
    /**
     * Get GetShipmentsByPackageNumberResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipment|null
     */
    public function getGetShipmentsByPackageNumberResult()
    {
        return isset($this->GetShipmentsByPackageNumberResult) ? $this->GetShipmentsByPackageNumberResult : null;
    }
    /**
     * Set GetShipmentsByPackageNumberResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipment $getShipmentsByPackageNumberResult
     * @return \StructType\GetShipmentsByPackageNumberResponse
     */
    public function setGetShipmentsByPackageNumberResult(\ArrayType\ArrayOfShipment $getShipmentsByPackageNumberResult = null)
    {
        if (is_null($getShipmentsByPackageNumberResult) || (is_array($getShipmentsByPackageNumberResult) && empty($getShipmentsByPackageNumberResult))) {
            unset($this->GetShipmentsByPackageNumberResult);
        } else {
            $this->GetShipmentsByPackageNumberResult = $getShipmentsByPackageNumberResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetShipmentsByPackageNumberResponse
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
