<?php

namespace EnumType;

/**
 * This class stands for SubEventTypes EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SubEventTypes
 * @subpackage Enumerations
 */
class SubEventTypes
{
    /**
     * Constant for value 'Simple'
     * @return string 'Simple'
     */
    const VALUE_SIMPLE = 'Simple';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'Image'
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'Time'
     * @return string 'Time'
     */
    const VALUE_TIME = 'Time';
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Number'
     * @return string 'Number'
     */
    const VALUE_NUMBER = 'Number';
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
     * @uses self::VALUE_SIMPLE
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_IMAGE
     * @uses self::VALUE_DATE
     * @uses self::VALUE_TIME
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SIMPLE,
            self::VALUE_TEXT,
            self::VALUE_IMAGE,
            self::VALUE_DATE,
            self::VALUE_TIME,
            self::VALUE_DATE_TIME,
            self::VALUE_NUMBER,
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
