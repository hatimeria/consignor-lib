<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAmount ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAmount
 * @subpackage Arrays
 */
class ArrayOfAmount extends AbstractStructArrayBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Amount[]
     */
    public $Amount;
    /**
     * Constructor method for ArrayOfAmount
     * @uses ArrayOfAmount::setAmount()
     * @param \StructType\Amount[] $amount
     */
    public function __construct(array $amount = array())
    {
        $this
            ->setAmount($amount);
    }
    /**
     * Get Amount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Amount[]|null
     */
    public function getAmount()
    {
        return isset($this->Amount) ? $this->Amount : null;
    }
    /**
     * Set Amount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Amount[] $amount
     * @return \ArrayType\ArrayOfAmount
     */
    public function setAmount(array $amount = array())
    {
        foreach ($amount as $arrayOfAmountAmountItem) {
            // validation for constraint: itemType
            if (!$arrayOfAmountAmountItem instanceof \StructType\Amount) {
                throw new \InvalidArgumentException(sprintf('The Amount property can only contain items of \StructType\Amount, "%s" given', is_object($arrayOfAmountAmountItem) ? get_class($arrayOfAmountAmountItem) : gettype($arrayOfAmountAmountItem)), __LINE__);
            }
        }
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        return $this;
    }
    /**
     * Add item to Amount value
     * @throws \InvalidArgumentException
     * @param \StructType\Amount $item
     * @return \ArrayType\ArrayOfAmount
     */
    public function addToAmount(\StructType\Amount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Amount) {
            throw new \InvalidArgumentException(sprintf('The Amount property can only contain items of \StructType\Amount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Amount[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Amount|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Amount|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Amount|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Amount|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Amount|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Amount
     */
    public function getAttributeName()
    {
        return 'Amount';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAmount
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
