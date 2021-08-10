<?php




 class panier
{

	public function __construct()
	{
		if (!isset($_SESSION)) {
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
		}

	}
	public function add($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]++;
		}
		$_SESSION['panier'][$product_id]=1;
	}
	public function del($id){
		unset($_SESSION['panier'][$id]);
	}
	public function total(){
		$total=0;

		$ids = array_keys($_SESSION['panier']);

		$a=implode(',', $ids);
		$b=substr($a,1);

		if (empty($b)) {


		}
		 $con = new PDO("mysql:host=localhost; dbname=pharmacie", "root", "root");
			$pdost=$con->prepare("SELECT * FROM produit WHERE idproduit_PRODUIT IN ($b) ");
		$execut = $pdost->execute() ;
		$produi=$pdost->fetchAll(PDO::FETCH_OBJ);
		foreach ($produit as $prod) {
			$total+=($prod->prix)*($_SESSION['panier'][$prod->idproduit_PRODUIT]);
		}
		return $total;
	}

}
