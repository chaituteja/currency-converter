<?php

class ProfitCalculator 
{

    public function calculateProfit(string $logFile): float
    {
        if (!file_exists($logFile)) {
            throw new RuntimeException("File not found.");
        }

        $totalProfit = 0;
        $logs = file($logFile);

        foreach($logs as $log) {
            list($initialData, $convertedData ) = explode(',', $log);
            list($initialAmount, $initialCurrency) = explode(' ', trim($initialData));
            list($convertedAmount, $convertedCurrency) = explode(' ', trim($convertedData));

            if ($convertedCurrency !== 'AUD') {
                $profit = $initialAmount * 0.15;
                
            } else {
                $profit = $convertedAmount * 0.15;
            }

            $totalProfit = $totalProfit + $profit;
        }
        return $totalProfit;
    }
}