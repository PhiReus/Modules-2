<?php
    function KiemTra($numbers,$value){
        $count = 0;

        foreach($numbers as $number){
            if($number === $value){
                $count++;
            }
        }
        return $count;
    }
    $value = 2;
    $arr = [2,5,3,6,1,2,4,5,6,98,4,'2',1,2];

    foreach($arr as $arr1){
        echo $arr1. " ";
    }
        echo "<br>";


    if(KiemTra($arr,$value)){
        echo "Số lần xuất hiện của $value là : " . KiemTra($arr,$value);   
    }else{
        echo "$value không có trong mảng";
    }
?>