<?php

require 'src/ProfitCalculator.php';

$profitCalculator = new ProfitCalculator();

$totalProfit = $profitCalculator->calculateProfit('log.txt');

echo "Total Profit : " . $totalProfit . " AUD";