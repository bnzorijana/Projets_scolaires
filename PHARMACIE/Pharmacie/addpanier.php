<?php
require 'Header.php';
require 'panier.php';
$panier=new panier();
$a = $_GET['id'];

if (isset($a)) {

	$pdosta=$con->prepare("SELECT * FROM produit WHERE idproduit_PRODUIT = $a ");
   $exe = $pdosta->execute() ;
   $prod=$pdosta->fetchAll(PDO::FETCH_OBJ);
   
   
	if(empty($prod)){
		echo "abscent";
	}
	if(isset($_SESSION['panier'][$prod[0]->idproduit_PRODUIT])){
		$_SESSION['panier'][$prod[0]->idproduit_PRODUIT]++;
		die('produit ajouté une fois de plus');
	}
	$_SESSION['panier'][$prod[0]->idproduit_PRODUIT]=1;
	die('produit ajouté au catalogue');
}

   
   

?>
