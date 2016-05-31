<?php include("head.php") ?>
<link rel="stylesheet" href="resultat.css" />
<title>L'Encyclopedie V4.1</title>
<?php include("head2.php") ?>

	<h1>index</h1>

<?php include("menue.php") ?>	
<div id="corp">



<?php
//		$Idarticle=$_POST["Idarticle"];
$Idarticle=$_GET["Idarticle"];

$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd
$req = $bdd->prepare('SELECT * FROM article WHERE Idarticle = ?');
$req->execute(array($Idarticle));
$resultat=$req->fetch();

?>
<h1> <?php echo   $resultat['TITRE']  ?> </h1>
<h2> <?php echo   $resultat['SOUSTITRE']  ?> </h2>

<section id="DESCRIPTION">
<!--
Si il y a une image
-->
<?php

if(isset($resultat['img1']))
{
?>
	<img src='ImgArticle/<?php echo $resultat['img1'] ; ?> ' />

<?php
}
?>
	<P><?php echo   $resultat['DESCRIPTION']  ?></P>
</section>

<section id="EXEMPLE">
	<P><?php echo   $resultat['EXEMPLE']  ?></P>
</section>

<section id="SOURCE">
	<P><?php echo   $resultat['SOURCE']  ?></P>
</section>
	
			


		
<?php include("footer.php") ?>
