<?php

function TimKiem($arr,$x){
    $truoc = 0;
    $sau = count($arr) - 1;

    while($truoc <= $sau){
        $mid = floor(($truoc + $sau) / 2);
        
        if($arr[$mid] == $x){
           
            break;
        }
        
        else if($arr[$mid] > $x){
            $sau = $mid - 1;
        }
        else{
            $truoc = $mid + 1;
        }
    }

    return $mid;
}
$arr2 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
foreach($arr2 as $value){
    echo $value ." ";
}
    echo "<br>";

$x = 2;

if(TimKiem($arr2,$x)){
    echo "Tìm thấy phần tử ".$x." tại vị trí ".TimKiem($arr2,$x) ;
}else{
    echo "Không tìm thấy phần tử ";
}
