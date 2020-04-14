<?php

function quick_sort(array $arr,int $start,int $end): array {
    $pivot = $arr[$end];
    $i = $start - 1;
    if($end > $start){
        for($j = $start; $j < $end; $j++) {
            if($arr[$j] < $pivot) {
                $i++;
                @$temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
        for($k = $end; $k > $i + 1; $k--){
            @$temp = $arr[$k];
            $arr[$k] = $arr[$k - 1];
            $arr[$k - 1] = $temp;
        }
        if($i > 0) {
            $arr = quick_sort($arr, $start, $i);
        }
        $arr = quick_sort($arr, $i + 2, $end);
    }
    return $arr;
}

print_r(quick_sort([7, 8, 2, 4, 6, 7, 3, 5], 0, 7));
print_r(quick_sort([7, 8, 12, 55, 10, 4, 6, 6, 27, 3, 9], 0, 10));
print_r(quick_sort([7], 0, 0));