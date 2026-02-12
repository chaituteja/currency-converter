<?php
require 'src/CurrencyConverter.php';
require 'src/ConversionLogger.php';

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

if ($from !== 'AUD' && $to !== 'AUD') {
    echo "Conversions must involve AUD, please try again";
    return;
}

$currencyConverter = new CurrencyConverter($currencyRates);
$conversionLogger = new ConversionLogger('log.txt');

$convertedAmount = $currencyConverter->convertAmount($amount, $from, $to);
$conversionLogger->log($amount, $from, $convertedAmount, $to);

echo $amount . " " . $from . " ". $convertedAmount. " " . $to;