<?php


            try
            {
                $con = new PDO("mysql:host=localhost; dbname=pharmacie", "root", "root");

            }
            catch(PDOException $e)
            {
                echo "Echec lors de la connection";
            }
?>
