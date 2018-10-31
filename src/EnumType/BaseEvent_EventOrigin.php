<?php

namespace EnumType;

/**
 * This class stands for BaseEvent.EventOrigin EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BaseEvent.EventOrigin
 * @subpackage Enumerations
 */
class BaseEvent_EventOrigin
{
    /**
     * Constant for value 'Consignor'
     * @return string 'Consignor'
     */
    const VALUE_CONSIGNOR = 'Consignor';
    /**
     * Constant for value 'ReturnData'
     * @return string 'ReturnData'
     */
    const VALUE_RETURN_DATA = 'ReturnData';
    /**
     * Constant for value 'MobileScanApp'
     * @return string 'MobileScanApp'
     */
    const VALUE_MOBILE_SCAN_APP = 'MobileScanApp';
    /**
     * Constant for value 'MobileHandheld'
     * @return string 'MobileHandheld'
     */
    const VALUE_MOBILE_HANDHELD = 'MobileHandheld';
    /**
     * Constant for value 'PortalStatus'
     * @return string 'PortalStatus'
     */
    const VALUE_PORTAL_STATUS = 'PortalStatus';
    /**
     * Constant for value 'ClientData'
     * @return string 'ClientData'
     */
    const VALUE_CLIENT_DATA = 'ClientData';
    /**
     * Constant for value 'PortalEdit'
     * @return string 'PortalEdit'
     */
    const VALUE_PORTAL_EDIT = 'PortalEdit';
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
     * @uses self::VALUE_CONSIGNOR
     * @uses self::VALUE_RETURN_DATA
     * @uses self::VALUE_MOBILE_SCAN_APP
     * @uses self::VALUE_MOBILE_HANDHELD
     * @uses self::VALUE_PORTAL_STATUS
     * @uses self::VALUE_CLIENT_DATA
     * @uses self::VALUE_PORTAL_EDIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSIGNOR,
            self::VALUE_RETURN_DATA,
            self::VALUE_MOBILE_SCAN_APP,
            self::VALUE_MOBILE_HANDHELD,
            self::VALUE_PORTAL_STATUS,
            self::VALUE_CLIENT_DATA,
            self::VALUE_PORTAL_EDIT,
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
