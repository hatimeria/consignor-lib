<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for LineUnit StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LineUnit
 * @subpackage Structs
 */
class LineUnit extends GenericEntity
{
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The KindId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $KindId;
    /**
     * The LineId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Vol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Vol;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Weight;
    /**
     * Constructor method for LineUnit
     * @uses LineUnit::setCount()
     * @uses LineUnit::setKindId()
     * @uses LineUnit::setLineId()
     * @uses LineUnit::setName()
     * @uses LineUnit::setVol()
     * @uses LineUnit::setWeight()
     * @param int $count
     * @param int $kindId
     * @param int $lineId
     * @param string $name
     * @param int $vol
     * @param int $weight
     */
    public function __construct($count = null, $kindId = null, $lineId = null, $name = null, $vol = null, $weight = null)
    {
        $this
            ->setCount($count)
            ->setKindId($kindId)
            ->setLineId($lineId)
            ->setName($name)
            ->setVol($vol)
            ->setWeight($weight);
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
     * @return \StructType\LineUnit
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
     * Get KindId value
     * @return int|null
     */
    public function getKindId()
    {
        return $this->KindId;
    }
    /**
     * Set KindId value
     * @param int $kindId
     * @return \StructType\LineUnit
     */
    public function setKindId($kindId = null)
    {
        // validation for constraint: int
        if (!is_null($kindId) && !is_numeric($kindId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kindId)), __LINE__);
        }
        $this->KindId = $kindId;
        return $this;
    }
    /**
     * Get LineId value
     * @return int|null
     */
    public function getLineId()
    {
        return $this->LineId;
    }
    /**
     * Set LineId value
     * @param int $lineId
     * @return \StructType\LineUnit
     */
    public function setLineId($lineId = null)
    {
        // validation for constraint: int
        if (!is_null($lineId) && !is_numeric($lineId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineId)), __LINE__);
        }
        $this->LineId = $lineId;
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\LineUnit
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get Vol value
     * @return int|null
     */
    public function getVol()
    {
        return $this->Vol;
    }
    /**
     * Set Vol value
     * @param int $vol
     * @return \StructType\LineUnit
     */
    public function setVol($vol = null)
    {
        // validation for constraint: int
        if (!is_null($vol) && !is_numeric($vol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vol)), __LINE__);
        }
        $this->Vol = $vol;
        return $this;
    }
    /**
     * Get Weight value
     * @return int|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param int $weight
     * @return \StructType\LineUnit
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: int
        if (!is_null($weight) && !is_numeric($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LineUnit
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
