<?php


function Tong($arr,$cols){
    $sum = 0;
    for($i = 0;$i < count($arr); $i++){
        $sum += $arr[$i][$cols];
    }
    return $sum;
}
$arr1 = [
    [4,5,6],
    [7,8,9],
    [10,11,12]
];

echo 'Tổng các phần tử có cùng vị trí 0 là : ' .Tong($arr1,0).'<br>';
echo 'Tổng các phần tử có cùng vị trí 1 là : ' .Tong($arr1,1).'<br>';
echo 'Tổng các phần tử có cùng vị trí 2 là : ' .Tong($arr1,2).'<br>';



?>