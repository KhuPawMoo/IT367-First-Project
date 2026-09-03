<?php

$numbers = [15.11, 20, 99.5, 40, 50];

function calculateAverage($numbers) {
    $average = array_sum($numbers) / count($numbers);
    return $average;
}

function calculateHighest($numbers) {
    $highest = max($numbers);
    return $highest;
}

function calculateLowest($numbers) {
    $lowest = min($numbers);
    return $lowest;
}

echo "Average: " . calculateAverage($numbers) . "\n";
echo "Highest: " . calculateHighest($numbers) . "\n";
echo "Lowest: " . calculateLowest($numbers) . "\n";

?>