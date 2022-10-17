<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ShipmentDocument StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentDocument
 * @subpackage Structs
 */
class ShipmentDocument extends GenericEntity
{
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The DatePrinted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DatePrinted;
    /**
     * The DocContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BinaryContent
     */
    public $DocContent;
    /**
     * The DocumentAccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DocumentAccess
     */
    public $DocumentAccess;
    /**
     * The DocumentAccessId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $DocumentAccessId;
    /**
     * The ManualPrint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ManualPrint;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Offset;
    /**
     * The PrintBox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PrintBox;
    /**
     * The PrinterPath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PrinterPath;
    /**
     * The ShipmentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShipmentId;
    /**
     * Constructor method for ShipmentDocument
     * @uses ShipmentDocument::setCount()
     * @uses ShipmentDocument::setDatePrinted()
     * @uses ShipmentDocument::setDocContent()
     * @uses ShipmentDocument::setDocumentAccess()
     * @uses ShipmentDocument::setDocumentAccessId()
     * @uses ShipmentDocument::setManualPrint()
     * @uses ShipmentDocument::setOffset()
     * @uses ShipmentDocument::setPrintBox()
     * @uses ShipmentDocument::setPrinterPath()
     * @uses ShipmentDocument::setShipmentId()
     * @param int $count
     * @param string $datePrinted
     * @param \StructType\BinaryContent $docContent
     * @param \StructType\DocumentAccess $documentAccess
     * @param int $documentAccessId
     * @param bool $manualPrint
     * @param int $offset
     * @param int $printBox
     * @param string $printerPath
     * @param int $shipmentId
     */
    public function __construct($count = null, $datePrinted = null, \StructType\BinaryContent $docContent = null, \StructType\DocumentAccess $documentAccess = null, $documentAccessId = null, $manualPrint = null, $offset = null, $printBox = null, $printerPath = null, $shipmentId = null)
    {
        $this
            ->setCount($count)
            ->setDatePrinted($datePrinted)
            ->setDocContent($docContent)
            ->setDocumentAccess($documentAccess)
            ->setDocumentAccessId($documentAccessId)
            ->setManualPrint($manualPrint)
            ->setOffset($offset)
            ->setPrintBox($printBox)
            ->setPrinterPath($printerPath)
            ->setShipmentId($shipmentId);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\ShipmentDocument
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get DatePrinted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDatePrinted()
    {
        return isset($this->DatePrinted) ? $this->DatePrinted : null;
    }
    /**
     * Set DatePrinted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $datePrinted
     * @return \StructType\ShipmentDocument
     */
    public function setDatePrinted($datePrinted = null)
    {
        // validation for constraint: string
        if (!is_null($datePrinted) && !is_string($datePrinted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datePrinted)), __LINE__);
        }
        if (is_null($datePrinted) || (is_array($datePrinted) && empty($datePrinted))) {
            unset($this->DatePrinted);
        } else {
            $this->DatePrinted = $datePrinted;
        }
        return $this;
    }
    /**
     * Get DocContent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BinaryContent|null
     */
    public function getDocContent()
    {
        return isset($this->DocContent) ? $this->DocContent : null;
    }
    /**
     * Set DocContent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\BinaryContent $docContent
     * @return \StructType\ShipmentDocument
     */
    public function setDocContent(\StructType\BinaryContent $docContent = null)
    {
        if (is_null($docContent) || (is_array($docContent) && empty($docContent))) {
            unset($this->DocContent);
        } else {
            $this->DocContent = $docContent;
        }
        return $this;
    }
    /**
     * Get DocumentAccess value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DocumentAccess|null
     */
    public function getDocumentAccess()
    {
        return isset($this->DocumentAccess) ? $this->DocumentAccess : null;
    }
    /**
     * Set DocumentAccess value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DocumentAccess $documentAccess
     * @return \StructType\ShipmentDocument
     */
    public function setDocumentAccess(\StructType\DocumentAccess $documentAccess = null)
    {
        if (is_null($documentAccess) || (is_array($documentAccess) && empty($documentAccess))) {
            unset($this->DocumentAccess);
        } else {
            $this->DocumentAccess = $documentAccess;
        }
        return $this;
    }
    /**
     * Get DocumentAccessId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getDocumentAccessId()
    {
        return isset($this->DocumentAccessId) ? $this->DocumentAccessId : null;
    }
    /**
     * Set DocumentAccessId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $documentAccessId
     * @return \StructType\ShipmentDocument
     */
    public function setDocumentAccessId($documentAccessId = null)
    {
        // validation for constraint: int
        if (!is_null($documentAccessId) && !is_numeric($documentAccessId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($documentAccessId)), __LINE__);
        }
        if (is_null($documentAccessId) || (is_array($documentAccessId) && empty($documentAccessId))) {
            unset($this->DocumentAccessId);
        } else {
            $this->DocumentAccessId = $documentAccessId;
        }
        return $this;
    }
    /**
     * Get ManualPrint value
     * @return bool|null
     */
    public function getManualPrint()
    {
        return $this->ManualPrint;
    }
    /**
     * Set ManualPrint value
     * @param bool $manualPrint
     * @return \StructType\ShipmentDocument
     */
    public function setManualPrint($manualPrint = null)
    {
        // validation for constraint: boolean
        if (!is_null($manualPrint) && !is_bool($manualPrint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($manualPrint)), __LINE__);
        }
        $this->ManualPrint = $manualPrint;
        return $this;
    }
    /**
     * Get Offset value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOffset()
    {
        return isset($this->Offset) ? $this->Offset : null;
    }
    /**
     * Set Offset value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $offset
     * @return \StructType\ShipmentDocument
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !is_numeric($offset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset)), __LINE__);
        }
        if (is_null($offset) || (is_array($offset) && empty($offset))) {
            unset($this->Offset);
        } else {
            $this->Offset = $offset;
        }
        return $this;
    }
    /**
     * Get PrintBox value
     * @return int|null
     */
    public function getPrintBox()
    {
        return $this->PrintBox;
    }
    /**
     * Set PrintBox value
     * @param int $printBox
     * @return \StructType\ShipmentDocument
     */
    public function setPrintBox($printBox = null)
    {
        // validation for constraint: int
        if (!is_null($printBox) && !is_numeric($printBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($printBox)), __LINE__);
        }
        $this->PrintBox = $printBox;
        return $this;
    }
    /**
     * Get PrinterPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrinterPath()
    {
        return isset($this->PrinterPath) ? $this->PrinterPath : null;
    }
    /**
     * Set PrinterPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $printerPath
     * @return \StructType\ShipmentDocument
     */
    public function setPrinterPath($printerPath = null)
    {
        // validation for constraint: string
        if (!is_null($printerPath) && !is_string($printerPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($printerPath)), __LINE__);
        }
        if (is_null($printerPath) || (is_array($printerPath) && empty($printerPath))) {
            unset($this->PrinterPath);
        } else {
            $this->PrinterPath = $printerPath;
        }
        return $this;
    }
    /**
     * Get ShipmentId value
     * @return int|null
     */
    public function getShipmentId()
    {
        return $this->ShipmentId;
    }
    /**
     * Set ShipmentId value
     * @param int $shipmentId
     * @return \StructType\ShipmentDocument
     */
    public function setShipmentId($shipmentId = null)
    {
        // validation for constraint: int
        if (!is_null($shipmentId) && !is_numeric($shipmentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shipmentId)), __LINE__);
        }
        $this->ShipmentId = $shipmentId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShipmentDocument
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
