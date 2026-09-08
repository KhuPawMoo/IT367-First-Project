<?php
    $numbers = [1, 2, 3, 4, 5, 6];

    $first_value = $numbers[0];

    function getMinimum($numbers) {
        // for($i = $numbers[1]; $i <= 5; $i++) {
        //     if($first_value > $numbers[$i]) {
        //         $first_value = $numbers[$i];
        //     }
        // }
        // return $first_value;

        return min($numbers);
    }

    function getMaximum($numbers) {
        // for($i = $numbers[1]; $i <= 5; $i++) {
        //     if($first_value < $numbers[$i]) {
        //         $first_value = $numbers[$i];
        //     }
        // }
        // return $first_value;

        return max($numbers);
    }

    function getAverage($numbers) {
        // $sum = 0;
        // $count = 0;
        // foreach($numbers as $value) {
        //     $sum = $sum + $value; //$sum += $value;

        //     $count = $count + 1; //$count++;
        // }
        // return $sum / $count;

        return array_sum($numbers) / count($numbers);
    }

