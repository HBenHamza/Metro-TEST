<?php

require __DIR__.'/vendor/autoload.php';
use Classes\Main;

$type = isset($args[1]) ? $args[1] : '';
$price_from = isset($args[2]) ? $args[2] : 0;
$price_to = isset($args[3]) ? $args[3] : 0;
$vendor_id = isset($args[2]) ? $args[2] : 0;

$sc = new Main('test.json',$type,$price_from,$price_to,$vendor_id);

print_r($sc->getIterator());