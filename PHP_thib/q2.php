<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Q2</title>
  </head>
  <body>

    <div class="top">
      <form class="menuprincipal" action="home.php" method="post">
        <input type="hidden" id="pseudo" name="pseudo" value="gandalf">
        <input type="hidden" id="mdp" name="mdp" value="melon">
        <button type="submit" class="btn_h" onclick="document.location='home.php'"><i class="fa fa-home"></i> Menu principal</button> <br>
      </form>
    </div>
    <!--<div class="top"><button class="btn_h" onclick="document.location='home.php'"><i class="fa fa-home"></i> Menu principal</button> <br></div> -->

    <?php

    $sql = "select distinct artiste as 'Les artistes dans la BDD' from vinyles;";

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }

    # il faut mettre l'argument PDO::FETCH_NUM pour pouvoir passer
    # $reponse à la fonction afficher_tableau()
    $reponse = $bdd->query($sql, PDO::FETCH_NUM);
    include 'function_afficher_tableau.php';
    afficher_tableau($reponse, $class="tab_sql", $width="30%");

    $reponse->closeCursor();

    ?>

  </body>
</html>
