
<form method="POST" action="etiquette.php">

	<label for="LabelNomEtiquette">	taper votre etiquette ici  </label>
	<input type="text" name="NomEtiquette" id="LabelNomEtiquette" autofocus required  /> 
<br>
	<h3>Séléctionner votres théme :</h3>		
<?php
//
// Affichage des Thémes par séléction du Sujet
//

$req = $bdd->prepare('SELECT * FROM theme WHERE IdSujet = ?');
$req->execute(array($IdSujet));
$resultat=$req->fetch();

$_SESSION['si']=0;
do// Debut de la boucle
{
$_SESSION['si']++;
?>
<!--		<option value="<?php echo   $resultat['IdTheme']  ?>"> <?php echo   $resultat['NomTheme']  ?> </option > 
	<label for="LabelSujet">	selectionner votre theme ici  </label>
	<select name="IdTheme" id="LabelSujet">
	<option value="" selected >selectionner un Théme</option > 

</select>
-->

<div class="radio">
<input type="radio" name="IdTheme" value="<?php echo   $resultat['IdTheme']  ?>" id="<?php echo   $resultat['IdTheme']  ?>"/> <label for="<?php echo   $resultat['IdTheme']  ?>"><?php echo   $resultat['NomTheme']  ?></label><br />
</div>
<?php


echo '</n>';// Estétique vertion html
}while($resultat=$req->fetch()) ;// fin de la boucle


if($_SESSION['si'] <= 1 )//	Si il n'y a pas de sujet
{
	$_SESSION['ERREUR'] = 16;
			$_SESSION['addresse_retour']='theme.php' ;// page de rediréction 
?>
<meta http-equiv="refresh"content="0;URL=erreur.php">
<?php
			exit();
}

?>
</select >
			
			<input type="submit" name="ok" >	<br>
		</form>
