<?php
$str = '0943.612.567,0912.612.5677,0905.612.666,09051.612.666';
// Tách chuỗi thành mảng
$arr = preg_split("/\,/",$str);

echo "<pre>";
print_r($arr);
echo "</pre>";
$vina = [];
    $mobi = [];
foreach($arr as $key => $value){
    
    $pattern = '/^[\d]{4,4}\.[\d]{3,3}\.[\d]{3,3}$/';
    $check = preg_match($pattern,$value);
    if($check){
        $a = substr($value,0,3);
        if($a == '094'||$a == '091'){
            array_push($vina,$value);
        }else if($a == '090'){
            array_push($mobi,$value);

        }
    }
}

// Duyệt mảng, tìm chuỗi có đúng với quy tắc: xxxx.xxx.xxx

// var_dump($check);

// Phân chia vào các nhà mạng
echo "<pre>";
print_r($vina);
print_r($mobi);
echo "</pre>";
