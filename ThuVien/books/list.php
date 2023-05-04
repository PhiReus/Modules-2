<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT book.*,loai_sach.ten_loai_sach AS category_name FROM `book`
JOIN loai_sach ON book.loai_sach_id = loai_sach.id";
// echo '<pre>';
// print_r($_GET);
// die();
if (isset($_GET["s"])) {
    $s = $_GET["s"];
    $sql .= " WHERE book.ten_sach LIKE '%$s%'";
}

//Debug sql
// var_dump($sql);
// die();

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array 
$books = $stmt->fetchAll();
?>
<?php include_once '../includes/header.php'; ?>
<br><br>
<div class="container-fluid px-4">
    <a class="btn btn-success" href="add.php"> Thêm mới </a>
    <br><br>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>THỂ LOAỊ SÁCH</th>
                <th>TEN SACH</th>
                <th>THAO TÁC</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $key => $row) :
                // echo '<pre>';
                // print_r($row);
                // die();
            ?>
                <tr>
                    <td> <?php echo  $key + 1; ?> </td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['ten_sach']; ?></td>
                    <td style="display: flex;">
                        <a class="btn btn-primary" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include_once '../includes/footer.php'; ?>