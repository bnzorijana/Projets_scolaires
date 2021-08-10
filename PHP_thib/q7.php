<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Q7_in</title>
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

    $sql1 = "select titre, artiste from vinyles where annee_sortie = annee_edition;";
    $sql2 = "select titre, artiste from vinyles where annee_sortie <> annee_edition;";

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }

    $reponse1 = $bdd->query($sql1, PDO::FETCH_NUM);
    $reponse2 = $bdd->query($sql2, PDO::FETCH_NUM);
    include 'function_afficher_tableau.php';
	  echo "<div class='container'><div class='form_header'>Liste des albums qui sont des originaux (l'année de sortie est la même que l'année de l'édition): <i class='arrow down'></i></div></div>";
    afficher_tableau($reponse1, $class="tab_sql", $width="90%");
	  echo "<div class='container'><div class='form_header'>La liste des albums qui n'en sont pas: <i class='arrow down'></i></div></div>";
    afficher_tableau($reponse2, $class="tab_sql", $width="90%");

    $reponse1->closeCursor();
    $reponse2->closeCursor();

    ?>

  </body>
</html>
