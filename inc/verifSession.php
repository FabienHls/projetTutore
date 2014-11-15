<?php
    // session_start est inutile ici

    // Vérification de l'autorisation
    if (!@$_SESSION["login"]) {
        // Si l'utilisateur n'est pas autorisé il est reconduit sur le formulaire d'identification
       //insertion header
        header('Location: ../connexion.html'); 		 
	}
?>
