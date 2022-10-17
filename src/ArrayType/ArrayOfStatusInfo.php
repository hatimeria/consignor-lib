<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfStatusInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfStatusInfo
 * @subpackage Arrays
 */
class ArrayOfStatusInfo extends AbstractStructArrayBase
{
    /**
     * The StatusInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StatusInfo[]
     */
    public $StatusInfo;
    /**
     * Constructor method for ArrayOfStatusInfo
     * @uses ArrayOfStatusInfo::setStatusInfo()
     * @param \StructType\StatusInfo[] $statusInfo
     */
    public function __construct(array $statusInfo = array())
    {
        $this
            ->setStatusInfo($statusInfo);
    }
    /**
     * Get StatusInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StatusInfo[]|null
     */
    public function getStatusInfo()
    {
        return isset($this->StatusInfo) ? $this->StatusInfo : null;
    }
    /**
     * Set StatusInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\StatusInfo[] $statusInfo
     * @return \ArrayType\ArrayOfStatusInfo
     */
    public function setStatusInfo(array $statusInfo = array())
    {
        foreach ($statusInfo as $arrayOfStatusInfoStatusInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfStatusInfoStatusInfoItem instanceof \StructType\StatusInfo) {
                throw new \InvalidArgumentException(sprintf('The StatusInfo property can only contain items of \StructType\StatusInfo, "%s" given', is_object($arrayOfStatusInfoStatusInfoItem) ? get_class($arrayOfStatusInfoStatusInfoItem) : gettype($arrayOfStatusInfoStatusInfoItem)), __LINE__);
            }
        }
        if (is_null($statusInfo) || (is_array($statusInfo) && empty($statusInfo))) {
            unset($this->StatusInfo);
        } else {
            $this->StatusInfo = $statusInfo;
        }
        return $this;
    }
    /**
     * Add item to StatusInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\StatusInfo $item
     * @return \ArrayType\ArrayOfStatusInfo
     */
    public function addToStatusInfo(\StructType\StatusInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StatusInfo) {
            throw new \InvalidArgumentException(sprintf('The StatusInfo property can only contain items of \StructType\StatusInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StatusInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\StatusInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\StatusInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\StatusInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\StatusInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\StatusInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StatusInfo
     */
    public function getAttributeName(): string
    {
        return 'StatusInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfStatusInfo
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
