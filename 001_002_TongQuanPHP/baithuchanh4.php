<?php
$TuDien = [
    'hello' => 'xin chào',
    'bye' => 'tạm biệt',
    'how' => 'thế nào',
    'computer' => 'máy tính'
];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $timkiem = $_REQUEST['timkiem'];
    $flag = 0;
    foreach($TuDien as $key => $value){
        if($key == $timkiem){
            echo 'Từ : '.$key.' '.'<br> Nghĩa của từ :'.$value;
            echo '<br>';
            $flag = 1;
        }
    }
    if($flag == 0) {
        echo 'Không tìm thấy từ cần tìm kiếm';
    }
}

?>

    <h1>Từ điển Anh - Việt</h1>
    <form method="POST">
        <input type="text" name="timkiem" placeholder="Nhập từ cần tìm">
        <input type="submit" value="Tìm">    
    </form>