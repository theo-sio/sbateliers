<!DOCTYPE html>
<html>
<lang="fr">
	
	<head>
	<title>Se connecter</title>
	</head>
	<?php
		$message = "L'Enregistrement de votre compte a bien ete fait : <br>";
		switch($_SERVER['REQUEST_URI']){
		case "/sbateliers/vues/vue-connexion.php?enregistrement=reussi":
			echo "$message veuillez maintenant vous connecter <br> ";
			break;}
?>
<br>
	<body>
		<form action="/sbateliers/controleurs/ctrl-connecter.php" method=POST >
		<label>nom de connexion</label>
		<input name=identifiant type=identifiant></input>
		<label>mot de passe</label>
		<input name=mdp type=password></input>
		
		<button type="submit">Connexion</button>
	</form>
	<button onclick="location='../index.php'">Revenir au debut</button>
	<button onclick="location='../vues/vue-enregistrement-client.php'">Creer un compte</button>
	</body>	
</html>
