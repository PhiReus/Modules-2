<?php
    include_once 'db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `nhan_sus`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $nhan_sus = $stmt->fetchAll();
     
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `nhan_sus` WHERE id = $id";
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
        $ten = $_REQUEST['ten'];
        $vitri = $_REQUEST['vi_tri'];
        $chinhanh = $_REQUEST['chi_nhanh'];
        $tuoi = $_REQUEST['tuoi'];
        $ngaylamviec = $_REQUEST['ngay_lam_viec'];
        $luong = $_REQUEST['luong'];

        //Viet cau truy van
        $sql = "UPDATE nhan_sus SET 
                ten = '$ten',
                vi_tri = '$vitri',
                chi_nhanh = '$chinhanh',
                tuoi = '$tuoi',
                ngay_lam_viec = '$ngaylamviec',
                luong = '$luong'
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
<div class="container">
    <form action="" method="post">
        <div class="form-group">
            <label for="ten">Tên Nhân Sự:</label>
            <input type="text" class="form-control" id="ten" name="ten" value="<?= $row['ten']; ?>">
        </div>
        <div class="form-group">
            <label for="vi_tri">Vị Trí:</label>
            <select class="form-control" id="vi_tri" name="vi_tri">
                <?php foreach ($nhan_sus as $nhan_su) { ?>
                    <option <?= $nhan_su['id'] == $row['vi_tri'] ? "selected" : "" ?> value="<?= $nhan_su['id']; ?>"><?= $nhan_su['vi_tri']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="chi_nhanh">Chi Nhánh:</label>
            <select class="form-control" id="chi_nhanh" name="chi_nhanh">
                <?php foreach ($nhan_sus as $nhan_su) { ?>
                    <option <?= $nhan_su['id'] == $row['chi_nhanh'] ? "selected" : "" ?> value="<?= $nhan_su['id']; ?>"><?= $nhan_su['chi_nhanh']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="tuoi">Tuổi:</label>
            <input type="text" class="form-control" id="tuoi" name="tuoi" value="<?= $row['tuoi']; ?>">
        </div>
        <div class="form-group">
            <label for="ngay_lam_viec">Ngày Làm Việc:</label>
            <input type="date" class="form-control" id="ngay_lam_viec" name="ngay_lam_viec" value="<?= $row['ngay_lam_viec']; ?>">
        </div>
        <div class="form-group">
            <label for="luong">Lương:</label>
            <input type="text" class="form-control" id="luong" name="luong" value="<?= $row['luong']; ?>">
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
