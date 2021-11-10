<?php

try
{
  // On se connecte à la base de données
  $db = new PDO('mysql:host=localhost;dbname=databaseargonaute;charset=utf8', 'root', '');
  $db->exec('SET NAMES "UTF8"');
}
catch(PDOException $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        echo 'Erreur : ' . $e->getMessage();
        die();
}

?>