<?php
include dirname(__FILE__).'/../modele/auth.php';
if(isset($_POST['submit']) && $_POST['submit'] == 1)
{
    $errormsg=register();
	if($errormsg === TRUE)
	{
        echo 'Connect Success';
		$_SESSION['login'] = 'OK';
		$_SESSION['user'] = $_POST['Eid'];
		header('location: index.php?page=panel_eip');
		die();
	}
	else 
	{
		echo 'Something went wrong :'.$errormsg;
	}
}
include dirname(__FILE__).'/../vues/auth.php';
?>
