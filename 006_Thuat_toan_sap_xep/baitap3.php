<?php
function SapXepGiamDan($arr){
    $dodai = count($arr);
    for($i = 0;$i < $dodai; $i++){
        $value = $arr[$i];
       
        $j = $i -1;
        while($j >= 0 && $arr[$j] < $value){
            $arr[$j + 1] = $arr[$j];
            $j = $j -1;
        }
        $arr[$j + 1] = $value;
    }
    return $arr;
}
$arr1 = array(5, -4, 3, 7, 2, 1, 0, 8, 9, 2);
echo implode(",",SapXepGiamDan($arr1));
    
?>