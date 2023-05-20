<?php
//nhận dử liệu từ fom
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];

//ket nối CSDL
require_once "ketnoi.php";

//viết lệnh sql để thêm dử liệu
$themsql = "INSERT INTO sinhvien (masv,hoten,lop) VALUES ('$masv','$ht','$lop')";
// echo $themsql;exit;

//thuc thi cau lenh them
if(mysqli_query($conn,$themsql)){
    //in thoong baos thanh cong
    //trở về trang lietke
    header("Location: lietke.php");
}

