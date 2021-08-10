<!DOCTYPE html>
<html>
<head>
	<title>ajout</title>
	<meta charset="utf-8">
	<link rel="icon" href="icon.jpg">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
   <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
   <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="jumbotton text-center"><br><br>
    	<h1 style="color: blue">Enregistrement</h1>
    	<p> Annuaire Téléphonique </p>
         </div>

		</div>
		<div class="row">
			<div class="col-md-3">
			  <?php include("fonctionnalites.php"); ?>
			</div>
			<div class="col-md-9">
				<form method="POST" action="#" enctype="multipart/form-data" class="well">
	  	<div class="form-group">
	  		<label for="nom">Nom de la cathégorie: </label>
	  		<input type="text" name="nom" class="form-control">
	  	</div>
	  	<div class="form-group">
	  		<label for="pre">Description : </label>
	  		<input type="text" name="pre" class="form-control">
	  	</div>
	  	<div class="form-group">
	  		<label for="number">Date ajout: </label>
	  		<input type="number" name="tel1" class="form-control">
	  	</div>
	  	<div class="form-group">
	  		<label for="number">Heure ajout:  </label>
	  		<input type="number" name="tel2" class="form-control">
	  	</div>



	  	<input  type="submit" class="btn btn-default" name="ok">






	</form>

			</div>

		</div>

	</div>


</body>
</html>
