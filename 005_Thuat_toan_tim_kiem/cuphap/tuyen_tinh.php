<?php

function search($arr,$x)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $x) {
            return true;
        }
    }
    return false;
}
//cách nguyên thủy
$arr = [5,2,3,6,5,8];
$x = 8;

if (search($arr, $x)) {
    echo "Giá trị $x có trong mảng";
} else {
    echo "Giá trị $x không có trong mảng";
}

//sinh ra các số ngẩu nhiên 1 -> 200 có khoảng cách là 5
$arr = range(1, 200, 5);

if (search($arr, 32)) {
    echo "Found";
} else {
    echo "Not found";
}
