<?php

class ProfitCalculator 
{

    public function calculateProfit($logFile) 
    {
        $totalProfit = 0;
        $logs = file($logFile);

        foreach($logs as $log) {
            $array = explode(',', $log);
            $initialData = $array[0];
            $convertedData = $array[1];

            echo $initialData. "  ". $convertedData;

        }
    }
}