<style>
    .sms {
        background-color: darksalmon;
        width: 400px;
        border: 1px;
        margin: 10px;
    }

    input {
        color: black;
        font-size: initial;
    }

    label {
        color: black;
        font-size: 20px;
    }
</style>

<?php
if ($_POST) {
    $amount = $_POST['amount'];
    $rate = ($_POST['rate']);
    $year = $_POST['year'];

    $tuonglai = $amount;
    for ($i = 1; $i < $year; $i++) {
        $tuonglai = $amount + ($amount * $rate);
    }
    $tuonglai = round($tuonglai, 2);
    echo 'Số lượng tiền gửi : ' . $amount . ' VND ' . '<br>';
    echo 'Năm : ' . $year . ' năm ' . '<br>';
    echo 'Lãi suất : ' . $rate . ' % ' . '<br>';
    echo 'Tương Lai nhận được : ' . $tuonglai . ' VND ' . '<br>';
}
?>

<h1>Tính lãi suất</h1>
<form class="sms" action="" method="POST">
    <label for="amout">Số lượng Tiền : </label><br>
    <input type="text" name="amount" id=""><br>

    <label for="rate">Lãi suất :</label><br>
    <input type="text" name="rate" id=""><br>

    <label for="year">Năm :</label><br>
    <input type="text" name="year" id=""><br>

    <input type="submit" value="Convert">
</form>