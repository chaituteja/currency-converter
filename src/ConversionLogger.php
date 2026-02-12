<?php

class ConversionLogger
{
    private $logFile;

    public function __construct($logFile)
    {
        $this->logFile = $logFile;
    }

    public function log($amount, $from, $convertedAmount, $to) {
        $log = $amount. " " . $from. "," . $convertedAmount. " " .$to . PHP_EOL;
        file_put_contents($this->logFile, $log, FILE_APPEND);
    }
}