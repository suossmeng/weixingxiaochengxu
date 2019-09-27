<?php
function bubble($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tem = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tem;
            }
        }
    }
    return $arr;
}

$arr = [1, 5, 7, 3, 4, 1, 2, 9, 8, 45];

var_dump(bubble($arr));

function chose($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len; $i++) {
        $min = $arr[$i];
//         $sign = $i;
        $flag = false;
        for ($j = $i + 1; $j < $len - 1; $j++) {
            if ($arr[$j] < $min) {
                $min = $arr[$j];
                $sign = $j;
                $flag = true;
            }
        }
        if ($flag) {
            $tem = $arr[$i];
            $arr[$i] = $min;
            $arr[$sign] = $tem;
        }
    }
    return $arr;
}

//var_dump(chose($arr));

function insert($arr)
{
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {
        $tmp = $arr[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($tmp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $arr;
}
//var_dump(insert($arr));