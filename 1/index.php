<?php
/*
    [1, 2, 10, 8] --> [8, 10]
    [1, 5, 87, 45, 8, 8] --> [45, 87]
    [1, 3, 10, 0]) --> [3, 10]
*/

$arr = [
    1,
    87,
    15,
    28,
    40,
    34,
    72,
    99,
    2,
];

// Решение с помощью быстрой сортировки

function twoOldestAges($ages) {

    if (count($ages) <= 2) {
        return $ages;
    }

    $pivot = $ages[0];

    $left = [];
    $right = [];

    for ($i = 0; $i < count($ages); $i++) {
        if ($ages[$i] < $pivot) {
            $left[] = $ages[$i];
        }
        if ($ages[$i] > $pivot) {
            $right[] = $ages[$i];
        }
    }

    $left[] = $pivot;

    $finish_arr = array_merge(twoOldestAges($left), twoOldestAges($right));
    return array_slice($finish_arr, count($finish_arr) - 2);
}

// Решения с помощью функций PHP

function twoOldestAgesTwo($ages) {
    if (count($ages) <= 2) {
        return $ages;
    }

    asort($ages);
    $length = count($ages);
    $test = $length - 2;
    return array_slice($ages, $test);
}