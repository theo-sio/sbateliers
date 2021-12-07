<!DOCTYPE html>
<html>
<lang="fr">
	
	<head>
	<title>Se connecter</title>
	</head>
	
	<body>

<?php
	$civilite = $_POST[ 'civilite' ] ;
	if ( preg_match( "/(Mr|Mme)/" , $civilite ) ) {
		$nom = $_POST['nom'];
		if ( preg_match( "/[a-z]$/" , $nom ) ) {
			$prenom = $_POST[ 'prenom' ] ;
			if ( preg_match( "/[a-z]$/" , $prenom ) ) {
				$date_de_naissance = $_POST[ 'date_de_naissance' ] ;
				$adresse_electronique = $_POST[ 'adresse_electronique' ] ;
				if ( preg_match(  "/@gmail.com$/", $adresse_electronique) ) {
					$mdp = $_POST[ 'mdp' ] ;
					if ( preg_match( "/[a-z]/" , $mdp ) ) {
						$adresse_postale = $_POST[ 'adresse_postale' ] ;
						if ( preg_match( "/[a-z]/", $adresse_postale  ) ) {
							$code_postale = $_POST[ 'code_postale' ] ;
							if ( preg_match("/((2a|2b)|[0-9]{5})$/", $code_postale ) ) {
								$ville = $_POST[ 'ville' ] ;
								if ( preg_match(  "/[a-z]$/", $ville ) ) {
									$numero_mobile = $_POST[ 'numero_mobile' ] ;
									if ( preg_match( "/^[0-9]{10}$/" ,$numero_mobile) ) {
									try {
										$bd = new PDO(
										'mysql:host=localhost;dbname=sbateliers' ,
										'sanayabio' ,
										'sb2021'
										) ;
											$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
											$sql = "insert into Client(civilite,nom,prenom,date_de_naissance,adresse_electronique,mot_de_passe,adresse_postale,code_postale,ville,numero_de_mobile) values('$civilite', '$nom', '$prenom', '$date_de_naissance', '$adresse_electronique', '$mdp','$adresse_postale',  $code_postale, '$ville', $numero_mobile)" ;
											$bd->exec($sql);
											header( 'Location: ../vues/vue-connexion.php?enregistrement=reussi' ) ;
	    
												} 
									catch(PDOException $e) {
										echo $e ;
										}
	
									}
									else{
										$erreur = 9;
										header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);									}
								}
								else{
									$erreur = 8;
									header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);								}
							}
							else{
								$erreur = 7;
								header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);							}
						}
						else{
							$erreur = 6;
							header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);						}
					}
					else{
						$erreur = 5;
						header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);       				} 
				}
				else{
					$erreur = 4;
					header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);				}  
			}
			else{
				$erreur = 3;
				header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);			} 
		}
		else{
			$erreur = 2;
			header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);		}
	}
	else{
		$erreur = 1;
		header( 'Location: ../vues/vue-enregistrement-client.php?echec=1&erreur='. $erreur);	}
	
	
	
	
		
	
?>

	</body>	
</html>



