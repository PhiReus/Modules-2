<?php
    include_once 'db.php';?>
<?php
     $sql = "SELECT * FROM `nhan_sus`";
     $stmt = $conn->query($sql);
     $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
     $nhan_sus = $stmt->fetchAll();
     $error = [];
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $ten = $_REQUEST['ten'];
        $vitri = $_REQUEST['vi_tri'];
        $chinhanh = $_REQUEST['chi_nhanh'];
        $tuoi = $_REQUEST['tuoi'];
        $ngaylamviec = $_REQUEST['ngay_lam_viec'];
        $luong = $_REQUEST['luong'];

        if($ten == ""){
            $error['ten'] = 'Bạn chưa tên';
            }
          if($vitri == ""){
            $error['vi_tri'] = 'Bạn chưa nhập vị trí';
            }
          if($chinhanh == ""){
            $error['chi_nhanh'] = 'Bạn chưa nhập gchi nhánh';
            }
            if($tuoi == ""){
                $error['tuoi'] = 'Bạn chưa nhập tuổi';
                }
                if($ngaylamviec == ""){
                  $error['ngay_lam_viec'] = 'Bạn chưa nhập ngày làm việc';
                  }
                  if($luong == ""){
                    $error['luong'] = 'Bạn chưa nhập lương';
                    }      


                if (count($error) == 0){
                    $sql = "INSERT INTO nhan_sus(ten,vi_tri,chi_nhanh,tuoi,ngay_lam_viec,luong) VALUES('$ten','$vitri','$chinhanh','$tuoi','$ngaylamviec','$luong')";
        //Debug sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $conn->exec($sql);

        //Chuyen huong
        header("Location: list.php");
                }
        //Viet cau truy van
        
    }
    ?>
<div class="container-fluid px-4">
  <h1>Thêm nhân sự</h1>
  <form action="" method="post">
    <div class="form-group">
      <label for="ten">Tên Nhân Sự:</label>
      <input type="text" class="form-control" id="ten" name="ten" required>
      <div class="text-danger"><?php echo isset($error['ten']) ? $error['ten'] : ''; ?></div>
    </div>
    <div class="form-group">
      <label for="vi_tri">Vị Trí:</label>
      <select class="form-control" id="vi_tri" name="vi_tri" required>
        <?php foreach ($nhan_sus as $category) : ?>
          <option value="<?php echo $category['vi_tri']; ?>"><?php echo $category['vi_tri']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="chi_nhanh">Chi Nhánh:</label>
      <select class="form-control" id="chi_nhanh" name="chi_nhanh" required>
        <?php foreach ($nhan_sus as $category) : ?>
          <option value="<?php echo $category['chi_nhanh']; ?>"><?php echo $category['chi_nhanh']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="tuoi">Tuổi:</label>
      <input type="text" class="form-control" id="tuoi" name="tuoi" required>
      <div class="text-danger"><?php echo isset($error['tuoi']) ? $error['tuoi'] : ''; ?></div>
    </div>
    <div class="form-group">
      <label for="ngay_lam_viec">Ngày Làm Việc:</label>
      <input type="date" class="form-control" id="ngay_lam_viec" name="ngay_lam_viec" required>
      <div class="text-danger"><?php echo isset($error['ngay_lam_viec']) ? $error['ngay_lam_viec'] : ''; ?></div>
    </div>
    <div class="form-group">
      <label for="luong">Lương:</label>
      <input type="text" class="form-control" id="luong" name="luong" required>
      <div class="text-danger"><?php echo isset($error['luong']) ? $error['luong'] : ''; ?></div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
    <a href="list.php" class="btn btn-secondary">Thoát</a>
  </form>
</div>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>