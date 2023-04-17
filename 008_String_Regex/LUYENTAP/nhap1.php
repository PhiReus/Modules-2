<?php
$email = 'phireus2002@gmail.com';

$pattern = '/[a-z]{7}/';

$check = preg_match($pattern,$email);

echo $check;
?>