<?php

namespace EnumType;

/**
 * This class stands for IdentifierType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentifierType
 * @subpackage Enumerations
 */
class IdentifierType
{
    /**
     * Constant for value 'Barcode'
     * @return string 'Barcode'
     */
    const VALUE_BARCODE = 'Barcode';
    /**
     * Constant for value 'OrderNo'
     * @return string 'OrderNo'
     */
    const VALUE_ORDER_NO = 'OrderNo';
    /**
     * Constant for value 'ReciverRefrence'
     * @return string 'ReciverRefrence'
     */
    const VALUE_RECIVER_REFRENCE = 'ReciverRefrence';
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
     * @uses self::VALUE_BARCODE
     * @uses self::VALUE_ORDER_NO
     * @uses self::VALUE_RECIVER_REFRENCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BARCODE,
            self::VALUE_ORDER_NO,
            self::VALUE_RECIVER_REFRENCE,
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
