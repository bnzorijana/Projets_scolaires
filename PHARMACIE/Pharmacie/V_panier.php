<?php
require 'panier.php';
require 'Header.php';
$panier=new panier();
if (isset($_GET['del'])) {
	$panier->del($_GET['del']);
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Panier</title>
	<link rel="icon" href="icon.jpg">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style type="text/css">
	table,tr,td{
		border: 2px solid black;
		margin-top: 20%;

	}
	table{

	}
</style>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Pharmacie LUMIERE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="Accueil.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bebe.php">Pharmacie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="V_panier.php">Panier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="video.php">Video Conseil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forulaire-auth.php">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

		
	<table class="table table-striped" id="">
  <thead>
    <tr>
      
      <th scope="col">Produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantite</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php
		
		$ids = array_keys($_SESSION['panier']);
		
		$a=implode(',', $ids);
		$b=substr($a,1);
		
		if (empty($b)) {

			
		}
			$pdost=$con->prepare("SELECT * FROM produit WHERE idproduit_PRODUIT IN ($b) ");
		$execut = $pdost->execute() ;  
		$produi=$pdost->fetchAll(PDO::FETCH_OBJ);
      
		foreach ($produi as $prod): 
		
		


		?>
		
  <tbody>
    <tr>
      
      <td><?= $prod->nom_PRODUIT; ?></td>
      <td><?= $prod->prix; ?></td>
      <td><?= $_SESSION['panier'][$prod->idproduit_PRODUIT]; ?></td>
      <td><a href="V_panier.php?del=<?= $prod->idproduit_PRODUIT; ?>">supprimer</a></td>
    </tr>
    <?php endforeach; ?>
    <tr>
      
      <td>TOTAL</td>
      <td><?=$panier->total(); ?></td>

    </tr>
    
  </tbody>
</table>

  <footer class="py-5 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>