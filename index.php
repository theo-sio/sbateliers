<?php 
	if( isset($_GET[ 'identifiant' ]) ){
		$login = $_GET[ 'identifiant' ] ;
	} 
	else {
		$login = '' ;	
	} 
?>

<!DOCTYPE html>
<html>
<lang="fr">
	
	<head>
	<title>Page d'acceuil</title>
	</head>
	
	<body>
	
	<div>
		<a href="./vues/vue-connexion.php"> Se connecter </a>
		<br>
		<a href="./vues/vue-enregistrement-client.php">S'enregistrer comme nouveau client </a>
	
	</div>
	<br>
	<br>
	<br>
	
	<?php
	$message = "Il y a une erreur lors de l'enregistrement de votre compte client : <br>";
	switch($_SERVER['REQUEST_URI']){
		case "/sbateliers/index.php?echec=1&erreur=1":
			echo "$message  Il y a un probleme sur la civilite utiliser Mr ou Mme";
			break;
		case "/sbateliers/index.php?echec=1&erreur=2":
			echo "$message  Il y a un probleme sur le nom";
			break;
		case "/sbateliers/index.php?echec=1&erreur=3":
			echo "$message  Il y a un probleme sur le prenom";
			break;
		case "/sbateliers/index.php?echec=1&erreur=4":
			echo "$message  Il y a un probleme sur l'adresse electronique";
			break;
		case "/sbateliers/index.php?echec=1&erreur=5":
			echo "$message  Il y a un probleme sur le mot de passe";
			break;
		case "/sbateliers/index.php?echec=1&erreur=6":
			echo "$message  Il y a un probleme sur l'adresse postal";
			break;
		case "/sbateliers/index.php?echec=1&erreur=7":
			echo "$message  Il y a un probleme sur le code postal";
			break;
		case "/sbateliers/index.php?echec=1&erreur=8":
			echo "$message  Il y a un probleme sur le nom de la ville";
			break;
		case "/sbateliers/index.php?echec=1&erreur=9":
			echo "$message  Il y a un probleme sur le numero de mobile";
			break;
		}
	?>
	
	</body>

</html>

