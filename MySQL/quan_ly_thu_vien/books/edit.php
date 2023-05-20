<?php
//lấy id của edit
$id = $_GET['id'];

//ket noi

require_once 'connect.php';

//câu lệnh để lấy thông tin về sinh viên có id = $id
$edit_sql = "SELECT * FROM book WHERE id = $id";

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
  <title>Edit sách</title>
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
       <h1>Form edit sách</h1>
       <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>" id="">
       <div class="form-group">
            <lable for="tensach">Tên sách</lable>
            <input type="text" id="ten_sach" class="form-control" name = "tensach" value ="<?php echo $row['ten_sach']?>">
       </div>
       <div class="form-group">
            <lable for="tensach">Thuộc Danh Mục</lable>
            <input type="text" id="ten_sach" class="form-control" name = "tensach" value ="<?php echo $row['ten_sach']?>">
       </div>
       
      
       
       <button class="btn btn-success">Update</button>
       </form>
  </div>
</body>
</html>
