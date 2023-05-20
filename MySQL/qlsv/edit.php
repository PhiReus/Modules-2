<?php
//lấy id của edit
$id = $_GET['id'];

//ket noi

require_once 'ketnoi.php';

//câu lệnh để lấy thông tin về sinh viên có id = $id
$edit_sql = "SELECT * FROM sinhvien WHERE id = $id";

$result = mysqli_query($conn,$edit_sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- hiển thị thông tin lên form -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit sinh vien</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
       <h1>Form edit sinh viên</h1>
       <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>" id="">
       <div class="form-group">
            <lable for="hoten">Họ tên</lable>
            <input type="text" id="hoten" class="form-control" name = "hoten" value ="<?php echo $row['hoten']?>">
       </div>
       <div class="form-group">
            <lable for="masv">Mã sinh viên</lable>
            <input type="text" id="masv" name="masv" class="form-control" value ="<?php echo $row['masv']?>">
       </div>
       <div class="form-group">
            <lable for="lop">Lớp</lable>
            <input type="text" id="lop" name="lop" class="form-control" value ="<?php echo $row['lop']?>">
       </div>
       <button class="btn btn-success">Update</button>
       </form>
  </div>
</body>
</html>
