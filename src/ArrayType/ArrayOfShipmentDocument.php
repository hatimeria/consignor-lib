<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ArrayOfShipmentDocument ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfShipmentDocument
 * @subpackage Arrays
 */
class ArrayOfShipmentDocument extends AbstractStructArrayBase
{
    /**
     * The ShipmentDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ShipmentDocument[]
     */
    public $ShipmentDocument;
    /**
     * Constructor method for ArrayOfShipmentDocument
     * @uses ArrayOfShipmentDocument::setShipmentDocument()
     * @param \StructType\ShipmentDocument[] $shipmentDocument
     */
    public function __construct(array $shipmentDocument = array())
    {
        $this
            ->setShipmentDocument($shipmentDocument);
    }
    /**
     * Get ShipmentDocument value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ShipmentDocument[]|null
     */
    public function getShipmentDocument()
    {
        return isset($this->ShipmentDocument) ? $this->ShipmentDocument : null;
    }
    /**
     * Set ShipmentDocument value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentDocument[] $shipmentDocument
     * @return \ArrayType\ArrayOfShipmentDocument
     */
    public function setShipmentDocument(array $shipmentDocument = array())
    {
        foreach ($shipmentDocument as $arrayOfShipmentDocumentShipmentDocumentItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentDocumentShipmentDocumentItem instanceof \StructType\ShipmentDocument) {
                throw new \InvalidArgumentException(sprintf('The ShipmentDocument property can only contain items of \StructType\ShipmentDocument, "%s" given', is_object($arrayOfShipmentDocumentShipmentDocumentItem) ? get_class($arrayOfShipmentDocumentShipmentDocumentItem) : gettype($arrayOfShipmentDocumentShipmentDocumentItem)), __LINE__);
            }
        }
        if (is_null($shipmentDocument) || (is_array($shipmentDocument) && empty($shipmentDocument))) {
            unset($this->ShipmentDocument);
        } else {
            $this->ShipmentDocument = $shipmentDocument;
        }
        return $this;
    }
    /**
     * Add item to ShipmentDocument value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentDocument $item
     * @return \ArrayType\ArrayOfShipmentDocument
     */
    public function addToShipmentDocument(\StructType\ShipmentDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipmentDocument) {
            throw new \InvalidArgumentException(sprintf('The ShipmentDocument property can only contain items of \StructType\ShipmentDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentDocument[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ShipmentDocument|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ShipmentDocument|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ShipmentDocument|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ShipmentDocument|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ShipmentDocument|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipmentDocument
     */
    public function getAttributeName(): string
    {
        return 'ShipmentDocument';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfShipmentDocument
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
