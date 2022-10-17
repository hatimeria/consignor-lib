<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;
use WsdlToPhp\PackageBase\StructInterface;

/**
 * This class stands for Shipment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Shipment
 * @subpackage Structs
 */
class Shipment extends AbstractStructBase
{
    /**
     * The ActorCsid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ActorCsid;
    /**
     * The ActorName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ActorName;
    /**
     * The Addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAddress
     */
    public $Addresses;
    /**
     * The Amounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfAmount
     */
    public $Amounts;
    /**
     * The Barcode1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Barcode1;
    /**
     * The Barcode2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Barcode2;
    /**
     * The BatchCsid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BatchCsid;
    /**
     * The CarriagePayer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarriagePayer;
    /**
     * The CarrierId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CarrierId;
    /**
     * The CarrierName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierName;
    /**
     * The Deleted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $Deleted;
    /**
     * The DetailGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDetailsGroup
     */
    public $DetailGroups;
    /**
     * The DimensionalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DimensionalWeight;
    /**
     * The Esid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Esid;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfEvent
     */
    public $Events;
    /**
     * The ExpireDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpireDate;
    /**
     * The FreightBillsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FreightBillsCount;
    /**
     * The GenericCollections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGenericCollection
     */
    public $GenericCollections;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Height;
    /**
     * The ImportDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ImportDate;
    /**
     * The InstallationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InstallationId;
    /**
     * The InstallationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InstallationName;
    /**
     * The InsuranceGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuranceGroup;
    /**
     * The IsConceptCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConceptCarrier;
    /**
     * The IsConceptProduct
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConceptProduct;
    /**
     * The LabelPrintDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LabelPrintDate;
    /**
     * The LabelsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LabelsCount;
    /**
     * The LatestStatusText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LatestStatusText;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Length;
    /**
     * The Lines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLine
     */
    public $Lines;
    /**
     * The LinesSummedWeights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $LinesSummedWeights;
    /**
     * The Loadmeter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Loadmeter;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LocationId;
    /**
     * The LocationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LocationName;
    /**
     * The Messages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfMessage
     */
    public $Messages;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Number;
    /**
     * The NumberOfPackages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPackages;
    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The OriginPostcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginPostcode;
    /**
     * The OriginTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginTerminal;
    /**
     * The PackageUid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PackageUid;
    /**
     * The PayerAccountAtCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PayerAccountAtCarrier;
    /**
     * The PhysicalInstallationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhysicalInstallationId;
    /**
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PickupDate;
    /**
     * The PickupTerminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PickupTerminal;
    /**
     * The ProductId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProductId;
    /**
     * The ProductIsReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ProductIsReturn;
    /**
     * The ProductName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductName;
    /**
     * The References
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfReference
     */
    public $References;
    /**
     * The ReturnPackaging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnPackaging;
    /**
     * The SearchKey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SearchKey;
    /**
     * The SenderAccountAtBank
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SenderAccountAtBank;
    /**
     * The SenderAccountAtCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SenderAccountAtCarrier;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfService
     */
    public $Services;
    /**
     * The ShipmentConnections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipmentConnection
     */
    public $ShipmentConnections;
    /**
     * The ShipmentCsid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShipmentCsid;
    /**
     * The ShipmentCustomDocuments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipmentCustomDocument
     */
    public $ShipmentCustomDocuments;
    /**
     * The ShipmentDocuments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfShipmentDocument
     */
    public $ShipmentDocuments;
    /**
     * The ShipmentKind
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentKind;
    /**
     * The ShipmentStatusText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShipmentStatusText;
    /**
     * The ShipmentTemperature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTemperature;
    /**
     * The StackCsid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StackCsid;
    /**
     * The SubcarrierId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SubcarrierId;
    /**
     * The SubcarrierName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SubcarrierName;
    /**
     * The SubmitDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SubmitDate;
    /**
     * The TransmitDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TransmitDate;
    /**
     * The UsedInstallationIsVirtual
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UsedInstallationIsVirtual;
    /**
     * The VolumeCM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $VolumeCM;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Width;
    /**
     * Constructor method for Shipment
     * @uses Shipment::setActorCsid()
     * @uses Shipment::setActorName()
     * @uses Shipment::setAddresses()
     * @uses Shipment::setAmounts()
     * @uses Shipment::setBarcode1()
     * @uses Shipment::setBarcode2()
     * @uses Shipment::setBatchCsid()
     * @uses Shipment::setCarriagePayer()
     * @uses Shipment::setCarrierId()
     * @uses Shipment::setCarrierName()
     * @uses Shipment::setDeleted()
     * @uses Shipment::setDetailGroups()
     * @uses Shipment::setDimensionalWeight()
     * @uses Shipment::setEsid()
     * @uses Shipment::setEvents()
     * @uses Shipment::setExpireDate()
     * @uses Shipment::setFreightBillsCount()
     * @uses Shipment::setGenericCollections()
     * @uses Shipment::setHeight()
     * @uses Shipment::setImportDate()
     * @uses Shipment::setInstallationId()
     * @uses Shipment::setInstallationName()
     * @uses Shipment::setInsuranceGroup()
     * @uses Shipment::setIsConceptCarrier()
     * @uses Shipment::setIsConceptProduct()
     * @uses Shipment::setLabelPrintDate()
     * @uses Shipment::setLabelsCount()
     * @uses Shipment::setLatestStatusText()
     * @uses Shipment::setLength()
     * @uses Shipment::setLines()
     * @uses Shipment::setLinesSummedWeights()
     * @uses Shipment::setLoadmeter()
     * @uses Shipment::setLocationId()
     * @uses Shipment::setLocationName()
     * @uses Shipment::setMessages()
     * @uses Shipment::setNumber()
     * @uses Shipment::setNumberOfPackages()
     * @uses Shipment::setOrderNumber()
     * @uses Shipment::setOriginPostcode()
     * @uses Shipment::setOriginTerminal()
     * @uses Shipment::setPackageUid()
     * @uses Shipment::setPayerAccountAtCarrier()
     * @uses Shipment::setPhysicalInstallationId()
     * @uses Shipment::setPickupDate()
     * @uses Shipment::setPickupTerminal()
     * @uses Shipment::setProductId()
     * @uses Shipment::setProductIsReturn()
     * @uses Shipment::setProductName()
     * @uses Shipment::setReferences()
     * @uses Shipment::setReturnPackaging()
     * @uses Shipment::setSearchKey()
     * @uses Shipment::setSenderAccountAtBank()
     * @uses Shipment::setSenderAccountAtCarrier()
     * @uses Shipment::setServices()
     * @uses Shipment::setShipmentConnections()
     * @uses Shipment::setShipmentCsid()
     * @uses Shipment::setShipmentCustomDocuments()
     * @uses Shipment::setShipmentDocuments()
     * @uses Shipment::setShipmentKind()
     * @uses Shipment::setShipmentStatusText()
     * @uses Shipment::setShipmentTemperature()
     * @uses Shipment::setStackCsid()
     * @uses Shipment::setSubcarrierId()
     * @uses Shipment::setSubcarrierName()
     * @uses Shipment::setSubmitDate()
     * @uses Shipment::setTransmitDate()
     * @uses Shipment::setUsedInstallationIsVirtual()
     * @uses Shipment::setVolumeCM()
     * @uses Shipment::setWidth()
     * @param int $actorCsid
     * @param string $actorName
     * @param \ArrayType\ArrayOfAddress $addresses
     * @param \ArrayType\ArrayOfAmount $amounts
     * @param string $barcode1
     * @param string $barcode2
     * @param int $batchCsid
     * @param string $carriagePayer
     * @param int $carrierId
     * @param string $carrierName
     * @param bool $deleted
     * @param \ArrayType\ArrayOfDetailsGroup $detailGroups
     * @param int $dimensionalWeight
     * @param int $esid
     * @param \ArrayType\ArrayOfEvent $events
     * @param string $expireDate
     * @param int $freightBillsCount
     * @param \ArrayType\ArrayOfGenericCollection $genericCollections
     * @param int $height
     * @param string $importDate
     * @param string $installationId
     * @param string $installationName
     * @param int $insuranceGroup
     * @param bool $isConceptCarrier
     * @param bool $isConceptProduct
     * @param string $labelPrintDate
     * @param int $labelsCount
     * @param string $latestStatusText
     * @param int $length
     * @param \ArrayType\ArrayOfLine $lines
     * @param float $linesSummedWeights
     * @param int $loadmeter
     * @param int $locationId
     * @param string $locationName
     * @param \ArrayType\ArrayOfMessage $messages
     * @param string $number
     * @param int $numberOfPackages
     * @param string $orderNumber
     * @param string $originPostcode
     * @param string $originTerminal
     * @param string $packageUid
     * @param string $payerAccountAtCarrier
     * @param string $physicalInstallationId
     * @param string $pickupDate
     * @param string $pickupTerminal
     * @param int $productId
     * @param bool $productIsReturn
     * @param string $productName
     * @param \ArrayType\ArrayOfReference $references
     * @param int $returnPackaging
     * @param string $searchKey
     * @param string $senderAccountAtBank
     * @param string $senderAccountAtCarrier
     * @param \ArrayType\ArrayOfService $services
     * @param \ArrayType\ArrayOfShipmentConnection $shipmentConnections
     * @param int $shipmentCsid
     * @param \ArrayType\ArrayOfShipmentCustomDocument $shipmentCustomDocuments
     * @param \ArrayType\ArrayOfShipmentDocument $shipmentDocuments
     * @param string $shipmentKind
     * @param string $shipmentStatusText
     * @param string $shipmentTemperature
     * @param int $stackCsid
     * @param int $subcarrierId
     * @param string $subcarrierName
     * @param string $submitDate
     * @param string $transmitDate
     * @param bool $usedInstallationIsVirtual
     * @param float $volumeCM
     * @param int $width
     */
    public function __construct($actorCsid = null, $actorName = null, \ArrayType\ArrayOfAddress $addresses = null, \ArrayType\ArrayOfAmount $amounts = null, $barcode1 = null, $barcode2 = null, $batchCsid = null, $carriagePayer = null, $carrierId = null, $carrierName = null, $deleted = null, \ArrayType\ArrayOfDetailsGroup $detailGroups = null, $dimensionalWeight = null, $esid = null, \ArrayType\ArrayOfEvent $events = null, $expireDate = null, $freightBillsCount = null, \ArrayType\ArrayOfGenericCollection $genericCollections = null, $height = null, $importDate = null, $installationId = null, $installationName = null, $insuranceGroup = null, $isConceptCarrier = null, $isConceptProduct = null, $labelPrintDate = null, $labelsCount = null, $latestStatusText = null, $length = null, \ArrayType\ArrayOfLine $lines = null, $linesSummedWeights = null, $loadmeter = null, $locationId = null, $locationName = null, \ArrayType\ArrayOfMessage $messages = null, $number = null, $numberOfPackages = null, $orderNumber = null, $originPostcode = null, $originTerminal = null, $packageUid = null, $payerAccountAtCarrier = null, $physicalInstallationId = null, $pickupDate = null, $pickupTerminal = null, $productId = null, $productIsReturn = null, $productName = null, \ArrayType\ArrayOfReference $references = null, $returnPackaging = null, $searchKey = null, $senderAccountAtBank = null, $senderAccountAtCarrier = null, \ArrayType\ArrayOfService $services = null, \ArrayType\ArrayOfShipmentConnection $shipmentConnections = null, $shipmentCsid = null, \ArrayType\ArrayOfShipmentCustomDocument $shipmentCustomDocuments = null, \ArrayType\ArrayOfShipmentDocument $shipmentDocuments = null, $shipmentKind = null, $shipmentStatusText = null, $shipmentTemperature = null, $stackCsid = null, $subcarrierId = null, $subcarrierName = null, $submitDate = null, $transmitDate = null, $usedInstallationIsVirtual = null, $volumeCM = null, $width = null)
    {
        $this
            ->setActorCsid($actorCsid)
            ->setActorName($actorName)
            ->setAddresses($addresses)
            ->setAmounts($amounts)
            ->setBarcode1($barcode1)
            ->setBarcode2($barcode2)
            ->setBatchCsid($batchCsid)
            ->setCarriagePayer($carriagePayer)
            ->setCarrierId($carrierId)
            ->setCarrierName($carrierName)
            ->setDeleted($deleted)
            ->setDetailGroups($detailGroups)
            ->setDimensionalWeight($dimensionalWeight)
            ->setEsid($esid)
            ->setEvents($events)
            ->setExpireDate($expireDate)
            ->setFreightBillsCount($freightBillsCount)
            ->setGenericCollections($genericCollections)
            ->setHeight($height)
            ->setImportDate($importDate)
            ->setInstallationId($installationId)
            ->setInstallationName($installationName)
            ->setInsuranceGroup($insuranceGroup)
            ->setIsConceptCarrier($isConceptCarrier)
            ->setIsConceptProduct($isConceptProduct)
            ->setLabelPrintDate($labelPrintDate)
            ->setLabelsCount($labelsCount)
            ->setLatestStatusText($latestStatusText)
            ->setLength($length)
            ->setLines($lines)
            ->setLinesSummedWeights($linesSummedWeights)
            ->setLoadmeter($loadmeter)
            ->setLocationId($locationId)
            ->setLocationName($locationName)
            ->setMessages($messages)
            ->setNumber($number)
            ->setNumberOfPackages($numberOfPackages)
            ->setOrderNumber($orderNumber)
            ->setOriginPostcode($originPostcode)
            ->setOriginTerminal($originTerminal)
            ->setPackageUid($packageUid)
            ->setPayerAccountAtCarrier($payerAccountAtCarrier)
            ->setPhysicalInstallationId($physicalInstallationId)
            ->setPickupDate($pickupDate)
            ->setPickupTerminal($pickupTerminal)
            ->setProductId($productId)
            ->setProductIsReturn($productIsReturn)
            ->setProductName($productName)
            ->setReferences($references)
            ->setReturnPackaging($returnPackaging)
            ->setSearchKey($searchKey)
            ->setSenderAccountAtBank($senderAccountAtBank)
            ->setSenderAccountAtCarrier($senderAccountAtCarrier)
            ->setServices($services)
            ->setShipmentConnections($shipmentConnections)
            ->setShipmentCsid($shipmentCsid)
            ->setShipmentCustomDocuments($shipmentCustomDocuments)
            ->setShipmentDocuments($shipmentDocuments)
            ->setShipmentKind($shipmentKind)
            ->setShipmentStatusText($shipmentStatusText)
            ->setShipmentTemperature($shipmentTemperature)
            ->setStackCsid($stackCsid)
            ->setSubcarrierId($subcarrierId)
            ->setSubcarrierName($subcarrierName)
            ->setSubmitDate($submitDate)
            ->setTransmitDate($transmitDate)
            ->setUsedInstallationIsVirtual($usedInstallationIsVirtual)
            ->setVolumeCM($volumeCM)
            ->setWidth($width);
    }
    /**
     * Get ActorCsid value
     * @return int|null
     */
    public function getActorCsid()
    {
        return $this->ActorCsid;
    }
    /**
     * Set ActorCsid value
     * @param int $actorCsid
     * @return \StructType\Shipment
     */
    public function setActorCsid($actorCsid = null)
    {
        // validation for constraint: int
        if (!is_null($actorCsid) && !is_numeric($actorCsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($actorCsid)), __LINE__);
        }
        $this->ActorCsid = $actorCsid;
        return $this;
    }
    /**
     * Get ActorName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActorName()
    {
        return isset($this->ActorName) ? $this->ActorName : null;
    }
    /**
     * Set ActorName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $actorName
     * @return \StructType\Shipment
     */
    public function setActorName($actorName = null)
    {
        // validation for constraint: string
        if (!is_null($actorName) && !is_string($actorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actorName)), __LINE__);
        }
        if (is_null($actorName) || (is_array($actorName) && empty($actorName))) {
            unset($this->ActorName);
        } else {
            $this->ActorName = $actorName;
        }
        return $this;
    }
    /**
     * Get Addresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAddress|null
     */
    public function getAddresses()
    {
        return isset($this->Addresses) ? $this->Addresses : null;
    }
    /**
     * Set Addresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAddress $addresses
     * @return \StructType\Shipment
     */
    public function setAddresses(\ArrayType\ArrayOfAddress $addresses = null)
    {
        if (is_null($addresses) || (is_array($addresses) && empty($addresses))) {
            unset($this->Addresses);
        } else {
            $this->Addresses = $addresses;
        }
        return $this;
    }
    /**
     * Get Amounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfAmount|null
     */
    public function getAmounts()
    {
        return isset($this->Amounts) ? $this->Amounts : null;
    }
    /**
     * Set Amounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfAmount $amounts
     * @return \StructType\Shipment
     */
    public function setAmounts(\ArrayType\ArrayOfAmount $amounts = null)
    {
        if (is_null($amounts) || (is_array($amounts) && empty($amounts))) {
            unset($this->Amounts);
        } else {
            $this->Amounts = $amounts;
        }
        return $this;
    }
    /**
     * Get Barcode1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode1()
    {
        return isset($this->Barcode1) ? $this->Barcode1 : null;
    }
    /**
     * Set Barcode1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode1
     * @return \StructType\Shipment
     */
    public function setBarcode1($barcode1 = null)
    {
        // validation for constraint: string
        if (!is_null($barcode1) && !is_string($barcode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode1)), __LINE__);
        }
        if (is_null($barcode1) || (is_array($barcode1) && empty($barcode1))) {
            unset($this->Barcode1);
        } else {
            $this->Barcode1 = $barcode1;
        }
        return $this;
    }
    /**
     * Get Barcode2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode2()
    {
        return isset($this->Barcode2) ? $this->Barcode2 : null;
    }
    /**
     * Set Barcode2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode2
     * @return \StructType\Shipment
     */
    public function setBarcode2($barcode2 = null)
    {
        // validation for constraint: string
        if (!is_null($barcode2) && !is_string($barcode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode2)), __LINE__);
        }
        if (is_null($barcode2) || (is_array($barcode2) && empty($barcode2))) {
            unset($this->Barcode2);
        } else {
            $this->Barcode2 = $barcode2;
        }
        return $this;
    }
    /**
     * Get BatchCsid value
     * @return int|null
     */
    public function getBatchCsid()
    {
        return $this->BatchCsid;
    }
    /**
     * Set BatchCsid value
     * @param int $batchCsid
     * @return \StructType\Shipment
     */
    public function setBatchCsid($batchCsid = null)
    {
        // validation for constraint: int
        if (!is_null($batchCsid) && !is_numeric($batchCsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchCsid)), __LINE__);
        }
        $this->BatchCsid = $batchCsid;
        return $this;
    }
    /**
     * Get CarriagePayer value
     * @return string|null
     */
    public function getCarriagePayer()
    {
        return $this->CarriagePayer;
    }
    /**
     * Set CarriagePayer value
     * @uses \EnumType\CarriagePayer::valueIsValid()
     * @uses \EnumType\CarriagePayer::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carriagePayer
     * @return \StructType\Shipment
     */
    public function setCarriagePayer($carriagePayer = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CarriagePayer::valueIsValid($carriagePayer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carriagePayer, implode(', ', \EnumType\CarriagePayer::getValidValues())), __LINE__);
        }
        $this->CarriagePayer = $carriagePayer;
        return $this;
    }
    /**
     * Get CarrierId value
     * @return int|null
     */
    public function getCarrierId()
    {
        return $this->CarrierId;
    }
    /**
     * Set CarrierId value
     * @param int $carrierId
     * @return \StructType\Shipment
     */
    public function setCarrierId($carrierId = null)
    {
        // validation for constraint: int
        if (!is_null($carrierId) && !is_numeric($carrierId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($carrierId)), __LINE__);
        }
        $this->CarrierId = $carrierId;
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
     * @return \StructType\Shipment
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
     * @return \StructType\Shipment
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
     * Get DetailGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDetailsGroup|null
     */
    public function getDetailGroups()
    {
        return isset($this->DetailGroups) ? $this->DetailGroups : null;
    }
    /**
     * Set DetailGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDetailsGroup $detailGroups
     * @return \StructType\Shipment
     */
    public function setDetailGroups(\ArrayType\ArrayOfDetailsGroup $detailGroups = null)
    {
        if (is_null($detailGroups) || (is_array($detailGroups) && empty($detailGroups))) {
            unset($this->DetailGroups);
        } else {
            $this->DetailGroups = $detailGroups;
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
     * @return \StructType\Shipment
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
     * Get Esid value
     * @return int|null
     */
    public function getEsid()
    {
        return $this->Esid;
    }
    /**
     * Set Esid value
     * @param int $esid
     * @return \StructType\Shipment
     */
    public function setEsid($esid = null)
    {
        // validation for constraint: int
        if (!is_null($esid) && !is_numeric($esid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($esid)), __LINE__);
        }
        $this->Esid = $esid;
        return $this;
    }
    /**
     * Get Events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfEvent|null
     */
    public function getEvents()
    {
        return isset($this->Events) ? $this->Events : null;
    }
    /**
     * Set Events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfEvent $events
     * @return \StructType\Shipment
     */
    public function setEvents(\ArrayType\ArrayOfEvent $events = null)
    {
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->Events);
        } else {
            $this->Events = $events;
        }
        return $this;
    }
    /**
     * Get ExpireDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpireDate()
    {
        return isset($this->ExpireDate) ? $this->ExpireDate : null;
    }
    /**
     * Set ExpireDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expireDate
     * @return \StructType\Shipment
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        if (is_null($expireDate) || (is_array($expireDate) && empty($expireDate))) {
            unset($this->ExpireDate);
        } else {
            $this->ExpireDate = $expireDate;
        }
        return $this;
    }
    /**
     * Get FreightBillsCount value
     * @return int|null
     */
    public function getFreightBillsCount()
    {
        return $this->FreightBillsCount;
    }
    /**
     * Set FreightBillsCount value
     * @param int $freightBillsCount
     * @return \StructType\Shipment
     */
    public function setFreightBillsCount($freightBillsCount = null)
    {
        // validation for constraint: int
        if (!is_null($freightBillsCount) && !is_numeric($freightBillsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($freightBillsCount)), __LINE__);
        }
        $this->FreightBillsCount = $freightBillsCount;
        return $this;
    }
    /**
     * Get GenericCollections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfGenericCollection|null
     */
    public function getGenericCollections()
    {
        return isset($this->GenericCollections) ? $this->GenericCollections : null;
    }
    /**
     * Set GenericCollections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfGenericCollection $genericCollections
     * @return \StructType\Shipment
     */
    public function setGenericCollections(\ArrayType\ArrayOfGenericCollection $genericCollections = null)
    {
        if (is_null($genericCollections) || (is_array($genericCollections) && empty($genericCollections))) {
            unset($this->GenericCollections);
        } else {
            $this->GenericCollections = $genericCollections;
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
     * @return \StructType\Shipment
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
     * Get ImportDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImportDate()
    {
        return isset($this->ImportDate) ? $this->ImportDate : null;
    }
    /**
     * Set ImportDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $importDate
     * @return \StructType\Shipment
     */
    public function setImportDate($importDate = null)
    {
        // validation for constraint: string
        if (!is_null($importDate) && !is_string($importDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($importDate)), __LINE__);
        }
        if (is_null($importDate) || (is_array($importDate) && empty($importDate))) {
            unset($this->ImportDate);
        } else {
            $this->ImportDate = $importDate;
        }
        return $this;
    }
    /**
     * Get InstallationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstallationId()
    {
        return isset($this->InstallationId) ? $this->InstallationId : null;
    }
    /**
     * Set InstallationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $installationId
     * @return \StructType\Shipment
     */
    public function setInstallationId($installationId = null)
    {
        // validation for constraint: string
        if (!is_null($installationId) && !is_string($installationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($installationId)), __LINE__);
        }
        if (is_null($installationId) || (is_array($installationId) && empty($installationId))) {
            unset($this->InstallationId);
        } else {
            $this->InstallationId = $installationId;
        }
        return $this;
    }
    /**
     * Get InstallationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstallationName()
    {
        return isset($this->InstallationName) ? $this->InstallationName : null;
    }
    /**
     * Set InstallationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $installationName
     * @return \StructType\Shipment
     */
    public function setInstallationName($installationName = null)
    {
        // validation for constraint: string
        if (!is_null($installationName) && !is_string($installationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($installationName)), __LINE__);
        }
        if (is_null($installationName) || (is_array($installationName) && empty($installationName))) {
            unset($this->InstallationName);
        } else {
            $this->InstallationName = $installationName;
        }
        return $this;
    }
    /**
     * Get InsuranceGroup value
     * @return int|null
     */
    public function getInsuranceGroup()
    {
        return $this->InsuranceGroup;
    }
    /**
     * Set InsuranceGroup value
     * @param int $insuranceGroup
     * @return \StructType\Shipment
     */
    public function setInsuranceGroup($insuranceGroup = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceGroup) && !is_numeric($insuranceGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceGroup)), __LINE__);
        }
        $this->InsuranceGroup = $insuranceGroup;
        return $this;
    }
    /**
     * Get IsConceptCarrier value
     * @return bool|null
     */
    public function getIsConceptCarrier()
    {
        return $this->IsConceptCarrier;
    }
    /**
     * Set IsConceptCarrier value
     * @param bool $isConceptCarrier
     * @return \StructType\Shipment
     */
    public function setIsConceptCarrier($isConceptCarrier = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConceptCarrier) && !is_bool($isConceptCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConceptCarrier)), __LINE__);
        }
        $this->IsConceptCarrier = $isConceptCarrier;
        return $this;
    }
    /**
     * Get IsConceptProduct value
     * @return bool|null
     */
    public function getIsConceptProduct()
    {
        return $this->IsConceptProduct;
    }
    /**
     * Set IsConceptProduct value
     * @param bool $isConceptProduct
     * @return \StructType\Shipment
     */
    public function setIsConceptProduct($isConceptProduct = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConceptProduct) && !is_bool($isConceptProduct)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConceptProduct)), __LINE__);
        }
        $this->IsConceptProduct = $isConceptProduct;
        return $this;
    }
    /**
     * Get LabelPrintDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLabelPrintDate()
    {
        return isset($this->LabelPrintDate) ? $this->LabelPrintDate : null;
    }
    /**
     * Set LabelPrintDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $labelPrintDate
     * @return \StructType\Shipment
     */
    public function setLabelPrintDate($labelPrintDate = null)
    {
        // validation for constraint: string
        if (!is_null($labelPrintDate) && !is_string($labelPrintDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelPrintDate)), __LINE__);
        }
        if (is_null($labelPrintDate) || (is_array($labelPrintDate) && empty($labelPrintDate))) {
            unset($this->LabelPrintDate);
        } else {
            $this->LabelPrintDate = $labelPrintDate;
        }
        return $this;
    }
    /**
     * Get LabelsCount value
     * @return int|null
     */
    public function getLabelsCount()
    {
        return $this->LabelsCount;
    }
    /**
     * Set LabelsCount value
     * @param int $labelsCount
     * @return \StructType\Shipment
     */
    public function setLabelsCount($labelsCount = null)
    {
        // validation for constraint: int
        if (!is_null($labelsCount) && !is_numeric($labelsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($labelsCount)), __LINE__);
        }
        $this->LabelsCount = $labelsCount;
        return $this;
    }
    /**
     * Get LatestStatusText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLatestStatusText()
    {
        return isset($this->LatestStatusText) ? $this->LatestStatusText : null;
    }
    /**
     * Set LatestStatusText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $latestStatusText
     * @return \StructType\Shipment
     */
    public function setLatestStatusText($latestStatusText = null)
    {
        // validation for constraint: string
        if (!is_null($latestStatusText) && !is_string($latestStatusText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestStatusText)), __LINE__);
        }
        if (is_null($latestStatusText) || (is_array($latestStatusText) && empty($latestStatusText))) {
            unset($this->LatestStatusText);
        } else {
            $this->LatestStatusText = $latestStatusText;
        }
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
     * @return \StructType\Shipment
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
     * Get Lines value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLine|null
     */
    public function getLines()
    {
        return isset($this->Lines) ? $this->Lines : null;
    }
    /**
     * Set Lines value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLine $lines
     * @return \StructType\Shipment
     */
    public function setLines(\ArrayType\ArrayOfLine $lines = null)
    {
        if (is_null($lines) || (is_array($lines) && empty($lines))) {
            unset($this->Lines);
        } else {
            $this->Lines = $lines;
        }
        return $this;
    }
    /**
     * Get LinesSummedWeights value
     * @return float|null
     */
    public function getLinesSummedWeights()
    {
        return $this->LinesSummedWeights;
    }
    /**
     * Set LinesSummedWeights value
     * @param float $linesSummedWeights
     * @return \StructType\Shipment
     */
    public function setLinesSummedWeights($linesSummedWeights = null)
    {
        $this->LinesSummedWeights = $linesSummedWeights;
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
     * @return \StructType\Shipment
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
     * @return \StructType\Shipment
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
     * Get LocationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationName()
    {
        return isset($this->LocationName) ? $this->LocationName : null;
    }
    /**
     * Set LocationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationName
     * @return \StructType\Shipment
     */
    public function setLocationName($locationName = null)
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationName)), __LINE__);
        }
        if (is_null($locationName) || (is_array($locationName) && empty($locationName))) {
            unset($this->LocationName);
        } else {
            $this->LocationName = $locationName;
        }
        return $this;
    }
    /**
     * Get Messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfMessage|null
     */
    public function getMessages()
    {
        return isset($this->Messages) ? $this->Messages : null;
    }
    /**
     * Set Messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfMessage $messages
     * @return \StructType\Shipment
     */
    public function setMessages(\ArrayType\ArrayOfMessage $messages = null)
    {
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->Messages);
        } else {
            $this->Messages = $messages;
        }
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber()
    {
        return isset($this->Number) ? $this->Number : null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \StructType\Shipment
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        return $this;
    }
    /**
     * Get NumberOfPackages value
     * @return int|null
     */
    public function getNumberOfPackages()
    {
        return $this->NumberOfPackages;
    }
    /**
     * Set NumberOfPackages value
     * @param int $numberOfPackages
     * @return \StructType\Shipment
     */
    public function setNumberOfPackages($numberOfPackages = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPackages) && !is_numeric($numberOfPackages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPackages)), __LINE__);
        }
        $this->NumberOfPackages = $numberOfPackages;
        return $this;
    }
    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderNumber()
    {
        return isset($this->OrderNumber) ? $this->OrderNumber : null;
    }
    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderNumber
     * @return \StructType\Shipment
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }
        return $this;
    }
    /**
     * Get OriginPostcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginPostcode()
    {
        return isset($this->OriginPostcode) ? $this->OriginPostcode : null;
    }
    /**
     * Set OriginPostcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originPostcode
     * @return \StructType\Shipment
     */
    public function setOriginPostcode($originPostcode = null)
    {
        // validation for constraint: string
        if (!is_null($originPostcode) && !is_string($originPostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originPostcode)), __LINE__);
        }
        if (is_null($originPostcode) || (is_array($originPostcode) && empty($originPostcode))) {
            unset($this->OriginPostcode);
        } else {
            $this->OriginPostcode = $originPostcode;
        }
        return $this;
    }
    /**
     * Get OriginTerminal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginTerminal()
    {
        return isset($this->OriginTerminal) ? $this->OriginTerminal : null;
    }
    /**
     * Set OriginTerminal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originTerminal
     * @return \StructType\Shipment
     */
    public function setOriginTerminal($originTerminal = null)
    {
        // validation for constraint: string
        if (!is_null($originTerminal) && !is_string($originTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originTerminal)), __LINE__);
        }
        if (is_null($originTerminal) || (is_array($originTerminal) && empty($originTerminal))) {
            unset($this->OriginTerminal);
        } else {
            $this->OriginTerminal = $originTerminal;
        }
        return $this;
    }
    /**
     * Get PackageUid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPackageUid()
    {
        return isset($this->PackageUid) ? $this->PackageUid : null;
    }
    /**
     * Set PackageUid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $packageUid
     * @return \StructType\Shipment
     */
    public function setPackageUid($packageUid = null)
    {
        // validation for constraint: string
        if (!is_null($packageUid) && !is_string($packageUid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageUid)), __LINE__);
        }
        if (is_null($packageUid) || (is_array($packageUid) && empty($packageUid))) {
            unset($this->PackageUid);
        } else {
            $this->PackageUid = $packageUid;
        }
        return $this;
    }
    /**
     * Get PayerAccountAtCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPayerAccountAtCarrier()
    {
        return isset($this->PayerAccountAtCarrier) ? $this->PayerAccountAtCarrier : null;
    }
    /**
     * Set PayerAccountAtCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $payerAccountAtCarrier
     * @return \StructType\Shipment
     */
    public function setPayerAccountAtCarrier($payerAccountAtCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($payerAccountAtCarrier) && !is_string($payerAccountAtCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($payerAccountAtCarrier)), __LINE__);
        }
        if (is_null($payerAccountAtCarrier) || (is_array($payerAccountAtCarrier) && empty($payerAccountAtCarrier))) {
            unset($this->PayerAccountAtCarrier);
        } else {
            $this->PayerAccountAtCarrier = $payerAccountAtCarrier;
        }
        return $this;
    }
    /**
     * Get PhysicalInstallationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhysicalInstallationId()
    {
        return isset($this->PhysicalInstallationId) ? $this->PhysicalInstallationId : null;
    }
    /**
     * Set PhysicalInstallationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $physicalInstallationId
     * @return \StructType\Shipment
     */
    public function setPhysicalInstallationId($physicalInstallationId = null)
    {
        // validation for constraint: string
        if (!is_null($physicalInstallationId) && !is_string($physicalInstallationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($physicalInstallationId)), __LINE__);
        }
        if (is_null($physicalInstallationId) || (is_array($physicalInstallationId) && empty($physicalInstallationId))) {
            unset($this->PhysicalInstallationId);
        } else {
            $this->PhysicalInstallationId = $physicalInstallationId;
        }
        return $this;
    }
    /**
     * Get PickupDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupDate()
    {
        return isset($this->PickupDate) ? $this->PickupDate : null;
    }
    /**
     * Set PickupDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupDate
     * @return \StructType\Shipment
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        if (is_null($pickupDate) || (is_array($pickupDate) && empty($pickupDate))) {
            unset($this->PickupDate);
        } else {
            $this->PickupDate = $pickupDate;
        }
        return $this;
    }
    /**
     * Get PickupTerminal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPickupTerminal()
    {
        return isset($this->PickupTerminal) ? $this->PickupTerminal : null;
    }
    /**
     * Set PickupTerminal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pickupTerminal
     * @return \StructType\Shipment
     */
    public function setPickupTerminal($pickupTerminal = null)
    {
        // validation for constraint: string
        if (!is_null($pickupTerminal) && !is_string($pickupTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupTerminal)), __LINE__);
        }
        if (is_null($pickupTerminal) || (is_array($pickupTerminal) && empty($pickupTerminal))) {
            unset($this->PickupTerminal);
        } else {
            $this->PickupTerminal = $pickupTerminal;
        }
        return $this;
    }
    /**
     * Get ProductId value
     * @return int|null
     */
    public function getProductId()
    {
        return $this->ProductId;
    }
    /**
     * Set ProductId value
     * @param int $productId
     * @return \StructType\Shipment
     */
    public function setProductId($productId = null)
    {
        // validation for constraint: int
        if (!is_null($productId) && !is_numeric($productId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productId)), __LINE__);
        }
        $this->ProductId = $productId;
        return $this;
    }
    /**
     * Get ProductIsReturn value
     * @return bool|null
     */
    public function getProductIsReturn()
    {
        return $this->ProductIsReturn;
    }
    /**
     * Set ProductIsReturn value
     * @param bool $productIsReturn
     * @return \StructType\Shipment
     */
    public function setProductIsReturn($productIsReturn = null)
    {
        // validation for constraint: boolean
        if (!is_null($productIsReturn) && !is_bool($productIsReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($productIsReturn)), __LINE__);
        }
        $this->ProductIsReturn = $productIsReturn;
        return $this;
    }
    /**
     * Get ProductName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductName()
    {
        return isset($this->ProductName) ? $this->ProductName : null;
    }
    /**
     * Set ProductName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productName
     * @return \StructType\Shipment
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productName)), __LINE__);
        }
        if (is_null($productName) || (is_array($productName) && empty($productName))) {
            unset($this->ProductName);
        } else {
            $this->ProductName = $productName;
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
     * @return \StructType\Shipment
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
     * Get ReturnPackaging value
     * @return int|null
     */
    public function getReturnPackaging()
    {
        return $this->ReturnPackaging;
    }
    /**
     * Set ReturnPackaging value
     * @param int $returnPackaging
     * @return \StructType\Shipment
     */
    public function setReturnPackaging($returnPackaging = null)
    {
        // validation for constraint: int
        if (!is_null($returnPackaging) && !is_numeric($returnPackaging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnPackaging)), __LINE__);
        }
        $this->ReturnPackaging = $returnPackaging;
        return $this;
    }
    /**
     * Get SearchKey value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSearchKey()
    {
        return isset($this->SearchKey) ? $this->SearchKey : null;
    }
    /**
     * Set SearchKey value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $searchKey
     * @return \StructType\Shipment
     */
    public function setSearchKey($searchKey = null)
    {
        // validation for constraint: string
        if (!is_null($searchKey) && !is_string($searchKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchKey)), __LINE__);
        }
        if (is_null($searchKey) || (is_array($searchKey) && empty($searchKey))) {
            unset($this->SearchKey);
        } else {
            $this->SearchKey = $searchKey;
        }
        return $this;
    }
    /**
     * Get SenderAccountAtBank value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderAccountAtBank()
    {
        return isset($this->SenderAccountAtBank) ? $this->SenderAccountAtBank : null;
    }
    /**
     * Set SenderAccountAtBank value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderAccountAtBank
     * @return \StructType\Shipment
     */
    public function setSenderAccountAtBank($senderAccountAtBank = null)
    {
        // validation for constraint: string
        if (!is_null($senderAccountAtBank) && !is_string($senderAccountAtBank)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderAccountAtBank)), __LINE__);
        }
        if (is_null($senderAccountAtBank) || (is_array($senderAccountAtBank) && empty($senderAccountAtBank))) {
            unset($this->SenderAccountAtBank);
        } else {
            $this->SenderAccountAtBank = $senderAccountAtBank;
        }
        return $this;
    }
    /**
     * Get SenderAccountAtCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderAccountAtCarrier()
    {
        return isset($this->SenderAccountAtCarrier) ? $this->SenderAccountAtCarrier : null;
    }
    /**
     * Set SenderAccountAtCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderAccountAtCarrier
     * @return \StructType\Shipment
     */
    public function setSenderAccountAtCarrier($senderAccountAtCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($senderAccountAtCarrier) && !is_string($senderAccountAtCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderAccountAtCarrier)), __LINE__);
        }
        if (is_null($senderAccountAtCarrier) || (is_array($senderAccountAtCarrier) && empty($senderAccountAtCarrier))) {
            unset($this->SenderAccountAtCarrier);
        } else {
            $this->SenderAccountAtCarrier = $senderAccountAtCarrier;
        }
        return $this;
    }
    /**
     * Get Services value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfService|null
     */
    public function getServices()
    {
        return isset($this->Services) ? $this->Services : null;
    }
    /**
     * Set Services value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfService $services
     * @return \StructType\Shipment
     */
    public function setServices(\ArrayType\ArrayOfService $services = null)
    {
        if (is_null($services) || (is_array($services) && empty($services))) {
            unset($this->Services);
        } else {
            $this->Services = $services;
        }
        return $this;
    }
    /**
     * Get ShipmentConnections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipmentConnection|null
     */
    public function getShipmentConnections()
    {
        return isset($this->ShipmentConnections) ? $this->ShipmentConnections : null;
    }
    /**
     * Set ShipmentConnections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipmentConnection $shipmentConnections
     * @return \StructType\Shipment
     */
    public function setShipmentConnections(\ArrayType\ArrayOfShipmentConnection $shipmentConnections = null)
    {
        if (is_null($shipmentConnections) || (is_array($shipmentConnections) && empty($shipmentConnections))) {
            unset($this->ShipmentConnections);
        } else {
            $this->ShipmentConnections = $shipmentConnections;
        }
        return $this;
    }
    /**
     * Get ShipmentCsid value
     * @return int|null
     */
    public function getShipmentCsid()
    {
        return $this->ShipmentCsid;
    }
    /**
     * Set ShipmentCsid value
     * @param int $shipmentCsid
     * @return \StructType\Shipment
     */
    public function setShipmentCsid($shipmentCsid = null)
    {
        // validation for constraint: int
        if (!is_null($shipmentCsid) && !is_numeric($shipmentCsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shipmentCsid)), __LINE__);
        }
        $this->ShipmentCsid = $shipmentCsid;
        return $this;
    }
    /**
     * Get ShipmentCustomDocuments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipmentCustomDocument|null
     */
    public function getShipmentCustomDocuments()
    {
        return isset($this->ShipmentCustomDocuments) ? $this->ShipmentCustomDocuments : null;
    }
    /**
     * Set ShipmentCustomDocuments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipmentCustomDocument $shipmentCustomDocuments
     * @return \StructType\Shipment
     */
    public function setShipmentCustomDocuments(\ArrayType\ArrayOfShipmentCustomDocument $shipmentCustomDocuments = null)
    {
        if (is_null($shipmentCustomDocuments) || (is_array($shipmentCustomDocuments) && empty($shipmentCustomDocuments))) {
            unset($this->ShipmentCustomDocuments);
        } else {
            $this->ShipmentCustomDocuments = $shipmentCustomDocuments;
        }
        return $this;
    }
    /**
     * Get ShipmentDocuments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfShipmentDocument|null
     */
    public function getShipmentDocuments()
    {
        return isset($this->ShipmentDocuments) ? $this->ShipmentDocuments : null;
    }
    /**
     * Set ShipmentDocuments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfShipmentDocument $shipmentDocuments
     * @return \StructType\Shipment
     */
    public function setShipmentDocuments(\ArrayType\ArrayOfShipmentDocument $shipmentDocuments = null)
    {
        if (is_null($shipmentDocuments) || (is_array($shipmentDocuments) && empty($shipmentDocuments))) {
            unset($this->ShipmentDocuments);
        } else {
            $this->ShipmentDocuments = $shipmentDocuments;
        }
        return $this;
    }
    /**
     * Get ShipmentKind value
     * @return string|null
     */
    public function getShipmentKind()
    {
        return $this->ShipmentKind;
    }
    /**
     * Set ShipmentKind value
     * @uses \EnumType\ShipmentKind::valueIsValid()
     * @uses \EnumType\ShipmentKind::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipmentKind
     * @return \StructType\Shipment
     */
    public function setShipmentKind($shipmentKind = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShipmentKind::valueIsValid($shipmentKind)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipmentKind, implode(', ', \EnumType\ShipmentKind::getValidValues())), __LINE__);
        }
        $this->ShipmentKind = $shipmentKind;
        return $this;
    }
    /**
     * Get ShipmentStatusText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShipmentStatusText()
    {
        return isset($this->ShipmentStatusText) ? $this->ShipmentStatusText : null;
    }
    /**
     * Set ShipmentStatusText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shipmentStatusText
     * @return \StructType\Shipment
     */
    public function setShipmentStatusText($shipmentStatusText = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentStatusText) && !is_string($shipmentStatusText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipmentStatusText)), __LINE__);
        }
        if (is_null($shipmentStatusText) || (is_array($shipmentStatusText) && empty($shipmentStatusText))) {
            unset($this->ShipmentStatusText);
        } else {
            $this->ShipmentStatusText = $shipmentStatusText;
        }
        return $this;
    }
    /**
     * Get ShipmentTemperature value
     * @return string|null
     */
    public function getShipmentTemperature()
    {
        return $this->ShipmentTemperature;
    }
    /**
     * Set ShipmentTemperature value
     * @uses \EnumType\ShipmentTemperature::valueIsValid()
     * @uses \EnumType\ShipmentTemperature::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shipmentTemperature
     * @return \StructType\Shipment
     */
    public function setShipmentTemperature($shipmentTemperature = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ShipmentTemperature::valueIsValid($shipmentTemperature)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $shipmentTemperature, implode(', ', \EnumType\ShipmentTemperature::getValidValues())), __LINE__);
        }
        $this->ShipmentTemperature = $shipmentTemperature;
        return $this;
    }
    /**
     * Get StackCsid value
     * @return int|null
     */
    public function getStackCsid()
    {
        return $this->StackCsid;
    }
    /**
     * Set StackCsid value
     * @param int $stackCsid
     * @return \StructType\Shipment
     */
    public function setStackCsid($stackCsid = null)
    {
        // validation for constraint: int
        if (!is_null($stackCsid) && !is_numeric($stackCsid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($stackCsid)), __LINE__);
        }
        $this->StackCsid = $stackCsid;
        return $this;
    }
    /**
     * Get SubcarrierId value
     * @return int|null
     */
    public function getSubcarrierId()
    {
        return $this->SubcarrierId;
    }
    /**
     * Set SubcarrierId value
     * @param int $subcarrierId
     * @return \StructType\Shipment
     */
    public function setSubcarrierId($subcarrierId = null)
    {
        // validation for constraint: int
        if (!is_null($subcarrierId) && !is_numeric($subcarrierId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($subcarrierId)), __LINE__);
        }
        $this->SubcarrierId = $subcarrierId;
        return $this;
    }
    /**
     * Get SubcarrierName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubcarrierName()
    {
        return isset($this->SubcarrierName) ? $this->SubcarrierName : null;
    }
    /**
     * Set SubcarrierName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subcarrierName
     * @return \StructType\Shipment
     */
    public function setSubcarrierName($subcarrierName = null)
    {
        // validation for constraint: string
        if (!is_null($subcarrierName) && !is_string($subcarrierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subcarrierName)), __LINE__);
        }
        if (is_null($subcarrierName) || (is_array($subcarrierName) && empty($subcarrierName))) {
            unset($this->SubcarrierName);
        } else {
            $this->SubcarrierName = $subcarrierName;
        }
        return $this;
    }
    /**
     * Get SubmitDate value
     * @return string|null
     */
    public function getSubmitDate()
    {
        return $this->SubmitDate;
    }
    /**
     * Set SubmitDate value
     * @param string $submitDate
     * @return \StructType\Shipment
     */
    public function setSubmitDate($submitDate = null)
    {
        // validation for constraint: string
        if (!is_null($submitDate) && !is_string($submitDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($submitDate)), __LINE__);
        }
        $this->SubmitDate = $submitDate;
        return $this;
    }
    /**
     * Get TransmitDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransmitDate()
    {
        return isset($this->TransmitDate) ? $this->TransmitDate : null;
    }
    /**
     * Set TransmitDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transmitDate
     * @return \StructType\Shipment
     */
    public function setTransmitDate($transmitDate = null)
    {
        // validation for constraint: string
        if (!is_null($transmitDate) && !is_string($transmitDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transmitDate)), __LINE__);
        }
        if (is_null($transmitDate) || (is_array($transmitDate) && empty($transmitDate))) {
            unset($this->TransmitDate);
        } else {
            $this->TransmitDate = $transmitDate;
        }
        return $this;
    }
    /**
     * Get UsedInstallationIsVirtual value
     * @return bool|null
     */
    public function getUsedInstallationIsVirtual()
    {
        return $this->UsedInstallationIsVirtual;
    }
    /**
     * Set UsedInstallationIsVirtual value
     * @param bool $usedInstallationIsVirtual
     * @return \StructType\Shipment
     */
    public function setUsedInstallationIsVirtual($usedInstallationIsVirtual = null)
    {
        // validation for constraint: boolean
        if (!is_null($usedInstallationIsVirtual) && !is_bool($usedInstallationIsVirtual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($usedInstallationIsVirtual)), __LINE__);
        }
        $this->UsedInstallationIsVirtual = $usedInstallationIsVirtual;
        return $this;
    }
    /**
     * Get VolumeCM value
     * @return float|null
     */
    public function getVolumeCM()
    {
        return $this->VolumeCM;
    }
    /**
     * Set VolumeCM value
     * @param float $volumeCM
     * @return \StructType\Shipment
     */
    public function setVolumeCM($volumeCM = null)
    {
        $this->VolumeCM = $volumeCM;
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
     * @return \StructType\Shipment
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
     * @return \StructType\Shipment
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
