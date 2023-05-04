<?php
    include_once '../db.php';?>
<?php
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $TEN = $_REQUEST['ten'];
        $DIACHI = $_REQUEST['dia_chi'];
        $EMAIL = $_REQUEST['email'];
        $PHONE = $_REQUEST['phone'];
        $ANH = '';

        if (isset($_FILES['image']))
        {
            if (!$_FILES['image']['error'])
            {
                move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['ten']);
                $ANH = '/public/uploads/'.$_FILES['image']['ten'];
            }
        }
        


        //Viet cau truy van
        $sql = "INSERT INTO students(ten,dia_chi,email,phone,image) VALUES('$TEN','$DIACHI','$EMAIL','$PHONE','$ANH')";
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
<h3>Thay đổi thông tin</h3>
<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">TEN</label>
    <input type="text" class="form-control" name="ten">
  </div>
  <div class="mb-3">
    <label  class="form-label">DIA CHI</label>
    <input type="text" class="form-control" name="dia_chi">
  </div>
  <div class="mb-3">
  <label  class="form-label">EMAIL</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
  <label  class="form-label">PHONE</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="mb-3">
  <label  class="form-label">ANH</label>
    <input type="file" class="form-control" name="image">
  </div>
  <input type="submit" value="Them">
</form>

</div>