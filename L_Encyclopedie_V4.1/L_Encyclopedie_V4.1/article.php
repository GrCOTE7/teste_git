<?php 
@$IdSujet=$_POST['IdSujet'];// On répére le NomSujet
@$IdTheme=$_POST['IdTheme'];// On répére l'IdTheme
@$TITRE=$_POST['titre'];// On récupére le titre


include("head.php") ?>
<title>article</title>
<?php include("head2.php") ?>

	<h1>article</h1>

<?php include("menue.php") ?>	
<div id="corp">
<?php
//
// si AUCUN FORMULAIRE EST REMPLIE
//

// Si un theme est choisi on saute cette partie
// SI aucune information n'est envoyer proposer un Sujet
	if(!isset($IdSujet) and !isset($IdTheme) and !isset($TITRE))
{
	include("fragment/article/choixSujet.php") ;
}


//
// si LE FORMULAIRE DE SUJET EST REMPLIE On propose les différents thémes disponibles
//
if(isset($IdSujet))
{

// Afficharge du Sujet séléctionner en h1

$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd

$sujet = $bdd->prepare('SELECT * FROM sujet WHERE IdSujet = ?');
$sujet->execute(array($IdSujet));
$resultat=$sujet->fetch();
echo '<h2> '.$resultat['NomSujet'].' </h2>';


// Traitement de l'article

	include("fragment/article/choixTheme.php") ;
}


//
// si un theme est choisi ouverture du formulaire de saisi d'un article
//
if(isset($IdTheme))
{
	include("fragment/article/formArticle.php") ;
}

//
// si un formulaire est envoyer enregistrement d'un article
//
if(isset($TITRE))
{
	include("fragment/article/EnregistreArticle.php") ;
}


?>



		
<?php include("footer.php") ?>
