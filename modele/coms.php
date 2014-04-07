<?php
function add_com($pseudo, $com, $id_group)
{
	GLOBAL $bdd;
	$reponse = $bdd->prepare("SELECT droit FROM user where pseudo = :pseudo");
    $reponse->execute(array( ':pseudo' => $pseudo));
	$droit = $reponse->fetch();

if ($droit['droit'] == 1)
	{
	$reponse = $bdd->query("SELECT id_group FROM groupe where pseudo = '".$pseudo."'");
	$gr = $reponse->fetch();
	$reponse = $bdd->exec("INSERT INTO coment (id_group, com, emplacement, author) VALUES('".$gr['id_group']."', '".$com."', 2, '".$pseudo."')");
	}
else
	$reponse = $bdd->exec("INSERT INTO coment (id_group, com, emplacement, author) VALUES('".$id_group."', '".$com."', 2, '".$pseudo."')");
}

function aff_com($pseudo)
{
	GLOBAL $bdd;
$reponse = $bdd->query("SELECT id_group FROM groupe where pseudo = '".$pseudo."'");
$gr = $reponse->fetch();
$test = $gr['id_group'];
$comment = $bdd->query("SELECT * FROM coment where id_group = ".$test." ORDER BY date ASC");
return $comment;
}

function aff_adm($gr)
{
	GLOBAL $bdd;
$comment = $bdd->query("SELECT * FROM coment where id_group = ".$gr." ORDER BY date ASC");
return $comment;
}
?>
