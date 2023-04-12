<?php
function matrixElementsSum($matrix){
    $total = 0;
    $rows = count($matrix);
    $cols = count($matrix[0]);
    $free = [];

    for($i = 0;$i < $rows; $i++){
        for($j = 0;$j < $cols; $j++){
            if($matrix[$i][$j] == 0){
                for($k = $i;$k < $rows; $k++){
                    $matrix[$k][$j] = 0;
                }
                continue;
            }
            if(in_array($j,$free)){
                continue;
            }
            $total += $matrix[$i][$j];
        }
        $free[] = array_search(0,$matrix[$i]);
    }
    return $total;
}
$arr = [
    [0,1,1,2],
    [0,5,0,0],
    [0,0,3,3]
];

echo "Tổng số tiền của tất cả các phòng phù hợp với CodeBots là : ".matrixElementsSum($arr);
