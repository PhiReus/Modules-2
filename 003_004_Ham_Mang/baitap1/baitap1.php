<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; 

    function saveDataJSON($filename, $name, $email, $phone)
    {
        if ($name !== '' && $email !== '' && $phone !== '') {
             
                echo "<h3>Đăng ký thành công!</h3>";
            
        }
        //khối Try bắt lổi trong quá trình lưu dử liệu
        try{
            //ném một ngoại lệ từ một phương thức or khối mã
            if(empty($name)) throw new Exception("Vui lòng nhập tên người dùng");
            if(empty($email)) throw new Exception("Vui lòng nhập địa chỉ email");
            //kiểm tra và lọc dử liệu đầu vào
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) throw new Exception("Địa chỉ email không hợp lệ");
            if(empty($phone)) throw new Exception("Vui lòng nhập số điện thoại");

           
    
        }
        //hiển thị lổi ở khốikhối Catch
        catch( Exception $e) {
            //lấy và in ra dòng mã ở đối tượng ngoại lệ
            echo $e ->getMessage();
            //khi xảy ra lổi và muốn hiển thị thông báo
            die();
        }

        

        $contact = [
            "userName" => $name,
            "mail" => $email,
            "phone" => $phone
        ];
        //lấy dử liệu từ file json
        $dataFile = file_get_contents($filename);
        // chuyển json ==> array
        $dataJson = json_decode($dataFile);
        //thêm
        array_push($dataJson, $contact);
        //chuyển từ array sang json
        $json1 = json_encode($dataJson);
        //lưu dử liệu dạng json vào file
        return file_put_contents($filename, $json1);
    }
    //gọi hàm lưu dử liệu
    saveDataJSON('users.json', $name, $email, $phone);
}

?>
<table>
    <form action="" method="post">
        <label for="name">Tên người dùng :</label><br>
        <input type="text" name="name" id=""><br>

        <label for="email">Email :</label><br>
        <input type="text" name="email" id=""><br>

        <label for="phone">Số điện thoại :</label><br>
        <input type="text" name="phone" id=""><br>
        
        <input type="submit" value="Gửi"><br>
    </form>
</table>