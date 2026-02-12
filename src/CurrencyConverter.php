<?php

class CurrencyConverter
{
    private $currencyRates;

    public function __construct(array $currencyRates)
    {
        $this->currencyRates = $currencyRates;
    }

    public function convertAmount(float $amount, string $from, string $to): float {
        if($to === 'AUD') {
            $result = $amount * $this->currencyRates[$from];
        } else {
            $result = $amount / $this->currencyRates[$to];
        }
        return round($result , 2);
    }
}