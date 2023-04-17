<?php
$tk1 = '123abc';
$tk2 = 'abcde' ;
$pattern = '/^[_a-z0-9]{6,}$/';

$check = preg_match($pattern,$tk2);

if($check) {
    echo 'Tài khoản hợp lệ';
}else{
    echo 'Tài khoản không hợp lệ';
}


?>