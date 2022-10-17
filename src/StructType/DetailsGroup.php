<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for DetailsGroup StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailsGroup
 * @subpackage Structs
 */
class DetailsGroup extends AbstractStructBase
{
    /**
     * The GroupDisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupDisplayName;
    /**
     * The GroupName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The GroupOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $GroupOrder;
    /**
     * The Listing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Listing;
    /**
     * The Rows
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDetailRow
     */
    public $Rows;
    /**
     * Constructor method for DetailsGroup
     * @uses DetailsGroup::setGroupDisplayName()
     * @uses DetailsGroup::setGroupName()
     * @uses DetailsGroup::setGroupOrder()
     * @uses DetailsGroup::setListing()
     * @uses DetailsGroup::setRows()
     * @param string $groupDisplayName
     * @param string $groupName
     * @param int $groupOrder
     * @param int $listing
     * @param \ArrayType\ArrayOfDetailRow $rows
     */
    public function __construct($groupDisplayName = null, $groupName = null, $groupOrder = null, $listing = null, \ArrayType\ArrayOfDetailRow $rows = null)
    {
        $this
            ->setGroupDisplayName($groupDisplayName)
            ->setGroupName($groupName)
            ->setGroupOrder($groupOrder)
            ->setListing($listing)
            ->setRows($rows);
    }
    /**
     * Get GroupDisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupDisplayName()
    {
        return isset($this->GroupDisplayName) ? $this->GroupDisplayName : null;
    }
    /**
     * Set GroupDisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupDisplayName
     * @return \StructType\DetailsGroup
     */
    public function setGroupDisplayName($groupDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($groupDisplayName) && !is_string($groupDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupDisplayName)), __LINE__);
        }
        if (is_null($groupDisplayName) || (is_array($groupDisplayName) && empty($groupDisplayName))) {
            unset($this->GroupDisplayName);
        } else {
            $this->GroupDisplayName = $groupDisplayName;
        }
        return $this;
    }
    /**
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName()
    {
        return isset($this->GroupName) ? $this->GroupName : null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \StructType\DetailsGroup
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
        return $this;
    }
    /**
     * Get GroupOrder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getGroupOrder()
    {
        return isset($this->GroupOrder) ? $this->GroupOrder : null;
    }
    /**
     * Set GroupOrder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $groupOrder
     * @return \StructType\DetailsGroup
     */
    public function setGroupOrder($groupOrder = null)
    {
        // validation for constraint: int
        if (!is_null($groupOrder) && !is_numeric($groupOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupOrder)), __LINE__);
        }
        if (is_null($groupOrder) || (is_array($groupOrder) && empty($groupOrder))) {
            unset($this->GroupOrder);
        } else {
            $this->GroupOrder = $groupOrder;
        }
        return $this;
    }
    /**
     * Get Listing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getListing()
    {
        return isset($this->Listing) ? $this->Listing : null;
    }
    /**
     * Set Listing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $listing
     * @return \StructType\DetailsGroup
     */
    public function setListing($listing = null)
    {
        // validation for constraint: int
        if (!is_null($listing) && !is_numeric($listing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($listing)), __LINE__);
        }
        if (is_null($listing) || (is_array($listing) && empty($listing))) {
            unset($this->Listing);
        } else {
            $this->Listing = $listing;
        }
        return $this;
    }
    /**
     * Get Rows value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDetailRow|null
     */
    public function getRows()
    {
        return isset($this->Rows) ? $this->Rows : null;
    }
    /**
     * Set Rows value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDetailRow $rows
     * @return \StructType\DetailsGroup
     */
    public function setRows(\ArrayType\ArrayOfDetailRow $rows = null)
    {
        if (is_null($rows) || (is_array($rows) && empty($rows))) {
            unset($this->Rows);
        } else {
            $this->Rows = $rows;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DetailsGroup
     */
    public static function __set_state(array $array): StructInterface
    {
        return parent::__set_state($array);
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
