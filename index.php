<?php

use app\capture\Capture;
use app\views\View;

require 'vendor/autoload.php';

$capture = new Capture();

$view = new View();
echo $view->load('invoice.php', [
    'number' => '09477705099'
]);

// echo $capture->test();