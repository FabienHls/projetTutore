<?php
$db=mysqli_connect('localhost','root','root','raidSportif');
if (!$db) {
    die('Erreur de connexion : ' . mysqli_connect_error());
}
/*
$serveur = "localhost";
$nom_base = "raidSportif";
$login = "root";
$motdepasse = "root";
//connexion à MySQL
$connexion = mysqli_connect ($serveur,$login,$motdepasse,nom_base) or die ('ERREUR '.mysqli_error());
//sélection de la base de données
mysqli_select_db ($nom_base,$connexion) or die ('ERREUR '.mysqli_error());
*/
?>
