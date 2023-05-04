<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `loai_sach`";

if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE loai_sach.ten_loai_sach LIKE '%$s%'";

}

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$loai_sach = $stmt->fetchAll();
?>
<?php include_once '../includes/header.php'; ?>
<div class="container-fluid px-4">
    <br><br>
<a class="btn btn-info" href="add.php"> Thêm mới </a>
<br><br>
<table border="1" class="table">
    <thead>
        <tr>
            <th>MASACH</th>
            <th>THELOAISACH</th>
            <th>THAO TAC</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $loai_sach as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $key+1;?> </td>
                <td><?php echo $row['ten_loai_sach'];?></td>
                <td  style="display: flex;">
                    <a class="btn btn-success" href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../includes/footer.php'; ?>