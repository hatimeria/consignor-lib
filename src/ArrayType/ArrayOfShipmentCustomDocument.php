<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentCustomDocument ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfShipmentCustomDocument
 * @subpackage Arrays
 */
class ArrayOfShipmentCustomDocument extends AbstractStructArrayBase
{
    /**
     * The ShipmentCustomDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ShipmentCustomDocument[]
     */
    public $ShipmentCustomDocument;
    /**
     * Constructor method for ArrayOfShipmentCustomDocument
     * @uses ArrayOfShipmentCustomDocument::setShipmentCustomDocument()
     * @param \StructType\ShipmentCustomDocument[] $shipmentCustomDocument
     */
    public function __construct(array $shipmentCustomDocument = array())
    {
        $this
            ->setShipmentCustomDocument($shipmentCustomDocument);
    }
    /**
     * Get ShipmentCustomDocument value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ShipmentCustomDocument[]|null
     */
    public function getShipmentCustomDocument()
    {
        return isset($this->ShipmentCustomDocument) ? $this->ShipmentCustomDocument : null;
    }
    /**
     * Set ShipmentCustomDocument value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentCustomDocument[] $shipmentCustomDocument
     * @return \ArrayType\ArrayOfShipmentCustomDocument
     */
    public function setShipmentCustomDocument(array $shipmentCustomDocument = array())
    {
        foreach ($shipmentCustomDocument as $arrayOfShipmentCustomDocumentShipmentCustomDocumentItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentCustomDocumentShipmentCustomDocumentItem instanceof \StructType\ShipmentCustomDocument) {
                throw new \InvalidArgumentException(sprintf('The ShipmentCustomDocument property can only contain items of \StructType\ShipmentCustomDocument, "%s" given', is_object($arrayOfShipmentCustomDocumentShipmentCustomDocumentItem) ? get_class($arrayOfShipmentCustomDocumentShipmentCustomDocumentItem) : gettype($arrayOfShipmentCustomDocumentShipmentCustomDocumentItem)), __LINE__);
            }
        }
        if (is_null($shipmentCustomDocument) || (is_array($shipmentCustomDocument) && empty($shipmentCustomDocument))) {
            unset($this->ShipmentCustomDocument);
        } else {
            $this->ShipmentCustomDocument = $shipmentCustomDocument;
        }
        return $this;
    }
    /**
     * Add item to ShipmentCustomDocument value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipmentCustomDocument $item
     * @return \ArrayType\ArrayOfShipmentCustomDocument
     */
    public function addToShipmentCustomDocument(\StructType\ShipmentCustomDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipmentCustomDocument) {
            throw new \InvalidArgumentException(sprintf('The ShipmentCustomDocument property can only contain items of \StructType\ShipmentCustomDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentCustomDocument[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ShipmentCustomDocument|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ShipmentCustomDocument|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ShipmentCustomDocument|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ShipmentCustomDocument|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ShipmentCustomDocument|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipmentCustomDocument
     */
    public function getAttributeName()
    {
        return 'ShipmentCustomDocument';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfShipmentCustomDocument
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
