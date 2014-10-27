<?php

namespace Rasim\Payu;

use Rasim\Payu\Classes\Payulu;
use Rasim\Payu\Classes\PayuProduct;
use Rasim\Payu\Classes\PayuAddress;

class Payu
{

    public $payulu;
    public $payuProduct;
    public $payuAddress;


    public function __construct()
    {

        
        $this->payuAddress = new PayuAddress;
        $this->payulu = new Payulu(\Config::get('payu::merchantId'),\Config::get('payu::secretKey'));

    }

    public function payulu()
    {
       
       return $this->payulu;

    }
    
    public function payuAddress()
    {
       
       return $this->payuAddress;

    }

    public function payuProduct($pname,$pcode,$pinfo,$price,$priceType,$quantity,$tax)
    {
       
       return $this->payuProduct = new PayuProduct($pname,$pcode,$pinfo,$price,$priceType,$quantity,$tax);

    }

}