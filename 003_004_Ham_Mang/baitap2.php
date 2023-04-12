<?php
function VitriMin($arr) {
    $min = $arr[0];
    $index = 0;
    for($i=1;$i < count($arr); $i++){
        if($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
$mang = [5,2,8,6,15,2,3,6,9];
echo 'Vị trí của phần tử nhỏ nhất là : '.VitriMin($mang);
