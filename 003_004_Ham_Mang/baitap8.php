<?php
$chuoi ='day la mot chuoi';
$dodai = strlen($chuoi);
$kytu = 'a';
$count = 0;

for($i = 0;$i < $dodai; $i++){
    if($chuoi[$i] == $kytu){
        $count++;
    }
}
echo 'Số lần xuất hiện của ký tự a là : ' .$count;

?>