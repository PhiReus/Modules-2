<h1>Mô tả về sản phẩm :</h1>
<?php
if ($_POST) {
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $phantram = $_POST['phantram'];

    $Amount = $gia;
    $Amount = $gia * $phantram * 0.1;

    echo 'Mô tả sản phẩm : ' . $mota . '<br>';
    echo 'Giá niêm yết của sản phẩm là : ' . $gia . '<br>';
    echo 'Phần trăm chiết khấu : ' . $phantram . ' % ' . '<br>';
    echo 'Giá sau khi đả được chiết khấu : ' . $Amount . '<br>';
}



?>