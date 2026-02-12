<?php

class CurrencyConverter
{
    private $currencyRates;

    public function __construct($currencyRates)
    {
        $this->currencyRates = $currencyRates;
    }

    public function convertAmount($amount, $from, $to) {
        if($to === 'AUD') {
            $result = $amount * $this->currencyRates[$from];
        } else {
            $result = $amount / $this->currencyRates[$to];
        }
        return $result;
    }
}