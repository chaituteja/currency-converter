<?php

$conversionRates = [
    'AUD' => 1.0,
    'USD' => 1.5,
    'GBP' => 1.7,
    'NZD' => 0.9,
    'EUR' => 1.5
];

$amount = $argv[1];
$from = $argv[2];
$to = $argv[3];

echo $amount . " " . $from . " " . $to;