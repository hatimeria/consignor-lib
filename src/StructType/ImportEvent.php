<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ImportEvent StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ImportEvent
 * @subpackage Structs
 */
class ImportEvent extends AbstractStructBase
{
    /**
     * The AttachmentByte
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AttachmentByte;
    /**
     * The AttachmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AttachmentType;
    /**
     * The Date
     * @var string
     */
    public $Date;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Offset;
    /**
     * The ParentIdentifier
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \StructType\Identifier
     */
    public $ParentIdentifier;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $StatusCode;
    /**
     * The StatusIsClosed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $StatusIsClosed;
    /**
     * The StatusText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StatusText;
    /**
     * Constructor method for ImportEvent
     * @uses ImportEvent::setAttachmentByte()
     * @uses ImportEvent::setAttachmentType()
     * @uses ImportEvent::setDate()
     * @uses ImportEvent::setOffset()
     * @uses ImportEvent::setParentIdentifier()
     * @uses ImportEvent::setStatusCode()
     * @uses ImportEvent::setStatusIsClosed()
     * @uses ImportEvent::setStatusText()
     * @param string $attachmentByte
     * @param string $attachmentType
     * @param string $date
     * @param int $offset
     * @param \StructType\Identifier $parentIdentifier
     * @param string $statusCode
     * @param bool $statusIsClosed
     * @param string $statusText
     */
    public function __construct($attachmentByte = null, $attachmentType = null, $date = null, $offset = null, \StructType\Identifier $parentIdentifier = null, $statusCode = null, $statusIsClosed = null, $statusText = null)
    {
        $this
            ->setAttachmentByte($attachmentByte)
            ->setAttachmentType($attachmentType)
            ->setDate($date)
            ->setOffset($offset)
            ->setParentIdentifier($parentIdentifier)
            ->setStatusCode($statusCode)
            ->setStatusIsClosed($statusIsClosed)
            ->setStatusText($statusText);
    }
    /**
     * Get AttachmentByte value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAttachmentByte()
    {
        return isset($this->AttachmentByte) ? $this->AttachmentByte : null;
    }
    /**
     * Set AttachmentByte value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $attachmentByte
     * @return \StructType\ImportEvent
     */
    public function setAttachmentByte($attachmentByte = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentByte) && !is_string($attachmentByte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attachmentByte)), __LINE__);
        }
        if (is_null($attachmentByte) || (is_array($attachmentByte) && empty($attachmentByte))) {
            unset($this->AttachmentByte);
        } else {
            $this->AttachmentByte = $attachmentByte;
        }
        return $this;
    }
    /**
     * Get AttachmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAttachmentType()
    {
        return isset($this->AttachmentType) ? $this->AttachmentType : null;
    }
    /**
     * Set AttachmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \EnumType\AttachmentType::valueIsValid()
     * @uses \EnumType\AttachmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attachmentType
     * @return \StructType\ImportEvent
     */
    public function setAttachmentType($attachmentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AttachmentType::valueIsValid($attachmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $attachmentType, implode(', ', \EnumType\AttachmentType::getValidValues())), __LINE__);
        }
        if (is_null($attachmentType) || (is_array($attachmentType) && empty($attachmentType))) {
            unset($this->AttachmentType);
        } else {
            $this->AttachmentType = $attachmentType;
        }
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\ImportEvent
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
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
     * @return \StructType\ImportEvent
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
     * Get ParentIdentifier value
     * @return \StructType\Identifier|null
     */
    public function getParentIdentifier()
    {
        return $this->ParentIdentifier;
    }
    /**
     * Set ParentIdentifier value
     * @param \StructType\Identifier $parentIdentifier
     * @return \StructType\ImportEvent
     */
    public function setParentIdentifier(\StructType\Identifier $parentIdentifier = null)
    {
        $this->ParentIdentifier = $parentIdentifier;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \StructType\ImportEvent
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StatusIsClosed value
     * @return bool|null
     */
    public function getStatusIsClosed()
    {
        return $this->StatusIsClosed;
    }
    /**
     * Set StatusIsClosed value
     * @param bool $statusIsClosed
     * @return \StructType\ImportEvent
     */
    public function setStatusIsClosed($statusIsClosed = null)
    {
        // validation for constraint: boolean
        if (!is_null($statusIsClosed) && !is_bool($statusIsClosed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($statusIsClosed)), __LINE__);
        }
        $this->StatusIsClosed = $statusIsClosed;
        return $this;
    }
    /**
     * Get StatusText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusText()
    {
        return isset($this->StatusText) ? $this->StatusText : null;
    }
    /**
     * Set StatusText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusText
     * @return \StructType\ImportEvent
     */
    public function setStatusText($statusText = null)
    {
        // validation for constraint: string
        if (!is_null($statusText) && !is_string($statusText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusText)), __LINE__);
        }
        if (is_null($statusText) || (is_array($statusText) && empty($statusText))) {
            unset($this->StatusText);
        } else {
            $this->StatusText = $statusText;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ImportEvent
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
