<?php

namespace Rasim\Payu\Classes;

/**
 * Payu Paroduct Class
 */
class PayuProduct {
    const DEBUG_NONE='0';
    const DEBUG_ALL='9999';
    const DEBUG_ERROR='2';
    const DEBUG_WARNING='1';

    const PRICE_TYPE_GROSS = 'GROSS'; // price includes VAT
    const PRICE_TYPE_NET = 'NET';   // price does not include VAT

    const PAY_OPTION_VISA = 'VISA';
    const PAY_OPTION_MASTERCARD = 'MASTERCARD';
    const PAY_OPTION_MAESTRO = 'MAESTRO';
    const PAY_OPTION_VISA_ELECTRON = 'VISA ELECTRON';
    const PAY_OPTION_ALL = 'ALL';

    const PAY_METHOD_CCVISAMC = 'CCVISAMC';
  
    public $productName = '';
    public $productCode = '';
    public $productInfo = '';
    public $productPrice = '';
    public $productPriceType = '';
    public $productQuantity = '';
    public $productVat = '';
    public $Discount = '';
    public $customFields = array();
    private $_errorLog = array();

    function __construct($productName='', $productCode='', $productInfo='', $productPrice='', $productPriceType='', $productQuantity='', $productTax='')
    {
        $this->setName($productName);
        $this->setCode($productCode);
        $this->setInfo($productInfo);
        $this->setPrice($productPrice);
        $this->setPriceType($productPriceType);
        $this->setQuantity($productQuantity);
        $this->setTax($productTax);

        
    }

    public function addCustomField($fieldName, $fieldValue)
    {
        if (!$fieldName) {
            return 0;
        }
        $this->customFields[$fieldName] = $fieldValue;
        
    }

    public function setName($productName)
    {
        $this->productName = $productName;
        
    }

    public function setCode($setCode)
    {
        $this->productCode = $setCode;
        
    }

    public function setInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        
    }

    public function setPrice($productPrice)
    {
        $this->productPrice = $productPrice;
        
    }

    public function setPriceType($productPriceType)
    {
        $this->productPriceType = $productPriceType;
        
    }

    public function setQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;
        
    }

    public function setTax($productVat)
    {
        $this->productVat = $productVat;
        
    }
}