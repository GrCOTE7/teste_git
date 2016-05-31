
<form method="POST" action="recherche.php" >
<?php
$req = $bdd->prepare('SELECT * FROM etiquette WHERE IdTheme = ?');
$req->execute(array($IdTheme));
$resultat=$req->fetch();

do// Debut de la boucle
{
?>

<div class="radio">
<input type="radio" name="IdEtiquette" value="<?php echo   $resultat['IdEtiquette']  ?>" id="<?php echo   $resultat['IdEtiquette']  ?>"/> <label for="<?php echo   $resultat['IdEtiquette']  ?>"><?php echo   $resultat['NomEtiquette']  ?></label><br />
</div>
<?php

echo '</n>';// Estétique vertion html
}while($resultat=$req->fetch()) ;// fin de la boucle

?>

<hr>
			<input type="submit" name="ok" class="envoyer">	<br>
		</form>
