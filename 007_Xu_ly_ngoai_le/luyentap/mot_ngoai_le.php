<?php
$email = "a@gmailom";

try{
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        throw new Exception("Sai định dạng email");
    }
}catch(Exception $e) {
    echo $e->getMessage();
}

?>