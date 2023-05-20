<?php
require_once "connect.php";

//nhận dử liệu từ fom
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // $MASACH = $_REQUEST['id'];
    $THELOAISACH = $_REQUEST['loai_sach_id'];
    $TENSACH = $_REQUEST['ten_sach'];

    //Viet cau truy van
    $sql = "INSERT INTO book(loai_sach_id,ten_sach) VALUES($THELOAISACH,'$TENSACH')";

    //Debug sql
    // var_dump($sql);
    // die();
    
    //Thuc hien truy van
    if ($conn->query($sql) === TRUE) {
        //Chuyen huong
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}