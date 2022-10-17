<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfDangerousGoods ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDangerousGoods
 * @subpackage Arrays
 */
class ArrayOfDangerousGoods extends AbstractStructArrayBase
{
    /**
     * The DangerousGoods
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DangerousGoods[]
     */
    public $DangerousGoods;
    /**
     * Constructor method for ArrayOfDangerousGoods
     * @uses ArrayOfDangerousGoods::setDangerousGoods()
     * @param \StructType\DangerousGoods[] $dangerousGoods
     */
    public function __construct(array $dangerousGoods = array())
    {
        $this
            ->setDangerousGoods($dangerousGoods);
    }
    /**
     * Get DangerousGoods value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DangerousGoods[]|null
     */
    public function getDangerousGoods()
    {
        return isset($this->DangerousGoods) ? $this->DangerousGoods : null;
    }
    /**
     * Set DangerousGoods value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\DangerousGoods[] $dangerousGoods
     * @return \ArrayType\ArrayOfDangerousGoods
     */
    public function setDangerousGoods(array $dangerousGoods = array())
    {
        foreach ($dangerousGoods as $arrayOfDangerousGoodsDangerousGoodsItem) {
            // validation for constraint: itemType
            if (!$arrayOfDangerousGoodsDangerousGoodsItem instanceof \StructType\DangerousGoods) {
                throw new \InvalidArgumentException(sprintf('The DangerousGoods property can only contain items of \StructType\DangerousGoods, "%s" given', is_object($arrayOfDangerousGoodsDangerousGoodsItem) ? get_class($arrayOfDangerousGoodsDangerousGoodsItem) : gettype($arrayOfDangerousGoodsDangerousGoodsItem)), __LINE__);
            }
        }
        if (is_null($dangerousGoods) || (is_array($dangerousGoods) && empty($dangerousGoods))) {
            unset($this->DangerousGoods);
        } else {
            $this->DangerousGoods = $dangerousGoods;
        }
        return $this;
    }
    /**
     * Add item to DangerousGoods value
     * @throws \InvalidArgumentException
     * @param \StructType\DangerousGoods $item
     * @return \ArrayType\ArrayOfDangerousGoods
     */
    public function addToDangerousGoods(\StructType\DangerousGoods $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DangerousGoods) {
            throw new \InvalidArgumentException(sprintf('The DangerousGoods property can only contain items of \StructType\DangerousGoods, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DangerousGoods[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DangerousGoods|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DangerousGoods|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DangerousGoods|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DangerousGoods|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DangerousGoods|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DangerousGoods
     */
    public function getAttributeName(): string
    {
        return 'DangerousGoods';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfDangerousGoods
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
