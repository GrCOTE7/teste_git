<?php 
@$IdSujet=$_POST['IdSujet'];// On répére le NomSujet
@$IdTheme=$_POST['IdTheme'];// On répére l'IdTheme
@$NomEtiquette=$_POST['NomEtiquette'];// On répére l'NomEtiquette


include("head.php") ?>
<title>étiquétte</title>
<?php include("head2.php") ?>

	<h1>étiquétte</h1>

<?php include("menue.php") ?>	
<div id="corp">
<?php
//
// si AUCUN FORMULAIRE EST REMPLIE
//
if(!isset($IdSujet))
{
	include("fragment/etiquette/choixSujet.php") ;
}

//
// si LE FORMULAIRE DE SUJET EST REMPLIE
//
if(isset($IdSujet))
{

// Afficharge du Sujet séléctionner en h1

$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd

$sujet = $bdd->prepare('SELECT * FROM sujet WHERE IdSujet = ?');
$sujet->execute(array($IdSujet));
$resultat=$sujet->fetch();
echo '<h2> '.$resultat['NomSujet'].' </h2>';


// Traitement de l'Étiquette

	include("fragment/etiquette/PoseEtiquette.php") ;
}


//
// si UNE ETIQUETTE EST ENVOYER
//
if(isset($NomEtiquette))// Teste si un nom est envoyer
{
	if(isset($IdTheme))// Teste si un theme est envoyer
	{
		include("fragment/etiquette/EnregistreEtiquette.php") ;
	}
	else
	{ 
		
		$_SESSION['erreur'] = 4;
		$_SESSION['addresse_retour']='etiquette.php' ;// page de rediréction 
		echo '';// decolage vers la page erreur
		exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		
	}

}

?>



		
<?php include("footer.php") ?>
