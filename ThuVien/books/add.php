
<?php
    include_once '../db.php';?>
<?php
    // Lay toan bo the loai
    $sql = "SELECT * FROM `loai_sach`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $categories = $stmt->fetchAll();
// var_dump($categories);
// die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // $MASACH = $_REQUEST['id'];
        $THELOAISACH = $_REQUEST['loai_sach_id'];
        $TENSACH = $_REQUEST['ten_sach'];


        //Viet cau truy van
        $sql = "INSERT INTO book(loai_sach_id,ten_sach) VALUES($THELOAISACH,'$TENSACH')";
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
<h3>Thêm mới sản phẩm</h3>
<form action="" method="post">
  <div class="mb-3">
    <label  class="form-label">THELOAISACH</label>
    <select name="loai_sach_id" class="form-control">
    <?php foreach( $categories as $category ): ?>
      <option value="<?php echo $category['id'];?>"><?php echo $category['ten_loai_sach'];?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label  class="form-label">TEN SACH</label>
    <input type="text" class="form-control" name="ten_sach">
  </div>
  
  <input type="submit" value="Them">
  
</form>

</div>