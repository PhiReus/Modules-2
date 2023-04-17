<?php
$phone = '0971320503';

$pattern = '/^0[0-9]{5}$/';

$check = preg_match($pattern,$phone);


if(!empty($check)){
    echo $phone. ' : Là số điện thoại';
}else{
    echo $phone. ' : không là số điện thoại';
}
?>