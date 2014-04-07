<?php
function show_gr()
{
	GLOBAL $bdd;
         $req = $bdd->query("SELECT * FROM project ");
			$nb = $req->fetchAll();
			return $nb;
}

?>