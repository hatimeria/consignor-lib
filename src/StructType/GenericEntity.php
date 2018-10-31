<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericEntity StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GenericEntity
 * @subpackage Structs
 */
class GenericEntity extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The TimeStamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TimeStamp;
    /**
     * Constructor method for GenericEntity
     * @uses GenericEntity::setId()
     * @uses GenericEntity::setTimeStamp()
     * @param int $id
     * @param string $timeStamp
     */
    public function __construct($id = null, $timeStamp = null)
    {
        $this
            ->setId($id)
            ->setTimeStamp($timeStamp);
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \StructType\GenericEntity
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get TimeStamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTimeStamp()
    {
        return isset($this->TimeStamp) ? $this->TimeStamp : null;
    }
    /**
     * Set TimeStamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $timeStamp
     * @return \StructType\GenericEntity
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        if (is_null($timeStamp) || (is_array($timeStamp) && empty($timeStamp))) {
            unset($this->TimeStamp);
        } else {
            $this->TimeStamp = $timeStamp;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GenericEntity
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
