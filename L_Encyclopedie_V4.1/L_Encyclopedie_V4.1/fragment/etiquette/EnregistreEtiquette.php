<?php
//
// Inscription dans la bdd de l'etiquette
//
@$NomEtiquette=$_POST['NomEtiquette'];// On répére le NomEtiquette
@$IdTheme=$_POST['IdTheme'];// On répére l'IdTheme

//
// Verification en tout genre
//
include('_fonctions.php') ;
entreNb($NomEtiquette , 0 , 25 ,"etiquette.php");
$NomEtiquette = htmlentities($NomEtiquette) ;
$NomEtiquette = strtolower($NomEtiquette) ;


//
// TESTE Si L'ÉTIQUÉTTE EXISTE DEJÀ
//
/*
$etiquettes=$bdd->query('SELECT * FROM etiquette ');// Connection a la table " etiquette "
$donnees=$etiquettes->fetch(); 
*/

$etiquettes = $bdd->prepare('SELECT * FROM etiquette WHERE IdTheme =
?');
$etiquettes->execute(array($IdTheme));
$donnees = $etiquettes->fetch() ;
do//		debut de la boucle
{
	
	if( $NomEtiquette == $donnees['NomEtiquette'])
		{
			$_SESSION['ERREUR'] = 7;// Si le compte existe deja 
			$_SESSION['addresse_retour']='etiquette.php' ;// page de rediréction 
			echo '';// decolage vers la page erreur
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
}while($donnees = $etiquettes->fetch());//	


$Etiquette = $bdd->prepare('INSERT INTO etiquette(NomEtiquette, IdTheme) 
VALUES(:NomEtiquette,:IdTheme)');
$Etiquette->execute(array(
'NomEtiquette' => $NomEtiquette,
'IdTheme' => $IdTheme
));
$_SESSION['validation']="Etiquette _ ' $NomEtiquette '" ;
print('<meta http-equiv="refresh"content="1;URL=validation.php">');
?>


