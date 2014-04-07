<?php
if(!isset($_SESSION['user']))
{
	$_SESSION['user'] = '';
	
}
include(dirname(__FILE__).'/../vues/home.php');
?>