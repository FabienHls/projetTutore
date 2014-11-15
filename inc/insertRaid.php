<?php

include 'connexionBD.php';

$nomRaid = $_POST['nomRaid'];
$typeRaid = $_POST['typeRaid'];
$dateDebutRaid = $_POST['dateDebutRaid'];
$dateFinRaid = $_POST['dateFinRaid'];
$lieuDepart = $_POST['lieuDepart'];
$lieuArrivee = $_POST['lieuArrivee'];

 //création de la requête SQL:
  $sql = "INSERT INTO Raid (nomRaid, typeRaid, dateDebutRaid, dateFinRaid, lieuDepart, lieuArrivee) VALUES ('$nomRaid', '$typeRaid', '$dateDebutRaid', '$dateFinRaid', '$lieuDepart', '$lieuArrivee')";
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $connexion) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marché:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }

mysql_close();

?>