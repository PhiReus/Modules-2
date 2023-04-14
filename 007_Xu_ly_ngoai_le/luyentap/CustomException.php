<?php
 class CustomException extends Exception
 {
     public function errorMessage()
     {
         return 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
             . ': <b>' . $this->getMessage() ;
     }
 }
 $duong = 'dep';
 $thoitiet ='dep';

try{
    if($duong == 'xau'){
        throw new CustomException("Đi vòng");
    }
    if($thoitiet == 'dep'){
        throw new Exception("Đi nhậu");
    }
    echo "Đi thẳng";
}catch(CustomException $e){
    echo $e->errorMessage();
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "<br> Finally : ve nha";
}
?>