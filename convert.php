<?php
require 'src/CurrencyConverter.php';

$currencyRates = [
    'AUD' => 1.0,
    'USD' => 1.5,
    'GBP' => 1.7,
    'NZD' => 0.9,
    'EUR' => 1.5
];

$amount = $argv[1];
$from = $argv[2];
$to = $argv[3];

$currencyConverter = new CurrencyConverter($currencyRates);
$convertedAmount = $currencyConverter->convertAmount($amount, $from, $to);

$log = $amount. " " . $from. "," . $convertedAmount. " " .$to . PHP_EOL;
file_put_contents("test.txt", $log);

echo $amount . " " . $from . $convertedAmount. " " . $to;