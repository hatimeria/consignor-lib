<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Event StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Event
 * @subpackage Structs
 */
class Event extends AbstractStructBase
{
    /**
     * The BaseEventGuid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $BaseEventGuid;
    /**
     * The CarrierName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierName;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CityName;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Comments;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Country;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DeviceId;
    /**
     * The DiscountAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $DiscountAmount;
    /**
     * The DynamicList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDynamicProperty
     */
    public $DynamicList;
    /**
     * The EpiNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EpiNumber;
    /**
     * The ExtraFieldValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExtraFieldValue;
    /**
     * The FileBase64
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileBase64;
    /**
     * The FileUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileUrl;
    /**
     * The GpsLatitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $GpsLatitude;
    /**
     * The GpsLongitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $GpsLongitude;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Height;
    /**
     * The KindId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $KindId;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Length;
    /**
     * The LoadMeter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $LoadMeter;
    /**
     * The LocationDesc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LocationDesc;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LocationId;
    /**
     * The MobileEventCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MobileEventCode;
    /**
     * The NameInSignature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NameInSignature;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Origin;
    /**
     * The Parent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EventParent
     */
    public $Parent;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The PriceBruto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $PriceBruto;
    /**
     * The PriceNetto
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $PriceNetto;
    /**
     * The ServerDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ServerDate;
    /**
     * The SignatureUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SignatureUrl;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StatusCode;
    /**
     * The StatusState
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StatusState;
    /**
     * The StatusText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StatusText;
    /**
     * The SubEventList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SubEvent
     */
    public $SubEventList;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Volume;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Weight;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Width;
    /**
     * Constructor method for Event
     * @uses Event::setBaseEventGuid()
     * @uses Event::setCarrierName()
     * @uses Event::setCityName()
     * @uses Event::setComments()
     * @uses Event::setCountry()
     * @uses Event::setDate()
     * @uses Event::setDeviceId()
     * @uses Event::setDiscountAmount()
     * @uses Event::setDynamicList()
     * @uses Event::setEpiNumber()
     * @uses Event::setExtraFieldValue()
     * @uses Event::setFileBase64()
     * @uses Event::setFileUrl()
     * @uses Event::setGpsLatitude()
     * @uses Event::setGpsLongitude()
     * @uses Event::setHeight()
     * @uses Event::setKindId()
     * @uses Event::setLength()
     * @uses Event::setLoadMeter()
     * @uses Event::setLocationDesc()
     * @uses Event::setLocationId()
     * @uses Event::setMobileEventCode()
     * @uses Event::setNameInSignature()
     * @uses Event::setOrigin()
     * @uses Event::setParent()
     * @uses Event::setPostalCode()
     * @uses Event::setPriceBruto()
     * @uses Event::setPriceNetto()
     * @uses Event::setServerDate()
     * @uses Event::setSignatureUrl()
     * @uses Event::setStatusCode()
     * @uses Event::setStatusState()
     * @uses Event::setStatusText()
     * @uses Event::setSubEventList()
     * @uses Event::setType()
     * @uses Event::setUserId()
     * @uses Event::setVolume()
     * @uses Event::setWeight()
     * @uses Event::setWidth()
     * @param string $baseEventGuid
     * @param string $carrierName
     * @param string $cityName
     * @param string $comments
     * @param string $country
     * @param string $date
     * @param string $deviceId
     * @param float $discountAmount
     * @param \ArrayType\ArrayOfDynamicProperty $dynamicList
     * @param string $epiNumber
     * @param string $extraFieldValue
     * @param string $fileBase64
     * @param string $fileUrl
     * @param float $gpsLatitude
     * @param float $gpsLongitude
     * @param int $height
     * @param int $kindId
     * @param int $length
     * @param int $loadMeter
     * @param string $locationDesc
     * @param int $locationId
     * @param string $mobileEventCode
     * @param string $nameInSignature
     * @param string $origin
     * @param \StructType\EventParent $parent
     * @param string $postalCode
     * @param float $priceBruto
     * @param float $priceNetto
     * @param string $serverDate
     * @param string $signatureUrl
     * @param string $statusCode
     * @param string $statusState
     * @param string $statusText
     * @param \StructType\SubEvent $subEventList
     * @param string $type
     * @param int $userId
     * @param int $volume
     * @param int $weight
     * @param int $width
     */
    public function __construct($baseEventGuid = null, $carrierName = null, $cityName = null, $comments = null, $country = null, $date = null, $deviceId = null, $discountAmount = null, \ArrayType\ArrayOfDynamicProperty $dynamicList = null, $epiNumber = null, $extraFieldValue = null, $fileBase64 = null, $fileUrl = null, $gpsLatitude = null, $gpsLongitude = null, $height = null, $kindId = null, $length = null, $loadMeter = null, $locationDesc = null, $locationId = null, $mobileEventCode = null, $nameInSignature = null, $origin = null, \StructType\EventParent $parent = null, $postalCode = null, $priceBruto = null, $priceNetto = null, $serverDate = null, $signatureUrl = null, $statusCode = null, $statusState = null, $statusText = null, \StructType\SubEvent $subEventList = null, $type = null, $userId = null, $volume = null, $weight = null, $width = null)
    {
        $this
            ->setBaseEventGuid($baseEventGuid)
            ->setCarrierName($carrierName)
            ->setCityName($cityName)
            ->setComments($comments)
            ->setCountry($country)
            ->setDate($date)
            ->setDeviceId($deviceId)
            ->setDiscountAmount($discountAmount)
            ->setDynamicList($dynamicList)
            ->setEpiNumber($epiNumber)
            ->setExtraFieldValue($extraFieldValue)
            ->setFileBase64($fileBase64)
            ->setFileUrl($fileUrl)
            ->setGpsLatitude($gpsLatitude)
            ->setGpsLongitude($gpsLongitude)
            ->setHeight($height)
            ->setKindId($kindId)
            ->setLength($length)
            ->setLoadMeter($loadMeter)
            ->setLocationDesc($locationDesc)
            ->setLocationId($locationId)
            ->setMobileEventCode($mobileEventCode)
            ->setNameInSignature($nameInSignature)
            ->setOrigin($origin)
            ->setParent($parent)
            ->setPostalCode($postalCode)
            ->setPriceBruto($priceBruto)
            ->setPriceNetto($priceNetto)
            ->setServerDate($serverDate)
            ->setSignatureUrl($signatureUrl)
            ->setStatusCode($statusCode)
            ->setStatusState($statusState)
            ->setStatusText($statusText)
            ->setSubEventList($subEventList)
            ->setType($type)
            ->setUserId($userId)
            ->setVolume($volume)
            ->setWeight($weight)
            ->setWidth($width);
    }
    /**
     * Get BaseEventGuid value
     * @return string|null
     */
    public function getBaseEventGuid()
    {
        return $this->BaseEventGuid;
    }
    /**
     * Set BaseEventGuid value
     * @param string $baseEventGuid
     * @return \StructType\Event
     */
    public function setBaseEventGuid($baseEventGuid = null)
    {
        // validation for constraint: pattern
        if (is_scalar($baseEventGuid) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $baseEventGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}", "%s" given', var_export($baseEventGuid, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($baseEventGuid) && !is_string($baseEventGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseEventGuid)), __LINE__);
        }
        $this->BaseEventGuid = $baseEventGuid;
        return $this;
    }
    /**
     * Get CarrierName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierName()
    {
        return isset($this->CarrierName) ? $this->CarrierName : null;
    }
    /**
     * Set CarrierName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierName
     * @return \StructType\Event
     */
    public function setCarrierName($carrierName = null)
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierName)), __LINE__);
        }
        if (is_null($carrierName) || (is_array($carrierName) && empty($carrierName))) {
            unset($this->CarrierName);
        } else {
            $this->CarrierName = $carrierName;
        }
        return $this;
    }
    /**
     * Get CityName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCityName()
    {
        return isset($this->CityName) ? $this->CityName : null;
    }
    /**
     * Set CityName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cityName
     * @return \StructType\Event
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        if (is_null($cityName) || (is_array($cityName) && empty($cityName))) {
            unset($this->CityName);
        } else {
            $this->CityName = $cityName;
        }
        return $this;
    }
    /**
     * Get Comments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getComments()
    {
        return isset($this->Comments) ? $this->Comments : null;
    }
    /**
     * Set Comments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $comments
     * @return \StructType\Event
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        if (is_null($comments) || (is_array($comments) && empty($comments))) {
            unset($this->Comments);
        } else {
            $this->Comments = $comments;
        }
        return $this;
    }
    /**
     * Get Country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->Country) ? $this->Country : null;
    }
    /**
     * Set Country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \StructType\Event
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->Country);
        } else {
            $this->Country = $country;
        }
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\Event
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get DeviceId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDeviceId()
    {
        return isset($this->DeviceId) ? $this->DeviceId : null;
    }
    /**
     * Set DeviceId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $deviceId
     * @return \StructType\Event
     */
    public function setDeviceId($deviceId = null)
    {
        // validation for constraint: string
        if (!is_null($deviceId) && !is_string($deviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deviceId)), __LINE__);
        }
        if (is_null($deviceId) || (is_array($deviceId) && empty($deviceId))) {
            unset($this->DeviceId);
        } else {
            $this->DeviceId = $deviceId;
        }
        return $this;
    }
    /**
     * Get DiscountAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getDiscountAmount()
    {
        return isset($this->DiscountAmount) ? $this->DiscountAmount : null;
    }
    /**
     * Set DiscountAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $discountAmount
     * @return \StructType\Event
     */
    public function setDiscountAmount($discountAmount = null)
    {
        if (is_null($discountAmount) || (is_array($discountAmount) && empty($discountAmount))) {
            unset($this->DiscountAmount);
        } else {
            $this->DiscountAmount = $discountAmount;
        }
        return $this;
    }
    /**
     * Get DynamicList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDynamicProperty|null
     */
    public function getDynamicList()
    {
        return isset($this->DynamicList) ? $this->DynamicList : null;
    }
    /**
     * Set DynamicList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDynamicProperty $dynamicList
     * @return \StructType\Event
     */
    public function setDynamicList(\ArrayType\ArrayOfDynamicProperty $dynamicList = null)
    {
        if (is_null($dynamicList) || (is_array($dynamicList) && empty($dynamicList))) {
            unset($this->DynamicList);
        } else {
            $this->DynamicList = $dynamicList;
        }
        return $this;
    }
    /**
     * Get EpiNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEpiNumber()
    {
        return isset($this->EpiNumber) ? $this->EpiNumber : null;
    }
    /**
     * Set EpiNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $epiNumber
     * @return \StructType\Event
     */
    public function setEpiNumber($epiNumber = null)
    {
        // validation for constraint: string
        if (!is_null($epiNumber) && !is_string($epiNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($epiNumber)), __LINE__);
        }
        if (is_null($epiNumber) || (is_array($epiNumber) && empty($epiNumber))) {
            unset($this->EpiNumber);
        } else {
            $this->EpiNumber = $epiNumber;
        }
        return $this;
    }
    /**
     * Get ExtraFieldValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtraFieldValue()
    {
        return isset($this->ExtraFieldValue) ? $this->ExtraFieldValue : null;
    }
    /**
     * Set ExtraFieldValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extraFieldValue
     * @return \StructType\Event
     */
    public function setExtraFieldValue($extraFieldValue = null)
    {
        // validation for constraint: string
        if (!is_null($extraFieldValue) && !is_string($extraFieldValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extraFieldValue)), __LINE__);
        }
        if (is_null($extraFieldValue) || (is_array($extraFieldValue) && empty($extraFieldValue))) {
            unset($this->ExtraFieldValue);
        } else {
            $this->ExtraFieldValue = $extraFieldValue;
        }
        return $this;
    }
    /**
     * Get FileBase64 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileBase64()
    {
        return isset($this->FileBase64) ? $this->FileBase64 : null;
    }
    /**
     * Set FileBase64 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileBase64
     * @return \StructType\Event
     */
    public function setFileBase64($fileBase64 = null)
    {
        // validation for constraint: string
        if (!is_null($fileBase64) && !is_string($fileBase64)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileBase64)), __LINE__);
        }
        if (is_null($fileBase64) || (is_array($fileBase64) && empty($fileBase64))) {
            unset($this->FileBase64);
        } else {
            $this->FileBase64 = $fileBase64;
        }
        return $this;
    }
    /**
     * Get FileUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileUrl()
    {
        return isset($this->FileUrl) ? $this->FileUrl : null;
    }
    /**
     * Set FileUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileUrl
     * @return \StructType\Event
     */
    public function setFileUrl($fileUrl = null)
    {
        // validation for constraint: string
        if (!is_null($fileUrl) && !is_string($fileUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileUrl)), __LINE__);
        }
        if (is_null($fileUrl) || (is_array($fileUrl) && empty($fileUrl))) {
            unset($this->FileUrl);
        } else {
            $this->FileUrl = $fileUrl;
        }
        return $this;
    }
    /**
     * Get GpsLatitude value
     * @return float|null
     */
    public function getGpsLatitude()
    {
        return $this->GpsLatitude;
    }
    /**
     * Set GpsLatitude value
     * @param float $gpsLatitude
     * @return \StructType\Event
     */
    public function setGpsLatitude($gpsLatitude = null)
    {
        $this->GpsLatitude = $gpsLatitude;
        return $this;
    }
    /**
     * Get GpsLongitude value
     * @return float|null
     */
    public function getGpsLongitude()
    {
        return $this->GpsLongitude;
    }
    /**
     * Set GpsLongitude value
     * @param float $gpsLongitude
     * @return \StructType\Event
     */
    public function setGpsLongitude($gpsLongitude = null)
    {
        $this->GpsLongitude = $gpsLongitude;
        return $this;
    }
    /**
     * Get Height value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getHeight()
    {
        return isset($this->Height) ? $this->Height : null;
    }
    /**
     * Set Height value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $height
     * @return \StructType\Event
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        if (is_null($height) || (is_array($height) && empty($height))) {
            unset($this->Height);
        } else {
            $this->Height = $height;
        }
        return $this;
    }
    /**
     * Get KindId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKindId()
    {
        return isset($this->KindId) ? $this->KindId : null;
    }
    /**
     * Set KindId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $kindId
     * @return \StructType\Event
     */
    public function setKindId($kindId = null)
    {
        // validation for constraint: int
        if (!is_null($kindId) && !is_numeric($kindId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kindId)), __LINE__);
        }
        if (is_null($kindId) || (is_array($kindId) && empty($kindId))) {
            unset($this->KindId);
        } else {
            $this->KindId = $kindId;
        }
        return $this;
    }
    /**
     * Get Length value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLength()
    {
        return isset($this->Length) ? $this->Length : null;
    }
    /**
     * Set Length value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $length
     * @return \StructType\Event
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        if (is_null($length) || (is_array($length) && empty($length))) {
            unset($this->Length);
        } else {
            $this->Length = $length;
        }
        return $this;
    }
    /**
     * Get LoadMeter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLoadMeter()
    {
        return isset($this->LoadMeter) ? $this->LoadMeter : null;
    }
    /**
     * Set LoadMeter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $loadMeter
     * @return \StructType\Event
     */
    public function setLoadMeter($loadMeter = null)
    {
        // validation for constraint: int
        if (!is_null($loadMeter) && !is_numeric($loadMeter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($loadMeter)), __LINE__);
        }
        if (is_null($loadMeter) || (is_array($loadMeter) && empty($loadMeter))) {
            unset($this->LoadMeter);
        } else {
            $this->LoadMeter = $loadMeter;
        }
        return $this;
    }
    /**
     * Get LocationDesc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationDesc()
    {
        return isset($this->LocationDesc) ? $this->LocationDesc : null;
    }
    /**
     * Set LocationDesc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationDesc
     * @return \StructType\Event
     */
    public function setLocationDesc($locationDesc = null)
    {
        // validation for constraint: string
        if (!is_null($locationDesc) && !is_string($locationDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationDesc)), __LINE__);
        }
        if (is_null($locationDesc) || (is_array($locationDesc) && empty($locationDesc))) {
            unset($this->LocationDesc);
        } else {
            $this->LocationDesc = $locationDesc;
        }
        return $this;
    }
    /**
     * Get LocationId value
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * Set LocationId value
     * @param int $locationId
     * @return \StructType\Event
     */
    public function setLocationId($locationId = null)
    {
        // validation for constraint: int
        if (!is_null($locationId) && !is_numeric($locationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($locationId)), __LINE__);
        }
        $this->LocationId = $locationId;
        return $this;
    }
    /**
     * Get MobileEventCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobileEventCode()
    {
        return isset($this->MobileEventCode) ? $this->MobileEventCode : null;
    }
    /**
     * Set MobileEventCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobileEventCode
     * @return \StructType\Event
     */
    public function setMobileEventCode($mobileEventCode = null)
    {
        // validation for constraint: string
        if (!is_null($mobileEventCode) && !is_string($mobileEventCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobileEventCode)), __LINE__);
        }
        if (is_null($mobileEventCode) || (is_array($mobileEventCode) && empty($mobileEventCode))) {
            unset($this->MobileEventCode);
        } else {
            $this->MobileEventCode = $mobileEventCode;
        }
        return $this;
    }
    /**
     * Get NameInSignature value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameInSignature()
    {
        return isset($this->NameInSignature) ? $this->NameInSignature : null;
    }
    /**
     * Set NameInSignature value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameInSignature
     * @return \StructType\Event
     */
    public function setNameInSignature($nameInSignature = null)
    {
        // validation for constraint: string
        if (!is_null($nameInSignature) && !is_string($nameInSignature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameInSignature)), __LINE__);
        }
        if (is_null($nameInSignature) || (is_array($nameInSignature) && empty($nameInSignature))) {
            unset($this->NameInSignature);
        } else {
            $this->NameInSignature = $nameInSignature;
        }
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @uses \EnumType\BaseEvent_EventOrigin::valueIsValid()
     * @uses \EnumType\BaseEvent_EventOrigin::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $origin
     * @return \StructType\Event
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BaseEvent_EventOrigin::valueIsValid($origin)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $origin, implode(', ', \EnumType\BaseEvent_EventOrigin::getValidValues())), __LINE__);
        }
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get Parent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EventParent|null
     */
    public function getParent()
    {
        return isset($this->Parent) ? $this->Parent : null;
    }
    /**
     * Set Parent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EventParent $parent
     * @return \StructType\Event
     */
    public function setParent(\StructType\EventParent $parent = null)
    {
        if (is_null($parent) || (is_array($parent) && empty($parent))) {
            unset($this->Parent);
        } else {
            $this->Parent = $parent;
        }
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \StructType\Event
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get PriceBruto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPriceBruto()
    {
        return isset($this->PriceBruto) ? $this->PriceBruto : null;
    }
    /**
     * Set PriceBruto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $priceBruto
     * @return \StructType\Event
     */
    public function setPriceBruto($priceBruto = null)
    {
        if (is_null($priceBruto) || (is_array($priceBruto) && empty($priceBruto))) {
            unset($this->PriceBruto);
        } else {
            $this->PriceBruto = $priceBruto;
        }
        return $this;
    }
    /**
     * Get PriceNetto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getPriceNetto()
    {
        return isset($this->PriceNetto) ? $this->PriceNetto : null;
    }
    /**
     * Set PriceNetto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $priceNetto
     * @return \StructType\Event
     */
    public function setPriceNetto($priceNetto = null)
    {
        if (is_null($priceNetto) || (is_array($priceNetto) && empty($priceNetto))) {
            unset($this->PriceNetto);
        } else {
            $this->PriceNetto = $priceNetto;
        }
        return $this;
    }
    /**
     * Get ServerDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServerDate()
    {
        return isset($this->ServerDate) ? $this->ServerDate : null;
    }
    /**
     * Set ServerDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serverDate
     * @return \StructType\Event
     */
    public function setServerDate($serverDate = null)
    {
        // validation for constraint: string
        if (!is_null($serverDate) && !is_string($serverDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serverDate)), __LINE__);
        }
        if (is_null($serverDate) || (is_array($serverDate) && empty($serverDate))) {
            unset($this->ServerDate);
        } else {
            $this->ServerDate = $serverDate;
        }
        return $this;
    }
    /**
     * Get SignatureUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSignatureUrl()
    {
        return isset($this->SignatureUrl) ? $this->SignatureUrl : null;
    }
    /**
     * Set SignatureUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $signatureUrl
     * @return \StructType\Event
     */
    public function setSignatureUrl($signatureUrl = null)
    {
        // validation for constraint: string
        if (!is_null($signatureUrl) && !is_string($signatureUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signatureUrl)), __LINE__);
        }
        if (is_null($signatureUrl) || (is_array($signatureUrl) && empty($signatureUrl))) {
            unset($this->SignatureUrl);
        } else {
            $this->SignatureUrl = $signatureUrl;
        }
        return $this;
    }
    /**
     * Get StatusCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusCode()
    {
        return isset($this->StatusCode) ? $this->StatusCode : null;
    }
    /**
     * Set StatusCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusCode
     * @return \StructType\Event
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        if (is_null($statusCode) || (is_array($statusCode) && empty($statusCode))) {
            unset($this->StatusCode);
        } else {
            $this->StatusCode = $statusCode;
        }
        return $this;
    }
    /**
     * Get StatusState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusState()
    {
        return isset($this->StatusState) ? $this->StatusState : null;
    }
    /**
     * Set StatusState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusState
     * @return \StructType\Event
     */
    public function setStatusState($statusState = null)
    {
        // validation for constraint: string
        if (!is_null($statusState) && !is_string($statusState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusState)), __LINE__);
        }
        if (is_null($statusState) || (is_array($statusState) && empty($statusState))) {
            unset($this->StatusState);
        } else {
            $this->StatusState = $statusState;
        }
        return $this;
    }
    /**
     * Get StatusText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatusText()
    {
        return isset($this->StatusText) ? $this->StatusText : null;
    }
    /**
     * Set StatusText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $statusText
     * @return \StructType\Event
     */
    public function setStatusText($statusText = null)
    {
        // validation for constraint: string
        if (!is_null($statusText) && !is_string($statusText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusText)), __LINE__);
        }
        if (is_null($statusText) || (is_array($statusText) && empty($statusText))) {
            unset($this->StatusText);
        } else {
            $this->StatusText = $statusText;
        }
        return $this;
    }
    /**
     * Get SubEventList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SubEvent|null
     */
    public function getSubEventList()
    {
        return isset($this->SubEventList) ? $this->SubEventList : null;
    }
    /**
     * Set SubEventList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SubEvent $subEventList
     * @return \StructType\Event
     */
    public function setSubEventList(\StructType\SubEvent $subEventList = null)
    {
        if (is_null($subEventList) || (is_array($subEventList) && empty($subEventList))) {
            unset($this->SubEventList);
        } else {
            $this->SubEventList = $subEventList;
        }
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\BaseEvent_EventType::valueIsValid()
     * @uses \EnumType\BaseEvent_EventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\Event
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BaseEvent_EventType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \EnumType\BaseEvent_EventType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get UserId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param int $userId
     * @return \StructType\Event
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get Volume value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVolume()
    {
        return isset($this->Volume) ? $this->Volume : null;
    }
    /**
     * Set Volume value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $volume
     * @return \StructType\Event
     */
    public function setVolume($volume = null)
    {
        // validation for constraint: int
        if (!is_null($volume) && !is_numeric($volume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($volume)), __LINE__);
        }
        if (is_null($volume) || (is_array($volume) && empty($volume))) {
            unset($this->Volume);
        } else {
            $this->Volume = $volume;
        }
        return $this;
    }
    /**
     * Get Weight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getWeight()
    {
        return isset($this->Weight) ? $this->Weight : null;
    }
    /**
     * Set Weight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $weight
     * @return \StructType\Event
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: int
        if (!is_null($weight) && !is_numeric($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weight)), __LINE__);
        }
        if (is_null($weight) || (is_array($weight) && empty($weight))) {
            unset($this->Weight);
        } else {
            $this->Weight = $weight;
        }
        return $this;
    }
    /**
     * Get Width value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getWidth()
    {
        return isset($this->Width) ? $this->Width : null;
    }
    /**
     * Set Width value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $width
     * @return \StructType\Event
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        if (is_null($width) || (is_array($width) && empty($width))) {
            unset($this->Width);
        } else {
            $this->Width = $width;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Event
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
