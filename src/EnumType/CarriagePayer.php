<?php

namespace EnumType;

/**
 * This class stands for CarriagePayer EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CarriagePayer
 * @subpackage Enumerations
 */
class CarriagePayer
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Sender'
     * @return string 'Sender'
     */
    const VALUE_SENDER = 'Sender';
    /**
     * Constant for value 'Receiver'
     * @return string 'Receiver'
     */
    const VALUE_RECEIVER = 'Receiver';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_SENDER
     * @uses self::VALUE_RECEIVER
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_SENDER,
            self::VALUE_RECEIVER,
            self::VALUE_OTHER,
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
