<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Q5_in</title>
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

    $sql = "select distinct(artiste) from vinyles;";

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
    } catch (Exception $e) {
      die('Erreur:' . $e->getMessage());
    }

    $reponse = $bdd->query($sql, PDO::FETCH_NUM);
	  echo "<div class='container'>";
	  echo "<div class='form_header'>Sélectionnez à l'aide de la liste déroulante un des artistes présents dans la base pour n'afficher que ses albums.</div>";
    echo "<form action='q5_out.php' method='post'>";
    echo "<select name='artiste' size=10>";
    foreach ($reponse as $artiste) {
      echo "<option> $artiste[0]";
    }
    echo "</select>" . "<br>";
    echo "<div class='form_header'><input type='submit' value='Valider'></div>";
    echo "</form>";
	  echo "</div>";
    $reponse->closeCursor();

    ?>

  </body>
</html>
