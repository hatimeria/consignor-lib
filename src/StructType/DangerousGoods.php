<?php

namespace StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for DangerousGoods StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DangerousGoods
 * @subpackage Structs
 */
class DangerousGoods extends AbstractStructBase
{
    /**
     * The ADRtankSpecialProvision
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ADRtankSpecialProvision;
    /**
     * The ADRtankTankCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ADRtankTankCode;
    /**
     * The Class
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Class;
    /**
     * The Classification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Classification;
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The EMSNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EMSNo;
    /**
     * The ExceptedQuantities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExceptedQuantities;
    /**
     * The FlashPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlashPoint;
    /**
     * The GoodsLineId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GoodsLineId;
    /**
     * The GrossWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GrossWeight;
    /**
     * The IdentificationNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IdentificationNo;
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Kind;
    /**
     * The LQCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LQCount;
    /**
     * The LQGrossWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LQGrossWeight;
    /**
     * The Labels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Labels;
    /**
     * The LimitedQuantities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LimitedQuantities;
    /**
     * The MarinePollutant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MarinePollutant;
    /**
     * The MfagNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MfagNo;
    /**
     * The MixedPackingProvision
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MixedPackingProvision;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The NetWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NetWeight;
    /**
     * The PackingGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingGroup;
    /**
     * The PackingInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackingInstructions;
    /**
     * The PackingTypeKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackingTypeKey;
    /**
     * The PackingTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackingTypeName;
    /**
     * The PageNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PageNo;
    /**
     * The PortTankBulkContInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PortTankBulkContInstructions;
    /**
     * The PortTankBulkContSpecialProvisions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PortTankBulkContSpecialProvisions;
    /**
     * The SecondaryClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SecondaryClasses;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShortName;
    /**
     * The SpecialPackingProvision
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialPackingProvision;
    /**
     * The SpecialProvisions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialProvisions;
    /**
     * The SpecialProvisionsBulk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialProvisionsBulk;
    /**
     * The SpecialProvisionsHandling
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialProvisionsHandling;
    /**
     * The SpecialProvisionsOperation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialProvisionsOperation;
    /**
     * The SpecialProvisionsPackages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialProvisionsPackages;
    /**
     * The StowingCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StowingCategory;
    /**
     * The TransportCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TransportCategory;
    /**
     * The UN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UN;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Vehicle;
    /**
     * The Vol
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Vol;
    /**
     * Constructor method for DangerousGoods
     * @uses DangerousGoods::setADRtankSpecialProvision()
     * @uses DangerousGoods::setADRtankTankCode()
     * @uses DangerousGoods::setClass()
     * @uses DangerousGoods::setClassification()
     * @uses DangerousGoods::setCount()
     * @uses DangerousGoods::setDescription()
     * @uses DangerousGoods::setEMSNo()
     * @uses DangerousGoods::setExceptedQuantities()
     * @uses DangerousGoods::setFlashPoint()
     * @uses DangerousGoods::setGoodsLineId()
     * @uses DangerousGoods::setGrossWeight()
     * @uses DangerousGoods::setIdentificationNo()
     * @uses DangerousGoods::setKind()
     * @uses DangerousGoods::setLQCount()
     * @uses DangerousGoods::setLQGrossWeight()
     * @uses DangerousGoods::setLabels()
     * @uses DangerousGoods::setLimitedQuantities()
     * @uses DangerousGoods::setMarinePollutant()
     * @uses DangerousGoods::setMfagNo()
     * @uses DangerousGoods::setMixedPackingProvision()
     * @uses DangerousGoods::setName()
     * @uses DangerousGoods::setNetWeight()
     * @uses DangerousGoods::setPackingGroup()
     * @uses DangerousGoods::setPackingInstructions()
     * @uses DangerousGoods::setPackingTypeKey()
     * @uses DangerousGoods::setPackingTypeName()
     * @uses DangerousGoods::setPageNo()
     * @uses DangerousGoods::setPortTankBulkContInstructions()
     * @uses DangerousGoods::setPortTankBulkContSpecialProvisions()
     * @uses DangerousGoods::setSecondaryClasses()
     * @uses DangerousGoods::setShortName()
     * @uses DangerousGoods::setSpecialPackingProvision()
     * @uses DangerousGoods::setSpecialProvisions()
     * @uses DangerousGoods::setSpecialProvisionsBulk()
     * @uses DangerousGoods::setSpecialProvisionsHandling()
     * @uses DangerousGoods::setSpecialProvisionsOperation()
     * @uses DangerousGoods::setSpecialProvisionsPackages()
     * @uses DangerousGoods::setStowingCategory()
     * @uses DangerousGoods::setTransportCategory()
     * @uses DangerousGoods::setUN()
     * @uses DangerousGoods::setVehicle()
     * @uses DangerousGoods::setVol()
     * @param string $aDRtankSpecialProvision
     * @param string $aDRtankTankCode
     * @param string $class
     * @param string $classification
     * @param int $count
     * @param string $description
     * @param string $eMSNo
     * @param string $exceptedQuantities
     * @param string $flashPoint
     * @param int $goodsLineId
     * @param int $grossWeight
     * @param string $identificationNo
     * @param string $kind
     * @param int $lQCount
     * @param int $lQGrossWeight
     * @param string $labels
     * @param string $limitedQuantities
     * @param string $marinePollutant
     * @param string $mfagNo
     * @param string $mixedPackingProvision
     * @param string $name
     * @param int $netWeight
     * @param string $packingGroup
     * @param string $packingInstructions
     * @param string $packingTypeKey
     * @param string $packingTypeName
     * @param string $pageNo
     * @param string $portTankBulkContInstructions
     * @param string $portTankBulkContSpecialProvisions
     * @param string $secondaryClasses
     * @param string $shortName
     * @param string $specialPackingProvision
     * @param string $specialProvisions
     * @param string $specialProvisionsBulk
     * @param string $specialProvisionsHandling
     * @param string $specialProvisionsOperation
     * @param string $specialProvisionsPackages
     * @param string $stowingCategory
     * @param string $transportCategory
     * @param int $uN
     * @param string $vehicle
     * @param int $vol
     */
    public function __construct($aDRtankSpecialProvision = null, $aDRtankTankCode = null, $class = null, $classification = null, $count = null, $description = null, $eMSNo = null, $exceptedQuantities = null, $flashPoint = null, $goodsLineId = null, $grossWeight = null, $identificationNo = null, $kind = null, $lQCount = null, $lQGrossWeight = null, $labels = null, $limitedQuantities = null, $marinePollutant = null, $mfagNo = null, $mixedPackingProvision = null, $name = null, $netWeight = null, $packingGroup = null, $packingInstructions = null, $packingTypeKey = null, $packingTypeName = null, $pageNo = null, $portTankBulkContInstructions = null, $portTankBulkContSpecialProvisions = null, $secondaryClasses = null, $shortName = null, $specialPackingProvision = null, $specialProvisions = null, $specialProvisionsBulk = null, $specialProvisionsHandling = null, $specialProvisionsOperation = null, $specialProvisionsPackages = null, $stowingCategory = null, $transportCategory = null, $uN = null, $vehicle = null, $vol = null)
    {
        $this
            ->setADRtankSpecialProvision($aDRtankSpecialProvision)
            ->setADRtankTankCode($aDRtankTankCode)
            ->setClass($class)
            ->setClassification($classification)
            ->setCount($count)
            ->setDescription($description)
            ->setEMSNo($eMSNo)
            ->setExceptedQuantities($exceptedQuantities)
            ->setFlashPoint($flashPoint)
            ->setGoodsLineId($goodsLineId)
            ->setGrossWeight($grossWeight)
            ->setIdentificationNo($identificationNo)
            ->setKind($kind)
            ->setLQCount($lQCount)
            ->setLQGrossWeight($lQGrossWeight)
            ->setLabels($labels)
            ->setLimitedQuantities($limitedQuantities)
            ->setMarinePollutant($marinePollutant)
            ->setMfagNo($mfagNo)
            ->setMixedPackingProvision($mixedPackingProvision)
            ->setName($name)
            ->setNetWeight($netWeight)
            ->setPackingGroup($packingGroup)
            ->setPackingInstructions($packingInstructions)
            ->setPackingTypeKey($packingTypeKey)
            ->setPackingTypeName($packingTypeName)
            ->setPageNo($pageNo)
            ->setPortTankBulkContInstructions($portTankBulkContInstructions)
            ->setPortTankBulkContSpecialProvisions($portTankBulkContSpecialProvisions)
            ->setSecondaryClasses($secondaryClasses)
            ->setShortName($shortName)
            ->setSpecialPackingProvision($specialPackingProvision)
            ->setSpecialProvisions($specialProvisions)
            ->setSpecialProvisionsBulk($specialProvisionsBulk)
            ->setSpecialProvisionsHandling($specialProvisionsHandling)
            ->setSpecialProvisionsOperation($specialProvisionsOperation)
            ->setSpecialProvisionsPackages($specialProvisionsPackages)
            ->setStowingCategory($stowingCategory)
            ->setTransportCategory($transportCategory)
            ->setUN($uN)
            ->setVehicle($vehicle)
            ->setVol($vol);
    }
    /**
     * Get ADRtankSpecialProvision value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getADRtankSpecialProvision()
    {
        return isset($this->ADRtankSpecialProvision) ? $this->ADRtankSpecialProvision : null;
    }
    /**
     * Set ADRtankSpecialProvision value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $aDRtankSpecialProvision
     * @return \StructType\DangerousGoods
     */
    public function setADRtankSpecialProvision($aDRtankSpecialProvision = null)
    {
        // validation for constraint: string
        if (!is_null($aDRtankSpecialProvision) && !is_string($aDRtankSpecialProvision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aDRtankSpecialProvision)), __LINE__);
        }
        if (is_null($aDRtankSpecialProvision) || (is_array($aDRtankSpecialProvision) && empty($aDRtankSpecialProvision))) {
            unset($this->ADRtankSpecialProvision);
        } else {
            $this->ADRtankSpecialProvision = $aDRtankSpecialProvision;
        }
        return $this;
    }
    /**
     * Get ADRtankTankCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getADRtankTankCode()
    {
        return isset($this->ADRtankTankCode) ? $this->ADRtankTankCode : null;
    }
    /**
     * Set ADRtankTankCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $aDRtankTankCode
     * @return \StructType\DangerousGoods
     */
    public function setADRtankTankCode($aDRtankTankCode = null)
    {
        // validation for constraint: string
        if (!is_null($aDRtankTankCode) && !is_string($aDRtankTankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aDRtankTankCode)), __LINE__);
        }
        if (is_null($aDRtankTankCode) || (is_array($aDRtankTankCode) && empty($aDRtankTankCode))) {
            unset($this->ADRtankTankCode);
        } else {
            $this->ADRtankTankCode = $aDRtankTankCode;
        }
        return $this;
    }
    /**
     * Get Class value
     * @return string|null
     */
    public function getClass()
    {
        return $this->Class;
    }
    /**
     * Set Class value
     * @uses \EnumType\DangerousGoodsClass::valueIsValid()
     * @uses \EnumType\DangerousGoodsClass::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $class
     * @return \StructType\DangerousGoods
     */
    public function setClass($class = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DangerousGoodsClass::valueIsValid($class)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $class, implode(', ', \EnumType\DangerousGoodsClass::getValidValues())), __LINE__);
        }
        $this->Class = $class;
        return $this;
    }
    /**
     * Get Classification value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClassification()
    {
        return isset($this->Classification) ? $this->Classification : null;
    }
    /**
     * Set Classification value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $classification
     * @return \StructType\DangerousGoods
     */
    public function setClassification($classification = null)
    {
        // validation for constraint: string
        if (!is_null($classification) && !is_string($classification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classification)), __LINE__);
        }
        if (is_null($classification) || (is_array($classification) && empty($classification))) {
            unset($this->Classification);
        } else {
            $this->Classification = $classification;
        }
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\DangerousGoods
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\DangerousGoods
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get EMSNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEMSNo()
    {
        return isset($this->EMSNo) ? $this->EMSNo : null;
    }
    /**
     * Set EMSNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eMSNo
     * @return \StructType\DangerousGoods
     */
    public function setEMSNo($eMSNo = null)
    {
        // validation for constraint: string
        if (!is_null($eMSNo) && !is_string($eMSNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMSNo)), __LINE__);
        }
        if (is_null($eMSNo) || (is_array($eMSNo) && empty($eMSNo))) {
            unset($this->EMSNo);
        } else {
            $this->EMSNo = $eMSNo;
        }
        return $this;
    }
    /**
     * Get ExceptedQuantities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExceptedQuantities()
    {
        return isset($this->ExceptedQuantities) ? $this->ExceptedQuantities : null;
    }
    /**
     * Set ExceptedQuantities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $exceptedQuantities
     * @return \StructType\DangerousGoods
     */
    public function setExceptedQuantities($exceptedQuantities = null)
    {
        // validation for constraint: string
        if (!is_null($exceptedQuantities) && !is_string($exceptedQuantities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exceptedQuantities)), __LINE__);
        }
        if (is_null($exceptedQuantities) || (is_array($exceptedQuantities) && empty($exceptedQuantities))) {
            unset($this->ExceptedQuantities);
        } else {
            $this->ExceptedQuantities = $exceptedQuantities;
        }
        return $this;
    }
    /**
     * Get FlashPoint value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlashPoint()
    {
        return isset($this->FlashPoint) ? $this->FlashPoint : null;
    }
    /**
     * Set FlashPoint value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flashPoint
     * @return \StructType\DangerousGoods
     */
    public function setFlashPoint($flashPoint = null)
    {
        // validation for constraint: string
        if (!is_null($flashPoint) && !is_string($flashPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flashPoint)), __LINE__);
        }
        if (is_null($flashPoint) || (is_array($flashPoint) && empty($flashPoint))) {
            unset($this->FlashPoint);
        } else {
            $this->FlashPoint = $flashPoint;
        }
        return $this;
    }
    /**
     * Get GoodsLineId value
     * @return int|null
     */
    public function getGoodsLineId()
    {
        return $this->GoodsLineId;
    }
    /**
     * Set GoodsLineId value
     * @param int $goodsLineId
     * @return \StructType\DangerousGoods
     */
    public function setGoodsLineId($goodsLineId = null)
    {
        // validation for constraint: int
        if (!is_null($goodsLineId) && !is_numeric($goodsLineId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($goodsLineId)), __LINE__);
        }
        $this->GoodsLineId = $goodsLineId;
        return $this;
    }
    /**
     * Get GrossWeight value
     * @return int|null
     */
    public function getGrossWeight()
    {
        return $this->GrossWeight;
    }
    /**
     * Set GrossWeight value
     * @param int $grossWeight
     * @return \StructType\DangerousGoods
     */
    public function setGrossWeight($grossWeight = null)
    {
        // validation for constraint: int
        if (!is_null($grossWeight) && !is_numeric($grossWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($grossWeight)), __LINE__);
        }
        $this->GrossWeight = $grossWeight;
        return $this;
    }
    /**
     * Get IdentificationNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentificationNo()
    {
        return isset($this->IdentificationNo) ? $this->IdentificationNo : null;
    }
    /**
     * Set IdentificationNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identificationNo
     * @return \StructType\DangerousGoods
     */
    public function setIdentificationNo($identificationNo = null)
    {
        // validation for constraint: string
        if (!is_null($identificationNo) && !is_string($identificationNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identificationNo)), __LINE__);
        }
        if (is_null($identificationNo) || (is_array($identificationNo) && empty($identificationNo))) {
            unset($this->IdentificationNo);
        } else {
            $this->IdentificationNo = $identificationNo;
        }
        return $this;
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
     * @uses \EnumType\DangerousGoodsKind::valueIsValid()
     * @uses \EnumType\DangerousGoodsKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $kind
     * @return \StructType\DangerousGoods
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DangerousGoodsKind::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $kind, implode(', ', \EnumType\DangerousGoodsKind::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Get LQCount value
     * @return int|null
     */
    public function getLQCount()
    {
        return $this->LQCount;
    }
    /**
     * Set LQCount value
     * @param int $lQCount
     * @return \StructType\DangerousGoods
     */
    public function setLQCount($lQCount = null)
    {
        // validation for constraint: int
        if (!is_null($lQCount) && !is_numeric($lQCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lQCount)), __LINE__);
        }
        $this->LQCount = $lQCount;
        return $this;
    }
    /**
     * Get LQGrossWeight value
     * @return int|null
     */
    public function getLQGrossWeight()
    {
        return $this->LQGrossWeight;
    }
    /**
     * Set LQGrossWeight value
     * @param int $lQGrossWeight
     * @return \StructType\DangerousGoods
     */
    public function setLQGrossWeight($lQGrossWeight = null)
    {
        // validation for constraint: int
        if (!is_null($lQGrossWeight) && !is_numeric($lQGrossWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lQGrossWeight)), __LINE__);
        }
        $this->LQGrossWeight = $lQGrossWeight;
        return $this;
    }
    /**
     * Get Labels value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLabels()
    {
        return isset($this->Labels) ? $this->Labels : null;
    }
    /**
     * Set Labels value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $labels
     * @return \StructType\DangerousGoods
     */
    public function setLabels($labels = null)
    {
        // validation for constraint: string
        if (!is_null($labels) && !is_string($labels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labels)), __LINE__);
        }
        if (is_null($labels) || (is_array($labels) && empty($labels))) {
            unset($this->Labels);
        } else {
            $this->Labels = $labels;
        }
        return $this;
    }
    /**
     * Get LimitedQuantities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLimitedQuantities()
    {
        return isset($this->LimitedQuantities) ? $this->LimitedQuantities : null;
    }
    /**
     * Set LimitedQuantities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $limitedQuantities
     * @return \StructType\DangerousGoods
     */
    public function setLimitedQuantities($limitedQuantities = null)
    {
        // validation for constraint: string
        if (!is_null($limitedQuantities) && !is_string($limitedQuantities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($limitedQuantities)), __LINE__);
        }
        if (is_null($limitedQuantities) || (is_array($limitedQuantities) && empty($limitedQuantities))) {
            unset($this->LimitedQuantities);
        } else {
            $this->LimitedQuantities = $limitedQuantities;
        }
        return $this;
    }
    /**
     * Get MarinePollutant value
     * @return string|null
     */
    public function getMarinePollutant()
    {
        return $this->MarinePollutant;
    }
    /**
     * Set MarinePollutant value
     * @uses \EnumType\DangerousGoodsMarinePollutant::valueIsValid()
     * @uses \EnumType\DangerousGoodsMarinePollutant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $marinePollutant
     * @return \StructType\DangerousGoods
     */
    public function setMarinePollutant($marinePollutant = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DangerousGoodsMarinePollutant::valueIsValid($marinePollutant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $marinePollutant, implode(', ', \EnumType\DangerousGoodsMarinePollutant::getValidValues())), __LINE__);
        }
        $this->MarinePollutant = $marinePollutant;
        return $this;
    }
    /**
     * Get MfagNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMfagNo()
    {
        return isset($this->MfagNo) ? $this->MfagNo : null;
    }
    /**
     * Set MfagNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mfagNo
     * @return \StructType\DangerousGoods
     */
    public function setMfagNo($mfagNo = null)
    {
        // validation for constraint: string
        if (!is_null($mfagNo) && !is_string($mfagNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mfagNo)), __LINE__);
        }
        if (is_null($mfagNo) || (is_array($mfagNo) && empty($mfagNo))) {
            unset($this->MfagNo);
        } else {
            $this->MfagNo = $mfagNo;
        }
        return $this;
    }
    /**
     * Get MixedPackingProvision value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMixedPackingProvision()
    {
        return isset($this->MixedPackingProvision) ? $this->MixedPackingProvision : null;
    }
    /**
     * Set MixedPackingProvision value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mixedPackingProvision
     * @return \StructType\DangerousGoods
     */
    public function setMixedPackingProvision($mixedPackingProvision = null)
    {
        // validation for constraint: string
        if (!is_null($mixedPackingProvision) && !is_string($mixedPackingProvision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mixedPackingProvision)), __LINE__);
        }
        if (is_null($mixedPackingProvision) || (is_array($mixedPackingProvision) && empty($mixedPackingProvision))) {
            unset($this->MixedPackingProvision);
        } else {
            $this->MixedPackingProvision = $mixedPackingProvision;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\DangerousGoods
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get NetWeight value
     * @return int|null
     */
    public function getNetWeight()
    {
        return $this->NetWeight;
    }
    /**
     * Set NetWeight value
     * @param int $netWeight
     * @return \StructType\DangerousGoods
     */
    public function setNetWeight($netWeight = null)
    {
        // validation for constraint: int
        if (!is_null($netWeight) && !is_numeric($netWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($netWeight)), __LINE__);
        }
        $this->NetWeight = $netWeight;
        return $this;
    }
    /**
     * Get PackingGroup value
     * @return string|null
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    /**
     * Set PackingGroup value
     * @uses \EnumType\DangerousGoodsPackingGroup::valueIsValid()
     * @uses \EnumType\DangerousGoodsPackingGroup::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packingGroup
     * @return \StructType\DangerousGoods
     */
    public function setPackingGroup($packingGroup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DangerousGoodsPackingGroup::valueIsValid($packingGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingGroup, implode(', ', \EnumType\DangerousGoodsPackingGroup::getValidValues())), __LINE__);
        }
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    /**
     * Get PackingInstructions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackingInstructions()
    {
        return isset($this->PackingInstructions) ? $this->PackingInstructions : null;
    }
    /**
     * Set PackingInstructions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packingInstructions
     * @return \StructType\DangerousGoods
     */
    public function setPackingInstructions($packingInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($packingInstructions) && !is_string($packingInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingInstructions)), __LINE__);
        }
        if (is_null($packingInstructions) || (is_array($packingInstructions) && empty($packingInstructions))) {
            unset($this->PackingInstructions);
        } else {
            $this->PackingInstructions = $packingInstructions;
        }
        return $this;
    }
    /**
     * Get PackingTypeKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackingTypeKey()
    {
        return isset($this->PackingTypeKey) ? $this->PackingTypeKey : null;
    }
    /**
     * Set PackingTypeKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packingTypeKey
     * @return \StructType\DangerousGoods
     */
    public function setPackingTypeKey($packingTypeKey = null)
    {
        // validation for constraint: string
        if (!is_null($packingTypeKey) && !is_string($packingTypeKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingTypeKey)), __LINE__);
        }
        if (is_null($packingTypeKey) || (is_array($packingTypeKey) && empty($packingTypeKey))) {
            unset($this->PackingTypeKey);
        } else {
            $this->PackingTypeKey = $packingTypeKey;
        }
        return $this;
    }
    /**
     * Get PackingTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackingTypeName()
    {
        return isset($this->PackingTypeName) ? $this->PackingTypeName : null;
    }
    /**
     * Set PackingTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packingTypeName
     * @return \StructType\DangerousGoods
     */
    public function setPackingTypeName($packingTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($packingTypeName) && !is_string($packingTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packingTypeName)), __LINE__);
        }
        if (is_null($packingTypeName) || (is_array($packingTypeName) && empty($packingTypeName))) {
            unset($this->PackingTypeName);
        } else {
            $this->PackingTypeName = $packingTypeName;
        }
        return $this;
    }
    /**
     * Get PageNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPageNo()
    {
        return isset($this->PageNo) ? $this->PageNo : null;
    }
    /**
     * Set PageNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pageNo
     * @return \StructType\DangerousGoods
     */
    public function setPageNo($pageNo = null)
    {
        // validation for constraint: string
        if (!is_null($pageNo) && !is_string($pageNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pageNo)), __LINE__);
        }
        if (is_null($pageNo) || (is_array($pageNo) && empty($pageNo))) {
            unset($this->PageNo);
        } else {
            $this->PageNo = $pageNo;
        }
        return $this;
    }
    /**
     * Get PortTankBulkContInstructions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPortTankBulkContInstructions()
    {
        return isset($this->PortTankBulkContInstructions) ? $this->PortTankBulkContInstructions : null;
    }
    /**
     * Set PortTankBulkContInstructions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $portTankBulkContInstructions
     * @return \StructType\DangerousGoods
     */
    public function setPortTankBulkContInstructions($portTankBulkContInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($portTankBulkContInstructions) && !is_string($portTankBulkContInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portTankBulkContInstructions)), __LINE__);
        }
        if (is_null($portTankBulkContInstructions) || (is_array($portTankBulkContInstructions) && empty($portTankBulkContInstructions))) {
            unset($this->PortTankBulkContInstructions);
        } else {
            $this->PortTankBulkContInstructions = $portTankBulkContInstructions;
        }
        return $this;
    }
    /**
     * Get PortTankBulkContSpecialProvisions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPortTankBulkContSpecialProvisions()
    {
        return isset($this->PortTankBulkContSpecialProvisions) ? $this->PortTankBulkContSpecialProvisions : null;
    }
    /**
     * Set PortTankBulkContSpecialProvisions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $portTankBulkContSpecialProvisions
     * @return \StructType\DangerousGoods
     */
    public function setPortTankBulkContSpecialProvisions($portTankBulkContSpecialProvisions = null)
    {
        // validation for constraint: string
        if (!is_null($portTankBulkContSpecialProvisions) && !is_string($portTankBulkContSpecialProvisions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portTankBulkContSpecialProvisions)), __LINE__);
        }
        if (is_null($portTankBulkContSpecialProvisions) || (is_array($portTankBulkContSpecialProvisions) && empty($portTankBulkContSpecialProvisions))) {
            unset($this->PortTankBulkContSpecialProvisions);
        } else {
            $this->PortTankBulkContSpecialProvisions = $portTankBulkContSpecialProvisions;
        }
        return $this;
    }
    /**
     * Get SecondaryClasses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondaryClasses()
    {
        return isset($this->SecondaryClasses) ? $this->SecondaryClasses : null;
    }
    /**
     * Set SecondaryClasses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondaryClasses
     * @return \StructType\DangerousGoods
     */
    public function setSecondaryClasses($secondaryClasses = null)
    {
        // validation for constraint: string
        if (!is_null($secondaryClasses) && !is_string($secondaryClasses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondaryClasses)), __LINE__);
        }
        if (is_null($secondaryClasses) || (is_array($secondaryClasses) && empty($secondaryClasses))) {
            unset($this->SecondaryClasses);
        } else {
            $this->SecondaryClasses = $secondaryClasses;
        }
        return $this;
    }
    /**
     * Get ShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShortName()
    {
        return isset($this->ShortName) ? $this->ShortName : null;
    }
    /**
     * Set ShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shortName
     * @return \StructType\DangerousGoods
     */
    public function setShortName($shortName = null)
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortName)), __LINE__);
        }
        if (is_null($shortName) || (is_array($shortName) && empty($shortName))) {
            unset($this->ShortName);
        } else {
            $this->ShortName = $shortName;
        }
        return $this;
    }
    /**
     * Get SpecialPackingProvision value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialPackingProvision()
    {
        return isset($this->SpecialPackingProvision) ? $this->SpecialPackingProvision : null;
    }
    /**
     * Set SpecialPackingProvision value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialPackingProvision
     * @return \StructType\DangerousGoods
     */
    public function setSpecialPackingProvision($specialPackingProvision = null)
    {
        // validation for constraint: string
        if (!is_null($specialPackingProvision) && !is_string($specialPackingProvision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialPackingProvision)), __LINE__);
        }
        if (is_null($specialPackingProvision) || (is_array($specialPackingProvision) && empty($specialPackingProvision))) {
            unset($this->SpecialPackingProvision);
        } else {
            $this->SpecialPackingProvision = $specialPackingProvision;
        }
        return $this;
    }
    /**
     * Get SpecialProvisions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialProvisions()
    {
        return isset($this->SpecialProvisions) ? $this->SpecialProvisions : null;
    }
    /**
     * Set SpecialProvisions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialProvisions
     * @return \StructType\DangerousGoods
     */
    public function setSpecialProvisions($specialProvisions = null)
    {
        // validation for constraint: string
        if (!is_null($specialProvisions) && !is_string($specialProvisions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialProvisions)), __LINE__);
        }
        if (is_null($specialProvisions) || (is_array($specialProvisions) && empty($specialProvisions))) {
            unset($this->SpecialProvisions);
        } else {
            $this->SpecialProvisions = $specialProvisions;
        }
        return $this;
    }
    /**
     * Get SpecialProvisionsBulk value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialProvisionsBulk()
    {
        return isset($this->SpecialProvisionsBulk) ? $this->SpecialProvisionsBulk : null;
    }
    /**
     * Set SpecialProvisionsBulk value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialProvisionsBulk
     * @return \StructType\DangerousGoods
     */
    public function setSpecialProvisionsBulk($specialProvisionsBulk = null)
    {
        // validation for constraint: string
        if (!is_null($specialProvisionsBulk) && !is_string($specialProvisionsBulk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialProvisionsBulk)), __LINE__);
        }
        if (is_null($specialProvisionsBulk) || (is_array($specialProvisionsBulk) && empty($specialProvisionsBulk))) {
            unset($this->SpecialProvisionsBulk);
        } else {
            $this->SpecialProvisionsBulk = $specialProvisionsBulk;
        }
        return $this;
    }
    /**
     * Get SpecialProvisionsHandling value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialProvisionsHandling()
    {
        return isset($this->SpecialProvisionsHandling) ? $this->SpecialProvisionsHandling : null;
    }
    /**
     * Set SpecialProvisionsHandling value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialProvisionsHandling
     * @return \StructType\DangerousGoods
     */
    public function setSpecialProvisionsHandling($specialProvisionsHandling = null)
    {
        // validation for constraint: string
        if (!is_null($specialProvisionsHandling) && !is_string($specialProvisionsHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialProvisionsHandling)), __LINE__);
        }
        if (is_null($specialProvisionsHandling) || (is_array($specialProvisionsHandling) && empty($specialProvisionsHandling))) {
            unset($this->SpecialProvisionsHandling);
        } else {
            $this->SpecialProvisionsHandling = $specialProvisionsHandling;
        }
        return $this;
    }
    /**
     * Get SpecialProvisionsOperation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialProvisionsOperation()
    {
        return isset($this->SpecialProvisionsOperation) ? $this->SpecialProvisionsOperation : null;
    }
    /**
     * Set SpecialProvisionsOperation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialProvisionsOperation
     * @return \StructType\DangerousGoods
     */
    public function setSpecialProvisionsOperation($specialProvisionsOperation = null)
    {
        // validation for constraint: string
        if (!is_null($specialProvisionsOperation) && !is_string($specialProvisionsOperation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialProvisionsOperation)), __LINE__);
        }
        if (is_null($specialProvisionsOperation) || (is_array($specialProvisionsOperation) && empty($specialProvisionsOperation))) {
            unset($this->SpecialProvisionsOperation);
        } else {
            $this->SpecialProvisionsOperation = $specialProvisionsOperation;
        }
        return $this;
    }
    /**
     * Get SpecialProvisionsPackages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialProvisionsPackages()
    {
        return isset($this->SpecialProvisionsPackages) ? $this->SpecialProvisionsPackages : null;
    }
    /**
     * Set SpecialProvisionsPackages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialProvisionsPackages
     * @return \StructType\DangerousGoods
     */
    public function setSpecialProvisionsPackages($specialProvisionsPackages = null)
    {
        // validation for constraint: string
        if (!is_null($specialProvisionsPackages) && !is_string($specialProvisionsPackages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialProvisionsPackages)), __LINE__);
        }
        if (is_null($specialProvisionsPackages) || (is_array($specialProvisionsPackages) && empty($specialProvisionsPackages))) {
            unset($this->SpecialProvisionsPackages);
        } else {
            $this->SpecialProvisionsPackages = $specialProvisionsPackages;
        }
        return $this;
    }
    /**
     * Get StowingCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStowingCategory()
    {
        return isset($this->StowingCategory) ? $this->StowingCategory : null;
    }
    /**
     * Set StowingCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $stowingCategory
     * @return \StructType\DangerousGoods
     */
    public function setStowingCategory($stowingCategory = null)
    {
        // validation for constraint: string
        if (!is_null($stowingCategory) && !is_string($stowingCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stowingCategory)), __LINE__);
        }
        if (is_null($stowingCategory) || (is_array($stowingCategory) && empty($stowingCategory))) {
            unset($this->StowingCategory);
        } else {
            $this->StowingCategory = $stowingCategory;
        }
        return $this;
    }
    /**
     * Get TransportCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransportCategory()
    {
        return isset($this->TransportCategory) ? $this->TransportCategory : null;
    }
    /**
     * Set TransportCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transportCategory
     * @return \StructType\DangerousGoods
     */
    public function setTransportCategory($transportCategory = null)
    {
        // validation for constraint: string
        if (!is_null($transportCategory) && !is_string($transportCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transportCategory)), __LINE__);
        }
        if (is_null($transportCategory) || (is_array($transportCategory) && empty($transportCategory))) {
            unset($this->TransportCategory);
        } else {
            $this->TransportCategory = $transportCategory;
        }
        return $this;
    }
    /**
     * Get UN value
     * @return int|null
     */
    public function getUN()
    {
        return $this->UN;
    }
    /**
     * Set UN value
     * @param int $uN
     * @return \StructType\DangerousGoods
     */
    public function setUN($uN = null)
    {
        // validation for constraint: int
        if (!is_null($uN) && !is_numeric($uN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($uN)), __LINE__);
        }
        $this->UN = $uN;
        return $this;
    }
    /**
     * Get Vehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicle()
    {
        return isset($this->Vehicle) ? $this->Vehicle : null;
    }
    /**
     * Set Vehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicle
     * @return \StructType\DangerousGoods
     */
    public function setVehicle($vehicle = null)
    {
        // validation for constraint: string
        if (!is_null($vehicle) && !is_string($vehicle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehicle)), __LINE__);
        }
        if (is_null($vehicle) || (is_array($vehicle) && empty($vehicle))) {
            unset($this->Vehicle);
        } else {
            $this->Vehicle = $vehicle;
        }
        return $this;
    }
    /**
     * Get Vol value
     * @return int|null
     */
    public function getVol()
    {
        return $this->Vol;
    }
    /**
     * Set Vol value
     * @param int $vol
     * @return \StructType\DangerousGoods
     */
    public function setVol($vol = null)
    {
        // validation for constraint: int
        if (!is_null($vol) && !is_numeric($vol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vol)), __LINE__);
        }
        $this->Vol = $vol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DangerousGoods
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
