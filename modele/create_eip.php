<?php
function add_idee($pseudo, $idee)
{
	GLOBAL $bdd;
        $reponse = $bdd->exec("INSERT INTO project (idee,compteur,vote_oui) VALUES ('".$idee."', 0, 0)") ;
         $req = $bdd->prepare("SELECT id_group FROM project WHERE $idee = :idee");
            $req->execute(array(':idee' => $idee));
			$id_group = $req->fetch();
		$reponse = $bdd->exec("INSERT INTO group (pseudo, id_group) VALUES ('".$pseudo."','".$id_group['id_group']."')") ;
}
function add_group($pseudo, $group)
{
	GLOBAL $bdd;
	$req = $bdd->prepare("SELECT id_group FROM group WHERE pseudo = :pseudo");
	$req->execute(array(':pseudo' => $pseudo));
	$id_group = $req->fetch();
	$reponse = $bdd->exec("INSERT INTO group (pseudo, id_group) VALUES ('".$group."','".$id_group['id_group']."')") ;
}

function add_cdcf($pseudo, $cdcf)
{
	GLOBAL $bdd;
	$req = $bdd->prepare("SELECT id_group FROM group WHERE pseudo = :pseudo");
	$req->execute(array(':pseudo' => $pseudo));
	$id_group = $req->fetch();
	$reponse = $bdd->exec("UPDATE project SET cdcf = '".$cdcf."' WHERE id_group = '".$id_group['id_group']."'") ;
}

function add_cdct($pseudo, $cdct)
{
	GLOBAL $bdd;
	$req = $bdd->prepare("SELECT id_group FROM group WHERE pseudo = :pseudo");
	$req->execute(array(':pseudo' => $pseudo));
	$id_group = $req->fetch();
	$reponse = $bdd->exec("UPDATE project SET cdct = '".$cdct."' WHERE id_group = '".$id_group['id_group']."'") ;
}

function sup_idee($pseudo)
{
GLOBAL $bdd;
	$req = $bdd->prepare("SELECT id_group FROM group WHERE pseudo = :pseudo");
	$req->execute(array(':pseudo' => $pseudo));
	$id_group = $req->fetch();
	$reponse = $bdd->exec("DELETE FROM vote WHERE id_group = '".$id_group['id_group']."'");
	$reponse = $bdd->exec("DELETE FROM project WHERE id_group = '".$id_group['id_group']."'");
}

function sup_group($pseudo)
{
GLOBAL $bdd;
	$reponse = $bdd->exec("DELETE FROM group WHERE pseudo= '".$pseudo."'");
}
$req = $bdd->query("SELECT idee FROM project");
$grouplist = $req->fetchAll();
?>
