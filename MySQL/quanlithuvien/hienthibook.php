<?php
include "connect1.php";

// Lấy dữ liệu từ bảng
$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);

// Hiển thị dữ liệu trong bảng HTML
if (mysqli_num_rows($result) > 0) {
  echo "<table border = 1>";
  echo "<tr>
            <th>STT</th>
            <th>Tên Sách</th>
            <th>Mã loại sách</th>
        </tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["ten_sach"] . "</td>";
    echo "<td>" . $row["loai_sach_id"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "Không có dữ liệu nào trong bảng.";
}

// Đóng kết nối
mysqli_close($conn);



