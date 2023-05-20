<?php
//b1 : nhúng file
include 'connect.php';

//b2: truy vấn SQL
$sql = "SELECT * FROM user_soccer";
$query = mysqli_query($connect,$sql);

//b3: đếm số kết quả trả về của truy vấn
$total_row = mysqli_num_rows($query);
//trả về số kết quả của câu truy vấn(in ra tổng số thành viên)
echo $total_row."<br>";

// $row = mysqli_fetch_array($query);
// echo $row['name'];
?>

<?php
while($row = mysqli_fetch_array($query)){
     echo "Tên các cầu thủ là : ". $row['name']."<br>";
}
?>

