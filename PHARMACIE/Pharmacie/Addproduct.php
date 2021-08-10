<!DOCTYPE html>
<?php include("Header.php"); ?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <link rel="icon" href="icon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ajouter Produit</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style type="text/css">
  body{
    background-color: #c5c7c6;
  }
   #c{
    margin-top: 10%;
  }
</style>
 

<body>
  

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="Accueil.php">Revenir sur le site</a>
      </button>
     </div>
   </nav>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">PHARMACIE </h1>
        <div class="list-group">
          <a href="Addproduct.php" class="list-group-item nav-link">Ajouter Produit</a>
          <a href="AddCath.php" class="list-group-item nav-link">Ajouter cathegorie</a>
          <a href="modifier.php" class="list-group-item nav-link">Supprimer ou modifier un produit</a>
          
        </div>


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9" id="c">
        
        <form method="post" action="Action_Addp.php" enctype="multipart/form-data" class="well">
      <div class="form-group">
        <label for="nom">Nom du produit: </label>
        <input type="text" name="nom" class="form-control">
      </div>
      <div class="form-group">
        <label for="pre">Quantité : </label>
        <input type="text" name="pre" class="form-control">
      </div>
      
      <div class="form-group">
        <label for="mail">Prix: </label>
        <input type="email" name="mail" class="form-control">
      </div>
      <div class="form-group">
        <label for="photo">Photo du produit : </label>
        <input type="file" name="photo" class="form-control">
      </div>

   
      <input  type="submit" class="btn btn-default" name="ok">





        
  </form>

        </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
