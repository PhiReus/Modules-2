<?php
$fullName = 'Nguyễn Phi';
$nameEmail = 'Phireus2002@gmail.com';
$Age = 24;

echo $fullName;
echo '<br/>';
echo $nameEmail;
echo '<br/>';
echo $Age;
echo '<br/>';

//Gán
$Age = 15;
echo $Age;
echo '<br>';

//ham tra ve kieu du lieu va do dai
var_dump($nameEmail);
echo '<br>';

//ham su dung voi array va object
print_r($fullName);

//khai bao hằng

define("sms",'Xin Chao PHP');
echo sms;

echo '<br>';

const sms1 = 'Xin Chao PHP';
echo sms1;



?>
<!-- //CAC HAM THAO TAC VOI CHUOI -->
<!-- strlen(): Hàm này được sử dụng để đếm số ký tự trong một chuỗi.

strpos(): Hàm này được sử dụng để tìm kiếm vị trí xuất hiện đầu tiên của một chuỗi con trong chuỗi cha.

str_replace(): Hàm này được sử dụng để thay thế một chuỗi con bằng chuỗi khác trong một chuỗi.

substr(): Hàm này được sử dụng để trích xuất một chuỗi con từ một chuỗi dựa trên vị trí bắt đầu và kết thúc được chỉ định.

strtolower(): Hàm này được sử dụng để chuyển đổi tất cả các ký tự trong chuỗi sang chữ thường.

strtoupper(): Hàm này được sử dụng để chuyển đổi tất cả các ký tự trong chuỗi sang chữ hoa.

trim(): Hàm này được sử dụng để xóa bỏ các khoảng trắng và các ký tự không mong muốn khác từ đầu và cuối của một chuỗi.

explode(): Hàm này được sử dụng để tách một chuỗi thành một mảng dựa trên một ký tự phân cách được chỉ định.

implode(): Hàm này được sử dụng để nối các phần tử trong một mảng thành một chuỗi, với ký tự phân cách được chỉ định.

strip_tags(): Hàm này được sử dụng để loại bỏ các thẻ HTML và PHP khỏi một chuỗi. -->