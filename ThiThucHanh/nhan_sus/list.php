<?php include_once 'db.php'; ?>
<?php
// để xác định số lượng bản ghi hiển thị trên mỗi trang.
$records_per_page = 3;
// sử dụng để lấy số trang hiện tại từ tham số truy vấn URL. Nếu tham số truy vấn không tồn tại, thì số trang được đặt là 1.
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
//  $start_index và $limit được tính toán để xác định vị trí bắt đầu của bản ghi và số bản ghi được hiển thị trên trang hiện tại.
$start_index = ($current_page - 1) * $records_per_page;
// $limit lưu trữ số lượng bản ghi hiển thị trên mỗi trang, được tính dựa trên biến $records_per_page.
$limit = $records_per_page;
//đếm tổng số bản ghi trong bảng
$sql_count = "SELECT COUNT(*) AS total_records FROM nhan_sus";
$sql = "SELECT * FROM `nhan_sus`";
    $msg = isset( $_GET['msg'] ) ? $_GET['msg'] : '';
if (isset($_GET["s"]) && !empty(trim($_GET["s"]))) {
    $s = $_GET["s"];
    $sql .= " WHERE nhan_sus.ten LIKE '$s' OR nhan_sus.vi_tri LIKE '$s'OR nhan_sus.chi_nhanh LIKE '$s' OR nhan_sus.tuoi LIKE '$s' OR nhan_sus.ngay_lam_viec LIKE '$s'";
}
else{
        $sql .= " LIMIT $start_index, $limit";
}
$stmt_count = $conn->query($sql_count);
$total_records = $stmt_count->fetch(PDO::FETCH_ASSOC)['total_records'];

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$nhan_sus = $stmt->fetchAll();
?>
<div class="container-fluid px-4">
    <a class="btn btn-success" href="add.php"> Thêm mới </a>
    <p class="mt-3"><?= $msg ?></p>
<!-- form tìm kiếm -->
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="list.php" method="get">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." name="s" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <table class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>Mã Nhân Sự</th>
            <th>Tên Nhân Sự</th>
            <th>Vị Trí</th>
            <th>Chi Nhánh</th>
            <th>Tuổi</th>
            <th>Ngày Làm Việc</th>
            <th>Lương</th>
            <th>Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $nhan_sus as $key => $row ):
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $key+1;?> </td>
                <td><?php echo $row['ten'];?></td>
                <td><?php echo $row['vi_tri'];?></td>
                <td><?php echo $row['chi_nhanh'];?></td>
                <td><?php echo $row['tuoi'];?></td>
                <td><?php echo $row['ngay_lam_viec'];?></td>
                <td><?php echo $row['luong'];?></td>
                <td style="display: flex;">
                    <a class="btn btn-primary" href="edit.php?id=<?= $row['id'] ;?>">Sửa</a> <br>
                    <a class="btn btn-danger" onclick="return confirm('bạn có muốn xóa sinh viên này không ?');" href="delete.php?id=<?= $row['id'] ;?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php if ($total_records > $records_per_page) : ?>
        <div class="pagination justify-content-center">
            <?php
            // khi mà trang đang nằm ở vị số 1 thì k có phần này
            $total_pages = ceil($total_records / $records_per_page);
            if ($current_page > 1) :
            ?>
                <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Trang trước">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            <?php endif; ?>
                 <!-- lấy ra được số lượng trang -->
            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <?php if ($i == $current_page) : ?>
                    <a class="page-link active" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php else : ?>
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>
            <!-- hiển thị khi mà không phải trang cuối cùng -->
            <?php if ($current_page < $total_pages) : ?>
                <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Trang sau">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>