<?php 

namespace App\Integrations\Payments\Cielo;
use App\Core\Payment;
use App\Core\PaymentResponse;


class PaymentMethod extends Payment
{
   
     public function __construct()
     {
         $config =  include __DIR__.'/config.php';
         parent::__construct("cielo", $config);
     }
  
    public function pay($order):PaymentResponse
    {
       ///Logica de pagamento do Pagseguro

       $response = new PaymentResponse(false, 'Pagamento cielo error ao processar');
       return $response;
    }

}