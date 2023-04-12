<style>
    .sms{
        background-color: green;
            width: 500px;
            border: 1px solid #ccc;
            margin: 25px;
            padding: 10px;
            float: left;
    }
    input{
        color: peru;
    }
    label{
        color: black;
    }
</style>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    // echo '<br>'.$_REQUEST['ten'];
    // echo '<br>'.$_REQUEST['matkhau'];

    $ten = $_REQUEST['ten'];
    $matkhau = $_REQUEST['matkhau'];

    if($ten == 'admin' && $matkhau == 'admin'){
        echo 'Xin chào !';
    }
    else {
        echo ' Đăng nhập thất bại';
    }
}
?>

<form class='sms' action="" method='post'>

    <h2>LOGIN</h2>
    <label for="ten">Tên :</label><br>
     <input type="text" name="ten"><br>
    <label for="matkhau">Mật Khẩu :</label><br>
     <input type="password" name="matkhau"><br>
    <input type="submit" name="Gửi" ><br>
</form>
        
