<?php
$user = 'monty';
$pass = 'monty';
GLOBAL $bdd;
try
{
        $bdd = new PDO('mysql:host=localhost;dbname=eip_manager', $user, $pass);
}
catch(Exception $e)
{
 echo '<br><br><br>Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
     echo 'Echec de la connexion à la base de données';
}

?>
