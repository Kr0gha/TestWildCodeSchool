<?php
// on inclut la connexion a la base

require_once('connect.php'); // require_once a faire de faire la requête une seul fois

$sql1 = 'SELECT * FROM `menbers` ORDER BY `user_id` LIMIT 0,20'; // ajouter LIMIT pour limiter le nombre de donnée a ajouter

// preparation de la requête
$query = $db->prepare($sql1);

// execution de la requete
$query->execute();

// stockage du resultat dans un tableau associatif
$result1 = $query->fetchAll(PDO::FETCH_ASSOC);

////


$sql2 = 'SELECT * FROM `menbers` ORDER BY `user_id` LIMIT 20,20 '; 
$query = $db->prepare($sql2);
// execution de la requete 
$query->execute();
// stockage du resultat dans un tableau associatif
$result2 = $query->fetchAll(PDO::FETCH_ASSOC);

////

$sql3 = 'SELECT * FROM `menbers` ORDER BY `user_id` LIMIT 40,10'; // ajouter LIMIT pour limiter le nombre de donnée a ajouter

// preparation de la requête
$query = $db->prepare($sql3);

// execution de la requete
$query->execute();

// stockage du resultat dans un tableau associatif
$result3 = $query->fetchAll(PDO::FETCH_ASSOC);



$sql = 'SELECT * FROM `menbers`'; // ajouter LIMIT pour limiter le nombre de donnée a ajouter

// preparation de la requête
$query = $db->prepare($sql);

// execution de la requete
$query->execute();

// stockage du resultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);


//var_dump($result);
require_once('close.php');
?>