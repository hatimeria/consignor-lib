<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenericCollection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GenericCollection
 * @subpackage Structs
 */
class GenericCollection extends AbstractStructBase
{
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Content
     */
    public $Content;
    /**
     * The Tag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $Tag;
    /**
     * Constructor method for GenericCollection
     * @uses GenericCollection::setContent()
     * @uses GenericCollection::setTag()
     * @param \StructType\Content $content
     * @param string $tag
     */
    public function __construct(\StructType\Content $content = null, $tag = null)
    {
        $this
            ->setContent($content)
            ->setTag($tag);
    }
    /**
     * Get Content value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Content|null
     */
    public function getContent()
    {
        return isset($this->Content) ? $this->Content : null;
    }
    /**
     * Set Content value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Content $content
     * @return \StructType\GenericCollection
     */
    public function setContent(\StructType\Content $content = null)
    {
        if (is_null($content) || (is_array($content) && empty($content))) {
            unset($this->Content);
        } else {
            $this->Content = $content;
        }
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \StructType\GenericCollection
     */
    public function setTag($tag = null)
    {
        // validation for constraint: pattern
        if (is_scalar($tag) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($tag, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tag)), __LINE__);
        }
        $this->Tag = $tag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GenericCollection
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
