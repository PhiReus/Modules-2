<?php
$duong = 'xau';


try{
    if($duong == 'xau'){
        throw new Exception("Đi vòng");
    }
    echo "Đi thẳng";
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "ve nha";
}
?>