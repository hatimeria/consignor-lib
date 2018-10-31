<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailRow StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailRow
 * @subpackage Structs
 */
class DetailRow extends AbstractStructBase
{
    /**
     * The Details
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDetail
     */
    public $Details;
    /**
     * The RowNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $RowNumber;
    /**
     * Constructor method for DetailRow
     * @uses DetailRow::setDetails()
     * @uses DetailRow::setRowNumber()
     * @param \ArrayType\ArrayOfDetail $details
     * @param int $rowNumber
     */
    public function __construct(\ArrayType\ArrayOfDetail $details = null, $rowNumber = null)
    {
        $this
            ->setDetails($details)
            ->setRowNumber($rowNumber);
    }
    /**
     * Get Details value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDetail|null
     */
    public function getDetails()
    {
        return isset($this->Details) ? $this->Details : null;
    }
    /**
     * Set Details value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDetail $details
     * @return \StructType\DetailRow
     */
    public function setDetails(\ArrayType\ArrayOfDetail $details = null)
    {
        if (is_null($details) || (is_array($details) && empty($details))) {
            unset($this->Details);
        } else {
            $this->Details = $details;
        }
        return $this;
    }
    /**
     * Get RowNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getRowNumber()
    {
        return isset($this->RowNumber) ? $this->RowNumber : null;
    }
    /**
     * Set RowNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $rowNumber
     * @return \StructType\DetailRow
     */
    public function setRowNumber($rowNumber = null)
    {
        // validation for constraint: int
        if (!is_null($rowNumber) && !is_numeric($rowNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rowNumber)), __LINE__);
        }
        if (is_null($rowNumber) || (is_array($rowNumber) && empty($rowNumber))) {
            unset($this->RowNumber);
        } else {
            $this->RowNumber = $rowNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DetailRow
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
