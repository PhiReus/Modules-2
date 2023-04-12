<?php
//Phương thức Get_Post
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';


//kiem tra nguoi dung gui du lieu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>';

    echo '<br>'.$_REQUEST['username'];
    echo '<br>'.$_REQUEST['email'];
    echo '<br>'.$_REQUEST['password'];

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if($username == 'admin' && $password == '123') {
        echo 'Chao mung admin';
    }
    else{
        echo 'Tai khoan khong ton tai';
    }

}
?>

<form action="" method="POST">
    username : <input type="text" name="username"> <br>
    email : <input type="email" name="email"> <br>
    password : <input type="password" name="password"> <br>
    <input type="submit" value="Gui">


</form>