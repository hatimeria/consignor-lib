<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfPackage ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPackage
 * @subpackage Arrays
 */
class ArrayOfPackage extends AbstractStructArrayBase
{
    /**
     * The Package
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Package[]
     */
    public $Package;
    /**
     * Constructor method for ArrayOfPackage
     * @uses ArrayOfPackage::setPackage()
     * @param \StructType\Package[] $package
     */
    public function __construct(array $package = array())
    {
        $this
            ->setPackage($package);
    }
    /**
     * Get Package value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Package[]|null
     */
    public function getPackage()
    {
        return isset($this->Package) ? $this->Package : null;
    }
    /**
     * Set Package value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Package[] $package
     * @return \ArrayType\ArrayOfPackage
     */
    public function setPackage(array $package = array())
    {
        foreach ($package as $arrayOfPackagePackageItem) {
            // validation for constraint: itemType
            if (!$arrayOfPackagePackageItem instanceof \StructType\Package) {
                throw new \InvalidArgumentException(sprintf('The Package property can only contain items of \StructType\Package, "%s" given', is_object($arrayOfPackagePackageItem) ? get_class($arrayOfPackagePackageItem) : gettype($arrayOfPackagePackageItem)), __LINE__);
            }
        }
        if (is_null($package) || (is_array($package) && empty($package))) {
            unset($this->Package);
        } else {
            $this->Package = $package;
        }
        return $this;
    }
    /**
     * Add item to Package value
     * @throws \InvalidArgumentException
     * @param \StructType\Package $item
     * @return \ArrayType\ArrayOfPackage
     */
    public function addToPackage(\StructType\Package $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Package) {
            throw new \InvalidArgumentException(sprintf('The Package property can only contain items of \StructType\Package, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Package[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Package|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Package|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Package|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Package|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Package|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Package
     */
    public function getAttributeName(): string
    {
        return 'Package';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfPackage
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
