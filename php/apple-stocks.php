<?php

echo '<h3>
    Write an efficient function that takes $stockPricesYesterday and returns the best profit I could have made from 1 purchase and 1 sale of 1 Apple stock yesterday.
</h3>';

$stockPricesYesterday = [10, 7, 5, 8, 11, 9, 55, 3];

function getMaxProfit($stockPricesYesterday) {

    $maxPrice = 0;
    $minPrice = $stockPricesYesterday[0];

    for ($i = 0; $i < count($stockPricesYesterday); $i++) {
        if ($maxPrice < $stockPricesYesterday[$i]) {
            $maxPrice = $stockPricesYesterday[$i];
        } else if ($stockPricesYesterday[$i] < $minPrice) {
            $minPrice = $stockPricesYesterday[$i];
        }
     }

     return $maxPrice - $minPrice;
}

echo 'You should buy for ' . getMaxProfit($stockPricesYesterday) . '$.';