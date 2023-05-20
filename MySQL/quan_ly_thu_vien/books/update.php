<?php
//nhận dử liệu từ fom
$id = $_POST['id'];
$ten_sach = $_POST['ten_sach'];

//ket nối CSDL
require_once "connect.php";

//viết lệnh sql để thêm dử liệu
$update_sql = "UPDATE book SET id='$id', ten_sach='$ten_sach' WHERE id=$id";
// echo $themsql;exit;

//thuc thi cau lenh them
if(mysqli_query($conn,$update_sql)){
    // in thoong baos thanh cong
    // trở về trang lietke
    header("Location: index.php");
}