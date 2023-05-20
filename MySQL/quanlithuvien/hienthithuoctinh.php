<?php
include "connect1.php";

//hiển thị lên trang web
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - ten: " . $row["ten"]. " - phone: " . $row["phone"]. "<br>";
  }
} else {
  echo "0 results";
}

?>


