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


Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae porro nesciunt inventore omnis ipsa alias saepe consequatur! Necessitatibus laudantium adipisci corrupti at sapiente pariatur magnam exercitationem, rerum nobis voluptate ullam iusto delectus voluptates distinctio repellat numquam mollitia facilis similique incidunt dolores asperiores. Vitae numquam possimus excepturi eius praesentium eum repellat quis eveniet officiis? Provident, aliquid vitae rerum corporis deserunt magni dolores exercitationem ducimus facere blanditiis et quam veniam cum voluptatum, autem quos. Cumque numquam sapiente nisi impedit provident saepe obcaecati quo. Eveniet a recusandae quos necessitatibus quidem, sint culpa voluptates laboriosam, eum, reiciendis fugit aliquam praesentium dicta exercitationem excepturi delectus?