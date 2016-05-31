<?php include("head.php") ?>
<title>recherche</title>
<?php include("head2.php") ?>

	<h1>recherche</h1>

<?php include("menue.php") ?>	
<div id="corp">
<?php
@$IdSujet=$_POST["IdSujet"];
@$IdTheme=$_POST["IdTheme"];
@$IdEtiquette=$_POST["IdEtiquette"];

//
// Si rien n'est envoyer on affiche les thémes
//

if(isset($IdSujet))
{
include("fragment/recherche/affTheme.php");
}
//
// sI UN THEME A ETE ENVOYER
//

if(isset($IdTheme))
{
include("fragment/recherche/affEtiquette.php");
}

//
// sI UNe etiquette  A ETE ENVOYER
//

if(isset($IdEtiquette))
{
include("fragment/recherche/affArticle.php");
}










 include("footer.php") ?>
