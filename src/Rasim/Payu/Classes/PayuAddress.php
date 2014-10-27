<?php

namespace Rasim\Payu\Classes;


/**
 * Payu Address Class
 */
class PayuAddress {

    const DEBUG_NONE='0';
    const DEBUG_ALL='9999';
    const DEBUG_ERROR='2';
    const DEBUG_WARNING='1';

    public $firstName;
    public $lastName;
    public $ciSerial;
    public $ciNumber;
    public $ciIssuer;
    public $cnp;
    public $company;
    public $fiscalCode;
    public $regNumber;
    public $bank;
    public $bankAccount;
    public $email;
    public $phone;
    public $fax;
    public $address;
    public $address2;
    public $zipCode;
    public $city;
    public $state;
    public $countryCode;
    private $_errorLog = array();

    function __construct($firstName='', $lastName='', $ciSerial='', $ciNumber='', $ciIssuer='', $cnp='', $company='', $fiscalCode='', $regNumber='', $bank='', $bankAccount='', $email='', $phone='', $fax='', $address='', $address2='', $zipCode='', $city='', $state='', $countryCode='') {
        if (!empty($firstName))
            $this->setFirstName($firstName);

        if (!empty($lastName))
            $this->setLastName($lastName);

        if (!empty($ciSerial))
            $this->setCiSerial($ciSerial);

        if (!empty($ciNumber))
            $this->setCiNumber($ciNumber);

        if (!empty($ciIssuer))
            $this->setCiIssuer($ciIssuer);

        if (!empty($cnp))
            $this->setCnp($cnp);

        if (!empty($company))
            $this->setCompany($company);

        if (!empty($fiscalCode))
            $this->setFiscalCode($fiscalCode);

        if (!empty($regNumber))
            $this->setRegNumber($regNumber);

        if (!empty($bank))
            $this->setBank($bank);

        if (!empty($bankAccount))
            $this->setBankAccount($bankAccount);

        if (!empty($email))
            $this->setEmail($email);

        if (!empty($phone))
            $this->setPhone($phone);

        if (!empty($fax))
            $this->setFax($fax);

        if (!empty($address))
            $this->setAddress($address);

        if (!empty($address2))
            $this->setAddress2($address2);

        if (!empty($zipCode))
            $this->setZipCode($zipCode);

        if (!empty($city))
            $this->setCity($city);

        if (!empty($state))
            $this->setState($state);

        if (!empty($countryCode))
            $this->setCountryCode($countryCode);

        
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        
    }

    public function setCiSerial($ciSerial) {
        $this->ciSerial = $ciSerial;
        
    }

    public function setCiNumber($ciNumber) {
        $this->ciNumber = $ciNumber;
        
    }

    public function setCiIssuer($ciIssuer) {
        $this->ciIssuer = $ciIssuer;
        
    }

    public function setCnp($cnp) {
        $this->cnp = $cnp;
        
    }

    public function setCompany($company) {
        $this->company = $company;
        
    }

    public function setFiscalCode($fiscalCode) {
        $this->fiscalCode = $fiscalCode;
        
    }

    public function setRegNumber($regNumber) {
        $this->regNumber = $regNumber;
        
    }

    public function setBank($bank) {
        $this->bank = $bank;
        
    }

    public function setBankAccount($bankAccount) {
        $this->bankAccount = $bankAccount;
        
    }

    public function setEmail($email) {
        $this->email = $email;
        
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        
    }

    public function setFax($fax) {
        $this->fax = $fax;
        
    }

    public function setAddress($address) {
        $this->address = $address;
        
    }

    public function setAddress2($address2) {
        $this->address2 = $address2;
        
    }

    public function setZipCode($zipCode) {
        $this->zipCode = $zipCode;
        
    }

    public function setCity($City) {
        $this->city = $City;
        
    }

    public function setState($State) {
        $this->state = $State;
        
    }

    public function setCountryCode($CountryCode) {
        $this->countryCode = $CountryCode;
        
    }
}