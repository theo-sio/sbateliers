
<?php

	$chaine = $_POST[ 'chainedecaractere' ] ;
	$expression = $_POST['expression'];

echo "$chaine\n <br>";
echo "$expression\n <br>";



//$er = rtrim( fgets( STDIN ) );

//$s = rtrim(fget (STDIN) ) ;

if ( preg_match( "/mp/" , $expression ) ) {
	echo "correspondance ok\n"  ;
	}
else{
	echo "correspondance Nok\n";
}

?>
