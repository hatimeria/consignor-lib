<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfLineUnit ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLineUnit
 * @subpackage Arrays
 */
class ArrayOfLineUnit extends AbstractStructArrayBase
{
    /**
     * The LineUnit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LineUnit[]
     */
    public $LineUnit;
    /**
     * Constructor method for ArrayOfLineUnit
     * @uses ArrayOfLineUnit::setLineUnit()
     * @param \StructType\LineUnit[] $lineUnit
     */
    public function __construct(array $lineUnit = array())
    {
        $this
            ->setLineUnit($lineUnit);
    }
    /**
     * Get LineUnit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LineUnit[]|null
     */
    public function getLineUnit()
    {
        return isset($this->LineUnit) ? $this->LineUnit : null;
    }
    /**
     * Set LineUnit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\LineUnit[] $lineUnit
     * @return \ArrayType\ArrayOfLineUnit
     */
    public function setLineUnit(array $lineUnit = array())
    {
        foreach ($lineUnit as $arrayOfLineUnitLineUnitItem) {
            // validation for constraint: itemType
            if (!$arrayOfLineUnitLineUnitItem instanceof \StructType\LineUnit) {
                throw new \InvalidArgumentException(sprintf('The LineUnit property can only contain items of \StructType\LineUnit, "%s" given', is_object($arrayOfLineUnitLineUnitItem) ? get_class($arrayOfLineUnitLineUnitItem) : gettype($arrayOfLineUnitLineUnitItem)), __LINE__);
            }
        }
        if (is_null($lineUnit) || (is_array($lineUnit) && empty($lineUnit))) {
            unset($this->LineUnit);
        } else {
            $this->LineUnit = $lineUnit;
        }
        return $this;
    }
    /**
     * Add item to LineUnit value
     * @throws \InvalidArgumentException
     * @param \StructType\LineUnit $item
     * @return \ArrayType\ArrayOfLineUnit
     */
    public function addToLineUnit(\StructType\LineUnit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LineUnit) {
            throw new \InvalidArgumentException(sprintf('The LineUnit property can only contain items of \StructType\LineUnit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LineUnit[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LineUnit|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LineUnit|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LineUnit|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LineUnit|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LineUnit|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LineUnit
     */
    public function getAttributeName(): string
    {
        return 'LineUnit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfLineUnit
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
