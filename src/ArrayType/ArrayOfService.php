<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfService ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfService
 * @subpackage Arrays
 */
class ArrayOfService extends AbstractStructArrayBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Service[]
     */
    public $Service;
    /**
     * Constructor method for ArrayOfService
     * @uses ArrayOfService::setService()
     * @param \StructType\Service[] $service
     */
    public function __construct(array $service = array())
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Service[]|null
     */
    public function getService()
    {
        return isset($this->Service) ? $this->Service : null;
    }
    /**
     * Set Service value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Service[] $service
     * @return \ArrayType\ArrayOfService
     */
    public function setService(array $service = array())
    {
        foreach ($service as $arrayOfServiceServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceServiceItem instanceof \StructType\Service) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \StructType\Service, "%s" given', is_object($arrayOfServiceServiceItem) ? get_class($arrayOfServiceServiceItem) : gettype($arrayOfServiceServiceItem)), __LINE__);
            }
        }
        if (is_null($service) || (is_array($service) && empty($service))) {
            unset($this->Service);
        } else {
            $this->Service = $service;
        }
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \StructType\Service $item
     * @return \ArrayType\ArrayOfService
     */
    public function addToService(\StructType\Service $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Service) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \StructType\Service, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Service[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Service|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Service|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Service|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Service|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Service|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Service
     */
    public function getAttributeName(): string
    {
        return 'Service';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfService
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
