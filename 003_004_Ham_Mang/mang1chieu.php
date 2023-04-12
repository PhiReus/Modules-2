<?php
$a = ['văn','su','dia'];

echo '<pre>';
print_r($a);
echo '</pre>';

//truy cập ptu sử
echo $a[1];

//xóa ptu theo cho so
unset($a[2]);

//thêm ptu vào cuối mảng
array_push($a,'toan');

//thêm ptu vào đầu mảng
array_unshift($a,'tieng anh');

echo '<pre>';
print_r($a);
echo '</pre>';

?>
