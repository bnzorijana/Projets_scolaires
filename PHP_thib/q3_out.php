<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Q3 & Q6 out</title>
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

    $boxes = array('box1', 'box2', 'box3', 'box4', 'box5', 'box6', 'box7');
    $columns = (array) null;
    # vérification de l'existence des variables
    foreach ($boxes as $box) {
      if (isset($_POST[$box])) {
        array_push($columns, $_POST[$box]);
      }
    }

    $ordres = array('ordre_alphabet', 'ordre_annee');
    $orderby = (array) null;
    foreach ($ordres as $ordre) {
      if (isset($_POST[$ordre])) {
        array_push($orderby, $_POST[$ordre]);
      }
    }

    # concaténation des noms de colonnes
    if (count($columns) != 0) {
      $columns = implode(", ", $columns);
      if (count($orderby) != 0) {
        $orderby = "order by " . implode(", ", $orderby);
        $sql = "select $columns from vinyles $orderby;";
      } else {
        $sql = "select $columns from vinyles;";
      }
    } else {
	    echo "<div class='container'><div class='msg_err'>";
      echo "Erreur: Il faut séléctionner au moins une colonne.";
      echo "</div></div>";
      die();
    }

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }

    # il faut mettre l'argument PDO::FETCH_NUM pour pouvoir passer
    # $reponse à la fonction afficher_tableau()
    $reponse = $bdd->query($sql, PDO::FETCH_NUM);
    include 'function_afficher_tableau.php';
    afficher_tableau($reponse, $class="tab_sql", $width="90%");

    $reponse->closeCursor();

    ?>

  </body>
</html>
