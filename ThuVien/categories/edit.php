<?php
    include_once '../db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();

     
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `loai_sach` WHERE id = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();

    //  echo '<pre>';
    // print_r($row);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $THELOAISACH = $_REQUEST['name'];

        //Viet cau truy van
        $sql = "UPDATE `loai_sach` SET 
        ten_loai_sach	 = '$THELOAISACH'
         WHERE id = $id
        ";
       
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
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">THE LOAI SACH</label>
      <input type="text" class="form-control" name="name" value="<?= $row['ten_loai_sach']; ?>">
    </div>
    <input type="submit" value="Xong">
  </form>

<?php include_once '../includes/footer.php'; ?>
