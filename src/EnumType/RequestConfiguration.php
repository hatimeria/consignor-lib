<?php

namespace EnumType;

/**
 * This class stands for RequestConfiguration EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestConfiguration
 * @subpackage Enumerations
 */
class RequestConfiguration
{
    /**
     * Constant for value 'Unspecified'
     * @return string 'Unspecified'
     */
    const VALUE_UNSPECIFIED = 'Unspecified';
    /**
     * Constant for value 'PriceDetail'
     * @return string 'PriceDetail'
     */
    const VALUE_PRICE_DETAIL = 'PriceDetail';
    /**
     * Constant for value 'GenericShipmentDetail'
     * @return string 'GenericShipmentDetail'
     */
    const VALUE_GENERIC_SHIPMENT_DETAIL = 'GenericShipmentDetail';
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
     * @uses self::VALUE_PRICE_DETAIL
     * @uses self::VALUE_GENERIC_SHIPMENT_DETAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNSPECIFIED,
            self::VALUE_PRICE_DETAIL,
            self::VALUE_GENERIC_SHIPMENT_DETAIL,
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
