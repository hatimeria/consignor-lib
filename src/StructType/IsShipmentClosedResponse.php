<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsShipmentClosedResponse StructType
 * @subpackage Structs
 */
class IsShipmentClosedResponse extends AbstractStructBase
{
    /**
     * The IsShipmentClosedResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfStatusInfo
     */
    public $IsShipmentClosedResult;
    /**
     * Constructor method for IsShipmentClosedResponse
     * @uses IsShipmentClosedResponse::setIsShipmentClosedResult()
     * @param \ArrayType\ArrayOfStatusInfo $isShipmentClosedResult
     */
    public function __construct(\ArrayType\ArrayOfStatusInfo $isShipmentClosedResult = null)
    {
        $this
            ->setIsShipmentClosedResult($isShipmentClosedResult);
    }
    /**
     * Get IsShipmentClosedResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfStatusInfo|null
     */
    public function getIsShipmentClosedResult()
    {
        return isset($this->IsShipmentClosedResult) ? $this->IsShipmentClosedResult : null;
    }
    /**
     * Set IsShipmentClosedResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfStatusInfo $isShipmentClosedResult
     * @return \StructType\IsShipmentClosedResponse
     */
    public function setIsShipmentClosedResult(\ArrayType\ArrayOfStatusInfo $isShipmentClosedResult = null)
    {
        if (is_null($isShipmentClosedResult) || (is_array($isShipmentClosedResult) && empty($isShipmentClosedResult))) {
            unset($this->IsShipmentClosedResult);
        } else {
            $this->IsShipmentClosedResult = $isShipmentClosedResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\IsShipmentClosedResponse
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
