<?php
require_once "connect.php";
$sql = "SELECT * FROM `loai_sach`";
// $sql = "SELECT * FROM `loai_sach`";
$result = mysqli_query($conn, $sql);
$loai_sach = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liet ke sach </title>
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
    <h1>Danh sách những cuốn sách</h1><br>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
      Thêm sách
    </button>
    <br> <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>STT</th>
          <th>Tên sách</th>
          <th>Thể loại sách</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //ketnoi
        //cau lenh
        $lietke_sql = "SELECT book.*,loai_sach.ten_loai_sach AS category_name FROM `book`
        JOIN loai_sach ON book.loai_sach_id  = loai_sach.id";
        //thuc thi cau lenh
        $result = mysqli_query($conn, $lietke_sql);
        $i = 0;
        //duyet qua result và in ra
        while ($r = mysqli_fetch_assoc($result)) {
          $i++
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $r['ten_sach']; ?></td>
            <td><?php echo isset($r['category_name']) ? $r['category_name'] : ''; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">Edit</a>
              <a onclick="return confirm('Bạn có chắc chắn muốn xóa ?');" href="delete.php?id=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a>
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
          <h4 class="modal-title">Form thêm sách</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">


          <div class="container">
            <h2>Nhập sách muốn thêm :</h2>
            <form action="create.php" method="POST">

              <div class="form-group">
                <lable for="tensach">Tên sách</lable>
                <input type="text" class="form-control" name="ten_sach">
                <label class="form-label">THELOAISACH</label>
                <select name="loai_sach_id" class="form-control">
                  <?php foreach ($loai_sach as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['ten_loai_sach']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <button class="btn btn-success">add</button>
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