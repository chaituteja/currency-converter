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
$from = strtoupper($argv[2]);
$to = strtoupper($argv[3]);

// Validate amount
if (!is_numeric($amount)) {
    echo "Amount must be a valid number, please try again.";
    exit();
}

// Enforce AUD rule
if ($from !== 'AUD' && $to !== 'AUD') {
    echo "Conversions must involve AUD, ";
    exit();
}

// Validate Currency codes 
if (!isset($currencyRates[$from]) || !isset($currencyRates[$to])) {
    echo "Entered currency code(s) are not supported, please try again.";
    exit();
}

$currencyConverter = new CurrencyConverter($currencyRates);
$conversionLogger = new ConversionLogger('log.txt');

$convertedAmount = $currencyConverter->convertAmount($amount, $from, $to);
$conversionLogger->log($amount, $from, $convertedAmount, $to);

echo $amount . " " . $from . " ". $convertedAmount. " " . $to;