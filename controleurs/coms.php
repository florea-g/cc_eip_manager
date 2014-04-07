<?php
include dirname(__FILE__).'/../modele/coms.php';

$com = aff_com($_SESSION['user']);
if (empty($com)) { 
	
$coms = array();
}
else
$coms = $com->fetchAll();

include dirname(__FILE__).'/../vues/coms.php';
?>
