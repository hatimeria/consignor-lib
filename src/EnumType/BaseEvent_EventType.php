<?php

namespace EnumType;

/**
 * This class stands for BaseEvent.EventType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseEvent.EventType
 * @subpackage Enumerations
 */
class BaseEvent_EventType
{
    /**
     * Constant for value 'Unspecified'
     * @return string 'Unspecified'
     */
    const VALUE_UNSPECIFIED = 'Unspecified';
    /**
     * Constant for value 'TrackAndTrace'
     * @return string 'TrackAndTrace'
     */
    const VALUE_TRACK_AND_TRACE = 'TrackAndTrace';
    /**
     * Constant for value 'Measurement'
     * @return string 'Measurement'
     */
    const VALUE_MEASUREMENT = 'Measurement';
    /**
     * Constant for value 'Price'
     * @return string 'Price'
     */
    const VALUE_PRICE = 'Price';
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
     * @uses self::VALUE_UNSPECIFIED
     * @uses self::VALUE_TRACK_AND_TRACE
     * @uses self::VALUE_MEASUREMENT
     * @uses self::VALUE_PRICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNSPECIFIED,
            self::VALUE_TRACK_AND_TRACE,
            self::VALUE_MEASUREMENT,
            self::VALUE_PRICE,
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
