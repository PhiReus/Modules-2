<style>
    .asus {
        background-color: bisque;
        width: 400px;
        border: 3px;
    }

    input {
        background-attachment: fixed;
    }

    h1 {
        color: chocolate;
    }
</style>

<?php
if ($_POST) {
    $sothunhat = $_POST['sothunhat'];
    $pheptinh = $_POST['pheptinh'];
    $sothuhai = $_POST['sothuhai'];

    switch ($pheptinh) {
        case '+':
            echo $sothunhat + $sothuhai;
            break;
        case '-':
            echo $sothunhat - $sothuhai;
            break;
        case '*':
            echo $sothunhat * $sothuhai;
            break;
        case '/':
            if ($sothuhai != 0) {
                echo $sothunhat / $sothuhai;
            } else {
                echo 'Tao không biết chia';
            }
            break;
    }
}
?>

<form class="asus" action="" method="POST">
    Số thứ nhất : <input type="text" name="sothunhat" id=""><br>

    Phép Tính : <select name="pheptinh"><br>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br>

    Số thứ hai : <input type="text" name="sothuhai" id=""><br>
    <input type="submit" name="Tính" id="">
</form>