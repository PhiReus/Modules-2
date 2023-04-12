<style>
    .sms {
        background-color: bisque;
        width: 400px;
        border: 3px;
        margin: 20;
        padding: 30px;
        border: 2px;
    }

    input {
        background-attachment: fixed;
    }

    h1 {
        color: chocolate;
    }
</style>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tien = $_POST['tien'];
    $doi = $_POST['doi'];

    switch ($doi) {
        case 'USD':
            echo $tien = $tien * 23000;
        case 'VND':
            echo $tien = $tien / 23000;
    }
}
?>
<h1>CHUYỂN ĐỔI TIỀN TỆ</h1>
<form class="sms" action="" method="POST">
    <input type="text" name="tien"><br><br>

    <select name="doi"><br>
        <option value="USD">USD</option>
        <option value="VND">VND</option>
    </select><br><br>

    <input type="submit" value="Đổi">
</form>