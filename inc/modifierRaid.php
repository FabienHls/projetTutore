<?php
include 'connexionBD.php';


if (isset($_GET['nomEtape'])) {
	// Create the query
	$data = $_GET['nomEtape'].'%';
	$sql ="SELECT * FROM Etape WHERE nomEtape= '%s'";
	$query=sprintf($sql, $data);
	echo $query;
	$results = mysqli_query($db,$sql);
	$nbResults=mysqli_num_rows($result); // Nombre de résultats
	$row=mysqli_fetch_assoc($result);
}
// If there are no records.
if($nbResults==0) {  // Si 0 resultat
	echo "<tr>";
		echo "<td colspan='4'>There were not records</td>";
	echo "</tr>";
}
else {
	foreach ($rows as $row) {
		echo "<tr>";
			echo "<td>".$row['nomEtape']."</td>";
			echo "<td>".$row['typeEtape']."</td>";
			echo "<td>".$row['dateDebutEtape']."</td>";
			echo "<td>".$row['dateFinEtape']."</td>";
			echo "<td>".$row['heureDepart']."</td>";
			echo "<td>".$row['heureFin']."</td>";
			echo "<td>".$row['lieuDepart']."</td>";
			echo "<td>".$row['lieuArrivee']."</td>";
		echo "</tr>";
	}
}
?>
