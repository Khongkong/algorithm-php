<?php

function linearSearch ($num, array $arr) {
    if(count($arr) > 0) {
        for($i = 0; $i < count($arr); $i++){
            if($num === $arr[$i]) {
                return $i;
            }
        }
    }
    return -1;
}

echo linearSearch(3, [4, 4, 4, 6, 6, 10, 8]). PHP_EOL;
echo linearSearch(3, [4, 4, 2, 3, 8]). PHP_EOL;
echo linearSearch(3, ['a', 'b', 'c', 'd']). PHP_EOL;
echo linearSearch(3, []). PHP_EOL;
echo linearSearch(0, [false, true, NULL, []]). PHP_EOL;