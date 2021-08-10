<!DOCTYPE html>
<html>
<head>
  <title>Fonctionalités</title>
</head>
<style type="text/css">
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
   border: 1px solid #555;
   height: 100%; /* Full height */
  position: fixed; /* Make it stick, even on scroll */
  overflow: auto; 
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
.active {
  background-color: #4CAF50;
  color: white;
}
li {
  text-align: center;
  border-bottom: 1px solid #555;
}

li:last-child {
  border-bottom: none;
}
</style>
<body>
<ul>
  <li><a href="ajouterProduit.php">Ajouter Produit</a></li>
  <li><a href="#">Supprimer Produit</a></li>
  <li><a href="#">Modifier produit</a></li>
  <li><a href="#">Ajouter video</a></li>
</ul> 

</body>
</html>