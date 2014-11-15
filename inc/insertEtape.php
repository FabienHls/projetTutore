<?php

include 'connexionBD.php';

$nomEtape = $_POST['nomEtape'];
$typeEtape = $_POST['typeEtape'];
$dateDebutEtape = $_POST['dateDebutEtape'];
$dateFinEtape = $_POST['dateFinEtape'];
$heureDepart = $_POST['heureDepart'];
$heureFin = $_POST['heureFin'];
$lieuDepart = $_POST['lieuDepart'];
$lieuArrivee = $_POST['lieuArrivee'];


 //création de la requête SQL:
  $sql = "INSERT INTO Etape (nomEtape, typeEtape, dateDebutEtape, dateFinEtape, heureDepart, heureFin, lieuDepart, lieuArrivee) VALUES ('$nomEtape', '$typeEtape', '$dateDebutEtape', '$dateFinEtape', '$heureFin', '$heureDepart', '$lieuDepart', '$lieuArrivee')";
 
  //exécution de la requête SQL:
  $requete = mysql_query($db, $sql) or die( mysqli_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marché:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }

mysqli_close();

?>
