	<?php include("head.php") ?>
<?php

$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie;charset=utf8','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd
$sujet=$bdd->query('SELECT * FROM sujet ');// Connection a la table " sujet "
$donnees=$sujet->fetch();

@$NomSujet=$_POST['NomSujet'];// On répére les NomSujet  ...



//
// Si un sujet est envoyer 
//
if(isset($NomSujet))
{

//
// Verification en tout genre
//
include('_fonctions.php') ;
		$NomSujet = htmlentities($NomSujet) ;
//	$NomSujet = strtolower($NomSujet) ;
//	$NomSujet = strtolower($NomSujet) ;
//	entreNb($NomSujet , 5 , 15 ,'sujet.php') ;

//
// Si le sujet éxiste déjà
//
	
do//		debut de la boucle
{
	
	if( $NomSujet == $donnees['NomSujet'])
		{
			$_SESSION['ERREUR'] = 6;// Si le sujet existe deja 
			$_SESSION['addresse_retour']='sujet.php' ;// page de rediréction 
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
}while($donnees = $sujet->fetch());

//
// Si le NomSujet n'existe pas  , on crée le sujet
//
$_SESSION['erreur'] = 0;// Si Tout vas bien

if($_SESSION['erreur'] ==0)// Si Tout vas bien On enregistre le sujet
{
	$req = $bdd->prepare( 'INSERT INTO sujet( NomSujet) VALUES( :NomSujet ) ' ) ;
$req->execute( array(
'NomSujet' => $NomSujet
) ) ;
}



$_SESSION['validation']="Sujet _ ' $NomSujet '" ;
print('<meta http-equiv="refresh"content="1;URL=validation.php">');


}

?>


<title>SUJET</title>
<?php include("head2.php") ?>

	<h1>SUJET</h1>

<?php include("menue.php") ?>	
<div id="corp">
<section>
	<header>
		<h2>SUJET</h2>
	</header>
	<article>
		<form method="POST" action="sujet.php">
			<label for="NomSujet">	Poser votre sujet ici : <br> Entre 5 et 15 Charactères maximum </label>
			<input type="text" name="NomSujet" placeholder="Exemple : POO " id="NomSujet" autofocus required >	<br>
			
			<input type="submit" name="ok" >	<br>
		</form>
	</article>

</section>

		
<?php include("footer.php") ?>

