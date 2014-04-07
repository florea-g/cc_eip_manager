<?php
function profil($pseudo)
{
	GLOBAL $bdd;
$reponse = $bdd->prepare("SELECT pseudo, nom, prenom, passwd, picture, mail, droit, date FROM user where pseudo = :pseudo");
$repnse->execute(array( ':pseudo' => $pseudo));
$profil = $reponse->fetch();

return $profil;
}
?>
