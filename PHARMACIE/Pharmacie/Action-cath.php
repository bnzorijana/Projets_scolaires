<?php
include('Header.php');
  $nom= $_POST['nom'];
  $desc=$_POST['desc'];


            try{

                  if($nom!="" And $desc!=""){
                  
                    $requette = "INSERT INTO `categorie` (`numcathegorie_CATEGORIE`, `nom_CATEGORIE`, `description_CATEGORIE`, `id_UTILISATEUR`) VALUES (NULL, '$nom', '$desc', '5')";
                    
                    $tru=$con->exec($requette);
                  
                    

                  }
                }catch(PDOException $e)
            {
                echo "error";
            }

                    