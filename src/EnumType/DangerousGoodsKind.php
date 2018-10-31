<?php

namespace EnumType;

/**
 * This class stands for DangerousGoodsKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DangerousGoodsKind
 * @subpackage Enumerations
 */
class DangerousGoodsKind
{
    /**
     * Constant for value 'ADRRID'
     * @return string 'ADRRID'
     */
    const VALUE_ADRRID = 'ADRRID';
    /**
     * Constant for value 'IMD'
     * @return string 'IMD'
     */
    const VALUE_IMD = 'IMD';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ADRRID
     * @uses self::VALUE_IMD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADRRID,
            self::VALUE_IMD,
        );
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
