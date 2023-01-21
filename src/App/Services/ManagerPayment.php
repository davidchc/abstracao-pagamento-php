<?php 

namespace App\Services;


class ManagerPayment
{
   protected $handler;
  
   public function __construct($handler)
   {
      $this->handler = $handler;
   }
  
   protected function getInstancePayment()
   {
       $class= '\\App\\Integrations\Payments\\'.ucfirst($this->handler).'\\PaymentMethod';
       $instance = new $class();
       return $instance;     
     }
  
    public function pay(array $order)
    {
       $instance = $this->getInstancePayment();
       return $instance->pay($order);
        
    }
}