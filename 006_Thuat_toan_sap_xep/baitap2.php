<?php
function bubbleSort($arr){
    $dodai = count($arr);
    for($i = 0; $i < $dodai; $i++){
        //bat dau tu ptu cuoi va ket thuc truoc ptu $i
        for($j = $dodai - 1; $j > $i;$j--){
            //so sanh va trao doi neu kh theo thu tu
            if($arr[$j] < $arr[$j - 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j -1];
                $arr[$j - 1] = $temp; 
            }
        }
    }
    return $arr;
}
$arr1 = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
echo implode(",",bubbleSort($arr1));
