<?php

require 'src/ProfitCalculator.php';

$logFile = 'log.txt';

if (!file_exists($logFile)) {
    echo "Log file not found. please try convert command";
    exit();
}

$profitCalculator = new ProfitCalculator();

$totalProfit = $profitCalculator->calculateProfit($logFile);

echo "Total Profit : " . $totalProfit . " AUD";