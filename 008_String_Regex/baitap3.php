<?php
$lop = 'C0318G';
$lop2 ='M0318G';
$pattern = '/^(C|A|B)[0-9]{4,4}(G|H|I|K|L|M)$/';

$check = preg_match($pattern,$lop2);

if($check){
    echo $lop2.' : Tên lớp hợp lệ ';
}else{
    echo $lop2.' : Tên lớp không hợp lệ';
}

?>