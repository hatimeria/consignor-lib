<?php

namespace EnumType;

/**
 * This class stands for AddressKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressKind
 * @subpackage Enumerations
 */
class AddressKind
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Receiver'
     * @return string 'Receiver'
     */
    const VALUE_RECEIVER = 'Receiver';
    /**
     * Constant for value 'Sender'
     * @return string 'Sender'
     */
    const VALUE_SENDER = 'Sender';
    /**
     * Constant for value 'PickUp'
     * @return string 'PickUp'
     */
    const VALUE_PICK_UP = 'PickUp';
    /**
     * Constant for value 'Payer'
     * @return string 'Payer'
     */
    const VALUE_PAYER = 'Payer';
    /**
     * Constant for value 'Buyer'
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Temporary'
     * @return string 'Temporary'
     */
    const VALUE_TEMPORARY = 'Temporary';
    /**
     * Constant for value 'Message'
     * @return string 'Message'
     */
    const VALUE_MESSAGE = 'Message';
    /**
     * Constant for value 'Forwarder'
     * @return string 'Forwarder'
     */
    const VALUE_FORWARDER = 'Forwarder';
    /**
     * Constant for value 'ReturnTo'
     * @return string 'ReturnTo'
     */
    const VALUE_RETURN_TO = 'ReturnTo';
    /**
     * Constant for value 'DropPoint'
     * @return string 'DropPoint'
     */
    const VALUE_DROP_POINT = 'DropPoint';
    /**
     * Constant for value 'Depot'
     * @return string 'Depot'
     */
    const VALUE_DEPOT = 'Depot';
    /**
     * Constant for value 'Comeback'
     * @return string 'Comeback'
     */
    const VALUE_COMEBACK = 'Comeback';
    /**
     * Constant for value 'Broker'
     * @return string 'Broker'
     */
    const VALUE_BROKER = 'Broker';
    /**
     * Constant for value 'Delivery'
     * @return string 'Delivery'
     */
    const VALUE_DELIVERY = 'Delivery';
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
     * @uses self::VALUE_RECEIVER
     * @uses self::VALUE_SENDER
     * @uses self::VALUE_PICK_UP
     * @uses self::VALUE_PAYER
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_TEMPORARY
     * @uses self::VALUE_MESSAGE
     * @uses self::VALUE_FORWARDER
     * @uses self::VALUE_RETURN_TO
     * @uses self::VALUE_DROP_POINT
     * @uses self::VALUE_DEPOT
     * @uses self::VALUE_COMEBACK
     * @uses self::VALUE_BROKER
     * @uses self::VALUE_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_RECEIVER,
            self::VALUE_SENDER,
            self::VALUE_PICK_UP,
            self::VALUE_PAYER,
            self::VALUE_BUYER,
            self::VALUE_TEMPORARY,
            self::VALUE_MESSAGE,
            self::VALUE_FORWARDER,
            self::VALUE_RETURN_TO,
            self::VALUE_DROP_POINT,
            self::VALUE_DEPOT,
            self::VALUE_COMEBACK,
            self::VALUE_BROKER,
            self::VALUE_DELIVERY,
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
