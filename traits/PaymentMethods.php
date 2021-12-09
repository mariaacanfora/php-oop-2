<?php

trait PaymentMethods{
    protected $paymentMethods = [
        "creditCard" => false,
        "payPal" => false ,
        "cash" => false
    ];
}