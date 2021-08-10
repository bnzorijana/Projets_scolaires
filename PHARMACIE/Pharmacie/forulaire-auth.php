<?php include('Header.php');?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <link rel="icon" href="icon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>bebe</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style type="text/css">
	#entete{
		padding-top: 3%;
	}
  footer{
  position: relative;
  width: 100%;
  bottom: 0;

  height: 30px;
}
#centre{
  padding-top: 50px;

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




	<div class="container" id="centre">
		<div class="row ">
			<div class="col-md-6 col-sm-12" >
				<h2>Création de compte</h2>
				<form class="needs-validation"  action="Action_insc.php" method="post">
                 <div class="form-row">
                     <div class="col-md-12 mb-12">
                         <label for="prenom">Prénom</label>
                         <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Bavon" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-12 mb-12">
                         <label for="nom">Nom de famille</label>
                         <input name="nom" type="text" class="form-control" id="nom" placeholder="NZORIJANA" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-12 mb-12">
                         <label for="pseudo">Ville</label>
                         <input name="ville" type="text" class="form-control" id="pseudo" placeholder="Villeneuve D'Ascq" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="form-row">
                     <div class="col-md-12 mb-12">
                         <label for="ville">adresse</label>
                         <input name="adresse" type="text" class="form-control" id="ville" placeholder="Cite Scientifique" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-12 mb-12">
                     	<label for="pays">Pseudo</label>
                         <input name="pseudo" type="text" class="form-control" id="pays" placeholder="Pseudo" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-3 mb-3">
                         <label for="cp">Password</label>
                         <input name="password" type="password" class="form-control" id="cp" placeholder="baba@2021" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                 </div>
                 <div class="form-group">
                     <div class="form-check">
                       <input name="cond" class="form-check-input" type="checkbox" value="" id="cgu" required>
                       <label class="form-check-label" for="cgu">J'accepte les conditions générales d'utilisation et de vente</label>
                       <div class="invalid-feedback">Vous devez accepter les CGU pour continuer</div>
                       </div>
                 </div>
                 <button class="btn btn-primary" type="submit" name="connexion">Envoyer</button>
             </form>
         </div>








			<div class="col-md-6 col-sm-12">
				<h2>Connexion</h2>
				<form class="needs-validation" action="Action_Auth.php" method="post" novalidate>
                 <div class="form-row">

                     <div class="col-md-12 mb-12">
                         <label for="pseudo">Pseudo</label>
                         <input name="pseu" type="text" class="form-control" id="pseudo" placeholder="PierreGird" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>
                     <div class="col-md-12 mb-12">
                         <label for="prenom">Password</label>
                         <input name="pass" type="text" class="form-control" id="prenom" placeholder="Pierre" required>
                         <div class="valid-feedback">Ok !</div>
                         <div class="invalid-feedback">Valeur incorrecte</div>
                     </div>

                 </div>

                 <button class="btn btn-primary" type="submit">Envoyer</button>
             </form>



			</div>

		</div>

	</div>

  <footer class="py-5 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>





<script type="text/javascript">

	(function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>

</body>
</html>
