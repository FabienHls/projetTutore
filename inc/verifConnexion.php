<?php
include('connexionBD.php');
@session_start(); //le @ pour éviter d'afficher l'erreur comme quoi la sessionn existe déjà si il y a un problème de déconnexion

if (isset ($_POST['username']) && isset($_POST['pass'])){
	
	if(get_magic_quotes_gpc()){
		$login=stripslashes($_POST['username']);
		$mdp=stripslashes($_POST['pass']);
	} else{
		$login=$_POST['username'];
		$mdp=$_POST['pass'];
	}

	$sql="SELECT login,mdp FROM users WHERE login= '%s'";

	
	$fixedlogin=mysqli_real_escape_string($db,$login); //enleve les ' dans le login
	
	$query=sprintf($sql, $fixedlogin);//concatenne le tout

	$result=mysqli_query($db,$query);
	
	$nbLigne=mysqli_num_rows($result);
	
	if($nbLigne==0)
	{
		echo "Mauvais login";
	}
	else
	{
		$row=mysqli_fetch_assoc($result);

		$vraiMdp=$row['mdp'];

		if($vraiMdp == $mdp)
		{
			echo "Bienvenue ".$row['login'];
			$_SESSION["login"] = TRUE; // on pourra mettre 1 pour entourage 2 pour organisateur
		}
		else {
			echo "Mauvais mot de passe";
		}
	}
}
else
{	
	echo "Veuillez rentrer vos identifiants !";
}
mysqli_close($db);
?>
