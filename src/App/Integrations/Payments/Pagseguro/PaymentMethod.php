<?php 

namespace App\Integrations\Payments\PagSeguro;
use App\Core\Payment;
use App\Core\PaymentResponse;

class PaymentMethod extends Payment
{
   
     public function __construct()
     {
        $config =  include __DIR__.'/config.php';
        parent::__construct("pagseguro", $config);
     }
  
    public function pay($order): PaymentResponse
    {
       ///Logica de pagamento do Pagseguro

       $response = new PaymentResponse(true, 'Pagamento Pagseguro feito com sucesso');

       return $response ;
    }

}