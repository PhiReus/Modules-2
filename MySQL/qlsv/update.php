<?php
//nhận dử liệu từ fom
$ht = $_POST['hoten'];
$masv = $_POST['masv'];
$lop = $_POST['lop'];
$id = $_POST['id'];

//ket nối CSDL
require_once "ketnoi.php";

//viết lệnh sql để thêm dử liệu
$update_sql = "UPDATE sinhvien SET masv='$masv', hoten='$ht', lop='$lop' WHERE id=$id";
// echo $themsql;exit;

//thuc thi cau lenh them
if(mysqli_query($conn,$update_sql)){
    // in thoong baos thanh cong
    // trở về trang lietke
    header("Location: lietke.php");
}

