<?php
function verif($pseudo, $passwd)
{
	GLOBAL $bdd;
	$reponse = $bdd->prepare("SELECT pseudo, droit, picture FROM user where pseudo = :pseudo  AND passwd = :passwd ");
	$reponse->execute(array( ':pseudo' => $pseudo, ':passwd' => $passwd));
	$existe = $reponse->fetch();
	if(!empty($existe))
		{
			$_SESSION['droit'] = $existe['droit'];
			$_SESSION['picture'] = $existe['picture']; 
			$_SESSION['login'] = 'OK';
			$_SESSION['user'] = $existe['pseudo'];
			return TRUE;
		}
		else
		{	
			return FALSE;
		}

}
?>
