<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfGenericCollection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfGenericCollection
 * @subpackage Arrays
 */
class ArrayOfGenericCollection extends AbstractStructArrayBase
{
    /**
     * The GenericCollection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GenericCollection[]
     */
    public $GenericCollection;
    /**
     * Constructor method for ArrayOfGenericCollection
     * @uses ArrayOfGenericCollection::setGenericCollection()
     * @param \StructType\GenericCollection[] $genericCollection
     */
    public function __construct(array $genericCollection = array())
    {
        $this
            ->setGenericCollection($genericCollection);
    }
    /**
     * Get GenericCollection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GenericCollection[]|null
     */
    public function getGenericCollection()
    {
        return isset($this->GenericCollection) ? $this->GenericCollection : null;
    }
    /**
     * Set GenericCollection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GenericCollection[] $genericCollection
     * @return \ArrayType\ArrayOfGenericCollection
     */
    public function setGenericCollection(array $genericCollection = array())
    {
        foreach ($genericCollection as $arrayOfGenericCollectionGenericCollectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfGenericCollectionGenericCollectionItem instanceof \StructType\GenericCollection) {
                throw new \InvalidArgumentException(sprintf('The GenericCollection property can only contain items of \StructType\GenericCollection, "%s" given', is_object($arrayOfGenericCollectionGenericCollectionItem) ? get_class($arrayOfGenericCollectionGenericCollectionItem) : gettype($arrayOfGenericCollectionGenericCollectionItem)), __LINE__);
            }
        }
        if (is_null($genericCollection) || (is_array($genericCollection) && empty($genericCollection))) {
            unset($this->GenericCollection);
        } else {
            $this->GenericCollection = $genericCollection;
        }
        return $this;
    }
    /**
     * Add item to GenericCollection value
     * @throws \InvalidArgumentException
     * @param \StructType\GenericCollection $item
     * @return \ArrayType\ArrayOfGenericCollection
     */
    public function addToGenericCollection(\StructType\GenericCollection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GenericCollection) {
            throw new \InvalidArgumentException(sprintf('The GenericCollection property can only contain items of \StructType\GenericCollection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GenericCollection[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GenericCollection|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GenericCollection|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GenericCollection|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GenericCollection|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GenericCollection|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GenericCollection
     */
    public function getAttributeName(): string
    {
        return 'GenericCollection';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfGenericCollection
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
