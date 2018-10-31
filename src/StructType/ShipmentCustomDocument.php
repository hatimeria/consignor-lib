<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentCustomDocument StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentCustomDocument
 * @subpackage Structs
 */
class ShipmentCustomDocument extends GenericEntity
{
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BinaryContent
     */
    public $Content;
    /**
     * The ContentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ContentType;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CreationDate;
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
     * The DocumentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentName;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Offset;
    /**
     * The ShipmentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShipmentId;
    /**
     * The UploadedByUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UploadedByUser;
    /**
     * Constructor method for ShipmentCustomDocument
     * @uses ShipmentCustomDocument::setContent()
     * @uses ShipmentCustomDocument::setContentType()
     * @uses ShipmentCustomDocument::setCreationDate()
     * @uses ShipmentCustomDocument::setDocumentAccess()
     * @uses ShipmentCustomDocument::setDocumentAccessId()
     * @uses ShipmentCustomDocument::setDocumentName()
     * @uses ShipmentCustomDocument::setFileName()
     * @uses ShipmentCustomDocument::setOffset()
     * @uses ShipmentCustomDocument::setShipmentId()
     * @uses ShipmentCustomDocument::setUploadedByUser()
     * @param \StructType\BinaryContent $content
     * @param string $contentType
     * @param string $creationDate
     * @param \StructType\DocumentAccess $documentAccess
     * @param int $documentAccessId
     * @param string $documentName
     * @param string $fileName
     * @param int $offset
     * @param int $shipmentId
     * @param string $uploadedByUser
     */
    public function __construct(\StructType\BinaryContent $content = null, $contentType = null, $creationDate = null, \StructType\DocumentAccess $documentAccess = null, $documentAccessId = null, $documentName = null, $fileName = null, $offset = null, $shipmentId = null, $uploadedByUser = null)
    {
        $this
            ->setContent($content)
            ->setContentType($contentType)
            ->setCreationDate($creationDate)
            ->setDocumentAccess($documentAccess)
            ->setDocumentAccessId($documentAccessId)
            ->setDocumentName($documentName)
            ->setFileName($fileName)
            ->setOffset($offset)
            ->setShipmentId($shipmentId)
            ->setUploadedByUser($uploadedByUser);
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BinaryContent|null
     */
    public function getContent()
    {
        return isset($this->Content) ? $this->Content : null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\BinaryContent $content
     * @return \StructType\ShipmentCustomDocument
     */
    public function setContent(\StructType\BinaryContent $content = null)
    {
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->Content);
        } else {
            $this->Content = $content;
        }
        return $this;
    }
    /**
     * Get ContentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContentType()
    {
        return isset($this->ContentType) ? $this->ContentType : null;
    }
    /**
     * Set ContentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $contentType
     * @return \StructType\ShipmentCustomDocument
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentType)), __LINE__);
        }
        if (is_null($contentType) || (is_array($contentType) && empty($contentType))) {
            unset($this->ContentType);
        } else {
            $this->ContentType = $contentType;
        }
        return $this;
    }
    /**
     * Get CreationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCreationDate()
    {
        return isset($this->CreationDate) ? $this->CreationDate : null;
    }
    /**
     * Set CreationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $creationDate
     * @return \StructType\ShipmentCustomDocument
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        if (is_null($creationDate) || (is_array($creationDate) && empty($creationDate))) {
            unset($this->CreationDate);
        } else {
            $this->CreationDate = $creationDate;
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
     * @return \StructType\ShipmentCustomDocument
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
     * @return \StructType\ShipmentCustomDocument
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
     * Get DocumentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentName()
    {
        return isset($this->DocumentName) ? $this->DocumentName : null;
    }
    /**
     * Set DocumentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentName
     * @return \StructType\ShipmentCustomDocument
     */
    public function setDocumentName($documentName = null)
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentName)), __LINE__);
        }
        if (is_null($documentName) || (is_array($documentName) && empty($documentName))) {
            unset($this->DocumentName);
        } else {
            $this->DocumentName = $documentName;
        }
        return $this;
    }
    /**
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName()
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return \StructType\ShipmentCustomDocument
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
        }
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
     * @return \StructType\ShipmentCustomDocument
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
     * @return \StructType\ShipmentCustomDocument
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
     * Get UploadedByUser value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUploadedByUser()
    {
        return isset($this->UploadedByUser) ? $this->UploadedByUser : null;
    }
    /**
     * Set UploadedByUser value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uploadedByUser
     * @return \StructType\ShipmentCustomDocument
     */
    public function setUploadedByUser($uploadedByUser = null)
    {
        // validation for constraint: string
        if (!is_null($uploadedByUser) && !is_string($uploadedByUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uploadedByUser)), __LINE__);
        }
        if (is_null($uploadedByUser) || (is_array($uploadedByUser) && empty($uploadedByUser))) {
            unset($this->UploadedByUser);
        } else {
            $this->UploadedByUser = $uploadedByUser;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShipmentCustomDocument
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
