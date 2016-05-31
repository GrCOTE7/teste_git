<?php
SESSION_START() ;
$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd
$compte=$bdd->query('SELECT * FROM compte ');// Connection a la table " compte "
$donnees=$compte->fetch();

$PSEUDO=$_GET['PSEUDO'];// On répére les PSEUDO  ...
$PASSWORD=$_GET['PASSWORD'];//		...	et les PASSWORD

//
// Verification en tout genre
//
include('_fonctions.php') ;
entreNb($PSEUDO , 4 , 25 ,"Inscripion.php");
entreNb($PASSWORD , 4 , 15 ,"Inscripion.php");


//	$PSEUDO = strip_tags($PSEUDO) ;
//	$PASSWORD = strip_tags($PASSWORD) ;

$PSEUDO = htmlentities($PSEUDO) ;
$PASSWORD = htmlentities($PASSWORD) ;

/* 
$PSEUDO = htmlspecialchars($PSEUDO) ;
$PASSWORD = htmlspecialchars($PASSWORD) ; 
*/

$PSEUDO = strtolower($PSEUDO) ;
$PASSWORD = strtolower($PASSWORD) ;
//
// Si le compte éxiste déjà
//
	
do//		debut de la boucle
{
	
	if( $PSEUDO == $donnees['PSEUDO'])
		{
			$_SESSION['ERREUR'] = 1;// Si le compte existe deja 
			$_SESSION['addresse_retour']='Inscripion.php' ;// page de rediréction 
			echo '';// decolage vers la page erreur
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
}while($donnees = $compte->fetch());//	


//
// Si le pseudo n'existe pas  , on crée le compte
//
$_SESSION['ERREUR'] = 0;// Si Tout vas bien

if($_SESSION['ERREUR'] ==0)// Si Tout vas bien On enregistre le compte
{
	$req = $bdd->prepare( 'INSERT INTO compte( PSEUDO, PASSWORD ) VALUES( :PSEUDO,:PASSWORD ) ' ) ;
$req->execute( array(

'PSEUDO' => $PSEUDO,
'PASSWORD' => $PASSWORD
) ) ;
?>
<p>votre compte a bien été crée </p>
<meta http-equiv="refresh"content="5;URL=Inscripion.php">
<?php
}



?>