<?php
$mysqli = new mysqli("localhost", "root", "", "databaseargonaute");

/* Vérification de la connexion */
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

if ($CountResults = $mysqli->query("SELECT * FROM `menbers`")) {

    /* Détermine le nombre de lignes du jeu de résultats */
    $row_cnt = $CountResults->num_rows;

    /* Ferme le jeu de résultats */
    $CountResults->close();
};
?>