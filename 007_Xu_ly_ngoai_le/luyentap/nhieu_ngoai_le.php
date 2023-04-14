<?php
$age = 51;

class Exception1 extends Exception{
    public function errorMessage(){
        return $this->getMessage();
    }
}

class Exception2 extends Exception{
    public function errorMessage(){
        return $this->getMessage();
    }
}

class Exception3 extends Exception{
    public function errorMessage(){
        return $this->getMessage();
    }
}

try{
    if(!is_int($age)){
        throw new Exception1("Tuổi phải là số");
    }
    if($age < 18){
        throw new Exception2("Tuổi phải lớn hơn 18");
    }
    if($age >= 50){
        throw new Exception3("Tuổi phải nhỏ hơn 50");
    }

}catch(Exception1 $e){
    echo $e->errorMessage();
}catch(Exception2 $e){
    echo $e->getMessage();
}catch(Exception3 $e){
    echo $e->errorMessage();
}
?>