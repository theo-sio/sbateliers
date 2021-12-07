<!DOCTYPE html>
<html>
<lang="fr">

	<head>
	<title>Se connecter</title>
	</head>
	
	<body>
		<form action="/sbateliers/controleurs/ctrl-enregistrer-client.php" method=POST >
		<label>civilite </label>
		<input name=civilite type=text value="<?php echo $_POST['civilite']; ?>"></input>
		<br>
		<label>nom</label>
		<input name=nom type=nom></input>
		<br>
		<label>prenom</label>
		<input name=prenom type=prenom></input>
		<br>
		<label>date de naissance</label>
		<input name=date_de_naissance type=date></input>
		<br>
		<label>adresse electronique</label>
		<input name=adresse_electronique type=adresse_electronique></input>
		<br>
		<label>mot de passe</label>
		<input name=mdp type=password></input>
		<br>
		<label>adresse postale</label>
		<input name=adresse_postale type=adresse_postale></input>
		<br>
		<label>code postale</label>
		<input name=code_postale type=code_postale></input>
		<br>
		<label>ville</label>
		<input name=ville type=ville></input>
		<br>
		<label>numero de mobile  </label>
		<input name=numero_mobile type=numero_mobile></input>
		<br>
		
		<button type="submit">Connexion</button>
	</form>
	<button onclick="location='../index.php'">Revenir au debut</button>
	<button onclick="location='../vues/vue-connexion.php'">Connecter vous</button>
	</body>	
</html>

<?php
	$message = "Il y a une erreur lors de l'enregistrement de votre compte client : <br>";
	switch($_SERVER['REQUEST_URI']){
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=1":
			echo "$message  Il y a un probleme sur la civilite utiliser Mr ou Mme";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=2":
			echo "$message  Il y a un probleme sur le nom";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=3":
			echo "$message  Il y a un probleme sur le prenom";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=4":
			echo "$message  Il y a un probleme sur l'adresse electronique, utilisez une adresse email en @gmail.com";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=5":
			echo "$message  Il y a un probleme sur le mot de passe";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=6":
			echo "$message  Il y a un probleme sur l'adresse postal";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=7":
			echo "$message  Il y a un probleme sur le code postal, il doit etre en nombre et ne pas contenir de lettres";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=8":
			echo "$message  Il y a un probleme sur le nom de la ville";
			break;
		case "/sbateliers/vues/vue-enregistrement-client.php?echec=1&erreur=9":
			echo "$message  Il y a un probleme sur le numero de mobile il doit y avoir 10 chiffres";
			break;
		}
	?>
