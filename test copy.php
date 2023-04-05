<?php


function fibonacciSuite($debut, $fin) {
    $fibonacci = [];
    $premier = 0;
    $second = 1;
    $temp = 0;

    while ($second <= $fin) {
        if ($second >= $debut) {
            $fibonacci[] = $second;
        }
        $temp = $second;
        $second += $premier;
        $premier = $temp;
    }

    return $fibonacci;
}

print_r(fibonacciSuite(5, 10));