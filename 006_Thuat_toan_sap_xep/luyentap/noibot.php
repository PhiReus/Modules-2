<?php
//sắp xếp nổi bọt từ lớn đến bé
$arr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
$count = count($arr);
$temp = "";
for($i = 0;$i < $count;$i++){
    for($j = 0;$j < $count - $i - 1;$j++){
        if($arr[$j] < $arr[$j + 1]){
            $temp = $arr[$j +1];
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $temp;

        }
    }
}
for($i = 0;$i < $count;$i++){
    echo $arr[$i]." ";
}
?>