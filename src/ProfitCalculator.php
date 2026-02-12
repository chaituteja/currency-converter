<?php

class ProfitCalculator 
{

    public function calculateProfit($logFile) 
    {
        $totalProfit = 0;
        $logs = file($logFile);

        foreach($logs as $log) {
            list($initialData, $convertedData ) = explode(',', $log);
            list($convertedAmount, $convertedCurrency) = explode(' ', $convertedData);

            $profit = $convertedAmount * 0.15;
            $totalProfit = $totalProfit + $profit;
        }
        return $totalProfit;
    }
}