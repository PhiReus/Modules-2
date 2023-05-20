<?php
include_once 'db.php';//$conn
$sql = "SELECT * FROM customers";

$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 

// Lay ve du lieu nhieu hon 1
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// die();
?>