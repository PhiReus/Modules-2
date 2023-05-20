<?php
include "connect1.php";

// Lấy dữ liệu từ bảng
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border = 1>";
    echo "<tr>
              <th>STT</th>
              <th>Tên sinh viên</th>
              <th>Địa chỉ</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Ảnh</th>
          </tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>";
      echo "<td>" . $row["ten"] . "</td>";
      echo "<td>" . $row["dia_chi"] . "</td>";
      echo "<td>" . $row["email"] . "</td>";
      echo "<td>" . $row["phone"] . "</td>";
      echo "<td>" . $row["image"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
  } else {
    echo "Không có dữ liệu nào trong bảng.";
  }
  
  // Đóng kết nối
  mysqli_close($conn);
  ?>