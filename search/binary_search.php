<?php
/**
 * Based on the fact that the array we look into is sorted.
 * This is an example of DC(divide and conquer).
 */

function binary_search($num, array $arr) {
    $first = 0;
    $end = count($arr) - 1;
    while($end >= $first) {
        $middle = floor(($first + $end) / 2);
        if($arr[$middle] < $num) {
            $first = $middle + 1;
        }elseif($arr[$middle] > $num) {
            $end = $middle - 1;
        }else{
            return $middle;
        }
    }
    return -1;
}

echo binary_search(5, [3,4,4,5,7,7,7,7,8]). PHP_EOL;
echo binary_search(5, [3,4,7,8]). PHP_EOL;