<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
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

<style type="text/css">
	.img-responsive {

    width: 100%;
}
#entete{
		padding-top: 3%;
	}

.row promo{
	background-color: blue;
	color: blue;
}

.row{
	position: relative;
	height: 30%;
}

</style>

<body>
	<?php include("Header.php"); ?>
	<div class="jumbotton text-center" id="entete"><br>
      <h1>Accueil</h1>
      <p>Votre Santé Notre Priorité</p>

   </div>
<?php
$pdostat=$con->prepare("SELECT * FROM utilisateur");
$execut = $pdostat->execute() ;

 $uti=$pdostat->fetchAll();

?>
 <?php foreach($uti as $uti)?>
	<div class="container">
		<div class="row" >
			<img src="im-ac.jpg" class="img-responsive">
		</div>
		<div class="row promo  " id="un">
			<h2>Promotion<h2>
		</div>
		<div class="row">
			<div class="col-md-4">

			<div class="card">
				<img src="p3.jpg" class="img-responsive">
				<h5>Efferalgang</h5>
				<small><del>34</del><span>45</span></small>
			</div>
<?php  ?>
			</div>
			<div class="col-md-4 ">
				<div class="card">
				<img src="p3.jpg" class="img-responsive">
				<h5>Efferalgang</h5>
				<small><del>34</del><span>45</span></small>
			</div>
			</div>
			<div class="col-md-4 ">
				<div class="card">
				<img src="p3.jpg" class="img-responsive">
				<h5>Efferalgang</h5>
				<small><del>34</del><span>45</span></small>
			</div>
			</div>
		</div>
		<div class="row promo  " id="un">
			<h2>Produits bébé<h2>
		</div>
		<div class="row">
			<div class="col-md-4">

			<div class="card">
				<img src="p4.jpg" class="img-responsive">
				<h5>Efferalgang</h5>
				<small><del>34</del><span>45</span></small>
			</div>

			</div>
			<div class="col-md-4 ">
				<div class="card">
				<img src="p3.jpg" class="img-responsive">
				<h5>Efferalgang</h5>
				<small><del>34</del><span>45</span></small>
			</div>
			</div>
			<div class="col-md-4 ">
				<div class="card">
				<img src="p3.jpg" class="img-responsive">
				<h5>Efferalgang</h5>
				<small><del>34</del><span>45</span></small>
			</div>
			</div>
		</div>


	</div>
</body>

</html>
header ici////
<body>
   <nav class="navbar navbar-expand-lg navbar-dark  navbar-fixed-top" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link " href="AutreAcc.html"><img src=".png"> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="Accueil.php">Accueil </a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="bebe.php">Bébé</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Nutrithérapie</a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="#">Animaux</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="conseil.php">Conseils</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="forulaire-auth.php">Connexion</a>
      </li>
    </ul>
  </div>
  <form class="form-inline">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="search">


    </div>
  </form>
  <button type="button" class="btn bg-light">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>


</nav>

  
