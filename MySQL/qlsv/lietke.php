<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liet ke danh sach sinh vien</title>
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
        <h1>Danh sách sinh viên</h1><br>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
    Thêm sinh viên 
  </button>
  <br> <br>
<table class="table">
        <thead class="thead-dark">
             <tr>
                 <th>Mã sinh viên</th>
                 <th>Họ Tên</th>
                 <th>Lớp</th>
                 <th>Thao tác</th>
            </tr>
         </thead>
        <tbody>
    <?php
    //ketnoi
    require_once "ketnoi.php";
     //cau lenh
    $lietke_sql = "SELECT * FROM sinhvien order by lop,hoten";
    //thuc thi cau lenh
    $result = mysqli_query($conn, $lietke_sql);

    //duyet qua result và in ra
    while ($r = mysqli_fetch_assoc($result)) {
         ?>
        <tr>
            <td><?php echo $r['masv'];?></td>
            <td><?php echo $r['hoten'];?></td>
            <td><?php echo $r['lop'];?></td>
            <td>
                <a href="edit.php?id=<?php echo $r['id'];?>" class="btn btn-primary">Edit</a> 
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?');" href="delete.php?id=<?php echo $r['id'];?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
 </table>     
    </div>
    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Form thêm sinh viên</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quan ly sinh vien</title>
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
       <h2>Nhập sinh viên muốn thêm :</h2>
       <form action="them.php" method="POST">
       <div class="form-group">
            <lable for="hoten">Họ tên</lable>
            <input type="text" class="form-control" name = "hoten">
       </div>
       <div class="form-group">
            <lable for="masv">Mã sinh viên</lable>
            <input type="text" class="form-control" name="masv">
       </div>
       <div class="form-group">
            <lable for="lop">Lớp</lable>
            <input type="text" class="form-control" name="lop">
       </div>
       <button class="btn btn-success">Update</button>
       </form>
  </div>
</body>
</html>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
</body>

</html>