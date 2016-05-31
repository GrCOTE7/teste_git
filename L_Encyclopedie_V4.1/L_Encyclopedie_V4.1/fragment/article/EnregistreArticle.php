<?php
//
// Inscription dans la bdd de l'ARTICLE
//
$TITRE=$_POST['titre'];// On récupére le titre
$SOUSTITRE=$_POST['sousTitre'];// On récupére le sousTitre
$DESCRIPTION=$_POST['textarea'];// On récupére le textarea
$EXEMPLE=$_POST['exemple'];// On récupére le exemple
$IdEtiquette=$_POST['etiquette'];// On récupére le IdEtiquette
@$SOURCE=$_POST['source'];// On récupére le exemple

@$img1=$_FILES['img1']['name'] ;

//
// Verification en tout genre
//
include('_fonctions.php') ;
$TITRE = htmlentities($TITRE) ;
$TITRE = strtolower($TITRE) ;
$SOUSTITRE = htmlentities($SOUSTITRE) ;
$SOUSTITRE = strtolower($SOUSTITRE) ;
 
//
// Si un des formilaires est vide (exeption de la source)
//
if($IdEtiquette== null or $IdEtiquette== 0 or $IdEtiquette== "")// Si il n'y a pas de $IdEtiquette
		{
			$_SESSION['ERREUR'] = 8;
			$_SESSION['addresse_retour']='etiquette.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
if( $EXEMPLE== null)// Si il n'y a pas de $EXEMPLE
		{
			$_SESSION['ERREUR'] = 9;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
if( $DESCRIPTION== null)// Si il n'y a pas de $DESCRIPTION
		{
			$_SESSION['ERREUR'] = 10;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
if( $SOUSTITRE== null)// Si il n'y a pas de $SOUSTITRE
		{
			$_SESSION['ERREUR'] = 11;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}
if( $TITRE== null)// Si il n'y a pas de $TITRE
		{
			$_SESSION['ERREUR'] = 12;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
		}

//
// Reception des Images
//

 if(!empty($_FILES['img1']['type']) )// SI il y a reception d'une image
{
		
		

                $infosfichier = pathinfo($TITRE);// On récupère le titre 
                $name = $infosfichier['filename'];//On rend le titre lisible
                $infostype = pathinfo($_FILES['img1']['type']);// On récupère le format du fichier 
                $extension_upload = $infostype['filename'];//On rend le format lisible
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
// Testons si l'extension est autorisée
	foreach($extensions_autorisees as $element)
	{
		if($extension_upload == $element)
		{
			$autorisation_img1 = 'ok';
		}
	}
	if($autorisation_img1 != 'ok')
	{
		$_SESSION['ERREUR'] = 14;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
	}

        $img1name = $name. '.' .$extension_upload;// on << Colle >> le nom ET le format
        $img1name = '' .time(). '' .$name. '.img1.' .$extension_upload;// on << Colle >> le nom ET le format + un code pour les rendre unique 


move_uploaded_file($_FILES['img1']['tmp_name'], 'ImgArticle/' .basename("$img1name"));// Enregistrement dans le dossier <<	ImgArticle/ >>

}
else
{
	$img1name=0 ;
}

 if(!empty($_FILES['img2']['type']) )// SI il y a reception d'une image
{
		
		

                $infosfichier = pathinfo($TITRE);// On récupère le titre 
                $name = $infosfichier['filename'];//On rend le titre lisible
                $infostype = pathinfo($_FILES['img2']['type']);// On récupère le format du fichier 
                $extension_upload = $infostype['filename'];//On rend le format lisible
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
// Testons si l'extension est autorisée
	foreach($extensions_autorisees as $element)
	{
		if($extension_upload == $element)
		{
			$autorisation_img2 = 'ok';
		}
	}
	if($autorisation_img2 != 'ok')
	{
		$_SESSION['ERREUR'] = 14;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
	}

        $img2name = $name. '.' .$extension_upload;// on << Colle >> le nom ET le format
        $img2name = '' .time(). '' .$name. '.img2.' .$extension_upload;// on << Colle >> le nom ET le format + un code pour les rendre unique 


move_uploaded_file($_FILES['img2']['tmp_name'], 'ImgArticle/' .basename("$img2name"));// Enregistrement dans le dossier <<	ImgArticle/ >>

}
else
{
	$img2name=0 ;
}
 if(!empty($_FILES['img3']['type']) )// SI il y a reception d'une image
{
		
		

                $infosfichier = pathinfo($TITRE);// On récupère le titre 
                $name = $infosfichier['filename'];//On rend le titre lisible
                $infostype = pathinfo($_FILES['img3']['type']);// On récupère le format du fichier 
                $extension_upload = $infostype['filename'];//On rend le format lisible
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','JPG', 'JPEG', 'GIF', 'PNG');
// Testons si l'extension est autorisée
	foreach($extensions_autorisees as $element)
	{
		if($extension_upload == $element)
		{
			$autorisation_img3 = 'ok';
		}
	}
	if($autorisation_img3 != 'ok')
	{
		$_SESSION['ERREUR'] = 14;
			$_SESSION['addresse_retour']='article.php' ;
			exit('<meta http-equiv="refresh"content="0;URL=erreur.php">');
	}

        $img3name = $name. '.' .$extension_upload;// on << Colle >> le nom ET le format
        $img3name = '' .time(). '' .$name. '.img3' .$extension_upload;// on << Colle >> le nom ET le format + un code pour les rendre unique 


move_uploaded_file($_FILES['img3']['tmp_name'], 'ImgArticle/' .basename("$img3name"));// Enregistrement dans le dossier <<	ImgArticle/ >>

}
else
{
	$img3name=0 ;
}







//
//Enregistrement de l'ARTICLE
//


$article = $bdd->prepare('INSERT INTO article(TITRE, SOUSTITRE, DESCRIPTION, EXEMPLE, SOURCE, IdEtiquette,img1,img2,img3) 
VALUES(:TITRE,:SOUSTITRE,:DESCRIPTION,:EXEMPLE,:SOURCE,:IdEtiquette,:img1,:img2,:img3)');

$article->execute(array(
'TITRE' => $TITRE,
'SOUSTITRE' => $SOUSTITRE,
'DESCRIPTION' => $DESCRIPTION,
'EXEMPLE' => $EXEMPLE,
'SOURCE' => $SOURCE,
'IdEtiquette' => $IdEtiquette,
'img1' => $img1name,
'img2' => $img2name,
'img3' => $img3name
));
$_SESSION['validation']="ARTICLE _ ' $TITRE '" ;
print('<meta http-equiv="refresh"content="1;URL=validation.php">');
?>