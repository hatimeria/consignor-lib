<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for SendEventResponse StructType
 * @subpackage Structs
 */
class SendEventResponse extends AbstractStructBase
{
    /**
     * The SendEventResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SendEventResult;
    /**
     * Constructor method for SendEventResponse
     * @uses SendEventResponse::setSendEventResult()
     * @param bool $sendEventResult
     */
    public function __construct($sendEventResult = null)
    {
        $this
            ->setSendEventResult($sendEventResult);
    }
    /**
     * Get SendEventResult value
     * @return bool|null
     */
    public function getSendEventResult()
    {
        return $this->SendEventResult;
    }
    /**
     * Set SendEventResult value
     * @param bool $sendEventResult
     * @return \StructType\SendEventResponse
     */
    public function setSendEventResult($sendEventResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendEventResult) && !is_bool($sendEventResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendEventResult)), __LINE__);
        }
        $this->SendEventResult = $sendEventResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendEventResponse
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
