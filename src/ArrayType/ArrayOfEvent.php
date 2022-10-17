<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfEvent ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEvent
 * @subpackage Arrays
 */
class ArrayOfEvent extends AbstractStructArrayBase
{
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Event[]
     */
    public $Event;
    /**
     * Constructor method for ArrayOfEvent
     * @uses ArrayOfEvent::setEvent()
     * @param \StructType\Event[] $event
     */
    public function __construct(array $event = array())
    {
        $this
            ->setEvent($event);
    }
    /**
     * Get Event value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Event[]|null
     */
    public function getEvent()
    {
        return isset($this->Event) ? $this->Event : null;
    }
    /**
     * Set Event value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Event[] $event
     * @return \ArrayType\ArrayOfEvent
     */
    public function setEvent(array $event = array())
    {
        foreach ($event as $arrayOfEventEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfEventEventItem instanceof \StructType\Event) {
                throw new \InvalidArgumentException(sprintf('The Event property can only contain items of \StructType\Event, "%s" given', is_object($arrayOfEventEventItem) ? get_class($arrayOfEventEventItem) : gettype($arrayOfEventEventItem)), __LINE__);
            }
        }
        if (is_null($event) || (is_array($event) && empty($event))) {
            unset($this->Event);
        } else {
            $this->Event = $event;
        }
        return $this;
    }
    /**
     * Add item to Event value
     * @throws \InvalidArgumentException
     * @param \StructType\Event $item
     * @return \ArrayType\ArrayOfEvent
     */
    public function addToEvent(\StructType\Event $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Event) {
            throw new \InvalidArgumentException(sprintf('The Event property can only contain items of \StructType\Event, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Event[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Event|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Event|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Event|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Event|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Event|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Event
     */
    public function getAttributeName(): string
    {
        return 'Event';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfEvent
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
