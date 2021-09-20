<?php

use app\capture\Capture;


require 'vendor/autoload.php';

$capture = new Capture();

$capture->load('invoice.php', [
    'number' => '09477705099'
]);

