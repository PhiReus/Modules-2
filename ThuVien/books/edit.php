<?php
    include_once '../db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `loai_sach`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $categories = $stmt->fetchAll();
 
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `book` WHERE id = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array

    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();
    //  echo '<pre>';
    // print_r($row['category_id']);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $THELOAISACH = $_REQUEST['loai_sach_id'];
        $TENSACH = $_REQUEST['name'];
      

        //Viet cau truy van
        $sql = "UPDATE `book` SET 
        loai_sach_id= $THELOAISACH,
        `ten_sach`='$TENSACH'        
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
<div class="container-fluid px-4">
<form action="" method="post">
    <div class="mb-3">
    <label  class="form-label">THELOAISACH</label>
    <select name="loai_sach_id" class="form-control" id="">
            <?php foreach ($categories as $category) {?>
            <option <?=$category['id'] == $row['loai_sach_id'] ? "selected" : " " ?> value="<?=$category['id'];?>"><?=$category['ten_loai_sach'];?></option>
            <?php } ?>
    </select>
    </select>
  </div>
  
  <div class="mb-3">
    <label  class="form-label">TEN SACH</label>
    <input type="text" class="form-control"  value ="<?= $row['ten_sach'];?>" name="name">
  </div>
  
  <input type="submit" value="Them">
  </form>
<?php include_once '../includes/footer.php'; ?>