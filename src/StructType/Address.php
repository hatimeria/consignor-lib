<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Address
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The Attention
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Attention;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The CountryClientId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CountryClientId;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryName;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $County;
    /**
     * The CustNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustNo;
    /**
     * The District
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $District;
    /**
     * The ERPRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ERPRef;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Email;
    /**
     * The Fax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Fax;
    /**
     * The Kind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Kind;
    /**
     * The Mobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Mobile;
    /**
     * The Name1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name1;
    /**
     * The Name2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name2;
    /**
     * The OpeningHours
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OpeningHours;
    /**
     * The POBox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $POBox;
    /**
     * The POCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $POCity;
    /**
     * The POPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $POPostCode;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Phone;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostCode;
    /**
     * The Province
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Province;
    /**
     * The ReceiverRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReceiverRef;
    /**
     * The Region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Region;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $State;
    /**
     * The Street1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street1;
    /**
     * The Street2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street2;
    /**
     * The VatNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VatNo;
    /**
     * Constructor method for Address
     * @uses Address::setAttention()
     * @uses Address::setCity()
     * @uses Address::setCountryClientId()
     * @uses Address::setCountryCode()
     * @uses Address::setCountryName()
     * @uses Address::setCounty()
     * @uses Address::setCustNo()
     * @uses Address::setDistrict()
     * @uses Address::setERPRef()
     * @uses Address::setEmail()
     * @uses Address::setFax()
     * @uses Address::setKind()
     * @uses Address::setMobile()
     * @uses Address::setName1()
     * @uses Address::setName2()
     * @uses Address::setOpeningHours()
     * @uses Address::setPOBox()
     * @uses Address::setPOCity()
     * @uses Address::setPOPostCode()
     * @uses Address::setPhone()
     * @uses Address::setPostCode()
     * @uses Address::setProvince()
     * @uses Address::setReceiverRef()
     * @uses Address::setRegion()
     * @uses Address::setState()
     * @uses Address::setStreet1()
     * @uses Address::setStreet2()
     * @uses Address::setVatNo()
     * @param string $attention
     * @param string $city
     * @param int $countryClientId
     * @param string $countryCode
     * @param string $countryName
     * @param string $county
     * @param string $custNo
     * @param string $district
     * @param string $eRPRef
     * @param string $email
     * @param string $fax
     * @param string $kind
     * @param string $mobile
     * @param string $name1
     * @param string $name2
     * @param string $openingHours
     * @param string $pOBox
     * @param string $pOCity
     * @param string $pOPostCode
     * @param string $phone
     * @param string $postCode
     * @param string $province
     * @param string $receiverRef
     * @param string $region
     * @param string $state
     * @param string $street1
     * @param string $street2
     * @param string $vatNo
     */
    public function __construct($attention = null, $city = null, $countryClientId = null, $countryCode = null, $countryName = null, $county = null, $custNo = null, $district = null, $eRPRef = null, $email = null, $fax = null, $kind = null, $mobile = null, $name1 = null, $name2 = null, $openingHours = null, $pOBox = null, $pOCity = null, $pOPostCode = null, $phone = null, $postCode = null, $province = null, $receiverRef = null, $region = null, $state = null, $street1 = null, $street2 = null, $vatNo = null)
    {
        $this
            ->setAttention($attention)
            ->setCity($city)
            ->setCountryClientId($countryClientId)
            ->setCountryCode($countryCode)
            ->setCountryName($countryName)
            ->setCounty($county)
            ->setCustNo($custNo)
            ->setDistrict($district)
            ->setERPRef($eRPRef)
            ->setEmail($email)
            ->setFax($fax)
            ->setKind($kind)
            ->setMobile($mobile)
            ->setName1($name1)
            ->setName2($name2)
            ->setOpeningHours($openingHours)
            ->setPOBox($pOBox)
            ->setPOCity($pOCity)
            ->setPOPostCode($pOPostCode)
            ->setPhone($phone)
            ->setPostCode($postCode)
            ->setProvince($province)
            ->setReceiverRef($receiverRef)
            ->setRegion($region)
            ->setState($state)
            ->setStreet1($street1)
            ->setStreet2($street2)
            ->setVatNo($vatNo);
    }
    /**
     * Get Attention value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAttention()
    {
        return isset($this->Attention) ? $this->Attention : null;
    }
    /**
     * Set Attention value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $attention
     * @return \StructType\Address
     */
    public function setAttention($attention = null)
    {
        // validation for constraint: string
        if (!is_null($attention) && !is_string($attention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attention)), __LINE__);
        }
        if (is_null($attention) || (is_array($attention) && empty($attention))) {
            unset($this->Attention);
        } else {
            $this->Attention = $attention;
        }
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->City);
        } else {
            $this->City = $city;
        }
        return $this;
    }
    /**
     * Get CountryClientId value
     * @return int|null
     */
    public function getCountryClientId()
    {
        return $this->CountryClientId;
    }
    /**
     * Set CountryClientId value
     * @param int $countryClientId
     * @return \StructType\Address
     */
    public function setCountryClientId($countryClientId = null)
    {
        // validation for constraint: int
        if (!is_null($countryClientId) && !is_numeric($countryClientId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($countryClientId)), __LINE__);
        }
        $this->CountryClientId = $countryClientId;
        return $this;
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \StructType\Address
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get CountryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryName()
    {
        return isset($this->CountryName) ? $this->CountryName : null;
    }
    /**
     * Set CountryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryName
     * @return \StructType\Address
     */
    public function setCountryName($countryName = null)
    {
        // validation for constraint: string
        if (!is_null($countryName) && !is_string($countryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryName)), __LINE__);
        }
        if (is_null($countryName) || (is_array($countryName) && empty($countryName))) {
            unset($this->CountryName);
        } else {
            $this->CountryName = $countryName;
        }
        return $this;
    }
    /**
     * Get County value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCounty()
    {
        return isset($this->County) ? $this->County : null;
    }
    /**
     * Set County value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $county
     * @return \StructType\Address
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        if (is_null($county) || (is_array($county) && empty($county))) {
            unset($this->County);
        } else {
            $this->County = $county;
        }
        return $this;
    }
    /**
     * Get CustNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustNo()
    {
        return isset($this->CustNo) ? $this->CustNo : null;
    }
    /**
     * Set CustNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $custNo
     * @return \StructType\Address
     */
    public function setCustNo($custNo = null)
    {
        // validation for constraint: string
        if (!is_null($custNo) && !is_string($custNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custNo)), __LINE__);
        }
        if (is_null($custNo) || (is_array($custNo) && empty($custNo))) {
            unset($this->CustNo);
        } else {
            $this->CustNo = $custNo;
        }
        return $this;
    }
    /**
     * Get District value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDistrict()
    {
        return isset($this->District) ? $this->District : null;
    }
    /**
     * Set District value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $district
     * @return \StructType\Address
     */
    public function setDistrict($district = null)
    {
        // validation for constraint: string
        if (!is_null($district) && !is_string($district)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($district)), __LINE__);
        }
        if (is_null($district) || (is_array($district) && empty($district))) {
            unset($this->District);
        } else {
            $this->District = $district;
        }
        return $this;
    }
    /**
     * Get ERPRef value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getERPRef()
    {
        return isset($this->ERPRef) ? $this->ERPRef : null;
    }
    /**
     * Set ERPRef value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $eRPRef
     * @return \StructType\Address
     */
    public function setERPRef($eRPRef = null)
    {
        // validation for constraint: string
        if (!is_null($eRPRef) && !is_string($eRPRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eRPRef)), __LINE__);
        }
        if (is_null($eRPRef) || (is_array($eRPRef) && empty($eRPRef))) {
            unset($this->ERPRef);
        } else {
            $this->ERPRef = $eRPRef;
        }
        return $this;
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail()
    {
        return isset($this->Email) ? $this->Email : null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \StructType\Address
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        return $this;
    }
    /**
     * Get Fax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFax()
    {
        return isset($this->Fax) ? $this->Fax : null;
    }
    /**
     * Set Fax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fax
     * @return \StructType\Address
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        if (is_null($fax) || (is_array($fax) && empty($fax))) {
            unset($this->Fax);
        } else {
            $this->Fax = $fax;
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
     * @uses \EnumType\AddressKind::valueIsValid()
     * @uses \EnumType\AddressKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $kind
     * @return \StructType\Address
     */
    public function setKind($kind = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AddressKind::valueIsValid($kind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $kind, implode(', ', \EnumType\AddressKind::getValidValues())), __LINE__);
        }
        $this->Kind = $kind;
        return $this;
    }
    /**
     * Get Mobile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMobile()
    {
        return isset($this->Mobile) ? $this->Mobile : null;
    }
    /**
     * Set Mobile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mobile
     * @return \StructType\Address
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        if (is_null($mobile) || (is_array($mobile) && empty($mobile))) {
            unset($this->Mobile);
        } else {
            $this->Mobile = $mobile;
        }
        return $this;
    }
    /**
     * Get Name1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName1()
    {
        return isset($this->Name1) ? $this->Name1 : null;
    }
    /**
     * Set Name1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name1
     * @return \StructType\Address
     */
    public function setName1($name1 = null)
    {
        // validation for constraint: string
        if (!is_null($name1) && !is_string($name1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name1)), __LINE__);
        }
        if (is_null($name1) || (is_array($name1) && empty($name1))) {
            unset($this->Name1);
        } else {
            $this->Name1 = $name1;
        }
        return $this;
    }
    /**
     * Get Name2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName2()
    {
        return isset($this->Name2) ? $this->Name2 : null;
    }
    /**
     * Set Name2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name2
     * @return \StructType\Address
     */
    public function setName2($name2 = null)
    {
        // validation for constraint: string
        if (!is_null($name2) && !is_string($name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name2)), __LINE__);
        }
        if (is_null($name2) || (is_array($name2) && empty($name2))) {
            unset($this->Name2);
        } else {
            $this->Name2 = $name2;
        }
        return $this;
    }
    /**
     * Get OpeningHours value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOpeningHours()
    {
        return isset($this->OpeningHours) ? $this->OpeningHours : null;
    }
    /**
     * Set OpeningHours value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $openingHours
     * @return \StructType\Address
     */
    public function setOpeningHours($openingHours = null)
    {
        // validation for constraint: string
        if (!is_null($openingHours) && !is_string($openingHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openingHours)), __LINE__);
        }
        if (is_null($openingHours) || (is_array($openingHours) && empty($openingHours))) {
            unset($this->OpeningHours);
        } else {
            $this->OpeningHours = $openingHours;
        }
        return $this;
    }
    /**
     * Get POBox value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPOBox()
    {
        return isset($this->POBox) ? $this->POBox : null;
    }
    /**
     * Set POBox value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pOBox
     * @return \StructType\Address
     */
    public function setPOBox($pOBox = null)
    {
        // validation for constraint: string
        if (!is_null($pOBox) && !is_string($pOBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOBox)), __LINE__);
        }
        if (is_null($pOBox) || (is_array($pOBox) && empty($pOBox))) {
            unset($this->POBox);
        } else {
            $this->POBox = $pOBox;
        }
        return $this;
    }
    /**
     * Get POCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPOCity()
    {
        return isset($this->POCity) ? $this->POCity : null;
    }
    /**
     * Set POCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pOCity
     * @return \StructType\Address
     */
    public function setPOCity($pOCity = null)
    {
        // validation for constraint: string
        if (!is_null($pOCity) && !is_string($pOCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOCity)), __LINE__);
        }
        if (is_null($pOCity) || (is_array($pOCity) && empty($pOCity))) {
            unset($this->POCity);
        } else {
            $this->POCity = $pOCity;
        }
        return $this;
    }
    /**
     * Get POPostCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPOPostCode()
    {
        return isset($this->POPostCode) ? $this->POPostCode : null;
    }
    /**
     * Set POPostCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pOPostCode
     * @return \StructType\Address
     */
    public function setPOPostCode($pOPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($pOPostCode) && !is_string($pOPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOPostCode)), __LINE__);
        }
        if (is_null($pOPostCode) || (is_array($pOPostCode) && empty($pOPostCode))) {
            unset($this->POPostCode);
        } else {
            $this->POPostCode = $pOPostCode;
        }
        return $this;
    }
    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone()
    {
        return isset($this->Phone) ? $this->Phone : null;
    }
    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \StructType\Address
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }
        return $this;
    }
    /**
     * Get PostCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostCode()
    {
        return isset($this->PostCode) ? $this->PostCode : null;
    }
    /**
     * Set PostCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postCode
     * @return \StructType\Address
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        if (is_null($postCode) || (is_array($postCode) && empty($postCode))) {
            unset($this->PostCode);
        } else {
            $this->PostCode = $postCode;
        }
        return $this;
    }
    /**
     * Get Province value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProvince()
    {
        return isset($this->Province) ? $this->Province : null;
    }
    /**
     * Set Province value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $province
     * @return \StructType\Address
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($province)), __LINE__);
        }
        if (is_null($province) || (is_array($province) && empty($province))) {
            unset($this->Province);
        } else {
            $this->Province = $province;
        }
        return $this;
    }
    /**
     * Get ReceiverRef value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceiverRef()
    {
        return isset($this->ReceiverRef) ? $this->ReceiverRef : null;
    }
    /**
     * Set ReceiverRef value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receiverRef
     * @return \StructType\Address
     */
    public function setReceiverRef($receiverRef = null)
    {
        // validation for constraint: string
        if (!is_null($receiverRef) && !is_string($receiverRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiverRef)), __LINE__);
        }
        if (is_null($receiverRef) || (is_array($receiverRef) && empty($receiverRef))) {
            unset($this->ReceiverRef);
        } else {
            $this->ReceiverRef = $receiverRef;
        }
        return $this;
    }
    /**
     * Get Region value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegion()
    {
        return isset($this->Region) ? $this->Region : null;
    }
    /**
     * Set Region value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $region
     * @return \StructType\Address
     */
    public function setRegion($region = null)
    {
        // validation for constraint: string
        if (!is_null($region) && !is_string($region)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($region)), __LINE__);
        }
        if (is_null($region) || (is_array($region) && empty($region))) {
            unset($this->Region);
        } else {
            $this->Region = $region;
        }
        return $this;
    }
    /**
     * Get State value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getState()
    {
        return isset($this->State) ? $this->State : null;
    }
    /**
     * Set State value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $state
     * @return \StructType\Address
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        if (is_null($state) || (is_array($state) && empty($state))) {
            unset($this->State);
        } else {
            $this->State = $state;
        }
        return $this;
    }
    /**
     * Get Street1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet1()
    {
        return isset($this->Street1) ? $this->Street1 : null;
    }
    /**
     * Set Street1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street1
     * @return \StructType\Address
     */
    public function setStreet1($street1 = null)
    {
        // validation for constraint: string
        if (!is_null($street1) && !is_string($street1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street1)), __LINE__);
        }
        if (is_null($street1) || (is_array($street1) && empty($street1))) {
            unset($this->Street1);
        } else {
            $this->Street1 = $street1;
        }
        return $this;
    }
    /**
     * Get Street2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet2()
    {
        return isset($this->Street2) ? $this->Street2 : null;
    }
    /**
     * Set Street2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street2
     * @return \StructType\Address
     */
    public function setStreet2($street2 = null)
    {
        // validation for constraint: string
        if (!is_null($street2) && !is_string($street2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street2)), __LINE__);
        }
        if (is_null($street2) || (is_array($street2) && empty($street2))) {
            unset($this->Street2);
        } else {
            $this->Street2 = $street2;
        }
        return $this;
    }
    /**
     * Get VatNo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVatNo()
    {
        return isset($this->VatNo) ? $this->VatNo : null;
    }
    /**
     * Set VatNo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vatNo
     * @return \StructType\Address
     */
    public function setVatNo($vatNo = null)
    {
        // validation for constraint: string
        if (!is_null($vatNo) && !is_string($vatNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vatNo)), __LINE__);
        }
        if (is_null($vatNo) || (is_array($vatNo) && empty($vatNo))) {
            unset($this->VatNo);
        } else {
            $this->VatNo = $vatNo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Address
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
