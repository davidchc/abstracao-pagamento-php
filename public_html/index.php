<?php 

require_once __DIR__."/../vendor/autoload.php";

use App\Controllers\PaymentController;

$controller = new PaymentController();
$controller->index();