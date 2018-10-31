<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReference ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReference
 * @subpackage Arrays
 */
class ArrayOfReference extends AbstractStructArrayBase
{
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Reference[]
     */
    public $Reference;
    /**
     * Constructor method for ArrayOfReference
     * @uses ArrayOfReference::setReference()
     * @param \StructType\Reference[] $reference
     */
    public function __construct(array $reference = array())
    {
        $this
            ->setReference($reference);
    }
    /**
     * Get Reference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Reference[]|null
     */
    public function getReference()
    {
        return isset($this->Reference) ? $this->Reference : null;
    }
    /**
     * Set Reference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Reference[] $reference
     * @return \ArrayType\ArrayOfReference
     */
    public function setReference(array $reference = array())
    {
        foreach ($reference as $arrayOfReferenceReferenceItem) {
            // validation for constraint: itemType
            if (!$arrayOfReferenceReferenceItem instanceof \StructType\Reference) {
                throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \StructType\Reference, "%s" given', is_object($arrayOfReferenceReferenceItem) ? get_class($arrayOfReferenceReferenceItem) : gettype($arrayOfReferenceReferenceItem)), __LINE__);
            }
        }
        if (is_null($reference) || (is_array($reference) && empty($reference))) {
            unset($this->Reference);
        } else {
            $this->Reference = $reference;
        }
        return $this;
    }
    /**
     * Add item to Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Reference $item
     * @return \ArrayType\ArrayOfReference
     */
    public function addToReference(\StructType\Reference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Reference) {
            throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \StructType\Reference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Reference[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Reference|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Reference|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Reference|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Reference|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Reference|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Reference
     */
    public function getAttributeName()
    {
        return 'Reference';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfReference
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
