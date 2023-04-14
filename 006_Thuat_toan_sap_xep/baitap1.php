<?php
function TangDan($arr) {
    $dodai = count($arr);

    for($i = 0;$i < $dodai - 1; $i++){
        $min_idx = $i;
        for($j = $i + 1;$j < $dodai; $j++){
            if($arr[$j] < $arr[$min_idx]){
                $min_idx = $j;
            }
        }
        $temp = $arr[$min_idx];
        $arr[$min_idx] = $arr[$i];
        $arr[$i] = $temp;
    }
    return $arr;
   
}

$mang = [1, 9, 4.5, 6.6, 5.7, -4.5];
$arr1 = TangDan($mang);
echo implode(",", $arr1)."<br>"; 


print_r($arr1);


?>