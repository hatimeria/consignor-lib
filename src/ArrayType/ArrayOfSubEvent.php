<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfSubEvent ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSubEvent
 * @subpackage Arrays
 */
class ArrayOfSubEvent extends AbstractStructArrayBase
{
    /**
     * The SubEvent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SubEvent[]
     */
    public $SubEvent;
    /**
     * Constructor method for ArrayOfSubEvent
     * @uses ArrayOfSubEvent::setSubEvent()
     * @param \StructType\SubEvent[] $subEvent
     */
    public function __construct(array $subEvent = array())
    {
        $this
            ->setSubEvent($subEvent);
    }
    /**
     * Get SubEvent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SubEvent[]|null
     */
    public function getSubEvent()
    {
        return isset($this->SubEvent) ? $this->SubEvent : null;
    }
    /**
     * Set SubEvent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\SubEvent[] $subEvent
     * @return \ArrayType\ArrayOfSubEvent
     */
    public function setSubEvent(array $subEvent = array())
    {
        foreach ($subEvent as $arrayOfSubEventSubEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfSubEventSubEventItem instanceof \StructType\SubEvent) {
                throw new \InvalidArgumentException(sprintf('The SubEvent property can only contain items of \StructType\SubEvent, "%s" given', is_object($arrayOfSubEventSubEventItem) ? get_class($arrayOfSubEventSubEventItem) : gettype($arrayOfSubEventSubEventItem)), __LINE__);
            }
        }
        if (is_null($subEvent) || (is_array($subEvent) && empty($subEvent))) {
            unset($this->SubEvent);
        } else {
            $this->SubEvent = $subEvent;
        }
        return $this;
    }
    /**
     * Add item to SubEvent value
     * @throws \InvalidArgumentException
     * @param \StructType\SubEvent $item
     * @return \ArrayType\ArrayOfSubEvent
     */
    public function addToSubEvent(\StructType\SubEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SubEvent) {
            throw new \InvalidArgumentException(sprintf('The SubEvent property can only contain items of \StructType\SubEvent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SubEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SubEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SubEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SubEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SubEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SubEvent
     */
    public function getAttributeName(): string
    {
        return 'SubEvent';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfSubEvent
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
