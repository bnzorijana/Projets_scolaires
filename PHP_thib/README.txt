La base de données disques.sql contient les tables : 'artiste', 'utilisateur', 'vinyles'.
Nous avons traité l'ensemble des questions mis à part la bonus 3 (donc la table 'artiste' n'est pas utilisée).

Dans le code php, pour la connexion à la base de données, nous avons écrit la ligne:
$bdd = new PDO('mysql:host=localhost;dbname=disques;charset=utf8','root', 'root');
avec 2 'root' à chaque fois.

Pour pouvoir accéder aux fonctionnalités du projet, il faut d'abord passer par la page 'connection.html'. Si l'authentification est réussie, vous êtes redirigé sur la page 'home.php'. C'est l'aiguillage vers les fonctionnalités. Sur toutes les autres pages se trouve un bouton 'Menu principal' qui permet de retourner à la page 'home.php'.

Merci pour ce cours et bonne continuation :)

Bavon & Abdurrhamann
