
<?php
$req = $bdd->prepare('SELECT * FROM article WHERE IdEtiquette = ?');
$req->execute(array($IdEtiquette));
$resultat=$req->fetch();

do// Debut de la boucle
{
?>
<div class="divArticle">
<form method="GET" action="resultat.php">
<input type="texte" name="Idarticle"  value="<?php echo   $resultat['Idarticle']  ?>"id="hidden" /> 
<input type="submit" name="<?php echo   $resultat['Idarticle']  ?>"  value="<?php echo   $resultat['TITRE']  ?>" class="boutonArticle"/> 
<br>
<h2>
<?php
echo   $resultat['SOUSTITRE']
?>
</h2>
</form>
</div>
<?php

echo '</n>';// Estétique vertion html
}while($resultat=$req->fetch()) ;// fin de la boucle

?>

			
			
