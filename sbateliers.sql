insert into client(civilite,nom,prenom,date_de_naissance,adresse_electronique,mot_de_passe,adresse_postale,code_postale,ville,numero_de_mobile) values('$civilite', '$nom', '$prenom', '$date_de_naissance', '$adresse_electronique', '$mdp','$adresse_postale',  $code_postale, '$ville', $numero_mobile)" ;
		$bd->exec($sql);
