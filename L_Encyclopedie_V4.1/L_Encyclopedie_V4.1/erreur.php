<?php
SESSION_START();
$temp=6;

$ERREUR=$_SESSION['ERREUR'];

echo '<hr>'.$_SESSION['ERREUR'];

if(!isset($ERREUR))
{
	$ERREUR=999;
}
switch ( $ERREUR) 

{
case 999: 
	?>
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php
	exit('<div class="alarm">ERREUR INCONNUE DETECTER !');
break;
case 0: 
	?>
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php
	exit('AUCUNE <div class="alarm">ERREUR DETECTER !');
break;
case 1: 
	echo '<meta http-equiv="refresh"content="6;URL=Inscripion.php">';
//	exit('<div class="alarm">ERREUR LE COMPTE EXISTE DEJA !');

	?><div class="alarm">ERREUR LE COMPTE EXISTE DEJA ! 
	<hr> Retour dans <?php echo $temp; ?> segondes
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
exit();
case  2      : 
		$_SESSION['erreur_petit'];// Si le formulaire est pas asser remplie  
		$_SESSION['erreur_grand'] ;// Si le formulaire est trop remplie 
		$_SESSION['addresse_retour'] ;// Si le compte existe deja 

	?> <div class="alarm">ERREUR    Le formulaire doit etre entre <?php echo $_SESSION['erreur_petit'];?> Et <?php echo $_SESSION['erreur_grand'].' Charactères' ;?>
	<hr> Retour dans <?php echo $temp; ?> segondes
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
exit();
case  3      : 
?>	 '<div class="alarm">ERREUR    Le formulaire est mal remplie';
	 '<hr><div class="alarm">ERREUR    mot de passe ne correspond pas <hr>';
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  4      : 
?>	
	<div class="alarm">ERREUR    : AUCUN PARENT N'AS ETE SELECTIONNER !
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='http://localhost/L_Encyclopedie_V4/L_Encyclopedie_V4/L_Encyclopedie_du_savoir_%20relatif_et_%20absolu_V4/parent.php'  ">';
<?php	exit();
break;
case  5      : 
?>	
	<div class="alarm">ERREUR    compte inexistant
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  6      : 
?>	
	<div class="alarm">ERREUR    le sujet existe dejà !
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  7      : 
?>	
	<div class="alarm">ERREUR    L'ÉTIQUÉTTE EXISTE DEJÀ
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  8      : 
?>	
	<div class="alarm">ERREUR    il n'y a pas d'Etiquette
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  9      : 
?>	
	<div class="alarm">ERREUR    il n'y a pas d'EXEMPLE
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  10      : 
?>	
	<div class="alarm">ERREUR    il n'y a pas de DESCRIPTION
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  11      : 
?>	
	<div class="alarm">ERREUR    il n'y a pas de SOUSTITRE
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  12      : 
?>	
	<div class="alarm">ERREUR    il n'y a pas de TITRE
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  13      : 
?>	
	<div class="alarm">ERREUR    seul les image sont accépté !!! 
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  14      : 
?>	
	<div class="alarm">ERREUR    Le format de l'image est incorrecte
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit() ;
break;
case  15      : 
?>	
	<div class="alarm">ERREUR    Le sujet est inéxistant
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  16      : 
?>	
	<div class="alarm">ERREUR    Le théme est inéxistant
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  17      : 
?>	
	<div class="alarm">ERREUR    le théme existe déjà !!
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
case  ________________________________________________      : 
?>	
	<div class="alarm">ERREUR    __________________________________________________
	<meta http-equiv="refresh"content="<?php echo $temp; ?>;URL='<?php echo $_SESSION['addresse_retour']; ?>'  ">';
<?php	exit();
break;
}
?>