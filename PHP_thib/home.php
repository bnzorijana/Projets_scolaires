<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles.css">
    <title>Home</title>
  </head>
  <body>

    <?php

    if (isset($_POST["pseudo"], $_POST["mdp"])) {
      $pseudo = $_POST["pseudo"];
      $mdp = $_POST["mdp"];
    } else {
		echo "<div class='container'><div class='msg_err'>";
		echo "Erreur: les identifiants n'ont pas été transmis";
		echo "</div></div>";
    }

    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
    }
    catch (Exception $e)
    {
      die('Erreur:' . $e->getMessage());
    }

    $reponse_user = $bdd->query("select count(1) from utilisateur where pseudo = '$pseudo' and mdp = '$mdp' ;");
    # retourne 1 si l'utilisateur existe et le mdp est correct, 0 sinon.
    $user_exist = $reponse_user->fetch(PDO::FETCH_NUM);

      if ($user_exist[0] == 0) {
        die("<div class='container'><div class='msg_err'> Erreur: le nom d'utilisateur ou le mot de passe est incorrect. </div></div>");
      }


    $sql = "select count(*) FROM vinyles;";

    # il faut mettre l'argument PDO::FETCH_NUM pour pouvoir passer
    # $reponse à la fonction afficher_tableau()
    $reponse = $bdd->query($sql);
    $count = $reponse->fetch(PDO::FETCH_NUM);

    echo "<div class='top'>";
    echo "<h1>Projet IBD</h1>" . "<br>";
	echo "<div class='form_header' style='background-color:transparent;'>Nombre d'albums dans la base de données: " . $count[0];
    # echo "Nombre d'albums dans la base de données: " . $count[0];
    echo "</div></div>";

    $reponse->closeCursor();

    ?>

	<div class="hero">
	<div class="hero__inner">
	<div class="home_flex">
      <div><button class="btn_f one" onclick="document.location='q1.php'">Q1
	  <span class="text_one">Accédez à l'ensemble de la table "vinyles".</span></button></div>
      <div><button class="btn_f two" onclick="document.location='q2.php'">Q2
	  <span class="text_two">Accédez à la liste des artistes dont au moins un album est présent dans la base.</span></button></div>
      <div><button class="btn_f three" onclick="document.location='q3_in.html'">Q3
	  <span class="text_three">Sélectionnez à l'aide de cases à cocher les champs que vous souhaitez afficher.<br>
	  Vous avez la possibilité d'afficher la liste des albums en les ordonnant par une ou deux variables au choix
	  (par exemple par artiste alphabétiquement, et par année pour un même artiste).</span></button></div>
      <div><button class="btn_f four" onclick="document.location='q4_in.html'">Q4
	  <span class="text_four">Ajoutez un nouvel album dans la base.</span></button></div>
      <div><button class="btn_f five" onclick="document.location='q5_in.php'">Q5
	  <span class="text_five">Sélectionnez à l'aide d'une liste déroulante un des artistes présents dans la base pour n'afficher que ses albums.</span></button></div>
      <div><button class="btn_f six" onclick="document.location='q3_in.html'">Q6
	  <span class="text_six">Sélectionnez à l'aide de cases à cocher les champs que vous souhaitez afficher.<br>
	  Vous avez la possibilité d'afficher la liste des albums en les ordonnant par une ou deux variables au choix
	  (par exemple par artiste alphabétiquement, et par année pour un même artiste).</span></button></div>
      <div><button class="btn_f seven" onclick="document.location='q7.php'">Q7
	  <span class="text_seven">Accédez à une page présentant deux listes : la liste des albums qui sont des originaux
	  (l'année de sortie est la même que l'année de l'édition) et la liste des albums qui n'en sont pas.</span></button></div>
      <div><button class="btn_f eight" onclick="document.location='q8.php'">Q8
	  <span class="text_eight">Affichez le nombre total d'album dans la base ainsi que le nombre de disques (somme du nombre de disques de tous les albums).</span></button></div>
	</div>
	</div>
	</div>



  </body>
</html>
