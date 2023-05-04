<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `students`";

if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $sql .= " WHERE students.ten LIKE '%$s%'";

}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$students = $stmt->fetchAll();
?>
<?php include_once '../includes/header.php'; ?>
<div class="container-fluid px-4">
    <br><br>
<a class="btn btn-warning" href="add.php"> Thêm mới </a>
<br><br>
<table border="1" class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TEN</th>
            <th>DIACHI</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>IMAGE</th>
            <th>Sửa, Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $students as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $key+1;?> </td>
                <td><?php echo $row['ten'];?></td>
                <td><?php echo $row['dia_chi'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><img width="100" src="<?php echo ROOT_URL . $row['image'];?>" alt=""> </td>
                <td style="display: flex;">
                    <a class="btn btn-primary" href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"  href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../includes/footer.php'; ?>