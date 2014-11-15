<?php
$serveur = "localhost";
$nom_base = "raidSportif";
$login = "root";
$motdepasse = "root";
// connexion à MySQL
$connexion = mysql_connect ($serveur,$login,$motdepasse) or die ('ERREUR '.mysql_error());
// sélection de la base de données
mysql_select_db ($nom_base,$connexion) or die ('ERREUR '.mysql_error());
?>