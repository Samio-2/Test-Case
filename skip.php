<?php

// function skip($arr)
// {
$arr = [[1, 5, 7, 7, 9, 5], [2, 3, 4]];


for ($i = 1; $i <= 2; $i++) {
    $arr[$i] = "Baris" . $i;
    if ($arr[$i][$i] == $arr[$i][$i + 1]) {
        $arr[$i][$i + 1] = "skip";
    }
    // return $arr;
    print_r($arr);
}
// }
