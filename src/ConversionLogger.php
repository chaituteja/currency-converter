<?php

class ConversionLogger
{
    private $logFile;

    public function __construct(string $logFile)
    {
        $this->logFile = $logFile;
    }

    public function log(float $amount, string $from, float $convertedAmount, string $to): void {
        $log = $amount. " " . $from. "," . $convertedAmount. " " .$to . PHP_EOL;
        file_put_contents($this->logFile, $log, FILE_APPEND);
    }
}