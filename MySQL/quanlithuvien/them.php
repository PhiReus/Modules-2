<?php
include "connect1.php";

//thêm một danh sách mới
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST["ten"];
    $phone = $_POST["phone"];
  
    $sql = "INSERT INTO students (ten, phone) VALUES ('$ten', '$phone')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
  
?>
