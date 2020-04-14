<?php
function max_heapify (array &$arr, int $root, int $length) {
    $left = 2 * $root + 1;
    $right = 2 * $root + 2;
    $largest = $root; 
    if($left <= $length - 1 && $arr[$largest] < $arr[$left]) {
        $largest = $left;
    }
    if($right <= $length - 1 && $arr[$largest] < $arr[$right]) {
        $largest = $right;
    }
    if($root != $largest) {
        $temp = $arr[$root];
        $arr[$root] = $arr[$largest];
        $arr[$largest] = $temp;
        max_heapify ($arr, $largest, $length);
    }
}

function max_heap_build(array $arr) {
    for($i = floor((count($arr) - 1 )/ 2); $i >= 0; $i --){
        max_heapify ($arr, $i, count($arr));
    }
    return $arr;
}

function heap_sort(array $arr) {
    $arr = max_heap_build($arr);
    
    for($j = count($arr) - 1; $j >= 0; $j--) {
        $temp = $arr[0];
        $arr[0] = $arr[$j];
        $arr[$j] = $temp;
        if($j > 0) {
            max_heapify($arr, 0, $j);
        }
        echo "$j\n";
        print_r($arr);
    }
    return $arr;
}

print_r(heap_sort([6, 1, 8, 9, 4, 2, 3, 5, 7]));