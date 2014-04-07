<?php
function nb_msg($pseudo)
{
	GLOBAL $bdd;
$reponse = $bdd->query("SELECT id_group FROM groupe where pseudo = '".$pseudo."'");
$gr = $reponse->fetch();
$test = $gr['id_group'];
$nb = $bdd->query("SELECT COUNT(*) FROM coment where id_group = '".$test."'");
if (!empty($nb))
$mes = $nb->fetch();
else
$mes = array(0);
return $mes;
}
?>
