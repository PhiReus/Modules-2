<?php
//if else kt số chẵn
$a = 11;
$b = $a % 2;
if($b == 0){
    echo 'Số '.$a. ' là số chẵn ';
}
else{
    echo 'Số '.$a. ' là số lẻ';
}

//kiểm tra năm
$nam = 2000;
$kt = ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0);
if($kt == true) {
    echo 'Năm '.$nam. ' là năm nhuận';
}