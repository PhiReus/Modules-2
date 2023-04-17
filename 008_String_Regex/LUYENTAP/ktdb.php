<?php
$email = 'phireus2002@gmail.com.vn';

$pattern = '/^[a-z]+[a-z-_\.0-9]{2,}@[a-z]+[a-z-_\.0-9]{2,}\.[a-z]{2,}$/';

$check = preg_match($pattern,$email);

var_dump($check);

echo '<hr/>';
//kiem tra nhieu truong hop
$subject = 'lap trinh codegym ,ngon ngu lap trinh backend';

$pattern = '/codegym|backend/';
$check = preg_match($pattern,$subject);

var_dump($check);
?>