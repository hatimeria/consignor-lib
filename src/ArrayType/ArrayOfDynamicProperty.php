<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDynamicProperty ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDynamicProperty
 * @subpackage Arrays
 */
class ArrayOfDynamicProperty extends AbstractStructArrayBase
{
    /**
     * The DynamicProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DynamicProperty[]
     */
    public $DynamicProperty;
    /**
     * Constructor method for ArrayOfDynamicProperty
     * @uses ArrayOfDynamicProperty::setDynamicProperty()
     * @param \StructType\DynamicProperty[] $dynamicProperty
     */
    public function __construct(array $dynamicProperty = array())
    {
        $this
            ->setDynamicProperty($dynamicProperty);
    }
    /**
     * Get DynamicProperty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DynamicProperty[]|null
     */
    public function getDynamicProperty()
    {
        return isset($this->DynamicProperty) ? $this->DynamicProperty : null;
    }
    /**
     * Set DynamicProperty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\DynamicProperty[] $dynamicProperty
     * @return \ArrayType\ArrayOfDynamicProperty
     */
    public function setDynamicProperty(array $dynamicProperty = array())
    {
        foreach ($dynamicProperty as $arrayOfDynamicPropertyDynamicPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfDynamicPropertyDynamicPropertyItem instanceof \StructType\DynamicProperty) {
                throw new \InvalidArgumentException(sprintf('The DynamicProperty property can only contain items of \StructType\DynamicProperty, "%s" given', is_object($arrayOfDynamicPropertyDynamicPropertyItem) ? get_class($arrayOfDynamicPropertyDynamicPropertyItem) : gettype($arrayOfDynamicPropertyDynamicPropertyItem)), __LINE__);
            }
        }
        if (is_null($dynamicProperty) || (is_array($dynamicProperty) && empty($dynamicProperty))) {
            unset($this->DynamicProperty);
        } else {
            $this->DynamicProperty = $dynamicProperty;
        }
        return $this;
    }
    /**
     * Add item to DynamicProperty value
     * @throws \InvalidArgumentException
     * @param \StructType\DynamicProperty $item
     * @return \ArrayType\ArrayOfDynamicProperty
     */
    public function addToDynamicProperty(\StructType\DynamicProperty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DynamicProperty) {
            throw new \InvalidArgumentException(sprintf('The DynamicProperty property can only contain items of \StructType\DynamicProperty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DynamicProperty[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DynamicProperty|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DynamicProperty|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DynamicProperty|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DynamicProperty|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DynamicProperty|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DynamicProperty
     */
    public function getAttributeName()
    {
        return 'DynamicProperty';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfDynamicProperty
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
