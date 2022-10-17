<?php

namespace EnumType;

/**
 * This class stands for DangerousGoodsMarinePollutant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DangerousGoodsMarinePollutant
 * @subpackage Enumerations
 */
class DangerousGoodsMarinePollutant
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'IMDG'
     * @return string 'IMDG'
     */
    const VALUE_IMDG = 'IMDG';
    /**
     * Constant for value 'ADR'
     * @return string 'ADR'
     */
    const VALUE_ADR = 'ADR';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_NONE
     * @uses self::VALUE_IMDG
     * @uses self::VALUE_ADR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_NONE,
            self::VALUE_IMDG,
            self::VALUE_ADR,
        );
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
