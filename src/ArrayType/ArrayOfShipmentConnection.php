<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfShipmentConnection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfShipmentConnection
 * @subpackage Arrays
 */
class ArrayOfShipmentConnection extends AbstractStructArrayBase
{
    /**
     * The ShipmentConnection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ShipmentConnection[]
     */
    public $ShipmentConnection;
    /**
     * Constructor method for ArrayOfShipmentConnection
     * @uses ArrayOfShipmentConnection::setShipmentConnection()
     * @param \StructType\ShipmentConnection[] $shipmentConnection
     */
    public function __construct(array $shipmentConnection = array())
    {
        $this
            ->setShipmentConnection($shipmentConnection);
    }
    /**
     * Get ShipmentConnection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ShipmentConnection[]|null
     */
    public function getShipmentConnection()
    {
        return isset($this->ShipmentConnection) ? $this->ShipmentConnection : null;
    }
    /**
     * Set ShipmentConnection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentConnection[] $shipmentConnection
     * @return \ArrayType\ArrayOfShipmentConnection
     */
    public function setShipmentConnection(array $shipmentConnection = array())
    {
        foreach ($shipmentConnection as $arrayOfShipmentConnectionShipmentConnectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentConnectionShipmentConnectionItem instanceof \StructType\ShipmentConnection) {
                throw new \InvalidArgumentException(sprintf('The ShipmentConnection property can only contain items of \StructType\ShipmentConnection, "%s" given', is_object($arrayOfShipmentConnectionShipmentConnectionItem) ? get_class($arrayOfShipmentConnectionShipmentConnectionItem) : gettype($arrayOfShipmentConnectionShipmentConnectionItem)), __LINE__);
            }
        }
        if (is_null($shipmentConnection) || (is_array($shipmentConnection) && empty($shipmentConnection))) {
            unset($this->ShipmentConnection);
        } else {
            $this->ShipmentConnection = $shipmentConnection;
        }
        return $this;
    }
    /**
     * Add item to ShipmentConnection value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentConnection $item
     * @return \ArrayType\ArrayOfShipmentConnection
     */
    public function addToShipmentConnection(\StructType\ShipmentConnection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipmentConnection) {
            throw new \InvalidArgumentException(sprintf('The ShipmentConnection property can only contain items of \StructType\ShipmentConnection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentConnection[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ShipmentConnection|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ShipmentConnection|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ShipmentConnection|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ShipmentConnection|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ShipmentConnection|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipmentConnection
     */
    public function getAttributeName(): string
    {
        return 'ShipmentConnection';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfShipmentConnection
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
