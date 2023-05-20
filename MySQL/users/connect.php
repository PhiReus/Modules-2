<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "my_database";

$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if($connect){
    mysqli_query($connect,"SET NAMES 'utf8'");
}else{
    echo "Kết nối thất bại !".mysqli_connect_error();
}
?>