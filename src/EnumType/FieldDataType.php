<?php

namespace EnumType;

/**
 * This class stands for FieldDataType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldDataType
 * @subpackage Enumerations
 */
class FieldDataType
{
    /**
     * Constant for value 'efkString'
     * @return string 'efkString'
     */
    const VALUE_EFK_STRING = 'efkString';
    /**
     * Constant for value 'efkCountry'
     * @return string 'efkCountry'
     */
    const VALUE_EFK_COUNTRY = 'efkCountry';
    /**
     * Constant for value 'efkCurrency'
     * @return string 'efkCurrency'
     */
    const VALUE_EFK_CURRENCY = 'efkCurrency';
    /**
     * Constant for value 'efkInt'
     * @return string 'efkInt'
     */
    const VALUE_EFK_INT = 'efkInt';
    /**
     * Constant for value 'efkFloat'
     * @return string 'efkFloat'
     */
    const VALUE_EFK_FLOAT = 'efkFloat';
    /**
     * Constant for value 'efkDate'
     * @return string 'efkDate'
     */
    const VALUE_EFK_DATE = 'efkDate';
    /**
     * Constant for value 'efkTime'
     * @return string 'efkTime'
     */
    const VALUE_EFK_TIME = 'efkTime';
    /**
     * Constant for value 'efkDateTime'
     * @return string 'efkDateTime'
     */
    const VALUE_EFK_DATE_TIME = 'efkDateTime';
    /**
     * Constant for value 'efkNone'
     * @return string 'efkNone'
     */
    const VALUE_EFK_NONE = 'efkNone';
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
     * @uses self::VALUE_EFK_STRING
     * @uses self::VALUE_EFK_COUNTRY
     * @uses self::VALUE_EFK_CURRENCY
     * @uses self::VALUE_EFK_INT
     * @uses self::VALUE_EFK_FLOAT
     * @uses self::VALUE_EFK_DATE
     * @uses self::VALUE_EFK_TIME
     * @uses self::VALUE_EFK_DATE_TIME
     * @uses self::VALUE_EFK_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EFK_STRING,
            self::VALUE_EFK_COUNTRY,
            self::VALUE_EFK_CURRENCY,
            self::VALUE_EFK_INT,
            self::VALUE_EFK_FLOAT,
            self::VALUE_EFK_DATE,
            self::VALUE_EFK_TIME,
            self::VALUE_EFK_DATE_TIME,
            self::VALUE_EFK_NONE,
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
