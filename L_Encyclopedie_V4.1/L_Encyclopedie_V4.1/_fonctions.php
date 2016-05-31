<?php
//		COMPTE LE NB DE LETRRE / + doit etre entre nb_petit est nb_grand sinon erreur
function entreNb($nb_a_comparer , $nb_petit , $nb_grand ,$addresse_retour)
{
										
				$nb_a_comparer=strlen($nb_a_comparer);//  	COMPTE le nombre de lettre

if($nb_a_comparer < $nb_petit or $nb_a_comparer > $nb_grand)
{

					$_SESSION['ERREUR'] = 2;// Si top petit ou trop grand
					$_SESSION['erreur_petit'] = $nb_petit;
					$_SESSION['erreur_grand'] = $nb_grand;
					$_SESSION['addresse_retour'] = $addresse_retour;// Si le compte existe deja 

			echo '<meta http-equiv="refresh"content="0;URL=erreur.php">';// decolage vers la page erreur
			exit();
	
}

	
}

























?>