<?php

function bubble_sort (array $arr) {
    for($i = count($arr) - 1; $i > 0; $i--) {
        for($j = 0; $j < $i; $j++) {
            if($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

print_r(bubble_sort([2,3,4,8,0,9,7,6,1,5]));