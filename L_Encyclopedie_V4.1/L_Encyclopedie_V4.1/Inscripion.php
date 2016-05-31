
<?php include("head.php") ?>
<title>Inscripion</title>
<?php include("head2.php") ?>

	<h1>Inscripion</h1>

<?php include("menue.php") ?>	
<div id="corp">
<section>
	<header>
		<h2>Inscripion</h2>
	</header>
	<article>
		<form method="get" action="verif_inscripion.php">
			<label for="PSEUDO">	Poser le PSEUDO ici  </label>
			<input type="text" name="PSEUDO" placeholder="Exemple : <<	lansfeust	>>" id="PSEUDO" autofocus required >	<br>
			<label for="PASSWORD">	Poser le PASSWORD ici  </label>
			<input type="PASSWORD" name="PASSWORD" placeholder="Exemple : <<	lukystar	>>" id="PASSWORD" required > <br>	
			<input type="submit" name="ok" >	<br>
		</form>
	</article>

</section>

		
<?php include("footer.php") ?>

