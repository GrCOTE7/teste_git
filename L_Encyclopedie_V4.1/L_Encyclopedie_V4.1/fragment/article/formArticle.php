 <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
		
<form action="article.php" method="post" enctype="multipart/form-data">
<label for="etiquette">	selectionner votre etiquette ici  </label>
<select name="etiquette" id="etiquette">
<option value="" selected> Choisisser une étiquètte</option > 
<?php


$etiquette = $bdd->prepare('SELECT * FROM etiquette WHERE IdTheme = ?');
$etiquette->execute(array($IdTheme));
$resultat=$etiquette->fetch();

$_SESSION['si']=0 ;
do
{
	$_SESSION['si']++ ;
?>
<option value="<?php echo   $resultat['IdEtiquette']  ?>"> <?php echo   $resultat['NomEtiquette']  ?> </option > 

<?php

echo '</n>';}while($resultat=$etiquette->fetch()) ;


if($_SESSION['si'] <= 1 )//	Si il n'y a pas d'etiquette
{
	$_SESSION['ERREUR'] = 8;
			$_SESSION['addresse_retour']='etiquette.php' ;// page de rediréction 
?>	
</select>
<meta http-equiv="refresh"content="0;URL=erreur.php">
<?php
			exit();
}

?>

</select >
<hr>
<label for="titre">
placer votre titre ici
</label>
<input type="text" name="titre"  placeholder="		"  id="titre"> <hr>

<label for="sous-titre">
Le sous titre sers au moteur de recherche
</label>
<input type="text" name="sousTitre"  placeholder="soyer cour mais concie"  id="sous-titre">
<br><input type="submit" name="ok"  placeholder="		"   class="envoyer">
<hr>

<label for="img1">
L'image n°1
</label>
<input type="file" name="img1" id="img1"/><hr />
<strong>
Code de couleur :<br>
Sujet => Bleu , Bras .<br>
Danger => Gras , Surlignée rouge  .<br>
Alert => Gras , Surlignée Orange  .<br>
</strong>
<label for="textarea">
Placer votre article ici <br>
</label>

<textarea name="textarea" id="textarea" rows="50" cols="160">

            </textarea>
            <script>
                CKEDITOR.replace( 'textarea' );
            </script>
			<hr>
			
<label for="img2">
L'image n°2
</label>
<input type="file" name="img2" id="img2"/><hr />

<label for="exemple">
Placer votre exemple ici <br>
</label>
<strong>
Code couleur :<br>
Variable => Rouge .<br>
Variable Super-globale=> Gras bleu .<br>
Fonction => Bleu .<br>
Chiffre  => Orange .<br>
Lettre  => Gris .<br>
Commentaire  => Vers .<br>
</strong>

<textarea id="exemple" name="exemple" rows="50" cols="160" >

</textarea>
            <script>
                
                CKEDITOR.replace( 'exemple' );
            </script>

<hr>



<label for="source">
source
</label>
<input type="text" name="source"  placeholder="placer votre source ici"  id="source"><hr>

<label for="submit">
une fois prêt apuis sur
</label>
<hr>
<input type="submit" name="ok"  placeholder="		"   class="envoyer"><hr>






</form>