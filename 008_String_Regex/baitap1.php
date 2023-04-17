<?php
$url = 'http://codegym.vn/khoa-hoc/lap-trinh-nang-cao';
$pattern = '~^(http|https)://[a-z]+[a-z-_\.]*\.[a-z]{2,}/[a-z-_0-9\.]*$~';

$check = preg_match($pattern,$url);
if($url){
    echo 'URL hop le';
}else{
    echo 'URL khong hop le'; 
}
?>