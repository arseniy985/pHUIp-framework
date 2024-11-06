<?php
require_once __DIR__ . '/vendor/autoload.php';

$str = \http\Controllers\MainController::class;
$class = new $str;
print_r($class);