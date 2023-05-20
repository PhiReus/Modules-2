<?php
// Kết nối đến cơ sở dữ liệu MySQL
include "connect1.php";


// Lấy danh sách các bảng trong cơ sở dữ liệu
$sql = "SHOW TABLES";
$result = mysqli_query($conn, $sql);


// Hiển thị danh sách các bảng
if (mysqli_num_rows($result) > 0) {
  echo "Các bảng trong cơ sở dữ liệu:";
  echo "<ul>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<li>" . $row["Tables_in_quan_ly_thu_vien"] . "</li>";
  }
  echo "</ul>";
} else {
  echo "Không có bảng nào trong cơ sở dữ liệu.";
}

// Đóng kết nối
mysqli_close($con);
?>
