<?php
session_start();
//insertion dans la base de donnees

 try{
 	$bdd = new PDO('mysql:host=localhost;dbname=entrepriserh','root',"");

 }catch (PDOException $e) {
 echo "mauvais";
  }





?>
<style type="text/css"></style>
<style type="text/css">
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">


	<meta name="viewport" content="width=device-width , initial-scale=1">
</head>
<body>

   <div class="jumbotton text-center"><br><br>
    	<h1 style="color: blue">RECHERCHE D'UNE CATEGORIE</h1><br><br><br><br><br><br>

   	 		<form id="f" method="POST" action"#" class="form-search">
    			<div class="input-append">
   	 			<input type="text" name="nam" placeholder="Entrer un nom" class="search-query">
   	 			<button class="btn btn-primary" type="submit">Rechercher</button>

               </div>
   	 		</form>


   </div>
</div>
</nav>
<table border="5px" class="table table-bordered table-striped table-condensed" >
    <?php if(isset($_POST['nam'])){
    		$a = $_POST['nam'];

 $afficher= $bdd->prepare("SELECT * FROM mission WHERE idmission LIKE '%$a%' ");
 $afficher->execute();
 $enregistr= $afficher->fetchAll();
?>
    		<tr class="success" >
    			<td>Nom du produit</td><td>Quantité</td><td>Date ajout</td><td>Heure ajout</td><td>Prix</td>
    		</tr>
    		 <?php foreach($enregistr as $item):?>
    		 	<tr class="info">
    			<td>

    	          <?= $item['idmission'] ?> <br>

    		    </td>
    		    <td>
    		     
    	          <?= $item['coderec'] ?> <br>

    		    </td>
    			<td>

    	          <?= $item['numdom'] ?> <br>

    		    </td>
    			<td>

    	          <?= $item['intitule'] ?> <br>

    		    </td>
    		    <td>

    	          <?= $item['datedepot'] ?> <br>

    		    </td>
         </tr>

         <?php endforeach ?>


</table>
</body>
</html>
<?php } ?>
