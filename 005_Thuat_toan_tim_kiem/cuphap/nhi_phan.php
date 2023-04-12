<?php 
function TimKiem($arr,$x): bool {
    $truoc = 0;
    $sau = count($arr) - 1;

    while($truoc <= $sau) {
        $mid =floor(($truoc + $sau) / 2);

        if($arr[$mid] > $x){
            $sau = $mid - 1;
        }
        else if($arr[$mid] < $x){
            $truoc = $mid + 1;
        }
        else{
            return $mid;
        }
    }
    return false;
}
$arr1 = range(1,100,3);
$number = 5;

if(TimKiem($arr1,$number)) {
    echo "$number tìm thấy ";
}else{
    echo "$number Not tìm thấy ";
}

?>