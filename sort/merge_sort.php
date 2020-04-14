<?php


function merge (array &$arr, $start, $end) {
    $middle = floor(($start + $end) / 2);
    $left_num = ceil(($end - $start + 1) / 2);
    $right_num = ($end - $start + 1) - $left_num;
    $left_subarray = array_slice($arr, $start, $left_num);
    $right_subarray = array_slice($arr, $middle + 1, $right_num);
    $left_subarray[] = INF;
    $right_subarray[] = INF;
    // echo "start: $start; end: $end". PHP_EOL;
    // print_r([
    //     'left' => $left_subarray,
    //     'right' => $right_subarray
    // ]);
    $left_index = 0;
    $right_index = 0;
    for($i = $start; $i <= $end; $i++) {
        if($left_subarray[$left_index] <= $right_subarray[$right_index]) {
            $arr[$i] = $left_subarray[$left_index];
            $left_index++;
        }else {
            $arr[$i] = $right_subarray[$right_index];
            $right_index++;
        }
    }
    // print_r($arr);
}
function merge_sort(array $arr, $start, $end) {
    $middle = floor(($start + $end) / 2);
    if($start < $end){
        $arr = merge_sort($arr, $start, $middle);
        $arr = merge_sort($arr, $middle + 1, $end);
        merge($arr, $start, $end);
    }
    return $arr;
}


$a = [5, 3, 8, 6, 2, 7, 1, 4];
print_r(merge_sort($a, 0, 7));
$b = [8, 3, 7, 2, 1, 6, 5, 4, 9, 10];
print_r(merge_sort($b, 0, 9));
