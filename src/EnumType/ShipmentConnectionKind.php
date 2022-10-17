<?php

namespace EnumType;

/**
 * This class stands for ShipmentConnectionKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShipmentConnectionKind
 * @subpackage Enumerations
 */
class ShipmentConnectionKind
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'ChildIsComeback'
     * @return string 'ChildIsComeback'
     */
    const VALUE_CHILD_IS_COMEBACK = 'ChildIsComeback';
    /**
     * Constant for value 'ChildIsGroupMember'
     * @return string 'ChildIsGroupMember'
     */
    const VALUE_CHILD_IS_GROUP_MEMBER = 'ChildIsGroupMember';
    /**
     * Constant for value 'ChildIsCompletionSub'
     * @return string 'ChildIsCompletionSub'
     */
    const VALUE_CHILD_IS_COMPLETION_SUB = 'ChildIsCompletionSub';
    /**
     * Constant for value 'ChildIsBulksplitSub'
     * @return string 'ChildIsBulksplitSub'
     */
    const VALUE_CHILD_IS_BULKSPLIT_SUB = 'ChildIsBulksplitSub';
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
     * @uses self::VALUE_CHILD_IS_COMEBACK
     * @uses self::VALUE_CHILD_IS_GROUP_MEMBER
     * @uses self::VALUE_CHILD_IS_COMPLETION_SUB
     * @uses self::VALUE_CHILD_IS_BULKSPLIT_SUB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_CHILD_IS_COMEBACK,
            self::VALUE_CHILD_IS_GROUP_MEMBER,
            self::VALUE_CHILD_IS_COMPLETION_SUB,
            self::VALUE_CHILD_IS_BULKSPLIT_SUB,
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
