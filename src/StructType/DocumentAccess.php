<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for DocumentAccess StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentAccess
 * @subpackage Structs
 */
class DocumentAccess extends GenericEntity
{
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpirationDate;
    /**
     * The Offset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Offset;
    /**
     * The PIN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PIN;
    /**
     * Constructor method for DocumentAccess
     * @uses DocumentAccess::setExpirationDate()
     * @uses DocumentAccess::setOffset()
     * @uses DocumentAccess::setPIN()
     * @param string $expirationDate
     * @param int $offset
     * @param string $pIN
     */
    public function __construct($expirationDate = null, $offset = null, $pIN = null)
    {
        $this
            ->setExpirationDate($expirationDate)
            ->setOffset($offset)
            ->setPIN($pIN);
    }
    /**
     * Get ExpirationDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpirationDate()
    {
        return isset($this->ExpirationDate) ? $this->ExpirationDate : null;
    }
    /**
     * Set ExpirationDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expirationDate
     * @return \StructType\DocumentAccess
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        if (is_null($expirationDate) || (is_array($expirationDate) && empty($expirationDate))) {
            unset($this->ExpirationDate);
        } else {
            $this->ExpirationDate = $expirationDate;
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
     * @return \StructType\DocumentAccess
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
     * Get PIN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPIN()
    {
        return isset($this->PIN) ? $this->PIN : null;
    }
    /**
     * Set PIN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pIN
     * @return \StructType\DocumentAccess
     */
    public function setPIN($pIN = null)
    {
        // validation for constraint: string
        if (!is_null($pIN) && !is_string($pIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pIN)), __LINE__);
        }
        if (is_null($pIN) || (is_array($pIN) && empty($pIN))) {
            unset($this->PIN);
        } else {
            $this->PIN = $pIN;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DocumentAccess
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
