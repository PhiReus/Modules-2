<?php
$arr = [5, 2, 3, 6, 5, 8, 7, 9];
$x = 3;

//hàm tìm kiếm vị trí phần tử trong mãng
$index = array_search($x,$arr);

if($index !== false){
    echo 'Vị trí phần tử cần xóa là : '.$index;
}

for ($i = $index; $i < count($arr) - 1; $i++) {
    $arr[$i] = $arr[$i+1];
}
unset($arr[count($arr) -1]);  

echo '<pre>';
print_r($arr);
echo '</pre>';
