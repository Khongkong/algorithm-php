<?php

function insertion_sort (array $arr) {
    for($i = 1; $i < count($arr); $i++) {
        for($j = $i; $j > 0; $j--) {
            if($arr[$j] < $arr[$j - 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $temp;
            }
        }
    }
    return $arr;
}

print_r(insertion_sort([3, 2, 1, 4, 5, 6]));