<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    
 $username=$pwd="";

 if(isset($_POST['username']) && isset($_POST['pwd'])){
    if(!empty($_POST['username']) && !empty($_POST['pwd'])){
        $username= $_POST['username'];
        $pwd=$_POST['pwd'];

        echo $username ." : ".$pwd;
    }else{
        echo "veuillez completer tout les champs";
    }
 }else{
   
 }



}



 


?>