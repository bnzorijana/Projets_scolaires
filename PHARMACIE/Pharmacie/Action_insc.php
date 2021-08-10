<?php
include('Header.php');
  $prenom= $_POST['prenom'];
  $nom=$_POST['nom'];
  $ville=$_POST['ville'];
  $adresse=$_POST['adresse'];
  $pseudo1=$_POST['pseudo'];
  $password1=$_POST['password'];

            try{

                  if($prenom!="" And $nom!="" And $adresse!="" And $pseudo1!="" And $ville!="" And $password1!=""  ){
                  
                    $requette = "INSERT INTO `utilisateur` (`id_UTILISATEUR`, `username_UTILISATEUR`, `name_UTILISATEUR`, `surname_UTILISATEUR`, `type_UTILISATEUR`, `password_UTILISATEUR`, `ville`, `adresse`) VALUES (NULL, '$pseudo1', '$nom', '$prenom', '1', '$password1', '$ville', '$adresse')";
                    
                    $tru=$con->exec($requette);
                    

                  }
                }catch(PDOException $e)
            {
                echo "error";
            }
header('location: Accueil.php');
                    