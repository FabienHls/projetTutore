<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'localhost';
 	$db = 	'raidSportif';
 	$user = 'root';
 	$pwd = 	'root';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
		echo '<p>'.$e.'</p>';
	    exit;
	}
	return $conn;
 }

	$conn = dbConnect();
	$OK = true; // We use this to verify the status of the update.
	// If 'buscar' is in the array $_POST proceed to make the query.
	if (isset($_GET['nomEtape'])) {
		// Create the query
		$data = $_GET['nomEtape']."%";
		$sql = 'SELECT * FROM Etape WHERE nomEtape like ?';
		// we have to tell the PDO that we are going to send values to the query
		$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$results = $stmt->execute(array($data));
		// Extract the values from $result
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo();
		//echo $error[2];
	}
	// If there are no records.
	if(empty($rows)) {
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