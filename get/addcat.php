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

Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, tempore? Sint eum animi unde doloremque! In corporis quis voluptatum facilis tempora iusto animi accusamus dolore ratione qui aliquam odit sint recusandae labore veritatis doloribus facere ex provident illum mollitia sed, quia at consectetur! Maiores incidunt maxime necessitatibus velit a officiis atque quasi vero facere natus ex ad omnis quos beatae obcaecati dignissimos at perferendis, neque nihil doloremque ipsam accusantium itaque autem officia? Quasi libero blanditiis ipsam nulla velit, itaque aperiam soluta perferendis animi perspiciatis dolore quaerat iste esse neque enim omnis magni iure sint earum? Rerum earum quas repudiandae fugiat sunt incidunt natus ipsa sit possimus sint aspernatur modi vero officia excepturi porro, commodi aperiam voluptatum. Ipsa consectetur laudantium cupiditate nobis itaque quod dolore, cumque tempore odio officiis. Incidunt asperiores cupiditate doloribus et, eum sit veniam mollitia necessitatibus reprehenderit dolorum, quaerat labore enim laudantium quae voluptatum? Quia unde voluptas ex quaerat hic ipsam, omnis odit nobis ullam similique aliquam pariatur accusantium provident repudiandae quo facilis cum? Dolore aut omnis esse voluptas consequuntur laboriosam dolores, rem porro fuga, blanditiis nam soluta. Repellat, odio quam nulla nam, esse autem facere dolorem beatae totam animi et quo consequatur placeat dolor ex! Iste culpa dolore sequi, iure quaerat ipsam debitis dolorum soluta? Numquam unde laborum fuga iste facilis cum delectus animi quia natus. Iure dolorem esse quasi amet eius autem dolor quae vitae adipisci ratione inventore, eos omnis temporibus vero mollitia accusantium modi maxime itaque pariatur facere! Adipisci non perferendis autem labore modi veniam dolores quisquam eius dolorum. Laudantium perferendis, earum commodi laborum deserunt ratione reiciendis vitae explicabo nulla aut voluptatem, quibusdam, rerum sed dolor. Eligendi excepturi doloremque fugit quos optio fuga nam, asperiores illo sequi dolore minus? Voluptatibus, aliquam quos? Magnam quibusdam laboriosam nisi blanditiis sint dolor sed neque maxime. Quos eum modi voluptas rerum veritatis, eos voluptatibus quod voluptatum reiciendis tempora inventore atque qui, autem, fugiat quam unde alias necessitatibus in aperiam? Harum atque, possimus dicta dignissimos cupiditate quis? Earum saepe molestiae repudiandae adipisci ipsum cupiditate atque aut. Magni illo natus dicta laborum magnam vero voluptatum nobis est velit voluptatem! Nesciunt ipsum id, perferendis fugiat pariatur distinctio reiciendis tempore molestiae, dolorum beatae ipsa accusamus eos, vel reprehenderit. Beatae repellendus neque inventore voluptatibus saepe id quas perspiciatis? Deserunt quisquam enim, cupiditate dolores similique quam obcaecati, exercitationem distinctio vero, soluta consequuntur doloribus incidunt aspernatur? Necessitatibus facilis consectetur quidem eveniet reiciendis alias quaerat error quisquam, ut reprehenderit hic, ex officiis officia quia. Modi, asperiores corrupti quos veniam tenetur omnis perferendis temporibus itaque reprehenderit dolores facilis eius hic, saepe sed iure velit labore ad tempora qui impedit mollitia. Commodi eos qui, rem debitis quasi porro error laudantium. Sequi provident molestiae suscipit, eaque deleniti sed itaque possimus odio! Labore impedit suscipit dolorem? Numquam odio reiciendis aperiam fugit labore facilis libero nisi illum. Odio ex placeat porro expedita, a, ducimus illo autem sit dicta rem laboriosam provident doloremque qui, itaque fugiat aspernatur nesciunt totam velit tempora voluptatum nobis. Adipisci autem odit dolores repellat amet dignissimos corrupti officia recusandae repudiandae ducimus odio rem ut reiciendis voluptas, iusto eaque ipsum fugiat tempora facere deleniti, iste excepturi. Quos, non ut alias expedita perspiciatis explicabo in rerum adipisci quam nesciunt eligendi vitae incidunt, error vel debitis quia cum, est eveniet velit cupiditate facere laudantium reiciendis doloremque eos? Hic doloremque sit accusamus laboriosam harum eius, minima qui in est rerum tenetur, eaque ex recusandae, dolore temporibus quibusdam voluptatem similique ipsam? Vitae tenetur ex illo eaque. Id voluptates at, autem omnis, veritatis quibusdam porro neque quos, optio deserunt mollitia molestias eaque ducimus officia enim unde a corporis. Cumque quae, itaque possimus obcaecati error modi provident perferendis temporibus distinctio iusto ipsam unde vero ea quasi repellendus? Eius earum dolores, ut obcaecati neque quos nulla est eos aliquid quia placeat facere temporibus? Unde ab perspiciatis dolores quae, neque tenetur architecto magni corrupti dolorum veniam et ipsa? Nam omnis eos officiis adipisci vel. Ad ullam nesciunt perspiciatis iste natus laborum provident ipsam ea rem esse, qui commodi in dolorum velit soluta vero delectus rerum. Nulla fugiat natus totam suscipit, sequi ullam rerum nostrum inventore id error enim non libero delectus aut provident exercitationem quisquam! Inventore eveniet repellendus dolorum, repudiandae natus placeat tenetur nihil tempore laudantium, veniam ex at vero aliquam ullam in neque exercitationem vel blanditiis magnam incidunt. Laborum eveniet natus quibusdam, perspiciatis possimus deserunt mollitia recusandae reiciendis hic voluptates. Animi, minus nam. Ut reiciendis quas officiis optio blanditiis cum perferendis facere placeat doloremque itaque velit, porro, perspiciatis minima repudiandae reprehenderit nulla possimus eum facilis magni iure accusamus? Minus tempora est eaque voluptatum, maiores repellendus saepe quisquam facere doloribus alias nulla eos ipsum unde quas quidem, ipsam error corporis dolorum esse. Sapiente natus dolor nemo cumque repellendus fuga quidem culpa blanditiis. Nostrum, rem doloribus aliquid perspiciatis officia, ad sint ullam quia voluptatem commodi dolorem nihil autem veritatis pariatur distinctio! Alias fugit sapiente omnis laboriosam laborum deserunt eum cumque earum aliquid ratione tempore facilis, voluptatem ex eos ipsam est vero quam amet minus. Totam eum natus ratione, inventore nobis nostrum quod sequi quos aliquid eveniet facilis amet tenetur, ipsum pariatur laboriosam! Atque quidem, voluptates assumenda deleniti eum necessitatibus dolorum a eligendi enim sint ex, quis quas tenetur distinctio corrupti tempore saepe numquam magni recusandae beatae. Maiores ipsa, consequuntur ratione rerum quod, consectetur illum voluptate qui quas porro aspernatur cum incidunt voluptates officiis molestiae eum quae sit eligendi. Nam exercitationem vero assumenda dolorem repellendus quidem? Neque, sapiente hic dolorum impedit nostrum quos fugit vero earum doloribus sed, commodi libero quas distinctio aliquid natus sequi at, officiis quasi pariatur est iste vel soluta cum. Sint harum exercitationem omnis asperiores natus maxime odio? Ab molestiae vero omnis dicta temporibus beatae optio reiciendis cumque sapiente veritatis ipsum illo, voluptatum unde incidunt provident magni pariatur nihil aperiam voluptatibus eveniet sunt ad cupiditate. Quibusdam accusantium nisi quidem cumque adipisci obcaecati nemo magnam reprehenderit quas quia facilis et architecto totam, enim explicabo laudantium deserunt laboriosam possimus! Quam nisi, iusto eveniet aut illum placeat, obcaecati dignissimos temporibus excepturi quibusdam totam sed tenetur deserunt dolores error beatae?