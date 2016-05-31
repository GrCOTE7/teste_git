<?php include("head.php") ?>
<?php
$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd
$theme=$bdd->query('SELECT * FROM theme ');// Connection a la table " theme "
$donnees=$theme->fetch();

@$NomTheme=$_POST['NomTheme'];// On répére le NomTheme
@$NomSujet=$_POST['NomSujet'];// On répére le NomSujet

//
// Si un theme est envoyer 
//
if(isset($NomTheme))
{

//
// Verification en tout genre
//
include('_fonctions.php') ;
	$NomTheme = htmlentities($NomTheme) ;
//	$NomTheme = strtolower($NomTheme) ;
//	entreNb($NomTheme , 5 , 15 ,'sujet.php') ;


//
// Si le theme éxiste déjà
//
	

do//		debut de la boucle
{
	
	if( $NomTheme == $donnees['NomTheme'])
		{
			$_SESSION['ERREUR'] = 17;// Si le sujet existe deja 
			$_SESSION['addresse_retour']='theme.php' ;// page de rediréction 
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
}while($donnees = $theme->fetch());
//
// On cherche l'ID du sujet
//
$req = $bdd->prepare('SELECT IdSujet FROM sujet WHERE NomSujet = ?');//  Ouverture 
$req->execute(array($NomSujet));//	d'une requête préparer
$var=$req->fetch();//	ne séléctionnant QUE le mot de passe du NomSujet





//
// Si le NomTheme n'existe pas  , on crée le theme
//
$_SESSION['erreur'] = 0;// Si Tout vas bien

if($_SESSION['erreur'] ==0)// Si Tout vas bien On enregistre le theme
{
	$req = $bdd->prepare( 'INSERT INTO theme( NomTheme , IdSujet ) VALUES( :NomTheme , :IdSujet ) ' ) ;
$req->execute( array(
'NomTheme' => $NomTheme=$_POST['NomTheme'],
'IdSujet' => $IdSujet=$_POST['IdSujet']
) ) ;

}



$_SESSION['validation']="Théme _ ' $NomTheme '" ;
print('<meta http-equiv="refresh"content="1;URL=validation.php">');


}


?>

<title>theme</title>
<?php include("head2.php") ?>

	<h1>theme</h1>

<?php include("menue.php") ?>	
<div id="corp">
<section>
	<header>
		<h2>theme</h2>
	</header>
	<article>
		<form method="POST" action="theme.php">
			<label for="NomTheme">	Poser votre theme ici  </label>
			<input type="text" name="NomTheme" placeholder="Exemple : POO " id="NomTheme" autofocus required >	<br>
			<label for="IdSujet">	selectionner votre Sujet ici  </label>
<select name="IdSujet" id="IdSujet">

<?php

$theme=$bdd->query('SELECT * FROM sujet ');// Connection a la table " sujet "
$donnees=$theme->fetch();

$_SESSION['si']=0;
do
{
$_SESSION['si']++;
?>
<option value="<?php echo   $donnees['IdSujet']  ?>"> <?php echo   $donnees['NomSujet']  ?> </option > 

<?php

echo '</n>';}while($donnees=$theme->fetch()) ;


if($_SESSION['si'] <= 1 )//	Si il n'y a pas de sujet
{
	$_SESSION['ERREUR'] = 15;
			$_SESSION['addresse_retour']='sujet.php' ;// page de rediréction 
?>
</select>
<meta http-equiv="refresh"content="0;URL=erreur.php">
<?php
			exit();
}
?>
</select >
			
			<input type="submit" name="ok" >	<br>
		</form>
	</article>

</section>

		
<?php include("footer.php") ?>

