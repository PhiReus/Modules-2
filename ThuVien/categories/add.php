<?php
    include_once '../db.php';?>
<?php
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        
        $THELOAISACH = $_REQUEST['name'];
        


        //Viet cau truy van
        $sql = "INSERT INTO loai_sach(ten_loai_sach) VALUES('$THELOAISACH')";
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
    }
?>
<?php include_once '../includes/header.php'; ?>

<div class="container-fluid px-4">
<h2>Thêm mới thể loại</h2>
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">THELOAISACH</label>
    <input type="text" class="form-control" name="name">
  </div>
  <input type="submit" value="Them">
</form>

</div>