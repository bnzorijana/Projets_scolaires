<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Q4_out</title>
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

    $colonnes = array();
    $valeurs = array();
    foreach (array_keys($_POST) as $key) {
      # si la cellule est vide on ne déclare pas la colonne en question
      # SQL ce chargera de mettre la valeur par défaut
      if (isset($_POST[$key]) and trim($_POST[$key])!='') {
        $valeur = trim($_POST[$key]);
        array_push($colonnes, $key);
        array_push($valeurs, "'$valeur'");
      }
    }

    $colonnes = implode(", ", $colonnes);
    $valeurs = implode(", ",  $valeurs);
    $sql = "insert into vinyles ($colonnes) values ($valeurs);";

    if ($valeurs == '') {
      echo "<div class='container'><div class='msg_err'>";
      echo "Erreur: Il faut qu'au moins l'un des champs soit non nul.";
      echo "</div></div>";
      die();
    }

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }

    $reponse = $bdd->prepare($sql);
    $reponse->execute();


    if ($reponse) {
      echo "<div class='container'><div class='msg_conf'>";
      echo "L'entrée a été ajoutée à la base de données.";
      echo "</div></div>";
    } else {
      echo "Error: " . $sql . "<br>" . $bdd->errorInfo();
    }

    $reponse->closeCursor();

    ?>

  </body>
</html>
