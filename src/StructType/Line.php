<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Line StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Line
 * @subpackage Structs
 */
class Line extends AbstractStructBase
{
    /**
     * The DangerousGoods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDangerousGoods
     */
    public $DangerousGoods;
    /**
     * The Deleted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $Deleted;
    /**
     * The DimensionalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DimensionalWeight;
    /**
     * The GoodsTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GoodsTypeId;
    /**
     * The GoodsTypeKey1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GoodsTypeKey1;
    /**
     * The GoodsTypeKey2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GoodsTypeKey2;
    /**
     * The GoodsTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GoodsTypeName;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Height;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Length;
    /**
     * The LineNumberOfPackages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineNumberOfPackages;
    /**
     * The LineUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLineUnit
     */
    public $LineUnits;
    /**
     * The LineVolume
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineVolume;
    /**
     * The LineWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineWeight;
    /**
     * The Loadmeter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Loadmeter;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The PackageVolume
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageVolume;
    /**
     * The PackageWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageWeight;
    /**
     * The Packages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfPackage
     */
    public $Packages;
    /**
     * The RecycleCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RecycleCount;
    /**
     * The RecycleTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecycleTypeCode;
    /**
     * The RecycleTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RecycleTypeId;
    /**
     * The RecycleTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecycleTypeName;
    /**
     * The References
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReference
     */
    public $References;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * Constructor method for Line
     * @uses Line::setDangerousGoods()
     * @uses Line::setDeleted()
     * @uses Line::setDimensionalWeight()
     * @uses Line::setGoodsTypeId()
     * @uses Line::setGoodsTypeKey1()
     * @uses Line::setGoodsTypeKey2()
     * @uses Line::setGoodsTypeName()
     * @uses Line::setHeight()
     * @uses Line::setLength()
     * @uses Line::setLineNumberOfPackages()
     * @uses Line::setLineUnits()
     * @uses Line::setLineVolume()
     * @uses Line::setLineWeight()
     * @uses Line::setLoadmeter()
     * @uses Line::setNumber()
     * @uses Line::setPackageVolume()
     * @uses Line::setPackageWeight()
     * @uses Line::setPackages()
     * @uses Line::setRecycleCount()
     * @uses Line::setRecycleTypeCode()
     * @uses Line::setRecycleTypeId()
     * @uses Line::setRecycleTypeName()
     * @uses Line::setReferences()
     * @uses Line::setWidth()
     * @param \ArrayType\ArrayOfDangerousGoods $dangerousGoods
     * @param bool $deleted
     * @param int $dimensionalWeight
     * @param int $goodsTypeId
     * @param string $goodsTypeKey1
     * @param string $goodsTypeKey2
     * @param string $goodsTypeName
     * @param int $height
     * @param int $length
     * @param int $lineNumberOfPackages
     * @param \ArrayType\ArrayOfLineUnit $lineUnits
     * @param int $lineVolume
     * @param int $lineWeight
     * @param int $loadmeter
     * @param int $number
     * @param int $packageVolume
     * @param int $packageWeight
     * @param \ArrayType\ArrayOfPackage $packages
     * @param int $recycleCount
     * @param string $recycleTypeCode
     * @param int $recycleTypeId
     * @param string $recycleTypeName
     * @param \ArrayType\ArrayOfReference $references
     * @param int $width
     */
    public function __construct(\ArrayType\ArrayOfDangerousGoods $dangerousGoods = null, $deleted = null, $dimensionalWeight = null, $goodsTypeId = null, $goodsTypeKey1 = null, $goodsTypeKey2 = null, $goodsTypeName = null, $height = null, $length = null, $lineNumberOfPackages = null, \ArrayType\ArrayOfLineUnit $lineUnits = null, $lineVolume = null, $lineWeight = null, $loadmeter = null, $number = null, $packageVolume = null, $packageWeight = null, \ArrayType\ArrayOfPackage $packages = null, $recycleCount = null, $recycleTypeCode = null, $recycleTypeId = null, $recycleTypeName = null, \ArrayType\ArrayOfReference $references = null, $width = null)
    {
        $this
            ->setDangerousGoods($dangerousGoods)
            ->setDeleted($deleted)
            ->setDimensionalWeight($dimensionalWeight)
            ->setGoodsTypeId($goodsTypeId)
            ->setGoodsTypeKey1($goodsTypeKey1)
            ->setGoodsTypeKey2($goodsTypeKey2)
            ->setGoodsTypeName($goodsTypeName)
            ->setHeight($height)
            ->setLength($length)
            ->setLineNumberOfPackages($lineNumberOfPackages)
            ->setLineUnits($lineUnits)
            ->setLineVolume($lineVolume)
            ->setLineWeight($lineWeight)
            ->setLoadmeter($loadmeter)
            ->setNumber($number)
            ->setPackageVolume($packageVolume)
            ->setPackageWeight($packageWeight)
            ->setPackages($packages)
            ->setRecycleCount($recycleCount)
            ->setRecycleTypeCode($recycleTypeCode)
            ->setRecycleTypeId($recycleTypeId)
            ->setRecycleTypeName($recycleTypeName)
            ->setReferences($references)
            ->setWidth($width);
    }
    /**
     * Get DangerousGoods value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDangerousGoods|null
     */
    public function getDangerousGoods()
    {
        return isset($this->DangerousGoods) ? $this->DangerousGoods : null;
    }
    /**
     * Set DangerousGoods value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDangerousGoods $dangerousGoods
     * @return \StructType\Line
     */
    public function setDangerousGoods(\ArrayType\ArrayOfDangerousGoods $dangerousGoods = null)
    {
        if (is_null($dangerousGoods) || (is_array($dangerousGoods) && empty($dangerousGoods))) {
            unset($this->DangerousGoods);
        } else {
            $this->DangerousGoods = $dangerousGoods;
        }
        return $this;
    }
    /**
     * Get Deleted value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getDeleted()
    {
        return isset($this->Deleted) ? $this->Deleted : null;
    }
    /**
     * Set Deleted value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $deleted
     * @return \StructType\Line
     */
    public function setDeleted($deleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleted) && !is_bool($deleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deleted)), __LINE__);
        }
        if (is_null($deleted) || (is_array($deleted) && empty($deleted))) {
            unset($this->Deleted);
        } else {
            $this->Deleted = $deleted;
        }
        return $this;
    }
    /**
     * Get DimensionalWeight value
     * @return int|null
     */
    public function getDimensionalWeight()
    {
        return $this->DimensionalWeight;
    }
    /**
     * Set DimensionalWeight value
     * @param int $dimensionalWeight
     * @return \StructType\Line
     */
    public function setDimensionalWeight($dimensionalWeight = null)
    {
        // validation for constraint: int
        if (!is_null($dimensionalWeight) && !is_numeric($dimensionalWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dimensionalWeight)), __LINE__);
        }
        $this->DimensionalWeight = $dimensionalWeight;
        return $this;
    }
    /**
     * Get GoodsTypeId value
     * @return int|null
     */
    public function getGoodsTypeId()
    {
        return $this->GoodsTypeId;
    }
    /**
     * Set GoodsTypeId value
     * @param int $goodsTypeId
     * @return \StructType\Line
     */
    public function setGoodsTypeId($goodsTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($goodsTypeId) && !is_numeric($goodsTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($goodsTypeId)), __LINE__);
        }
        $this->GoodsTypeId = $goodsTypeId;
        return $this;
    }
    /**
     * Get GoodsTypeKey1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGoodsTypeKey1()
    {
        return isset($this->GoodsTypeKey1) ? $this->GoodsTypeKey1 : null;
    }
    /**
     * Set GoodsTypeKey1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $goodsTypeKey1
     * @return \StructType\Line
     */
    public function setGoodsTypeKey1($goodsTypeKey1 = null)
    {
        // validation for constraint: string
        if (!is_null($goodsTypeKey1) && !is_string($goodsTypeKey1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($goodsTypeKey1)), __LINE__);
        }
        if (is_null($goodsTypeKey1) || (is_array($goodsTypeKey1) && empty($goodsTypeKey1))) {
            unset($this->GoodsTypeKey1);
        } else {
            $this->GoodsTypeKey1 = $goodsTypeKey1;
        }
        return $this;
    }
    /**
     * Get GoodsTypeKey2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGoodsTypeKey2()
    {
        return isset($this->GoodsTypeKey2) ? $this->GoodsTypeKey2 : null;
    }
    /**
     * Set GoodsTypeKey2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $goodsTypeKey2
     * @return \StructType\Line
     */
    public function setGoodsTypeKey2($goodsTypeKey2 = null)
    {
        // validation for constraint: string
        if (!is_null($goodsTypeKey2) && !is_string($goodsTypeKey2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($goodsTypeKey2)), __LINE__);
        }
        if (is_null($goodsTypeKey2) || (is_array($goodsTypeKey2) && empty($goodsTypeKey2))) {
            unset($this->GoodsTypeKey2);
        } else {
            $this->GoodsTypeKey2 = $goodsTypeKey2;
        }
        return $this;
    }
    /**
     * Get GoodsTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGoodsTypeName()
    {
        return isset($this->GoodsTypeName) ? $this->GoodsTypeName : null;
    }
    /**
     * Set GoodsTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $goodsTypeName
     * @return \StructType\Line
     */
    public function setGoodsTypeName($goodsTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($goodsTypeName) && !is_string($goodsTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($goodsTypeName)), __LINE__);
        }
        if (is_null($goodsTypeName) || (is_array($goodsTypeName) && empty($goodsTypeName))) {
            unset($this->GoodsTypeName);
        } else {
            $this->GoodsTypeName = $goodsTypeName;
        }
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \StructType\Line
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \StructType\Line
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Get LineNumberOfPackages value
     * @return int|null
     */
    public function getLineNumberOfPackages()
    {
        return $this->LineNumberOfPackages;
    }
    /**
     * Set LineNumberOfPackages value
     * @param int $lineNumberOfPackages
     * @return \StructType\Line
     */
    public function setLineNumberOfPackages($lineNumberOfPackages = null)
    {
        // validation for constraint: int
        if (!is_null($lineNumberOfPackages) && !is_numeric($lineNumberOfPackages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineNumberOfPackages)), __LINE__);
        }
        $this->LineNumberOfPackages = $lineNumberOfPackages;
        return $this;
    }
    /**
     * Get LineUnits value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLineUnit|null
     */
    public function getLineUnits()
    {
        return isset($this->LineUnits) ? $this->LineUnits : null;
    }
    /**
     * Set LineUnits value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLineUnit $lineUnits
     * @return \StructType\Line
     */
    public function setLineUnits(\ArrayType\ArrayOfLineUnit $lineUnits = null)
    {
        if (is_null($lineUnits) || (is_array($lineUnits) && empty($lineUnits))) {
            unset($this->LineUnits);
        } else {
            $this->LineUnits = $lineUnits;
        }
        return $this;
    }
    /**
     * Get LineVolume value
     * @return int|null
     */
    public function getLineVolume()
    {
        return $this->LineVolume;
    }
    /**
     * Set LineVolume value
     * @param int $lineVolume
     * @return \StructType\Line
     */
    public function setLineVolume($lineVolume = null)
    {
        // validation for constraint: int
        if (!is_null($lineVolume) && !is_numeric($lineVolume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineVolume)), __LINE__);
        }
        $this->LineVolume = $lineVolume;
        return $this;
    }
    /**
     * Get LineWeight value
     * @return int|null
     */
    public function getLineWeight()
    {
        return $this->LineWeight;
    }
    /**
     * Set LineWeight value
     * @param int $lineWeight
     * @return \StructType\Line
     */
    public function setLineWeight($lineWeight = null)
    {
        // validation for constraint: int
        if (!is_null($lineWeight) && !is_numeric($lineWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineWeight)), __LINE__);
        }
        $this->LineWeight = $lineWeight;
        return $this;
    }
    /**
     * Get Loadmeter value
     * @return int|null
     */
    public function getLoadmeter()
    {
        return $this->Loadmeter;
    }
    /**
     * Set Loadmeter value
     * @param int $loadmeter
     * @return \StructType\Line
     */
    public function setLoadmeter($loadmeter = null)
    {
        // validation for constraint: int
        if (!is_null($loadmeter) && !is_numeric($loadmeter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($loadmeter)), __LINE__);
        }
        $this->Loadmeter = $loadmeter;
        return $this;
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \StructType\Line
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get PackageVolume value
     * @return int|null
     */
    public function getPackageVolume()
    {
        return $this->PackageVolume;
    }
    /**
     * Set PackageVolume value
     * @param int $packageVolume
     * @return \StructType\Line
     */
    public function setPackageVolume($packageVolume = null)
    {
        // validation for constraint: int
        if (!is_null($packageVolume) && !is_numeric($packageVolume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageVolume)), __LINE__);
        }
        $this->PackageVolume = $packageVolume;
        return $this;
    }
    /**
     * Get PackageWeight value
     * @return int|null
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }
    /**
     * Set PackageWeight value
     * @param int $packageWeight
     * @return \StructType\Line
     */
    public function setPackageWeight($packageWeight = null)
    {
        // validation for constraint: int
        if (!is_null($packageWeight) && !is_numeric($packageWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageWeight)), __LINE__);
        }
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    /**
     * Get Packages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfPackage|null
     */
    public function getPackages()
    {
        return isset($this->Packages) ? $this->Packages : null;
    }
    /**
     * Set Packages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfPackage $packages
     * @return \StructType\Line
     */
    public function setPackages(\ArrayType\ArrayOfPackage $packages = null)
    {
        if (is_null($packages) || (is_array($packages) && empty($packages))) {
            unset($this->Packages);
        } else {
            $this->Packages = $packages;
        }
        return $this;
    }
    /**
     * Get RecycleCount value
     * @return int|null
     */
    public function getRecycleCount()
    {
        return $this->RecycleCount;
    }
    /**
     * Set RecycleCount value
     * @param int $recycleCount
     * @return \StructType\Line
     */
    public function setRecycleCount($recycleCount = null)
    {
        // validation for constraint: int
        if (!is_null($recycleCount) && !is_numeric($recycleCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recycleCount)), __LINE__);
        }
        $this->RecycleCount = $recycleCount;
        return $this;
    }
    /**
     * Get RecycleTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecycleTypeCode()
    {
        return isset($this->RecycleTypeCode) ? $this->RecycleTypeCode : null;
    }
    /**
     * Set RecycleTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recycleTypeCode
     * @return \StructType\Line
     */
    public function setRecycleTypeCode($recycleTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($recycleTypeCode) && !is_string($recycleTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recycleTypeCode)), __LINE__);
        }
        if (is_null($recycleTypeCode) || (is_array($recycleTypeCode) && empty($recycleTypeCode))) {
            unset($this->RecycleTypeCode);
        } else {
            $this->RecycleTypeCode = $recycleTypeCode;
        }
        return $this;
    }
    /**
     * Get RecycleTypeId value
     * @return int|null
     */
    public function getRecycleTypeId()
    {
        return $this->RecycleTypeId;
    }
    /**
     * Set RecycleTypeId value
     * @param int $recycleTypeId
     * @return \StructType\Line
     */
    public function setRecycleTypeId($recycleTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($recycleTypeId) && !is_numeric($recycleTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($recycleTypeId)), __LINE__);
        }
        $this->RecycleTypeId = $recycleTypeId;
        return $this;
    }
    /**
     * Get RecycleTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecycleTypeName()
    {
        return isset($this->RecycleTypeName) ? $this->RecycleTypeName : null;
    }
    /**
     * Set RecycleTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recycleTypeName
     * @return \StructType\Line
     */
    public function setRecycleTypeName($recycleTypeName = null)
    {
        // validation for constraint: string
        if (!is_null($recycleTypeName) && !is_string($recycleTypeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recycleTypeName)), __LINE__);
        }
        if (is_null($recycleTypeName) || (is_array($recycleTypeName) && empty($recycleTypeName))) {
            unset($this->RecycleTypeName);
        } else {
            $this->RecycleTypeName = $recycleTypeName;
        }
        return $this;
    }
    /**
     * Get References value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfReference|null
     */
    public function getReferences()
    {
        return isset($this->References) ? $this->References : null;
    }
    /**
     * Set References value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfReference $references
     * @return \StructType\Line
     */
    public function setReferences(\ArrayType\ArrayOfReference $references = null)
    {
        if (is_null($references) || (is_array($references) && empty($references))) {
            unset($this->References);
        } else {
            $this->References = $references;
        }
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \StructType\Line
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Line
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
