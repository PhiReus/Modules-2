<?php
//dùng for để duyệt
$a =[5,6,3,2,9,4,8];

$min = $a[0];
for($i = 1;$i <count($a);$i++){
    if($a[$i] < $min){
        $min = $a[$i];
    }
}
echo 'Giá trị nhỏ nhất là : '.$min;
?>


<?php
//dùng foreach để duyệt
$a =[5,6,3,1,-9,4,8];
$min = $a[0];

foreach($a as $value) {
    if($value < $min){
        $min = $value;
    }
}
echo 'Giá trị nhỏ nhất là : '.$min;
?>