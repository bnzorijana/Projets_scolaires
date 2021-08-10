<?php
include('Header.php');

$pseudo2=$_POST['pseu'];
$password2=$_POST['pass']; 
try{
$pdost="SELECT * FROM utilisateur";
$execut = $con->query($pdost);  
$i=0;
while ($donne = $execut->fetch() AND $i==0) {

  if (strcmp($donne['username_UTILISATEUR'], $_POST['pseu'])==0 AND strcmp( $donne['password_UTILISATEUR'], $_POST['pass'])==0  And $donne['type_UTILISATEUR']==1)  {
                            $i=1;
                          header('location: Addproduct.php');
                          exit();
                       }
                       else
                       {
                        
                       }

          }
  header('location:Accueil.php');
        }
        catch (PDOException $e) {
                    
                }

