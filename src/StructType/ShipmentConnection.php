<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for ShipmentConnection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentConnection
 * @subpackage Structs
 */
class ShipmentConnection extends AbstractStructBase
{
    /**
     * The ChildCsid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChildCsid;
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Kind;
    /**
     * Constructor method for ShipmentConnection
     * @uses ShipmentConnection::setChildCsid()
     * @uses ShipmentConnection::setKind()
     * @param int $childCsid
     * @param string $kind
     */
    public function __construct($childCsid = null, $kind = null)
    {
        $this
            ->setChildCsid($childCsid)
            ->setKind($kind);
    }
    /**
     * Get ChildCsid value
     * @return int|null
     */
    public function getChildCsid()
    {
        return $this->ChildCsid;
    }
    /**
     * Set ChildCsid value
     * @param int $childCsid
     * @return \StructType\ShipmentConnection
     */
    public function setChildCsid($childCsid = null)
    {
        // validation for constraint: int
        if (!is_null($childCsid) && !is_numeric($childCsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($childCsid)), __LINE__);
        }
        $this->ChildCsid = $childCsid;
        return $this;
    }
    /**
     * Get Kind value
     * @return string|null
     */
    public function getKind()
    {
        return $this->Kind;
    }
    /**
     * Set Kind value
     * @uses \EnumType\ShipmentConnectionKind::valueIsValid()
     * @uses \EnumType\ShipmentConnectionKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $kind
     * @return \StructType\ShipmentConnection
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShipmentConnectionKind::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $kind, implode(', ', \EnumType\ShipmentConnectionKind::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShipmentConnection
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
