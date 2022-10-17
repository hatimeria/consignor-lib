<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfDetailRow ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDetailRow
 * @subpackage Arrays
 */
class ArrayOfDetailRow extends AbstractStructArrayBase
{
    /**
     * The DetailRow
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DetailRow[]
     */
    public $DetailRow;
    /**
     * Constructor method for ArrayOfDetailRow
     * @uses ArrayOfDetailRow::setDetailRow()
     * @param \StructType\DetailRow[] $detailRow
     */
    public function __construct(array $detailRow = array())
    {
        $this
            ->setDetailRow($detailRow);
    }
    /**
     * Get DetailRow value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DetailRow[]|null
     */
    public function getDetailRow()
    {
        return isset($this->DetailRow) ? $this->DetailRow : null;
    }
    /**
     * Set DetailRow value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\DetailRow[] $detailRow
     * @return \ArrayType\ArrayOfDetailRow
     */
    public function setDetailRow(array $detailRow = array())
    {
        foreach ($detailRow as $arrayOfDetailRowDetailRowItem) {
            // validation for constraint: itemType
            if (!$arrayOfDetailRowDetailRowItem instanceof \StructType\DetailRow) {
                throw new \InvalidArgumentException(sprintf('The DetailRow property can only contain items of \StructType\DetailRow, "%s" given', is_object($arrayOfDetailRowDetailRowItem) ? get_class($arrayOfDetailRowDetailRowItem) : gettype($arrayOfDetailRowDetailRowItem)), __LINE__);
            }
        }
        if (is_null($detailRow) || (is_array($detailRow) && empty($detailRow))) {
            unset($this->DetailRow);
        } else {
            $this->DetailRow = $detailRow;
        }
        return $this;
    }
    /**
     * Add item to DetailRow value
     * @throws \InvalidArgumentException
     * @param \StructType\DetailRow $item
     * @return \ArrayType\ArrayOfDetailRow
     */
    public function addToDetailRow(\StructType\DetailRow $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DetailRow) {
            throw new \InvalidArgumentException(sprintf('The DetailRow property can only contain items of \StructType\DetailRow, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DetailRow[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DetailRow|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DetailRow|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DetailRow|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DetailRow|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DetailRow|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DetailRow
     */
    public function getAttributeName(): string
    {
        return 'DetailRow';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfDetailRow
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
