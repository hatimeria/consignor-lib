<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDetail ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDetail
 * @subpackage Arrays
 */
class ArrayOfDetail extends AbstractStructArrayBase
{
    /**
     * The Detail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Detail[]
     */
    public $Detail;
    /**
     * Constructor method for ArrayOfDetail
     * @uses ArrayOfDetail::setDetail()
     * @param \StructType\Detail[] $detail
     */
    public function __construct(array $detail = array())
    {
        $this
            ->setDetail($detail);
    }
    /**
     * Get Detail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Detail[]|null
     */
    public function getDetail()
    {
        return isset($this->Detail) ? $this->Detail : null;
    }
    /**
     * Set Detail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Detail[] $detail
     * @return \ArrayType\ArrayOfDetail
     */
    public function setDetail(array $detail = array())
    {
        foreach ($detail as $arrayOfDetailDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfDetailDetailItem instanceof \StructType\Detail) {
                throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \StructType\Detail, "%s" given', is_object($arrayOfDetailDetailItem) ? get_class($arrayOfDetailDetailItem) : gettype($arrayOfDetailDetailItem)), __LINE__);
            }
        }
        if (is_null($detail) || (is_array($detail) && empty($detail))) {
            unset($this->Detail);
        } else {
            $this->Detail = $detail;
        }
        return $this;
    }
    /**
     * Add item to Detail value
     * @throws \InvalidArgumentException
     * @param \StructType\Detail $item
     * @return \ArrayType\ArrayOfDetail
     */
    public function addToDetail(\StructType\Detail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Detail) {
            throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \StructType\Detail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Detail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Detail|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Detail|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Detail|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Detail|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Detail|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Detail
     */
    public function getAttributeName()
    {
        return 'Detail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfDetail
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
