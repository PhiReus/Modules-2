<?php
//lấy dử liệu từ id cần xóa
$id = $_GET['id'];

//ket noi

require_once "ketnoi.php";
//cau lệnh sql
$xoa_sql = " DELETE FROM sinhvien WHERE id = $id";

mysqli_query($conn,$xoa_sql);
// echo "<h1>Xóa thành công</h1>";

//trở về trang lietke 
header("Location: lietke.php");
