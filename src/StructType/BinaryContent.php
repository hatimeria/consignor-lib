<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BinaryContent StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BinaryContent
 * @subpackage Structs
 */
class BinaryContent extends AbstractStructBase
{
    /**
     * The BinaryContentGUId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $BinaryContentGUId;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
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
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentType;
    /**
     * The Filename
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Filename;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Origin;
    /**
     * Constructor method for BinaryContent
     * @uses BinaryContent::setBinaryContentGUId()
     * @uses BinaryContent::setContent()
     * @uses BinaryContent::setContentType()
     * @uses BinaryContent::setDocumentType()
     * @uses BinaryContent::setFilename()
     * @uses BinaryContent::setOrigin()
     * @param string $binaryContentGUId
     * @param string $content
     * @param string $contentType
     * @param string $documentType
     * @param string $filename
     * @param int $origin
     */
    public function __construct($binaryContentGUId = null, $content = null, $contentType = null, $documentType = null, $filename = null, $origin = null)
    {
        $this
            ->setBinaryContentGUId($binaryContentGUId)
            ->setContent($content)
            ->setContentType($contentType)
            ->setDocumentType($documentType)
            ->setFilename($filename)
            ->setOrigin($origin);
    }
    /**
     * Get BinaryContentGUId value
     * @return string|null
     */
    public function getBinaryContentGUId()
    {
        return $this->BinaryContentGUId;
    }
    /**
     * Set BinaryContentGUId value
     * @param string $binaryContentGUId
     * @return \StructType\BinaryContent
     */
    public function setBinaryContentGUId($binaryContentGUId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($binaryContentGUId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $binaryContentGUId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($binaryContentGUId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($binaryContentGUId) && !is_string($binaryContentGUId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($binaryContentGUId)), __LINE__);
        }
        $this->BinaryContentGUId = $binaryContentGUId;
        return $this;
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getContent()
    {
        return isset($this->Content) ? $this->Content : null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $content
     * @return \StructType\BinaryContent
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
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
     * @return \StructType\BinaryContent
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
     * Get DocumentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentType()
    {
        return isset($this->DocumentType) ? $this->DocumentType : null;
    }
    /**
     * Set DocumentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentType
     * @return \StructType\BinaryContent
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentType)), __LINE__);
        }
        if (is_null($documentType) || (is_array($documentType) && empty($documentType))) {
            unset($this->DocumentType);
        } else {
            $this->DocumentType = $documentType;
        }
        return $this;
    }
    /**
     * Get Filename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilename()
    {
        return isset($this->Filename) ? $this->Filename : null;
    }
    /**
     * Set Filename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filename
     * @return \StructType\BinaryContent
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filename)), __LINE__);
        }
        if (is_null($filename) || (is_array($filename) && empty($filename))) {
            unset($this->Filename);
        } else {
            $this->Filename = $filename;
        }
        return $this;
    }
    /**
     * Get Origin value
     * @return int|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param int $origin
     * @return \StructType\BinaryContent
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: int
        if (!is_null($origin) && !is_numeric($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($origin)), __LINE__);
        }
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BinaryContent
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
