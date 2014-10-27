
Laravel Payu Api
=========


[![Total Downloads](https://poser.pugx.org/rasim/payu/downloads.svg)](https://packagist.org/packages/rasim/payu) 


Installation
----

* In composer.json;

    ```json
    "rasim/payu": "dev-master"
    ```
    
* In app.php

    ```php
    'Rasim\Payu\PayuServiceProvider',
    ```
    
* and for aliases

    ```php
    'Payu' => 'Rasim\Payu\Facades\Payu',
    ```
* Set Config

    ```shell
    php artisan config:publish rasim/payu
    ```

Usage
----

* Codes

    ```php
    // Product Generator
    $pname = "Product name".;
    $pcode = "Product code";
    $pinfo = "Product info";
    $price = "9.99";
    $priceType = "GROSS";
    $quantity = "1";
    $tax = "18";
    $product = Payu::payuProduct($pname,$pcode,$pinfo,$price,$priceType,$quantity,$tax);

    Payu::payulu()->setOrderRef("6112457");
    Payu::payulu()->addProduct($product);

    // Address Generator
    Payu::payuAddress()->setFirstName('John Adam');
    Payu::payuAddress()->setLastName('Doe');
    Payu::payuAddress()->setEmail('john.doe@johndoe.com');
    Payu::payuAddress()->setCity("Mecidiyeköy"); //Ilce/Semt
    Payu::payuAddress()->setState("Istanbul"); //Sehir
    Payu::payuAddress()->setCountryCode("TR");

    // Address Definition
    Payu::payulu()->setBillingAddress(Payu::payuAddress());
    Payu::payulu()->setDestinationAddress(Payu::payuAddress());
    Payu::payulu()->setDeliveryAddress(Payu::payuAddress());

    // General Setting
    Payu::payulu()->setPaymentCurrency("TRY");
    Payu::payulu()->setInstalments("2,3,10,12");
    Payu::payulu()->setOrderShipping("");
    Payu::payulu()->setBackRef("");
    Payu::payulu()->setOrderTimeout("");
    Payu::payulu()->setTimeoutUrl("");

    Payu::payulu()->setButtonName('Make Payment');

    // Creating Payment Button
    Payu::payulu()->renderPaymentForm();
    ```
