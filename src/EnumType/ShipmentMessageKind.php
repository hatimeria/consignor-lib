<?php

namespace EnumType;

/**
 * This class stands for ShipmentMessageKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentMessageKind
 * @subpackage Enumerations
 */
class ShipmentMessageKind
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Driver'
     * @return string 'Driver'
     */
    const VALUE_DRIVER = 'Driver';
    /**
     * Constant for value 'Carrier'
     * @return string 'Carrier'
     */
    const VALUE_CARRIER = 'Carrier';
    /**
     * Constant for value 'Receiver'
     * @return string 'Receiver'
     */
    const VALUE_RECEIVER = 'Receiver';
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
     * @uses self::VALUE_DRIVER
     * @uses self::VALUE_CARRIER
     * @uses self::VALUE_RECEIVER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_DRIVER,
            self::VALUE_CARRIER,
            self::VALUE_RECEIVER,
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
