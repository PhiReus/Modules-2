<?php
$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
$sum = 0;
for($i = 0;$i < count($arr); $i++){
    $sum += $arr[$i][$i];
}
echo 'Tổng các phần tử có tọa độ ở hàng ngang và cột dọc bằng nhau là : ' .$sum;

