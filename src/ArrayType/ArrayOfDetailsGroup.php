<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfDetailsGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDetailsGroup
 * @subpackage Arrays
 */
class ArrayOfDetailsGroup extends AbstractStructArrayBase
{
    /**
     * The DetailsGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DetailsGroup[]
     */
    public $DetailsGroup;
    /**
     * Constructor method for ArrayOfDetailsGroup
     * @uses ArrayOfDetailsGroup::setDetailsGroup()
     * @param \StructType\DetailsGroup[] $detailsGroup
     */
    public function __construct(array $detailsGroup = array())
    {
        $this
            ->setDetailsGroup($detailsGroup);
    }
    /**
     * Get DetailsGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DetailsGroup[]|null
     */
    public function getDetailsGroup()
    {
        return isset($this->DetailsGroup) ? $this->DetailsGroup : null;
    }
    /**
     * Set DetailsGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\DetailsGroup[] $detailsGroup
     * @return \ArrayType\ArrayOfDetailsGroup
     */
    public function setDetailsGroup(array $detailsGroup = array())
    {
        foreach ($detailsGroup as $arrayOfDetailsGroupDetailsGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfDetailsGroupDetailsGroupItem instanceof \StructType\DetailsGroup) {
                throw new \InvalidArgumentException(sprintf('The DetailsGroup property can only contain items of \StructType\DetailsGroup, "%s" given', is_object($arrayOfDetailsGroupDetailsGroupItem) ? get_class($arrayOfDetailsGroupDetailsGroupItem) : gettype($arrayOfDetailsGroupDetailsGroupItem)), __LINE__);
            }
        }
        if (is_null($detailsGroup) || (is_array($detailsGroup) && empty($detailsGroup))) {
            unset($this->DetailsGroup);
        } else {
            $this->DetailsGroup = $detailsGroup;
        }
        return $this;
    }
    /**
     * Add item to DetailsGroup value
     * @throws \InvalidArgumentException
     * @param \StructType\DetailsGroup $item
     * @return \ArrayType\ArrayOfDetailsGroup
     */
    public function addToDetailsGroup(\StructType\DetailsGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DetailsGroup) {
            throw new \InvalidArgumentException(sprintf('The DetailsGroup property can only contain items of \StructType\DetailsGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DetailsGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DetailsGroup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DetailsGroup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DetailsGroup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DetailsGroup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DetailsGroup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DetailsGroup
     */
    public function getAttributeName(): string
    {
        return 'DetailsGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfDetailsGroup
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
