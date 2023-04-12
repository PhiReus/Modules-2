<?php
$num1 = [2,5,3,4,6];
$num2 = [6,1,7,12,8];

$num3 = [];

// for($i = 0;$i < count($num1);$i++){
//     array_push($num3,$num1[$i]);
// }

$num3 = $num1;

for($i = 0;$i < count($num2);$i++){
    array_push($num3,$num2[$i]);
}
print_r($num3);
// echo '<br>';
// var_dump($num3) ;
?>