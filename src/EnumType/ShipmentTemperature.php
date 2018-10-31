<?php

namespace EnumType;

/**
 * This class stands for ShipmentTemperature EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentTemperature
 * @subpackage Enumerations
 */
class ShipmentTemperature
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Heat'
     * @return string 'Heat'
     */
    const VALUE_HEAT = 'Heat';
    /**
     * Constant for value 'Cool'
     * @return string 'Cool'
     */
    const VALUE_COOL = 'Cool';
    /**
     * Constant for value 'Freeze'
     * @return string 'Freeze'
     */
    const VALUE_FREEZE = 'Freeze';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_HEAT
     * @uses self::VALUE_COOL
     * @uses self::VALUE_FREEZE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_NORMAL,
            self::VALUE_HEAT,
            self::VALUE_COOL,
            self::VALUE_FREEZE,
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
