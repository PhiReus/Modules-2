<?php
$str1 = 'Dao tao lap trinh';
$str2 = 'PHP';

// nối và hiển thị
echo $str1.' '.$str2.'<br>';

//nối và gán
$str = $str1.' '.$str2.'<br>';
echo $str;

$str = 'Đào tạo '.$str2;
echo $str;
echo '<br>';

//nhay kep co the dua bien vao ben trong
$str = "Đào tạo $str2 tại Quảng Trị";
echo $str;