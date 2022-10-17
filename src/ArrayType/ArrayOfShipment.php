<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfShipment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfShipment
 * @subpackage Arrays
 */
class ArrayOfShipment extends AbstractStructArrayBase
{
    /**
     * The Shipment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Shipment[]
     */
    public $Shipment;
    /**
     * Constructor method for ArrayOfShipment
     * @uses ArrayOfShipment::setShipment()
     * @param \StructType\Shipment[] $shipment
     */
    public function __construct(array $shipment = array())
    {
        $this
            ->setShipment($shipment);
    }
    /**
     * Get Shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Shipment[]|null
     */
    public function getShipment()
    {
        return isset($this->Shipment) ? $this->Shipment : null;
    }
    /**
     * Set Shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Shipment[] $shipment
     * @return \ArrayType\ArrayOfShipment
     */
    public function setShipment(array $shipment = array())
    {
        foreach ($shipment as $arrayOfShipmentShipmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentShipmentItem instanceof \StructType\Shipment) {
                throw new \InvalidArgumentException(sprintf('The Shipment property can only contain items of \StructType\Shipment, "%s" given', is_object($arrayOfShipmentShipmentItem) ? get_class($arrayOfShipmentShipmentItem) : gettype($arrayOfShipmentShipmentItem)), __LINE__);
            }
        }
        if (is_null($shipment) || (is_array($shipment) && empty($shipment))) {
            unset($this->Shipment);
        } else {
            $this->Shipment = $shipment;
        }
        return $this;
    }
    /**
     * Add item to Shipment value
     * @throws \InvalidArgumentException
     * @param \StructType\Shipment $item
     * @return \ArrayType\ArrayOfShipment
     */
    public function addToShipment(\StructType\Shipment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Shipment) {
            throw new \InvalidArgumentException(sprintf('The Shipment property can only contain items of \StructType\Shipment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Shipment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Shipment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Shipment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Shipment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Shipment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Shipment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Shipment
     */
    public function getAttributeName(): string
    {
        return 'Shipment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfShipment
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
