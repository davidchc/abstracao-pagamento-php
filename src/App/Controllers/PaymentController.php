<?php 

namespace App\Controllers;

class PaymentController
{
   
   public function index()
   {
      //$methodPayment = 'pagSeguro';
      $methodPayment = 'mercadoPago';
      //$methodPayment = 'cielo';
      $order_id = 1;
      $order = (new \App\Models\Order())->getOrder($order_id);
      $manager  = new \App\Services\ManagerPayment($methodPayment);
      $response = $manager->pay($order);

      echo $response->getMessage();
   }

}
     
     