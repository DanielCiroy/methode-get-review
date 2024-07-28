<?php

$nom=$description="";
$nomErr=$descriptionErr="";


if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_POST['nom'])){
    if(empty($_POST['nom'])){
        $nomErr="le champ nom est vide";
    }else{
        $nom=verif_data($_POST['nom']);
    }
}else{
    $nom="les noms n'existent pas!!";
}

if(isset($_POST['description'])){
    if(empty($_POST['description'])){
        $descriptionErr="le champ description est vide";
    }else{
        $description=verif_data($_POST['description']);
    }
}else{
    $descriptionErr="la description n'existent pas";
}
}



 function verif_data($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripcslashes($data);

    return $data;
  }

  if(!empty($nom) && !empty($description)){
    echo $nom;
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Ajouter Categorie</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" name="nom">
              <span><?=$nomErr ?></span>
        </div>
        <div>
            <label for="description">Description :</label>
            <textarea name="description" id=""></textarea>
            <span><?=$descriptionErr ?></span>
        </div>
        <input type="submit" value="ADD">
    </form>
</body>
</html>

Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem illo adipisci doloribus laboriosam blanditiis vitae totam fuga, perspiciatis doloremque corrupti assumenda, non sapiente veniam mollitia labore vel provident, accusantium voluptate tenetur et alias. Eius odio possimus facilis cupiditate iste inventore nam quo ab quas dolores. Accusantium ipsum dignissimos, debitis nobis eveniet optio blanditiis, asperiores vel placeat ducimus provident veniam velit harum molestias, nihil omnis non delectus pariatur voluptatem neque tempore corrupti? Hic deleniti atque dolores autem nihil sint, sunt vitae nulla vero quis eligendi harum impedit similique labore sed saepe, dignissimos earum at! Natus, corporis impedit beatae blanditiis similique culpa!