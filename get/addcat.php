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

Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque iusto, animi voluptas laboriosam aut, deserunt facere earum assumenda praesentium officiis sequi necessitatibus similique nihil voluptate. Recusandae earum itaque eius ex!