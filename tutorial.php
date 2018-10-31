<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://customer-api.consignorportal.com/PortalData/PortalData.svc?singleWsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://customer-api.consignorportal.com/PortalData/PortalData.svc?singleWsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetShipmentsByShipmentNumber operation/method
 */
if ($get->GetShipmentsByShipmentNumber(new \StructType\GetShipmentsByShipmentNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentsByOrderNumber operation/method
 */
if ($get->GetShipmentsByOrderNumber(new \StructType\GetShipmentsByOrderNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentsByPackageNumber operation/method
 */
if ($get->GetShipmentsByPackageNumber(new \StructType\GetShipmentsByPackageNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentsByDateRange operation/method
 */
if ($get->GetShipmentsByDateRange(new \StructType\GetShipmentsByDateRange()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetEvents operation/method
 */
if ($get->GetEvents(new \StructType\GetEvents()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCarrierEventsByEventCode operation/method
 */
if ($get->GetCarrierEventsByEventCode(new \StructType\GetCarrierEventsByEventCode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentStatus operation/method
 */
if ($get->GetShipmentStatus(new \StructType\GetShipmentStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
/**
 * Sample call for SendEvent operation/method
 */
if ($send->SendEvent(new \StructType\SendEvent()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \ServiceType\Is($options);
/**
 * Sample call for IsShipmentClosed operation/method
 */
if ($is->IsShipmentClosed(new \StructType\IsShipmentClosed()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \ServiceType\Check($options);
/**
 * Sample call for CheckHealth operation/method
 */
if ($check->CheckHealth(new \StructType\CheckHealth()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Health ServiceType
 */
$health = new \ServiceType\Health($options);
/**
 * Sample call for HealthCheck operation/method
 */
if ($health->HealthCheck(new \StructType\HealthCheck()) !== false) {
    print_r($health->getResult());
} else {
    print_r($health->getLastError());
}
