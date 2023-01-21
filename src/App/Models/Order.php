<?php 

namespace App\Models;

class Order
{

    public function getOrder($order_id)
    {
        return [
            'order_id' => $order_id
        ];
    }
}