<?php
$serveur = "localhost";
$nom_base = "raidSportif";
$login = "root";
$motdepasse = "root";
// connexion à MySQL
$connexion = mysql_connect ($serveur,$login,$motdepasse) or die ('ERREUR '.mysql_error());
// sélection de la base de données
mysql_select_db ($nom_base) or die ('ERREUR '.mysql_error());

$nomEtape = $_POST['nomEtape'];
$typeEtape = $_POST['typeEtape'];
$dateDebutEtape = $_POST['dateDebutEtape'];
$dateFinEtape = $_POST['dateFinEtape'];
$heureDepart = $_POST['heureDepart'];
$heureArrivee = $_POST['heureArrivee'];
$lieuDepart = $_POST['lieuDepart'];
$lieuArrivee = $_POST['lieuArrivee'];

mysql_query("INSERT INTO Etape (nomEtape, typeEtape, dateDebutEtape, dateFinEtape, heureDepart, heureArrivee, lieuDepart, lieuArrivee) VALUES ('$nomEtape', '$typeEtape', $dateDebutEtape, $dateFinEtape, '$heureArrivee', '$heureDepart', '$lieuDepart', '$lieuArrivee')");

 //création de la requête SQL:
  $sql = "INSERT INTO Etape (nomEtape, typeEtape, dateDebutEtape, dateFinEtape, heureDepart, heureArrivee, lieuDepart, lieuArrivee) VALUES ('$nomEtape', '$typeEtape', '$dateDebutEtape', '$dateFinEtape', '$heureArrivee', '$heureDepart', '$lieuDepart', '$lieuArrivee')";
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $connexion) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
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