<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Q8_in</title>
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

    $sql = "select count(*), sum(nb_disques) from vinyles;";

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }

    $reponse = $bdd->query($sql, PDO::FETCH_NUM);
    $counts = $reponse->fetch();

    echo "<div class='container'><div class='form_header'>";
    echo "Nombre total d'albums dans la base: ";
    echo $counts[0];
    echo "</div></div>";

    echo "<div class='container'><div class='form_header'>";
    echo "Nombre total de disques dans la base: ";
    echo $counts[1];
    echo "</div></div>";

    $reponse->closeCursor();

    ?>

  </body>
</html>
