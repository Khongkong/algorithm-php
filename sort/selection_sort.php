<?php

function selection_sort(array $arr) {
    for($i = 0; $i < count($arr); $i++) {
        $selected = $i;
        for($j = $i; $j < count($arr); $j++) {
            if($arr[$j] < $arr[$selected]) {
                $selected = $j;
            }
        }
        if($selected != $i) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$selected];
            $arr[$selected] = $temp;
        }
    }
    return $arr;
}

print_r(selection_sort([2,3,4,8,0,9,7,6,1,5]));
