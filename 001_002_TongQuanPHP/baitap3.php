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
<h1>SẢN PHẨM CHIẾT KHẤU</h1>
<form class ="asus" action="./display_bt3.php" method="POST">

    <label for="mota">Mô tả :</label><br>
    <input type="text" name="mota"><br>

    <label for="gia">Giá :</label><br>
    <input type="text" name="gia"><br>

    <label for="phantram">Chiết khấu :</label><br>
    <input type="text" name="phantram"><br>

    <input type="submit" value="Tính Chiết Khấu">

</form>