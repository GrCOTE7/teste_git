<?php SESSION_START() ; ?>
<?php
$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd
$compte=$bdd->query('SELECT * FROM compte ');// Connection a la table " compte "
$donnees=$compte->fetch();

$_SESSION['ERREUR'] = 5;

$_SESSION['teste']=$_GET['PSEUDO'];// temp


$PSEUDO=$_GET['PSEUDO'];// On répére les PSEUDO  ...
$PASSWORD=$_GET['PASSWORD'];//		...	et les PASSWORD

//
// Verification en tout genre
//
include('_fonctions.php') ;
entreNb($PSEUDO , 4 , 25 ,"Inscripion.php");
entreNb($PASSWORD , 4 , 15 ,"Inscripion.php");

	$PSEUDO = htmlentities($PSEUDO) ;
	$PASSWORD = htmlentities($PASSWORD) ;

//	$PSEUDO =  htmlspecialchars($PSEUDO) ;
//	$PASSWORD = htmlspecialchars($PASSWORD) ;
	

//
// Si le compte éxiste
//
	
do//		debut de la boucle
{
	
	if( $PSEUDO == $donnees['PSEUDO'])
		{
			$_SESSION['ERREUR'] = 0;// Si le compte existe deja 
			
//
// Verification du mot de passe
//
				$req = $bdd->prepare('SELECT PASSWORD FROM compte WHERE PSEUDO = ?');//  Ouverture 
$req->execute(array($PSEUDO));//	d'une requête préparer
$var=$req->fetch();//	ne séléctionnant QUE le mot de passe du PSEUDO
			if( $PASSWORD != $donnees['PASSWORD'])
			{
				$_SESSION['ERREUR'] = 5;// Si le mot de passe  n'éxiste pas
			$_SESSION['addresse_retour']='connection.php' ;// page de rediréction 
			echo '';// decolage vers la page erreur
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
			}
//
// Si tout est ok pose des cookie est ouverture de session
//
			$_SESSION['PSEUDO']=$PSEUDO;
			setcookie('PSEUDO',$PSEUDO,time()+60*60*24, null,null,false,true);
			setcookie('PASSWORD',$PASSWORD,time()+60*60*24, null,null,false,true);
//
// Si c'est un admin
//
$req = $bdd->prepare('SELECT admin FROM compte WHERE PSEUDO = ?');//  Ouverture 
$req->execute(array($PSEUDO));//	d'une requête préparer
$var=$req->fetch();//	ne séléctionnant QUE l'admin  du PSEUDO
			if($donnees['admin'] == 1)
			{
				
				$_SESSION['admin']=$PSEUDO;
				setcookie('EncyclopedieV4.1_admin',$PSEUDO,time()+60*60*24, null,null,false,true);
			}

		}
}while($donnees = $compte->fetch());//	

//
// Si le compte n'éxiste pas
//
if(!isset($_SESSION['PSEUDO']) or $_SESSION['ERREUR'] == 5)
{
	
			$_SESSION['ERREUR'] = 5;// Si le compte n'éxiste pas
			$_SESSION['addresse_retour']='connection.php' ;// page de rediréction 
			echo '';// decolage vers la page erreur
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');

	
	
}
//
// Si tout est ok Retour sur le site
//

			$_SESSION['addresse_retour']='connection.php' ;// page de rediréction 
?>
<meta http-equiv="refresh"content="0;URL=<?php echo $_SESSION['addresse_retour'] ?>">
retour dans 0 segonde 