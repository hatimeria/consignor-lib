<?php

namespace EnumType;

/**
 * This class stands for AttachmentType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AttachmentType
 * @subpackage Enumerations
 */
class AttachmentType
{
    /**
     * Constant for value 'Picture'
     * @return string 'Picture'
     */
    const VALUE_PICTURE = 'Picture';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
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
     * @uses self::VALUE_PICTURE
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PICTURE,
            self::VALUE_TEXT,
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
