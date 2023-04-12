<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['sdt'])) {
        $sdt = $_POST['sdt'];
        $sdt1 = explode("\n", $sdt);

        $viettel = array();
        $vinafone = array();
        $mobifone = array();

        foreach($sdt1 as $value) {
            //lấy hai chử số đầu tiên
            $haisodau = substr($value, 0, 2);
            switch($haisodau){
                case "03":
                   $viettel[] = $value;
                   break;
                case "07":    
                   $mobifone[] = $value;
                   break;
                case "08":    
                   $vinafone[] = $value;
                   break;
                default :  
                   echo "Không có số của nhà mạng nào";
                   break; 
            }    
        }

        echo "<p>Số điện thoại Viettel:</p>";
        print_r($viettel);
        echo "<p>Số điện thoại Mobifone:</p>";
        print_r($mobifone);
        echo "<p>Số điện thoại Vinaphone:</p>";
        print_r($vinafone);
    }
}
?>

<form action="" method="post">
    <label for="sdt">Nhập số điện thoại :</label><br>
    <textarea name="sdt" id="sdt" cols="30" rows="10"></textarea><br>
    <input type="submit" value="Phân tách"><br>
</form>