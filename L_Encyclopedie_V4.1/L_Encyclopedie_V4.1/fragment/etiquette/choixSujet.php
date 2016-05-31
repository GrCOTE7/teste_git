<?php

$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd

?>

<form method="POST" action="etiquette.php"><!--   a changer !!!!! -->
			<label for="LabelSujet">	selectionner votre Sujet ici  </label>
<select name="IdSujet" id="LabelSujet">

<?php

$sujet=$bdd->query('SELECT * FROM sujet ');// Connection a la table " sujet "
$donnees=$sujet->fetch();
do
{
?>
<option value="<?php echo   $donnees['IdSujet']  ?>"> <?php echo   $donnees['NomSujet']  ?> </option > 

<?php

echo '</n> ';// Estétique vertion html

}while($donnees=$sujet->fetch()) ;

?>
</select >
			
			<input type="submit" name="ok" >	<br>
		</form>



