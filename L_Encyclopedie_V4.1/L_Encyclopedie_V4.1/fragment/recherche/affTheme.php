
<form method="POST" action="recherche.php" >
<?php
$req = $bdd->prepare('SELECT * FROM theme WHERE IdSujet = ?');
$req->execute(array($IdSujet));
$resultat=$req->fetch();

do// Debut de la boucle
{
?>
<div class="radio">
<input type="radio" name="IdTheme" value="<?php echo   $resultat['IdTheme']  ?>" id="<?php echo   $resultat['IdTheme']  ?>"/> <label for="<?php echo   $resultat['IdTheme']  ?>"><?php echo   $resultat['NomTheme']  ?></label><br />
</div>
<?php

echo '</n>';// Estétique vertion html
}while($resultat=$req->fetch()) ;// fin de la boucle

?>

<hr>
			<input type="submit" name="ok" class="envoyer">	<br>
		</form>
