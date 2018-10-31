<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetShipmentsByShipmentNumber' => '\\StructType\\GetShipmentsByShipmentNumber',
            'GetShipmentsByShipmentNumberResponse' => '\\StructType\\GetShipmentsByShipmentNumberResponse',
            'GetShipmentsByOrderNumber' => '\\StructType\\GetShipmentsByOrderNumber',
            'GetShipmentsByOrderNumberResponse' => '\\StructType\\GetShipmentsByOrderNumberResponse',
            'GetShipmentsByPackageNumber' => '\\StructType\\GetShipmentsByPackageNumber',
            'GetShipmentsByPackageNumberResponse' => '\\StructType\\GetShipmentsByPackageNumberResponse',
            'GetShipmentsByDateRange' => '\\StructType\\GetShipmentsByDateRange',
            'GetShipmentsByDateRangeResponse' => '\\StructType\\GetShipmentsByDateRangeResponse',
            'GetEvents' => '\\StructType\\GetEvents',
            'GetEventsResponse' => '\\StructType\\GetEventsResponse',
            'GetCarrierEventsByEventCode' => '\\StructType\\GetCarrierEventsByEventCode',
            'GetCarrierEventsByEventCodeResponse' => '\\StructType\\GetCarrierEventsByEventCodeResponse',
            'GetShipmentStatus' => '\\StructType\\GetShipmentStatus',
            'GetShipmentStatusResponse' => '\\StructType\\GetShipmentStatusResponse',
            'SendEvent' => '\\StructType\\SendEvent',
            'SendEventResponse' => '\\StructType\\SendEventResponse',
            'IsShipmentClosed' => '\\StructType\\IsShipmentClosed',
            'IsShipmentClosedResponse' => '\\StructType\\IsShipmentClosedResponse',
            'CheckHealth' => '\\StructType\\CheckHealth',
            'CheckHealthResponse' => '\\StructType\\CheckHealthResponse',
            'HealthCheck' => '\\StructType\\HealthCheck',
            'HealthCheckResponse' => '\\StructType\\HealthCheckResponse',
            'ArrayOfint' => '\\ArrayType\\ArrayOfint',
            'ArrayOfstring' => '\\ArrayType\\ArrayOfstring',
            'ArrayOfShipment' => '\\ArrayType\\ArrayOfShipment',
            'Shipment' => '\\StructType\\Shipment',
            'ArrayOfAddress' => '\\ArrayType\\ArrayOfAddress',
            'Address' => '\\StructType\\Address',
            'ArrayOfAmount' => '\\ArrayType\\ArrayOfAmount',
            'Amount' => '\\StructType\\Amount',
            'ArrayOfDetailsGroup' => '\\ArrayType\\ArrayOfDetailsGroup',
            'DetailsGroup' => '\\StructType\\DetailsGroup',
            'ArrayOfDetailRow' => '\\ArrayType\\ArrayOfDetailRow',
            'DetailRow' => '\\StructType\\DetailRow',
            'ArrayOfDetail' => '\\ArrayType\\ArrayOfDetail',
            'Detail' => '\\StructType\\Detail',
            'ArrayOfEvent' => '\\ArrayType\\ArrayOfEvent',
            'Event' => '\\StructType\\Event',
            'ArrayOfDynamicProperty' => '\\ArrayType\\ArrayOfDynamicProperty',
            'DynamicProperty' => '\\StructType\\DynamicProperty',
            'EventParent' => '\\StructType\\EventParent',
            'SubEvent' => '\\StructType\\SubEvent',
            'ArrayOfSubEvent' => '\\ArrayType\\ArrayOfSubEvent',
            'ArrayOfGenericCollection' => '\\ArrayType\\ArrayOfGenericCollection',
            'GenericCollection' => '\\StructType\\GenericCollection',
            'Content' => '\\StructType\\Content',
            'ArrayOfLine' => '\\ArrayType\\ArrayOfLine',
            'Line' => '\\StructType\\Line',
            'ArrayOfDangerousGoods' => '\\ArrayType\\ArrayOfDangerousGoods',
            'DangerousGoods' => '\\StructType\\DangerousGoods',
            'ArrayOfPackage' => '\\ArrayType\\ArrayOfPackage',
            'Package' => '\\StructType\\Package',
            'ArrayOfReference' => '\\ArrayType\\ArrayOfReference',
            'Reference' => '\\StructType\\Reference',
            'Details' => '\\StructType\\Details',
            'ArrayOfMessage' => '\\ArrayType\\ArrayOfMessage',
            'Message' => '\\StructType\\Message',
            'ArrayOfService' => '\\ArrayType\\ArrayOfService',
            'Service' => '\\StructType\\Service',
            'ArrayOfShipmentConnection' => '\\ArrayType\\ArrayOfShipmentConnection',
            'ShipmentConnection' => '\\StructType\\ShipmentConnection',
            'ArrayOfStatusInfo' => '\\ArrayType\\ArrayOfStatusInfo',
            'StatusInfo' => '\\StructType\\StatusInfo',
            'ArrayOfLineUnit' => '\\ArrayType\\ArrayOfLineUnit',
            'LineUnit' => '\\StructType\\LineUnit',
            'GenericEntity' => '\\StructType\\GenericEntity',
            'ArrayOfShipmentCustomDocument' => '\\ArrayType\\ArrayOfShipmentCustomDocument',
            'ShipmentCustomDocument' => '\\StructType\\ShipmentCustomDocument',
            'BinaryContent' => '\\StructType\\BinaryContent',
            'DocumentAccess' => '\\StructType\\DocumentAccess',
            'ArrayOfShipmentDocument' => '\\ArrayType\\ArrayOfShipmentDocument',
            'ShipmentDocument' => '\\StructType\\ShipmentDocument',
            'ImportEvent' => '\\StructType\\ImportEvent',
            'Identifier' => '\\StructType\\Identifier',
            'HealthResponse' => '\\StructType\\HealthResponse',
        );
    }
}
