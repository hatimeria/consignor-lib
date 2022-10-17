<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfLine ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLine
 * @subpackage Arrays
 */
class ArrayOfLine extends AbstractStructArrayBase
{
    /**
     * The Line
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Line[]
     */
    public $Line;
    /**
     * Constructor method for ArrayOfLine
     * @uses ArrayOfLine::setLine()
     * @param \StructType\Line[] $line
     */
    public function __construct(array $line = array())
    {
        $this
            ->setLine($line);
    }
    /**
     * Get Line value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Line[]|null
     */
    public function getLine()
    {
        return isset($this->Line) ? $this->Line : null;
    }
    /**
     * Set Line value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Line[] $line
     * @return \ArrayType\ArrayOfLine
     */
    public function setLine(array $line = array())
    {
        foreach ($line as $arrayOfLineLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfLineLineItem instanceof \StructType\Line) {
                throw new \InvalidArgumentException(sprintf('The Line property can only contain items of \StructType\Line, "%s" given', is_object($arrayOfLineLineItem) ? get_class($arrayOfLineLineItem) : gettype($arrayOfLineLineItem)), __LINE__);
            }
        }
        if (is_null($line) || (is_array($line) && empty($line))) {
            unset($this->Line);
        } else {
            $this->Line = $line;
        }
        return $this;
    }
    /**
     * Add item to Line value
     * @throws \InvalidArgumentException
     * @param \StructType\Line $item
     * @return \ArrayType\ArrayOfLine
     */
    public function addToLine(\StructType\Line $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Line) {
            throw new \InvalidArgumentException(sprintf('The Line property can only contain items of \StructType\Line, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Line[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Line|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Line|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Line|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Line|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Line|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Line
     */
    public function getAttributeName(): string
    {
        return 'Line';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfLine
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
