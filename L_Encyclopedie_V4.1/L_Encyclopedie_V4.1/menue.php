<div id="menue">
<a href="1-dex.php"><h3>
Encyclopédie du savoire absolue est relatif V4.1
</h3></a>
<header>
<?php
//
//Affichage des menue
//



?>

<?php
$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd

$theme=$bdd->query('SELECT * FROM sujet ');// Connection a la table " sujet "
$donnees=$theme->fetch();
do
{
?>
<div class="divMenue">
<form method="POST" action="recherche.php">
<input type="texte" name="IdSujet"  value="<?php echo   $donnees['IdSujet']  ?>"id="hidden" /> 
<input type="submit" name="<?php echo   $donnees['IdSujet']  ?>"  value="<?php echo   $donnees['NomSujet']  ?>" class="boutonMenue"/> 
</form>
</div>
<?php

echo '</n>';}while($donnees=$theme->fetch()) ;

?>

</header>



<?php
@$bonjour=$_COOKIE['PSEUDO'];
$bonjour=html_entity_decode($bonjour);
$bonjour=strtoupper($bonjour);
if(isset($bonjour))
{
	echo '<aside>Bienvenue <span class="bonjour">'.$bonjour.' </span>Sur mon site !<br></aside>' ;
	
}


?>

</div>

<nav>

<a href='Connection.php' />Connection</a><br>
<a href='Inscripion.php' />Inscription</a>
<div id="admin>">
<hr>
<a href="article.php">Nouveaux article </a><br>
<a href="etiquette.php">Nouvelle étiquette </a><br>
<a href="theme.php">Nouveaux thème </a><br>
<a href="sujet.php">Nouveaux sujet </a><br>
<hr>
<a href="SUPPRIMER.php"></a>
<hr>
<a href="teste/aaa.php">teste / aaa</a>
<hr>
<hr>
<a href="zzz.php">zzz</a>
<hr>


</div>
</nav>

