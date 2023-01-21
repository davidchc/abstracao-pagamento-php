<?php

namespace App\Core;

abstract class Payment
{
   protected $config;
   protected $paymentName;
    
  public function __construct($paymentName, array $config = [])
  {
       $this->config = $config;
  }
     
  abstract public function pay(array $order): PaymentResponse;
    
  public function getPaymentName()
  {
     return $this->paymentName;
  }
     

}
  