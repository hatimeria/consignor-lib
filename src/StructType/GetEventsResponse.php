<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for GetEventsResponse StructType
 * @subpackage Structs
 */
class GetEventsResponse extends AbstractStructBase
{
    /**
     * The GetEventsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEvent
     */
    public $GetEventsResult;
    /**
     * Constructor method for GetEventsResponse
     * @uses GetEventsResponse::setGetEventsResult()
     * @param \ArrayType\ArrayOfEvent $getEventsResult
     */
    public function __construct(\ArrayType\ArrayOfEvent $getEventsResult = null)
    {
        $this
            ->setGetEventsResult($getEventsResult);
    }
    /**
     * Get GetEventsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEvent|null
     */
    public function getGetEventsResult()
    {
        return isset($this->GetEventsResult) ? $this->GetEventsResult : null;
    }
    /**
     * Set GetEventsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEvent $getEventsResult
     * @return \StructType\GetEventsResponse
     */
    public function setGetEventsResult(\ArrayType\ArrayOfEvent $getEventsResult = null)
    {
        if (is_null($getEventsResult) || (is_array($getEventsResult) && empty($getEventsResult))) {
            unset($this->GetEventsResult);
        } else {
            $this->GetEventsResult = $getEventsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetEventsResponse
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
