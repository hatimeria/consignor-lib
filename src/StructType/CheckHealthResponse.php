<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckHealthResponse StructType
 * @subpackage Structs
 */
class CheckHealthResponse extends AbstractStructBase
{
    /**
     * The CheckHealthResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\HealthResponse
     */
    public $CheckHealthResult;
    /**
     * Constructor method for CheckHealthResponse
     * @uses CheckHealthResponse::setCheckHealthResult()
     * @param \StructType\HealthResponse $checkHealthResult
     */
    public function __construct(\StructType\HealthResponse $checkHealthResult = null)
    {
        $this
            ->setCheckHealthResult($checkHealthResult);
    }
    /**
     * Get CheckHealthResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\HealthResponse|null
     */
    public function getCheckHealthResult()
    {
        return isset($this->CheckHealthResult) ? $this->CheckHealthResult : null;
    }
    /**
     * Set CheckHealthResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\HealthResponse $checkHealthResult
     * @return \StructType\CheckHealthResponse
     */
    public function setCheckHealthResult(\StructType\HealthResponse $checkHealthResult = null)
    {
        if (is_null($checkHealthResult) || (is_array($checkHealthResult) && empty($checkHealthResult))) {
            unset($this->CheckHealthResult);
        } else {
            $this->CheckHealthResult = $checkHealthResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CheckHealthResponse
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
