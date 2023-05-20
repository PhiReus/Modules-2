<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "quan_ly_thu_vien";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");
}else{
    echo "Kết nối thất bại !".mysqli_connect_error();
}

?>