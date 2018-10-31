<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Message
 * @subpackage Structs
 */
class Message extends AbstractStructBase
{
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Kind;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * Constructor method for Message
     * @uses Message::setKind()
     * @uses Message::setText()
     * @param string $kind
     * @param string $text
     */
    public function __construct($kind = null, $text = null)
    {
        $this
            ->setKind($kind)
            ->setText($text);
    }
    /**
     * Get Kind value
     * @return string|null
     */
    public function getKind()
    {
        return $this->Kind;
    }
    /**
     * Set Kind value
     * @uses \EnumType\ShipmentMessageKind::valueIsValid()
     * @uses \EnumType\ShipmentMessageKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $kind
     * @return \StructType\Message
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShipmentMessageKind::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $kind, implode(', ', \EnumType\ShipmentMessageKind::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \StructType\Message
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Message
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
