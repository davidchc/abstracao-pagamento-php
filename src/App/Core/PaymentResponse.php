<?php 

namespace App\Core;

class PaymentResponse
{
    protected $status;
    protected $message;
    protected $info;

    public function __construct($status, $message, $info=[])
    {
        $this->status = $status;
        $this->message = $message;
        $this->info = $info;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getInfo()
    {
        return $this->info;
    }
}