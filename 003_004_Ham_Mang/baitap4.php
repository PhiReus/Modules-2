<?php
function calculate($x,$y){
    try{
        if($x == 0 || $y == 0){
           throw new Exception('Nhập số khác 0'); 
        }
        $tong = $x + $y;
        $hieu = $x - $y;
        $tich = $x * $y;
        $thuong = $x / $y;

        echo 'Tổng : '.$x .' + '. $y .' = '.$tong.'<br>';
        echo 'Hiệu : '.$x .' - '. $y . ' = '.$hieu.'<br>';
        echo 'Tích : '.$x .' * '. $y .' = ' .$tich.'<br>';
        echo 'Thương : '.$x.' / '.$y .' = '. $thuong.'<br>'.'<br>';
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
}
calculate(5,5);
calculate(10,10);
calculate(0,0);


    
?>