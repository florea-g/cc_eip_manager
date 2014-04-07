<?php
include dirname(__FILE__).'/../modele/log.php';
if(isset($_POST['id']) && isset($_POST['passwd']))
{
	if(!empty($_POST['id']) && !empty($_POST['passwd']))
	{
		$pseudo = $_POST['id'];
		$passwd = $_POST['passwd'];
		if(verif($pseudo, $passwd))
		{
			header('location: index.php?page=panel_eip');
			die();
		}
	}
}
header('location: index.php');
?>