<?php

namespace EnumType;

/**
 * This class stands for ShipmentKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentKind
 * @subpackage Enumerations
 */
class ShipmentKind
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
     * Constant for value 'Comeback'
     * @return string 'Comeback'
     */
    const VALUE_COMEBACK = 'Comeback';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Constant for value 'Incomming'
     * @return string 'Incomming'
     */
    const VALUE_INCOMMING = 'Incomming';
    /**
     * Constant for value 'CHOD'
     * @return string 'CHOD'
     */
    const VALUE_CHOD = 'CHOD';
    /**
     * Constant for value 'ScanAppMatched'
     * @return string 'ScanAppMatched'
     */
    const VALUE_SCAN_APP_MATCHED = 'ScanAppMatched';
    /**
     * Constant for value 'CustomCreated'
     * @return string 'CustomCreated'
     */
    const VALUE_CUSTOM_CREATED = 'CustomCreated';
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
     * @uses self::VALUE_COMEBACK
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_INCOMMING
     * @uses self::VALUE_CHOD
     * @uses self::VALUE_SCAN_APP_MATCHED
     * @uses self::VALUE_CUSTOM_CREATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_NORMAL,
            self::VALUE_COMEBACK,
            self::VALUE_GROUP,
            self::VALUE_INCOMMING,
            self::VALUE_CHOD,
            self::VALUE_SCAN_APP_MATCHED,
            self::VALUE_CUSTOM_CREATED,
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
