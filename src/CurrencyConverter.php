<?php

class CurrencyConverter
{
    private $currencyRates;

    public function __construct($currencyRates)
    {
        $this->currencyRates = $currencyRates;
    }
}