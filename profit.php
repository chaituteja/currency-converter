<?php

require 'src/ProfitCalculator.php';

$profitCalculator = new ProfitCalculator();

$profitCalculator->calculateProfit('log.txt');