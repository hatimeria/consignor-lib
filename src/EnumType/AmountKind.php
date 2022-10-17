<?php

namespace EnumType;

/**
 * This class stands for AmountKind EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AmountKind
 * @subpackage Enumerations
 */
class AmountKind
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Price1'
     * @return string 'Price1'
     */
    const VALUE_PRICE_1 = 'Price1';
    /**
     * Constant for value 'Price2'
     * @return string 'Price2'
     */
    const VALUE_PRICE_2 = 'Price2';
    /**
     * Constant for value 'Price3'
     * @return string 'Price3'
     */
    const VALUE_PRICE_3 = 'Price3';
    /**
     * Constant for value 'InsuranceValue'
     * @return string 'InsuranceValue'
     */
    const VALUE_INSURANCE_VALUE = 'InsuranceValue';
    /**
     * Constant for value 'CodAmount'
     * @return string 'CodAmount'
     */
    const VALUE_COD_AMOUNT = 'CodAmount';
    /**
     * Constant for value 'CarrierSpecifiedPrice'
     * @return string 'CarrierSpecifiedPrice'
     */
    const VALUE_CARRIER_SPECIFIED_PRICE = 'CarrierSpecifiedPrice';
    /**
     * Constant for value 'CarrierSpecifiedCodAmount'
     * @return string 'CarrierSpecifiedCodAmount'
     */
    const VALUE_CARRIER_SPECIFIED_COD_AMOUNT = 'CarrierSpecifiedCodAmount';
    /**
     * Constant for value 'InsuranceAmountPerPackage'
     * @return string 'InsuranceAmountPerPackage'
     */
    const VALUE_INSURANCE_AMOUNT_PER_PACKAGE = 'InsuranceAmountPerPackage';
    /**
     * Constant for value 'FixedPrice'
     * @return string 'FixedPrice'
     */
    const VALUE_FIXED_PRICE = 'FixedPrice';
    /**
     * Constant for value 'InvoiceAmount'
     * @return string 'InvoiceAmount'
     */
    const VALUE_INVOICE_AMOUNT = 'InvoiceAmount';
    /**
     * Constant for value 'CodAmountOriginal'
     * @return string 'CodAmountOriginal'
     */
    const VALUE_COD_AMOUNT_ORIGINAL = 'CodAmountOriginal';
    /**
     * Constant for value 'ThirdPartyInsurance'
     * @return string 'ThirdPartyInsurance'
     */
    const VALUE_THIRD_PARTY_INSURANCE = 'ThirdPartyInsurance';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_PRICE_1
     * @uses self::VALUE_PRICE_2
     * @uses self::VALUE_PRICE_3
     * @uses self::VALUE_INSURANCE_VALUE
     * @uses self::VALUE_COD_AMOUNT
     * @uses self::VALUE_CARRIER_SPECIFIED_PRICE
     * @uses self::VALUE_CARRIER_SPECIFIED_COD_AMOUNT
     * @uses self::VALUE_INSURANCE_AMOUNT_PER_PACKAGE
     * @uses self::VALUE_FIXED_PRICE
     * @uses self::VALUE_INVOICE_AMOUNT
     * @uses self::VALUE_COD_AMOUNT_ORIGINAL
     * @uses self::VALUE_THIRD_PARTY_INSURANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_PRICE_1,
            self::VALUE_PRICE_2,
            self::VALUE_PRICE_3,
            self::VALUE_INSURANCE_VALUE,
            self::VALUE_COD_AMOUNT,
            self::VALUE_CARRIER_SPECIFIED_PRICE,
            self::VALUE_CARRIER_SPECIFIED_COD_AMOUNT,
            self::VALUE_INSURANCE_AMOUNT_PER_PACKAGE,
            self::VALUE_FIXED_PRICE,
            self::VALUE_INVOICE_AMOUNT,
            self::VALUE_COD_AMOUNT_ORIGINAL,
            self::VALUE_THIRD_PARTY_INSURANCE,
        );
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
